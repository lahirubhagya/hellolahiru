<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | Dengue App</title>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/viewer.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('assets/assets/assets/assets/images/favicon.ico') }}">
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
                                            <img  src="assets/images/work_3/flash_screen_1.webp"   alt="slider_screen_1">
                                            <a href="assets/images/work_3/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.01</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_3/flash_screen_2.webp"   alt="slider_screen_2">
                                            <a href="assets/images/work_3/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.02</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_3/flash_screen_3.webp"   alt="slider_screen_3">
                                            <a href="assets/images/work_3/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.03</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_3/flash_screen_4.webp"   alt="slider_screen_4">
                                            <a href="assets/images/work_3/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.04</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_3/flash_screen_5.webp"   alt="slider_screen_5">
                                            <a href="assets/images/work_3/flash_screen_5.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.05</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_3/flash_screen_6.webp"   alt="flash_screen_6">
                                            <a href="assets/images/work_3/flash_screen_6.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.06</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_3/flash_screen_7.webp"   alt="flash_screen_7">
                                            <a href="assets/images/work_3/flash_screen_7.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.07</span>
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
                                        <div class="col-md-8 sin-anim">
                                            <div class="section-title post-title">
                                                <h3>CASE STUDY</h3>
                                            </div>
                                            <div class="main-about2">
                                                <h2 class="custom_sub_topic_option_1">
                                                    Dengue Free Lanka, Web & Mobile for  <span style="color: #F68338"> Managing & Tracking Dengue cases & Waste Management in<br> Sri Lanka.</span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="project-details fl-wrap">
                                                <ul>
                                                    <li class="custom_li_font"><span>Date :</span> 12.02.2023 </li>
                                                    <li class="custom_li_font"><span>Category : </span>UI / UX Design</li>
                                                </ul>


                                                <a href="https://www.figma.com/proto/A2Vbn71B7uGl7P5TqaDl9S/DENGUE?page-id=0%3A1&node-id=7-5395&p=f&viewport=485%2C292%2C0.
                                                05&t=zjACegg7KSxURg6n-1&scaling=scale-down&content-scaling
                                                =fixed&starting-point-node-id=7%3A5395" class="btn color-bg fl-wrap" target="_blank">View Project</a>

                                            </div>
                                        </div>
                                    </div><br><br>

                                    <div class="row">
                                        <div class="col-md-12 sin-anim">
                                            <p class="custom_paragraph_option_1">
                                                Dengue Free Lanka is a comprehensive mobile application developed for the Sri Lankan government's
                                                health sector to combat dengue outbreaks and improve waste management practices nationwide. The
                                                solution consists of a centralized web-based admin panel and a mobile application for field agents,
                                                creating an integrated ecosystem for real-time data management, tracking, and coordinated response efforts.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Project Overview
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                Sri Lanka faces recurring challenges with dengue fever outbreaks and irregular waste disposal,
                                                both of which pose significant public health risks. Traditional manual tracking methods proved
                                                inefficient, leading to delayed responses and poor coordination between administrative bodies
                                                and field personnel.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Objective
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>To develop a digital solution that:</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Streamlines dengue case registration and tracking. <br>
                                                2. Improves waste management coordination.<br>
                                                3. Enables real-time field operations.<br>
                                                4. Provides data-driven insights for decision-making.<br>
                                            </p>


                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Target Users
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Primary Users :</b> Field agents responsible for on-site patient visits and waste management.<br>
                                                2. <b>Secondary Users :</b>  Administrative personnel managing the web-based control panel.<br>
                                                3. <b>Beneficiaries :</b>  Sri Lankan citizens, health authorities, and environmental management teams.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Core Functionalities
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>1. Dengue Case Management</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Web Admin Panel</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Patient Registration :</b>
                                                Administrators create comprehensive patient profiles by entering personal details,
                                                exact location coordinates, symptom information, and uploading medical documents.
                                                This establishes a complete digital record for each dengue case with a unique tracking ID.
                                                <br>

                                                2. <b>Agent Assignment :</b>
                                                The system intelligently assigns cases to field agents based on location proximity
                                                and current workload. Assignments are tracked from dispatch to completion, ensuring
                                                accountability and efficient resource use.
                                                <br>

                                                3. <b>Case Monitoring :</b>
                                                A live dashboard provides real-time oversight of all active cases, agent activities,
                                                and automatically generates alerts for critical situations requiring
                                                immediate attention.
                                                <br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Mobile Field App</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Patient Visit Logging :</b>
                                                Field agents access their assigned cases, navigate to patient homes via GPS,
                                                and document visit details including patient condition, observations, photos
                                                , and treatment recommendations—all in real-time.
                                                <br>

                                                2. <b>Environmental Data Collection :</b>
                                                Agents conduct systematic environmental assessments, identifying mosquito
                                                breeding sites, documenting water storage practices, and tracking preventive
                                                measures to break disease transmission cycles.
                                                <br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>2. Waste Management Module</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Web Admin Panel</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Location Registration :</b>
                                                Administrators log problematic waste sites with GPS coordinates, waste
                                                type classification, severity ratings, photographic evidence, and priority
                                                levels for strategic cleanup planning.
                                                <br>

                                                2. <b>Team Deployment :</b>
                                                Cleanup operations are organized by assigning agents, allocating personnel
                                                and equipment, scheduling operations, and tracking resource availability
                                                across all active sites.
                                                <br>

                                                3. <b> Progress Monitoring :</b>
                                                Real-time tracking of cleanup operations with before/after photo
                                                comparisons and quality verification to ensure completion standards are met.
                                                <br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Mobile Field App</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Task Management :</b>
                                                Agents receive cleanup assignments with detailed site information,
                                                equipment lists, and GPS navigation to waste locations.
                                                <br>

                                                2. <b>Status Updates :</b>
                                                Teams document cleanup progress with timestamped photos, report completion status,
                                                note challenges encountered, and record resources deployed
                                                for administrative verification.
                                                <br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Key Features
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>1. Dynamic Outbreak Map</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>What It Is:</b>
                                                An interactive, real-time visualization system that displays
                                                all dengue cases across Sri Lanka on a geographical map, helping
                                                authorities understand disease distribution patterns at a glance.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Core Capabilities:</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Live Case Plotting :</b> Every registered patient appears instantly on the map.<br>
                                                2. <b>Color-Coded Alerts :</b>  Visual intensity indicators (green/yellow/orange/red) show outbreak severity by region.<br>
                                                3. <b>Smart Clustering :</b>  Automatically highlights areas with concentrated case groups.<br>
                                                4. <b>Advanced Filtering :</b>  View specific data by date ranges, severity levels, administrative districts, or case status.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>2. Historical Data Access</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>What It Is:</b>
                                                A comprehensive digital archive storing complete
                                                records of all past dengue cases and waste management operations for
                                                reference, analysis, and learning.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Core Capabilities:</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Complete Case History :</b> Access patient journeys from registration through recovery, including treatments and outcomes.<br>
                                                2. <b>Cleanup Records :</b>  Full documentation of waste management operations, effectiveness, and resource usage.<br>
                                                3. <b>Powerful Search Tools :</b>  Find specific records using multiple filters (date, location, agent, severity, outcome).<br>
                                                4. <b>Pattern Analysis :</b>  Compare data across years, identify seasonal trends, and evaluate intervention success rates.<br>
                                            </p>


                                            <p class="custom_paragraph_option_1">
                                                <b>3. Multilingual Support</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>What It Is:</b>
                                                Full application availability in Sri Lanka's three main languages,
                                                ensuring every user can work comfortably in their preferred language.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Core Capabilities:</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Three Language Options :</b> Complete Sinhala, Tamil, and English interfaces.<br>
                                                2. <b>Total Translation :</b>  Every menu, form, button, message, and help document available in all languages.<br>
                                                3. <b>Instant Switching :</b>  Change languages with one click; preferences saved automatically.<br>
                                                4. <b>Cultural Adaptation :</b>  Uses region-appropriate terminology and administrative terms.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Impact & Benefits
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>Public Health Improvements</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Faster Response Times :</b> Real-time tracking enables rapid intervention.<br>
                                                2. <b>Better Outbreak Management :</b>  Visual mapping helps contain spread.<br>
                                                3. <b>Data-Driven Prevention :</b>  Historical analysis informs preventive measures.<br>
                                                4. <b>Improved Patient Care :</b>  Systematic follow-ups ensure better outcomes.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Operational Efficiency</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Streamlined Workflows :</b> Eliminates paper-based processes.<br>
                                                2. <b>Enhanced Coordination :</b>  Seamless communication between admin and field teams.<br>
                                                3. <b>Resource Optimization :</b>  Better allocation of personnel and equipment.<br>
                                                4. <b>Accountability :</b>  Complete audit trail of all activities.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Environmental Benefits</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Proactive Waste Management :</b> Systematic identification and cleanup of problem areas.<br>
                                                2. <b>Reduced Disease Vectors :</b>  Elimination of mosquito breeding sites.<br>
                                                3. <b>Community Health :</b>  Cleaner environments promote overall wellbeing.<br>
                                                4. <b>Sustainable Practices :</b>  Data helps identify long-term solutions.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Accessibility & Inclusion</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Language Barriers Removed :</b> Multilingual support ensures widespread adoption.<br>
                                                2. <b>User-Friendly Interface :</b>  Minimal training required.<br>
                                                3. <b>Field-Ready :</b>  Designed for real-world conditions.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Future Enhancements
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>Potential Additions</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Predictive Analytics :</b> AI-powered outbreak prediction based on historical patterns.<br>
                                                2. <b>SMS/Voice Alerts :</b>  Additional notification channels for communities.<br>
                                                3. <b>Integration with Health Records :</b>  Link to national health databases.<br>
                                                4. <b>Weather Data Integration :</b>  Correlate outbreaks with weather patterns.<br>
                                                5. <b>Training Module :</b>  Built-in guides and tutorials for new users.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Conclusion
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                Dengue Free Lanka represents a significant technological advancement in
                                                Sri Lanka's public health infrastructure. By digitizing and streamlining dengue
                                                case management and waste disposal tracking, the application empowers field agents
                                                with real-time tools while providing administrators with comprehensive oversight
                                                and analytical capabilities. The combination of user-friendly mobile interfaces,
                                                powerful mapping features, extensive historical data access, and multilingual support
                                                makes this solution both practical and inclusive.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                This integrated approach not only enhances immediate response capabilities but
                                                also builds a valuable data repository for long-term epidemiological research
                                                and policy development, ultimately contributing to a healthier and cleaner Sri Lanka.
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
                <!-- content-holder end ----------------------------------------->
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
        <script src="{{asset('/js/app.js')}}"></script>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <!-- Vendor scripts end ----------------------------------------------------->
    </body>
</html>
