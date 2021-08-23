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
                    <h3 class="ser-heading-min mt-4" >Psoriatic Arthritis</h3>
                    <!--<p style="font-size: 24px;">Easy Bowel Movements with Ayurveda <br /> Not just symptomatic, Get Root cause treatment for Gout</p>-->
                    <ul class="bread">
                        <li class="breadcrumb-item active" aria-current="page">Home&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li ><a href="https://www.drshardaayurveda.com/psoriatic_arthritis/">Psoriatic Arthritis</a></li>
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
                <h2>Psoriatic Arthritis Ayurvedic <b>Treatment</b></h2>
                <p>
                    It is a type of life-long arthritis that affects people suffering from Psoriasis. It is categorized as a chronic condition that 
                    when it becomes severe, sometimes even leads to permanent damage to joints. The severity of pain and damage varies from person 
                    to person. Some people face severe problems i.e. their several joints are affected and some have mild problems in 1-2 joints. 
                    It is seen that out of 3 patients with psoriasis 1patient suffers from Psoriatic arthritis. Usually, Psoriatic arthritis develops
                    after 5-10 years of suffering from psoriasis and sometimes a person develops psoriatic arthritis within a few months of getting
                    psoriasis or decades later too. Psoriatic arthritis is also an autoimmune disorder. Usually, Psoriatic arthritis will never be 
                    detected through blood investigations. Psoriatic arthritis affects large joints especially of lower limbs i.e. joints of finger
                    and toe, back, or sacroiliac joint of the pelvis. Psoriatic arthritis appears in people between the age of 30 -50 but can begin
                    in childhood too. 
                    <span id="dots" data-aos="fade-up" data-aos-duration="3000">............</span>
                </p>
                <span id="more-content">
                    <p>
                        Men, Women, and children are equally at risk of developing Psoriatic arthritis. It is seen that children with Psoriatic 
                        arthritis also uveitis. It can begin at any age group. Psoriatic arthritis causes inflammation of the spine or 
                        inflammation of tendons, cartilage, eye, and lung. In rare cases, people have psoriatic arthritis and never have any
                        noticeable patches of psoriasis. Many people with this condition show the symptoms of morning stiffness and even mild
                        skin psoriasis can be a significant degree of arthritis. Ayurvedic Medicines for psoriatic arthritis work wonders and is
                        treatable at any stage. 
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
                    <h2>Causes of <b>Psoriatic Arthritis</b></h2>
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
                                    Family History/ Genes
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Many people with psoriatic arthritis have a family history of either psoriasis or psoriatic arthritis. 
                                It is 4 times more common in children whose parents are suffering from psoriasi.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Infections
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                An infection also affects the immune system that can be responsible for Psoriatic arthritis. 
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
                                    Psoriasis
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                            <div class="card-body">
                                More than 30% of people having psoriasis have chances to get Psoriatic arthritis. It affects every age group equally.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Weak Immune system
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                            <div class="card-body">
                                Psoriatic arthritis occurs when your body's immune system begins to attack healthy cells and tissue.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Environmental Factor
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion1">
                            <div class="card-body">
                                Environmental factor is one of the causes of Psoriasis thus also causing Psoriatic arthritis. 
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
    <div class="kmoz px-4" >
        <img src="{{ URL::asset('front/images/symptoms-of-asthma.webp') }}" class=" w-100 ima">
    </div>
    <div class="cvn sym px-4" >
        <h3><span>Symptoms of</span> Psoriatic Arthritis  </h3>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Joint pain</p>
        <p>Joint pain and swelling which is worse in the morning.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Eyes redness</p>
        <p>Eyes get red due to inflammation around the pupil of the eye.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Nail weakness</p>
        <p>Nail pitting is seen in 80 percent of patients with onycholysis in the nail </p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Fatigue</p>
        <p>A person feels restless all day long.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Bone Weakness</p>
        <p>Inability to perform any physical activity due to weakening of bones and severe pain in joints. </p>
    </div>
</div>
<div class="split"></div>

<section class="dsa-why-choose" id="advantages">
    <div class="container-fluid">
        <div class="row cut-row" >
            <div id="hgte2" class="col-xl-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="4000">
                <h2 class="client-test-title" style="font-size: 24px !important;">Benefits of Ayurvedic<b>Treatment for Psoriatic Arthritis  </b></h2>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurveda suggests avoiding acidic foods. It is mandatory to keep 75% of the diet alkaline.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Panchkarma is advised for the detoxification of toxins. Blood purifiers are also given to the patients to reduce 
                    increased toxins inside the body
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Psoriatic arthritis can be treated in Ayurveda by following Shodhan and Shaman chikitsa. Shaodhan includes the Virechna 
                    procedure to remove toxic waste materials from the body and boost the immune system. 
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    In addition to it some internal medicines are prescribed which provides additional relief within and helps in eradicating a disease.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    An Individual must be in a state of mental calmness.
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
                                I was suffering from Psoriasis for many years. I used to apply some cream to get relief. Few days it went all okay but 
                                it used to reoccur. I also started having pain in my body after few months. I got to know about Dr. Sharda Ayurveda
                                treatment for Psoriasis. Doctors told me that pain in my joint is due to Psoriatic arthritis which I was unaware of. 
                                They began with psoriatic arthritis Ayurvedic treatment of mine and added with some medications of Psoriasis too. 
                                I have good relief and recovering
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
                                Due to Psoriasis I was affected with Psoriatic arthritis too and was in great pain. I started psoriatic 
                                arthritis treatment in Ayurveda from Dr. Sharda Ayurveda clinic. Slowly after the treatment, I was relieved 
                                from pain in my joints and kept on consulting them for few months. After a course of treatment, I was completely
                                healthy and fit.
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
                                Dr. Sharda Ayurveda is the best psoriatic arthritis treatment Clinic in India. I always used to hear it cannot be 
                                treated but under their guidance and Ayurvedic medicines I could easily recover. I completely followed the psoriatic
                                arthritis diet prescribed by them and also all the precautionary measures. I will be forever thankful to them.
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
            <div id="accordion3">
                <div class="card">
                    <div class="card-header" id="headingOne" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">               <i class="fa" aria-hidden="true"></i>
                               How is psoriatic arthritis described in Ayurveda?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion3">
                        <div class="card-body">
                            According to Ayurveda, Psoriatic arthritis is deliberated as the increase of Kapha, Vata, and Pitta dosha. Other 
                            factors responsible are Irregular food habits, excessive intake of black grams, yogurt, sour and salted food, and 
                            Seafood. Stress also triggers pathogenesis. Consumption of alcohol and tobacco are also the cause of it. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa" aria-hidden="true"></i>
                                Is psoriatic arthritis curable in Ayurveda?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion3">
                        <div class="card-body">
                            Yes, there is a very effective treatment for psoriatic arthritis in Ayurveda At Dr. Sharda Ayurveda we choose our 
                            medicines very carefully from our classical texts. A patient is advised to follow the diet and day rituals routine 
                            according to the physician and regular follow-up is mandatory. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa" aria-hidden="true"></i>
                                Is Turmeric beneficial to treat psoriatic arthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                        <div class="card-body">
                            Turmeric is highly helpful for treating psoriatic arthritis as it reduces inflammation internally and externally and also helps in relieving pain. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa" aria-hidden="true"></i>
                                Who is more prone to be affected by psoriatic arthritis men or women?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion3">
                        <div class="card-body">
                            Both men and women are equally affected by psoriatic arthritis. Its progress varies differently in men and women. 
                            Men may more likely develop joint damage while women suffer from more severe symptoms. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fa" aria-hidden="true"></i>
                                For treating psoriatic arthritis does one need to take medicines for life long?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion3">
                        <div class="card-body">
                            With Ayurvedic medicines, one need not take medicines for life-long. Ayurveda cures it completely and
                            patients do not have to take medicine for a long time. Also if a patient follows all the guidelines one 
                            recovers easily and early. 
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
                                    Does psoriatic arthritis affect nails?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion4">
                            <div class="card-body">
                                Yes, about 80% of people with psoriatic arthritis have fingernails or toenail with psoriasis. Nail discoloration and spots of blood under the 
                                nails are mostly noticed symptoms
                            </div>
                        </div>
                    </div>
                    <div class="card-header" id="headingSix" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fa" aria-hidden="true"></i>
                                Which parts of the body are affected by psoriatic arthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion4">
                        <div class="card-body">
                            It can occur in any part of the body but mainly affects the knee, fingers, toe, and spine.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fa" aria-hidden="true"></i>
                                What happens if psoriatic arthritis is left untreated?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion4">
                        <div class="card-body">
                            If psoriatic arthritis is left untreated then it causes permanent joint damage and also causes inflammation in respiratory, digestive, cardiovascular system. Psoriatic arthritis also affects the immunity of the body and patients complain of many systemic disorders.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fa" aria-hidden="true"></i>
                                 What causes psoriatic arthritis to flare up?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion4">
                        <div class="card-body">
                            Trigger factors like stress, antimalarial drugs, obesity can flare psoriatic arthritis symptoms.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                How does psoriatic arthritis look like?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion4">
                        <div class="card-body">
                            Stiff, puffy, sausage-like fingers or toes with joint pains tenderness are clinical symptoms. Other symptoms of psoriasis are dry, red skin patches with silvery-white scales are also present.
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
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3" data-aos="zoom-in" data-aos-duration="4000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3" data-aos="zoom-in" data-aos-duration="4000">
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