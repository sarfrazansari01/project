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
}
