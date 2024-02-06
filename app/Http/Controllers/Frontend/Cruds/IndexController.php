<?php

namespace App\Http\Controllers\Frontend\Cruds;

use App\Http\Controllers\Controller;
use App\Models\FrontendIndex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new FrontendIndex();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.frontend.index.';
        $this->data['moduleName'] = 'pages';
    }
    public function index()
    {
        $this->data['index'] = $this->_model::all();
        return view( $this->_viewPath.'list-frontend-index', $this->data);
    }


    public function create()
        {
            return view( $this->_viewPath.'create-frontend-index');
        }

        public function store(Request $request)
        {
            $request->validate([
                'index_image_heading' => 'required',
                'index_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'index_card_image_heading' => 'required',
                'index_card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'index_card_image_description' => 'required', // Add validation for index_card_image_description
            ]);

            $indexImageName = $this->handleFileUpload($request, 'index_image', 'frontend_index');
            $indexCardImageName = $this->handleFileUpload($request, 'index_card_image', 'frontend_index');
            $data = $request->all();
            $data['index_image'] = $indexImageName;
            $data['index_card_image'] = $indexCardImageName;
            $this->_model::create($data);
            return redirect()->back()->with('success', 'Item created successfully.');
        }

        public function edit($id)
        {
            $this->data['index'] = $this->_model::findOrFail($id);
            return view( $this->_viewPath.'edit-frontend-index', $this->data);
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'index_image_heading' => 'required',
                'index_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'index_card_image_heading' => 'required',
                'index_card_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'index_card_image_description' => 'required',

            ]);

            $frontendIndex = FrontendIndex::findOrFail($id);

            $data = $request->all();

            if ($request->hasFile('index_image')) {

                $this->deleteFiles($frontendIndex->index_image);

                $data['index_image'] = $this->handleFileUpload($request, 'index_image', 'frontend_index');
            }
            if ($request->hasFile('index_card_image')) {

                $this->deleteFiles($frontendIndex->index_card_image);

                $data['index_card_image'] = $this->handleFileUpload($request, 'index_card_image', 'frontend_index');
            }
            $frontendIndex->update($data);

            return redirect()->back()
                ->with('success', 'Item updated successfully.');
        }


        public function destroy($id)
        {
            $frontendIndex = $this->_model::findOrFail($id);
            $this->deleteFiles($frontendIndex->index_image);
            $this->deleteFiles($frontendIndex->index_card_image);
            $frontendIndex->delete();

            return redirect()->back()
                ->with('success', 'Item deleted successfully.');
        }
        private function deleteFiles($filePath)
        {
            if ($filePath) {
                $fullPath = public_path($filePath);
                if (File::exists($fullPath)) {
                    File::delete($fullPath);
                }
            }
        }

        private function handleFileUpload($request, $fieldName,$folderName)
        {

            if ($request->hasFile($fieldName)) {
                $image = $request->file($fieldName);
                $imageName = time() . '_' . $image->getClientOriginalName();

                $directory = public_path('assets/images/library_images/'.$folderName.'/');

                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $image->move($directory, $imageName);

                return 'assets/images/library_images/'.$folderName.'/'. $imageName;
            }

            return null;
        }
}
