@extends('layouts.app')

@section('body')
    <!-- page banner -->
    <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="banner-dtl text-center">
                <h2 class="banner-heading">Category Listing</h2>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Vendor Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- end page banner -->
    <!-- listing with left map -->
    <section id="listing-with-left-map" class="listing-with-leftmap-main-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 pad-lft-0">
                    <div id="mct-map_canvas" class="map-banner"></div>
                </div>
                <div class="col-md-8">
                    <div class="listing-with-leftmap-block">
                        <div class="refine-search">
                            <h4 class="refine-search-heading">Refine Your Search</h4>
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="select-category-dropdown dropdown">
                                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="drp-name" data-bind="label">Select Category</span>
                                                    <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
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
                                        <div class="col-md-3 col-sm-6">
                                            <div class="select-city-dropdown dropdown">
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
                                        <div class="col-md-3 col-sm-6">
                                            <div class="price-filter">
                                                <div class="price-slider-amount">
                                                    <input type="text" class="form-control" id="amount" name="price" placeholder="Add Your Price">
                                                </div>
                                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all slider-range">
                                                    <div class="ui-slider-range ui-widget-header ui-corner-all">
                                                    </div>
                                                    <span class="ui-slider-handle ui-state-default ui-corner-all"></span>
                                                    <span class="ui-slider-handle ui-state-default ui-corner-all"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="search-btn">
                                                <button type="button" class="btn btn-pink">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="category-listing-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="category-listing-section">
                                        <div class="category-listing-dtl">
                                            <div class="category-listing-img">
                                                <a href="{{ route('vendorDetail') }}"><img src="{{asset('images/category-listing/category-list-2.jpg')}}" class="img-responsive" alt="category-img"></a>
                                            </div>
                                            <div class="category-info">
                                                <h6 class="category-dtl-heading"><a href="{{ route('vendorDetail') }}">Wedding Photography</a></h6>
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="category-listing-section">
                                        <div class="category-listing-dtl">
                                            <div class="category-listing-img">
                                                <a href="{{ route('vendorDetail') }}"><img src="{{asset('images/category-listing/category-list-3.jpg')}}" class="img-responsive" alt="category-img"></a>
                                            </div>
                                            <div class="category-info">
                                                <h6 class="category-dtl-heading"><a href="{{ route('vendorDetail') }}">Venue Vendor</a></h6>
                                                <div class="category-dtl-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Street Address, Name Of Town, 12345, Country.</div>
                                            </div>
                                        </div>
                                        <div class="tags tags-clr-one">Featured</div>
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="category-listing-section">
                                        <div class="category-listing-dtl">
                                            <div class="category-listing-img">
                                                <a href="{{ route('vendorDetail') }}"><img src="{{asset('images/category-listing/category-list-4.jpg')}}" class="img-responsive" alt="category-img"></a>
                                            </div>
                                            <div class="category-info">
                                                <h6 class="category-dtl-heading"><a href="{{ route('vendorDetail') }}">Venue Vendor</a></h6>
                                                <div class="category-dtl-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Street Address, Name Of Town, 12345, Country.</div>
                                            </div>
                                        </div>
                                        <div class="tags tags-clr-one">Featured</div>
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="category-listing-section">
                                        <div class="category-listing-dtl">
                                            <div class="category-listing-img">
                                                <a href="{{ route('vendorDetail') }}"><img src="{{asset('images/category-listing/category-list-5.jpg')}}" class="img-responsive" alt="category-img"></a>
                                            </div>
                                            <div class="category-info">
                                                <h6 class="category-dtl-heading"><a href="{{ route('vendorDetail') }}">Venue Vendor</a></h6>
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="category-listing-section">
                                        <div class="category-listing-dtl">
                                            <div class="category-listing-img">
                                                <a href="{{ route('vendorDetail') }}"><img src="{{asset('images/category-listing/category-list-6.jpg')}}" class="img-responsive" alt="category-img"></a>
                                            </div>
                                            <div class="category-info">
                                                <h6 class="category-dtl-heading"><a href="{{ route('vendorDetail') }}">Venue Vendor</a></h6>
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
                        <div class="pagination">
                            <ul>
                                <li class="active"><a href="#" class="btn btn-default">1</a></li>
                                <li><a href="#" class="btn btn-default">2</a></li>
                                <li><a href="#" class="btn btn-default">3</a></li>
                                <li><a href="#" class="btn btn-default">4</a></li>
                                <li><a href="#" class="btn btn-default"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end listing with left map -->
@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('js/jquery.mapit.js')}}"></script> <!-- mapit js-->
    <script>
        // Google Map Banner
        $(function() {
            $('#mct-map_canvas').mapit();
        });
    </script>
@endpush
