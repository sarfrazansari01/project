<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$routeName = \Route::currentRouteName();
?>
<style>#errmsgMobile,#errmsgEmail,.error-form{color: red;} .success-form{color: green;} .display-none{display: none;}</style>
<section class="get-in-touch-sec">
    <div class="container-fluid">
        <div class="row custom-get">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4" data-aos="zoom-in" data-aos-duration="3000">
                <h2 class="mb-4">Get in Touch</h2>
                <div class="phone-consult">
                    <span><a href="tel:+919876035500" class="consult-ico"><img src="{{ URL::asset('front/images/6.png') }}"></span>Phone Consultation</a>
                </div>
                <div class="phone-consult">
                    <span> <a href="tel:+919876035500" class="consult-ico"><img src="{{ URL::asset('front/images/7.png') }}"></span>Video Consultation</a>
                </div>
                <div class="phone-consult">
                    <span><a href="tel:+919876035500" class="consult-ico"><img src="{{ URL::asset('front/images/8.png') }}"></span>Clinic Consultation</a>
                </div>
                <div class="email crsem">
                  <span><a href="#" class="email-icon"><i class="fa fa-envelope consult-ico" aria-hidden="true"></i></span> dr.shardaayurveda@gmail.com</a>
                </div>
                <div class="phone">
                   <span><a href="tel:+919876035500" class="phone-icon consult-ico"><i class="fa fa-phone" aria-hidden="true"></i></span> +91 9876035500</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="get-form" data-aos="zoom-in" data-aos-duration="3000">
                    <h3>Let’s Talk</h3>
                    <span class="error-form display-none">Failed !! please check required fields&#8230;.</span> <br/>
                    <span class="success-form display-none">Thank you for submitting your details, Our patient advisor will contact you soon.</span>
                    <form action="https://www.drshardaayurveda.com/submit_lp_page.php" method='POST'>
                        <input type='hidden' name="subject" value="<?= $routeName; ?>">
                        <input type='hidden' name="action" value="user_mail">
                        <input type='hidden' name="return_url" value="https://www.drshardaayurveda.com/thanks.html">
                        <input type='hidden' name="page_url" value="<?= $actual_link; ?>">

                        <input type="text" id="name" name="name" placeholder="Name"><br>
                        <input type="number" min="0" class="mobile" id="phone" name="mobile" placeholder="Phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><span id="errmsgMobile"></span><br>
                        <input type="email" id="email" name="email" placeholder="Email"><span id="errmsgEmail"></span><br>
                        <textarea id="story" name="description" rows="5" cols="33" placeholder="Message"></textarea><br>
                        <input type="submit" value="Submit" name="submit" class="submit">
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>