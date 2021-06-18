<?php
/**
 * Asthma Services Page 
 * 
 * @created    08/04/2020
 * @package    Dr Sharda Ayurveda
 * @copyright  Copyright (C) 2020
 * @license    Proprietary
 * @author     Mohit Thakur
 */
?>
@extends('layouts.main')
@section('content')
<section class="dsa-banner-sec2">
    <div class="container-fluid">
        <div class="row cust-dsa-banner">
            <div class="col-md-12" dalta-aos="zoom-in" data-aos-duration="4000">
                <div class="service">
                    <small>POWER TO HEAL</small>
                    <h3 class="ser-heading mt-4">ASTHMA</h3>
                    <p>Breathing Healthy With Ayurveda</p>
                    <ul class="bread">
                        <li class="breadcrumb-item active" aria-current="page">Home&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li ><a href="https://www.drshardaayurveda.com/asthma/">Asthma</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<div class="container-fluid pt-5 pb-2">
    <div class="container">
        <div class="navi">
            <div class="col-lg-12">
                <ul class="serlisting">
                    <li>
                        <a href="#treatment">TREATMENT <span class="sr-only">(current)</span></a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a  href="#types">TYPES</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="#causes">CAUSES</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="#symptoms">SYMPTOMS</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="#advantages">ADVANTAGES</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="#testimonials">TESTIMONIALS</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="#faqs">FAQ’S</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="dsa-why-choose">
    <div class="container-fluid">
        <div class="row cut-row">
            <div class="col-xl-6 col-md-12 mb-5 col-sm-12 mb-2">
                <div class="left-img crc" data-aos="zoom-in" data-aos-duration="4000">
                    <img src="{{ URL::asset('front/images/asthma.webp') }}" class="why-choose-us img-fluid" alt="why choose">
                </div>
            </div>
            <div id="hgte2" class="col-xl-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="4000">
                <h2>Asthma Ayurvedic <b>Treatment</b></h2>
                <p>
                    In Ayurveda, Asthma is known as Thamaka Shvasa. Asthma is a Chronic inflammatory 
                    diseases which affects the airways. It is symbolized by episodes of frequent nasal 
                    allergies, difficulty in breathing and shortness of breath and wheezing mostly or 
                    early moring or at mid night which might due to respiratory origin In Asthma there
                    is a spontaneous attack on patient in which one is unable or breath because of airway
                    blockage. The Severity of an attack may differ from one attack to the next, from 
                    person to person, may be life threating and could require immediate emergency medical
                    attention.
                </p>
                <p>
                    Asthma develops when a body exposed high cold temperatures, unhealthy air pollutions,
                    environmental factors and taking high stress. All the impurities carried itself 
                    through the body's channels to the chest and lungs area, where they irritate the
                    lining of airways, also triggering an inflamatory response that harms the epithelial 
                    lining of the airways. Asthma treatment with Ayurveda has its guaranteed results.
                    We never suggest any of our patients to go for inhealers. We always treat naturally.
                    Ayurveda Medicine for Asthma has effective and amazing results.
                </p>
                <div class="btn-banner crd">
                    <a href="#" class="btn-appointment">BOOK an APPOINTMENT</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dsa-india-ayurvedic-sec" id="types"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 data-aos="fade-up" data-aos-duration="4000" class="aos-init aos-animate">Type's of <b>Asthma</b></h2>
            </div>
        </div>
        <div class="row cust-iba">
            <div class="owl-carousel owl-theme" >
                <div class="item col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="4000">
                    <div class="card mb-2">
                        <img src="{{ URL::asset('front/images/serv-1.png') }}" class="card-img-top lazyload" alt="Hair Transplant">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold pdt10">Acute Asthma </h4>
                            <p class="card-text">
                                It is a spontaneous attack caused by an inflammation of the air sacs of the lungs and that further causes the
                                narrowing and contraction of the bronchioles causing a restriction of airflow making breathing difficult for a person.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="4000">
                    <div class="card mb-2"> 
                        <img class="card-img-top lazyload" src="{{ URL::asset('front/images/serv-2.png') }}"  alt="Hair Restoration">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold pdt10">Chronic Asthma </h4>
                            <p class="card-text">
                                Chronic asthma is portrayal of frequent asthma attacks which requires medical help to prevent and minimize acute attacks.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="item col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="4000">
                    <div class="card mb-2"> 
                        <img class="card-img-top lazyload" src="{{ URL::asset('front/images/serv-3.png') }}"  alt="Cosmetic Surgery">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold pdt10">Allergic Asthma</h4>
                            <p class="card-text">Allergic Asthma is caused due to exposure to an allergen, for example- dust particles or pollen grains.</p>
                        </div>
                    </div>
                </div>

                <div class="item col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="4000">
                    <div class="card mb-2"> 
                        <img class="card-img-top lazyload" src="{{ URL::asset('front/images/serv-3.png') }}"  alt="Cosmetic Surgery">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold pdt10">Non-allergic Asthma</h4>
                            <p class="card-text">
                                Non-allergic Asthma can be caused due to various factors such as stress, exercise, illness, extreme weather, 
                                irritants in the air.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-ayurvedic">
                    <a href="#" class="btn-appointment">Find More Treatment</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-product causes" id="causes">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12">
                <div class="prod-tp-content aos-init aos-animate" data-aos="zoom-in" data-aos-duration="4000">
                    <h2>Causes of <b>Asthma</b></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-product" style="background-color:#f3f3f3" id="symptoms">
    <div class="container-fluid cses">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Excessive intaka of Vata
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Chilled Cold Items highly taken can cause Asthma as it directly affects the lungs tissues.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Environmental Conditions
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Unhealthy environment conditions can cause Asthma.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Exposure To Unhealthy Air
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Unhealthy Dust, Smoke and Wind can lead to cough.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Genetics
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                Asthma takes it form from heredity too and passes itself.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Exposute To Cold Climate
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                High exposure to cold and Icy Climate increases the chances of Asthma.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>			


