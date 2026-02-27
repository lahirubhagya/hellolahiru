<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | Geobizz Web Prototype</title>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('assets/assets/assets/assets/assets/images/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .pdfobject-container { width:100% !important;height: 40rem; border: 1rem solid rgba(0,0,0,.1); }
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
                                                <span style="color: #F68338"> Geobizz Web </span> Application Designing
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div class="project-details fl-wrap">
                                            <ul>
                                                <li class="custom_li_font"><span>Date :</span> 02.12.2025 </li>
                                                <li class="custom_li_font"><span>Category : </span>UI / UX Design</li>
                                            </ul>

                                            <a href="https://www.figma.com/proto/YRz7DWoQUDHLodkd3MeXRE/GEOBIZZ-WEB?page-
                                            id=221%3A960&node-id=221-993&p=f&viewport=345%2C533%2C0.04&t=K4090j1nF3HfJOLt-1&scaling=
                                            contain&content-scaling=fixed&starting-point-node-id=221%3A993" class="btn color-bg fl-wrap"
                                            target="_blank">View Project</a><br><br><br>

                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-12 sin-anim">
                                        <p class="custom_paragraph_option_1">
                                            The GeoBizz web application represents a sophisticated digital transformation initiative,
                                            where I spearheaded the complete design and development lifecycle to create a comprehensive
                                            digital embodiment of the GeoBizz product ecosystem. This project demanded meticulous
                                            attention to detail and strategic collaboration to deliver a prototype that perfectly
                                            captured the essence and functionality of the core product offering.
                                        </p>


                                        <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <ul class="ul_paragraph">
                                                <li>
                                                    Design Process & Methodology
                                                </li>
                                            </ul>
                                        </div>

                                        <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <b>Phase 1: Foundation & Structure</b> | Wireframe Development
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            stablished the architectural blueprint through detailed wireframing, mapping out
                                            every crucial feature and user interaction point to ensure comprehensive product representation.
                                        </p>

                                        <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <b>Phase 2: Visual Identity Creation</b> | Strategic Moodboard Design
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            Crafted a compelling visual narrative through carefully curated
                                            moodboards that defined the aesthetic direction and emotional
                                            resonance of the final product.
                                        </p>


                                        <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <b>Phase 3: Collaborative Refinement</b> | Product Manager Partnership
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            Engaged in intensive collaboration with the product manager to refine
                                            visual concepts, ensuring alignment between technical
                                            capabilities and business objectives.
                                        </p>


                                        <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <b>Phase 4: High-Fidelity Execution</b> | Prototype Development
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            Transformed conceptual designs into a sophisticated, high-fidelity
                                            prototype that seamlessly integrated the chosen
                                            visual direction with functional excellence.
                                        </p>


                                        <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <ul class="ul_paragraph">
                                                <li>
                                                    Design Evolution & Client Engagement
                                                </li>
                                            </ul>
                                        </div>


                                        <p class="custom_paragraph_option_1">
                                            <b>1. Initial Presentation & Feedback Integration</b>
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            Following the presentation of our initial prototype, we embarked on a strategic enhancement phase:
                                        </p>

                                        <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            1. <b>Client-Centric Refinements :</b>  Incorporated valuable client feedback to achieve design perfection.<br>
                                            2. <b>Subtle Impact Optimization :</b> Implemented carefully considered adjustments that delivered maximum visual and functional impact.<br>
                                            3. <b>Iterative Excellence :</b>  Refined every detail to exceed client expectations.<br>
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            <b>2. Client Reception & Satisfaction</b>
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            The final prototype garnered exceptional client enthusiasm and appreciation,
                                            validating our comprehensive approach to digital product design and development.
                                        </p>
                                    </div>
                                </div>
                                <div class="limit-box2 fl-wrap"></div>

                                <div class="text-block fl-wrap no-mar-top" style="padding-top: 10px !important;">
                                    <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                        <ul class="ul_paragraph">
                                            <li>
                                                WIREFRAME DESIGN
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="custom-inner-holder">
                                        <div id="pdfContainerWireframe"></div>
                                    </div>
                                </div>

                                <div class="text-block fl-wrap no-mar-top" style="padding-top: 10px !important;">
                                    <div class="dec-list  custom_paragraph_option_1">
                                        <ul class="ul_paragraph">
                                            <li>
                                                FINAL DESIGN
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="custom-inner-holder">
                                        <div id="pdfContainerDesign"></div>
                                    </div>
                                </div>
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
