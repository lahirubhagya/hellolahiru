<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | CelataTech Web Application</title>
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
                                            <img  src="assets/images/work_15/flash_screen_1.webp"   alt="slider_screen_1">
                                            <a href="assets/images/work_15/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.01</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_15/flash_screen_2.webp"   alt="slider_screen_2">
                                            <a href="assets/images/work_15/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.02</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_15/flash_screen_3.webp"   alt="slider_screen_3">
                                            <a href="assets/images/work_15/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.03</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_15/flash_screen_4.webp"   alt="slider_screen_4">
                                            <a href="assets/images/work_15/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.04</span>
                                        </div>
                                        <!-- swiper-slide end-->


                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_15/flash_screen_5.webp"   alt="slider_screen_5">
                                            <a href="assets/images/work_15/flash_screen_5.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.05</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_15/flash_screen_6.webp"   alt="slider_screen_6">
                                            <a href="assets/images/work_15/flash_screen_6.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.06</span>
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
                                                    <span style="color: #F68338"> CelataTech :</span> Designing a Corporate Website for a Global GIS Innovation Leader
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="project-details fl-wrap">
                                                <ul>
                                                    <li class="custom_li_font"><span>Date :</span> 17.06.2023 </li>
                                                    <li class="custom_li_font"><span>Category : </span>Web Design</li>
                                                </ul>

                                                <a href="https://celatatech.com/"  class="btn color-bg fl-wrap"
                                                   target="_blank">View Web</a><br><br><br>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12 sin-anim">
                                            <p class="custom_paragraph_option_1">
                                                The CelataTech corporate website is the company's main digital platform, designed
                                                to establish their online presence as a leading Geographical Intelligence Platform
                                                solutions provider. Headquartered in the USA with an R&D center strategically
                                                located in Sri Lanka, CelataTech is an extraordinary technology company providing
                                                state-of-the-art geospatial and AI-driven solutions. This project focuses on
                                                creating a professional corporate website that showcases the company's two
                                                flagship products, strategic partnerships, leadership team, and their reputation
                                                as the number one innovative geographical-based solutions provider in the
                                                GIS domain since 2018.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Project Context
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                CelataTech required a professional digital presence that would effectively communicate
                                                their value proposition to potential clients and partners. The company needed a platform
                                                that prominently featured their two flagship products while also conveying their corporate
                                                story, team expertise, and market position. The challenge was to create a clean,
                                                professional interface that balanced product promotion with comprehensive company information.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Site Architecture
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The application was strategically organized into core sections that support both business development and corporate communication:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Home</b> - Product showcase and company overview.<br>
                                                <b>2. About Us</b> - Corporate information with two subsections:<br>
                                                <span class="custom_paragraph_option_1" style="padding-left: 30px;">└─ Our Story - Company history and mission</span><br>
                                                <span class="custom_paragraph_option_1" style="padding-left: 30px;">└─ Board of Directors - Leadership team profiles</span><br>
                                                <b>3. News & Events</b> - Industry updates and company announcements.<br>
                                                <b>4. Careers</b> - Employment opportunities and company culture.<br>
                                                <b>5. Contact Us</b> - Business inquiry channels.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                This structure ensures visitors can quickly understand the company's offerings while accessing
                                                deeper information about organizational capabilities and opportunities.
                                            </p>


                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Design System
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The design language reflects CelataTech's position as a modern, trustworthy technology company:
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Color Palette</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Primary Color</b> - Blue, Conveying professionalism, trust, and technological innovation.<br>
                                                <b>2. Secondary Color</b> - Red, Adding energy and drawing attention to key calls-to-action.<br>
                                                <b>3. Neutral Tones: Gray & Black</b> -  Used for all typography to ensure optimal readability and professional appearance.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Typography</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Font Family</b> - Sans-Serif - Clean, modern typeface ensuring clarity across all content.<br>
                                                <b>2. Professional Readability</b> - Chosen for its excellent legibility in business contexts.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Theme & Aesthetic</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>Light Theme Approach</b> <br>
                                                1. Clean, bright interface creating an open and approachable feel.<br>
                                                2. High contrast ensuring content clarity.<br>
                                                3. Professional aesthetic appropriate for B2B communications.<br>
                                                4. Enhanced readability for detailed product information.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Visual Excellence</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>High-Quality Imagery</b> <br>
                                                Every visual element was carefully selected and optimized:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Premium Quality Standards</b> - All images meet professional publication standards.<br>
                                                <b>2. Brand Consistency</b> - Visual style aligned with corporate identity.<br>
                                                <b>3. Purpose-Driven Selection</b> - Each image supports specific messaging goals.<br>
                                                <b>4. Optimized Performance</b> - High quality without compromising load times.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>Animation & Interaction</b> <br>
                                                The main banner animation exemplifies the balance between engagement and usability:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Concept-Aligned</b> - Animation reflects company's technological innovation.<br>
                                                <b>2. UX-Compliant</b> - Smooth, non-intrusive movement that enhances rather than distracts.<br>
                                                <b>3. Performance-Optimized</b> - Lightweight implementation maintaining fast load times.<br>
                                                <b>4. Accessibility-Conscious</b> -  Respects motion sensitivity and user preferences.<br>
                                            </p>


                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Supporting Content Pages
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                Beyond the main navigation, essential corporate pages provide transparency and legal compliance:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Privacy Policy</b> -  Data protection commitments and practices.<br>
                                                <b>3. Terms of Use</b> - Guidelines for platform usage.<br>
                                                <b>3. Cookie Settings</b> -  User control over data preferences.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                These pages ensure regulatory compliance while demonstrating
                                                corporate responsibility and transparency.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        UI/UX Design Principles
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>Professional B2B Design</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                Every design decision was made with business audiences in mind:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Clear Information Hierarchy</b> - Products and key information prominently featured.<br>
                                                <b>2. Professional Aesthetics</b> - Clean, modern design building credibility.<br>
                                                <b>3. Intuitive Navigation</b> - Logical structure supporting user goals.<br>
                                                <b>4. Responsive Design</b> - Consistent experience across all devices and screens.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Content-First Approach</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Readability Priority </b> - Typography and spacing optimized for content consumption.<br>
                                                <b>2. Visual Support </b> - Images enhance rather than overshadow messaging.<br>
                                                <b>3. Strategic Layout </b> - Design guides users toward high-value content.<br>
                                                <b>4. Accessibility </b> - Inclusive design accommodating all users.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Performance & Reliability</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Fast Loading </b> - Optimized assets ensuring quick page loads.<br>
                                                <b>2. Stable Platform</b> - Reliable performance for business-critical communications.<br>
                                                <b>3. Cross-Browser Compatibility</b> - Consistent experience across all platforms.<br>
                                                <b>4. Mobile Optimization</b> - Full functionality on smartphones and tabletsScalable architecture supporting growing alumni network.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Project Impact
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The CelataTech web application delivers comprehensive business value:
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>For Potential Clients</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Clear understanding of product offerings.<br>
                                                2. Easy access to company credentials and partnerships<br>
                                                3. Professional impression building trust and confidence.<br>
                                                4. Straightforward inquiry and contact processes.<br>
                                            </p>


                                            <p class="custom_paragraph_option_1">
                                                <b>For Partners</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Transparent view of company structure and leadership.<br>
                                                2. Professional platform for collaborative opportunities.<br>
                                                3. Clear communication channels for partnership discussions.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>For Job Seekers</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Insight into company culture and values.<br>
                                                2. Easy access to career opportunities.<br>
                                                3. Strengthened alumni engagement.<br>
                                                4. Professional representation of employer brand.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>For the Company</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Professional digital presence supporting sales efforts.<br>
                                                2. Effective product marketing platform.<br>
                                                3. Credibility enhancement through transparent leadership information.<br>
                                                4. Centralized hub for corporate communications.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Conclusion
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The CelataTech web application successfully establishes a strong corporate digital
                                                presence that balances product promotion with comprehensive company information. By
                                                strategically showcasing the company's two flagship products on the home page while
                                                providing detailed insights into leadership, company story, and opportunities, the
                                                platform serves multiple business objectives simultaneously. The clean light theme,
                                                professional blue and red color scheme, and high-quality imagery create a polished,
                                                trustworthy impression that resonates with B2B audiences.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                The thoughtful implementation of the animated main banner demonstrates how modern
                                                interactive elements can enhance user engagement without compromising UX principles.
                                                Every design choice—from the sans-serif typography ensuring readability to the strategic
                                                placement of partnership credentials—was made with business goals and user needs in mind.
                                                Working closely with CelataTech to understand their product positioning and corporate
                                                vision resulted in a platform that not only meets but exceeds client expectations,
                                                providing a solid foundation for business growth and market presence. This project
                                                exemplifies how effective corporate web design combines visual appeal, strategic
                                                content presentation, and user-centered principles to create digital experiences
                                                that drive real business results.
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
