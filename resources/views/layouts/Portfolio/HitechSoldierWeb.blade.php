<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | Hitech Web Application</title>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('assets/assets/assets/assets/assets/images/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <!--loader start -------------------------------------------------------->
        @include('commonAssets.preloader')
        <!--loader end ---------------------------------------------------------->

        <!-- Main  -------------------------------------------------------------->
        <div id="main">
            <!-- header start --------------------------------------------------->
            @include('commonAssets.appBar')
            <!-- header end ----------------------------------------------------->

            <!-- wrapper -------------------------------------------------------->
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder scroll-content" data-pagetitle="Portofolio Single">

                    <!-- nav-holder start-------------------------------------------->
                    @include('commonAssets.sideNavigationBar')
                    <!-- nav-holder end --------------------------------------------->

                    <!-- hero-slider-wrap -->


                    <!--content -->
                    <div class="content">

                        <!-- fw-carousel-wrap -->
                        <div class="fw-carousel-wrap show-case-slider-wrap   fl-wrap">
                            <!-- fw-carousel  -->
                            <div class="fw-carousel  fs-gallery-wrap fl-wrap full-height lightgallery" data-mousecontrol="0">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide hov_zoom">
                                            <img  src="assets/images/work_17/flash_screen_1.webp"   alt="slider_screen_1">
                                            <a href="assets/images/work_17/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.01</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_17/flash_screen_2.webp"   alt="slider_screen_2">
                                            <a href="assets/images/work_17/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.02</span>
                                        </div>
                                        <!-- swiper-slide end-->
                                    </div>
                                </div>
                            </div>
                            <!-- fw-carousel end -->
                            <div class="fw-carousel-button-prev fcb"><i class="fal fa-angle-left"></i></div>
                            <div class="fw-carousel-button-next fcb"><i class="fal fa-angle-right"></i></div>
                            <div class="fw-carousel_pagination-wrap">
                                <div class="container">
                                    <div class="fw-carousel_pagination"></div>
                                </div>
                            </div>
                        </div>
                        <!-- fw-carousel-wrap end -->


                        <!-- section-->
                        <section style="margin-top:4% !important;">
                            <div class="col-wc_dec"></div>
                            <div class="container">
                                <!-- text-block -->
                                <div class="text-block fl-wrap no-mar-top">
                                    <div class="row">
                                        <div class="col-md-8 sin-anim" style="margin-top: 1%">
                                            <div class="section-title post-title">
                                                <h3>CASE STUDY</h3>
                                            </div>
                                            <div class="main-about2">
                                                <h2 class="custom_sub_topic_option_1">
                                                    <span style="color: #F68338"> HiTech Soldier :</span> Advanced Defense Intelligence Platform for Sri Lanka Ministry of Defense
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="project-details fl-wrap">
                                                <ul>
                                                    <li class="custom_li_font"><span>Date :</span> 03.02.2019 </li>
                                                    <li class="custom_li_font"><span>Category : </span>Web Design</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12 sin-anim">
                                            <p class="custom_paragraph_option_1">
                                                HiTech Soldier is a sophisticated military-grade web application developed
                                                for the Ministry of Defense of Sri Lanka. This classified defense system
                                                integrates advanced mapping capabilities, real-time tracking, and intelligence
                                                analysis tools to support strategic military operations and decision-making.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Project Context
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                This project required the development of a secure, mission-critical platform
                                                capable of handling sensitive defense operations. The application needed
                                                to provide military personnel with advanced analytical tools, real-time
                                                situational awareness, and comprehensive mapping capabilities while maintaining
                                                the highest standards of security and usability under high-pressure
                                                operational conditions.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        System Architecture
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The application comprises six core modules designed to support various aspects of military operations:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Master Map</b> - Advanced geospatial intelligence and terrain analysis.<br>
                                                <b>2. Strength Report</b> - [Classified].<br>
                                                <b>3. Communication Plan</b> - [Classified].<br>
                                                <b>4. Sitrep Plan</b> - [Classified].<br>
                                                <b>5. Admin Area </b> - [Classified].<br>
                                                <b>6. Live Tracking </b> - Real-time vehicle monitoring and fleet management.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="color: #c22213">
                                               <i> Note: Due to security protocols and confidentiality requirements, detailed information about
                                                   several modules cannot be disclosed.
                                               </i>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Feature Spotlight: Master Map Module
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The Master Map serves as the intelligence backbone of the system, providing comprehensive geospatial analysis capabilities:
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Strategic Location Marking</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Draw and annotate defense positions and points of interest directly on the map.<br>
                                                2. Save location data for future reference and strategic re-analysis.<br>
                                                3. Create custom overlays for mission planning and operational coordination.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Terrain Analysis</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Measure elevations across different geographical points.<br>
                                                2. Compare digital elevation data with actual terrain conditions.<br>
                                                3. Analyze topographical features for tactical advantage assessment.<br>
                                                4. Evaluate line-of-sight and visibility considerations.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Infrastructure Overlay & Analysis</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Overlay buildings and structures onto real terrain using precise GPS coordinates.<br>
                                                2. Utilize accurate Latitude and Longitude data for spatial accuracy.<br>
                                                3. Analyze infrastructure density and distribution patterns.<br>
                                                4. Support urban operations planning with detailed structural intelligence.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Geographic Intelligence Gathering</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Collect and compile terrain-specific data through interactive map exploration.<br>
                                                2. Generate comprehensive geographic reports for mission briefing.<br>
                                                3. Store and retrieve historical geographic data for trend analysis.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Feature Spotlight: Live Tracking Module
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The Live Tracking system provides real-time situational awareness of vehicle assets:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Real-Time Vehicle Monitoring </b> - Continuous tracking of fleet positions.<br>
                                                <b>2. Status Intelligence</b> - Comprehensive vehicle condition and operational status data.<br>
                                                <b>3. Movement Analysis</b> - Track routes, speeds, and patterns for operational efficiency.<br>
                                                <b>4. Alert Systems</b> - Immediate notification of critical events or deviations.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="color: #c22213">
                                                <i> Note: Additional capabilities remain classified for security purposes.
                                                </i>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Design System
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>Color Scheme</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Primary Color </b> - Light Green, symbolizing alertness, tactical precision, and operational readiness.<br>
                                                <b>2. Theme</b> - Dark Interface, reduces eye strain during extended operations and maintains operational security in low-light environments.<br>
                                                <b>3. High Contrast Elements</b> - ensures critical information remains visible under various lighting conditions.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Typography</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                Font Family: Google Open Sans - selected for exceptional legibility at
                                                various sizes and optimal performance in high-stress operational contexts
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Strategic Design Rationale</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                The dark theme serves multiple operational purposes:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Operational Security </b> - Minimizes screen glow in tactical environments.<br>
                                                <b>2. Extended Use</b> - Reduces eye fatigue during long monitoring shifts.<br>
                                                <b>3. Data Focus</b> - Dark backgrounds enhance data visualization and map clarity.<br>
                                            </p>


                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Project Impact
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The HiTech Soldier platform delivers critical capabilities to the Sri Lanka Ministry of Defense:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Enhanced Situational Awareness</b> - Real-time intelligence for informed decision-making.<br>
                                                <b>2. Operational Efficiency</b> - Streamlined access to geographic and tactical information.<br>
                                                <b>3. Strategic Planning</b> - Advanced tools for mission preparation and analysis.<br>
                                                <b>4. Resource Management</b> - Comprehensive vehicle tracking and fleet optimization.<br>
                                                <b>5. Intelligence Consolidation</b> -  Centralized platform for multiple defense operations.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Design Excellence in High-Stakes Environments
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                This project demonstrates the successful application of UX principles in a mission-critical
                                                military context. By balancing the Ministry of Defense's specific operational requirements
                                                with fundamental usability principles, the HiTech Soldier platform provides defense personnel
                                                with a powerful, intuitive tool that enhances operational capabilities while maintaining the
                                                security and reliability essential for defense operations.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                The result is a professional-grade defense platform that combines advanced functionality with
                                                operational simplicity, enabling military personnel to focus on their mission rather than
                                                struggling with technology.
                                            </p>


                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Conclusion
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The HiTech Soldier project represents a significant achievement in defense technology design,
                                                successfully bridging the gap between complex military requirements and intuitive user experience.
                                                Developing a mission-critical platform for the Ministry of Defense of Sri Lanka required not only
                                                technical expertise but also a deep understanding of operational contexts where split-second decisions
                                                can have serious consequences. The dark theme with light green accents, Google Open Sans
                                                typography, and custom-designed imagery were all strategic decisions that support extended
                                                operational use while maintaining visual clarity and usability in high-stakes military environments.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                This project demonstrated that adhering to UI/UX principles becomes absolutely critical in defense
                                                contexts where poor design could compromise missions or endanger lives. By maintaining unwavering
                                                commitment to usability, consistency, and clarity throughout the system—from the sophisticated Master
                                                Map module with its geospatial intelligence capabilities to the real-time Live Tracking system—the
                                                HiTech Soldier platform empowers military personnel to focus on their strategic objectives rather
                                                than struggling with technology. The successful delivery of this platform, meeting all of the Ministry's
                                                demands while upholding the highest standards of design excellence, continues to serve as a vital
                                                tool in Sri Lanka's defense operations, supporting strategic decision-making and enhancing operational
                                                capabilities across multiple military functions.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="limit-box2 fl-wrap"></div>

                                </div>
                                <!-- text-block end -->
                            </div>
                            <div class="sec-lines"></div>
                            <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
                        </section>
                        <!-- section end -->
                    </div>
                    <!--content  end -->
                    <div class="limit-box fl-wrap"></div>

                    <!--footer start------------------------------------------------->
                    <div class="height-emulator fl-wrap"></div>
                    @include('commonAssets.fotterBar')
                    <!--footer  end ------------------------------------------------->
                </div>
                <!-- content-holder end -->
            </div>
            <!--wrapper end ----------------------------------------------------->

            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->
        </div>
        <!-- Main end ----------------------------------------------------------->

        <!-- Vendor scripts start --------------------------------------------------->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="{{asset('assets/js/pdfobject.min.js')}}"></script>
        <!-- Vendor scripts end ----------------------------------------------------->
    </body>
</html>
