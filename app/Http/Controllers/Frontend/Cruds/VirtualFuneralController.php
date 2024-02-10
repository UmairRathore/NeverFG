<?php

namespace App\Http\Controllers\Frontend\Cruds;

use App\Http\Controllers\Controller;
use App\Models\FrontendFeature;
use App\Models\FrontendVirtualFuneral;
use App\Models\pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class VirtualFuneralController extends Controller
{
    //
    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new FrontendVirtualFuneral();
        $this->_pdf_model = new pdf();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.frontend.virtualfuneral.';
        $this->data['moduleName'] = 'pages';
    }
    public function index()
    {
        $this->data['virtualFuneral'] = $this->_model::all();
        return view( $this->_viewPath.'list-frontend-virtualfuneral', $this->data);
    }


    public function create()
    {
        return view( $this->_viewPath.'create-frontend-virtualfuneral');
    }

    public function store(Request $request)
    {
        $request->validate([
            'frontend_virtual_funeral_description' => 'required',
            'frontend_virtual_funeral_title' => 'required',
            'frontend_virtual_funeral_image' => 'required',
        ]);

        $data['frontend_virtual_funeral'] = $this->_model;
        $data['frontend_virtual_funeral']->frontend_virtual_funeral_title =$request->frontend_virtual_funeral_title;
        $data['frontend_virtual_funeral']->frontend_virtual_funeral_description =$request->frontend_virtual_funeral_description;
        $FeatureImageName = $this->handleFileUpload($request, 'frontend_virtual_funeral_image', 'frontend_funeral');

        $data['frontend_virtual_funeral']->frontend_virtual_funeral_image = $FeatureImageName;

        $check = $data['frontend_virtual_funeral']->save();
        if ($check) {
            $msg = "Virtual Funeral added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Virtual Funeral not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['virtualFuneral'] = $this->_model::findOrFail($id);
        return view( $this->_viewPath.'edit-frontend-virtualfuneral', $this->data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'frontend_virtual_funeral_description' => 'required',
            'frontend_virtual_funeral_title' => 'required',
            'frontend_virtual_funeral_image' => 'required',
        ]);
        $data['frontend_virtual_funeral'] = $this->_model::find($id);
        $data['frontend_virtual_funeral']->frontend_virtual_funeral_title =$request->frontend_virtual_funeral_title;
        $data['frontend_virtual_funeral']->frontend_virtual_funeral_description =$request->frontend_virtual_funeral_description;
        if ($request->file('frontend_virtual_funeral_image')) {

            $this->deleteFiles(  $data['frontend_virtual_funeral']->frontend_virtual_funeral_image);

            $FeatureImageName = $this->handleFileUpload($request, 'frontend_virtual_funeral_image', 'frontend_funeral');
        }
        $data['frontend_virtual_funeral']->frontend_virtual_funeral_image = $FeatureImageName;

        $check = $data['frontend_virtual_funeral']->save();
        if ($check) {
            $msg = "Virtual Funeral updated successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Virtual Funeral not updated successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }


    public function destroy($id)
    {
        $data['frontend_virtual_funeral'] = $this->_model::find($id);
        $this->deleteFiles( $data['frontend_virtual_funeral']->frontend_virtual_funeral_image);

        $check = $data['frontend_virtual_funeral']->delete();
        if ($check) {
            $msg = "Virtual Funeral deleted successfully.";
            Session::flash('info_deleted', $msg);
        } else {
            $msg = "Virtual Funeral not deleted successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
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

        if ($request->file($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = public_path('assets/images/frontend/'.$folderName.'/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, $imageName);

            return 'assets/images/frontend/'.$folderName.'/'. $imageName;
        }

        return null;
    }



    public function indexPdf()
    {
        $this->data['pdf'] = $this->_pdf_model::all();
        return view( 'backend.pdf.list-pdf', $this->data);
    }


    public function createPdf()
    {
        return view( 'backend.pdf.create-pdf');
    }

    public function storePdf(Request $request)
    {

        $request->validate([
            'information_pdf' => 'required',
        ]);

        $pdf = $this->pdfhandleFileUpload($request, 'information_pdf', 'documents');

        // Create new record with uploaded file path
        $data = [
            'information_pdf' => $pdf,
        ];
        $pdfSAVE = new pdf() ;
        $pdfSAVE->information_pdf = $data['information_pdf'];
        $check= $pdfSAVE->save();

        if ($check) {
            $msg = "PDf added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "PDF not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function editPdf($id)
    {
        $this->data['pdf'] = $this->_pdf_model::findOrFail($id);
        return view( 'backend.pdf.edit-pdf', $this->data);
    }

    public function updatePdf(Request $request, $id)
    {
        $request->validate([
            'information_pdf' => 'required',
        ]);

        $pdf = $this->_pdf_model::find($id);
//        dd($pdf);
        $data[] = '';
        if ($request->file('information_pdf')) {
              $this->pdfdeleteFiles($pdf->information_pdf);

            $data['information_pdf'] = $this->pdfhandleFileUpload($request, 'information_pdf', 'documents');
//      dd($data['pdf']);
        }


        $check = $pdf->update($data);

        if ($check) {
            $msg = "PDf updated successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "PDF not updated successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }


    public function destroyPdf($id)
    {
        $pdf = $this->_pdf_model::findOrFail($id);
        $this->pdfdeleteFiles($pdf->information_pdf);
        $check = $pdf->delete();
        if ($check) {
            $msg = "PDf deleted successfully.";
            Session::flash('info_deleted', $msg);
        } else {
            $msg = "PDF not deleted successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back()
           ;
    }

    private function pdfdeleteFiles($filePath)
    {
        if ($filePath) {
            $fullPath = public_path($filePath);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }
    }

    private function pdfhandleFileUpload($request, $fieldName,$folderName)
    {
        if ($request->file($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = public_path('assets/'.$folderName.'/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, $imageName);

            return 'assets/'.$folderName.'/'. $imageName;
        }

        return null;
    }

}
