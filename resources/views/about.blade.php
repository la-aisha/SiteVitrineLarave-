
@extends('layouts.app')
@section('section')
    <!-- loader -->
    <!-- end loader -->
    <!-- header -->
   @include('partials.header')
    <!-- end header -->
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="full">
                   <div class="title-holder">
                      <div class="title-holder-cell text-left">
                         <h1 class="page-title">About Us</h1>
                         <ol class="breadcrumb">
                            <li><a href="home1.html">Home</a></li>
                            <li class="active">About Us</li>
                         </ol>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- end inner page banner -->
    <!-- section -->
    <div class="section padding_layout_1">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="full">
                   <div class="main_heading text_align_center">
                      <h2><span>We are Leading Company</span></h2>
                      <p class="large">Sed ut perspiciatis unde omnis iste sit..</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-4">
                <div class="service_blog">
                   <div class="service_img">
                      <img class="img-responsive" src="{{asset('assets/images650800/i650800a.png')}}" alt="#">
                   </div>
                   <div class="service_head">
                      <h5><a href="service_detail.html">Lighting</a></h5>
                   </div>
                </div>
             </div>
             <div class="col-md-4">
                <div class="service_blog">
                   <div class="service_img">
                      <img class="img-responsive" src="{{asset('assets/images650800/i650800a.png')}}" alt="#">
                   </div>
                   <div class="service_head">
                      <h5><a href="service_detail.html">Interior Design</a></h5>
                   </div>
                </div>
             </div>
             <div class="col-md-4">
                <div class="service_blog">
                   <div class="service_img">
                      <img class="img-responsive" src="{{asset('assets/images650800/i650800a.png')}}" alt="#">
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
                            <div class="icon text_align_left"><img src="{{asset('assets/mages/layout_img/si5.png')}}" alt="#" /></div>
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
    <div class="section padding_layout_1 light_silver">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="full">
                   <div class="main_heading text_align_left">
                      <h2>Experienced Staff</h2>
                      <p class="large">Our experts have been featured in press numerous times.</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-3 col-sm-6">
                <div class="full team_blog_colum">
                   <div class="team_img"> <img class="img-responsive" src="{{asset('assets/images500/taf.jpg')}}" alt="#"> </div>
                   <div class="team_feature_head">
                      <h4>Dean Michael</h4>
                   </div>
                   <div class="team_feature_social">
                      <div class="social_icon">
                         <ul class="list-inline">
                            <li><a class="fa fa-facebook" href="https://m.facebook.com/p/Afrid%C3%A9comaison-100067727921623/" title="Facebook" target="_blank"></a></li>
                            <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                            <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                            <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                            <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-3 col-sm-6">
                <div class="full team_blog_colum">
                   <div class="team_img"> <img class="img-responsive" src="{{asset('assets/images500/taf.jpg')}}" alt="#"> </div>
                   <div class="team_feature_head">
                      <h4>Ruby Jake</h4>
                   </div>
                   <div class="team_feature_social">
                      <div class="social_icon">
                         <ul class="list-inline">
                            <li><a class="fa fa-facebook" href="https://m.facebook.com/p/Afrid%C3%A9comaison-100067727921623/" title="Facebook" target="_blank"></a></li>
                            <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                            <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                            <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                            <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-3 col-sm-6">
                <div class="full team_blog_colum">
                   <div class="team_img"> <img class="img-responsive" src="{{asset('assets/images500/taf.jpg')}}" alt="#"> </div>
                   <div class="team_feature_head">
                      <h4>David Hussay</h4>
                   </div>
                   <div class="team_feature_social">
                      <div class="social_icon">
                         <ul class="list-inline">
                            <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                            <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                            <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                            <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                            <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-3 col-sm-6">
                <div class="full team_blog_colum">
                   <div class="team_img"> <img class="img-responsive" src="{{asset('assets/images500/taf.jpg')}}" alt="#"> </div>
                   <div class="team_feature_head">
                      <h4>Dean Michael</h4>
                   </div>
                   <div class="team_feature_social">
                      <div class="social_icon">
                         <ul class="list-inline">
                            <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                            <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                            <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                            <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                            <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section padding_layout_1 testmonial_section white_fonts">
       <div class="container">
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
             <div class="col-sm-7">
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
                               <div class="testimonial-photo"> <img src="{{asset('assets/images500/i150b.jpg')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
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
                      <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="contact.html">Contact us</a> </div>
                   </div>
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
    <!-- footer -->
    @include('partials.footer')

    <!-- end footer -->
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