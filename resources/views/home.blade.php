
@extends('layouts.app')
@section('section')
    <!-- loader -->
    <div class="bg_load"> <img class="loader_animation" src="{{asset('assets/images/fevicon/fevicon2.png')}}" alt="#" /> </div>
        <!-- end loader -->
        <!-- header -->
        @include('partials.header')
        
        <!-- endeader -->
        <!-- myslider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{asset('assets/imagesslider/slide1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Donec eros eros, interdum sit amet tempor</h5>
      <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
     
  </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/imagesslider/slide2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Donec eros eros, interdum sit amet tempor</h5>
      <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
  </div>
    </div>
   
  </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <!-- endmyslider -->
        <!-- section slider -->
        <div id="slider" class="section main_slider">
            <div class="container-fuild">
            <div class="row">
                <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
                    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                        <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/layout_img/1920x980.png')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Furniture Services" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('assets/images/layout_img/1920x980.png')}}"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. BG -->
                            <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                id="slide-270-layer-1012" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                data-transform_out="s:300;s:300;" 
                                data-start="750" 
                                data-basealign="slide" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-912" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                data-width="500"
                                data-height="140"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;" 
                                data-mask_out="x:inherit;y:inherit;" 
                                data-start="2000" 
                                data-responsive_offset="on" 
                                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-112" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-fontsize="['70','70','70','35']"
                                data-lineheight="['70','70','70','50']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1000" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" 
                                style="z-index: 6; white-space: nowrap;">Furniture Services</div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-412" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1500" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                style="z-index: 7; white-space: nowrap;">Available On Nurvis </div>
                        </li>
                        <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/layout_img/1920x980.png')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Easy To Use & Customize" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('assets/images/layout_img/1920x980.png')}}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. BG -->
                            <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                id="slide-270-layer-101" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                data-transform_out="s:300;s:300;" 
                                data-start="750" 
                                data-basealign="slide" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-91" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                data-width="500"
                                data-height="140"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;" 
                                data-mask_out="x:inherit;y:inherit;" 
                                data-start="2000" 
                                data-responsive_offset="on" 
                                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-11" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-fontsize="['70','70','70','35']"
                                data-lineheight="['70','70','70','50']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1000" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" 
                                style="z-index: 6; white-space: nowrap;">Fast & Affordable </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-41" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1500" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                style="z-index: 7; white-space: nowrap;">Available On Nurvis</div>
                        </li>
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/layout_img/1920x980.png')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Perfectly Responsive" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('assets/images/layout_img/1920x980.png')}}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. BG -->
                            <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                id="slide-270-layer-10" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                data-transform_out="s:300;s:300;" 
                                data-start="750" 
                                data-basealign="slide" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-9" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                data-width="500"
                                data-height="140"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;" 
                                data-mask_out="x:inherit;y:inherit;" 
                                data-start="2000" 
                                data-responsive_offset="on" 
                                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-fontsize="['70','70','70','35']"
                                data-lineheight="['70','70','70','50']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1000" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" 
                                style="z-index: 6; white-space: nowrap;">Available On Nurvis</div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-4" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1500" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                style="z-index: 7; white-space: nowrap;">Available On Nurvis</div>
                        </li>
                        </ul>
                        <div class="tp-static-layers"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_1">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                        <h2><span>What we do</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service_blog">
                        <div class="service_img">
                        <img class="img-responsive" src="{{asset('assets/images650800/i650800a.png')}}" alt="#" />
                        </div>
                        <div class="service_head">
                        <h5><a href="service_detail.html">Lighting</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_blog">
                        <div class="service_img">
                        <img class="img-responsive" src="{{asset('assets/images650800/i650800b.png')}}" alt="#" />
                        </div>
                        <div class="service_head">
                        <h5><a href="service_detail.html">Interior Design</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_blog">
                        <div class="service_img">
                        <img class="img-responsive" src="{{asset('assets/images650800/i650800e.jpg')}}" alt="#" />
                        </div>
                        <div class="service_head">
                        <h5><a href="service_detail.html">Floor Planning</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_1 section_information white_fonts">
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat.
                        </p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_1 gross_layout">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_left">
                        <h2>Why choose us</h2>
                        <p class="large">Sed ut perspiciatis unde omnis iste natus error sit..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="{{asset('assets/images/layout_img/si1.png')}}" alt="#" /></div>
                                <h4 class="service-heading">Best Quality</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="{{asset('assets/images/layout_img/si2.png')}}" alt="#" /></div>
                                <h4 class="service-heading">Experienced</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="{{asset('assets/images/layout_img/si3.png')}}" alt="#" /></div>
                                <h4 class="service-heading">Expert team</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="{{asset('assets/images/layout_img/si4.png')}}" alt="#" /></div>
                                <h4 class="service-heading">Affordable services</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="{{asset('assets/images/layout_img/si5.png')}}" alt="#" /></div>
                                <h4 class="service-heading">90 Days warranty</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="{{asset('assets/images/layout_img/si6.png')}}" alt="#" /></div>
                                <h4 class="service-heading">Award winning</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_1 light_silver gross_layout right_gross_layout">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_right">
                        <h2>Who we are</h2>
                        <p class="large">Sed ut perspiciatis unde omnis iste natus error sit..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-12 col-lg-8 text-align_right">
                    <div class="full large_cont_p">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit<br><br>sed
                        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, 
                        adip isci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
                        nostr um exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea 
                        volupt ate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br>beginning of sentences are capitalized
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_1 section_information white_fonts">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="counter">
                        <div class="counter_blog">
                            <div class="icon"><img src="{{asset('assets/images/layout_img/pr-compl.png')}}" alt="#" /></div>
                            <div class="inform_count">
                                <div class="counter-value" data-count="1500">0</div>
                                <h3>Project Complete</h3>
                            </div>
                        </div>
                        <div class="counter_blog">
                            <div class="icon"><img src="{{asset('assets/images/layout_img/happy_client.png')}}" alt="#" /></div>
                            <div class="inform_count">
                                <div class="counter-value" data-count="980">0</div>
                                <h3>Happy Clients</h3>
                            </div>
                        </div>
                        <div class="counter_blog">
                            <div class="icon"><img src="{{asset('assets/images/layout_img/award.png')}}" alt="#" /></div>
                            <div class="inform_count">
                                <div class="counter-value" data-count="250">0</div>
                                <h3>Awards Won</h3>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
       
        <!-- section -->
        <div class="section padding_layout_1 section_information white_fonts">
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat.
                        </p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_1">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center heading_with_subtitle">
                        <h2><span>Our Products</span></h2>
                        <p class="large">We package the products with best services to make you a<br>happy customer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> 
                            <img class="img-responsive" src="{{asset('assets/images500/i500a.png')}}" alt=""> 
                            <div class="overlay_pro">
                            <div class="inner_overlay">
                                <ul>
                                    <li><a class="pro_funt_bt add_cart" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a class="pro_funt_bt add_wish" href="shop_detail.html"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product_detail_btm">
                        <h4><a href="shop_detail.html">Product 1</a></h4>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> 
                            <img class="img-responsive" src="{{asset('assets/images500/i500a.png')}}" alt=""> 
                            <div class="overlay_pro">
                            <div class="inner_overlay">
                                <ul>
                                    <li><a class="pro_funt_bt add_cart" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a class="pro_funt_bt add_wish" href="shop_detail.html"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product_detail_btm">
                        <h4><a href="shop_detail.html">Product 2</a></h4>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> 
                            <img class="img-responsive" src="{{asset('assets/images500/i500a.png')}}" alt=""> 
                            <div class="overlay_pro">
                            <div class="inner_overlay">
                                <ul>
                                    <li><a class="pro_funt_bt add_cart" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a class="pro_funt_bt add_wish" href="shop_detail.html"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product_detail_btm">
                        <h4><a href="shop_detail.html">Product 3</a></h4>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> 
                            <img class="img-responsive" src="{{asset('assets/images500/i500a.png')}}" alt=""> 
                            <div class="overlay_pro">
                            <div class="inner_overlay">
                                <ul>
                                    <li><a class="pro_funt_bt add_cart" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a class="pro_funt_bt add_wish" href="shop_detail.html"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product_detail_btm">
                        <h4><a href="shop_detail.html">Product 4</a></h4>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> 
                            <img class="img-responsive" src="{{asset('assets/images500/i500a.png')}}" alt=""> 
                            <div class="overlay_pro">
                            <div class="inner_overlay">
                                <ul>
                                    <li><a class="pro_funt_bt add_cart" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a class="pro_funt_bt add_wish" href="shop_detail.html"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product_detail_btm">
                        <h4><a href="shop_detail.html">Product 5</a></h4>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> 
                            <img class="img-responsive" src="{{asset('assets/images500/i500a.png')}}" alt=""> 
                            <div class="overlay_pro">
                            <div class="inner_overlay">
                                <ul>
                                    <li><a class="pro_funt_bt add_cart" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a class="pro_funt_bt add_wish" href="shop_detail.html"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product_detail_btm">
                        <h4><a href="shop_detail.html">Product 6</a></h4>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> 
                            <img class="img-responsive" src="{{asset('assets/images500/i500a.png')}}" alt=""> 
                            <div class="overlay_pro">
                            <div class="inner_overlay">
                                <ul>
                                    <li><a class="pro_funt_bt add_cart" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a class="pro_funt_bt add_wish" href="shop_detail.html"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product_detail_btm">
                        <h4><a href="shop_detail.html">Product 7</a></h4>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> 
                            <img class="img-responsive" src="{{asset('assets/images500/i500a.png')}}" alt=""> 
                            <div class="overlay_pro">
                            <div class="inner_overlay">
                                <ul>
                                    <li><a class="pro_funt_bt add_cart" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a class="pro_funt_bt add_wish" href="shop_detail.html"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product_detail_btm">
                        <h4><a href="shop_detail.html">Product 8</a></h4>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
       
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_1 testmonial_section white_fonts">
            <div class="container" style="color: rgb(23, 172, 177);">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_left">
                        <h2>What Clients Say?</h2>
                        <p class="large">Here are testimonials from clients..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="full">
                        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonial_slider" data-slide-to="1"></li>
                            <li data-target="#testimonial_slider" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-container">
                                    <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                                    I am really satisfied with my first laptop service. 
                                    </div>
                                    <div class="testimonial-photo"> <img src="{{asset('assets/images500/i150a.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                                    <div class="testimonial-meta">
                                    <h4>Maria Anderson</h4>
                                    <span class="testimonial-position">CFO, Tech NY</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-container">
                                    <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                                    I am really satisfied with my first laptop service. 
                                    </div>
                                    <div class="testimonial-photo"> <img src="{{asset('assets/images500/i150b.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                                    <div class="testimonial-meta">
                                    <h4>Maria Anderson</h4>
                                    <span class="testimonial-position">CFO, Tech NY</span> 
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="full"> </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="contact_us_section">
                        <div class="call_icon"> <img src="{{asset('assets/images/layout_img/phone_icon.png')}}" alt="#" /> </div>
                        <div class="inner_cont">
                            <h2>REQUEST A FREE QUOTE</h2>
                            <p>Get answers and advice from people you want it from.</p>
                        </div>
                        <div class="button_Section_cont"> <a class="btn dark_blue_bt" href="contact.html">Contact us</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_3">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <ul class="brand_list">
                        <li><img src="{{asset('assets/images/layout_img/brand_icon1.png')}}" alt="#" /></li>
                        <li><img src="{{asset('assets/images/layout_img/brand_icon2.png')}}" alt="#" /></li>
                        <li><img src="{{asset('assets/images/layout_img/brand_icon3.png')}}" alt="#" /></li>
                        <li><img src="{{asset('assets/images/layout_img/brand_icon4.png')}}" alt="#" /></li>
                        <li><img src="{{asset('assets/images/layout_img/brand_icon5.png')}}" alt="#" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        <!-- Modal -->
        <div class="modal fade" id="search_bar" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="#" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End Model search bar -->
        <!-- map -->
        <div class="map_section">
            <div id="map"></div>
        </div>
        <!-- end map -->
        {{-- footer --}}
        @include('partials.footer')
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- js section -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <!-- menu js -->
      <script src="{{asset('assets/js/menumaker.js')}}"></script>
      <script src="{{asset('assets/js/wow.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('assets/js/custom.js')}}"></script>
      <!-- revolution js files -->
      <script src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
      <script src="{{asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
      <!-- map js -->
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'images/layout_img/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->

@endsection