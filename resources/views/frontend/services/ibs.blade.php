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
                    <h3 class="ser-heading-min mt-4" >IBS</h3>
                    <p style="font-size: 24px;">Easy Bowel Movements with Ayurveda <br /> Not just symptomatic, Get Root cause treatment for IBS</p>
                    <ul class="bread">
                        <li class="breadcrumb-item active" aria-current="page">Home&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li ><a href="https://www.drshardaayurveda.com/ibs/">IBS</a></li>
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
                <h2>Irritable Bowel Syndrome (IBS) <b>Treatment</b></h2>
                <p>
                    Irritable Bowel Syndrome (IBS) is a digestive disorder and in this era when people of all age groups are too much into junk and 
                    Unhygienic food and disturbed lifestyle usually complain about IBS, which disturbs the digestive system. IBS affects daily Bowel 
                    functioning. An Individual is not able to digest even a small amount of food. After repeated defecation also does not get the
                    satisfaction of clear bowel movement. In Ayurveda, IBS is called as Grahani. 
                    Inflammation in the Intestine leads to IBS. In IBS the small intestine somehow gets structurally as well as functionally
                    contaminated and hence the digestion gets disturbed. 
                    <span id="dots" data-aos="fade-up" data-aos-duration="3000">............</span>
                </p>
                <span id="more-content">
                    <p>
                        Ayurveda experts evaluate the Prakriti (Vata, Pitta, Kapha) of a patient before beginning with Ayurvedic Treatment for 
                        Irritable Bowel Syndrome and provide with best of effective Ayurvedic Medicines in India which have no side- effects on 
                        Health followed by Panchakarma with some Dietary changes i.e. fasting helps in recovery of a patient soon. 
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
                    <h2>Causes of <b>IBS </b></h2>
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
                                    Irregular eating habits
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Irregular and unhealthy eating habits lead to IBS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Eating at irregular intervals
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Not consuming meals on time and taking them at odd timings can also cause IBS.
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
                                    Excessive intake of Junk and Acidic Food
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                            <div class="card-body">
                                Overconsumption of Junk and Acidic food causes IBS
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Excessive intake of Spices
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                            <div class="card-body">
                                Over consumption of Spices in food leads to slower bowel movement and hence causes IBS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Excessive consumption of Alcohol
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion1">
                            <div class="card-body">
                                High intake of Alcohol causes IBS. 
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
        <img src="{{ URL::asset('front/images/symptoms-of-asthma.webp') }}" class=" w-100 ima">
    </div>
    <div class="cvn sym" >
        <h3><span>Symptoms</span> IBS  </h3>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Irregular bowel function</p>
        <p>IBS a person suffers from Irregular bowel movements.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Constipation</p>
        <p>A person is unable to freely pass stool</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Abdominal pain</p>
        <p>Due to the disturbance in the passing of stool, one goes through abdominal pain too. </p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Bloating in Abdomen or gas</p>
        <p>One is unable to digest food so suffers from gastric issues.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Excessive thirst</p>
        <p>An individual always feels thirsty.</p>
    </div>
</div>
<div class="split"></div>

