@extends('layouts.app')

@section('body')
    <!-- home revolution slider  -->
    <section class="home-revo-slider">
        <article class="content">
            <div id="rev_slider_1066_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric125" data-source="gallery" style="background-color:transparent;padding:0px;">
                <!-- slider bottom panel -->
                <div class="slider-bottom-panel">
                    <div class="container">
                        <div class="col-sm-4">
                            <div class="select-category-dropdown dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="drp-name" data-bind="label">Select Vendor Category</span>
                                    <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                                    <li><a href="#">Venue</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">Florist</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Jewellery</a></li>
                                    <li><a href="#">Dresses</a></li>
                                    <li><a href="#">Cake</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="select-category-dropdown dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="drp-name" data-bind="label">Select City</span>
                                    <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><a href="#">Chennai</a></li>
                                    <li><a href="#">Coimbatore</a></li>
                                    <li><a href="#">Madurai</a></li>
                                    <li><a href="#">Erode</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="slider-bottom-panel-btn">
                                <button type="button" class="btn btn-pink">Find A Vendor</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider bottom panel -->
                <div id="rev_slider_1066_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                    <ul>
                        <!-- SLIDE  -->
                        <li class="slider-li-one" data-index="rs-3004" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/slider/slider-1.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <div class="overlay-bg"></div>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme"
                                 id="slide-3004-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['52','52','52','52']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="font-family: 'Lora';z-index: 5; white-space: nowrap;text-transform:left;">Find Your Perfect Wedding Vendor
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
                                 id="slide-3004-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="font-family: 'Lora';z-index: 6; white-space: nowrap;text-transform:left;">Over 1200+ Wedding Vendors For You Special Date &amp; Find The Perfect Venuw &amp; Save You Date
                            </div>
                        </li>

                        <!-- SLIDE 2 -->
                        <li data-index="rs-3005" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off"  data-title="Chill" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/slider/slider-3.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <div class="overlay-bg clr-blk"></div>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3"
                                 id="slide-3005-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['52','52','52','52']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="font-family: 'Lora';z-index: 10; white-space: nowrap;text-transform:left;">Start Finding Your Wedding Vendor
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2"
                                 id="slide-3005-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="font-family: 'Lora';z-index: 11; white-space: nowrap;text-transform:left;">Over 1200+ Wedding Vendors For You Special Date &amp; Find The Perfect Venuw &amp; Save You Date
                            </div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-8"
                                 id="slide-3005-layer-10"
                                 data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']"
                                 data-y="['top','top','top','top']" data-voffset="['632','632','632','632']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="image"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 15;text-transform:left;border-width:0px;">

                                <div class="rs-looped rs-pendulum"  data-easing="linearEaseNone" data-startdeg="-20"      data-enddeg="360" data-speed="35" data-origin="50% 50%"><img src="{{asset('images/slider/blurflake4.png')}}" alt="" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" width="240" height="240" data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-7"
                                 id="slide-3005-layer-11"
                                 data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']"
                                 data-y="['top','top','top','top']" data-voffset="['487','487','487','487']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="image"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 16;text-transform:left;border-width:0px;">

                                <div class="rs-looped rs-wave"  data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%"><img src="{{asset('images/slider/blurflake3.png')}}" alt="" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" width="170" height="170" data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-4"
                                 id="slide-3005-layer-12"
                                 data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']"
                                 data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="image"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 17;text-transform:left;border-width:0px;">
                                <div class="rs-looped rs-rotate"  data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%"><img src="{{asset('images/slider/blurflake2.png')}}" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" width="50" height="51" data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-6"
                                 id="slide-3005-layer-13"
                                 data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']"
                                 data-y="['top','top','top','top']" data-voffset="['216','216','216','216']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="image"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 18;text-transform:left;border-width:0px;">
                                <div class="rs-looped rs-wave"  data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%"><img src="{{asset('images/slider/blurflake1.png')}}" alt="" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" width="120" height="120" data-no-retina>
                                </div>
                            </div>
                        </li>

                        <!-- SLIDE 3 -->
                        <li data-index="rs-3006" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-saveperformance="off"  data-title="Enjoy Nature" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/slider/slider-4.jpg')}}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <div class="overlay-bg clr-blk"></div>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme"
                                 id="slide-3006-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['52','52','52','52']"
                                 data-lineheight="['70','70','70','52']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="font-family: 'Lora';z-index: 19; white-space: nowrap;text-transform:left;">Weddlist have 2000+ wedding vendor in directory
                            </div>
                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
                                 id="slide-3006-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="font-family: 'Lora';z-index: 20; white-space: nowrap;text-transform:left;">Over 1200+ Wedding Vendors For You Special Date &amp; Find The Perfect Venuw &amp; Save You Date
                            </div>
                        </li>

                        <!-- SLIDE 4 -->
                        <li data-index="rs-3008" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-saveperformance="off"  data-title="Hiking" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/slider/slider-2.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <div class="overlay-bg clr-blk"></div>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme"
                                 id="slide-3008-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['52','52','52','52']"
                                 data-lineheight="['70','70','70','52']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.1,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="font-family: 'Lora';z-index: 30; white-space: nowrap;text-transform:left;">Find Your Perfect Wedding Vendor
                            </div>
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
                                 id="slide-3008-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="font-family: 'Lora';z-index: 31; white-space: nowrap;text-transform:left;">Over 1200+ Wedding Vendors For You Special Date &amp; Find The Perfect Venuw &amp; Save You Date
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
    <!-- end home revolution slider -->
    <!-- wedding location -->
    <section id="wedding-location" class="bglight ptb120">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Top Wedding Location</h3>
                <p class="section-sub-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
            </div>
            <div class="wedding-location-block">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="location-block">
                                    <div class="city-img">
                                        <img src="{{asset('images/wedding-location/location-1.jpg')}}" class="img-responsive" alt="city">
                                        <div class="overlay-bg"></div>
                                    </div>
                                    <div class="city-dtl text-center">
                                        <h6 class="city-dtl-heading"><a href="#">Coimbatore</a></h6>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.</p>
                                        <a href="#" class="btn btn-pink hidden-xs">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <div class="location-block">
                                    <div class="city-img">
                                        <img src="{{asset('images/wedding-location/kanyakumari.jpg')}}" class="img-responsive" alt="city">
                                        <div class="overlay-bg"></div>
                                    </div>
                                    <div class="city-dtl text-center">
                                        <h6 class="city-dtl-heading"><a href="#">Kanyakumari</a></h6>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.</p>
                                        <a href="#" class="btn btn-pink hidden-xs">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="location-block">
                            <div class="city-img">
                                <img src="{{asset('images/wedding-location/location-3.jpg')}}" class="img-responsive" alt="city">
                                <div class="overlay-bg"></div>
                            </div>
                            <div class="city-dtl text-center">
                                <h6 class="city-dtl-heading"><a href="#">Chennai</a></h6>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.</p>
                                <a href="#" class="btn btn-pink">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="location-block">
                                    <div class="city-img">
                                        <img src="{{asset('images/wedding-location/location-4.jpg')}}" class="img-responsive" alt="city">
                                        <div class="overlay-bg"></div>
                                    </div>
                                    <div class="city-dtl text-center">
                                        <h6 class="city-dtl-heading"><a href="#">Erode</a></h6>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.</p>
                                        <a href="#" class="btn btn-pink hidden-xs">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="location-block">
                                    <div class="city-img">
                                        <img src="{{asset('images/wedding-location/ooty.jpg')}}" class="img-responsive" alt="city">
                                        <div class="overlay-bg"></div>
                                    </div>
                                    <div class="city-dtl text-center">
                                        <h6 class="city-dtl-heading"><a href="#">Ooty</a></h6>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.</p>
                                        <a href="#" class="btn btn-pink hidden-xs">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-btn text-center">
                <a href="{{ route('findVendor') }}" class="btn btn-pink">View More Location</a>
            </div>
        </div>
    </section>
    <!-- end wedding location -->
    <!-- wedding plan -->
    <section id="wedding-plan" class="ptb120">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Start Planning Your Wedding Step By Step</h3>
                <p class="section-sub-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="wedding-plan-block">
                        <div class="wedding-plan-img">
                            <img src="{{asset('images/wedding-plan-1.jpg')}}" class="img-responsive" alt="wedding-plan">
                            <div class="overlay-bg"></div>
                        </div>
                        <div class="wedding-plan-dtl text-center">
                            <h5 class="heading"><a href="budget-planner.html">Budget Planner</a></h5>
                            <p class="sub-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.</p>
                            <a href="budget-planner.html" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wedding-plan-block">
                        <div class="wedding-plan-img">
                            <img src="{{asset('images/wedding-plan-2.jpg')}}" class="img-responsive" alt="wedding-plan">
                            <div class="overlay-bg"></div>
                        </div>
                        <div class="wedding-plan-dtl text-center">
                            <h5 class="heading"><a href="guest-list.html">Guest List</a></h5>
                            <p class="sub-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.</p>
                            <a href="guest-list.html" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wedding-plan-block">
                        <div class="wedding-plan-img">
                            <img src="{{asset('images/wedding-plan-3.jpg')}}" class="img-responsive" alt="wedding-plan">
                            <div class="overlay-bg"></div>
                        </div>
                        <div class="wedding-plan-dtl text-center">
                            <h5 class="heading"><a href="to-do-list.html">Check List</a></h5>
                            <p class="sub-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.</p>
                            <a href="to-do-list.html" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end wedding plan -->
    <!-- wedding gallery -->
    <section id="wedding-gallery" class="wedding-gallery-main-block">
        <div id="gallery-slider" class="gallery-slider">
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/gallery-1.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <div class="overlay-bg"></div>
                <div class="gallery-dtl">
                    <i class="fa fa-heart" aria-hidden="true"></i><span>21</span>
                    <h4 class="gallery-heading"><a href="images/gallery-1.jpg" title="Elina &amp; Williams">Elina &amp; Williams</a></h4>
                </div>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/gallery-2.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <div class="overlay-bg"></div>
                <div class="gallery-dtl">
                    <i class="fa fa-heart" aria-hidden="true"></i><span>30</span>
                    <h4 class="gallery-heading"><a href="images/gallery-2.jpg" title="Jerry &amp; Jon">Jerry &amp; Jon</a></h4>
                </div>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/gallery-3.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <div class="overlay-bg"></div>
                <div class="gallery-dtl">
                    <i class="fa fa-heart" aria-hidden="true"></i><span>45</span>
                    <h4 class="gallery-heading"><a href="images/gallery-3.jpg" title="Mariya &amp; Uday">Mariya &amp; Uday</a></h4>
                </div>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/gallery-4.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <div class="overlay-bg"></div>
                <div class="gallery-dtl">
                    <i class="fa fa-heart" aria-hidden="true"></i><span>20</span>
                    <h4 class="gallery-heading"><a href="images/gallery-4.jpg" title="Jenny &amp; Williams">Jenny &amp; Williams</a></h4>
                </div>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/gallery-5.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <div class="overlay-bg"></div>
                <div class="gallery-dtl">
                    <i class="fa fa-heart" aria-hidden="true"></i><span>45</span>
                    <h4 class="gallery-heading"><a href="images/gallery-4.jpg" title="Jenny &amp; Williams">Denila &amp; Sams</a></h4>
                </div>
            </div>
        </div>
    </section>
    <!-- end wedding gallery -->
    <!-- feature wedding -->
    <section id="feature-wedding" class="pt120 pb90">
        <div class="container">
            <div class="section text-center">
                    <h3 class="section-heading">Our Best Featured Wedding Vendors</h3>
                <p class="section-sub-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-block">
                        <div class="feature-img">
                            <img src="{{asset('images/feature-wedd-1.jpg')}}" class="img-responsive" alt="feature">
                        </div>
                        <div class="tags tags-clr-one">Featured</div>
                        <div class="feature-dtl">
                            <h6 class="feature-heading"><a href="{{ route('vendorDetail') }}">Venue Vendor Title</a></h6>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Street Address, Name Of Town, 12345, Country.</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="feature-vendor">
                                    <a href="{{ route('vendorDetail') }}">Venue Vendor</a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="feature-price text-right">
                                    ₹12000-₹50000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-block">
                        <div class="feature-img">
                            <img src="{{asset('images/feature-wedd-2.jpg')}}" class="img-responsive" alt="feature">
                        </div>
                        <div class="tags tags-clr-two">top rated</div>
                        <div class="feature-dtl">
                            <h6 class="feature-heading"><a href="{{ route('vendorDetail') }}">Wedding Dress</a></h6>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Street Address, Name Of Town, 12345, Country.</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="feature-vendor">
                                    <a href="{{ route('vendorDetail') }}">Venue Vendor</a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="feature-price text-right">
                                    ₹12000-₹50000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-block">
                        <div class="feature-img">
                            <img src="{{asset('images/feature-wedd-3.jpg')}}" class="img-responsive" alt="feature">
                        </div>
                        <div class="tags tags-clr-three">popular</div>
                        <div class="feature-dtl">
                            <h6 class="feature-heading"><a href="{{ route('vendorDetail') }}">Crazy Photography</a></h6>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Street Address, Name Of Town, 12345, Country.</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="feature-vendor">
                                    <a href="{{ route('vendorDetail') }}">Venue Vendor</a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="feature-price text-right">
                                    ₹12000-₹50000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end feature wedding -->
    <!-- call out -->
    <section id="call-out" class="call-out-main-block">
        <div class="parallax" style="background-image: url('images/bg/call-out-parr.jpg');">
            <div class="overlay-bg"></div>
            <div class="container text-center">
                <div class="call-out-dtl">
                    <h2 class="call-out-heading">Are you trying our planning tools ?</h2>
                    <a href="#" class="btn btn-pink">Start Planning Today</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end call out -->
    <!-- why choose -->
    <section id="why-choose" class="why-choose-main-block ptb120">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="why-choose-img">
                        <img src="{{asset('images/why-choose.png')}}" class="img-responsive" alt="why-choose">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="section">
                        <div class="row">
                            <div class="col-sm-5">
                                <h3 class="section-heading">Why Choose Wedd<span>list</span></h3>
                            </div>
                            <div class="col-sm-7">
                                <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="why-block">
                                <div class="why-icon">
                                    <i class="flaticon-two-hearts"></i>
                                </div>
                                <h4 class="why-choose-heading">20 Year Experience</h4>
                                <p>Sed ut perspiciatis unde omnis iste na voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="why-block">
                                <div class="why-icon">
                                    <i class="flaticon-food"></i>
                                </div>
                                <h4 class="why-choose-heading">1500+ Wedding Suppliers</h4>
                                <p>Sed ut perspiciatis unde omnis iste na voluptatem accusantium doloremque laudantium</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="why-block">
                                <div class="why-icon">
                                    <i class="flaticon-valentine-day"></i>
                                </div>
                                <h4 class="why-choose-heading">100 Real Weddings</h4>
                                <p>Sed ut perspiciatis unde omnis iste na voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="why-block">
                                <div class="why-icon">
                                    <i class="flaticon-wedding-day"></i>
                                </div>
                                <h4 class="why-choose-heading">Perfect Checklist</h4>
                                <p>Sed ut perspiciatis unde omnis iste na voluptatem accusantium doloremque laudantium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why choose -->
    <!-- testimonial -->
    <section id="testimonial-block" class="testimonial-main-block" style="background-image: url('images/bg/testimonial-bg.jpg');">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Words From Happy Couples</h3>
                <p class="section-sub-heading">Sed ut perspiciatis unde omnis iste natus error</p>
            </div>
            <div id="testimonials-slider" class="testimonials-slider">
                <div class="item testimonial-block">
                    <div class="testimonial-client-img">
                        <img src="{{asset('images/testi-1.png')}}" class="img-responsive" alt="client">
                    </div>
                    <div class="testimonial-dtl">
                        <h5 class="testimonial-client">Dave Macwan</h5>
                        <div class="date">March 25, 2017</div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                    </div>
                </div>
                <div class="item testimonial-block">
                    <div class="testimonial-client-img">
                        <img src="{{asset('images/testi-2.png')}}" class="img-responsive" alt="client">
                    </div>
                    <div class="testimonial-dtl">
                        <h5 class="testimonial-client">Marry &amp; Leary</h5>
                        <div class="date">March 29, 2017</div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonial -->
    <!-- news and update -->
    <section id="news" class="pt120 pb90">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Latest Blogs &amp; Updates</h3>
                <p class="section-sub-heading">Sed ut perspiciatis unde omnis iste natus</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="news-block">
                        <div class="news-img">
                            <a href="{{ route('blogDetail') }}"><img src="{{asset('images/news-update-1.jpg')}}" class="img-responsive" alt="news"></a>
                            <div class="meta-tag">March 12, 2017</div>
                        </div>
                        <div class="news-dtl">
                            <h6 class="news-heading"><a href="{{ route('blogDetail') }}">Neque porro quisquam est qui dolo</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                            <a href="{{ route('blogDetail') }}" class="btn read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="news-block">
                        <div class="news-img">
                            <a href="{{ route('blogDetail') }}"><img src="{{asset('images/news-update-2.jpg')}}" class="img-responsive" alt="news img"></a>
                            <div class="meta-tag">March 18, 2017</div>
                        </div>
                        <div class="news-dtl">
                            <h6 class="news-heading"><a href="{{ route('blogDetail') }}">Quis autem vel eum iure repr ehend</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                            <a href="{{ route('blogDetail') }}" class="btn read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="news-block">
                        <div class="news-img">
                            <a href="{{ route('blogDetail') }}"><img src="{{asset('images/news-update-3.jpg')}}" class="img-responsive" alt="news img"></a>
                            <div class="meta-tag">March 27, 2017</div>
                        </div>
                        <div class="news-dtl">
                            <h6 class="news-heading"><a href="{{ route('blogDetail') }}">Excepteur sint occaecat cupi data</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmd tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                            <a href="{{ route('blogDetail') }}" class="btn read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end news and update -->
@endsection