<div class="container-fluid" style="background-color: #eeb03f">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4 col-sm-12">
                <p class="acc">Get a <strong>free Assessment</strong> Report</p>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="apn">
                    <a href="#" >BOOK AN APPOINTMENT</a>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>

<div class="wrp pt-5 mt-5 pb-5" id="advantages">
    <div class="kmoz" >
        <img src="{{ URL::asset('front/images/symptoms-of-asthma.webp') }}" class=" w-100 ima">
    </div>
    <div class="cvn sym" >
        <h3><span>Symptoms</span> of Asthma</h3>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Shortness of Breath</p>
        <p>On feels problem in breathing as normal breathing process hinders.</p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Pain And Tightness in Chest</p>
        <p>Tightness and pain in chest takes their place in body one being affected by Asthma</p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Whistling Sound While Breathing</p>
        <p>Some Whistling sounds automatically occurs one Who is prone to Asthma</p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Chest Pain</p>
        <p>A patient also feels pain in Chest when it severe Asthma attack</p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Thick Mucus Sputum</p>
        <p>In Asthma consistency of sputum (saliva) gets thick</p>
    </div>
</div>
<div class="split"></div>
<section class="dsa-why-choose" id="advantages">
    <div class="container-fluid">
        <div class="row cut-row" >
            <div id="hgte2" class="col-xl-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="4000">
                <h2 class="client-test-title">Advantages <b>of Ayurvedic Treatment For Asthma</b></h2>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Effective Ayurvedic Medicines help in get rid of inhaler
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurvedic treatment helps in recovering through Breathing Exercises.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurvedic treatment helps i recovering through dietary and Lifestyle changes
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurvedic Medicines has no adverse side effects on health.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurveda reduces future Health risks.
                </p>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="left-img crc" data-aos="zoom-in" data-aos-duration="4000">
                    <iframe src="https://www.youtube.com/embed/_-4_fagZucU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="client-testimonial" data-aos="zoom-in" data-aos-duration="4000" id="testimonials">
    <div class="container-fluid">
        <div class="row">
            <div class="cl-test">
                <h2 class="client-test-title">Client <b>Testimonial</b></h2>
            </div>
        </div>
        <div class="row cust-test">
            <div class="col-md-12">
                <div id="client-test" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Ellipse.png') }}" class="img-fluid" alt="Testimonial" >
                            <h3 class="usrname">ALEX MARTIN</h3>
                            <p class="desig">Envato Customer</p>
                            <ul>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </li>
                            </ul>

                            <p>
                                <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                My grandmother was suffering from Asthma past 10 years and was dependent on Inhaler.  We went to Dr. Sharda Ayurveda 
                                for treatment of Asthma. Dr. Mukesh Sharda guided us the best and started with Ayurvedic treatment for Asthma. 
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Ellipse.png') }}" class="img-fluid" alt="Testimonial" >
                            <h3 class="usrname">ALEX MARTIN</h3>
                            <p class="desig">Envato Customer</p>
                            <ul>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </li>
                            </ul>
                            <p>
                                <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                Dr. Sharda Ayurveda is best for Ayurvedic treatment of Asthma. I used to face breathing issues, sometimes it was quite 
                                difficult for me to breath at night in winters. After Ayurvedic treatment for Asthma, I am highly satisfied with the 
                                results and I am recovering from my breathing issues. 
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Ellipse.png') }}" class="img-fluid" alt="Testimonial" >
                            <h3 class="usrname">ALEX MARTIN</h3>
                            <p class="desig">Envato Customer</p>
                            <ul>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </li>
                            </ul>
                            <p>
                                <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                My 17 years old son was totally dependent on Inhaler as he had chronic Asthma. 
                                We started with Ayurvedic medicines from Dr. Sharda Ayurveda. I cannot thank Dr. Mukesh Sharda enough for treating my
                                son’s problem and making him healthy. He started breathing healthy without any use of Inhaler. 
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-product causes" id="faqs">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12">
                <div class="prod-tp-content aos-init aos-animate" data-aos="zoom-in" data-aos-duration="4000">
                    <h2><b>FAQ'S</b></h2>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">               <i class="fa" aria-hidden="true"></i>
                                Can One Opt For Ayurvedic Treatment For Asthma? 
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Ayurveda is the oldest form of medicine that began in India. It uses all the healthy nutritious herbs
                            to formulate medicines. Ayurveda transforms an Individual completely. Ayurveda cures a patient naturally with least
                            side-effects. It focuses on restoration of airway passage which is the major cause of Asthma. Choose best Ayurvedic 
                            Doctor in India Dr. Mukesh Sharda and get relieve from Asthma.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa" aria-hidden="true"></i>
                                Can Ayurveda Permanentely Cure Asthma ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Ayurveda works on all the natural methods. By adopting healthy lifestyle, change in diet 
                            and exercising regularly one can definitely see change in their life. Also with it one needs to consult an
                            Ayurvedic doctor and follow all his medications to treat Asthma and get rid of it.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa" aria-hidden="true"></i>
                                Which All Fruits Cannot be Taken i Asthma? 
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Banana, Citrus Fruits like Oranges and  Maraschino Cherries should be avoided. Always avoid intake of all sour fruits. 
                            Rest of the Fruits always consume at room temperature.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa" aria-hidden="true"></i>
                                How to remove mucus from lungs at home? 
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Honey tea- Honey tea can be made by mixing about 2 teaspoons of honey with warm water or tea.Saltwater 
                            gargles- Saltwater helps in reducing mucus and phlegm from your throat. Steam-Steam helps in clearing mucus 
                            or phlegm out of your lungs. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fa" aria-hidden="true"></i>
                                Can Asthma damage lungs? 
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Asthma can cause permanent damage to your lungs if not treated early and in right way. Best Ayurvedic treatment 
                            for Asthma can save you timely and early. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingSeven" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fa" aria-hidden="true"></i>
                                What causes Asthma?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            There are several reasons that causes Asthma. It is usually caused by a mixture of hereditary factor i.e.- inherit from
                            birth and some environmental factors. Certain Allergants from house,dust, mites and pets are the common causes. Other 
                            allergens, such as pollen can also cause Asthma. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fa" aria-hidden="true"></i>
                                How long does Asthma attack last? 
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            An Asthma attack can last for several continuous hours if not treated timely. 
                            Acute Asthma attack last for few minutes but a chronic attack takes several hours and a proper medication is required. 
                            Medical treatment is mandatory is case of shortness of breath.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fa" aria-hidden="true"></i>
                                Does Asthma gets worsen by age?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                        <div class="card-body">
                            Yes, poorly treated Asthma obviously gets worsen by age. The lungs start to function less in comparison to 
                            non- asthmatic persons. Modern medications have temporary treatment for Asthma. They provide treatment to relieve 
                            the symptoms by giving Inhaler. But in Ayurveda treatment for Asthma has sure results and can be treated at any stage 
                            of life. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                Is Asthma a life-long disease?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                        <div class="card-body">
                            Asthma can become a life-long disease if it is not treated in a healthy way. By Ayurvedic treatment it can be vanished. 
                            Course of Ayurvedic treatment followed by dietary changes and exercises one can easily recover from Asthma without 
                            any side effects on health. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                Do Asthma triggers more in cold weather?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                        <div class="card-body">
                            Yes, to some Asthma triggers more in cold weather conditions due to seasonal changes.
                            It is mandatory to carry your medicines with you specially in changing weather and environmental conditions. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="latest-post-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="lp-content">
                    <h2>Latest <b>Post</b></h2>
                    <p>Once You Choose Dr. Sharda Ayurvedic Hospital In</p>
                </div>
            </div>
        </div>
        <div class="row custom-lp">
            <div class="col-xl-4 col-md-12 mb-4" data-aos="zoom-in" data-aos-duration="4000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 mb-4" data-aos="zoom-in" data-aos-duration="4000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 mb-4" data-aos="zoom-in" data-aos-duration="4000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('../partials/frontend/form')
