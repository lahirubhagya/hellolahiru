<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | SFA</title>
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
            table {
                width: 100%;
                border-radius: 4px !important;
            }
            table, th, td {
                border: 1px solid #cccccc;
                padding: 4px;
                padding-left: 14px;
                text-align: left;
                color: #5e646a !important;
            }
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
                                        <img  src="assets/images/work_5/flash_screen_1.webp"   alt="slider_screen_1">
                                        <a href="assets/images/work_5/flash_screen_1.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.01</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_5/flash_screen_2.webp"   alt="slider_screen_2">
                                        <a href="assets/images/work_5/flash_screen_2.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.02</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_5/flash_screen_3.webp"   alt="slider_screen_3">
                                        <a href="assets/images/work_5/flash_screen_3.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.03</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_5/flash_screen_4.webp"   alt="slider_screen_4">
                                        <a href="assets/images/work_5/flash_screen_4.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.04</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_5/flash_screen_5.webp"   alt="slider_screen_5">
                                        <a href="assets/images/work_5/flash_screen_5.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.05</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_5/flash_screen_6.webp"   alt="flash_screen_6">
                                        <a href="assets/images/work_5/flash_screen_6.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <span class="slide-numb">.06</span>
                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide-->
                                    <div class="swiper-slide  hov_zoom">
                                        <img  src="assets/images/work_5/flash_screen_7.webp"   alt="flash_screen_7">
                                        <a href="assets/images/work_5/flash_screen_7.webp" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
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
                                                Sales Force Automation (SFA) : <span style="color: #F68338">Empowering Sales and Collections through Digital Innovation</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <div class="project-details fl-wrap">
                                            <ul>
                                                <li class="custom_li_font"><span>Date :</span> 08.03.2024 </li>
                                                <li class="custom_li_font"><span>Category : </span>UI / UX Design</li>
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

                                        <table>
                                            <thead class="custom_paragraph_option_1">
                                            <tr>
                                                <th><b>SECTION (AREA)</b></th>
                                                <th><b>ACTION</b></th>
                                            </tr>
                                            </thead>

                                            <tbody class="custom_paragraph_option_1">
                                            <tr>
                                                <td><strong>Web Application</strong></td>
                                                <td>
                                                    <div class="dec-center">
                                                        <a class="btn-2" href="https://www.figma.com/proto/qCFaG2NS3zv4cRv28aOswO/SFAS?page-
                                                        id=12819%3A11241&node-id=12819-23395&p=f&viewport=543%2C414%2C0.02&t=lF2cSXVfoY7iZFU4-
                                                        1&scaling=contain&content-scaling=fixed&starting-point-node-id=12819%3A23395" target="_blank">
                                                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;&nbsp; VIEW
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>Mobile Application</strong></td>
                                                <td>
                                                    <div class="dec-center">
                                                        <a class="btn-2" href="https://www.figma.com/proto/qCFaG2NS3zv4cRv28aOswO/SFAS?page-
                                                        id=12914%3A10690&node-id=12914-125663&p=f&viewport=741%2C434%2C0.03&t=XZfK9YRy628wGPl4-
                                                        1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=12914%3A125663" target="_blank">
                                                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;&nbsp; VIEW
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><br>


                                        <p class="custom_paragraph_option_1">
                                            This comprehensive Sales Force Automation (SFA) solution represents a paradigm shift
                                            in sales management technology. Engineered to dramatically elevate efficiency, accountability,
                                            and performance across entire sales organizations, the platform combines intuitive user-centric
                                            design with powerful functionality. The result? Sales agents empowered to work smarter and faster,
                                            while super administrators gain unprecedented control, monitoring capabilities, and optimization
                                            tools for every facet of the sales ecosystem.
                                        </p>

                                        <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <ul class="ul_paragraph">
                                                <li>
                                                    Integrated Dual-Platform Architecture
                                                </li>
                                            </ul>
                                        </div>

                                        <p class="custom_paragraph_option_1">
                                            The SFA suite operates through a sophisticated two-tier system designed for seamless collaboration:<br>
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            <b>1. Mobile-First Field Operations</b>
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            Sales agents leverage cutting-edge mobile technology for real-time field
                                            activities, route optimization, sales execution, and lead management.
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            <b>2. Command Center Administration</b>
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            Super administrators command comprehensive oversight through an advanced web-based dashboard,
                                            delivering complete control over sales operations,
                                            performance analytics, and system optimization.
                                        </p>

                                        <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <ul class="ul_paragraph">
                                                <li>
                                                    Sales Agent Mobile Application
                                                    <p>Core Functionality Modules</p>
                                                </li>
                                            </ul>
                                        </div>

                                        <table>
                                            <thead class="custom_paragraph_option_1">
                                                <tr>
                                                    <th><b>Module</b></th>
                                                    <th><b>Capability</b></th>
                                                </tr>
                                            </thead>
                                            <tbody class="custom_paragraph_option_1">
                                                <tr>
                                                    <td><strong>🎯 Dashboard Access</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Real-time performance metrics and key insights
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 My Route Module</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Intelligent route planning and navigation
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Sales Module</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Streamlined sales transaction processing
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Collection Module</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Efficient payment collection management
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Tracking Module</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            GPS-enabled activity monitoring
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 My Leads Module</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Comprehensive lead pipeline management
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Products Module</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Complete product catalog access
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Reports Module</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            On-demand performance reporting
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>🎯 Profile Settings</strong></td>
                                                    <td>
                                                        <div class="dec-center">
                                                            Personalized account management
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table><br>

                                        <p class="custom_paragraph_option_1">
                                            <b>Agent Empowerment Features</b>
                                        </p>


                                        <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            1. <b>Daily Route Optimization :</b> Intelligent scheduling for maximum efficiency.<br>
                                            2. <b>Real-Time Sales Processing :</b> Instant transaction capabilities.<br>
                                            3. <b>Lead Pipeline Management :</b>  Complete prospect lifecycle control.<br>
                                            4. <b>Activity Logging :</b>  Comprehensive field activity documentation.<br>
                                            5. <b>Information Access :</b>  Instant access to critical business data.<br>
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
                                            <b>Super Administrator Capabilities</b>
                                        </p>


                                        <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            1. <b>End-to-End Process Oversight :</b> Complete sales ecosystem management.<br>
                                            2. <b>Performance Monitoring :</b> Real-time analytics and KPI tracking.<br>
                                            3. <b>Operational Optimization :</b>  Data-driven efficiency improvements.<br>
                                            4. <b>System Configuration :</b>  Advanced settings and customization control.<br>
                                            5. <b>Strategic Analytics :</b>  Comprehensive business intelligence tools.<br>
                                        </p>


                                        <div class="dec-list  custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            <ul class="ul_paragraph">
                                                <li>
                                                    Platform Benefits
                                                </li>
                                            </ul>
                                        </div>


                                        <p class="custom_paragraph_option_1" style="margin-top: 0.3% !important;">
                                            1. <b>Increased Efficiency :</b>Streamlined processes reduce administrative burden.<br>
                                            2. <b>Enhanced Accountability : </b> Complete activity tracking and performance monitoring.<br>
                                            3. <b>Improved Performance :</b>Data-driven insights enable continuous optimization.<br>
                                            4. <b>Scalable Operations : </b>Flexible architecture supports organizational growth.<br>
                                            5. <b>Strategic Insights :</b> Advanced analytics for informed decision-making.<br>
                                            6. <b>Operational Excellence :</b> Tools for continuous process improvement.<br>
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            The SFA Application Suite represents more than just software—it's a complete
                                            transformation of how sales organizations operate. By combining powerful mobile
                                            capabilities with comprehensive administrative control, the platform creates an
                                            ecosystem where every stakeholder is empowered to achieve peak performance. Sales
                                            agents gain the tools they need to excel in the field, while administrators receive
                                            the oversight and optimization capabilities necessary to drive organizational success.
                                        </p>

                                        <p class="custom_paragraph_option_1">
                                            This integrated approach ensures that efficiency, accountability, and performance
                                            aren't just improved—they're revolutionized.
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
