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
            <div class="col-md-6">
                <div class="dsa-content">
                    <h3 class="dsa-sub-heading">India's Best</h3>
                    <h2 class="dsa-title">Ayurvedic Clinic for <br>Chronic Diseases</h2>
                    <p>Every day only ayurveda!</p>
                    <div class="btn-banner">
                        <a href="#" class="btn-appointment">BOOK an APPOINTMENT</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
            <div class="col-md-7">
                <div class="left-img">
                    <img src="{{ URL::asset('front/images/why-choose.jpg') }}" class="why-choose-us img-fluid" alt="why choose">
                </div>
            </div>
            <div class="col-md-5">
                <h2>Why Choose <b>Ayurveda</b></h2>
                <p>THE WOUND IS THE PLACE WHERE THE LIGHT ENTERS YOU!<br>
                    In this materialistic world AYURVEDA is new LIGHT although it is the oldest healing of science. In Sanskrit, Ayurveda means “THE SCIENCE OF LIFE.” Ayurvedic knowledge was originated more than 5000 years ago in India, and is called as “MOTHER OF HEALINGS.” Ayurveda works on three principles of energies i.e. VATA PITTA and KAPHA. Which are present in all human beings and works to control the various system of human anatomy and physiology.</p>
                <ul>
                    <li>VATA for MOVEMENTS</li>
                    <li>PITTA for DIGESTION</li>
                    <li>KAPHA for NOURISHMENT</li>
                </ul>
                <p>Ayurveda gives a holistic approach to treat and cure disease. In such circumstance Ayurveda plays an important role in ones’s life by:</p>
                <ul>
                    <li>HEALING</li>
                    <li> DETOXIFYING</li>
                    <li>REJUVENATING NEW CELLS</li>
                </ul>
                <p>Natural Plant, Animal and Mineral origin drugs administered to our body is accepted more than synthetic medicines and with minimum adverse effects.</p>
            </div>
        </div>
    </div>
</section>

