<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | MyPortfolio</title>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css') }}">
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

        <!-- header start ------------------------------------------------------->
        @include('commonAssets.appBar')
        <!-- header end --------------------------------------------------------->

        <!-- wrapper ------------------------------------------------------------>
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder scroll-content" data-pagetitle="Portfolio grid 2">
                    <!-- nav-holder start-------------------------------------------->
                    @include('commonAssets.sideNavigationBar')
                    <!-- nav-holder end --------------------------------------------->

                    <!--content ----------------------------------------------------->
                    <div class="content dark-content portf-wrap">
                        <!-- fixed-top-panel  -->
                        <div class="fixed-top-panel filter-panel fl-wrap">
                            <div class="fixed-filter-panel_title color-bg">
                                Works Filter <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <div class="gallery-filters inline-dark-filters">
                                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All projects</a>
                                <a href="#" class="gallery-filter" data-filter=".web">Web Design</a>
                                <a href="#" class="gallery-filter" data-filter=".Revamping">Revamping</a>
                                <a href="#" class="gallery-filter" data-filter=".UI-UX">UI / UX Design</a>
                            </div>
                            <div class="folio-counter">
                                <div class="num-album"></div>
                                <div class="all-album"></div>
                            </div>
                        </div>
                        <!-- fixed-top-panel end -->

                        <!-- portfolio start -->
                        <div class="gallery-items min-pad  four-column vis-det  fl-wrap">

                            <!-- gallery-item-->
                            <div class="gallery-item Revamping branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_1/SriLankaRailwaysReservationApp.webp" alt="Railways Reservation Mobile App">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Revamping </a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('SriLankaRailwaysReservationApp')}}" class="grid-det_link">
                                                Railways Reservation Mobile App
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_2/LaugfsGasApp.webp" alt="Laugfs Mobile App">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('LaugfsApp')}}" class="grid-det_link">
                                                Laugfs Mobile App
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_3/DengueApp.webp" alt="Dengue Mobile App">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('DengueApp')}}" class="grid-det_link">
                                                Dengue Mobile App
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_4/actedApp.webp" alt="Acted Mobile App">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('ActedApp')}}" class="grid-det_link">
                                                Acted Mobile App
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_5/SFA.webp" alt="SFA Mobile App & Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('SFAApplication')}}" class="grid-det_link">
                                                SFA Mobile & Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_6/Leco.webp" alt="Leco Mobile App & Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('LecoApplication')}}" class="grid-det_link">
                                                Leco Mobile & Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_7/Multilac.webp" alt="Multilac Mobile App & Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('MultilacApplication')}}" class="grid-det_link">
                                                Multilac Mobile & Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_8/GeoBizz.webp" alt="GeoBizz Prototype">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('GeoBizzWebPrototype')}}" class="grid-det_link">
                                                GeoBizz Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_9/GeoBizzApplication.webp" alt="GeoBizz Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Web Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('GeoBizzSystem')}}" class="grid-det_link">
                                                GeoBizz System Frontend Development
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_10/GeoBizzWebDevelopment.webp" alt="GeoBizz Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Web Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('GeoBizzWeb')}}" class="grid-det_link">
                                                GeoBizz Web Development
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_11/GeoBizzConsole.webp" alt="GeoBizz Web Console">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('GeoBizzConsole')}}" class="grid-det_link">
                                                GeoBizz Console Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_12/SFAFrontEndApplication.webp" alt="SFA front-end application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Web Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('SFAFrontEndApplication')}}" class="grid-det_link">
                                                SFA Frontend UI Development
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_13/nextport.webp" alt="Nextport Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Web Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('NextportWeb')}}" class="grid-det_link">
                                                Nextport Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_14/PRC.webp" alt="Panadura Royal Collage Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Web Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('PRCWeb')}}" class="grid-det_link">
                                                Panadura Royal Collage Web Portal
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_15/celataTech.webp" alt="CelataTech Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Web Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('CelataTechWeb')}}" class="grid-det_link">
                                                CelataTech Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_16/metDepartment.webp" alt="Department of Meteorology Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Web Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('MetDepartmentWeb')}}" class="grid-det_link">
                                               Meteorology Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_17/hiTech.webp" alt="Hitech Soldier Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">Web Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('HitechSoldierWeb')}}" class="grid-det_link">
                                               Hitech Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_18/cargills.webp" alt="Cargills Web Application">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('CargillsWeb')}}" class="grid-det_link">
                                                Cargills Web Application
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->

                            <!-- gallery-item-->
                            <div class="gallery-item UI-UX branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="assets/images/work_19/lecoDraft.webp" alt="LECO Geo Mapping System">
                                    <div class="grid-det">
                                        <div class="grid-det_category">
                                            <a href="#">UI / UX Design</a>
                                        </div>
                                        <div class="grid-det-item">
                                            <a href="{{route('LECOGeoMappingSystem')}}" class="grid-det_link">
                                                LECO Geo Mapping System
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                        </div>
                        <!-- portfolio end -->
                    </div>


                    <!--content  end ------------------------------------------------>
                    <div class="limit-box fl-wrap"></div>

                    <!--footer start------------------------------------------------->
                    <div class="height-emulator fl-wrap"></div>
                    @include('commonAssets.fotterBar')
                    <!--footer  end ------------------------------------------------->
                </div>
                <!-- content-holder end --------------------------------------------->
            </div>
            <!--wrapper end --------------------------------------------------------->


            <!-- cursor ----->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->
        </div>
        <!-- Main end ----------------------------------------------------------->


        <!-- Vendor scripts start ------------------------------>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
    </body>
</html>
