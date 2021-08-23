<footer class="dsa-foo-sec">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="foo-logo">
                    <img src="{{ URL::asset('front/images/dr-sharda-logo.png') }}" class="cp-logo" alt="footer logo">
                </div>
            </div>
        </div>
        <div class="row cust-address">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 caso">
                <div class="foo-address-box">
                    <p class="fp"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Ludhiana(Head Office)</p>				
                    <p class="csr">562-L, Opp Suman Hospital,<br>Model Town, Central,<br>Ludhiana, Punjab 141002</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 caso">
                <div class="foo-address-box">
                    <p class="fp"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Mohali</p>	
                    <p class="csr">Infront of army canteen,,<br>Sco 105, Phase 10, Sector 64, Sahibzada Ajit Singh Nagar,<br>Punjab 160062</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 caso caso-1">
                <div class="foo-address-box">
                    <p class="fp"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Bathinda</p>	
                    <p class="csr">Opposite Sepal Hotel,<br>Gate No.1, Near Tinkoni Chowk<br>Bathinda , Punjab 151001</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="foo-address-box">
                    <p class="fp"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Muktsar</p>	
                    <p class="csr">Mansa colony,<br>Abohar Road,Near Bus stand Muktsar Sri Muktsar Sahib,<br>Punjab 141001</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="brd"></div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-6 col-sm-12 col-12">
                <p class="text-white copy">Copyright  2021 Beauty Supply Outlet. All Rights Reserved</p>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-6 col-sm-12 col-12 list-1">
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

    function readMoreReadLess() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more-content");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });
    
    if ($(window).width() < 992) {
  $('.dropdown-menu a').click(function(e){
    if($(this).attr('href') == '#')
      e.preventDefault();
    if($(this).next('.submenu').length){
      $(this).next('.submenu').toggle();
    }
    $('.dropdown').on('hide.bs.dropdown', function () {
      $(this).find('.submenu').hide();
    })
  });
}
</script>
