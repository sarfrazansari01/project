<?php
/**
 * Diabetes Page 
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
                    <h3 class="ser-heading-min mt-4" >Ankylosing Spondylitis </h3>
                    <!--<p style="font-size: 24px;">Easy Bowel Movements with Ayurveda <br /> Not just symptomatic, Get Root cause treatment for Gout</p>-->
                    <ul class="bread">
                        <li class="breadcrumb-item active" aria-current="page">Home&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li ><a href="https://www.drshardaayurveda.com/ankylosing_spondylitis/">Ankylosing Spondylitis </a></li>
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
                <div class="left-img crc" data-aos="zoom-in" data-aos-duration="4000">
                    <img src="{{ URL::asset('front/images/asthma.webp') }}" class="why-choose-us img-fluid" alt="why choose">
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="4000">
                <h2>Ankylosing Spondylitis <b>Ayurvedic Treatment</b></h2>
                <p>
                    Ankylosing Spondylitis is a form of arthritis with inflammation in the spine which causes pain and stiffness in the back. 
                    "Ankylosis" means fused bones or other hard tissue. "Spondylitis" means inflammation in spinal bones or vertebrae. It usually 
                    starts with lower back pain. It also spreads up to the neck and can also damage these joints. Sometimes other body parts like 
                    the shoulder, hip, ribs, heels, and small joints of the hand and feet also get affected. Internal organs like the eye might show 
                    Iritis i.e. inflammation of the iris. Significant features of lower back pain are observed due to the involvement of sacroiliac joints.
                    Usually, people of age late teens or 20s suffer from this disease. When inflammation occurs, it leads to extra production of
                    calcium around bones hence bone growth and stiffness occurs, sometimes even bones get fused. This fusion makes the spine less
                    flexible and can result in hunched forward posture.
                    <span id="dots" data-aos="fade-up" data-aos-duration="3000">............</span>
                </p>
                <span id="more-content">
                    <p>
                        When ribs get affected, it causes difficulty in breathing deeply. In Ankylosing Spondylitis the ethereal fibrocartilage 
                        gets affected which causes synovitis in bone and hence original cartilage gets replace by bone through fusion. This fusion 
                        overall causes stiffness and immobility. The inflammation is immune-mediated and there is close relation with HLA-B27. 
                        No specific agent is known that triggers the onset of the disease, but there is interest to connect stomach infection 
                        (Irritable bowel syndrome) to synovial inflammation due to the interrelation between HLA-B27 and certain enteric bacteria. 
                        Ankylosing Spondylitis Pain can be controlled with Ayurvedic medicines.
                    </p>
                    <div class="btn-banner crd">
                        <a href="#" class="btn-appointment">BOOK AN APPOINTMENT</a>
                    </div>
                </span>
                <button class="btn-gen mt-2" onclick="readMoreReadLess()" id="myBtn" data-aos="fade-up" data-aos-duration="3000">Read more</button>
            </div>
        </div>
    </div>
</section>

<section class="our-product causes" id="causes">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12">
                <div class="prod-tp-content aos-init aos-animate" data-aos="zoom-in" data-aos-duration="4000">
                    <h2>Causes of <b>Ankylosing Spondylitis </b></h2>
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
                                    Genetics
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                If your parents or grandparents have Ankylosing spondylitis, you're more likely to develop it yourself
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Exertion
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                It is believed that excessive work and less rest also causeAnkylosing spondylitis. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div id="accordion1">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bones Weakness
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                            <div class="card-body">
                                Weakness of bones due to lack of nutrients, calcium, and vitamin D in food is the biggest reason for spondylitis
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Incorrect Posture
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                            <div class="card-body">
                                The wrong way to sit or stand can lead you to the problem of spondylitis.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Presence of Hla-B27
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion1">
                            <div class="card-body">
                                Genetic marker HLA-B27 is found almost in 95 percent of people suffering from this disease.
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
    <div class="kmoz px-4">
        <img src="{{ URL::asset('front/images/symptoms-of-asthma.webp') }}" class=" w-100 ima">
    </div>
    <div class="cvn sym px-4">
        <h3><span>Symptoms of</span> Ankylosing Spondylitis </h3>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Morning Stiffness</p>
        <p>Stiffness and pain in the lower back early in the morning that lasts at least 30 minutes.  </p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Inflammation</p>
        <p>Pain and swelling are seen on fingers and toes.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Soreness in Heels</p>
        <p>Soreness of heels and in the arch of the foot</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Bodyache</p>
        <p>Severe pain and stiffness over multiple areas of the body for a longer period.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Fatigue</p>
        <p>A person remains in a state of tiredness almost every time. </p>
    </div>
</div>
<div class="split"></div>

<section class="dsa-why-choose" id="advantages">
    <div class="container-fluid">
        <div class="row cut-row" >
            <div id="hgte2" class="col-xl-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="4000">
                <h2 class="client-test-title" style="font-size: 24px !important;">Ayurveda Benifites for <b>Ankylosing Spondylitis</b></h2>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Try walking as it increases bone mass and be physically active.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Always sleep on a comfortable bed. Keep in mind that the bed is neither too stiff nor too soft
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    People with Ankylosing spondylitis should avoid the habit of placing a pillow under the neck or the feet. 
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurveda offers many excellent therapies for treatment for Ankylosing spondylitis which includes detoxification by Panchkarma. 
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Massage the neck with warm sesame oil for 5 to 10 minutes, put a bandage of warm water there. It will decrease the swelling. 
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
            <div id="accordion3">
                <div class="card">
                    <div class="card-header" id="headingOne" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">               <i class="fa" aria-hidden="true"></i>
                                What is a serious complication of Ankylosing spondylitis? 
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion3">
                        <div class="card-body">
                            It causes difficulty in breathing it reduced the ability to expand the chest and hence it causes Ankylosing spondylitis.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa" aria-hidden="true"></i>
                                Can you live a long life with Ankylosing spondylitis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion3">
                        <div class="card-body">
                            Almost all people with Ankylosing spondylitis can expect to lead normal and productive lives. Despite the chronic
                            nature of the illness, only a few people with Ankylosing spondylitis will become severely disabled.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa" aria-hidden="true"></i>
                                Do I need to follow a special diet to cure Ankylosing Spondylitis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                        <div class="card-body">
                            Yes, it is very important to follow a healthy diet plan to cure such disease and reduce weight, carrying extra weight adds stress to joints.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa" aria-hidden="true"></i>
                                Describe the pain associated with Ankylosing Spondylitis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion3">
                        <div class="card-body">
                            Pain origin in the back from deep within the buttocks and is accompanied by morning stiffness. It worsens or gets better or stops completely at regular intervals.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fa" aria-hidden="true"></i>
                                Is heat or cold better for Ankylosing Spondylitis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion3">
                        <div class="card-body">
                            Heat is good for pain and stiffness in joints and muscles. Hence hot fermentation helps patients to get relief from pain in the morning. Cold reduces inflammation of joints
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div id="accordion4">
                <div class="card">
                    <div class="card">
                        <div class="card-header" id="headingFive" style="background-color:transparent;">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fa" aria-hidden="true"></i>
                                    Can Ankylosing Spondylitis cause bowel problems?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion4">
                            <div class="card-body">
                                Yes, it can develop bowel problems known as inflammatory bowel disease or colitis. Ayurvedic Treatment for Ankylosing Spondylitis is best for a speedy recovery. 
                            </div>
                        </div>
                    </div>
                    <div class="card-header" id="headingSix" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fa" aria-hidden="true"></i>
                                Will I have to take medications for Ankylosing Spondylitis lifetime?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion4">
                        <div class="card-body">
                            The symptoms and the level of disease an Individual suffers from depends on how long they have to keep taking 
                            Ayurvedic medicines. Ayurvedic medicines do take a little extra time to recover but treat disease from its root cause.
                            Ankylosing Spondylitis treatment clinic in India at Dr. Sharda Ayurveda is reliable and effective. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fa" aria-hidden="true"></i>
                                Does Ankylosing Spondylitis in pregnant women cause any complications to their baby?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion4">
                        <div class="card-body">
                            Ankylosing Spondylitis will not harm a baby in anyways. However, a pregnant woman is advised to take Ayurvedic medicines 
                            to control her symptoms but only after consulting an Ayurvedic expert before
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fa" aria-hidden="true"></i>
                                What Dietary precautions should be taken in Ankylosing Spondylitis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion4">
                        <div class="card-body">
                            Include more Fruits and Veggies in your daily diet. Add whole food and Grains. 
                            Avoid Alcohol, Sugar, sodium, and fat.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                Does a sedentary lifestyle causeAnkylosing Spondylitis
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion4">
                        <div class="card-body">
                            Yes, lack of physical activity, wrong posture, and prolonged sitting also cause Ankylosing Spondylitis.
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
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3" data-aos="zoom-in" data-aos-duration="4000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog�? In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3" data-aos="zoom-in" data-aos-duration="4000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog�? In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3" data-aos="zoom-in" data-aos-duration="4000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog�? In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('../partials/frontend/form')
@stop