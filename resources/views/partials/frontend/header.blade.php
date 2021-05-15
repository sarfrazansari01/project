<header class="mainHeader btClear">
    <div class="port">
        <div class="menuHolder btClear">
            <span class="btVerticalMenuTrigger">&nbsp;
                <span class="btIco btIcoSmallSize btIcoDefaultColor btIcoDefaultType" >
                    <a href="#"  data-ico-fa="&#xf0c9;" class="btIcoHolder"><em>menu trigger</em></a>
                </span>
            </span>
            <span class="btHorizontalMenuTrigger">&nbsp;
                <span class="btIco btIcoSmallSize btIcoDefaultColor btIcoDefaultType" >
                    <a href="#"  data-ico-fa="&#xf0c9;" class="btIcoHolder"><em>menu trigger</em></a>
                </span>
            </span>
            <div class="logo">
                <span>
                    <a href="http://drshardaayurveda.com/">
                        <img class="btMainLogo" data-hw="3.8545454545455" src="{{ URL::asset('admin/dist/img/blue-logo.png') }}" alt="drshardaayurveda Clinic">
                        <img class="btAltLogo" src="{{ URL::asset('admin/dist/img/blue-logo.png') }}" alt="drshardaayurveda Clinic">
                    </a>					
                </span>
            </div><!-- /logo -->

            <div class="topBarInLogoArea">
                <span class="infoToggler"></span>
                <div class="topBarInLogoAreaCell">
                    <span class="btIconWidget ">
                        <span class="btIconWidgetIcon">
                            <span class="btIco " >
                                <span  data-ico-s7="&#xe66b;" class="btIcoHolder"><em></em></span>
                            </span>
                        </span>
                        <span class="btIconWidgetContent">
                            <span class="btIconWidgetTitle">Monday - Sunday 09:00-19:00</span>
                            <span class="btIconWidgetText">Every Day - OPEN</span>
                        </span>
                    </span>
                    <span class="btIconWidget ">
                        <span class="btIconWidgetIcon">
                            <span class="btIco " >
                                <span  data-ico-s7="&#xe627;" class="btIcoHolder"><em></em></span>
                            </span>
                        </span>
                        <span class="btIconWidgetContent">
                            <span class="btIconWidgetTitle">+9198760-35500</span>
                            <span class="btIconWidgetText">dr.shardaayurveda@gmail.com</span>
                        </span>
                    </span>
                    <span class="btIconWidget ">
                        <span class="btIconWidgetIcon">
                            <span class="btIco " >
                                <span  data-ico-s7="&#xe638;" class="btIcoHolder"><em></em></span>
                            </span>
                        </span>
                        <span class="btIconWidgetContent">
                            <span class="btIconWidgetTitle">Punjab</span>
                            <span class="btIconWidgetText">India</span>
                        </span>
                    </span>					
                </div><!-- /topBarInLogoAreaCell -->
            </div><!-- /topBarInLogoArea -->		

            <div class="menuPort">
                <div class="topBarInMenu">
                    <div class="topBarInMenuCell">
                        <div class="btTopBox widget_search">
                            <div class="btSearch">
                                <div class="btSearchInner" role="search">
                                    <div class="btSearchInnerContent">
                                        <form action="" method="get">
                                            <input type="text" name="s" placeholder="Looking for..." class="untouched">
                                            <button type="submit" data-icon="&#xf105;"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="https://www.facebook.com/DrShardaAyurveda/" target="_blank" class="btIconWidget btSpecialHeaderIcon">
                            <span class="btIconWidgetIcon">
                                <span class="btIco " >
                                    <span  data-ico-fa="&#xf09a;" class="btIcoHolder"><em></em></span>
                                </span>
                            </span>
                        </a>
                        <a href="https://twitter.com/shardaayurveda/" target="_blank" class="btIconWidget btSpecialHeaderIcon">
                            <span class="btIconWidgetIcon">
                                <span class="btIco " >
                                    <span  data-ico-fa="&#xf099;" class="btIcoHolder"><em></em></span>
                                </span>
                            </span>
                        </a>
                        <a href="https://www.instagram.com/DrShardaAyurveda/" target="_blank" class="btIconWidget btSpecialHeaderIcon">
                            <span class="btIconWidgetIcon">
                                <span class="btIco " >
                                    <span  data-ico-fa="&#xf231;" class="btIcoHolder"><em></em></span>
                                </span>
                            </span>
                        </a>					
                    </div><!-- /topBarInMenu -->
                </div><!-- /topBarInMenuCell -->
                <nav>
                    <ul id="menu-main-menu" class="menu">
                        <li id="menu-item-995" class="btMenuWideDropdown menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-has-children menu-item-995">
                            <a href="/" aria-current="page">Home</a>
                        </li>
                        <li id="menu-item-1014" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1014">
                            <a href="{{ route('about-us') }}">About us</a>
                            <ul class="sub-menu">
                                <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                    <a href="{{ route('dr-mukesh-sharda') }}">Dr. Mukesh Sharda</a>
                                </li>
                                <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                    <a href="{{ route('dr-arjun-sharda') }}">Dr Arjun Sharda</a>
                                </li>
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('contact-us') }}">Contact us</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-1014" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1014">
                            <a href="{{ route('services') }}">Services</a>
                            <ul class="sub-menu">
                                <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                    <a href="{{ route('endocrine') }}">Endocrine</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('obesity') }}">Obesity</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('diabetes') }}">Diabetes</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('thyroid') }}">Thyroid</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                    <a href="{{ route('digestive') }}">Digestive</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('acidity') }}">Acidity</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('ibs') }}">IBS</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('constipation') }}">Constipation</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('anorexia-nervosa') }}">Anorexia Nervosa</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('chronic-fatigue-syndrom') }}">Chronic Fatigue Syndrom</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('abdominal-pain') }}">Abdominal Pain</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('piles') }}">Piles</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('ulcerative-colitis') }}">Ulcerative Colitis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('flatulence') }}">Flatulence</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Hair</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Hair Fall</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Dandruff</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('skin') }}">Skin</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('vitiligo') }}">Vitiligo</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hives') }}">Hives</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('psoriasis') }}">Psoriasis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('eczema') }}">Eczema</a>
                                        </li>
                                         <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('tinea') }}">Tinea</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Joint Pain</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Rheumatoid Artritis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Cervical</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Osteoarthritis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Gout</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Ankylosing Spondylitis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Back Pain</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Uric Acid</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Hip Joint Pain</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Slip Disk</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Respiratory</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Asthma</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Sinusitis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Rhinitis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Chronic laryngitis</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Urinary</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Cystitis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Urithritis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Urinary Tract Infection</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Liver</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Fatty Liver</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Jaundice</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Liver Cirrhosis</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Hepatomegaly</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Sexual Disorders</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Erectile Dysfunction</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Premature Ejaculation</a>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Oligospermia</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Low Sprem Count</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Neurological</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Migraine</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Acute Spinal Cord Injury</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Sciatica Pain</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Anxiety Disorder</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Depression</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Insomnia</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Bed Wetting</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Circulatory</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Blood Pressure</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">High Cholestrol</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Colonary Heart Disease</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Anaemia</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">De Addiction</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Alcohol</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Drug</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Smoking</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Tobacco</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Gynae</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Menopause</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Leucorrhoea</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997">
                                    <a href="{{ route('hair') }}">Kidney</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('hair-fall') }}">Kidney Stones</a>
                                        </li>
                                        <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998">
                                            <a href="{{ route('dandruff') }}">Renal Faliure</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-995" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1014">
                            <a href="{{ route('book-appointment') }}" aria-current="page">Book Appointment</a>
                        </li>
                        <li id="menu-item-995" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1014">
                            <a href="{{ route('gallery') }}" aria-current="page">Gallery</a>
                        </li>
                        <li id="menu-item-995" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1014">
                            <a href="{{ route('blog') }}" aria-current="page">Blog</a>
                        </li>
                    </ul>					
                </nav>
            </div>
        </div>
    </div>
</header>