<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Iam-lahiru | ContactMe</title>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('assets/assets/assets/images/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .loader {
                width: 38px;
                height: 38px;
                border: 3px dotted #777777;
                border-style: solid solid dotted dotted;
                border-radius: 50%;
                display: inline-block;
                position: relative;
                box-sizing: border-box;
                animation: rotation 2s linear infinite;
            }
            .loader::after {
                content: '';
                box-sizing: border-box;
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                margin: auto;
                border: 3px dotted #F68338;
                border-style: solid solid dotted;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                animation: rotationBack 1s linear infinite;
                transform-origin: center center;
            }

            @keyframes rotation {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            @keyframes rotationBack {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(-360deg);
                }
            }
        </style>
    </head>

    <body>
        <!--loader start ------------------------------------------------------------>
        @include('commonAssets.preloader')
        <!--loader end -------------------------------------------------------------->

        <!-- Main  ------------------------------------------------------------------>
        <div id="main">
            <!-- header start ------------------------------------------------------->
            @include('commonAssets.appBar')
            <!-- header end --------------------------------------------------------->

            <!-- wrapper ------------------------------------------------------------>
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder scroll-content" data-pagetitle="home slideshow">

                    <!-- nav-holder start-------------------------------------------->
                    @include('commonAssets.sideNavigationBar')
                    <!-- nav-holder end --------------------------------------------->


                    <!-- fixed-column-wrap ------------------------------------------>
                    <div class="fixed-column-wrap">
                        <div class="progress-bar-wrap">
                            <div class="progress-bar color-bg"></div>
                        </div>
                        <div class="column-image fl-wrap full-height">
                            <div class="bg"  data-bg="assets/images/bg/left_newBar/img_22.webp" aria-label="Contact Us"></div>
                            <div class="overlay"></div>
                            <div class="column-image-anim"></div>
                        </div>
                        <div class="fcw-dec"></div>
                        <div class="fixed-column-tilte fcw-title"><span>Contacts</span></div>
                    </div>
                    <!-- fixed-column-wrap end--------------------------------------->



                    <!--content  Start ---------------------------------------------->
                    <div class="column-wrap">
                        <!--content -->
                        <div class="content">
                            <!-- fixed-top-panel -->
                            <div class="fixed-top-panel fl-wrap">
                                <div class="sp-fix-header fl-wrap">
                                    <div class="scroll-down-wrap">
                                        <div class="mousey">
                                            <div class="scroller"></div>
                                        </div>
                                        <span>Scroll down  to discover</span>
                                    </div>
                                    <a href="{{route('Landing')}}" class="back-to-home-btn"><span>Back to home</span></a>
                                </div>
                            </div>
                            <!-- fixed-top-panel end -->

                            <!--section  ----->
                            <section  class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="cards-wrap fl-wrap">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="fl-wrap">
                                                    <div class="section-title fl-wrap">
                                                        <h3>Contact Details</h3>
                                                    </div>
                                                    <p class="custom_paragraph_option_1">
                                                        I am committed to providing exceptional customer service and ensuring your complete satisfaction.
                                                        I believe in the power of communication and building strong relationships with others.
                                                        Whether you have a question or need support, I'm here for you.
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="custom-inner-holder">
                                            <div  class="contacts-wrap fl-wrap">
                                                <ul>
                                                    <li class="custom_li_font">
                                                        <i class="fal fa-mobile-android"></i>
                                                        <h4>Phone Number</h4>
                                                        <div class="clearfix"></div>
                                                        <a href="#" class="custom_paragraph_option_1 contact-link">+94 761909718</a>
                                                    </li>
                                                    <li class="custom_li_font">
                                                        <i class="fal fa-envelope-open"></i>
                                                        <h4>My e-mail</h4>
                                                        <div class="clearfix"></div>
                                                        <a href="mailto:gunawardhanalahiru21@gmail.com" class="custom_paragraph_option_1 contact-link">gunawardhanalahiru21@gmail.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="sec-number">01.</div>
                                    </div>
                                </div>
                            </section>
                            <!--section end -->

                            <div class="section-separator"><span class="fl-wrap bot-element"></span></div>


                            <!--section-->
                            <section  class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="cards-wrap fl-wrap">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="fl-wrap">
                                                    <div class="section-title fl-wrap">
                                                        <h3>Get in Touch</h3>
                                                    </div>
                                                    <p class="custom_paragraph_option_1">
                                                        Get in touch with me today and learn how I can help you achieve your business goals.
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="custom-inner-holder">
                                            <div  class="contacts-wrap fl-wrap">
                                                <div id="contact-form" class="cf-wrap">
                                                    <div style="display: none"  id="successMsg">
                                                        <div style="width: 100%;" class="btnsuccessMsg">
                                                            <span style='font-size:18px;'>&#9755;&nbsp;&nbsp;</span>Thank you for contact me. I will contact you shortly.
                                                        </div>
                                                    </div>

                                                    <form method="POST"  name="contactUSForm" id="contactUSForm" class="custom-form" action="javascript:void(0)">
                                                        {{ csrf_field() }}
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label><i class="fal fa-user"></i></label>
                                                                    <input style="font-family: 'Mukta', sans-serif !important" type="text"  id="name" name="name"  placeholder="Your name here" value=""/>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label><i class="fal fa-envelope"></i> </label>
                                                                    <input style="font-family: 'Mukta', sans-serif !important" type="email" id="email" name="email" placeholder="Your email here" value=""/>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label><i class="fal fa-envelope"></i> </label>
                                                                    <input style="font-family: 'Mukta', sans-serif !important" type="text"  name="subject" id="subject"  placeholder="Your subject here" value=""/>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label><i class="fal fa-phone-plus"></i></label>
                                                                    <input style="font-family: 'Mukta', sans-serif !important" type="text"  name="phone" id="phone" placeholder="Your phone number" value=""/>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <textarea  style="font-family: 'Mukta', sans-serif !important" name="message" id="message"  rows="4" placeholder="Tell us a few words"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>

                                                            <!-- Begin Submit button -->
                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                                    <button type="submit" id="submit" class="btn block color-bg fl-btn">
                                                                        <i class="fal fa-send"></i>&nbsp;&nbsp;Drop a Message
                                                                    </button>
                                                                </div>
                                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                                    <div style="display: none" id="submitAfterMsg">
                                                                        <span style="margin-left: 20px !important" class="loader"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Submit button -->
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sec-number">02.</div>
                                    </div>
                                </div>
                            </section>
                            <!--section end -->

                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </div>
                    <!--content  end ------------------------------------------------>


                    <!--footer start ------------------------------------------------>
                    <div class="height-emulator fl-wrap"></div>
                    @include('commonAssets.fotterBar')
                    <!--footer  end ------------------------------------------------->
                </div>
                <!-- content-holder end --------------------------------------------->
            </div>
            <!--wrapper end --------------------------------------------------------->


            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->
        </div>
        <!-- Main end -------------------------------------------------------------->


        <!-- app js -->
        <script src="{{asset('/js/app.js')}}"></script>
        <!-- jQuery -->
        <!--app js related to background animation -->
        <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
        <!-- main jquery js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <!-- popper js -->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>

        <script>
            if ($("#contactUSForm").length > 0) {
                $("#contactUSForm").validate({
                    rules: {
                        name: {
                            required: true,
                            maxlength: 50
                        },
                        email: {
                            required: true,
                            maxlength: 50,
                            email: true,
                        },
                        phone: {
                            required: true,
                            maxlength: 10,
                        },
                        subject: {
                            required: true,
                            maxlength: 100
                        },
                        message: {
                            required: true,
                            maxlength: 300
                        },
                    },
                    messages: {
                        name: {
                            required: "&#x261B;&nbsp;Please enter name",
                            maxlength: "&#x261B;&nbsp;Your name maxlength should be 50 characters long."
                        },
                        email: {
                            required: "&#x261B;&nbsp;Please enter valid email",
                            email: "&#x261B;&nbsp;Please enter valid email",
                            maxlength: "&#x261B;&nbsp;The email name should less than or equal to 100 characters",
                        },
                        phone: {
                            required: "&#x261B;&nbsp;Please enter valid number",
                            maxlength: "&#x261B;&nbsp;Your phone number should be 10 characters long."
                        },
                        subject: {
                            required: "&#x261B;&nbsp;Please enter subject",
                            maxlength: "&#x261B;&nbsp;Your subject maxlength should be 100 characters long."
                        },
                        message: {
                            required: "&#x261B;&nbsp;Please enter description",
                            maxlength: "&#x261B;&nbsp;Your description name maxlength should be 500 characters long."
                        },
                    },

                    submitHandler: function(form) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $(window).load(function(){
                            $('#submitAfterMsg').fadeOut('slow',function(){$(this).remove();});
                        });
                        $('#submitAfterMsg').show();
                        $.ajax({
                            url: "{{url('Contact')}}",
                            type: "POST",
                            data: $('#contactUSForm').serialize(),
                            success: function( response ) {
                                $('#successMsg').show();
                                $('#submitAfterMsg').hide();
                                setTimeout( "$('#successMsg').hide();", 4000);
                                document.getElementById("contactUSForm").reset();
                            }
                        });
                    }
                })
            }
        </script>
    </body>
</html>
