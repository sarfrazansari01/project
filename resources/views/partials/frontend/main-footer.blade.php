<footer class="dsa-foo-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="foo-social-icon">
                    <a href="https://www.facebook.com/DrShardaAyurveda" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/shardaayurveda" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/c/DrShardaAyurveda" target="_blank"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/company/dr-sharda-ayurveda" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/DrShardaAyurveda/" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
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
                    <img src="{{ URL::asset('front/images/foo-vector.png') }}" class="cp-logo" alt="footer logo">
                    <p>Opp. Suman Hospital,<br>Model Town, Ludhiana,<br>Punjab 141001</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foo-address-box">
                    <img src="{{ URL::asset('front/images/foo-vector.png') }}" class="cp-logo" alt="footer logo">
                    <p>Opp. Suman Hospital,<br>Model Town, Ludhiana,<br>Punjab 141001</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foo-address-box">
                    <img src="{{ URL::asset('front/images/foo-vector.png') }}" class="cp-logo" alt="footer logo">
                    <p>Opp. Suman Hospital,<br>Model Town, Ludhiana,<br>Punjab 141001</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foo-address-box">
                    <img src="{{ URL::asset('front/images/foo-vector.png') }}" class="cp-logo" alt="footer logo">
                    <p>Opp. Suman Hospital,<br>Model Town, Ludhiana,<br>Punjab 141001</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar foo-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">Treatment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">Blog</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
        <div class="row cp-right-row">
            <div class="col-md-12">
                <p>Copyright  2021 Beauty Supply Outlet. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<script>
jQuery('#client-test').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        }
    }
})
</script>