<section class="dsa-india-ayurvedic-sec"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>India's Best <b>Ayurvedic</b></h2>
            </div>
        </div>
        <div class="row cust-iba">
            <div class="col-md-4">
                <div class="iba-box box1">
                    <div class="wht-space"></div>
                    <h3>Asthma</h3>
                    <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iba-box box2">
                    <div class="wht-space"></div>
                    <h3>Rheumatoid Arthritis</h3>
                    <p>Rheumatoid Arthritis is called as "AMAVATA" in Ayurveda. Ayurveda has the efficiency to treat Chronic Rheumatoid Arthritis (RA) at any stage of life.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iba-box box3">
                    <div class="wht-space"></div>
                    <h3>Diabetes</h3>
                    <p>Diabetes is called “MADHUMEHA” in Ayurveda. Weak Digestion of an Individual causes production of Sticky Toxin and passes that is “AMA” that gets added in the Pancreatic Cells and damages production of Insulin.</p>
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
            <div class="pl-tp-content">
                <h2>Steps to Get Your <b>Personalised Ayurvedic</b> Treatment</h2>
                <p>No two individuals are alike. Jiva Ayurveda follows “Ayunique”. It examines the patient and disease with an aim to diagnose the root cause and offer completely personalised treatment.</p>
            </div>
        </div>
        <div class="row cst-pl-row">
            <div class="cst-boxies">
                <div class="treatment-box">
                    <img src="{{ URL::asset('front/images/icon11.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Reach us</h3>
                    <p>Call, Message <br> Or Chat</p>
                </div>


                <div class="treatment-box">
                    <img src="{{ URL::asset('front/images/icon12.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Appointment</h3>
                    <p>Book Appointment with <br>our Specialist</p>
                </div>


                <div class="treatment-box">
                    <img src="{{ URL::asset('front/images/icon13.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Nadi Parisksha</h3>
                    <p>To get Doshas analysed</p>
                </div>


                <div class="treatment-box">
                    <img src="{{ URL::asset('front/images/icon14.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Specialised</h3>
                    <p>Specialised Doctor <br>will assist you</p>
                </div>

                <div class="treatment-box">
                    <img src="{{ URL::asset('front/images/icon15.png') }}" class="treatment-img" alt="treatment icon">
                    <h3>Specialised</h3>
                    <p>Specialised Doctor <br>will assist you</p>
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
                    <p>Once You Choose Dr. Sharda Ayurvedic Hospital In Punjab, Anything Is Possible.</p>
                </div>
            </div>
        </div>
        <div class="row custum-row">
            <div class="col-md-6">
                <iframe width="700" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY"> </iframe> 
            </div>
            <div class="col-md-6">
                <div class="about-right-content">
                    <p>DR. SHARDA AYURVEDA is renowned for the treatment of auto-immune diseases over the years in the world.</p>
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
                <div class="hw-content">
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
        <div class="row cust-dr">
            <div class="col-md-4">
                <div class="dr-img-left">
                    <img src="{{ URL::asset('front/images/Dr-Mukesh-Sharda.png') }}" class="img-fluid" alt="Dr Mukesh Sharda">
                </div>
            </div>
            <div class="col-md-8">
                <p><b>Dr. Mukesh Sharda( BAMS, PhD)</b> is practicing Ayurveda for more than 12 years and in 2013 she started her chain of Clinics. Dr. Mukesh Sharda has been awarded by the Honourable Chief Minister of Punjab Respected Capt. Amrinder Singh as well as Honourable  Health Minister Mr. Brahm Mohindra and also from Honourable Central Health Minister Mr. J.P Nadda.</p>
                <div class="sign-area">
                    <img src="{{ URL::asset('front/images/signature.png') }}" class="ceo-sign img-fluid" alt="CEO Sign" >
                    <p>Director (CEO)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="prod-tp-content">
                    <h2>Our <b>Products</b></h2>
                    <p>Once You Choose Dr. Sharda Ayurvedic Hospital In</p>
                </div>
            </div>
        </div>
        <div class="row cust-product">
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            <div class="col-md-4">
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
<section class="client-testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="cl-test">
                <span class="cl-suedo">Testimonials</span>
                <h2 class="client-test-title">Client <b>Testimonial</b></h2>
            </div>
        </div>
        <div class="row cust-test">
            <div class="col-md-12">
                <div id="client-test" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Ellipse.png') }}" class="img-fluid" alt="Testimonial" >
                            <ul>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </li>
                            </ul>
                            <h3>It was a Great Experience!</h3>
                            <p>I was suffering from knee pain from the past 10 years. Doctors advised me for Knee transplant, but I was very scared of getting it done. Once I got to know about Dr. Sharda Ayurveda and i visited them in their Muktsar Clinic and started with my Treatment. Within 6 months of treatment my RA Factor report constantly started decreasing and I’m recovering A big Thanks to Dr. Sharda Ayurveda.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <img src="{{ URL::asset('front/images/Ellipse.png') }}" class="img-fluid" alt="Testimonial" >
                            <ul>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </li>
                            </ul>
                            <h3>It was a Great Experience!</h3>
                            <p>I was suffering from knee pain from the past 10 years. Doctors advised me for Knee transplant, but I was very scared of getting it done. Once I got to know about Dr. Sharda Ayurveda and i visited them in their Muktsar Clinic and started with my Treatment. Within 6 months of treatment my RA Factor report constantly started decreasing and I’m recovering A big Thanks to Dr. Sharda Ayurveda.</p>
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
            <div class="col-md-12">
                <div class="lp-content">
                    <h2>Latest <b>Post</b></h2>
                    <p>Once You Choose Dr. Sharda Ayurvedic Hospital In</p>
                </div>
            </div>
        </div>
        <div class="row custom-lp">
            <div class="col-md-4">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="lp-post">
                    <img src="{{ URL::asset('front/images/latest-ps.jpg') }}" class="img-fluid" alt="Testimonial" >
                    <div class="post-content">
                        <h3>Your Medical Records are safe</h3>
                        <p>Asthma Is Categorized As “shwas Rog” In Ayurveda. A Condition In Which A Person Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                        <a href="#" class="ptn-post">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
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

<section class="get-in-touch-sec">
    <div class="container-fluid">
        <div class="row custom-get">
            <div class="col-md-6">
                <h2>Get in Touch</h2>
                <p>Asthma Is Categorized As “shwas Rog” n Ayurveda. A Condition In Which APerson Faces Regular Breathing Difficulty. By Ayurvedic Treatment We Treat A Patient By Only Ayurvedic Medicines Without Any Inhalers.</p>
                <div class="email">
                    <a href="#" class="email-icon"><i class="fa fa-envelope" aria-hidden="true"></i> dr.shardaayurveda@gmail.com</a>
                </div>
                <div class="phone">
                    <a href="tel:+919876035500" class="phone-icon"><i class="fa fa-phone" aria-hidden="true"></i> +91 9876035500</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="get-form">
                    <h3>Let’s Talk</h3>
                    <form action="/action_page.php">
                        <input type="text" id="name" name="name" placeholder="Name"><br>
                        <input type="tel" id="phone" name="phone" placeholder="Phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>
                        <input type="email" id="email" name="email" placeholder="Email"><br>
                        <textarea id="story" name="story" rows="5" cols="33" placeholder="Message"></textarea><br>
                        <input type="submit" value="Submit" class="submit">
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>
@stop