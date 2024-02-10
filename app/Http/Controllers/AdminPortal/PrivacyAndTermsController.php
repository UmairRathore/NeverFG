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
        $this->data['moduleName'] = 'Faqs';
    }

    public function index()
    {
        $this->data['privacyAndTerms'] = $this->model::first();
        return view($this->_viewPath . 'list-privacyAndTerms', $this->data);

    }

    public function create()
    {

        return view($this->_viewPath . 'create-privacyAndTerms',);
    }




    public function store(Request $request)
    {
//        dd($request);
        if ($request->privacy) {
            $validator = Validator::make($request->all(), [
                'privacy' => 'required',
            ]);
            $this->data['privacy'] = $this->model;
            $this->data['privacy']->privacy = $request->privacy;
            $check = $this->data['privacy']->save();
            if ($check) {
                $msg = "privacy added successfully.";

                Session::flash('message', $msg);
            } else {
                $msg = "privacy not added successfully.";

                Session::flash('required fields empty', $msg);
            }
        }if ($request->terms) {
            $validator = Validator::make($request->all(), [
                'terms' => 'required',
            ]);
            $this->data['terms'] = $this->model;
            $this->data['terms']->terms = $request->terms;
            $check = $this->data['terms']->save();
            if ($check) {
                $msg = "terms added successfully.";

                Session::flash('message', $msg);
            } else {
                $msg = "terms not added successfully.";

                Session::flash('required fields empty', $msg);
            }
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
        if ($request->privacy) {
            $validator = Validator::make($request->all(), [
                'privacy' => 'required',
            ]);
            $this->data['privacy'] = $this->model::find($id);
            $this->data['privacy']->privacy = $request->privacy;
            $check = $this->data['privacy']->save();
            if ($check) {
                $msg = "privacy added successfully.";

                Session::flash('message', $msg);
            } else {
                $msg = "privacy not updated successfully.";

                Session::flash('required fields empty', $msg);
            }
        }if ($request->terms) {
        $validator = Validator::make($request->all(), [
            'terms' => 'required',
        ]);
        $this->data['terms'] = $this->model::find($id);
        $this->data['terms']->terms = $request->terms;
        $check = $this->data['terms']->save();
        if ($check) {
            $msg = "terms updated successfully.";

            Session::flash('message', $msg);
        } else {
            $msg = "terms not updated successfully.";

            Session::flash('required fields empty', $msg);
        }
    }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->data['faqs'] = $this->model::find($id);
        if ($this->data['faqs']->topic_id == null)
        {
            $messageCheck= 1;
        }
        else{
            $messageCheck = 0;
        }
        $check = $this->data['faqs']->delete();
        if ($check) {
            if ($messageCheck == 1) {
                $msg = "Topic deleted successfully.";
                Session::flash('info_deleted', $msg);
            }
            if ($messageCheck == 0) {
                $msg = "Faq deleted successfully.";

                Session::flash('info_deleted', $msg);
            }
        }
        return redirect()->back();
    }
}
