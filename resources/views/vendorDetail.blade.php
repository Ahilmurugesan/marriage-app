@extends('layouts.app')

@section('body')
    <!-- new listing item description -->
    <section id="new-listing-description" class="new-listing-description-main-block">
        <div id="new-lsiting-gallery-slider" class="new-listing-gallery-slider">
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/new-listing-item-des/new-listing-gallery-1.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <a href="{{asset('images/new-listing-item-des/new-listing-gallery-1.jpg')}}" title="Wedding Gallery"><div class="overlay-bg"></div></a>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/new-listing-item-des/new-listing-gallery-2.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <a href="{{asset('images/new-listing-item-des/new-listing-gallery-2.jpg')}}" title="Wedding Gallery"><div class="overlay-bg"></div></a>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/new-listing-item-des/new-listing-gallery-3.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <a href="{{asset('images/new-listing-item-des/new-listing-gallery-3.jpg')}}" title="Wedding Gallery"><div class="overlay-bg"></div></a>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/new-listing-item-des/new-listing-gallery-4.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <a href="{{asset('images/new-listing-item-des/new-listing-gallery-4.jpg')}}" title="Wedding Gallery"><div class="overlay-bg"></div></a>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/new-listing-item-des/new-listing-gallery-5.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <a href="{{asset('images/new-listing-item-des/new-listing-gallery-5.jpg')}}" title="Wedding Gallery"><div class="overlay-bg"></div></a>
            </div>
            <div class="item gallery-block">
                <div class="gallery-img">
                    <img src="{{asset('images/new-listing-item-des/new-listing-gallery-6.jpg')}}" class="img-responsive" alt="gallery">
                </div>
                <a href="{{asset('images/new-listing-item-des/new-listing-gallery-6.jpg')}}" title="Wedding Gallery"><div class="overlay-bg"></div></a>
            </div>
        </div>
        <div class="wedding-dresses-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <h4 class="wedding-dresses-heading">Dream Vivaah wedding dresses for bride &amp; Groom</h4>
                        <div class="btn-section">
                            <a href="#" class="btn btn-pink">Sydney</a>
                            <a href="#" class="btn btn-pink">Wedding Dress</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="wedding-dresses-dtl">
                            <div class="btn-section">
                                <div class="share-btn">
                                    <ul>
                                        <li class="share">
                                            <a href="#" class="tool-handle footer-nav-link button"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a>
                                            <ul class="tooltip">
                                                <li><a href="#" class="facebook-share"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li><a href="#" class="twitter-share"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li><a href="#" class="email-share"><i class="fa fa-google-plus"></i>Gmail</a></li>
                                                <li><span class="close-button close">&times;</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-plan"><i class="fa fa-bookmark" aria-hidden="true"></i> Saved</a>
                            </div>
                            <div class="price">Price Range 45000-400000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-listing-description-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="new-listing-sidebar">
                            <div class="new-listing-map">
                                <div id="location" class="map-banner"></div>
                            </div>
                            <div class="vendor-enquery-block">
                                <h4 class="vendor-enquery-heading">Send Enquiry To Vendor</h4>
                                <p class="vendor-enquery-sub-heading">Fill in your details and a venue specialist will get back to you shortly</p>
                                <div class="form-group">
                                    <form>
                                        <input type="text" class="form-control" id="name" placeholder="Your Name *"/>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address *"/>
                                        <input type="text" class="form-control" id="phone" placeholder="Phone *"/>
                                        <div class="date-picker">
                                            <input type="text" class="form-control date-pick" placeholder="Wedding Date"/>
                                            <label><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                        </div>
                                        <div class="no-of-gits-dropdown dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <span class="drp-name" data-bind="label">No Of Gifts</span>
                                                <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                            </ul>
                                        </div>
                                        <div class="send-me">Send Me Info Via</div>
                                        <div class="checkbox-dtl">
                                            <input type="checkbox" value="None" id="checkbox" name="check" />
                                            <label for="checkbox"></label>
                                            <div class="checkbox-label">E-Mail</div>
                                        </div>
                                        <div class="checkbox-dtl checkbox-two">
                                            <input type="checkbox" value="None" id="checkbox-tow" name="check" />
                                            <label for="checkbox-tow"></label>
                                            <div class="checkbox-label">Need Call Back</div>
                                        </div>
                                        <button type="button" class="btn btn-pink">Book Venue Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <ul class="new-listing-nav-tabs tabs">
                            <li><a href="#1a" class="btn btn-default" data-toggle="tab"><span class="badge">Description</span></a></li>
                            <li><a href="#2a" data-toggle="tab" class="btn btn-default"><span class="badge">Vendor Profile</span></a></li>
                            <li><a href="#3a" class="btn btn-default" data-toggle="tab"><span class="badge">Video</span></a></li>
                            <li><a href="#4a" class="btn btn-default" data-toggle="tab"><span class="badge">User Review</span></a></li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1a">
                                <div class="description-block">
                                    <h6 class="description-heading">Description</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill um dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </p>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="2a">
                                <div class="new-listing-vendor-block">
                                    <h6 class="description-heading">John Wilburn</h6>
                                    <div class="new-listing-vendor-profile">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="vendor-profile-img">
                                                    <img src="{{asset('images/vendor-profile/vendor-profile-1.jpg')}}" class="img-responsive" alt="vendor-img">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vendor-pro-section">
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i> Studio space, 110 Pennington, London E1W 2BB
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:#">wilburn_wed@gmail.com</a>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-mobile-phone" aria-hidden="true"></i> <a href="tel:#">+08 985 258 7800</a>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-globe" aria-hidden="true"></i> <a href="#">www.wedburn.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="social-btns">
                                                    <li><a class="btn facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="btn twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="btn google" href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                                                    <li><a class="btn linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                                    </p>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="3a">
                                <div class="new-listing-video-block">
                                    <h6 class="description-heading">Related Video</h6>
                                    <div class="video-item">
                                        <script type="text/javascript">
                                            var video_url = '<iframe width="1261" height="480" src="https://www.youtube.com/embed/CwLWV3k9h2Y" title="Qatari Royal Wedding That Will Blow Your Minds 🤩" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                                        </script>
                                        <div class="video-device">
                                            <img class="bg_img img-responsive" src="{{asset('images/video-img.jpg')}}" alt="testimonials-01" />
                                            <div class="overlay-bg"></div>
                                            <div class="video-preview">
                                                <a href="javascript:void(0);" class="btn-video-play"><i class="fa fa-play" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="4a">
                                <div class="new-listing-review">
                                    <h6 class="description-heading">User Review</h6>
                                    <div class="comments">
                                        <div class="media">
                                            <ul>
                                                <li>
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-1.jpg')}}" alt="media-img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="media-heading">Micheal Doe</h6>
                                                                <div class="date">March 13,  2017 At 9:30 Am</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="comments-rating">
                                                                    <div class="rating-icon">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-out-of">
                                                                        5/5
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-2.jpg')}}" alt="media-img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="media-heading">Elina Doe</h6>
                                                                <div class="date">March 12,  2017 At 5:30 Pm</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="comments-rating">
                                                                    <div class="rating-icon">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-out-of">
                                                                        5/5
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-3.jpg')}}" alt="media-img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="media-heading">William Doe</h6>
                                                                <div class="date">March 12,  2017 At 4:00 Pm</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="comments-rating">
                                                                    <div class="rating-icon">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-out-of">
                                                                        5/5
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-4.jpg')}}" alt="media-img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="media-heading">Johnson Doe</h6>
                                                                <div class="date">March 10,  2017 At 9:30 Am</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="comments-rating">
                                                                    <div class="rating-icon">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-out-of">
                                                                        5/5
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="review-btn">
                                                <button type="button" class="btn btn-pink">Write Your Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="consider-item-block">
                            <h4 class="consider-heading">You May Consider This Items</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="consider-item">
                                        <div class="category-listing-section">
                                            <div class="category-listing-dtl">
                                                <div class="category-listing-img">
                                                    <a href="{{ route('vendorDetail') }}"><img src="{{asset('images/category-listing/category-list-1.jpg')}}" class="img-responsive" alt="category-img"></a>
                                                </div>
                                                <div class="category-info">
                                                    <h6 class="category-dtl-heading"><a href="{{ route('vendorDetail') }}">Wedding Dress</a></h6>
                                                    <div class="category-dtl-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Street Address, Name Of Town, 12345, Country.</div>
                                                </div>
                                            </div>
                                            <div class="category-listing-text">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="category-text-heading">
                                                            <a href="{{ route('vendorDetail') }}">Venue Vendor</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="category-price text-right">₹12000-₹50000</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="consider-item">
                                        <div class="category-listing-section">
                                            <div class="category-listing-dtl">
                                                <div class="category-listing-img">
                                                    <a href="{{ route('vendorDetail') }}"><img src="{{asset('images/category-listing/category-list-2.jpg')}}" class="img-responsive" alt="category-img"></a>
                                                </div>
                                                <div class="category-info">
                                                    <h6 class="category-dtl-heading"><a href="{{ route('vendorDetail') }}">Wedding Dress</a></h6>
                                                    <div class="category-dtl-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Street Address, Name Of Town, 12345, Country.</div>
                                                </div>
                                            </div>
                                            <div class="category-listing-text">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="category-text-heading">
                                                            <a href="{{ route('vendorDetail') }}">Venue Vendor</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="category-price text-right">₹12000-₹50000</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end new listing item discription -->
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
