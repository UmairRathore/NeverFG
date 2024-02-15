<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Relation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RelationsController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new Relation();

        $this->setDefaultData();
    }
    private function setDefaultData()
    {
        $this->_viewPath = 'backend.relation.';
        $this->data['modulerelation'] = 'Relation';
    }


    public function index()
    {
        $this->data['relations'] = $this->_model::all();
        return view($this->_viewPath .'list-relation',$this->data);
    }

    public function create()
    {
        return view($this->_viewPath . 'create-relation');

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'relation' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('fields_empty', 'FIll all the required fields!')
                ->withErrors($validator)
                ->withInput();
        }

        $this->data['relations'] = $this->_model;
        $this->data['relations']->relation = $request->input('relation');
        $check = $this->data['relations']->save();
        if ($check) {
            $msg = 'relation Added successfully';
//            Session::flash('msg', $msg);
            Session::flash('message', $msg);
        } else {
            $msg = 'relation not Added successfully';
            Session::flash('msg', $msg);
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['relation'] = $this->_model::where('id',$id)->first();
        return view($this->_viewPath . 'edit-relation', $this->data);
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'relation' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('fields_empty', 'FIll all the required fields!')
                ->withErrors($validator)
                ->withInput();
        }

        $this->data['relations'] = $this->_model::find($id);
        $this->data['relations']->relation = $request->input('relation');
        $check = $this->data['relations']->save();
        if ($check) {
            $msg = 'relation updated successfully';
//            Session::flash('msg', $msg);
            Session::flash('message', $msg);
        } else {
            $msg = 'relation not updated successfully';
//            Session::flash('msg', $msg);
            Session::flash('message', $msg);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->data['relations'] = $this->_model::find($id);
        $check = $this->data['relations']->delete();
        if ($check) {
            $msg = 'relation deleted successfully';
            Session::flash('info_deleted', $msg);
        } else {
            $msg = 'relation not deleted successfully';
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }




}
