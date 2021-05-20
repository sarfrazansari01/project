<?php
/**
 * Services Page 
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
<section class="ser-banner-sec">
    <div class="container-fluid">
        <div class="row cust-ser-banner">
            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
                <div class="ser-content">
                    <p>POWER TO HEAL</p>
                    <h2 class="ser-title">ASTHMA</h2>
                    <h3 class="ser-sub-heading">Breathing Healthy With Ayurveda</h3>
                    <div class="page-breadcrumb"> 
                        <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"> 
                                <a itemprop="item" href="https://www.drshardaayurveda.com/">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li class="active anchor-dis-li" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"> 
                                <a itemprop="item" href="https://www.drshardaayurveda.com/services/">
                                    <span itemprop="name">Services</span>
                                </a>
                                <meta itemprop="position" content="2">
                            </li>
                            <li class="active anchor-dis-li" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"> 
                                <a itemprop="item" href="https://www.drshardaayurveda.com/services/">
                                    <span itemprop="name">Obesity</span>
                                </a>
                                <meta itemprop="position" content="3">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ser-href">
    <div class="container-fluid">
        <div class="row cust-ser-href">
            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
                <ul class="ser-href-listing">
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
</section>

<section class="dsa-why-choose treatment">
    <div class="container-fluid">
        <div class="row cut-row">
            <div class="col-xl-7 col-md-12 mb-5 col-sm-12 mb-2">
                <div class="left-img" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="{{ URL::asset('front/images/asthma.webp') }}" class="why-choose-us img-fluid" alt="why choose">
                </div>
            </div>
            <div class="col-xl-5 col-md-12 col-sm-12 ">
                <div class="adj-height">
                    <h2>Asthma Ayurvedic <b>Treatment</b></h2>
                    <p data-aos="fade-up" data-aos-duration="3000">In Ayurveda, Asthma is known as Thamaka Shvasa.</p>
                    <p data-aos="fade-up" data-aos-duration="3000">Asthma is a chronic inflammatory disease which affects the airways. It is symbolized by episodes of frequent nasal allergies, difficulty in breathing and shortness of breath and wheezing mostly in early morning or at mid night  which might be due to respiratory origin In Asthma there is a spontaneous attack on patient in which one is unable to breath because of airway blockage. The severity of an attack may differ from one attack to the next, from person to person ,may be life threatening and could require immediate emergency medical attention.</p>
                    <p data-aos="fade-up" data-aos-duration="3000">Asthma develops when a body is exposed to high cold temperatures, unhealthy air pollutants, environmental factors and taking high stress. All the impurities carried itself through the body’s channels to the chest and lungs area, where they irritate the lining of airways, also triggering an inflammatory response that harms the epithelial lining of the airways. Asthma treatment with Ayurveda has its guaranteed results. We never suggest any of our patients to go for Inhalers. We always treat naturally. Ayurvedic Medicine for Asthma has effective and amazing results. </p>
                </div>
            </div>
        </div>
    </div>
</section>
@stop