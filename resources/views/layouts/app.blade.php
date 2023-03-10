<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
    <title>Dream Vivaah</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Dream Vivaah" />
    <meta name="MobileOptimized" content="320" />
    <link href="{{asset('favicon.ico')}}" rel="icon" type="image/x-icon"/> <!-- favicon -->
    <!-- theme style -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/settings.css')}}"> <!-- revolution setting css -->
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/layers.css')}}">  <!-- revolution layer css -->
    <!-- end revolution -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
    <link href="{{asset('css/menumaker.css')}}" rel="stylesheet" type="text/css"/> <!-- menu css -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
    <link href="{{asset('css/datepicker.css')}}" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="css/share-tooltip.css" rel="stylesheet" type="text/css"/><!-- share tooltip css -->
    <!-- flaticon css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/> <!-- custom css -->
    <link href="{{asset('css/stucture.css')}}" rel="stylesheet" type="text/css"/> <!-- stucture css -->
    <!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader -->
<div class="preloader">
    <div class="status">
        <div class="status-message">
        </div>
    </div>
</div>
<!-- end preloader -->
<!--  top bar -->
<section class="top-nav-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="top-text">Welcome to Dream Vivaah</div>
            </div>
            <div class="col-sm-6">
                <div class="top-detail text-right">
                    <ul>
                        <li><a href="{{ route('help') }}">Help</a></li>
                        {{--<li><a href="pricing-plan.html">Pricing</a></li>--}}
                        <li><a href="http://localhost:8000/register" target="_blank">Register</a></li>
                        <li><a href="http://localhost:8000/login" target="_blank">Login</a></li>
                        <li class="search-btn search-icon text-center">
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search -->
        <div class="search">
            <div class="container">
                <input type="search" class="search-box" placeholder="Search"/>
                <a href="#" class="fa fa-times search-close"></a>
            </div>
        </div>
        <!-- end search -->
    </div>
</section>
<!--  end top bar -->
<!--  navigation -->
<header id="nav-bar" class="nav-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="wedding-logo">
                    <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" class="img-responsive" alt="logo" style="max-width: fit-content; width: 250px"></a>
                </div>
            </div>
            <div class="col-md-10 col-sm-9">
                <div class="navigation">
                    <div id="cssmenu">
                        <ul class="css-menu">
                            <li><a href="{{ route('findVendor') }}">Vendors</a>
                            </li>
                            <li><a href="#">Planning Tools</a>
                            </li>
                            <li><a href="{{ route('real-wedding') }}">Real Weddings</a>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li><a href="{{ route('blogs') }}">Blogs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  end navigation -->
@yield('body')
<!-- footer -->
<div id="footer" class="footer-main-block">
    <div class="container">
        <div class="footer-block">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="about-widget footer-widget">
                        <h4 class="footer-heading">About Dream Vivaah</h4>
                        <div class="about-dtl">
                            <p>Sed ut perspiciatis unde omnis iste natus error volup tatem.</p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam cor poris suscipit labo riosam.</p>
                            <a href="{{ route('findVendor') }}" class="btn btn-white">Find a Vendor</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="news-widget footer-widget">
                        <h4 class="footer-heading">Latest Blogs</h4>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="latest-news-img">
                                            <img src="{{asset('images/footer-news-1.jpg')}}" class="img-responsive" alt="news">
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="latest-news-dtl">
                                            <a href="{{ route('blogDetail') }}">Sed ut perspiciatis unde omnis is te natus error sit volup</a>
                                            <div class="date">March 22, 2017</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="latest-news-img">
                                            <img src="{{asset('images/footer-news-2.jpg')}}" class="img-responsive" alt="news">
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="latest-news-dtl">
                                            <a href="{{ route('blogDetail') }}">Excepteur sint occaecat cupidatat non proident,</a>
                                            <div class="date">March 21, 2017</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ route('blogs') }}" class="btn btn-white">Read More Blogs</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="subscribe-widget footer-widget">
                        <h4 class="footer-heading">Subscribe Newsletter</h4>
                        <form id="subscribe-form" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" id="mc-email" class="form-control" placeholder="EMAIL ADDRESS">
                                <button type="submit" class="btn btn-white">Subscribe Now</button>
                                <label for="mc-email"></label>
                            </div>
                        </form>
                        <ul class="social-btns">
                            <li><a class="btn facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="btn twitter" href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="btn pinterest" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-block text-center">
        <div class="container">
            <p>&copy; 2023 All rights reserved.</p>
        </div>
    </div>
</div>
<!-- end footer -->
<!-- jquery -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>  <!-- jquery library js -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> <!-- bootstrap js -->
<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script> <!-- owl carousel js -->
<script type="text/javascript" src="{{asset('js/jquery.ajaxchimp.js')}}"></script> <!-- mail chimp js -->
<script type="text/javascript" src="{{asset('js/smooth-scroll.js')}}"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script> <!-- magnify popup js -->
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script> <!-- facts count js-->
<script type="text/javascript" src="{{asset('js/menumaker.js')}}"></script> <!-- menu js-->
<script type="text/javascript" src="{{asset('js/jquery.share-tooltip.js')}}"></script> <!-- share tooltip js-->
<script type="text/javascript" src="{{asset('js/price-slider.js')}}"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.js')}}"></script> <!-- datepicker js-->
<!-- revolution js files -->
<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<!-- end revolution js files -->
<script type="text/javascript" src="{{asset('js/theme.js')}}"></script> <!-- custom js -->
<script type="text/javascript">
    var tpj=jQuery;
    var revapi1066;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_1066_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_1066_1");
        }
        else
        {
            revapi1066 = tpj("#rev_slider_1066_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout:"auto",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"off",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style:"",
                        enable:true,
                        hide_onmobile:true,
                        hide_onleave:false,
                        hide_delay:0,
                        hide_delay_mobile:1200,
                        hide_under:0,
                        hide_over:9999,
                        tmp:'',
                        rtl:false,
                        left : {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0,
                            container:"slider",
                        },
                        right : {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0,
                            container:"slider",
                        }
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridwidth: 1000,
                gridheight:[868,768,960,720],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
                    type:"mouse",
                    disable_onmobile:"on"
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:1,
                stopAtSlide:0,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: ".header",
                fullScreenOffset: "60px",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });
</script>
<!-- end jquery -->
@stack('scripts')
</body>
<!--body end -->
</html>
