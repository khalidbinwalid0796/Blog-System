@extends('layouts.frontend.app')

@section('title','Home')

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
    <style>
        .favorite_posts{
            color: blue;
        }
    </style>
@endpush

@section('content')
    <div class="main-slider">
        <div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
             data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
             data-swiper-breakpoints="true" data-swiper-loop="true" >
            <div class="swiper-wrapper">


                <div class="swiper-slide">
                    <a class="slider-category" href="">
                        <div class="blog-image"><img src="" alt=""></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b></b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->

                <div class="swiper-slide">
                    <strong>No Data Found :(</strong>
                </div><!-- swiper-slide -->


            </div><!-- swiper-wrapper -->

        </div><!-- swiper-container -->

    </div><!-- slider -->

    <section class="blog-area section">
        <div class="container">

            <div class="row">


                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="" alt=""></div>

                            <a class="avatar" href=""><img src="" alt="Profile Image"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href=""><b></b></a></h4>

                                <ul class="post-footer">

                                    <li>


                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-chatbubble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-eye"></i></a>
                                    </li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-12 col-md-12">
                    <div class="card h-100">
                        <div class="single-post post-style-1 p-2">
                            <strong>No Post Found :(</strong>
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->


            </div><!-- row -->

            <a class="load-more-btn" href=""><b>LOAD MORE</b></a>

        </div><!-- container -->
    </section><!-- section -->
@endsection

@push('js')

@endpush
