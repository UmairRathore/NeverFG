<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new Message();
        $this->_model_user = new User();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'frontend.profile.';
        $this->data['moduleName'] = 'Messages';
    }

    public function show()
    {
        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 3) {
            $messages = $this->_model::
            where('sender_id', Auth()->user()->id)
                ->orWhere('receiver_id',Auth()->user()->id)
                ->orderby('id', 'desc')
                ->get()
                ->unique('sender_id')
                ->pluck('sender_id');

            $user = User::whereIn('id',$messages)
                ->where('id','!=',Auth()->user()->id)
                ->get();
            $this->data['leftwallmessages'] = $user;
            return view('backend.pages.chat.chat-blogger', $this->data);
        }
        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 2) {

            $messages = $this->_model::
            where('sender_id', Auth()->user()->id)
                ->orWhere('receiver_id',Auth()->user()->id)
                ->orderby('id', 'desc')
                ->get()
                ->unique('receiver_id')
                ->pluck('receiver_id');

            $user = User::whereIn('id',$messages)
                ->where('id','!=',Auth()->user()->id)
                ->get();
            $this->data['leftwallmessages'] = $user;

            return view('front.pages.chat.chat-user', $this->data);
        }

    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'sender_id' => 'required',
                'receiver_id' => 'required',
                'message' => 'required',
            ]
        );
        //         'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        if ($validator->fails()) {
            return back()->with('required_fields_empty', 'FIll all the required fields!')
                ->withErrors($validator)
                ->withInput();
        }
        $this->data['messages'] = new Message();
        $this->data['messages']->sender_id = $request->sender_id;
        $this->data['messages']->receiver_id = $request->receiver_id;
        $this->data['messages']->message = $request->message;
        $this->data['messages']->save();

        return 1;
    }

    public function texting($reciever_id)
    {

        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 3) {

            $this->data['reciever_id'] = $reciever_id;

            $messages = $this->_model::
            where('sender_id', Auth()->user()->id)
                ->orWhere('receiver_id',Auth()->user()->id)
//                ->leftjoin('users as u', 'u.id', '=', 'Messages.receiver_id')
                ->orderby('id', 'desc')
                ->get()
                ->unique('sender_id')
                ->pluck('sender_id');

            $user = User::whereIn('id',$messages)
                ->where('id','!=',Auth()->user()->id)
                ->get();
            $this->data['leftwallmessages'] = $user;

            $user_id = Auth::user()->id;
            $this->data['messages'] = Message::whereIn('receiver_id', [$reciever_id, $user_id])
                ->whereIn('sender_id', [$reciever_id, $user_id])->get();


            return view('backend.pages.chat.chat-bloggertexting', $this->data);
        }
        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 2) {

            $this->data['reciever_id'] = $reciever_id;

            $messages = $this->_model::
            where('sender_id', Auth()->user()->id)
                ->orWhere('receiver_id',Auth()->user()->id)
                ->orderby('id', 'desc')
                ->get()
                ->unique('receiver_id')
                ->pluck('receiver_id');


            $user = User::whereIn('id',$messages)
                ->where('id','!=',Auth()->user()->id)
                ->get();
            $this->data['leftwallmessages'] = $user;


            $user_id = Auth::user()->id;
            $this->data['messages'] = Message::whereIn('receiver_id', [$reciever_id, $user_id])
                ->whereIn('sender_id', [$reciever_id, $user_id])->get();
            return view('front.pages.chat.chat-usertexting', $this->data);

        }

    }
}