<section class="dsa-why-choose" id="advantages">
    <div class="container-fluid">
        <div class="row cut-row" >
            <div id="hgte2" class="col-xl-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="4000">
                <h2 class="client-test-title" style="font-size: 24px !important;">Advantages <b>of IBS in Ayurveda </b></h2>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Practice Yoga for all body-wellness
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Try out Meditation and massage therapies to reduce stress
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    It not only heals the lining of the intestine but also relieve mental stress caused by IBS
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    It solves all the problems related to Agni (Fire). It controls all the gastric enzyme secretion needed for good digestion
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    It also heals the body by providing strength through medicines. It covers up all the deficiencies that occurred due to IBS.
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
                            <h3 class="usrname">HarbhajanKaur</h3>
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
                                My younger sister has been struggling with IBS for many years. Her IBS symptoms always used to shift between constipation and diarrhea. She tried several medications, several doctors, and natural remedies, but none of them worked. We began with treatment from Dr. Sharda Ayurveda clinic and she has seen huge changes in her health. By following the regular medications and diet, now all of her symptoms of IBS are gone.
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Ellipse.png') }}" class="img-fluid" alt="Testimonial" >
                            <h3 class="usrname">Ram Kumar</h3>
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
                                I have been suffering from IBS for the past 2 years. I had consulted so many doctors and have also gone through so many treatments. I switched from Allopathy to Ayurvedic treatment. After Ayurvedic treatment from Dr. Sharda Ayurveda, I am finally back to normal life after 4 months of their treatment. I would suggest anyone suffering from IBS, should consider the Ayurvedic treatment. 
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Ellipse.png') }}" class="img-fluid" alt="Testimonial" >
                            <h3 class="usrname">ManjinderKaur</h3>
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
                                Thankfully, I am no longer suffering from IBS and my health is stable after taking Ayurvedic medicines from Dr. Sharda Ayurveda. I took medicines for approximately 3 months and I am not taking medicines currently but maintaining my diet prescribed by them. Thanks to Dr. Sharda Ayurveda for the best medicines and advice. 
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
                                What type of treatment is available in IBS?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Ayurvedic Medicines with dietary changes followed by Panchakarma therapy. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa" aria-hidden="true"></i>
                                How to treat abdominal pain in IBS with Home Remedy?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Take a teaspoon of Ajwain along with warm water twice a day to get relief from abdominal pain. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa" aria-hidden="true"></i>
                                Does IBS has a co-relation with the mind?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Yes, it is co-related with a mind as the motor nerve gets activated which is responsible for Peristaltic movement in the abdomen
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa" aria-hidden="true"></i>
                                I have Abdominal pain for few days and I pass a stool after every meal. Are following the clinical signs of IBS?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Yes, Stool with mucus, abdominal pain, and motion after every meal is the Sign of IBS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div id="accordion2">
                <div class="card">
                    <div class="card">
                        <div class="card-header" id="headingFive" style="background-color:transparent;">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fa" aria-hidden="true"></i>
                                    Should one eliminate dairy products to treat IBS?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                            <div class="card-body">
                                There is no such specification to eliminate Dairy products rather it can affect the amount of calcium intake
                                in the body. Consult your specialist according to the symptoms.
                            </div>
                        </div>
                    </div>
                    <div class="card-header" id="headingSix" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fa" aria-hidden="true"></i>
                                Do Spicy foods affect IBS? 
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                        <div class="card-body">
                            There is no such specification that Spicy food affects the symptoms of IBS. But if they create any problem or provoke 
                            the symptoms then one should avoid taking them.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fa" aria-hidden="true"></i>
                                What can untreated IBS lead to?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                        <div class="card-body">
                            Untreated IBS leads to long-term abdominal pain and can also lead to anxiety or depression. It may lead to pain and
                            discomfort in the abdominal region
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fa" aria-hidden="true"></i>
                                Is IBS permanent?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                        <div class="card-body">
                            IBS does not cause damage to the digestive system. There is a sure cure for IBS in Ayurveda. Timely treatment of symptoms 
                            of IBS can stop the disease from getting chronic.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fa" aria-hidden="true"></i>
                                How to distinguish between IBS and IBD?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion2">
                        <div class="card-body">
                            IBS and IBD are both chronic conditions that cause abdominal pains, sometimes cramping, and urgent bowel movements. 
                            IBS affects the small and large intestines with the colon whereas IBD causes inflammation in the intestines.
                            IBD can be genetic too. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                Can IBS be treated without a treatment?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion2">
                        <div class="card-body">
                            IBS is not a disease to be ignored. It becomes chronic if not treated timely. It can never be treated without a proper
                            course of Ayurvedic treatment. Lifestyle and dietary changes may help in reducing symptoms but proper treatment is required
                            to treat it so that there are no more complications in the future.
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
@stop