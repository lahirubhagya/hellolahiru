<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | Multilac</title>
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
                                            <img  src="assets/images/work_7/flash_screen_1.webp"   alt="slider_screen_1">
                                            <a href="assets/images/work_7/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.01</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_7/flash_screen_2.webp"   alt="slider_screen_2">
                                            <a href="assets/images/work_7/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.02</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_7/flash_screen_3.webp"   alt="slider_screen_3">
                                            <a href="assets/images/work_7/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.03</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_7/flash_screen_4.webp"   alt="slider_screen_4">
                                            <a href="assets/images/work_7/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.04</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_7/flash_screen_5.webp"   alt="slider_screen_5">
                                            <a href="assets/images/work_7/flash_screen_5.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.05</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_7/flash_screen_6.webp"   alt="slider_screen_6">
                                            <a href="assets/images/work_7/flash_screen_6.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.06</span>
                                        </div>
                                        <!-- swiper-slide end-->


                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_7/flash_screen_7.webp"   alt="slider_screen_7">
                                            <a href="assets/images/work_7/flash_screen_7.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.07</span>
                                        </div>
                                        <!-- swiper-slide end-->


                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_7/flash_screen_8.webp"   alt="slider_screen_8">
                                            <a href="assets/images/work_7/flash_screen_8.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.08</span>
                                        </div>
                                        <!-- swiper-slide end-->


                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_7/flash_screen_9.webp"   alt="slider_screen_9">
                                            <a href="assets/images/work_7/flash_screen_9.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.09</span>
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
                                                    Multilac Advanced Mobile <span style="color: #F68338">Digital Commerce Revolution Platform</span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="project-details fl-wrap">
                                                <ul>
                                                    <li><span>Date :</span> 08.12.2024 </li>
                                                    <li><span>Category : </span>UI / UX Design</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 sin-anim">
                                            <div class="dec-list fl-wrap custom_paragraph_option_1">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        View Project
                                                    </li>
                                                </ul>
                                            </div>

                                            <table class="data">
                                                <thead class="custom_paragraph_option_1">
                                                    <tr>
                                                        <th><b>SECTION (AREA)</b></th>
                                                        <th><b>ACTION</b></th>
                                                    </tr>
                                                </thead>

                                                <tbody class="custom_paragraph_option_1">
                                                    <tr>
                                                        <td><strong>Customer Mobile Application</strong></td>
                                                        <td>
                                                            <div class="dec-center">
                                                                <a class="btn-2" href="https://www.figma.com/proto/Zqq3f3Nmr7FkLCgQqxeUCr/MULTILAC?page-id=0%3A1&node
                                                                -id=23-4557&p=f&viewport=-229%2C328%2C0.42&t=LrqPuHEjA1o2Hs77-1&scaling=scale-down&content-scaling=
                                                                fixed&starting-point-node-id=23%3A4557" target="_blank">
                                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;&nbsp; VIEW
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Agent Mobile Application (Stock available)</strong></td>
                                                        <td>
                                                            <div class="dec-center">
                                                                <a class="btn-2" href="https://www.figma.com/proto/Zqq3f3Nmr7FkLCgQqxeUCr/MULTILAC?page-id=252%3A26761&node
                                                                -id=252-26762&p=f&viewport=563%2C701%2C0.07&t=IiREnFfkE6jtBzwg-1&scaling=scale-down&content
                                                                -scaling=fixed&starting-point-node-id=252%3A26762" target="_blank">
                                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;&nbsp; VIEW
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Agent Mobile Application (Stock not available)</strong></td>
                                                        <td>
                                                            <div class="dec-center">
                                                                <a class="btn-2" href="https://www.figma.com/proto/Zqq3f3Nmr7FkLCgQqxeUCr/MULTILAC?page-id=145%3A3632&node
                                                                -id=252-101113&p=f&viewport=286%2C-1037%2C0.07&t=5xBP5XoR93mJvQTh-1&scaling=scale-down&content-scaling
                                                                =fixed&starting-point-node-id=252%3A101113" target="_blank">
                                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;&nbsp; VIEW
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Web Administrative Application</strong></td>
                                                        <td>
                                                            <div class="dec-center">
                                                                <a class="btn-2" href="https://www.figma.com/proto/Zqq3f3Nmr7FkLCgQqxeUCr/MULTILAC?page-
                                                                id=281%3A10298&node-id=402-458&p=f&viewport=107%2C448%2C0.09&t=TKkhpkJ3wg7RdvUM-1&scaling=
                                                                contain&content-scaling=fixed" target="_blank">
                                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;&nbsp; VIEW
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table><br>


                                            <p class="custom_paragraph_option_1">
                                                This comprehensive mobile commerce solution revolutionized the customer experience
                                                for Multilac, a leading paint and tile company. By creating an intuitive,
                                                feature-rich mobile ecosystem, we bridged the gap between traditional retail
                                                and digital convenience, empowering customers to make informed
                                                purchasing decisions with unprecedented ease and efficiency.
                                            </p>

                                            <div class="dec-list fl-wrap custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Customer Mobile Application
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Smart Paint Selection System</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Intelligent Color Explorer : </b>Browse extensive paint collections with related color suggestions and comprehensive product details.<br>
                                                <b>2. Direct Product Purchase : </b>Streamlined buying process for customers who know exactly what they need.<br>
                                                <b>3. Dual Product Categories :</b> Seamless shopping experience for both paints and tiles.
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>2. Revolutionary Visual Tools</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Paint Visualizer: </b>Experience colors before you commit. Point your camera at any wall or surface,
                                                and instantly preview how different paint colors
                                                will transform your space using cutting-edge augmented reality technology.<br>

                                                <b>2. Plan Estimator: </b>Upload your house plans and receive precise estimates for
                                                paint quantities (in liters) and tile requirements based on your selected tile dimensions.
                                                No more guesswork, no more waste.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>3. Location & Service Integration</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Store Locator : </b> GPS-powered finder to locate the nearest Multilac outlets.<br>
                                                <b>2. Professional Network : </b>Direct access to verified painters and tile setters with integrated contact capabilities.<br>
                                                <b>3. Service Marketplace :</b> Connect with skilled professionals in your area instantly.
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>4. Flexible Payment Solutions</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                Multiple payment gateways to suit every preference:<br>
                                                <b>1. Credit card processing</b><br>
                                                <b>2. Pay-on-pickup convenience</b><br>
                                                <b>3. Cash-on-delivery option</b>
                                            </p>



                                            <div class="dec-list fl-wrap custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Agent Management Application
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. Comprehensive Order Management</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                Our dedicated agent platform provides complete oversight of the customer journey:<br>

                                                <b>1. Order Tracking :</b> Real-time monitoring of all customer orders.<br>
                                                <b>2. In-Store Integration :</b>Process walk-in customer orders through the same digital system.<br>
                                                <b>3. Unified Experience : </b>Maintain consistency whether customers shop online or visit physical stores.
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>2. Omnichannel Approach</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                The agent app mirrors all customer-facing functionalities, ensuring that
                                                whether customers engage digitally
                                                or visit physical locations, they receive the same premium
                                                service experience through our unified platform.
                                            </p>

                                            <div class="dec-list fl-wrap custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Administrative Control Center
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                A sophisticated administrative panel that serves as the command center for all operations:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. <b>Product Management :</b>  Complete CRUD operations for paint and tile inventories.<br>
                                                2. <b>Content Administration :</b> Dynamic control over product details, specifications, and pricing.<br>
                                                3. <b>System Configuration :</b>  Centralized management of all platform functionalities.<br>
                                                4. <b>Analytics & Reporting :</b>  Comprehensive insights into customer behavior and sales performance.<br>
                                            </p>


                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                This comprehensive digital transformation positioned Multilac at the forefront
                                                of the paint and tile industry, combining traditional expertise with modern
                                                technology to create an unparalleled customer experience. The platform not only
                                                simplified the purchasing process but also introduced innovative tools that
                                                fundamentally changed how customers interact with paint and tile products,
                                                setting new industry standards for digital commerce in the home improvement sector.
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
        <script src="{{asset('/js/app.js')}}"></script>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="https://unpkg.com/pdfobject@2.2.12/pdfobject.min.js"></script>
        <!-- Vendor scripts end ----------------------------------------------------->
    </body>
</html>
