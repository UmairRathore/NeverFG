<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FrontendIndex;
use App\Models\FrontendVirtualFuneral;
use App\Models\pdf;
use App\Models\PrivacyTerms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Faq;
use App\Models\FrontendFeature;

use Faker\Factory as Faker;


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
        $this->data['indexImage'] = FrontendIndex::select('frontend_index.index_image',
        'frontend_index.index_image_heading')->take(5)->get();
        $this->data['indexCard'] = FrontendIndex::select('frontend_index.index_card_image_description',
            'frontend_index.index_card_image','frontend_index.index_card_image_heading')->take(4)->get();
        return view($this->_viewPath . 'index',$this->data);
    }

    public function forBusiness()
    {
        return view($this->_viewPath . 'business');
    }

    public function faqs()
    {
        $this->data['faq'] = Faq::all();
        return view($this->_viewPath . 'faq', $this->data);
    }
    public function PrivacyTerms()
    {
        $this->data['PrivacyTerms'] = PrivacyTerms::first();
        return view($this->_viewPath . 'privacyAndTerms', $this->data);
    }

    public function features()
    {
        $this->data['features'] = FrontendFeature::take(12)->get();
        return view($this->_viewPath . 'features',$this->data);
    }

    public function virtualFuneral()
    {
        $this->data['virtual'] = FrontendVirtualFuneral::take(9)->get();

        $this->data['pdf'] = pdf::first();

        return view($this->_viewPath . 'virtual-funeral', $this->data);
    }
}
