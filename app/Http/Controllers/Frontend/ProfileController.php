<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new User();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'frontend.profile.';
        $this->data['moduleName'] = 'User';
    }

    public function events()
    {
        return view($this->_viewPath . 'events');
    }

    public function family()
    {
        return view($this->_viewPath . 'family');
    }

    public function keeper()
    {
        return view($this->_viewPath . 'keeper');
    }

    public function keeperplus()
    {
        return view($this->_viewPath . 'keeper-plus');
    }

    public function mementos()
    {
        return view($this->_viewPath . 'mementos');
    }

    public function memorialprofile()
    {
        return view($this->_viewPath . 'memorial-profile');
    }

    public function message()
    {
        return view($this->_viewPath . 'message');
    }

    public function profile()
    {
        return view($this->_viewPath . 'profile');
    }
}
