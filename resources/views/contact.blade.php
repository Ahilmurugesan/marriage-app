@extends('layouts.app')

@section('body')
    <!-- page banner -->
    <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="banner-dtl text-center">
                <h2 class="banner-heading">Contact Us</h2>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- end page banner -->
    <!-- contact us -->
    <section class="main-container">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Dream Vivaah Contact Details</h3>
                <p class="section-sub-heading">Sed ut perspiciatis unde omnis iste natus error</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="contact-us-block">
                        <div class="contact-us-icon">
                            <img src="{{asset('images/contact-us/contact-icon-1.png')}}" class="img-responsive" alt="contact-icon">
                        </div>
                        <div class="contact-us-dtl text-center">
                            <h6 class="contact-heading">Our Address</h6>
                            <div class="contact-sub-heading">824 Bel Meadow Drive, California, USA</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-us-block">
                        <div class="contact-us-icon">
                            <img src="{{asset('images/contact-us/contact-icon-2.png')}}" class="img-responsive" alt="contact-icon">
                        </div>
                        <div class="contact-us-dtl text-center">
                            <h6 class="contact-heading">Call Us</h6>
                            <a href="tel:#">+(00) 123 456 78 OR</a>
                            <a href="tel:#">+(00) 123 456 78</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-us-block">
                        <div class="contact-us-icon">
                            <img src="{{asset('images/contact-us/contact-icon-3.png')}}" class="img-responsive" alt="contact-icon">
                        </div>
                        <div class="contact-us-dtl text-center">
                            <h6 class="contact-heading">Mail Us</h6>
                            <a href="mailto:#">Info@Weddlist.com</a>
                            <a href="mailto:#">Support@Weddlist.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt100">
                <div class="section text-center">
                    <h3 class="section-heading">Feel Free To Contact Us</h3>
                    <p class="section-sub-heading">Sed ut perspiciatis unde omnis iste natus error</p>
                </div>
                <div class="contact-form form-group">
                    <form id="contact-us-form" action="form-action.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="yourname" id="name" placeholder="YOUR NAME *"/ required>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="YOUR PHONE" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="YOUR EMAIL ADDRESS *" required/>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="SUBJECT"/>
                                    </div>
                                </div>
                                <textarea id="message" name="message" class="form-control" placeholder="YOUR MESSAGE *"></textarea>
                                <div class="message-button">
                                    <button type="submit" class="btn btn-pink">Send Message</button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="location" class="map-banner contact-two-map"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact us -->
@endsection

@push('scripts')
    <script>
        $(function($) {
            // Asynchronously Load the map API
            var script = document.createElement('script');
            script.src = "https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
            document.body.appendChild(script);
        });
        function initialize(){
            var myLatLng = {lat: 25.3500, lng: 74.6333}; // Insert Your Latitude and Longitude For Footer Wiget Map
            var mapOptions = {
                center: myLatLng,
                zoom: 15,
                disableDefaultUI: true,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            // For Footer Widget Map
            var map = new google.maps.Map(document.getElementById("location"), mapOptions);
            var image = 'images/icons/map-marker-1-1.png';
            var beachMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });
        }

    </script>
@endpush
