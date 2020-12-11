@extends('layouts.homework-master')






@section('featured')
    @foreach($products as $product)
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="../img/featured/feature-1.jpg">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">{{$product->name}}</a></h6>
                <h5>{{$product->price}}</h5>
            </div>
        </div>
    </div>
    @endforeach

    <form action="{{route('product.export')}}" method="get">
    <button type="submit" class="site-btn">URUNLERI INDIR</button>
        <a href="/indir">URUNLERI INDIR</a>
    </form>

@endsection




@section('banner')
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
            <img src="../img/banner/banner-1.jpg" alt="">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
            <img src="../img/banner/banner-2.jpg" alt="">
        </div>
    </div>
@endsection




@section('Lates_Products')
    <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
            <h4>Latest Products</h4>
            <div class="latest-product__slider owl-carousel">
                <div class="latest-prdouct__slider__item">
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-1.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-2.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-3.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                </div>
                <div class="latest-prdouct__slider__item">
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-1.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-2.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-3.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('Top_Products')
    <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
            <h4>Top Rated Products</h4>
            <div class="latest-product__slider owl-carousel">
                <div class="latest-prdouct__slider__item">
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-1.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-2.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-3.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                </div>
                <div class="latest-prdouct__slider__item">
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-1.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-2.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-3.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('Review_Products')
    <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
            <h4>Top Rated Products</h4>
            <div class="latest-product__slider owl-carousel">
                <div class="latest-prdouct__slider__item">
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-1.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-2.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-3.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                </div>
                <div class="latest-prdouct__slider__item">
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-1.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-2.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                    <a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="../img/latest-product/lp-3.jpg" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>Crab Pool Security</h6>
                            <span>$30.00</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('blog')
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title from-blog__title">
                <h2>From The Blog</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
                <div class="blog__item__pic">
                    <img src="../img/blog/blog-1.jpg" alt="">
                </div>
                <div class="blog__item__text">
                    <ul>
                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                        <li><i class="fa fa-comment-o"></i> 5</li>
                    </ul>
                    <h5><a href="#">Cooking tips make cooking simple</a></h5>
                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
                <div class="blog__item__pic">
                    <img src="../img/blog/blog-2.jpg" alt="">
                </div>
                <div class="blog__item__text">
                    <ul>
                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                        <li><i class="fa fa-comment-o"></i> 5</li>
                    </ul>
                    <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
                <div class="blog__item__pic">
                    <img src="../img/blog/blog-3.jpg" alt="">
                </div>
                <div class="blog__item__text">
                    <ul>
                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                        <li><i class="fa fa-comment-o"></i> 5</li>
                    </ul>
                    <h5><a href="#">Visit the clean farm in the US</a></h5>
                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                </div>
            </div>
        </div>
    </div>
@endsection
