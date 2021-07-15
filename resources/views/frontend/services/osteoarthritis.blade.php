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
                    <h3 class="ser-heading-min mt-4" >Osteoarthritis</h3>
                    <!--<p style="font-size: 24px;">Easy Bowel Movements with Ayurveda <br /> Not just symptomatic, Get Root cause treatment for Gout</p>-->
                    <ul class="bread">
                        <li class="breadcrumb-item active" aria-current="page">Home&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li ><a href="https://www.drshardaayurveda.com/osteoarthritis /">Osteoarthritis </a></li>
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
                <h2>Osteoarthritis Ayurvedic <b>Treatment</b></h2>
                <p>
                    Osteoarthritis is considered one of the common long-lasting chronic joint disorders that affect any joints of the body 
                    especially the joints that bear the weight of the body such as knees and feet. The most common joints are affected 
                    with Osteoarthritis. Where there is an ending to the bones, there they are covered with a protective tissue called Cartilage.
                    Whenever there is a breakdown or loss of the cartilage of one or more weight-bearing joints, then this issue occurs which
                    results due to degenerative changes in cartilage. Cartilage provides a cushion between joints of bones. When this condition 
                    gets affected due to age, weight, and injury pain starts to occur in joints. This commonly occurs to an obese person.
                    <span id="dots" data-aos="fade-up" data-aos-duration="3000">............</span>
                </p>
                <span id="more-content">
                    <p>
                        With obesity, there is an increase in mechanical stress on joint hence cartilage get inflamed. Crystals deposits in cartilage
                        in gout can also cause Osteoarthritis. In the hip joint, it is related to structural abnormality of joint.
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
                    <h2>Causes of <b>Osteoarthritis </b></h2>
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
                                    Age Factor
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                With aging when the water content of cartilage increases, degeneration of cartilage occurs due to the biologic process.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Degeneration of Cartilage 
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                In day-to-day life, cartilage begins to degenerate by flaking forming tiny crevasses.
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
                                    Injury
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                            <div class="card-body">
                                Injury to knee joint mechanically irritates and inflame cartilage cause pain and swelling.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Cushion loss
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                            <div class="card-body">
                                leads to friction in both joints hence limiting mobility.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Obesity
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion1">
                            <div class="card-body">
                                An obese person will always be more prone to suffer from Osteoarthritis as the cartilage of the knees is unable to handle
                                the weight of the body. 
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
        <h3><span>Symptoms of</span> Osteoarthritis   </h3>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Pain in Joints</p>
        <p>Most common symptom is pain in the joint. The joints involved are the knee, hip, ankle, foot, wrist, and shoulders.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Swelling /Inflammation</p>
        <p>Later swelling develop with pain over the affected joint with warmth or inflammation.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Stiffness</p>
        <p>Sometimes there is so much stiffness that it gets hard to even move fingers and toes. </p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Cracking Sound</p>
        <p>Cracking of the affected joint is heard with the movement of the specific joint.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Numbness</p>
        <p>
            Osteoarthritis of the spine leads to spur or osteophytes formation and irritates spinal nerve which leads to tingling and numbness in limbs.
            Symptoms vary from person some even develop degeneration of joints some show only crepitus. Osteoarthritis is characterized by a 
            degenerative change in cartilage
        </p>
    </div>
</div>
<div class="split"></div>

