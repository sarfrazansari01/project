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
    
     /*
    * Meta Data Set Dynamic
    */
    function paging_meta_data($meta_data)
    {
		return true;
        SEOMeta::setTitle($meta_data['meta_title']);
        SEOMeta::setDescription($meta_data['meta_description']);
        if($meta_data['meta_keywords'] != '')
        {
            SEOMeta::setKeywords($meta_data['meta_keywords']);
        }
        SEOMeta::setCanonical($meta_data['canonical_url']);
        
        $meta_data['og_url'] = request()->fullUrl() . '/';
        
        if($meta_data['og_title']  != '' && $meta_data['og_description']  != '' && $meta_data['og_image']  != '')
        {
            OpenGraph::addProperty('article:publisher', 'https://www.facebook.com/DrShardaAyurveda/');
            OpenGraph::addProperty('type', 'articles');
            OpenGraph::setSiteName("drshardaayurveda.com");
            OpenGraph::setTitle($meta_data['og_title']);
            OpenGraph::setDescription($meta_data['og_description']);
            OpenGraph::setUrl($meta_data['og_url']);
            OpenGraph::addImage($meta_data['og_image']);


            Twitter::addValue("card", "summary_large_image");
            Twitter::setUrl($meta_data['og_url']);
            Twitter::setSite('drshardaayurveda.com');
            Twitter::setTitle($meta_data['og_title']);
            Twitter::setDescription($meta_data['og_description']);
            Twitter::addValue("image",$meta_data['og_image']);
            Twitter::addValue("creator","@drshardaayurveda");
        }
        return TRUE;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home_page = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($home_page);
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
        $about_us = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($about_us);
        return view('frontend/about/index');
    }
    /**
     * Show the application Dr Mukesh Sharda page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dr_mukesh_sharda()
    {
        $dr_mukesh_sharda = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($dr_mukesh_sharda);
        return view('frontend/about/dr_mukesh_sharda');
    }
    /**
     * Show the application Dr Arjun Sharda page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dr_arjun_sharda()
    {
        $dr_arjun_sharda = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($dr_arjun_sharda);
        return view('frontend/about/dr_arjun_sharda');
    }
    /**
     * Show the application Contact us page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact_us()
    {
        $contact_us = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($contact_us);
        return view('frontend/about/contact_us');
    }
    /**
     * Show the application Contact us page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        $services = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($services);
        return view('frontend/services/index');
    }
    /**
     * Show the application obesity page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function obesity()
    {
        $obesity = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($obesity);
        return view('frontend/services/obesity');
    }
    /**
     * Show the application asthma page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function asthma()
    {
        $asthma = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($asthma);
        return view('frontend/services/asthma');
    }
    /**
     * Show the application diabetes page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function diabetes()
    {
        $diabetes = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($diabetes);
        return view('frontend/services/diabetes');
    }
    /**
     * Show the application ibs page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ibs()
    {
        $ibs = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($ibs);
        return view('frontend/services/ibs');
    }
    /**
     * Show the application thyroid page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function thyroid()
    {
        $thyroid = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($thyroid);
        return view('frontend/services/thyroid');
    }
    /**
     * Show the application psoriasis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function psoriasis()
    {
        $psoriasis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($psoriasis);
        return view('frontend/services/psoriasis');
    }
    /**
     * Show the application psoriasis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function constipation()
    {
        $constipation = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($constipation);
        return view('frontend/services/constipation');
    }
    /**
     * Show the application rheumatoid_arthritis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function rheumatoid_arthritis()
    {
        $rheumatoid_arthritis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($rheumatoid_arthritis);
        return view('frontend/services/rheumatoid_arthritis');
    }
    /**
     * Show the application gout page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gout()
    {
        $gout = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($gout);
        return view('frontend/services/gout');
    }
    
    /**
     * Show the application osteoarthritis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function osteoarthritis()
    {
        $osteoarthritis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($osteoarthritis);
        return view('frontend/services/osteoarthritis');
    }
    
    /**
     * Show the application psoriatic_arthritis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function psoriatic_arthritis()
    {
        $psoriatic_arthritis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($psoriatic_arthritis);
        return view('frontend/services/psoriatic_arthritis');
    }
    /**
     * Show the application chronic_fatigue_syndrome page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chronic_fatigue_syndrome()
    {
        $chronic_fatigue_syndrome = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($chronic_fatigue_syndrome);
        return view('frontend/services/chronic_fatigue_syndrome');
    }
    /**
     * Show the application reactive_arthritis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function reactive_arthritis()
    {
        $reactive_arthritis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($reactive_arthritis);
        return view('frontend/services/reactive_arthritis');
    }
    /**
     * Show the application ankylosing_spondylitis page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ankylosing_spondylitis()
    {
        $ankylosing_spondylitis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($ankylosing_spondylitis);
        return view('frontend/services/ankylosing_spondylitis');
    }
    /**
     * Show the application erectile_dysfunction page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function erectile_dysfunction()
    {
        $erectile_dysfunction = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($erectile_dysfunction);
        return view('frontend/services/erectile_dysfunction');
    }
    /**
     * Show the application neck_pain page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function neck_pain()
    {
        $neck_pain = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($neck_pain);
        return view('frontend/services/neck_pain');
    }
    /**
     * Show the application acidity page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function acidity()
    {
        $acidity = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($acidity);
        return view('frontend/services/acidity');
    }
    /**
     * Show the application anemia page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function anemia()
    {
        $anemia = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($anemia);
        return view('frontend/services/anemia');
    }
    /**
     * Show the application back_pain page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function back_pain()
    {
        $back_pain = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($back_pain);
        return view('frontend/services/back_pain');
    }
    /**
     * Show the application back_pain page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cervical_sponylosis()
    {
        $cervical_sponylosis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($cervical_sponylosis);
        return view('frontend/services/cervical_sponylosis');
    }
    /**
     * Show the application de_aaddiction_alcohol page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function de_aaddiction_alcohol()
    {
        $de_aaddiction_alcohol = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($de_aaddiction_alcohol);
        return view('frontend/services/de_aaddiction_alcohol');
    }
    /**
     * Show the application drug_de_addiction page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function drug_de_addiction()
    {
        $drug_de_addiction = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($drug_de_addiction);
        return view('frontend/services/drug_de_addiction');
    }
    /**
     * Show the application fibro myalagia page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function fibro_myalagia()
    {
        $fibro_myalagia = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($fibro_myalagia);
        return view('frontend/services/fibro_myalagia');
    }
    /**
    * Show the application flatulence page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function flatulence()
    {
        $flatulence = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($flatulence);
        return view('frontend/services/flatulence');
    }
    
    /**
    * Show the application kidney failure page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function kidney_failure()
    {
        $kidney_failure = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($kidney_failure);
        return view('frontend/services/kidney_failure');
    }
    
    /**
    * Show the application lumbar_spondylosis failure page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function lumbar_spondylosis()
    {
        $lumbar_spondylosis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($lumbar_spondylosis);
        return view('frontend/services/lumbar_spondylosis');
    }
    
    /**
    * Show the application osteoporosis failure page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function osteoporosis()
    {
        $osteoporosis = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($osteoporosis);
        return view('frontend/services/osteoporosis');
    }
    
    /**
    * Show the application pre_mature_ejaculation failure page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function pre_mature_ejaculation()
    {
        $pre_mature_ejaculation = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($pre_mature_ejaculation);
        return view('frontend/services/pre_mature_ejaculation');
    }
    
    /**
    * Show the application sciatica pain failure page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function sciatica_pain()
    {
        $sciatica_pain = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($sciatica_pain);
        return view('frontend/services/sciatica_pain');
    }
    
    /**
    * Show the application uric_acid failure page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function uric_acid()
    {
        $uric_acid = Home::findOrFail(HOME_PAGE)->toArray();
        $this->paging_meta_data($uric_acid);
        return view('frontend/services/uric_acid');
    }
}
