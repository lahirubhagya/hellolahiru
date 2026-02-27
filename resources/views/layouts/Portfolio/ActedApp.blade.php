<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | Acted App</title>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/viewer.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('assets/assets/assets/assets/images/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .pdfobject-container { height: 150rem; border: 1rem solid rgba(0,0,0,.1); }
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
                                            <img  src="assets/images/work_4/flash_screen_1.webp"   alt="slider_screen_1">
                                            <a href="assets/images/work_4/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.01</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_4/flash_screen_2.webp"   alt="slider_screen_2">
                                            <a href="assets/images/work_4/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.02</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_4/flash_screen_3.webp"   alt="slider_screen_3">
                                            <a href="assets/images/work_4/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.03</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_4/flash_screen_4.webp"   alt="slider_screen_4">
                                            <a href="assets/images/work_4/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.04</span>
                                        </div>
                                        <!-- swiper-slide end-->

                                        <!-- swiper-slide-->
                                        <div class="swiper-slide  hov_zoom">
                                            <img  src="assets/images/work_4/flash_screen_5.webp"   alt="slider_screen_5">
                                            <a href="assets/images/work_4/flash_screen_5.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <span class="slide-numb">.05</span>
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
                                                    ACTED: Revolutionising Mobile app for <span style="color: #F68338">Waste Management & Complaints </span>through Digital Innovation
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

                                                <a href="https://www.figma.com/proto/JJw5ZvXG2lLGoB3aydC9M4/ACTED-WASTE-MANAGEMENT?page-id
                                                =0%3A1&node-id=2002-1327&p=f&viewport=548%2C472%2C0.09&t=grMoOmJsYvttMlPb-1&scaling=scale-
                                                down&content-scaling=fixed&starting-point-node-id=2002%3A1327" class="btn color-bg fl-wrap" target="_blank">View Project</a>
                                            </div>
                                        </div>
                                    </div><br>


                                    <div class="row">
                                        <div class="col-md-12 sin-anim">
                                            <p class="custom_paragraph_option_1">
                                                ACTED Organization launched a transformative mobile application designed to modernize waste management
                                                and community complaint resolution. This digital social service initiative streamlines the process
                                                of reporting waste issues and requesting specialized services, creating a bridge between
                                                communities and waste management providers through intelligent technology and user-centered design.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Challenge
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                Traditional waste management systems often suffer from inefficiencies including
                                                delayed response times, poor communication channels, and limited community engagement.
                                                Communities lacked an accessible, organized platform to report waste issues or request services,
                                                resulting in prolonged environmental concerns and decreased civic participation
                                                in waste management efforts.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Solution
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The ACTED mobile application addresses these challenges through a comprehensive
                                                digital platform featuring:
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Core Functionalities</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>1. OTP Authentication : Seamless one-time password technology eliminates
                                                repeated login requirements, ensuring uninterrupted access while maintaining security.<br></b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>2. Multilingual Interface : Intuitive language customization accommodates diverse
                                                linguistic communities, promoting inclusive participation across all user demographics.<br></b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>3. Complaint Resolution System : The application enables users to document waste issues comprehensively through:<br></b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. High-quality image upload capabilities for visual documentation.<br>
                                                2. Detailed reporting mechanisms for precise issue description.<br>
                                                3. GPS-powered location tagging for accurate problem identification.<br>
                                                4. Intelligent matching algorithm that connects users with the nearest available waste collector.<br>
                                                5. Streamlined workflow ensuring swift issue resolution.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <b>4. Service Requisition Module : A parallel pathway allows users to:<br></b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Request specialized waste management services tailored to specific needs.<br>
                                                2. Follow an intuitive workflow mirroring the complaint resolution process.<br>
                                                3. Access customized service options based on community requirements.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Enhanced User Experience
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>Intelligent Dashboard</b>
                                                Before initiating any action, users can explore a sophisticated classification system featuring:
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Comprehensive waste category taxonomy.<br>
                                                2. Clear categorization of materials including water bottles, packaging materials, cleaning products, and electronics.<br>
                                                3. Educational component promoting proper waste segregation.<br>
                                                4. Visual guides for waste identification.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>Intuitive Navigation</b>
                                                The interface architecture clearly delineates two primary pathways,
                                                eliminating confusion and reducing the time required to complete tasks.
                                                This thoughtful design ensures users can quickly identify and access
                                                the specific functionality they need.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Implementation Approach
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The platform was built with community-centric principles, prioritizing accessibility
                                                and ease of use. The development team focused on creating an interface that requires minimal
                                                technical expertise while delivering maximum functionality. The multilingual
                                                capabilities were integrated from the ground up, recognizing the diverse nature
                                                of the communities served.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Key Benefits
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                <b>For Communities</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Immediate access to waste management services without bureaucratic delays.<br>
                                                2. Empowerment through direct reporting capabilities.<br>
                                                3. Transparent communication channels with service providers.<br>
                                                4. Educational resources promoting environmental awareness.<br>
                                                5. Inclusive design accommodating various linguistic groups.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>For Waste Management Operations</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Optimized collector routing through intelligent location matching.<br>
                                                2. Comprehensive documentation of issues through images and detailed reports.<br>
                                                3. Data-driven insights into waste patterns and community needs.<br>
                                                4. Reduced response times through automated assignment systems.<br>
                                                5. Enhanced operational efficiency through digital workflow management.<br>
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                <b>For Environmental Stewardship</b>
                                            </p>

                                            <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                1. Faster resolution of waste issues minimizing environmental impact.<br>
                                                2. Increased community participation in waste management initiatives.<br>
                                                3. Better waste categorization leading to improved recycling rates.<br>
                                                4. Systematic approach to waste management promoting long-term sustainability.<br>
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Results & Impact
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The ACTED mobile application represents a paradigm shift in community-driven
                                                waste management. By removing barriers to reporting and service access,
                                                the platform has transformed passive community members into active participants
                                                in environmental stewardship. The intelligent matching system ensures optimal
                                                resource allocation, while the comprehensive classification dashboard educates
                                                users on proper waste handling.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                The multilingual approach has proven particularly impactful,
                                                breaking down language barriers that previously prevented full community
                                                engagement. The seamless authentication system maintains high security
                                                standards without compromising user convenience, resulting in
                                                sustained platform adoption.
                                            </p>

                                            <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                                <ul class="ul_paragraph">
                                                    <li>
                                                        Conclusion
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="custom_paragraph_option_1">
                                                The ACTED waste management application exemplifies how thoughtful digital
                                                design can address real-world environmental challenges while empowering
                                                communities. By combining secure technology, intuitive interfaces, and
                                                intelligent automation, the platform has created a sustainable model
                                                for modern waste management that prioritizes both efficiency and inclusivity.
                                            </p>

                                            <p class="custom_paragraph_option_1">
                                                This signature solution demonstrates that effective social service technology
                                                requires more than functionality—it demands deep understanding of community
                                                needs, commitment to accessibility, and vision for long-term environmental
                                                impact. ACTED stands as a blueprint for how digital innovation can revolutionize
                                                essential public services, transforming waste management from a municipal
                                                responsibility into a collaborative community effort.
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
        <script>
            PDFObject.embed("/assets/images/work_1/Sri Lanka Railways Reservation App.pdf", "#example1");
        </script>
    </body>
</html>
