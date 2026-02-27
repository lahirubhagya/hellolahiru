<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | SFA Frontend Development</title>
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
                                            <img  src="assets/images/work_12/flash_screen_1.webp"   alt="slider_screen_1">
                                            <a href="assets/images/work_12/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.01</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_12/flash_screen_2.webp"   alt="slider_screen_2">
                                            <a href="assets/images/work_12/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.02</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_12/flash_screen_3.webp"   alt="slider_screen_3">
                                            <a href="assets/images/work_12/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.03</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_12/flash_screen_4.webp"   alt="slider_screen_4">
                                            <a href="assets/images/work_12/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.04</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_12/flash_screen_5.webp"   alt="slider_screen_5">
                                            <a href="assets/images/work_12/flash_screen_5.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.05</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_12/flash_screen_6.webp"   alt="flash_screen_6">
                                            <a href="assets/images/work_12/flash_screen_6.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.06</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_12/flash_screen_7.webp"   alt="flash_screen_7">
                                            <a href="assets/images/work_12/flash_screen_7.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
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
                                        <div class="col-md-7 sin-anim">
                                            <div class="section-title post-title">
                                                <h3>CASE STUDY</h3>
                                            </div>
                                            <div class="main-about2">
                                                <h2 class="custom_sub_topic_option_1">
                                                    Sales Force Automation (SFA) : <span style="color: #F68338">Frontend UI Development</span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="project-details fl-wrap">
                                                <ul>
                                                    <li class="custom_li_font"><span>Date :</span> 12.02.2023 </li>
                                                    <li class="custom_li_font"><span>Category : </span>Web Design</li>
                                                </ul>

                                                <a href="https://www.geo-bizz.com/"  class="btn color-bg fl-wrap"
                                                   target="_blank">View Web</a><br><br><br>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12 sin-anim">
                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Project Overview
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                This powerful solution, collectively known as the Sales Force Automation (SFA) Application,
                                                is designed to elevate efficiency, accountability, and performance across your sales force.
                                                With a focus on user-friendly design and streamlined functionality, the SFA app empowers
                                                sales agents to work smarter and faster - while providing super administrators with the tools
                                                to monitor, manage, and optimize every aspect of the sales process with precision and clarity.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                The Sales Agent Mobile Application and Super Admin Web Application operate as an integrated
                                                ecosystem for end-to-end sales operations management. My contribution centered on the web
                                                application, where I was responsible for the complete frontend UI implementation. This
                                                administrative portal delivers super administrators a robust dashboard and suite of management
                                                tools for overseeing the full sales lifecycle, encompassing product management, real-time
                                                tracking, and user administration. Core system features include:
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Super Admin Web Application
                                                        <p>Administrative Control Modules</p>
                                                    </li>
                                                </ul>
                                            </div>

                                            <table>
                                                <thead class="custom_paragraph_option_1">
                                                <tr>
                                                    <th><b>Module</b></th>
                                                    <th><b>Administrative Power</b></th>
                                                </tr>
                                                </thead>
                                                <tbody class="custom_paragraph_option_1">
                                                <tr>
                                                    <td><strong>🎯 Dashboard Access</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Comprehensive organizational overview
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Product Management</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Complete product lifecycle control
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Lead Management</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Organization-wide lead oversight
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Sales Management</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Complete sales process administration
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Collection Management</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Payment and collection oversight
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Outlet Management</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Retail location administration
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Route Management</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Territory and route optimization
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Tracking Management</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Real-time agent monitoring
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 User Management</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Complete user administration
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table><br>

                                            <p class="custom_paragraph_option_1">
                                                The entire web application was developed using Vue.js 3 and SCSS, following the design specifications
                                                provided in Figma. Every component adheres to the established style guide, ensuring visual consistency
                                                and brand alignment throughout the platform. All visual assets were extracted directly from Figma,
                                                maintaining pixel-perfect accuracy and design fidelity.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                My role encompassed the complete frontend implementation, translating complex administrative workflows
                                                into intuitive user interfaces. The development process prioritized responsive design principles,
                                                cross-browser compatibility, and optimal performance. Through careful attention to component architecture
                                                and state management, I created a scalable frontend solution that meets the sophisticated needs of
                                                enterprise-level sales force automation while maintaining exceptional user experience standards.
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