<style>
    .carousel-inner {position: relative;width: 100%;overflow: hidden;}
    .carousel-item {position: relative;float: left;width: 100%;margin-right: -100%;-webkit-backface-visibility: hidden;backface-visibility: hidden;transition: -webkit-transform .6s ease-in-out;transition: transform .6s ease-in-out;transition: transform .6s ease-in-out,-webkit-transform .6s ease-in-out;}
    .card-body {padding-top: 1.5rem;padding-bottom: 1.5rem;-webkit-border-radius: 0!important;border-radius: 0!important;flex: 1 1 auto;-ms-flex: 1 1 auto;}
    .card .card-body a h3{font-size: 18px;color: #ff9000;line-height: 1.4;}
    .card .card-body h3{color: #373433;font-size: 18px;    line-height: 1.4;}
    .font-weight-bold {font-weight: 700!important;}
    .card-title {margin-bottom: .75rem;}
    .card-img-top {width: 100%;border-top-left-radius: calc(.25rem - 1px);border-top-right-radius: calc(.25rem - 1px);}
</style>
<script type="text/javascript">
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            responsiveClass: !0,
            navigation : true,
            autoplay: true,
            loop: true,
            smartSpeed: 2500,
            singleItem : true,
            navigationText: ["<i class='fa fa-angle-left fa-2'></i>", "<i class='fa fa-angle-right fa-2'></i>"],
            items: 2,
            responsive: {
                0: {
                    items: 1,
                    nav: !1
                },
                480: {
                    items: 1,
                    nav: !1
                },
                768: {
                    items: 2,
                    nav: !1
                },
                1000: {
                    items: 2,
                    nav: !1,
                    loop: !1,
                    margin: 20
                },
                1024: {
                    items: 3,
                    nav: !1,
                    loop: !1,
                    margin: 20
                },
                1366: {
                    items: 3,
                    nav: !1
                }
            }
        })
    });

</script>
@stop