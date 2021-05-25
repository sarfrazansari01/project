<header>
    <div class="top-bar-sec">
        <div class="container-fluid">
            <div class="row cust-new">
                <div class="col-md-12">
                    <div class="top-bar">
                        <p><marquee>Dr Sharda Ayurweda</marquee></p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="logo-sec">
        <div class="container-fluid">
            <div class="row custom-logo-sec">
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="tp-social-icon">
                        <a href="https://www.facebook.com/DrShardaAyurveda" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/shardaayurveda" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com/c/DrShardaAyurveda" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/dr-sharda-ayurveda" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/DrShardaAyurveda/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="logo-img">
                        <a href="/"><img src="{{ URL::asset('front/images/dr-sharda-logo.png') }}" class="cp-logo" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search-container" data-aos="zoom-out-down" data-aos-duration="3000">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Search Products.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-menu">
        <div class="container-fluid">
            <div class="row cut-nav-row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light ">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('services') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Our Services
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('asthma') }}">Asthma</a>
                                        <a class="dropdown-item" href="{{ route('obesity') }}">Obesity</a>
                                        <a class="dropdown-item" href="{{ route('diabetes') }}">Diabetes</a>
                                        <a class="dropdown-item" href="{{ route('ibs') }}">IBS</a>
                                    </div>
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
                        </div>
                    </nav>
                    <div class="dsa-phone">
                        <a href="tel:+919876035500" class="phone-btn"> <i class="fa fa-phone" aria-hidden="true"></i> +91 9876035500</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>