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
                                            <img  src="assets/images/work_13/flash_screen_1.webp"   alt="slider_screen_1">
                                            <a href="assets/images/work_13/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.01</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_13/flash_screen_2.webp"   alt="slider_screen_2">
                                            <a href="assets/images/work_13/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.02</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_13/flash_screen_3.webp"   alt="slider_screen_3">
                                            <a href="assets/images/work_13/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.03</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_13/flash_screen_4.webp"   alt="slider_screen_4">
                                            <a href="assets/images/work_13/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.04</span>
                                        </div>
                                        <!-- swiper-slide end-->


                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_13/flash_screen_5.webp"   alt="slider_screen_5">
                                            <a href="assets/images/work_13/flash_screen_5.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.05</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_13/flash_screen_6.webp"   alt="slider_screen_6">
                                            <a href="assets/images/work_13/flash_screen_6.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
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
                                                    <span style="color: #F68338"> Nextport International PVT :</span> A Comprehensive Digital Platform for Global Trade
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="project-details fl-wrap">
                                                <ul>
                                                    <li class="custom_li_font"><span>Date :</span> 04.11.2025 </li>
                                                    <li class="custom_li_font"><span>Category : </span>Web Design</li>
                                                </ul>

                                                <a href="https://nextportinternational.com/"  class="btn color-bg fl-wrap"
                                                   target="_blank">View Web</a><br><br><br>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12 sin-anim">
                                            <p class="custom_paragraph_option_1">
                                                Nextport International is a modern web application designed specifically for
                                                the export and import industry, delivering a seamless digital experience for
                                                businesses engaged in international trade. The platform serves as a comprehensive
                                                showcase for the company's services, products, and business divisions while maintaining
                                                exceptional usability and accessibility.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        The Challenge
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The client required a professional digital presence that would effectively represent
                                                their diverse business operations in the international trade sector. The platform
                                                needed to showcase multiple business divisions, display various product categories,
                                                and provide visitors with intuitive navigation while accommodating different user
                                                preferences for theme and language.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Solution & Approach
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>Core Functionalities</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                The application was structured around five core sections to ensure clear information hierarchy and ease of navigation:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Home Page</b> - Strategic landing page featuring core business divisions and popular products.<br>
                                                <b>2. About Us</b> - Company background and mission.<br>
                                                <b>3. Services</b> - Detailed service offerings.<br>
                                                <b>4. Our Products</b> - Comprehensive product catalog.<br>
                                                <b>5. Contact Us </b>- Communication channel for inquiries.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Core Business Divisions Highlighted</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                The home page prominently features the company's four primary operational areas:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Import Division</b><br>
                                                <b>2. Export Division</b><br>
                                                <b>3. Re-Export & Trade Division</b><br>
                                                <b>4. Shipping & Logistics Division</b><br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                This strategic placement ensures visitors immediately understand the company's capabilities and areas of expertise.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Design System
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>Color Palette</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Primary Color</b> - Light Blue - conveying trust, professionalism, and reliability.<br>
                                                <b>2. Default Theme</b> - Dark Theme - modern and sophisticated aesthetic.<br>
                                                <b>3. Alternative</b> - Light Theme - for enhanced readability and user preference.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Typography</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                Font Family: Poppins - chosen for its clean, professional appearance and excellent readability across all devices.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Theme Customization</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                Understanding that users have different viewing preferences, the application offers three theme options:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Dark Theme (Default)</b> - Modern, eye-friendly for extended browsing.<br>
                                                <b>2. Light Theme</b> - Traditional, high-contrast option.<br>
                                                <b>3. System Theme</b> - Automatically adapts to user's operating system preferences.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                This flexibility ensures optimal viewing comfort regardless of time of day or user preference.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Key Features & Functionality
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>Multi-Language Support</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                To accommodate an international clientele, the platform includes language switching functionality,
                                                enabling users to navigate the site in their preferred language and expanding the platform's global reach.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Product Discovery</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Advanced Search & Filtration</b> - Users can quickly find specific products through intelligent search functionality.<br>
                                                <b>2. Detailed Product Pages</b> - Each product features comprehensive information to support informed decision-making.<br>
                                                <b>3. Popular Products Showcase</b> - Home page highlights trending import/export items.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>User Communication</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                A dedicated Contact Us page provides multiple channels for visitor engagement,
                                                ensuring potential clients can easily reach out with inquiries or business proposals.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>User Communication</b>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Additional Resources
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                Beyond the main pages, the platform includes essential supporting content:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Privacy Policy</b><br>
                                                <b>2. Help & FAQ</b><br>
                                                <b>3. Terms & Conditions</b><br>
                                                <b>4. Delivery Information</b><br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                These pages ensure transparency and provide visitors with all necessary legal and operational information.
                                            </p>


                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        UI/UX Principles Applied
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>User-Centered Design</b>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                Every design decision prioritized user experience, ensuring:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Intuitive Navigation</b> - Clear site structure with logical information flow.<br>
                                                <b>2. Visual Hierarchy</b> - Strategic use of size, color, and spacing to guide user attention.<br>
                                                <b>3. Responsive Design</b> - Seamless experience across desktop, tablet, and mobile devices.<br>
                                                <b>4. Accessibility</b> - Multiple theme options and clear typography for enhanced readability.<br>
                                                <b>5. Consistency</b> -  Uniform design language throughout all pages using the Poppins font family.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Performance & Usability</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Fast-loading pages to minimize bounce rates.<br>
                                                2. Clear calls-to-action throughout the user journey.<br>
                                                3. Streamlined product discovery through search and filtration.<br>
                                                4. Mobile-first approach ensuring optimal performance on all devices.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Results & Impact
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The Nextport International web application successfully delivers:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. A professional digital presence that reflects the company's expertise in international trade.<br>
                                                2. Enhanced user engagement through theme customization and language options.<br>
                                                3. Clear communication of business divisions and service offerings.<br>
                                                4. Improved product discoverability via advanced search functionality.<br>
                                                5. A scalable platform that can grow with the business.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Technical Highlights
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Custom theme switching system (Dark/Light/System).<br>
                                                2. Multi-language implementation.<br>
                                                3. Advanced product search and filtration engine.<br>
                                                4. Responsive design architecture.<br>
                                                5. Component-based structure for easy maintenance and updates.<br>
                                            </p>


                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Conclusion
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The Nextport International web application represents a successful marriage of client
                                                requirements and UX best practices. By focusing on user needs—from theme preferences to
                                                language options—while maintaining a professional aesthetic, the platform serves as an
                                                effective digital storefront for a complex, multi-faceted international trade business.
                                                The result is a modern, accessible, and user-friendly platform that positions Nextport
                                                International as a forward-thinking player in the global trade industry.
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
