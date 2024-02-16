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
        $this->_viewPath = 'frontend.profile.message';
        $this->data['moduleName'] = 'Messages';
    }
//
//    public function message()
//    {
//        return view($this->_viewPath . 'message');
//    }

    public function show($id)
    {
        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 1) {

//            $messages = $this->_model::where('sender_id', Auth()->user()->id)
//                ->orWhere('receiver_id', Auth()->user()->id)
//                ->orderBy('id', 'desc')
//                ->get();
//
//            $uniqueReceiverIds = $messages->unique('receiver_id')->pluck('receiver_id');
//
//            $users = collect();
//
//            foreach ($uniqueReceiverIds as $receiverId) {
//                if ($receiverId != Auth()->user()->id) {
//                    $user = User::find($receiverId);
//                    if ($user) {
//                        // Get the last message for the current user
//                        $lastMessage = $messages->where('receiver_id', $receiverId)->sortByDesc('id')->pluck('message')->first();
//                        // Add the last message to the user object
//                        $user->message = $lastMessage;
//                        $users->push($user);
//                    }
//                }
//            }

            $this->data['leftwallmessages'] = User::where('role_id',1)->first() ;
            return view('backend.message.chat-user', $this->data);
        }

        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 2) {

//            $messages = $this->_model::where('sender_id', Auth()->user()->id)
//                ->orWhere('receiver_id', Auth()->user()->id)
//                ->orderBy('id', 'desc')
//                ->get();
//
//            $uniqueReceiverIds = $messages->unique('receiver_id')->pluck('receiver_id');
//
//            $users = collect();
//
//            foreach ($uniqueReceiverIds as $receiverId) {
//                if ($receiverId != Auth()->user()->id) {
//                    $user = User::find($receiverId);
//                    if ($user) {
//                        // Get the last message for the current user
//                        $lastMessage = $messages->where('receiver_id', $receiverId)->sortByDesc('id')->pluck('message')->first();
//                        // Add the last message to the user object
//                        $user->message = $lastMessage;
//                        $users->push($user);
//                    }
//                }
//            }
//
//            $this->data['leftwallmessages'] = $users->where('role_id',1)->first() ;

            $this->data['leftwallmessages'] = User::where('role_id',1)->first() ;

            return view('frontend.profile.message.chat-user', $this->data);
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

        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 1) {

            $this->data['reciever_id'] = $reciever_id;
//
//            $messages = $this->_model::where('sender_id', Auth()->user()->id)
//                ->orWhere('receiver_id', Auth()->user()->id)
//                ->orderBy('id', 'desc')
//                ->get();
//
//            $uniqueReceiverIds = $messages->unique('receiver_id')->pluck('receiver_id');
//
//            $users = collect();
//
//            foreach ($uniqueReceiverIds as $receiverId) {
//                if ($receiverId != Auth()->user()->id) {
//                    $user = User::find($receiverId);
//                    if ($user) {
//                        // Get the last message for the current user
//                        $lastMessage = $messages->where('receiver_id', $receiverId)->sortByDesc('id')->pluck('message')->first();
//                        // Add the last message to the user object
//                        $user->message = $lastMessage;
//                        $users->push($user);
//                    }
//                }
//            }
//
//            $this->data['leftwallmessages'] = $users;
            $this->data['leftwallmessages'] = User::where('role_id',1)->first() ;



            $user_id = Auth::user()->id;
            $this->data['messages'] = Message::whereIn('receiver_id', [$reciever_id, $user_id])
                ->whereIn('sender_id', [$reciever_id, $user_id])->get();
            return view('backend.message.chat-usertexting', $this->data);
        }
        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 2) {

            $this->data['reciever_id'] = $reciever_id;

//            $messages = $this->_model::where('sender_id', Auth()->user()->id)
//                ->orWhere('receiver_id', Auth()->user()->id)
//                ->orderBy('id', 'desc')
//                ->get();
//
//            $uniqueReceiverIds = $messages->unique('receiver_id')->pluck('receiver_id');
//
//            $users = collect();
//
//            foreach ($uniqueReceiverIds as $receiverId) {
//                if ($receiverId != Auth()->user()->id) {
//                    $user = User::find($receiverId);
//                    if ($user) {
//                        // Get the last message for the current user
//                        $lastMessage = $messages->where('receiver_id', $receiverId)->sortByDesc('id')->pluck('message')->first();
//                        // Add the last message to the user object
//                        $user->message = $lastMessage;
//                        $users->push($user);
//                    }
//                }
//            }
//
//            $this->data['leftwallmessages'] = $users;
            $this->data['leftwallmessages'] = User::where('role_id',1)->first() ;



            $user_id = Auth::user()->id;
            $this->data['messages'] = Message::whereIn('receiver_id', [$reciever_id, $user_id])
                ->whereIn('sender_id', [$reciever_id, $user_id])->get();
            return view('frontend.profile.message.chat-usertexting', $this->data);

        }

    }
}
