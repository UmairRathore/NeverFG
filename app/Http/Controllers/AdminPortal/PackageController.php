<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\AccountType;
use App\Models\Package;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    //

    public function __construct()
    {
        $this->model = new Package();
        $this->_account_model = new AccountType();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.package.';
        $this->data['moduleName'] = 'Packages';
    }


    public function index()
    {
        $this->data['packages'] = $this->model::select('packages.*','account_types.name as account_name')
            ->join('account_types','account_types.id','=','packages.account_type_id')
            ->get();
        return view($this->_viewPath . 'list-package', ['packages'=> $this->data['packages']]);
    }

    public function create()
    {
        return view($this->_viewPath . 'create-package');
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'name'=>'require',
//        ]);

        $this->data['account'] = $this->_account_model;
        $this->data['account']->name = $request->input('name');
        $account = $this->data['account']->save();
        $accountID = $this->data['account']->id;
        $this->data['package'] =$this->model;
        $this->data['package']->account_type_id = $accountID;
        $check = $this->data['package']->save();
//        dd($accountID);
         if ($check) {
            $msg = 'Package Added successfully';
            Session::flash('message', $msg);
        } else {
            $msg = 'Package not Added successfully';
            Session::flash('msg', $msg);
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['packages'] = $this->model::find($id)->first();
        return view($this->_viewPath . 'edit-package', ['packages', $this->data['packages']]);
    }

    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        $this->data['packages'] = $this->model::find($id);
//        dd( $this->data['packages']);
        $check = $this->data['packages']->delete();
        if ($check) {
            $msg = 'Package deleted successfully';
            Session::flash('info_deleted', $msg);
        } else {
            $msg = 'Package not deleted successfully';
            Session::flash('msg', $msg);
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function changeStatus(Request $request)
    {

//
        $id = $request->input('id');
        $field = $request->input('field');
        $value = $request->input('value');

        // Update the status in the database for the specified field and package
        // You may want to add additional validation and error handling here

        // Example:
        $package = Package::find($id);
        $package->$field = $value;
        $check = $package->save();
        if ($check) {
            $msg = "Status updated successfully";
            return json_encode(array('statusCode' => 200, 'message' => $msg));

        } else {
            $msg = trans('lang_data.error');
            return json_encode(array('statusCode' => 302, 'message' => $msg));
        }

    }

}