<section class="dsa-why-choose" id="advantages">
    <div class="container-fluid">
        <div class="row cut-row" >
            <div id="hgte2" class="col-xl-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="4000">
                <h2 class="client-test-title" style="font-size: 24px !important;">Benefits of Ayurvedic<b>Treatment for Osteoarthritis </b></h2>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Patients with OA of the knee or hip should avoid prolonged standing, kneeling, and squatting
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    An Obese person should reduce their body weight as the knee joint is the first one to get affected as it can bear only a specified weight. 
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Warm oil application is quite helpful in non-inflammatory conditions in Osteoarthritis. 

                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    If your posture is incorrect and a problem occurs due to it, then Ayurveda helps to correct posture through Yoga and Exercises. 
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurveda offers a safe, beneficial, and effective treatment to treat Osteoarthritis
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
                                I had Osteoarthritis in my lower back and hands for 4 years. It slowly moved to my Knees too. 
                                I kept on practicing some stretching exercises to get relief from pain but could not see any results now and was 
                                slowly getting dependent. I consulted Dr. Sharda Ayurveda for the treatment and that worked for me. I was happy 
                                I chose the best Ayurvedic treatment from them. Thankfully they saved me from getting bedridden. 
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
                                At the age of 49 I began having severe knee pain and it was very hard for me to walk even. 
                                I consulted an orthopedic and they suggested Knee surgery. I read somewhere about Dr. Sharda Ayurveda
                                treatment without any surgery. I and my daughter visited there and met specialist Dr. Mukesh Sharda.
                                I began with Ayurvedic treatment for Osteoarthritis and within few months of treatment, I started healing.
                                They have the best Ayurvedic treatment. 
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
                                So far I have not received any better treatment than from Dr. Sharda Ayurveda. I was going through hip pain and pain 
                                in my right leg and was getting worse over the period. I consulted Dr. Sharda Ayurveda for treatment. They gave me hope 
                                to recover and also gave me an osteoarthritis treatment diet and finally I recovered from my severe pain.
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
                                What happens if Osteoarthritis is left untreated?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion3">
                        <div class="card-body">
                            OA gets worsens with time. Cartilage becomes more degenerative thus causes spurs or osteophytes.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa" aria-hidden="true"></i>
                                Can early OA be cured by Ayurveda?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion3">
                        <div class="card-body">
                            Yes, it can be cured at every stage by monitoring health issues like Obesity and diabetes. Early symptoms should never
                            be ignored and treated timely. Diet and lifestyle modifications also help in early recovery. Dr. Sharda Ayurveda is one of 
                            the fastest-growing clinic in India, traditional medicines which are used have evidence for its effectiveness is satisfactory.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa" aria-hidden="true"></i>
                                Does cold weather affects OA?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                        <div class="card-body">
                            Changing weather conditions do affects OA. It is observed that cold and snowy weather leads to an increase in pain in joints.
                            It is actually due to barometric pressure which leads to joint discomfort.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa" aria-hidden="true"></i>
                                What are the bad foods for OA?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion3">
                        <div class="card-body">
                            Refined sugar, salt, Rice Saturated fat, and trans fat, Dairy products, Alcohol, and smoke. One should 
                            always maintain a distance from this food while ongoing Ayurvedic treatment.  
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
                                    What is the main cause of OA?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion4">
                            <div class="card-body">
                                Osteoarthritis is primarily caused by the wear and tear of cartilage which is rubbery material in between joints
                                and avoids friction in joints. If there is any destruction in cartilage that will lead to Osteoarthritis
                            </div>
                        </div>
                    </div>
                    <div class="card-header" id="headingSix" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fa" aria-hidden="true"></i>
                                Is Desi ghee good for osteoarthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion4">
                        <div class="card-body">
                            Ghee is one of the mandatory food items you need if you have joint pain, arthritis. It helps in reducing inflammation,
                            lubricates joints, and also helps in reducing joint stiffness caused by arthritis. It helps in the generation of the lost
                            synovial fluid in joints
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fa" aria-hidden="true"></i>
                                What are the different stages of osteoarthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion4">
                        <div class="card-body">
                            Osteoarthritis has generally 4 stages that are divided as- 
                            <ul>
                                <li>Stage 1 – Minor Stage-It is the minor wear and tear in the joints. </li>
                                <li>Stage 2 – Mild Stage- Bone spurs become noticeable.</li>
                                <li>Stage 3 – Moderate Stage- Moderate Cartilage gets affected. </li>
                                <li>Stage 4 –Severe Stage- The patient feels extreme pain.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fa" aria-hidden="true"></i>
                                What can I do to prevent Osteoarthritis to get worse?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion4">
                        <div class="card-body">
                            Timely treatment helps in early recovery. The ayurvedic course of treatment may take a little extra 
                            time for recovery but the results are excellent. Dr. Sharda Ayurveda provides the best Osteoarthritis 
                            treatment in India. With some dietary and lifestyles changes, one can save themselves from disease to get worsen. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fa" aria-hidden="true"></i>
                                How is Obesity one of the causes of Osteoarthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion4">
                        <div class="card-body">
                            Obesity is one of the risk factors for Osteoarthritis especially for the Knee joint as the extra weight of the body will 
                            directly harm the knee joints because it is the Knees that have the weight burden of the body.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                What are the major organs affected by Osteoarthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion4">
                        <div class="card-body">
                            Weight-bearing joints such as knees, feet, and hips are commonly affected with Osteoarthritis. It also hampers 
                            the functioning of the Hands, lower back, and neck.
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