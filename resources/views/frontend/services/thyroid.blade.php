<?php
/**
 * thyroid Page 
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
                    <h3 class="ser-heading mt-4">THYROID</h3>
                    <p>Breathing Healthy With Ayurveda</p>
                    <ul class="bread">
                        <li class="breadcrumb-item active" aria-current="page">Home&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li ><a href="https://www.drshardaayurveda.com/thyroid/">Thyroid</a></li>
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
                    <img src="{{ URL::asset('front/images/asthma.webp') }}" class="why-choose-us img-fluid" alt="why choose">
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="3000">
                <h2>Thyroid Ayurvedic <b>Treatment </b></h2>
                <p>
                    Thyroid occurs due to inadequate production of Thyroid hormone. Any structural or functional defect of the Thyroid gland leads to a decrease in the secretion of the hormone. Thyroid in Ayurveda cannot be considered as a single disease but is a syndrome, where an increase in pitta dosha leads to hypofunction of thyroid, Agni dusti, stress contributes to the imbalance of Vattadosha and therefore weight gain, heaviness, coldness are a sign of Kapha imbalance. In conclusion, we could say that imbalance of Vata Pitta Kapha leads to Thyroid. The thyroid gland is one of the most important and sensitive endocrine glands. It easily responds to stress. 
                    There are 2 types of Thyroid glands which are classified as- 
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
                <h2 data-aos="fade-up" data-aos-duration="3000" class="aos-init aos-animate">Type's of <b>Thyroid</b></h2>
            </div>
        </div>
        <div class="row cust-iba">
            <div class="col-xl-4 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box1">
                    <div class="xd">
                        <div class="cont">	
                            <div class="wht-space"></div>
                            <h3>HYPOTHYROIDISM</h3>
                            <p>
                                It is an Autoimmune disorder with less production of Thyroid hormone which causes Hypothyroidism
                                Hypothyroidism is the most common thyroid disorder, and it affects around 6-10% of women. According to Ayurveda hypothyroidism can be considered as a condition that results due to Agni Dushti.  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box2">
                    <div class="xd">
                        <div class="cont">
                            <div class="wht-space"></div>
                            <h3>HYPERTHYROIDISM</h3>
                            <p>
                                It is also an autoimmune disorder. In Ayurveda, it is termed, BHASMAK Rog.  Approximately 1% of the population suffers from hyperthyroidism. Hyperthyroidism is an excess secretion of thyroid hormones in the body. It includes many conditions such as GRAVE’S diseases, Goiter and Thyroiditis. In Ayurveda, hyperthyroidism is a condition due to increased PITTA in the body. Due to this increased pitta, the digestive fire also increases further imbalances the metabolism of the body.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-2 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box3">
                    <div class="xd">
                        <div class="cont">
                            <div class="wht-space"></div>
                            <h3>Allergic Asthma</h3>
                            <p>
                                Allergic Asthma is caused due to exposure to an allergen. Such as dust mites, animal fur or pollen from trees & grass. 
                                it can also be caused due to chemical fumes. Tabacco smoke can also cause allergic asthma 
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
                    <h2>Causes of <b>Thyroid</b></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-product" style="background-color:#f3f3f3">
    <div class="container-fluid cses" >
        <div class="row cust-product" >
            <div class="col-xl-6 col-md-6 mb-4">
                <ul>
                    <li style="color:#244236">Fatigue and Weakness</li>
                    <li>Weight gain and hard to lose weight</li>
                    <li>Dry, scaling, flaking skin</li>
                    <li>Puffiness around eyes and eyelids</li>
                    <li>Fungal infection</li>
                </ul>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 ndv">
                <p>
                    One suffering from Hypothyroidism suffers from Fatigue and weakness in the body. 
                    An Individual constantly gains weight and gets very difficult to reduce even after so many efforts. 
                    Major Skin issues are seen like cracked heels, dry and dull skin. Brittle, splitting, curved, or ridged nails.
                    Swelling around Eyes and eyelids is common.
                    Fungal Infection on nails or peeling/splitting of skin between toes also sometimes occur.
                </p>
                <div class="ancr">
                    <a href="#">Book An Apointment</a>&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
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
        <h3><span>Symptoms</span> of Thyroid </h3>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Excessive sweating</p>
        <p>Excessive Sweating and intolerance to heat is a big symptom.</p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Fatigue, lethargy, and general tiredness</p>
        <p>Restlessness, Fatigue becomes part of daily routine. </p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Reduced ability to concentrate</p>
        <p>One Loses the ability to concentrate on certain things. </p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Weight loss</p>
        <p>A patient suffers from major Weight loss. </p>
        <br>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Feelings of anxiety and nervousness</p>
        <p>An Individual suffers from mood swings and gets nervous easily. </p>
    </div>
</div>
<div class="split"></div>
<br>
<div class="wrp pt-5 mt-5" data-aos="zoom-in" data-aos-duration="3000" id="advantages">
    <div class="mz" style="background-color:#eeb03f">
        <h3><span>Advantages</span> of Ayurvedic<br> Treatment For Thyroid </h3>
        <p class="im3"><img src="{{ URL::asset('front/images/3.png') }}" alt="3.png">In Western medicine one will be required to take medications for life once one has been diagnosed with Thyroid. In Ayurveda by Ayurvedic treatment, management of diet, lifestyle, and Ayurvedic herbs can stop this disease from progressing further.</p>
        <p class="im3"><img src="{{ URL::asset('front/images/3.png') }}" alt="3.png">Ayurvedic treatment assist with the proper secretion of hormones and at the same time encouraging the proper absorption of nutrients.</p>
        <p class="im3"><img src="{{ URL::asset('front/images/3.png') }}" alt="3.png">Pranayama and Yoga create calm and relaxation and Ayurvedic treatment help relieve and control stress, which is the major contributor to Thyroid dysfunction. </p>
        <p class="im3"><img src="{{ URL::asset('front/images/3.png') }}" alt="3.png">The Ayurvedic treatment boosts the immune system and opens the body channels that control healthy metabolism.</p>
        <p class="im3"><img src="{{ URL::asset('front/images/3.png') }}" alt="3.png">All the Ayurvedic Medicines at Dr. Sharda Ayurveda are Nature extracted and works on treating the root cause of disease.</p>
    </div>
    <div class="moz" style="background-color:#244236">
        <iframe width="51%" height="315" src="https://www.youtube.com/embed/_-4_fagZucU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<div class="split"></div>

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
                                </span>I was suffering from Thyroid for 3 years and was continuously taking medicines to get rid of it. Despite taking medicines my Thyroid kept on increasing and was getting hard to manage. One of my friends suggested me to visit Dr. Sharda Ayurveda for the Ayurvedic treatment of my Thyroid. I visited them and within 3 months of treatment, my Thyroid started decreasing. I am very thankful to them. <span><i class="fa fa-quote-right" aria-hidden="true"></i>
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
                                Due to my Thyroid, my body weight was constantly increasing. I was on medications but was unable to manage them. I visited Dr. Sharda Ayurveda for Ayurvedic Thyroid treatment and Dr.MukeshSharda prescribed me Ayurvedic medication with dietary changes. I am very happy and satisfied with the results of the medicines. 
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
                                Dr. Sharda Ayurveda is best for the Ayurvedic treatment of the Thyroid. I consulted them for my Thyroid treatment. All the doctors are highly knowledgeable and guides in a perfect way. Their Ayurvedic Medicines are quite effective and have good results.
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
                                What are the Best Exercises for the Thyroid?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            All strenuous exercises like walking, swimming, biking, jogging can be adopted, Ujjaipranayam also help in treating Thyroid.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa" aria-hidden="true"></i>
                                Which food affects the Thyroid?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Excessive intake of Soy rich food, certain vegetables like cabbage, broccoli, cauliflower, spinach, and fruits like sweet potato, peaches, strawberry, etc. nuts like millets, peanuts, etc. can cause Thyroid.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa" aria-hidden="true"></i>
                                What are early warning signs of Thyroid?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            High heart rate, excessive tiredness, anxiety, weight gain or loss, body shakes, and feeling chilly or overheated.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa" aria-hidden="true"></i>
                                How can I check thyroid malfunction at home?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Thyroid malfunction cannot be checked at home. One can get their blood tests to be done to check the value of t3,t4,tsh.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fa" aria-hidden="true"></i>
                                Can Ayurveda cure Thyroid? 
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Ayurveda can but along with standard treatment mentioned with dietary changes because Ayurvedic medicines help in treating all complications that occur during hypothyroid.
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
                                How can one reduce weight having a history of hypothyroid?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            By avoiding Milk, Milk products in the diet, having small and frequent meals, exercise daily, avoid carbs in the diet, take Dr. Sharda herbal powder to cure constipation. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fa" aria-hidden="true"></i>
                                Often heard that Coriander is good in Thyroid. 
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            . Is Coriander water good for the Thyroid?
Yes, it is quite effective due to its mineral content i.e.- It is rich in Vitamin B1,vit.B2,vit.B3. Consume it daily in the morning. 

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fa" aria-hidden="true"></i>
                                . What if I miss my Thyroid dose for the day?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            Missing on to your Thyroid dose for the day will not harm your body as Ayurveda works on treating the root cause, not just symptom-based treatment.  
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fa" aria-hidden="true"></i>
                                What is the time duration for Thyroid treatment in Ayurveda?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                        <div class="card-body">
                            Ayurveda works differently for every individual. Sometimes if the disease is acute it takes approximately 2-3 months for recovery. A course of treatment depends upon the level of disease it is. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                What are early warning signs of Thyroid?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                        <div class="card-body">
                            High heart rate, excessive tiredness, anxiety, weight gain or loss, body shakes, and feeling chilly or overheated are the warning signs of Thyroid.
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
            <div class="col-xl-4 col-md-12 mb-4" data-aos="zoom-in" data-aos-duration="3000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 mb-4" data-aos="zoom-in" data-aos-duration="3000">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 mb-4" data-aos="zoom-in" data-aos-duration="3000">
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