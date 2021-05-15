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
@extends('layouts.front')
@section('content')

<div class="btContentHolder">
    <div class="btContent">
        <div class="bt_bb_wrapper">
            <section id="bt_section608a23b49d50d"  class="boldSection btDivider topSemiSpaced bottomSemiSpaced btDarkSkin gutter inherit wBackground cover" style="background-color:#0cb8b6;background-image:url('http://medicare.bold-themes.com/clinic/wp-content/uploads/sites/2/2015/12/bgn-grad.png');">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow  " >
                                <div class="boldRowInner">
                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein animate-moveleft inherit"  >
                                        <div class="rowItemContent" >
                                            <div class="btClear btSeparator topExtraSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <div class="btClear btSeparator topExtraSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <header class="header btClear large  " >
                                                <div class="btSuperTitle">Services</div>
                                                <div class="dash">
                                                    <h4><span class="headline">Endocrine, Digestive, Hair And Skin</span></h4>
                                                </div>
                                            </header>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="bt_section608a23b49d7a7"  class="boldSection topSpaced gutter inherit" >
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow  " >
                                <div class="boldRowInner">
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft animate animate-fadein animate-moveright btMiddleVertical"  >
                                        <div class="rowItemContent" >
                                            <div class="bpgPhoto btTextCenter" >
                                                <div class="btImage">
                                                    <img src="{{ URL::asset('frontend/img/obesity1.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft animate animate-fadein btMiddleVertical btDoublePadding"  >
                                        <div class="rowItemContent" >
                                            <header class="header btClear medium  " >
                                                <!--<div class="btSuperTitle">For your children</div>-->
                                                <div class="dash">
                                                    <h3><span class="headline">OBESITY</span></h3>
                                                </div>
                                            </header>
                                            <div class="btClear btSeparator bottomExtraSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <div class="btText" >
                                                <div class="btText">
                                                    <p>
                                                        Ayurveda provides with a simple approach for weight-loss that is easy to follow, 
                                                        attainable, and highly effective. Obesity is the most common disorder in the modern age.
                                                        It is reflected by excess accumulation of fat in the body. Continuous indulgence in high 
                                                        junk food, fried foods along with sedentary lifestyle results in excessive fat getting 
                                                        accumulated in various body channels. Obesity in turn causes a number of metabolic disturbances 
                                                        in body such as hypertension, diabetes, irregular digestion etc. It affects social life too. 
                                                        Overweight, if not controlled timely leads to obesity.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="btClear btSeparator bottomSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <a href="{{ route('obesity') }}" class="btBtn btBtn btnFilledStyle btnAccentColor btnSmall btnNormalWidth btnRightPosition btnNoIcon" >
                                                <span class="btnInnerText">READ MORE</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="bt_section608a23b49e0cb"  class="boldSection topSpaced gutter inherit" >
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow  " >
                                <div class="boldRowInner">
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft animate animate-fadein btMiddleVertical btDoublePadding"  >
                                        <div class="rowItemContent" >
                                            <header class="header btClear medium  " >
                                                <!--<div class="btSuperTitle">Your most beautiful smile</div>-->
                                                <div class="dash">
                                                    <h3><span class="headline">THYROID</span></h3>
                                                </div>
                                            </header>
                                            <div class="btClear btSeparator bottomExtraSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <div class="btText" >
                                                <div class="btText">
                                                    <p>
                                                        Being a small gland located in front of the neck. It is shaped like a butterfly, 
                                                        smaller in the middle with two wide wings that extend around the side of throat. 
                                                        Hormones secreted by Thyroid are responsible for metabolism. Metabolism is a process 
                                                        where the food you take into your body is transformed into energy. T4 
                                                        (thyroxine, contains four iodide atoms) and T3 (triiodothyronine, contains three iodide atoms). 
                                                        These two hormones are created by the thyroid and they tell the body’s cells how much energy 
                                                        to use. There is another hormone secreted by Pitutary gland. This hormone is called thyroid 
                                                        stimulating hormone (TSH). The TSH will be sent to the thyroid and it will tell the thyroid 
                                                        what needs to be done to get the body back to normal.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="btClear btSeparator bottomSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <a href="{{ route('thyroid') }}" class="btBtn btBtn btnFilledStyle btnAccentColor btnSmall btnNormalWidth btnRightPosition btnNoIcon" >
                                                <span class="btnInnerText">READ MORE</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft animate animate-fadein animate-moveleft btMiddleVertical"  >
                                        <div class="rowItemContent" >
                                            <div class="bpgPhoto btTextCenter" >
                                                <div class="btImage">
                                                    <img src="{{ URL::asset('frontend/img/THYROID.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="bt_section608a23b49e660"  class="boldSection topSpaced gutter inherit" >
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow  " >
                                <div class="boldRowInner">
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft animate animate-fadein animate-moveright btMiddleVertical"  >
                                        <div class="rowItemContent" >
                                            <div class="bpgPhoto btTextCenter" >
                                                <div class="btImage">
                                                    <img src="{{ URL::asset('frontend/img/DIABETES.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft animate animate-fadein btMiddleVertical btDoublePadding"  >
                                        <div class="rowItemContent" >
                                            <header class="header btClear medium  " >
                                                <!--<div class="btSuperTitle">Shape up</div>-->
                                                <div class="dash">
                                                    <h3><span class="headline">DIABETES</span></h3>
                                                </div>
                                            </header>
                                            <div class="btClear btSeparator bottomExtraSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <div class="btText" >
                                                <div class="btText">
                                                    <p>
                                                        In AYURVEDA DIABETES is referred to as “MADHUMEY”. Diabetes is predominantly a Kapha disorder 
                                                        where by the Agni function is diminished. This leads to low metabolic rate in the body and 
                                                        build up of sugar levels in the blood. Diabetes hinders your body ability to respond to 
                                                        Insulin. Ayurveda considers poor digestion the major reason for Diabetes. Weak digestion 
                                                        leads to the productivity of a sticky toxin, known as AMA that can accumulate in the
                                                        pancreatic cell and impair the production of INSULIN.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="btClear btSeparator bottomSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <a href="{{ route('diabetes') }}" class="btBtn btBtn btnFilledStyle btnAccentColor btnSmall btnNormalWidth btnRightPosition btnNoIcon" >
                                                <span class="btnInnerText">READ MORE</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="bt_section608a23b49edaf"  class="boldSection topSpaced bottomSpaced gutter inherit" >
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow  " >
                                <div class="boldRowInner">
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft animate animate-fadein btMiddleVertical btDoublePadding"  >
                                        <div class="rowItemContent" >
                                            <header class="header btClear medium  " >
                                                <!--<div class="btSuperTitle">For a healtier life</div>-->
                                                <div class="dash">
                                                    <h3><span class="headline">ABDOMINAL PAIN</span></h3>
                                                </div>
                                            </header>
                                            <div class="btClear btSeparator bottomExtraSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <div class="btText" >
                                                <div class="btText">
                                                    <p>
                                                        Abdominal Diseases deals with Abdominal Cavity which includes Stomach, Liver, Gallbladder,
                                                        Intenstines, Kidneys, Uterus and Urinary Bladder. Any metabolic change in theses organs leads 
                                                        to Abdominal Diseases. Ayurveda differentiates the person according to the 3 main components of
                                                        the body-Vata, Pitta and Kapha. Presence of these elements defines the Prakurti of a person and
                                                        the kind of food required in body. All Abdominal Diseases are associated with abdominal pains. 
                                                        There are various causes for abdominal pain i.e. The location, Duration and Intensity of pain.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="btClear btSeparator bottomSmallSpaced noBorder" >
                                                <hr>
                                            </div>
                                            <a href="{{ route('abdominal-pain') }}" class="btBtn btBtn btnFilledStyle btnAccentColor btnSmall btnNormalWidth btnRightPosition btnNoIcon" >
                                                <span class="btnInnerText">READ MORE</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft animate animate-fadein animate-moveleft btMiddleVertical"  >
                                        <div class="rowItemContent" >
                                            <div class="bpgPhoto btTextCenter" >
                                                <div class="btImage">
                                                    <img src="{{ URL::asset('frontend/img/Abdominal-Pain.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@stop