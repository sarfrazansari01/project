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
                    <small>HOPE HOLD ON PAIN ENDS</small>
                    <h3 class="ser-heading mt-4">RHEUMATOID ARTHRITIS</h3>
                    <p>Pains are long but cure is permanent</p>
                    <ul class="bread">
                        <li class="breadcrumb-item active" aria-current="page">Home&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li ><a href="https://www.drshardaayurveda.com/rheumatoid_arthritis/">Rheumatoid Arthritis</a></li>
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
                    <img src="{{ URL::asset('front/images/Ra.webp') }}" class="why-choose-us img-fluid" alt="why choose">
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="4000">
                <h2>Rheumatoid Arthritis Ayurvedic <b>Treatment</b></h2>
                <p>
                    Rheumatoid arthritis is a chronic auto-immune disease that causes inflammation and pain in joints of the body and slowly 
                    affects other organs of the body too. When there is dysfunction in the immune system so it affects the lining of the joints 
                    Rheumatoid arthritis has become a common disease, therefore, affecting people of all races. This chronic inflammation sometimes 
                    leads to the destruction of cartilage, bone, ligament causing deformity of joints. This damage can occur early in the disease 
                    and can be progressive. Moreover, progressive damage to joints does not co-relates with a degree of pain, stiffness, or swelling
                    in joints. Significant features of polyarthritis mean all joint lined by synovial membrane gets involved in RA. Joint stiffness 
                    is often worst in the morning which lasts for few hours and improves with the movement of joints. 
                    <span id="dots" data-aos="fade-up" data-aos-duration="3000">............</span>
                </p>
                <span id="more-content">
                    <p>
                        Rheumatoid arthritis often takes place due to our ill dietary habits. It is seen 3 times more commonly in women in comparison to men. 
                        Rheumatoid arthritis significantly reduces a person’s quality of life. It is the result of the food we eat that does not get digested 
                        and therefore starts accumulating in the Joints. Undigested food leads to Rheumatoid arthritis. 
                        Having a member in the family with rheumatoid arthritis increases the odds of developing RA. 
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
                    <h2>Causes of <b>Rheumatoid Arthritis </b></h2>
                    <p>The causes of Rheumatoid arthritis are still unknown but some causes are mostly seen</p>
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
                                It is believed that it can develop in families i.e.- genetically inherited. Certain genes are found responsible to cause this disease.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Wrong eating habits
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                The main cause of RA is ill eating habits that later on become hard to digest and thus accumulates in joints. 
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
                                    Weak immunity system
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                            <div class="card-body">
                                There are some trigger factors that attack the immune system to cause this disease. Immune cells called Lymphocytes get activated and chemical messengers are expressed in areas where inflammation occurs.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Smoking
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                            <div class="card-body">
                                Exposure to silica minerals are also risk factors in RA.
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
                                Overweight person is more prone to be affected with RA.
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
        <img src="{{ URL::asset('front/images/ra2.webp') }}" class=" w-100 ima">
    </div>
    <div class="cvn sym" >
        <h3><span>Symptoms</span> of Rheumatoid Arthritis </h3>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Inflammation in Joint</p>
        <p>Swelling, pain, and inflammation are seen in more than one joint.</p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Redness and warmness</p>
        <p>Joints mostly are seen warmer and due to inflammation they change their color to red. </p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Stiffness</p>
        <p>It becomes harder to move and use joints as they do not function properly as they should. </p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Fever</p>
        <p>Usually low-grade fever with body ache is seen due to infection in the body. </p>
        <p class="sub"><img src="{{ URL::asset('front/images/2.png') }}" alt="2.png">Anemia</p>
        <p>Anemia is seen as the production of RBC in bone marrow gets decreased. 
            Symptoms usually relapse itself, sometimes when inflammation occurs in joints, RA is an inactive state when this inflammation subsides, the disease turns inactive. But remission occurs spontaneously and can last for weeks, months, or years.
        </p>
    </div>
</div>
<div class="split"></div>

