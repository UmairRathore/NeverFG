<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
//        $this->_model = new User();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'frontend.pages.';
        $this->data['moduleName'] = 'pages';
    }

    public function index()
    {
        return view($this->_viewPath . 'index');
    }

    public function forBusiness()
    {
        return view($this->_viewPath . 'business');
    }

    public function faqs()
    {
        return view($this->_viewPath . 'faq');
    }

    public function features()
    {
        return view($this->_viewPath . 'features');
    }

    public function virtualFuneral()
    {
        return view($this->_viewPath . 'virtual-funeral');
    }
}
