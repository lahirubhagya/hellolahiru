<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>Iam-lahiru | Nextport Web Application</title>
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
                                    <img  src="assets/images/work_14/flash_screen_1.webp"   alt="slider_screen_1">
                                    <a href="assets/images/work_14/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                    <span class="slide-numb">.01</span>
                                </div>
                                <!-- swiper-slide end-->

                                <!-- swiper-slide-->
                                <div class="swiper-slide  hov_zoom">
                                    <img  src="assets/images/work_14/flash_screen_2.webp"   alt="slider_screen_2">
                                    <a href="assets/images/work_14/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                    <span class="slide-numb">.02</span>
                                </div>
                                <!-- swiper-slide end-->

                                <!-- swiper-slide-->
                                <div class="swiper-slide  hov_zoom">
                                    <img  src="assets/images/work_14/flash_screen_3.webp"   alt="slider_screen_3">
                                    <a href="assets/images/work_14/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                    <span class="slide-numb">.03</span>
                                </div>
                                <!-- swiper-slide end-->

                                <!-- swiper-slide-->
                                <div class="swiper-slide  hov_zoom">
                                    <img  src="assets/images/work_14/flash_screen_4.webp"   alt="slider_screen_4">
                                    <a href="assets/images/work_14/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                    <span class="slide-numb">.04</span>
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
                                            <span style="color: #F68338"> Royal College Panadura :</span> A Digital Hub for Alumni Community Engagement
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="project-details fl-wrap">
                                        <ul>
                                            <li class="custom_li_font"><span>Date :</span> 25.06.2024 </li>
                                            <li class="custom_li_font"><span>Category : </span>Web Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-12 sin-anim">
                                    <p class="custom_paragraph_option_1">
                                        The Royal College Panadura web application is a community-focused digital platform
                                        designed to strengthen connections between the school and its alumni network.
                                        Developed in collaboration with the school's Old Boys Association, this platform
                                        serves as a central hub for news, events, and school information while honoring
                                        the institution's rich heritage and traditions.
                                    </p>

                                    <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <ul class="ul_paragraph">
                                            <li>
                                                Project Context
                                            </li>
                                        </ul>
                                    </div>

                                    <p class="custom_paragraph_option_1">
                                        Royal College Panadura sought a modern digital presence that would effectively serve both
                                        current students and its extensive alumni network. The Old Boys Association required a
                                        platform that authentically represented the school's identity, facilitated community
                                        engagement, and provided easy access to school news and events while maintaining
                                        accessibility for users of all ages and technical abilities.
                                    </p>

                                    <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <ul class="ul_paragraph">
                                            <li>
                                                System Architecture
                                            </li>
                                        </ul>
                                    </div>

                                    <p class="custom_paragraph_option_1">
                                        The application was structured around five primary sections designed to serve the diverse needs of the school community:
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>1. Home</b> - Dynamic landing page with announcements and latest news.<br>
                                        <b>2. About Us</b> - School history, mission, and values.<br>
                                        <b>3. News & Events</b> - Current happenings and upcoming activities.<br>
                                        <b>4. Blogs</b> - Community stories and alumni contributions.<br>
                                        <b>5. Contact Us </b> - Communication channels for inquiries and engagement.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        This streamlined structure ensures visitors can quickly find relevant information
                                        while maintaining a clear focus on community connection and school updates.
                                    </p>

                                    <div class="limit-box2 fl-wrap"></div>

                                    <div class="dec-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img class="img_setup" src="assets/images/work_14/PRC_1.webp"   alt="home_page">
                                                    </div>
                                                    <div class="col-md-12"><br>
                                                        <img class="img_setup" src="assets/images/work_14/PRC_3.webp"   alt="home_page">
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img class="img_setup img_margin_top" src="assets/images/work_14/PRC_2.webp" alt="contactus_page">
                                                    </div>
                                                    <div class="col-md-12"><br>
                                                        <img class="img_setup" src="assets/images/work_14/PRC_4.webp"   alt="cookies_page">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <ul class="ul_paragraph">
                                            <li>
                                                Design System
                                            </li>
                                        </ul>
                                    </div>

                                    <p class="custom_paragraph_option_1">
                                        The visual design authentically reflects Royal College Panadura's school identity:
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>Color Palette</b>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>1. Primary Color</b> - Dark Green, Representing the school's official colors, tradition, and academic excellence.<br>
                                        <b>2. Secondary Color</b> - Yellow, Complementing the school theme and adding vibrancy to the interface.<br>
                                        <b>3. Strategic Color Application</b> - Both colors used consistently throughout to reinforce school identity.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>Typography</b>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>1. Font Family</b> - Noto Sans (Google Fonts) - Selected for exceptional readability and comprehensive character support.<br>
                                        <b>2. Flexible Font Sizing</b> - Users can increase or decrease text size for optimal reading comfort.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>Theme Customization</b>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        Understanding that the platform serves users across different age groups and
                                        viewing preferences, the application offers comprehensive theme options:
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>1. Dark Theme (Default)</b> - Modern, sophisticated interface that reduces eye strain during extended browsing.<br>
                                        <b>2. Light Theme</b> - Traditional, high-contrast option for enhanced readability.<br>
                                        <b>3. System Theme </b> - Automatically adapts to the user's operating system preferences for seamless integration.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        This flexibility ensures every member of the school community—from young students to senior alumni—can
                                        comfortably access the platform according to their preferences.
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>Accessibility & Inclusive Design</b>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>1. Universal Readability</b> - A standout feature of this platform is its commitment to accessibility:<br>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>Adjustable Font Sizing</b> <br>
                                        1. Users can increase text size for improved readability.<br>
                                        2. Particularly valuable for older alumni who may have vision challenges.<br>
                                        3. Decreasing option for users who prefer compact layouts.<br>
                                        4. Maintains design integrity across all size settings.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        This feature ensures the platform serves the entire school community, from young tech-savvy students to senior
                                        alumni members who may need larger text for comfortable reading.
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>Intuitive Navigation</b>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        1. Clear menu structure accessible to users of all technical skill levels.<br>
                                        2. Consistent navigation patterns throughout the site.<br>
                                        3. Mobile-responsive design for access on any device.<br>
                                        4. Fast loading times ensuring smooth experience.<br>
                                    </p>

                                    <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <ul class="ul_paragraph">
                                            <li>
                                                Supporting Content Pages
                                            </li>
                                        </ul>
                                    </div>

                                    <p class="custom_paragraph_option_1">
                                        Beyond the main sections, the platform includes essential informational pages:
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>1. Our Story</b> - Detailed school history and heritage.<br>
                                        <b>2. Privacy Policy</b> - Data protection and privacy commitments.<br>
                                        <b>3. Terms of Use</b> - Guidelines for platform usage.<br>
                                        <b>4. Cookie Settings</b> -  User control over data preferences.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        These pages ensure transparency and give users control over their
                                        experience while providing important contextual information about the school.
                                    </p>

                                    <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <ul class="ul_paragraph">
                                            <li>
                                                UI/UX Design Principles
                                            </li>
                                        </ul>
                                    </div>

                                    <p class="custom_paragraph_option_1">
                                        <b>Community-Centered Design</b>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        Every design decision prioritized the needs of the school community:
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>1. Clear Information Hierarchy</b> - Most important updates prominently displayed.<br>
                                        <b>2. Easy Content Discovery</b> - Intuitive organization of news, events, and blogs.<br>
                                        <b>3. Visual Consistency</b> - School colors and branding throughout create strong identity.<br>
                                        <b>4. Responsive Layout</b> - Seamless experience across desktop, tablet, and mobile devices.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>Tradition Meets Modernity</b>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        The design successfully balances:
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <b>1. Heritage </b> - School colors and traditional elements honoring history.<br>
                                        <b>2. Modernity </b> - Contemporary interface design and user experience.<br>
                                        <b>3. Accessibility </b> - Features like font resizing that serve all age groups.<br>
                                        <b>4. Flexibility </b> - Theme options accommodating different preferences.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>Performance & Reliability</b>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        1. Fast page loads ensuring quick access to announcements.<br>
                                        2. Stable platform for consistent community engagement.<br>
                                        3. Regular updates keeping content fresh and relevant.<br>
                                        4. Scalable architecture supporting growing alumni network.<br>
                                    </p>

                                    <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <ul class="ul_paragraph">
                                            <li>
                                                Project Impact
                                            </li>
                                        </ul>
                                    </div>

                                    <p class="custom_paragraph_option_1">
                                        The Royal College Panadura web application delivers significant value to the school community:
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>For Current Students</b>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        1. Easy access to school announcements and updates.<br>
                                        2. Platform for celebrating achievements.<br>
                                        3. Connection to alumni network and school heritage.<br>
                                    </p>


                                    <p class="custom_paragraph_option_1">
                                        <b>For Alumni</b>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        1. Stay connected with alma mater.<br>
                                        2. Access to school news and upcoming events.<br>
                                        3. Platform for sharing stories and maintaining community bonds.<br>
                                        4. Easy communication with the Old Boys Association.<br>
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        <b>For the Institution</b>
                                    </p>

                                    <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        1. Professional digital presence reflecting school values.<br>
                                        2. Centralized communication platform.<br>
                                        3. Strengthened alumni engagement.<br>
                                        4. Enhanced community cohesion.<br>
                                    </p>



                                    <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <ul class="ul_paragraph">
                                            <li>
                                                Conclusion
                                            </li>
                                        </ul>
                                    </div>

                                    <p class="custom_paragraph_option_1">
                                        The Royal College Panadura web application successfully creates a digital home for
                                        a vibrant school community. By thoughtfully incorporating the school's traditional
                                        colors and identity while implementing modern accessibility features and user preferences,
                                        the platform serves as an inclusive hub that welcomes everyone from current students to
                                        the oldest alumni members. The flexible theme options, adjustable font sizing, and intuitive
                                        navigation demonstrate a deep understanding that effective design must accommodate diverse user needs.
                                    </p>

                                    <p class="custom_paragraph_option_1">
                                        Working with the Old Boys Association required balancing respect for tradition with the need for
                                        contemporary functionality. The result is a platform that honors Royal College Panadura's
                                        heritage while providing the modern digital experience that today's community expects. From
                                        the dynamic home page featuring real-time announcements to the engaging blogs section where
                                        alumni share their stories, every element was carefully designed to strengthen the bonds within
                                        the school community. This project stands as a testament to how thoughtful UI/UX design, when
                                        grounded in user needs and institutional identity, can create meaningful digital experiences
                                        that bring communities together and preserve important traditions for future generations.
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
