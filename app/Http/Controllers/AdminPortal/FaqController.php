<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    //
    public function __construct()
    {
        $this->model = new Faq();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.faq.';
        $this->data['moduleName'] = 'Faqs';
    }

    public function index()
    {
        $this->data['faqs'] = $this->model::all();
        return view($this->_viewPath . 'list-faq', ['faqs' => $this->data['faqs']]);

    }

    public function create()
    {
        $this->data['topics'] = $this->model::select('faqs.topic', 'faqs.id')
            ->where('topic_id', null)
            ->get();
        return view($this->_viewPath . 'create-faq', ['topics' => $this->data['topics']]);
    }


    public function storeTopic(Request $request)
    {
//        dd($request);
        $validator = Validator::make($request->all(), [
            'topic' => 'required',
        ]);


        $this->data['topics'] = $this->model;
        $this->data['topics']->topic = $request->topic;
        $check = $this->data['topics']->save();
        if ($check) {
            $msg = "Topic added successfully.";
//            Session::flash('msg', $msg);
            Session::flash('message', $msg);
        } else {
            $msg = "Topic not added successfully.";
//            Session::flash('msg', $msg);
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();

    }

    public function storeQuestionAnswer(Request $request)
    {
//        dd($request);
        $validator = Validator::make($request->all(), [
            'topic' => 'required',
            'question' => 'require',
            'answer' => 'require',
            'topic_id' => 'require',
        ]);

        $name = $this->model::select('faqs.topic as name')->where('id', $request->topic_id)->first();
        $topic_name = $name->name;
        $this->data['topics'] = $this->model;
        $this->data['topics']->topic = $topic_name;
        $this->data['topics']->question = $request->question;
        $this->data['topics']->answer = $request->answer;
        $this->data['topics']->topic_id = $request->topic_id;
        $check = $this->data['topics']->save();
        if ($check) {
            $msg = "Faq added successfully.";
//            Session::flash('msg', $msg);
            Session::flash('message', $msg);
        } else {
            $msg = "Faq not added successfully.";
//            Session::flash('msg', $msg);
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();

    }

    public function edit($id)
    {
        $this->data['faq'] = $this->model::select('faqs.*')->where('id', $id)->first();
        $this->data['topics'] = $this->model::select('faqs.topic', 'faqs.id')
            ->where('topic_id', null)
            ->get();
        return view($this->_viewPath . 'edit-faq', ['faq' => $this->data['faq'], 'topics' => $this->data['topics']]);


    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'topic' => 'required',
            'question' => 'require',
            'answer' => 'require',
            'topic_id' => 'require',
        ]);

        $this->data['topics'] = $this->model::find($id);
        if ($this->data['topics']->topic_id == null) {
            $this->data['topics']->topic = $request->topic;
            $check = $this->data['topics']->update();
            $messageCheck= 1;
        } else {
            $name = $this->model::select('faqs.topic as name')->where('id', $request->topic_id)->first();
            $topic_name = $name->name;
            $this->data['topics']->topic = $topic_name;
            $this->data['topics']->question = $request->question;
            $this->data['topics']->answer = $request->answer;
            $this->data['topics']->topic_id = $request->topic_id;
            $check = $this->data['topics']->update();
            $messageCheck = 0;
        }

        if ($check) {
            if ($messageCheck == 1) {
                $msg = "Topic updated successfully.";
//            Session::flash('msg', $msg);
                Session::flash('message', $msg);
            } else {
                $msg = "Topic not updated successfully.";
//            Session::flash('msg', $msg);
                Session::flash('required fields empty', $msg);
            }
            if ($messageCheck == 0) {
                $msg = "Faq updated successfully.";
//            Session::flash('msg', $msg);
                Session::flash('message', $msg);
            } else {
                $msg = "Faq not updated successfully.";
//            Session::flash('msg', $msg);
                Session::flash('required fields empty', $msg);
            }
        }
        return redirect()->back();
    }

    public
    function destroy($id)
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
//            Session::flash('msg', $msg);
                Session::flash('info_deleted', $msg);
            }
            if ($messageCheck == 0) {
                $msg = "Faq deleted successfully.";
//            Session::flash('msg', $msg);
                Session::flash('info_deleted', $msg);
            }
        }
        return redirect()->back();
    }
}

;
