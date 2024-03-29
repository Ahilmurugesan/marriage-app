@extends('layouts.app')

@section('body')
    <!-- page banner -->
    <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="banner-dtl text-center">
                <h2 class="banner-heading">Latest Blog</h2>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- end page banner -->
    <!-- blog single -->
    <section class="pt120 pb80">
        <div class="container">
            <div class="blog-single-block">
                <div class="row">
                    <div class="col-md-9">
                        <div class="single-block">
                            <div class="blog-img">
                                <img src="{{asset('images/blog-single-page/blog-single-1.jpg') }}" class="img-responsive" alt="blog-img">
                                <div class="meta-tag">March 12, 2017</div>
                            </div>
                            <div class="blog-dtl">
                                <h4 class="blog-heading">exerci tationem ullam corporis suscipit laboriosam nisi ut</h4>
                                <p class="blog-dis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                <p class="blog-dis">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                <blockquote>
                                    “ It's lovely being a parent and being in a strong marriage with somebody who is your best friend. ”
                                </blockquote>
                            </div>
                            <div class="blog-dtl mrgn-bottom-35">
                                <p class="blog-dis">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                </p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="blog-dtl-img">
                                            <img src="{{asset('images/blog-single-page/blog-single-2.jpg') }}" class="img-responsive" alt="blog-img">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="blog-dtl-img">
                                            <img src="{{asset('images/blog-single-page/blog-single-3.jpg') }}" class="img-responsive" alt="blog-img">
                                        </div>
                                    </div>
                                </div>
                                <p class="blog-dis">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidun.
                                </p>
                            </div>
                            <div class="blog-dtl-social">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="blog-dtl-tags">
                                            <div class="tags-heading"><span>Tags :</span><a href="#">Wedding Venue</a>, <a href="#">Wedding Dress</a>, <a href="#">Photography</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="social-btns text-right">
                                            <li><a class="btn facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="btn twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="btn google" href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                                            <li><a class="btn linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-related-post">
                            <h3 class="blog-main-hedaing">Related Post</h3>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="related-post">
                                        <div class="blog-related-img">
                                            <a href="#"><img src="{{asset('images/blog-single-page/blog-related-1.jpg') }}" class="img-responsive" alt="related-img"></a>
                                        </div>
                                        <div class="related-dtl">
                                            <h6 class="related-dtl-heading"><a href="#">Nostrud exe rcitation ulco laboris nisi ut aliq</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="related-post">
                                        <div class="blog-related-img">
                                            <a href="#"><img src="{{asset('images/blog-single-page/blog-related-2.jpg') }}" class="img-responsive" alt="related-img"></a>
                                        </div>
                                        <div class="related-dtl">
                                            <h6 class="related-dtl-heading"><a href="#">Adipisci velit sed quianu mquam eius modi</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="related-post">
                                        <div class="blog-related-img">
                                            <a href="#"><img src="{{asset('images/blog-single-page/blog-related-3.jpg') }}" class="img-responsive" alt="related-img"></a>
                                        </div>
                                        <div class="related-dtl">
                                            <h6 class="related-dtl-heading"><a href="#">Nisi ut aliquip eommodo consequat duis aute</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comments comments">
                            <h3 class="blog-main-hedaing">Comments</h3>
                            <div class="media">
                                <ul>
                                    <li>
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-1.jpg') }}" alt="media-img">
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
                                                <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-2.jpg') }}" alt="media-img">
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
                                                <img class="media-object" src="{{asset('images/blog-single-page/blog-comment-3.jpg') }}" alt="media-img">
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
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" placeholder="YOUR NAME *">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="email" placeholder="EMAIL ADDRESS *">
                                        </div>
                                    </div>
                                    <textarea class="form-control" rows="3" id="comment" placeholder="YOUR COMMENT"></textarea>
                                    <button type="button" class="btn btn-pink">Post Comment</button>
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
                            <div class="widget">
                                <h4 class="blog-sidebar-heading">Blog Categories</h4>
                                <ul>
                                    <li><a href="#">Wedding Venue <span>(10)</span></a></li>
                                    <li><a href="#">Wedding Cakes <span>(07)</span></a></li>
                                    <li><a href="#">Wedding Dress <span>(15)</span></a></li>
                                    <li><a href="#">Transport <span>(13)</span></a></li>
                                    <li><a href="#">Jewelery <span>(05)</span></a></li>
                                </ul>
                            </div>
                            <div class="widget blog-latest-news">
                                <h4 class="blog-sidebar-heading">Latest Blogs</h4>
                                <div class="blog-news">
                                    <div class="blog-news-img">
                                        <img src="{{asset('images/blog-page/latest-news-1.jpg') }}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl">
                                        <h6 class="blog-news-dtl-heading"><a href="#">Veritatis et qsrch beatae vitae</a></h6>
                                        <div class="date">March 13, 2017</div>
                                    </div>
                                </div>
                                <div class="blog-news">
                                    <div class="blog-news-img">
                                        <img src="{{asset('images/blog-page/latest-news-2.jpg') }}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl">
                                        <h6 class="blog-news-dtl-heading"><a href="#">Numqua eius modi tempora incid</a></h6>
                                        <div class="date">March 13, 2017</div>
                                    </div>
                                </div>
                                <div class="blog-news">
                                    <div class="blog-news-img">
                                        <img src="{{asset('images/blog-page/latest-news-3.jpg') }}" class="img-responsive" alt="latest-news">
                                    </div>
                                    <div class="blog-news-dtl">
                                        <h6 class="blog-news-dtl-heading"><a href="#">Vel illum qui dolo eum fugiat</a></h6>
                                        <div class="date">March 13, 2017</div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget popular-tab">
                                <h4 class="blog-sidebar-heading">Popular Tags</h4>
                                <div class="tabs">
                                    <a href="#" class="btn btn-default"><span class="badge">Transport</span></a>
                                    <a href="#" class="btn btn-default"><span class="badge">Venue</span></a>
                                    <a href="#" class="btn btn-default"><span class="badge">Dress</span></a>
                                    <a href="#" class="btn btn-default"><span class="badge">Jewelery</span></a>
                                    <a href="#" class="btn btn-default"><span class="badge">Photography</span></a>
                                </div>
                            </div>
                            <div class="widget">
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
    <!-- end blog single -->
@endsection
