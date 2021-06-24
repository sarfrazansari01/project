<?php
/**
 * Home Page 
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
<section class="dsa-banner-sec">
    <div class="container-fluid">
        <div class="row cust-dsa-banner">
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="3000">
                <div class="dsa-content">
                    <h3 class="dsa-sub-heading">India's Best</h3>
                    <h2 class="dsa-title">Ayurvedic Clinic for <br>Chronic Diseases</h2>
                    <p>Every day only Ayurveda!</p>
                    <div class="btn-banner">
                        <a href="#" class="btn-appointment">BOOK AN APPOINTMENT</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="right-img">
                    <img src="{{ URL::asset('front/images/mam.png') }}" class="doctor img-fluid" alt="Doctor">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dsa-why-choose">
    <div class="container-fluid">
        <div class="row cut-row">
            <div class="col-xl-7 col-md-12 mb-5 col-sm-12 mb-2">
                <div class="left-img" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/why-choose.jpg') }}" class="why-choose-us img-fluid" alt="why choose">
                </div>
            </div>
            <div class="col-xl-5 col-md-12 col-sm-12 ">
                <div class="adj-height">
                    <h2>Why Choose <b>Ayurveda</b></h2>
                    <p data-aos="fade-up" data-aos-duration="3000">THE WOUND IS THE PLACE WHERE THE LIGHT ENTERS YOU!</p>
                    <p data-aos="fade-up" data-aos-duration="3000">
                        In this materialistic world AYURVEDA is new LIGHT although it is the oldest healing of science. In Sanskrit, Ayurveda means 
                        “THE SCIENCE OF LIFE.” Ayurvedic knowledge was originated more than 5000 years ago in India, and is called as “MOTHER OF HEALINGS.”
                        Ayurveda works on three principles of energies i.e. VATA PITTA and KAPHA. Which are present in all human beings and works to 
                        control the various system of human anatomy and physiology.
                    </p>
                    <ul data-aos="fade-up" data-aos-duration="3000">
                        <li>VATA for MOVEMENTS</li>
                        <li>PITTA for DIGESTION</li>
                        <li>KAPHA for NOURISHMENT</li>
                    </ul>
                    <p data-aos="fade-up" data-aos-duration="3000">
                        Ayurveda gives a holistic approach to treat and cure disease.
                    </p>
                    <span id="dots" data-aos="fade-up" data-aos-duration="3000">............</span>
                    <span id="more-content">
                            In such circumstance Ayurveda plays an important role in ones’s life by:
                        <ul>
                            <li>HEALING</li>
                            <li> DETOXIFYING</li>
                            <li>REJUVENATING NEW CELLS</li>
                        </ul>
                        <p>
                            Natural Plant, Animal and Mineral origin drugs administered to our body is accepted more than synthetic 
                            medicines and with minimum adverse effects.
                        </p>
                    </span>
                    <button class="btn-gen mt-2" onclick="readMoreReadLess()" id="myBtn" data-aos="fade-up" data-aos-duration="3000">Read more</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dsa-india-ayurvedic-sec"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 data-aos="fade-up" data-aos-duration="3000">Diseases & <b>Ayurvedic Treatments</b></h2>
            </div>
        </div>
        <div class="row cust-iba">
            <div class="col-xl-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box1">
                    <div class="xd">
                        <div class="cont">	
                            <div class="wht-space"></div>
                            <h3>Asthma</h3>
                            <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box2">
                    <div class="xd">
                        <div class="cont">
                            <div class="wht-space"></div>
                            <h3>Rheumatoid Arthritis</h3>
                            <p>Rheumatoid Arthritis is called as "AMAVATA" in Ayurveda. Ayurveda has the efficiency to treat Chronic Rheumatoid Arthritis (RA) at any stage of life.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-2 col-sm-12" data-aos="fade-up" data-aos-duration="3000">
                <div class="iba-box box3">
                    <div class="xd">
                        <div class="cont">
                            <div class="wht-space"></div>
                            <h3>Diabetes</h3>
                            <p>Diabetes is called “MADHUMEHA” in Ayurveda. Weak Digestion of an Individual causes production of Sticky Toxin and passes that is “AMA” that gets added in the Pancreatic Cells and damages production of Insulin.</p>
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
<section class="pl-ayurvedic-treatment-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="pl-tp-content" data-aos="fade-up" data-aos-duration="3000">
                <h2>Steps to Get Your <b>Personalised Ayurvedic</b> Treatment</h2>
                <p>
                    Dr. Sharda Ayurveda works on root cause treatment and offers totally customized treatment
                </p>
            </div>
        </div>
        <div class="row cst-pl-row">
            <div class="cst-boxies">
                <div class="treatment-box" data-aos="flip-left" data-aos-duration="3000" >
                    <img src="{{ URL::asset('front/images/icon11.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Reach us</h3>
                    <p>by Call, Or Chat</p>
                </div>


                <div class="treatment-box" data-aos="flip-left" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/icon12.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Appointment</h3>
                    <p>Appointment with <br>our Specialist</p>
                </div>


                <div class="treatment-box" data-aos="flip-left" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/icon13.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Nadi Parisksha</h3>
                    <p>To get Doshas analysed</p>
                </div>


                <div class="treatment-box" data-aos="flip-left" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/icon14.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Specialised</h3>
                    <p>will assist you</p>
                </div>

                <div class="treatment-box" data-aos="flip-left" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/icon15.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Get your personalized</h3>
                    <p>Ayurvedic treatment <br>will diet plan</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="about-us-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="tp-abt-content">
                    <h2>Welcome to Dr. <b>Sharda Ayurveda</b></h2>
                    <p>Once You Choose Dr. Sharda Ayurvedic Hospital in Punjab, India, Anything is Possible</p>
                </div>
            </div>
        </div>
        <div class="row custum-row">
            <div class="col-xl-6 col-md-12 mb-4" data-aos="zoom-in" data-aos-duration="3000">
                <iframe width="620" height="450" src="https://www.youtube.com/embed/w8UaP6U1H18" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="about-right-content" data-aos="zoom-in" data-aos-duration="3000">
                    <p><strong>DR. SHARDA AYURVEDA</strong> is renowned for the treatment of auto-immune diseases over the years in the world.</p>
                    <p>We have immerged as a leading centres in Punjab and have treated thousands of patients worldwide.</p>
                    <p>Our team of professional doctors aims to provide traditional and scientific research based effective treatment.</p>
                    <p>Our strong pillars are Care, Compassion and Commitment towards our patients.</p>
                    <p>Our sole aim is to provide authentic, traditional ayurvedic treatment to patients who have lost their hopes to recover.</p>
                    <p>We are dedicated to Hope, Healing and Recovery of our patients.</p>
                    <div class="btn-about">
                        <a href="#" class="btn-aboutus">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="happy-world-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="hw-content" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/white-logo.png') }}" class="img-fluid wht-logo" alt="Company logo">
                    <h2>लोकाः समस्ताः सुखिनो भवन्तु</h2>
                    <p>Let The Entire World Be Happy</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dr-mukesh-sharda-sec"> 
    <div class="container-fluid">
        <div class="row">
            <div class="cl-test">
                <h2 class="gen-title">Our <b> Founder</b></h2>
            </div>
        </div>
        <div class="row cust-dr">
            <div class="col-xl-4 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="3000">
                <div class="dr-img-left" >
                    <img src="{{ URL::asset('front/images/Dr-Mukesh-Sharda.png') }}" class="img-fluid" alt="Dr Mukesh Sharda">
                </div>
            </div>
            <div class="col-xl-8 col-md-12 mt-4 col-sm-12" data-aos="zoom-in" data-aos-duration="3000">
                <p><b>Dr. Mukesh Sharda( BAMS, PhD)</b> is practicing Ayurveda for more than 12 years and in 2013 she started her chain of Clinics. Dr. Mukesh Sharda has been awarded by the Honourable Chief Minister of Punjab Respected Capt. Amrinder Singh as well as Honourable  Health Minister Mr. Brahm Mohindra and also from Honourable Central Health Minister Mr. J.P Nadda.</p>
                <div class="sign-area">
                    <img src="{{ URL::asset('front/images/signature.png') }}" class="ceo-sign img-fluid" alt="CEO Sign" >
                    <p>Director (CEO)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-product" style="display: none;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="prod-tp-content" data-aos="zoom-in" data-aos-duration="3000">
                    <h2>Our <b>Products</b></h2>
                    <p>Once You Choose Dr. Sharda Ayurvedic Hospital In</p>
                </div>
            </div>
        </div>
        <div class="row cust-product">
            <div class="col-xl-4 col-md-12 mb-4">
                <div class="prod-box" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/our-product.png') }}" class="img-fluid" alt="Product" >
                    <ul class="price">
                        <li class="brand-name">Dr.sharda </li>
                        <li class="header">Best joint pain oil of ayurveda</li>
                        <li class="rate"><i class="fa fa-inr" aria-hidden="true"></i> 200/-</li>
                        <li class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </li>
                        <li><a href="#" class="btn-shop-know">Shop Now</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-xl-4 col-md-12 mb-4">
                <div class="prod-box" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/our-product.png') }}" class="img-fluid" alt="Product" >
                    <ul class="price">
                        <li class="brand-name">Dr.sharda </li>
                        <li class="header">Best joint pain oil of ayurveda</li>
                        <li class="rate"><i class="fa fa-inr" aria-hidden="true"></i> 200/-</li>
                        <li class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </li>
                        <li><a href="#" class="btn-shop-know">Shop Now</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-xl-4 col-md-12 mb-4" data-aos="zoom-in" data-aos-duration="3000">
                <div class="prod-box">
                    <img src="{{ URL::asset('front/images/our-product.png') }}" class="img-fluid" alt="Product" >
                    <ul class="price">
                        <li class="brand-name">Dr.sharda </li>
                        <li class="header">Best joint pain oil of ayurveda</li>
                        <li class="rate"><i class="fa fa-inr" aria-hidden="true"></i> 200/-</li>
                        <li class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </li>
                        <li><a href="#" class="btn-shop-know">Shop Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="client-testimonial" data-aos="zoom-in" data-aos-duration="3000">
    <div class="container-fluid">
        <div class="row">
            <div class="cl-test">
                    <!-- <span class="cl-suedo">Testimonials</span> -->
                <h2 class="client-test-title">Client <b>Testimonial</b></h2>
            </div>
        </div>
        <div class="row cust-test">
            <div class="col-md-12">
                <div id="client-test" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Mrs. Seema.jpeg') }}" class="img-fluid" alt="Testimonial" >
                            <h3 class="usrname">Mrs. Seema</h3>
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
                                I was suffering from Rheumatoid Arthritis (RA) from the past 10 years. 
                                I took Western medicines for more than 8 years but got no relief. Then I got to know about 
                                Dr. Sharda Ayurveda and visited their Clinic. They got my Various Blood Investigation done and my RA was positive. 
                                In July 2019 I started with their course of Treatment. I did not drop out taking my Medicines. Then on 6th August 2020 
                                i got my Blood Investigation done and my RA turned out to be negative. A big Thanks to Dr. Sharda Ayurveda who 
                                developed a lost hope of mine to ever recover from RA, and finally I can say I am free from RA
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Manjindar.jpeg') }}" class="img-fluid" alt="Testimonial" >
                            <h3 class="usrname">Manjindar Kaur</h3>
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
                                Myself Manjindar from Rupnagar. I was suffering from Asthma. I was totally dependent on Inhalers and had breathing 
                                issues in winters. But after treatment from Dr. Sharda Ayurveda Ludhiana from Dr.  Mukesh Sharda, i was fully satisfied 
                                with their treatment. Within 7 months of treatment i was totally relieved from Asthma.
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Raj Kumar.jpeg') }}" class="img-fluid" alt="Testimonial" >
                            <h3 class="usrname">Raj Kumar</h3>
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
                                I was suffering from Knee Pain for many years. I took treatment from various hospitals but of no use. 
                                Then somebody advised me to take treatment from Dr. Sharda Ayurveda clinic and after taking treatment from 
                                Dr. Sharda Ayurveda I was almost free from knee pain within 6 months.  I have discontinued my medicines and feeling 
                                no pain at all and I'm very thankful to Dr. Sharda Ayurveda for the most effective Ayurvedic treatment. 
                                <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="latest-post-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="lp-content">
                    <h2>Latest <b>Post</b></h2>
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