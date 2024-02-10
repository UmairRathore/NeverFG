<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\PrivacyTerms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PrivacyAndTermsController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->model = new PrivacyTerms();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.privacyAndTerms.';
        $this->data['moduleName'] = 'privacyAndTerms';
    }

    public function index()
    {
        $this->data['privacyAndTerms'] = $this->model::all();
        return view($this->_viewPath . 'list-privacyAndTerms', $this->data);

    }

    public function create()
    {

        return view($this->_viewPath . 'create-privacyAndTerms',);
    }




    public function store(Request $request)
    {
//        dd($request);
       $request->validate([
          'privacy' => 'required',
          'terms' => 'required',
       ]);

            $this->data['privacyAndTerms'] = $this->model;
            $this->data['privacyAndTerms']->privacy = $request->privacy;
            $this->data['privacyAndTerms']->terms = $request->terms;
            $check = $this->data['privacyAndTerms']->save();
            if ($check) {
                $msg = "Pirvacy and Terms added successfully.";

                Session::flash('message', $msg);
            } else {
                $msg = "Pirvacy and Terms not added successfully.";

                Session::flash('required fields empty', $msg);
            }


        return redirect()->back();

    }

    public function edit($id)
    {
        $this->data['privacyAndTerms'] = $this->model::where('id', $id)->first();
        return view($this->_viewPath . 'edit-privacyAndTerms',$this->data);


    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'privacy' => 'required',
            'terms' => 'required',
        ]);

        $this->data['privacyAndTerms'] = $this->model::find($id);
        $this->data['privacyAndTerms']->privacy = $request->privacy;
        $this->data['privacyAndTerms']->terms = $request->terms;
        $check = $this->data['privacyAndTerms']->save();
        if ($check) {
            $msg = "Pirvacy and Terms updated successfully.";

            Session::flash('message', $msg);
        } else {
            $msg = "Pirvacy and Terms not updated successfully.";

            Session::flash('required fields empty', $msg);
        }


        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->data['privacyAndTerms'] = $this->model::find($id);
        $check = $this->data['privacyAndTerms']->delete();
        if ($check) {

                $msg = "privacy and terms deleted successfully.";
                Session::flash('info_deleted', $msg);
        }
            else{
                $msg = "privacy and terms not deleted successfully.";

                Session::flash('info_deleted', $msg);
            }

        return redirect()->back();
    }
}
