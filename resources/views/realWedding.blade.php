@extends('layouts.app')

@section('body')
    <!-- page banner -->
    <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="banner-dtl text-center">
                <h2 class="banner-heading">Real Wedding Listing</h2>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Real Wedding Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- end page banner -->
    <!-- real wedding listing -->
    <section id="real-wedding-listing" class="real-wedding-listing">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-1.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Caitlin &amp; Hentze</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-2.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Lewers &amp; Isabella</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-3.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Castleton &amp; Sean</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-2.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Lewers &amp; Isabella</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-3.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Caitlin &amp; Hentze</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-1.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Castleton &amp; Sean</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-1.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Caitlin &amp; Hentze</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-2.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Castleton &amp; Sean</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="upcoming-wedding-block real-wedding-block">
                        <div class="upcoming-wedd-img">
                            <a href="{{ route('real-wedding-single') }}"><img src="{{asset('images/real-wedding-listing/upcoming-wedd-3.jpg')}}" class="img-responsive" alt="upcoming-wedding"></a>
                        </div>
                        <div class="upcoming-wedding-dtl text-center">
                            <div class="date">March 28, 2017</div>
                            <h4 class="wdding-couple"><a href="{{ route('real-wedding-single') }}">Lewers &amp; Isabella</a></h4>
                            <img src="{{asset('images/real-wedding-listing/sep-1.png')}}" class="img-responsive" alt="icon">
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
    </section>
    <!-- end real wedding listing -->
@endsection
