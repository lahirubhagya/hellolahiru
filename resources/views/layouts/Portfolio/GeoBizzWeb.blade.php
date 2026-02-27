<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | Geobizz Web Development</title>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('assets/assets/assets/assets/assets/images/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .pdfobject-container { width:100% !important;height: 70rem; border: 1rem solid rgba(0,0,0,.1); }
        </style>
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
                                        <img  src="assets/images/work_8/flash_screen_1.webp"   alt="slider_screen_1">
                                        <a href="assets/images/work_8/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.01</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_8/flash_screen_2.webp"   alt="slider_screen_2">
                                        <a href="assets/images/work_8/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.02</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_8/flash_screen_3.webp"   alt="slider_screen_3">
                                        <a href="assets/images/work_8/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.03</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_8/flash_screen_4.webp"   alt="slider_screen_4">
                                        <a href="assets/images/work_8/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.04</span>
                                    </div>
                                    <!-- swiper-slide end-->


                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_8/flash_screen_5.webp"   alt="slider_screen_5">
                                        <a href="assets/images/work_8/flash_screen_5.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.05</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_8/flash_screen_6.webp"   alt="slider_screen_6">
                                        <a href="assets/images/work_8/flash_screen_6.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
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
                                                <span style="color: #F68338"> Geobizz Website </span> Development
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div class="project-details fl-wrap">
                                            <ul>
                                                <li class="custom_li_font"><span>Date :</span> 04.08.2025 </li>
                                                <li class="custom_li_font"><span>Category : </span>Web Design</li>
                                            </ul>

                                            <a href="https://www.geo-bizz.com/"  class="btn color-bg fl-wrap"
                                               target="_blank">View Web</a><br><br><br>
                                        </div>
                                    </div>
                                </div><br>


                                <section class="video-text-section">
                                    <div class="videoBoxSet">
                                        <video autoplay controls muted loop>
                                            <source src="assets/images/work_10/GeoBizz-Video.webm" type="video/webm" aria-label="Insurance Sector Video"/>
                                        </video>
                                    </div>
                                    <div class="text-box">
                                        <div class="video-promo-text fl-wrap mar-top">
                                            <h3>Video Presentation</h3>
                                            <p class="custom_paragraph_option_1">
                                                This video presentation highlights the interactive functionality
                                                of the GeoBizz frontend user interface. The UI was thoughtfully
                                                developed to align seamlessly with the official Figma design for
                                                GeoBizz. Every color, font, and image was meticulously applied to
                                                reflect the design vision with precision.
                                            </p>
                                        </div>
                                    </div>
                                </section>

                                <div class="row">
                                    <div class="col-md-12 sin-anim">
                                        <p class="custom_paragraph_option_1">
                                            The GeoBizz web application was developed based on a carefully crafted Figma design.
                                            I ensured consistent use of the specified colors, fonts, and imagery, utilizing
                                            licensed images sourced from Freepik to maintain visual quality and compliance.
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            The frontend was built primarily using the Vue.js - 2 framework, with
                                            SCSS employed for styling to ensure a clean and scalable design system.
                                            The application features multiple functional pages, all powered
                                            by a robust Laravel backend.
                                        </p><br>
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
    <script>
        PDFObject.embed("/assets/images/work_8/Wireframe Design.pdf", "#pdfContainerWireframe");
        PDFObject.embed("/assets/images/work_8/GeoBizz Web Application.pdf", "#pdfContainerDesign");
    </script>
    </body>
</html>
