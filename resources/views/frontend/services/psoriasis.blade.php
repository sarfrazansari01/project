<?php
/**
 * psoriasis Page 
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
            <div class="col-md-12" dalta-aos="zoom-in" data-aos-duration="3000">
                <div class="service">
                    <small>POWER TO HEAL</small>
                    <h3 class="ser-heading mt-4">PSORIASIS</h3>
                    <p>Breathing Healthy With Ayurveda</p>
                    <ul class="bread">
                        <li class="breadcrumb-item active" aria-current="page">Home&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li ><a href="https://www.drshardaayurveda.com/psoriasis/">Psoriasis</a></li>
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

<section class="dsa-why-choose" id="treatment">
    <div class="container-fluid">
        <div class="row cut-row">
            <div class="col-xl-6 col-md-12 mb-5 col-sm-12 mb-2">
                <div class="left-img crc" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/psoraises.webp') }}" class="why-choose-us img-fluid" alt="why choose">
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="3000">
                <h2>Psoriasis Ayurvedic <b> Treatment</b></h2>
                <p>
                     People often ignore Psoriasis as assuming it is a normal Infection of the Skin. The adverse impact of Psoriasis
                     even causes all the Skin of the body to shed off. 
                </p>
                <p>
                     Psoriasis is an autoimmune, non-contagious, chronic disease of the skin. It is a skin disorder that causes skin cells to 
                     multiply up to 10 times faster than normal. This makes theskin build up into bumpy red patches covered with white scales. 
                     In Psoriasis, the production of skin cells occurs in 3-4 days instead of 30 days hence causing shedding of skin. 
                     They can grow anywhere, but mostly appears on the scalp, elbows, knees, and lower back.
                </p>
                <p>
                     Psoriasis can't be spread from person to person. It does sometimes occur in members of the same family. 
                     Psoriasis usually appears in early adulthood. For most people, it affects just a few areas. In severe cases, 
                     Psoriasis can cover large parts of the body. The patches can heal and then come back throughout a person's life. 
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
                <h2 data-aos="fade-up" data-aos-duration="3000" class="aos-init aos-animate">Type's of <b>Psoriasis</b></h2>
            </div>
        </div>
        <div class="row cust-iba">
            <div class="col-xl-4 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box1 psor1">
                    <div class="xd">
                        <div class="cont">	
                            <div class="wht-space"></div>
                            <h3>Plaque Psoriasis </h3>
                            <p>
                                In Plaque Psoriasis, rashes are seen in red color on the body, inflamed in nature, and sometimes Whitish Silvery 
                                scales are found on elbows, knees, and the scalp.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box2 psor2">
                    <div class="xd">
                        <div class="cont">
                            <div class="wht-space"></div>
                            <h3>Guttate Psoriasis</h3>
                            <p>
                                In Guttate Psoriasis, pink and small spot-like rashes develop over arms and legs. This type of Psoriasis is
                                mostly seen in children.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-2 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box3 psor3">
                    <div class="xd">
                        <div class="cont">
                            <div class="wht-space"></div>
                            <h3>Inverse Psoriasis </h3>
                            <p>
                                As the name indicates, it is present in folds of skin like under the breast, armpits, groin. In Inverse 
                                Psoriasis skin appears red, shiny, and inflamed.
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
                <div class="prod-tp-content aos-init aos-animate" data-aos="zoom-in" data-aos-duration="3000">
                    <h2>Causes of <b>Psoriasis</b></h2>
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
                                    Excessive intake of Alcohol
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                High consumption of Alcohol causes Psoriasis to take birth. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Stress
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                A person who is staying under stress all day long is prone to be affected with Psoriasis. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Changing Weather conditions
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Changing Weather i.e. - Chilly Cold and Dry Weather also causes Psoriasis. 
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
                                   Injury to Skin
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                An Injury caused to the skin such as a cut or scrape, a bug bite.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Medications
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                               Certain medications are considered as Psoriasis trigger for example- High dose of medicines for Blood pressure and antimalarial medications.
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

<div class="wrp pt-5 mt-5 pb-5" id="symptoms">
    <div class="kmoz" >
        <img src="{{ URL::asset('front/images/psoriasias.webp') }}" class=" w-100 ima">
    </div>
    <div class="cvn sym" >
        <h3><span>Symptoms</span> of Psoriasis </h3>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Red Patches on Skin</p>
        <p>Red and raised patches are seen on Skin that is covered with thick Silvery scales. </p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Dry, Cracked Skin</p>
        <p>The skin becomes dry and cracked that may bleed or cause itching. </p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Swollen Joints</p>
        <p>The joints become stiff and also get swollen and leads to pain in joints too. </p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Weight loss</p>
        <p>Pitted Nails</p>
        <br>
        <p>Not every person will experience all of these above symptoms. </p>
        <p>Symptoms may vary if one has a less common type of psoriasis.</p>
    </div>
</div>
<div class="split"></div>

<section class="dsa-why-choose" id="advantages">
    <div class="container-fluid">
        <div class="row cut-row" >
            <div id="hgte2" class="col-xl-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="4000">
                <h2 class="client-test-title" style="font-size: 24px !important;">Advantages of Ayurvedic<b> Treatment For Psoriasis</b></h2>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurveda works on treating the disease from its root cause
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurveda does not work on treating symptoms, it heals an Individual within.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Psoriasis can never be cured with Steroid based creams. It demands a proper Ayurvedic treatment for lifelong healing.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Rasayanachikitsa (immunomodulation) is advised for boosting immunity.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Garlic and Onions are used to purify the blood.
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

<section class="client-testimonial" data-aos="zoom-in" data-aos-duration="3000" id="testimonials">
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

                            <p><span><i class="fa fa-quote-left" aria-hidden="true"></i>
                                </span>I was suffering from Psoriasis for the past 3 years. Always got temporary relief till the time I was Intaking medicines. After Ayurvedic treatment for Psoriasis from Dr. Sharda Ayurveda, I was finally relaxed and free from Psoriasis. <span><i class="fa fa-quote-right" aria-hidden="true"></i>
                                </span></p>
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
                                Due to Psoriasis my father’s skin was always shedding and he was in great discomfort. We consulted Dr. Sharda Ayurveda for treatment and within few months of Ayurvedic treatment, we were highly satisfied with the results. 
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
                                I just wanted to take a moment and thank Dr. Sharda Ayurveda for awesome Ayurvedic treatment for Psoriasis. Their medicines are quite effective and helped in treating my 8 years old Psoriasis. 
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
                <div class="prod-tp-content aos-init aos-animate" data-aos="zoom-in" data-aos-duration="3000">
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
                                How is Psoriasis diagnosed?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            There is no special blood tests or diagnostic parameter to diagnose it. Qualified and experienced Doctors can diagnose it after seeing its symptoms and by Pulse reading.  A skin biopsy may be sometimes useful in diagnosis.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa" aria-hidden="true"></i>
                                What Ayurveda says about Psoriasis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Ayurvedic texts say that Psoriasis arises due to an imbalance of two “Doshas,” or areas of energy. Practitioners of Ayurvedic medicine call these the “Vata” and “Kapha.” Vata is responsible for controlling bodily functions and could contribute to the dryness and skin scaling of Psoriasis. Increase in Kapha leads to any skin disease. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa" aria-hidden="true"></i>
                                Is there any dietary restrictions for Psoriasis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Yes, Sour, Salty, heat-producing food items like Pepper, Curd, Milk, Sugar, Meat or nonveg, Sesame seeds Black gram are contraindications, alcoholic and carbonated drinks, packed food, junk food are to be avoided. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa" aria-hidden="true"></i>
                                Whether Psoriasis trigger in different seasons?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Yes, seasonal changes play an important role in its outbreaks. Sunlight sometimes in summers heals Psoriasis and leads to a decrease in symptoms while cold and dry air in winters aggravates or triggers the disease.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fa" aria-hidden="true"></i>
                                Which is the best herb for Psoriasis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Turmeric is part of the same family as the ginger plant. Its active ingredient is called curcumin. Turmeric has unique anti-inflammatory and antibacterial properties, which have led scientists to study it as a treatment for psoriasis.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingSix" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fa" aria-hidden="true"></i>
                                Does Psoriasis has a permanent cure?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            In Ayurveda, it can be cured but it depends upon the patient's power, faith in Medicine, and Doctor, his dedication towards recommended Diet and Lifestyle
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fa" aria-hidden="true"></i>
                                Is Ayurvedic treatment effective for Psoriasis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                           Ayurvedic treatment for Psoriasis is quite effective as Ayurveda has various Herbs that help fight Psoriasis. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fa" aria-hidden="true"></i>
                                How long does Ayurvedic treatment last for Psoriasis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            Ayurvedic treatment is never the same for 2 human beings. It varies according to Dosha. So the time for treatment also varies according to individuals and their type of Disease. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fa" aria-hidden="true"></i>
                                What is the root cause of Psoriasis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                        <div class="card-body">
                            Ill eating habits, overeating, and undigested Food can lead to Psoriasis. Some people who intake sour things with Milk are more prone to have Psoriasis. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                Will Psoriasis go away naturally?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                        <div class="card-body">
                            With modifications in Diet, Climatic changes will show fewer symptoms but will need Ayurvedic treatment for life long cure. 
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
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3" data-aos="zoom-in" data-aos-duration="3000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3" data-aos="zoom-in" data-aos-duration="3000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3" data-aos="zoom-in" data-aos-duration="3000">
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
@stop