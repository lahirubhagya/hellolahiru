<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | Portfolio</title>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('assets/assets/assets/images/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <!--loader start -------------------------------------->
        @include('commonAssets.preloader')
        <!--loader end ---------------------------------------->

        <!-- Main  -------------------------------------------->
        <div id="main">

            <!-- header start --------------------------------->
            @include('commonAssets.appBar')
            <!-- header end ----------------------------------->

            <!-- wrapper -------------------------------------->
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder scroll-content" data-pagetitle="home slideshow">

                    <!-- nav-holder start------------------------------------------>
                    @include('commonAssets.sideNavigationBar')
                    <!-- nav-holder end ------------------------------------------->


                    <!-- fixed-column-wrap ---------------------------------------->
                    <div class="fixed-column-wrap">
                        <div class="progress-bar-wrap">
                            <div class="progress-bar color-bg"></div>
                        </div>
                        <div class="column-image fl-wrap full-height">
                            <div class="bg bg-scroll" data-bg="assets/images/bg/long/about.png"></div>
                            <div class="overlay"></div>
                            <div class="column-image-anim"></div>
                        </div>
                        <div class="fcw-dec"></div>
                        <div class="fixed-column-tilte fdct fcw-title"><span  id="quote">About</span></div>
                    </div>
                    <!-- fixed-column-wrap end-------------------------------------->



                    <!-- hero-wrap-->
                    <div class="hero-wrap fl-wrap full-height scroll-con-sec hidden-section" id="sec1" data-scrollax-parent="true">
                        <!--ms-container-->
                        <div class="multi-slideshow_fs ms-container fl-wrap full-height" data-scrollax="properties: { translateY: '30%' }">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!--ms_item-->
                                    <div class="swiper-slide">
                                        <div class="ms-item_fs fl-wrap">
                                            <div class="bg par-elem"  data-bg="assets/images/bg/banner_03.webp" aria-label="Main Banner"></div>
                                            <div class="overlay"></div>
                                        </div>
                                    </div>
                                    <!--ms_item end-->
                                </div>
                            </div>
                        </div>
                        <!--ms-container end-->
                        <div class="half-hero-wrap">
                            <div class="pr-bg"></div>
                            <div class="rotate_text hero-decor-let">
                                <div>Web Design</div>
                                <div><span>UI/UX Design</span></div>
                                <div>Frontend Development</div>
                                <div><span>UX Research</span></div>
                            </div>
                            <h1>A proactive <br><span>UX researcher &</span> <br><span>UI engineer</span></h1>
                            <h4 class="custom_banner_sub_title custom_text_justify">
                                I am a dynamic individual who is willing to explore and learn new things in Information Technology.
                                As a fast learner, I bring energy and enthusiasm to the team, with great interpersonal
                                and leadership skills. I admire working with ethics and have experience in working in
                                a multi-cultural environment.
                            </h4>
                            <div class="clearfix"></div>
                            <a href="{{route('ContactMe')}}" class="btn fl-btn custom-scroll-link  color-bg">Get free consultation</a>
                        </div>
                        <!-- hero  elements  -->
                        <div class="hero-border hb-top"></div>
                        <div class="hero-border hb-bottom"></div>
                        <div class="hero-border hb-right"></div>
                        <div class="hero-corner hiddec-anim"></div>
                        <div class="hero-corner2 hiddec-anim"></div>
                        <div class="hero-corner3 hiddec-anim"></div>
                        <div class="custom_display_helper scroll-down-wrap sdw_hero hiddec-anim">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Scroll down  to discover</span>
                        </div>
                        <!-- hero  elements end-->
                    </div>
                    <!-- hero-wrap end--->


                    <!-- column-wrap ---->
                    <div class="column-wrap">
                        <!--content ----->
                        <div class="content">
                            <!--page-scroll-nav----->
                            <div class="page-scroll-nav fl-wrap">
                                <nav class="scroll-init color2-bg">
                                    <ul class="no-list-style">
                                        <li><a class="scroll-link fbgs" href="#sec1" data-bgscr="assets/images/bg/left_newBar/img_19.webp"  aria-label="About Me" data-bgtex="About"><span>About</span></a></li>
                                        <li><a class="scroll-link fbgs" href="#sec2" data-bgscr="assets/images/bg/left_newBar/img_15.webp" aria-label="Services" data-bgtex="Services"><span>Services</span></a></li>
                                        <li><a class="scroll-link fbgs" href="#sec3" data-bgscr="assets/images/bg/left_newBar/img_7.webp" aria-label="Strategy" data-bgtex="Strategy"><span>Strategy</span></a></li>
                                        <li><a class="scroll-link fbgs" href="#sec4" data-bgscr="assets/images/bg/left_newBar/img_6.webp" aria-label="Skills" data-bgtex="Skills"><span>Skills</span></a></li>
                                        <li><a class="scroll-link fbgs" href="#sec5" data-bgscr="assets/images/bg/left_newBar/img_3.webp" aria-label="Tech Stack" data-bgtex="Tech stack"><span>Tech Stack</span></a></li>
                                        <li><a class="scroll-link fbgs" href="#sec6" data-bgscr="assets/images/bg/left_newBar/img_18.webp" aria-label="Resume" data-bgtex="Resume"><span>Resume</span></a></li>
                                    </ul>
                                </nav>
                                <div class="arrowpagenav"></div>
                            </div>
                            <!--page-scroll-nav end-->

                            <!--section ------>
                            <section id="sec1" class="hidden-section scroll-con-sec bot-element">
                                <div class="col-wc_dec"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dec-img   fl-wrap">
                                                <img src="assets/images/bg/profileImage.webp" class="respimg" alt="Profile Image">
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="main-about fl-wrap">
                                                <div class="section-title fl-wrap">
                                                    <h3>UI/UX engineer</h3>
                                                </div>
                                                <h2 class="custom_sub_topic_option_1">
                                                    Innovative solutions<span style="color: #F68338"> to boost your creative projects</span>
                                                </h2>
                                                <p class="custom_paragraph_option_1">
                                                    👋 Hi, I'm Lahiru Gunawardhana, a UI/UX Engineer from Sri Lanka with expertise in UX research,
                                                    UI design, and front-end development. I create intuitive, visually engaging digital experiences
                                                    that blend creativity with functionality.
                                                </p>
                                                <p class="custom_paragraph_option_1">
                                                    With a user-first mindset and strong technical skills, I design solutions that are both
                                                    aesthetically pleasing and easy to use. My focus is always on crafting seamless interactions
                                                    that enhance the overall user journey.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sec-number">01.</div>
                                </div>
                            </section>
                            <div class="section-separator bot-element">
                                <span class="fl-wrap"></span>
                            </div>
                            <!--section end -->


                            <!--section  ----->
                            <section id="sec2" class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="cards-wrap fl-wrap">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="fl-wrap">
                                                    <div class="section-title fl-wrap">
                                                        <h3>what do I do ?</h3>
                                                    </div>
                                                    <p class="custom_paragraph_option_1">
                                                        As a UI/UX engineer with a design focus, I craft visually captivating and intuitive
                                                        interfaces while conducting insightful UX research to understand and meet user needs.
                                                        Here’s a concise overview of my role and expertise:
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <!--card item -->
                                            <div class="col-md-4">
                                                <div class="content-inner fl-wrap">
                                                    <div class="content-front">
                                                        <div class="cf-inner">
                                                            <div class="bg"  data-bg="assets/images/services/4.webp" aria-label="UX Research"></div>
                                                            <div class="overlay"></div>
                                                            <div class="inner">
                                                                <h2>UX Research</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-back">
                                                        <div class="cf-inner">
                                                            <div class="inner">
                                                                <div class="dec-icon" style="margin-top: 20px !important">
                                                                    <img src="assets/images/icons/ux-research.webp" width="70px" height="70px" alt="UX Research Icon">
                                                                </div>
                                                                <p class="custom_paragraph_option_1">
                                                                    As a UX researcher, I uncover user needs through interviews, surveys,
                                                                    and testing, turning insights into intuitive, visually appealing designs.
                                                                    By addressing pain points, I create seamless experiences and elevate product quality.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--card item end -->

                                            <!--card item -->
                                            <div class="col-md-4">
                                                <div class="content-inner fl-wrap">
                                                    <div class="content-front">
                                                        <div class="cf-inner">
                                                            <div class="bg"  data-bg="assets/images/services/1.webp" aria-label="UI Design"></div>
                                                            <div class="overlay"></div>
                                                            <div class="inner">
                                                                <h2>UI Design</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-back">
                                                        <div class="cf-inner">
                                                            <div class="inner">
                                                                <div class="dec-icon" style="margin-top: 20px !important">
                                                                    <img src="assets/images/icons/ui-design.webp"  width="70px" height="70px" alt="UI Design Icon">
                                                                </div>
                                                                <p class="custom_paragraph_option_1">
                                                                    I design user interfaces that solve complex problems through a human-centered approach,
                                                                    blending function with visual appeal. Working closely with teams,
                                                                    I ensure the end product is intuitive and aligned with user goals.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--card item end -->

                                            <!--card item -->
                                            <div class="col-md-4">
                                                <div class="content-inner fl-wrap">
                                                    <div class="content-front">
                                                        <div class="cf-inner">
                                                            <div class="bg "  data-bg="assets/images/services/2.webp" aria-label="Frontend Development"></div>
                                                            <div class="overlay"></div>
                                                            <div class="inner">
                                                                <h2>Frontend Development</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-back">
                                                        <div class="cf-inner">
                                                            <div class="inner">
                                                                <div class="dec-icon" style="margin-top: 20px !important">
                                                                    <img src="assets/images/icons/frontend-dev.webp" width="60px" height="60px" alt="Frontend Development Icon">
                                                                </div>
                                                                <p class="custom_paragraph_option_1">
                                                                    I combine front-end skills with design to build responsive,
                                                                    accessible, and visually polished interfaces using HTML, CSS/SCSS,
                                                                    JavaScript, and modern tools - ensuring seamless user experiences.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--card item end -->
                                        </div>

                                        <div class="srv-link-text fl-wrap">
                                            <h4>Ready to turn your vision into reality ? Let's start  </h4>
                                            <a href="{{route('ContactMe')}}" class="btn  float-btn  color-bg custom_float_right">Talk to me any time</a>
                                        </div>
                                        <div class="sec-number">02.</div>
                                    </div>
                                </div>
                            </section>
                            <div class="section-separator bot-element">
                                <span class="fl-wrap"></span>
                            </div>
                            <!--section end -->


                            <!--section  ----->
                            <section id="sec3" class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="section-title fl-wrap">
                                        <h3>Design Approach</h3>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <p class="custom_paragraph_option_1">
                                                I follow a complete end-to-end design thinking process for every project—an iterative,
                                                user-focused approach that uncovers real needs and solves complex, often unclear problems.
                                                This method involves five key phases: empathize, define, ideate, prototype,
                                                and test - making it ideal for tackling challenges that are ambiguous or still emerging.
                                            </p>

                                            <img src="assets/images/bg/5-design-thinking-steps.webp" class="custom_design_thinking_img" alt="5-design-thinking-steps">
                                        </div>
                                    </div><br>
                                    <div class="process-wrap fl-wrap">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <ul>
                                                    <li>
                                                        <div class="time-line-icon">
                                                            <img src="assets/images/icons/empathize.webp" width="50px" height="50px" alt="Empathize">
                                                        </div>
                                                        <h4 style="padding-top: 8px">Empathize</h4>
                                                        <div class="process-details custom_card_design">
                                                            <h6 class="custom_topic_for_design_approach">Understanding people</h6>
                                                            <p class="custom_paragraph_option_1">
                                                                Empathy is central to design thinking, allowing designers to overcome biases and truly
                                                                understand user needs. By engaging with experts and users, we gain valuable insights
                                                                into their experiences, enabling us to create thoughtful, effective solutions that
                                                                genuinely address real-world challenges.
                                                            </p>
                                                        </div>
                                                        <span class="process-numder">01.</span>
                                                    </li>

                                                    <li>
                                                        <div class="time-line-icon">
                                                            <img src="assets/images/icons/define.webp" width="50px" height="50px" alt="Define">
                                                        </div>
                                                        <h4 style="padding-top: 8px">Define</h4>
                                                        <div class="process-details custom_card_design">
                                                            <h6 class="custom_topic_for_design_approach">Figuring out the problem</h6>
                                                            <p class="custom_paragraph_option_1">
                                                                In the define phase, insights from the empathize stage are carefully analyzed to uncover
                                                                the core user problem. The aim is to frame the challenge from a human-centered perspective,
                                                                setting the foundation for focused, impactful solutions that truly address user needs and
                                                                expectations.
                                                            </p>
                                                        </div>
                                                        <span class="process-numder">02.</span>
                                                    </li>

                                                    <li>
                                                        <div class="time-line-icon">
                                                            <img src="assets/images/icons/ideate.webp" width="50px" height="50px" alt="Ideate">
                                                        </div>
                                                        <h4 style="padding-top: 8px">Ideate</h4>
                                                        <div class="process-details custom_card_design">
                                                            <h6 class="custom_topic_for_design_approach">Generating ideas</h6>
                                                            <p class="custom_paragraph_option_1">
                                                                With a clear grasp of user needs and a defined human-centered problem, the ideation
                                                                phase starts. This stage encourages creative exploration using various techniques to
                                                                generate a broad range of ideas and solutions aimed at effectively addressing the
                                                                identified challenges.
                                                            </p>
                                                        </div>
                                                        <span class="process-numder">03.</span>
                                                    </li>

                                                    <li>
                                                        <div class="time-line-icon">
                                                            <img src="assets/images/icons/prototype.webp" width="50px" height="50px" alt="Prototype">
                                                        </div>
                                                        <h4 style="padding-top: 8px">Prototype</h4>
                                                        <div class="process-details custom_card_design">
                                                            <h6 class="custom_topic_for_design_approach">Creation and experimentation</h6>
                                                            <p class="custom_paragraph_option_1">
                                                                In the prototyping phase, simplified product versions are created to test key
                                                                features addressing user needs from earlier stages. Each prototype is carefully
                                                                evaluated, refined, or discarded depending on its effectiveness in solving the
                                                                identified problems, ensuring the final solution truly meets user expectations.
                                                            </p>
                                                        </div>
                                                        <span class="process-numder">04.</span>
                                                    </li>

                                                    <li>
                                                        <div class="time-line-icon">
                                                            <img src="assets/images/icons/refining.webp" width="50px" height="50px" alt="Refining the product">
                                                        </div>
                                                        <h4 style="padding-top: 8px">Test</h4>
                                                        <div class="process-details custom_card_design">
                                                            <h6 class="custom_topic_for_design_approach">Refining the product</h6>
                                                            <p class="custom_paragraph_option_1">
                                                                During testing, the team evaluates the product using prototype insights.
                                                                Although the final stage, design thinking is iterative—testing uncovers new
                                                                insights that prompt refinements and revisiting earlier phases, ensuring the
                                                                solution continuously evolves to better address user needs and challenges.
                                                            </p>
                                                        </div>
                                                        <span class="process-numder">05.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sec-number">03.</div>
                                </div>
                            </section>


                            <!--section  ----->
                            <section id="sec4" class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="cards-wrap fl-wrap">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="fl-wrap">
                                                    <div class="section-title fl-wrap">
                                                        <h3>My Diversified Skills</h3>
                                                    </div>
                                                    <p class="custom_paragraph_option_1">
                                                        In today's rapidly evolving world, acquiring relevant skills has become more important than ever.
                                                        As technology advances and industries undergo transformation, individuals must constantly
                                                        adapt to stay competitive in the job market. So as a UI/UX engineer, I am thoroughly
                                                        skilled in the following technical skills:
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <section class="dark-bg bot-element">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                                <div class="video-promo-text fl-wrap mar-top">
                                                                    <h3>Skills</h3>
                                                                    <div class="custom_paragraph_option_1 dec-list fl-wrap">
                                                                        <ul>
                                                                            <li class="custom_li_color">User-centered Design</li>
                                                                            <li class="custom_li_color">Sketching</li>
                                                                            <li class="custom_li_color">Storyboarding</li>
                                                                            <li class="custom_li_color">User Research (UX)</li>
                                                                            <li class="custom_li_color">User Interface Design (UI)</li>
                                                                            <li class="custom_li_color">User Testing (UT)</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                                <img class="custom_image_use_in_skills" src="assets/images/logo/logo_small.webp" alt="Logo Small">
                                                            </div>

                                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                                <div class="video-promo-text fl-wrap mar-top">
                                                                    <h3>Web Design</h3>
                                                                    <div class="custom_paragraph_option_1 dec-list fl-wrap">
                                                                        <ul>
                                                                            <li class="custom_li_color">Frontend Development</li>
                                                                            <li class="custom_li_color">Web User Interface Design</li>
                                                                            <li class="custom_li_color">Revamping</li>
                                                                            <li class="custom_li_color">Google Map Development</li>
                                                                            <li class="custom_li_color">Arc Map Development</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hero-corner"></div>
                                                </section>
                                            </div>
                                        </div>

                                        <div class="sec-number">04.</div>
                                    </div>
                                </div>
                            </section>
                            <div class="section-separator bot-element">
                                <span class="fl-wrap"></span>
                            </div>
                            <!--section end -->


                            <!--section  ----->
                            <section id="sec5" class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="cards-wrap fl-wrap">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="fl-wrap">
                                                    <div class="section-title fl-wrap">
                                                        <h3>Tools & Technologies</h3>
                                                    </div>
                                                    <p class="custom_paragraph_option_1">
                                                        I leverage a range of cutting-edge tools and technologies to craft exceptional
                                                        UI/UX applications. My priority is delivering user-focused designs that are both
                                                        visually stunning and highly intuitive. These tools are essential in bringing
                                                        seamless, engaging experiences to life.
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/figma.webp" alt="Figma"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list" src="assets/images/tools/miro.webp" alt="Miro"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list" src="assets/images/tools/balsamiq.webp" alt="Balsamiq"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list" src="assets/images/tools/html.webp" alt="HTML"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/css.webp" alt="CSS"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/scss.webp" alt="SCSS"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/boostrap.webp" alt="Boostrap"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/javascript.webp" alt="Javascript"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/jquery.webp" alt="Jquery"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/vuejs.webp" alt="VueJs"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/esri.webp" alt="Esri"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/googlemaps.webp" alt="Google Maps"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/php.webp" alt="PHP"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/laravel.webp" alt="Laravel"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/mysql.webp" alt="MySql"></div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                                <div class="custom_card_box_tools"><img class="custom_client_list"  src="assets/images/tools/pgsql.webp" alt="Pgsql"></div>
                                            </div>
                                        </div>

                                        <div class="sec-number">05.</div>
                                    </div>
                                </div>
                            </section>
                            <div class="section-separator bot-element">
                                <span class="fl-wrap"></span>
                            </div>
                            <!--section end -->


                            <!--section  ----->
                            <section id="sec6" class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="cards-wrap fl-wrap">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="fl-wrap">
                                                    <div class="section-title fl-wrap">
                                                        <h3>Resume</h3>
                                                    </div>
                                                    <p class="custom_paragraph_option_1">
                                                        I’m a passionate and driven IT professional committed to continuous
                                                        growth and staying ahead in the ever-evolving tech landscape. UI/UX
                                                        isn’t just a career for me - it’s something I genuinely love.
                                                        For more about my experience and skills, please explore my resume below.
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <a  href="assets/images/cv/CV-LAHIRU-GUNAWARDHANA.pdf" target="_blank" type="application/pdf" rel="alternate" media="print" class="btn color-bg  fl-btn">Download resume</a>
                                            </div>
                                        </div>

                                        <div class="custom-inner-holder">
                                            <div class="custom-inner">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="resum-header workres">
                                                            <i class="fa fa-briefcase"></i>
                                                            <h3>UI/UX ENGINEER</h3>
                                                            <span class="custom_paragraph_option_1">2023 (May) - Present</span>
                                                            <span class="custom_theme_main_color custom_paragraph_option_1">02 Year Experience</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="resum-content fl-wrap">
                                                            <h4>CELATATECH PVT COMPANY, SRI LANKA</h4>
                                                            <div class="custom_paragraph_option_1 dec-list fl-wrap">
                                                                <ul>
                                                                    <li>
                                                                        GEOBIZZ VERSION 2/ 3 WEB APPLICATION UI<br>
                                                                        Designed & developed the entire Geobizz Web application UI/UX process
                                                                    </li>
                                                                    <li>
                                                                        LAUGFS GAS MOBILE APP & WEB APPLICATION<br>
                                                                        Designed the entire Laugfs Gas mobile app UI/UX process
                                                                    </li>
                                                                    <li>
                                                                        SALES FORCE AUTOMATION WEB & MOBILE APP<br>
                                                                        Designed the SFA web application & mobile app UI/UX process
                                                                    </li>
                                                                    <li>
                                                                        MULTILAC COMPANY MOBILE APP<br>
                                                                        Designed the Multilac Paints Sales & Customer mobile app UI/UX process
                                                                    </li>
                                                                    <li>
                                                                        CARGILLS COMPANY WEB & MOBILE APP<br>
                                                                        Designed the Cargills sales web application & mobile app UI/UX process
                                                                    </li>
                                                                    <li>
                                                                        ACTED WASTE MANAGEMENT MOBILE APP<br>
                                                                        Designed the Waste management mobile app UI/UX process.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="custom-inner">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="resum-header workres">
                                                            <i class="fa fa-briefcase"></i>
                                                            <h3>WEB DEVELOPER</h3>
                                                            <span class="custom_paragraph_option_1">2019 (December) - 2023 (April)</span>
                                                            <span class="custom_theme_main_color custom_paragraph_option_1">03 year & 04 months experience</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="resum-content fl-wrap">
                                                            <h4>CELATATECH PVT COMPANY, SRI LANKA</h4>
                                                            <div class="custom_paragraph_option_1 dec-list fl-wrap">
                                                                <ul>
                                                                    <li>
                                                                        HIGH – TECH SOLIDER WEB APPLICATION<br>
                                                                        Developed for the Centre for Research & Development
                                                                    </li>
                                                                    <li>
                                                                        GEOBIZZ WEB APPLICATION | VERSION-01<br>
                                                                        Developed for the CelataTech Pvt Company
                                                                    </li>
                                                                    <li>
                                                                        TEA SMALL HOLDINGS WEB APPLICATION [TSHDA]<br>
                                                                        Developed for Tea Small Holdings Development Authority
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="custom-inner">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="resum-header workres">
                                                            <i class="fa fa-briefcase"></i>
                                                            <h3>INTERNSHIP</h3>
                                                            <span class="custom_paragraph_option_1">2018 (October) - 2019 (December)</span>
                                                            <span class="custom_theme_main_color custom_paragraph_option_1">01 year experience</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="resum-content fl-wrap">
                                                            <h4>MINISTRY OF DEFENCE, SRI LANKA - (Centre for Research & Development)</h4>
                                                            <div class="custom_paragraph_option_1 dec-list fl-wrap">
                                                                <ul>
                                                                    <li>
                                                                        VALUATION WEB APPLICATION<br>
                                                                        Developed for the Centre for Research & Development
                                                                    </li>
                                                                    <li>
                                                                        ELEPHANT TRACKING SYSTEM<br>
                                                                        Developed for the Centre for Research & Development
                                                                    </li>
                                                                    <li>
                                                                        MAIL MANAGEMENT SYSTEM<br>
                                                                        Developed for the Centre for Research & Development
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sec-number">06.</div>
                                    </div>
                                </div>
                            </section>
                            <div class="section-separator bot-element">
                                <span class="fl-wrap"></span>
                            </div>
                            <!--section end -->


                            <div class="section-separator bot-element">
                                <span class="fl-wrap"></span>
                            </div>

                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </div>
                    <!--content  end --------------------------->


                    <!--footer start --------------------------->
                    <div class="height-emulator fl-wrap"></div>
                    @include('commonAssets.fotterBar')
                    <!--footer  end ---------------------------->


                </div>
                <!-- content-holder end ------------------------>
            </div>
            <!--wrapper end ------------------------------------>


            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->
        </div>
        <!-- Main end ------------------------------------------>


        <!-- Vendor scripts start ------------------------------>
        <script src="{{asset('/js/app.js')}}"></script>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <!-- Vendor scripts end --------------------------------->
    </body>
</html>
