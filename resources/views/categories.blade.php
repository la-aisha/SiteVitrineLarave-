
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
                         <h1 class="page-title">Categories</h1>
                         <ol class="breadcrumb">
                            <li><a href="/c">Home</a></li>
                            <li class="active">Categories</li>
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