<header>
    <div class="top-bar-sec">
        <div class="container-fluid">
            <div class="row cust-new">
                <div class="col-md-12">
                    <div class="top-bar">
                        <p><marquee>Authentic effective Ayurvedic Medicines- Dr. Sharda Ayurveda</marquee></p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="logo-sec">
        <div class="container-fluid">
            <div class="row custom-logo-sec">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="tp-social-icon">
                        <a href="https://www.facebook.com/DrShardaAyurveda" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/shardaayurveda" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com/c/DrShardaAyurveda" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/dr-sharda-ayurveda" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/DrShardaAyurveda/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="logo-img">
                        <a href="/"><img src="{{ URL::asset('front/images/dr-sharda-logo.png') }}" class="cp-logo" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 px-0">
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
                <div class="col-md-12 px-0">
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
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Endocrine &raquo</a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('obesity') }}">Obesity</a></li>
                                                <li><a class="dropdown-item" href="{{ route('diabetes') }}">Diabetes</a></li>
                                                <li><a class="dropdown-item" href="{{ route('thyroid') }}">Thyroid</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"> Digestive &raquo </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('ibs') }}">Irritable Bowel Syndrome</a></li>
                                                <li><a class="dropdown-item" href="{{ route('constipation') }}">Constipation</a></li>
                                                <li><a class="dropdown-item" href="{{ route('chronic_fatigue_syndrome') }}">Chronic Fatigue Syndrome</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"> Skin &raquo </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('psoriasis') }}">Psoriasis</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"> Joint Pain &raquo </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('rheumatoid_arthritis') }}">Rheumatoid Arthritis</a></li>
                                                <li><a class="dropdown-item" href="{{ route('osteoarthritis') }}">Osteoarthritis</a></li>
                                                <li><a class="dropdown-item" href="{{ route('gout') }}">Gout</a></li>
                                                <li><a class="dropdown-item" href="{{ route('psoriatic_arthritis') }}">Psoriatic Arthritis</a></li>
                                                <li><a class="dropdown-item" href="{{ route('reactive_arthritis') }}">Reactive Arthritis</a></li>
                                                <li><a class="dropdown-item" href="{{ route('ankylosing_spondylitis') }}">Ankylosing Spondylitis</a></li>
                                                <li><a class="dropdown-item" href="{{ route('neck_pain') }}">Neck Pain</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"> Respiratory &raquo </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('asthma') }}">Asthma</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"> Sexual Disorders &raquo </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('erectile_dysfunction') }}">Erectile Dysfunction</a></li>
                                            </ul>
                                        </li>
                                    </ul>
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