<section class="dsa-why-choose" id="advantages">
    <div class="container-fluid">
        <div class="row cut-row" >
            <div id="hgte2" class="col-xl-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="4000">
                <h2 class="client-test-title" style="font-size: 24px !important;">Benefits of Ayurvedic <b>Treatment for Rheumatoid Arthritis</b></h2>
                <p class="im3"> 
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurvedic treatment for Rheumatoid arthritis does not provide symptomatic treatment for pain and inflammation rather it works on 
                    treating the root cause so that there are least chances of its reversal.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Following a healthy rich diet according to a disease helps in treating the disease at the earliest
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ayurvedic medicines are loaded with benefits with no side effects on health.
                </p>
                <p class="im3">
                    <img src="{{ URL::asset('front/images/2.png') }}" alt="3.png">
                    Ginger water and Turmeric are quite beneficial in treating Rheumatoid arthritis as it helps in reducing inflammation and 
                    pain caused due to RA.
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
                                Myself HarbhajanKaur was suffering from Rheumatoid Arthritis (RA) for the past 10 years. I took Western medicines
                                for more than 8 years but got no relief. Then I got to know about Dr. Sharda Ayurveda and visited their Clinic. 
                                They got my Various Blood Investigation done and my RA was positive. In July 2019 I started with their course of 
                                treatment. I did not drop out taking my Medicines. Then on 6th August 2020, I got my Blood Investigation done and 
                                my RA turned out to be negative. A big Thanks to Dr. Sharda Ayurveda who developed a lost hope of mine to ever
                                recover from RA, and finally I can say I am free from RA.
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
                                I Ram Kumar was a sufferer of Rheumatoid Arthritis. My RA quantity was quite high and it kept on raising despite taking
                                so many medicines. Then I thought of giving try to Ayurvedic Medicines and visited Dr. Sharda Ayurveda for my Treatment.
                                I was so much relaxed after consulting them and began with my course of treatment. 
                                I am very happy with their Treatment.
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
                                I was suffering from Rheumatoid Arthritis for the past 9-10 years.
                                Randomly one day while scrolling my Facebook I got to know about Dr. Sharda Ayurveda clinic. I ate medicines for
                                approximately 8 months from their clinic and I am fully satisfied with their results and my RA is negative now. 
                                I would not hesitate to tell anyone that one should visit Dr. Sharda Ayurveda for your chronic disease treatment.
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
                                Can Rheumatoid arthritis be cured by Ayurveda?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Yes, Rheumatoid arthritis can only be cured completely in Ayurveda. With a proper course of Ayurvedic medicines followed 
                            by dietary and lifestyle, modification helps in treating it from the root cause. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa" aria-hidden="true"></i>
                                Which vitamins are good for RA?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Vitamins like Folic acid, Calcium, Vitamin D levels are to be monitored with treatment in Rheumatoid arthritis. 
                            As per its deficiency medicines should be chosen to fulfill the requirement
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa" aria-hidden="true"></i>
                                What are the stages of Rheumatoid arthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            There are mostly 4 stages in RA 
                            <ul>
                                <li>Stage 1- Early RA. When it is caught at the beginning stage itself.</li>
                                <li>Stage 2- Antibodies develop in the body and swelling of a joint becomes severe. </li>
                                <li>Stage 3- Inflammation and pains in joints that become hard to bear. </li>
                                <li>Stage 4- Joints become fused and deformity might occur.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa" aria-hidden="true"></i>
                                What time of day is RA worsens itself?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            It gets worsens during the morning with stiffness in joints. Sometimes it becomes difficult to even perform daily tasks. In gout pain is more in the evening and fibromyalgia, it is more intense after a poor night sleep.
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
                                    Can stress cause Rheumatoid arthritis? 
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                            <div class="card-body">
                                Stress does trigger RA by affecting the immune system of the body and releasing cytokines that lead to inflammation in joints. 
                            </div>
                        </div>
                    </div>
                    <div class="card-header" id="headingSix" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fa" aria-hidden="true"></i>
                                Which food items can worsen Rheumatoid arthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                        <div class="card-body">
                            Several food items like Sugar, Saturated fats, Dairy products, Omega-6 fatty acids, Meat, refined, carbohydrates,
                            Gluten, Aspartame, and Alcohol.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fa" aria-hidden="true"></i>
                                Can children get arthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                        <div class="card-body">
                            Yes, children can get arthritis too. Common arthritis found in children is Juvenile rheumatoid arthritis. 
                            Childhood arthritis is a serious complication as it causes permanent damage to the joints. Early diagnosis and timely 
                            Ayurvedic treatment are important to prevent or minimize the damage to joints. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fa" aria-hidden="true"></i>
                                How can Rheumatoid arthritis be prevented?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                        <div class="card-body">
                            One can reduce the risk of getting rheumatoid arthritis by changing risk factors that can be controlled. Keep your weight 
                            in check. If you get a joint Injury get it checked timely. Avoid excessive smoking and drinking. Maintain a healthy 
                            Lifestyle with a Healthy diet without any junk. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fa" aria-hidden="true"></i>
                                How is Rheumatoid arthritis diagnosed?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion2">
                        <div class="card-body">
                            It is usually diagnosed by the patient medical history, Blood investigation, and also a look at X-rays. 
                            It is not everyone will have Rheumatoid arthritis, it is always possible to have more than 1 type of arthritis at 
                            the same time. It is always beneficial to get timely treatment for better results and no harm to the body in the future. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen" style="background-color:transparent;">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fa" aria-hidden="true"></i>
                                Can I exercise as I have Rheumatoid arthritis?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion2">
                        <div class="card-body">
                            Yes, you can exercise those exercises that are arthritis-friendly. 
                            <ul>
                                <li>Regular exercising will help relieve arthritis pain and stiffness.</li>
                                <li>It will provide you more energy. Stay active and positive always.</li>
                            </ul>
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