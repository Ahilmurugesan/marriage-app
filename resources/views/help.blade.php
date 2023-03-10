@extends('layouts.app')

@section('body')
    <!-- page banner -->
    <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="banner-dtl text-center">
                <h2 class="banner-heading">Help</h2>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Help</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- end page banner -->
    <section id="help-page" class="help-page-main-block">
        <div class="container">
            <div class="help-service-main-block">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-us-block help-service-block">
                            <div class="contact-us-icon">
                                <img src="images/contact-us/contact-icon-1.png" class="img-responsive" alt="contact-icon">
                            </div>
                            <div class="contact-us-dtl text-center">
                                <h6 class="contact-heading">Our Address</h6>
                                <div class="contact-sub-heading">824 Bel Meadow Drive, California, USA</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-us-block help-service-block help-service-block-two">
                            <div class="contact-us-icon">
                                <img src="images/contact-us/contact-icon-2.png" class="img-responsive" alt="contact-icon">
                            </div>
                            <div class="contact-us-dtl text-center">
                                <h6 class="contact-heading">Call Us</h6>
                                <a href="tel:#">+(00) 123 456 78 OR</a>
                                <a href="tel:#">+(00) 123 456 78</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-us-block help-service-block">
                            <div class="contact-us-icon">
                                <img src="images/contact-us/contact-icon-3.png" class="img-responsive" alt="contact-icon">
                            </div>
                            <div class="contact-us-dtl text-center">
                                <h6 class="contact-heading">Mail Us</h6>
                                <a href="mailto:#">Info@Weddlist.com</a>
                                <a href="mailto:#">Support@Weddlist.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="help-faq-block">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-group faq-panel" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h6 class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Which Payment Methods Are Supported?
                                            <span class="btn btn-default faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h6 class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Can I cancel or refund my subscription?
                                            <span class="btn btn-default faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h6 class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            What uisque ulrices eficiturn interdum justo?
                                            <span class="btn btn-default faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h6 class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Why tibulum consectetur lorem sagittis?
                                            <span class="btn btn-default faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-group faq-panel" id="accordion2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne-tw">
                                    <h6 class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-tw" aria-expanded="true" aria-controls="collapseOne-tw">
                                            Which Payment Methods Are Supported?
                                            <span class="btn btn-default faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne-tw" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-tw">
                                    <div class="panel-body">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo-tw">
                                    <h6 class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-tw" aria-expanded="true" aria-controls="collapseTwo-tw">
                                            Can I cancel or refund my subscription?
                                            <span class="btn btn-default faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo-tw" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-tw">
                                    <div class="panel-body">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree-tw">
                                    <h6 class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree-tw" aria-expanded="true" aria-controls="collapseThree-tw">
                                            What uisque ulrices eficiturn interdum justo?
                                            <span class="btn btn-default faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree-tw" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-tw">
                                    <div class="panel-body">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour-tw">
                                    <h6 class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour-tw" aria-expanded="true" aria-controls="collapseFour-tw">
                                            Why tibulum consectetur lorem sagittis?
                                            <span class="btn btn-default faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFour-tw" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour-tw">
                                    <div class="panel-body">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt80">
                <div class="section text-center">
                    <h3 class="section-heading">Feel Free To Contact Us</h3>
                    <p class="section-sub-heading">Sed ut perspiciatis unde omnis iste natus error</p>
                </div>
                <div class="contact-form form-group">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" placeholder="YOUR NAME *"/>
                                <input type="text" class="form-control" id="phone" placeholder="YOUR PHONE"/>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="email" placeholder="YOUR EMAIL ADDRESS *"/>
                                <input type="text" class="form-control" id="subject" placeholder="SUBJECT"/>
                            </div>
                        </div>
                        <textarea id="message" class="form-control" placeholder="YOUR MESSAGE *"></textarea>
                        <div class="message-button text-center">
                            <button type="submit" class="btn btn-pink">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
