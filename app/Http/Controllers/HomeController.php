<?php

/**
* Home Controller
* 
* @created    08/04/2020
* @package    Dr Sharda Ayurveda
* @copyright  Copyright (C) 2020
* @license    Proprietary
* @author     Mohit Thakur
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/home/index');
        //return view('home');
    }
    
    /**
     * Show the application about us page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about_us()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/about/index');
    }
    /**
     * Show the application Dr Mukesh Sharda page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dr_mukesh_sharda()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/about/dr_mukesh_sharda');
    }
    /**
     * Show the application Dr Arjun Sharda page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dr_arjun_sharda()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/about/dr_arjun_sharda');
    }
    /**
     * Show the application Contact us page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact_us()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/about/contact_us');
    }
    /**
     * Show the application Contact us page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/index');
    }
    /**
     * Show the application obesity page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function obesity()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/obesity');
    }
    /**
     * Show the application asthma page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function asthma()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/asthma');
    }
    /**
     * Show the application diabetes page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function diabetes()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/diabetes');
    }
    /**
     * Show the application ibs page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ibs()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/ibs');
    }
    /**
     * Show the application thyroid page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function thyroid()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/thyroid');
    }
    /**
     * Show the application psoriasis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function psoriasis()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/psoriasis');
    }
    /**
     * Show the application psoriasis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function constipation()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/constipation');
    }
    /**
     * Show the application rheumatoid_arthritis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function rheumatoid_arthritis()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/rheumatoid_arthritis');
    }
    /**
     * Show the application gout page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gout()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/gout');
    }
    
    /**
     * Show the application osteoarthritis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function osteoarthritis()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/osteoarthritis');
    }
    
    /**
     * Show the application psoriatic_arthritis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function psoriatic_arthritis()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/psoriatic_arthritis');
    }
    /**
     * Show the application chronic_fatigue_syndrome page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chronic_fatigue_syndrome()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/chronic_fatigue_syndrome');
    }
    /**
     * Show the application reactive_arthritis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function reactive_arthritis()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/reactive_arthritis');
    }
    /**
     * Show the application ankylosing_spondylitis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ankylosing_spondylitis()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/ankylosing_spondylitis');
    }
    /**
     * Show the application erectile_dysfunction page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function erectile_dysfunction()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/erectile_dysfunction');
    }
    /**
     * Show the application neck_pain page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function neck_pain()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        return view('frontend/services/neck_pain');
    }
}
