@extends('layouts.app')

@section('body')
    <!-- page banner -->
    <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="banner-dtl text-center">
                <h2 class="banner-heading">Real Wedding</h2>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Real Wedding Single</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- end page banner -->
    <!-- real wedding single listing -->
    <section id="real-wedding-single-listing" class="real-wedding-single-listing">
        <div class="container">
            <div class="real-wedding-single-listing-block">
                <div class="row">
                    <div class="col-md-9">
                        <div class="real-wedding-single-listing-img">
                            <img src="{{asset('images/couple-img.jpg')}}" class="img-responsive" alt="real-couple">
                            <div class="overlay-bg"></div>
                            <div class="real-weddding-couple">
                                <h3 class="couple-name">Caitlin &amp; Hentze</h3>
                            </div>
                        </div>
                        <div class="real-wedding-single-listing-dtl">
                            <p>Duis auctor finibus orci, ac convallis erat. Ut laoreet hendrerit lacinia. Maecenas sit amet libero egestas massa faucibus egestas ac ut ante. Phasellus nec elementum dui. Cras tortor diam, maximus at iaculis in, dapibus ac nunc.</p>
                            <p>Variations of passages of cenas non diam non elit tincidunt suscipit id id tortor. Phasellus ultrices vitae eros eget lobortis. Duis vestibulum augue quis iaculis sagittis. Nulla at condimentum augue. Aenean egestas auctor magna ac egestas.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered note alteration in some form, by injected humour, or randomised words which don't look even slightly our its embarrassing hidden in the middle of text which don't lookinge eventhe readable content.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed nisl facilisis, consectetur quam vitae, tempor urna. Cras et risus id nulla vestibulum fringilla. Aliquam porta rhoncus ex sed semper. Vestibulum orci turpis, condimentum egestas nisi eget, porta efficitur eros. Vivamus id nisl tortor. Nullam pulvinar dictum felis. Ut dignissim diam et suscipit suscipit.</p>
                            <p>Nullam faucibus semper lacus in facilisis. Donec luctus, diam sit amet consequat ultrices, odio sapien semper neque, in molestie massa neque vitae mi. Proin fringilla ultrices ligula ac tempus. Sed ac sapien non ante interdum pharetra at et lacus.</p>
                            <p>Nam vitae laoreet sem. Nullam nisi ante, iaculis nec diam id, auctor auctor dui. Nunc quis tincidunt ipsum. Curabitur convallis vitae metus vitae pulvinar. In in pulvinar risus. Proin congue elementum nibh sed vestibulum. Donec facilisis posuere pulvinar. Aliquam vitae eros eget justo dapibus eleifend quis nec dolor. Integer augue tellus, auctor quis lectus a, sagittis mollis ex.</p>
                        </div>
                        <div class="blog-comments comments">
                            <h3 class="blog-main-hedaing">Comments</h3>
                            <div class="media">
                                <ul>
                                    <li>
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-1.jpg')}}" alt="media-img">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Micheal Doe</h6>
                                            <div class="date">March 13,  2017 At 9:30 Am</div>
                                            <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            <a href="#" class="btn btn-reply">reply</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-2.jpg')}}" alt="media-img">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Elina Doe</h6>
                                            <div class="date">March 12,  2017 At 5:30 Pm</div>
                                            <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            <a href="#" class="btn btn-reply">reply</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-3.jpg')}}" alt="media-img">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">William Doe</h6>
                                            <div class="date">March 12,  2017 At 4:00 Pm</div>
                                            <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            <a href="#" class="btn btn-reply">reply</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="leave-reply-block">
                            <h5 class="blog-main-hedaing">Leave Reply</h5>
                            <div class="form-group">
                                <form id="comment-form" action="#">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" placeholder="YOUR NAME *">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="email" placeholder="EMAIL ADDRESS *">
                                        </div>
                                    </div>
                                    <textarea class="form-control" rows="3" id="comment" placeholder="YOUR COMMENT"></textarea>
                                    <button type="submit" class="btn btn-pink">Post Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="blog-sidebar">
                            <div class="widget blog-search text-right">
                                <form>
                                    <input type="search" id="search" class="form-control" placeholder="Enter Keyword">
                                    <button type="button" class="btn btn-pink">Go</button>
                                </form>
                            </div>
                            <div class="blog-latest-news real-wedding-latest-news">
                                <h4 class="blog-sidebar-heading">Related Real Wedding</h4>
                                <div class="blog-news">
                                    <div class="blog-news-img rtd-real-wedd-img">
                                        <img src="{{asset('images/blog-page/latest-news-2.jpg')}}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl rtd-real-wedd-dtl">
                                        <a href="#">Caitlin &amp; Isabella</a>
                                        <div class="date">March 11, 2017</div>
                                    </div>
                                </div>
                                <div class="blog-news">
                                    <div class="blog-news-img rtd-real-wedd-img">
                                        <img src="{{asset('images/blog-page/latest-news-3.jpg')}}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl rtd-real-wedd-dtl">
                                        <a href="#">Jon &amp; Sean</a>
                                        <div class="date">March 20, 2017</div>
                                    </div>
                                </div>
                                <div class="blog-news">
                                    <div class="blog-news-img rtd-real-wedd-img">
                                        <img src="{{asset('images/blog-page/latest-news-1.jpg')}}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl rtd-real-wedd-dtl">
                                        <a href="#">Sams &amp; Mariya </a>
                                        <div class="date">March 25, 2017</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-latest-news real-wedding-latest-news">
                                <h4 class="blog-sidebar-heading">Related Wedding</h4>
                                <div class="blog-news">
                                    <div class="blog-news-img">
                                        <img src="{{asset('images/blog-page/latest-news-1.jpg')}}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl">
                                        <a href="#">Lewers &amp; Isabella</a>
                                        <div class="date">March 13, 2017</div>
                                    </div>
                                </div>
                                <div class="blog-news">
                                    <div class="blog-news-img">
                                        <img src="{{asset('images/blog-page/latest-news-2.jpg')}}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl">
                                        <a href="#">Caitlin &amp; Hentze</a>
                                        <div class="date">March 13, 2017</div>
                                    </div>
                                </div>
                                <div class="blog-news">
                                    <div class="blog-news-img">
                                        <img src="{{asset('images/blog-page/latest-news-3.jpg')}}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl">
                                        <a href="#">Castleton &amp; Sean</a>
                                        <div class="date">March 13, 2017</div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-tab">
                                <h4 class="blog-sidebar-heading">Popular Tags</h4>
                                <div class="tabs">
                                    <a href="#" class="btn btn-default"><span class="badge">Transport</span></a>
                                    <a href="#" class="btn btn-default"><span class="badge">Venue</span></a>
                                    <a href="#" class="btn btn-default"><span class="badge">Dress</span></a>
                                    <a href="#" class="btn btn-default"><span class="badge">Jewelery</span></a>
                                    <a href="#" class="btn btn-default"><span class="badge">Photography</span></a>
                                </div>
                            </div>
                            <div class="widget our-archives">
                                <h4 class="blog-sidebar-heading">Our Archives</h4>
                                <ul>
                                    <li><a href="#">April<span>(05)</span></a></li>
                                    <li><a href="#">March<span>(13)</span></a></li>
                                    <li><a href="#">January<span>(07)</span></a></li>
                                    <li><a href="#">December<span>(02)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end real wedding single listing -->
@endsection
