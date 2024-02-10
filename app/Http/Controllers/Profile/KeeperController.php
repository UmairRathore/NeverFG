<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserMemorial;
use Illuminate\Http\Request;

class KeeperController extends Controller
{
    //
    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new User();
        $this->_memorial_model = new UserMemorial();

        $this->setDefaultData();
    }
    private function setDefaultData()
    {
        $this->_viewPath = 'frontend.profile.';
        $this->data['moduleName'] = 'memorial';
    }

    public function keeper($id)
    {
        $this->data['keeper'] = $this->_memorial_model::select('users.*','users.first_name as first_name')
        ->where('memorial_user_id',$id)
            ->join('users','users.id','=','user_memorials.keeper_id')
            ->first();
$keeperId =$this->data['keeper']->id ;
        $this->data['memorials'] = $this->_memorial_model::select('user_memorials.memorial_user_id as memorialID','users.id as user_id',
        'users.first_name','users.last_name')->where('keeper_id',$keeperId)
            ->join('users','users.id','=','user_memorials.memorial_user_id')->get();

        return view($this->_viewPath . 'keeper',$this->data);
    }
}
