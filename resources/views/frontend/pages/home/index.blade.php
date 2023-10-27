@extends('frontend.layout.app')

@section('title')
    Home Page
@endsection

@section('content')
    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- menu category -->
            <!-- slide show -->
            <div class="section banner">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('/') }}frontend/img/slider1.jpg" title="#caption1" alt="Slideshow image">
                        </a>
                        @foreach ($posts as $item)
                            <a href="#">
                                <img class="img-responsive" src="{{asset('/storage/Post-slider-images/'.$item->slide_image)}}" title="#caption2" alt="Slideshow image">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    
                    <section class="page-home">
                        <!-- FEATURED CATEGORIES -->
                        <div class="featured-category">
                            <div class="container py-5">
                                <div class="tab-content text-center">
                                    <div class="title-product">
                                        <h2>Buy more, save more</h2>
                                    </div>
                                    <div class="featured owl-carousel owl-theme">
                                        @foreach ($posts as $item)
                                            <div class="content-category">
                                                <div class="content-img">
                                                    <a href="product-grid-sidebar-left.html">
                                                        <img class="img-fluid" src="{{asset('/storage/Post-header-images/'.$item->header_image)}}" alt="Side Table" title="Side Table">
                                                    </a>
                                                </div>
                                                <div class="info-category">
                                                    <h3>
                                                        <a href="#">{{ $item->title }}</a>
                                                    </h3>
                                                    <p>{{ $item->sub_title }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section> 
                </div> 
            </div> 
        </div>
        
        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <!-- product living room -->
                        <div class="section living-room">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                <h3 class="">Header Images Show</h3>
                                    <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                        <div class="grouptab row">
                                            <div class="categoriestab-left product-tab col-md-12">
                                                <div class="tab-content">
                                                    <div id="new" class="tab-pane fade in active show">
                                                        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            @foreach ($posts as $item)
                                                               <div class="item text-center">
                                                                <div class="product-miniature first-item js-product-miniature item-one">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{asset('/storage/Post-header-images/'.$item->header_image)}}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{asset('/storage/Post-header-images/'.$item->header_image)}}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">{{ $item->sub_title }}</a>
                                                                            </div>
                                                                            <div class="rating py-2">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">120 BDT</span>
                                                                                    <del class="regular-price">120 BDT</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- banner -->
                       
                        <!-- recent posts -->
                        <div class="container">
                            <div class="section recent-post">
                                <div class="title-block">Thumbnail Image</div>
                                <div class="row">
                                    @foreach ($posts as $item)
                                    <div class="col-md-4">
                                        <div class="item-post">
                                            <div class="thumbnail-img">
                                                <a href="blog-detail.html">
                                                    <img src="{{asset('/storage/Post-thumbnails/'.$item->thumbnail)}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-info">
                                                    <span class="datetime">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span>{{ date('M D, Y', strtotime($item->created_at)) }}</span>
                                                    </span>
                                                </div>
                                                <div class="post-title">
                                                    <a href="blog-detail.html">{{ $item->sub_title }}</a>
                                                </div>
                                                <div class="post-desc">
                                                    {{ $item->description }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- partner -->
                            <div class="section introduct-logo">
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection