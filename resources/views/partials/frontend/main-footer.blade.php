<footer class="dsa-foo-sec">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="foo-logo">
                    <img src="{{ URL::asset('front/images/dr-sharda-logo.png') }}" class="cp-logo" alt="footer logo">
                    <p>Dr. Sharda Ayurveda is India's renown clinic <br>specialized in Ayurvedic Treatment for all Chronic Disorders.</p>
                </div>
            </div>
        </div>
        <div class="row cust-address">
            <div class="col-md-3">
                <div class="foo-address-box">
                    <p class="fp"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;&nbsp;Ludhiana(Head Office)</p>				
                    <p>Opp. Suman Hospital,<br>Model Town, Ludhiana,<br>Punjab 141001</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foo-address-box">
                    <p class="fp"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;&nbsp;Ludhiana(Head Office)</p>	
                    <p>Opp. Suman Hospital,<br>Model Town, Ludhiana,<br>Punjab 141001</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foo-address-box">
                    <p class="fp"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;&nbsp;Ludhiana(Head Office)</p>	
                    <p>Opp. Suman Hospital,<br>Model Town, Ludhiana,<br>Punjab 141001</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foo-address-box">
                    <p class="fp"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;&nbsp;Ludhiana(Head Office)</p>	
                    <p>Opp. Suman Hospital,<br>Model Town, Ludhiana,<br>Punjab 141001</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="brd"></div>
            </div>
            <div class="col-md-6">
                <p class="text-white">Copyright  2021 Beauty Supply Outlet. All Rights Reserved</p>
            </div>
            <div class="col-md-6">
                <ul class="listing">
                    <li>
                        <a href="/">Home <span class="sr-only">(current)</span></a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a  href="{{ route('about-us') }}">About Us</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">Our Services</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Gallery</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Treatment</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Store</a><span class="ln">&#124;</span>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
    AOS.init();
    jQuery('#client-test').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })

    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 300) {
            jQuery(".navbar-menu").addClass("sticky_header");
        } else {
            $(".navbar-menu").removeClass("sticky_header");
        }
    });

    $(document).ready(function () {
        $(".mobile").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                //display error message
                $("#errmsgMobile").html("Only number are allowed!").show().fadeOut(5000);
                return false;
            }
        });
    });


    $('#sbtForm').click(function () {
        var email = $('#email').val();
        if (IsEmail(email) == false) {
            $("#errmsgEmail").html("Invalid email").show().fadeOut(5000);
            return false;
        }
        var mobNum = $(".mobile").val();
        if (mobNum.length != 10) {
            $("#errmsgMobile").html("Number should be 10 digit!").show().fadeOut(5000);
            return false;
        }
    });

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }
</script>
