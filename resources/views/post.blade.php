@extends('layouts.index')

@section('content')
    <!--Preloader Start-->
    <div class="preloader">
        <div class="loader">
            <!--Your Name-->
            <h4>dsds</h4>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--Preloader End-->

    <div id="page">

        <!--Header Start-->
        <header>
            <div class="header-content">

                <!--Mobile Header-->
                <div class="header-mobile">
                    <a class="header-toggle"><i class="fas fa-bars"></i></a>
                    <h2></h2>

                </div>

                <!--Main Header-->
                <div class="header-main" data-simplebar>
                    <div class="image-container">
                        <h2 class="header-name"></h2>

                        <img src="{{asset('img/profile-img.jpg')}}" alt="profile-pic">
                    </div>

                    <!--Nav Menus-->
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="{{route('index_view')}}#home" class="pt-link active"><span class="nav-menu-icon"><i
                                            class="lnr lnr-home"></i></span>خانه </a></li>
                            <li><a href="{{route('index_view')}}#about" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-user"></i></span>درباره من</a></li>
                            <li><a href="{{route('index_view')}}#resume" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-license"></i></span>رزومه</a></li>
                            <li><a href="{{route('index_view')}}#portfolio" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-briefcase"></i></span>نمونه کاران</a></li>
                            <li><a href="{{route('index_view')}}#blog" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-book"></i></span>بلاگ</a>
                            </li>
                            <li><a href="{{route('index_view')}}#contact" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-envelope"></i></span>تماس</a></li>
                        </ul>
                    </nav>

                    <!--Nav Footer-->
                    <div class="nav-footer">
                        <!--Social Links-->
                        <ul class="social">
                            <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance-square"></i></a></li>
                        </ul>
                        <!--Copyright Text-->
                        <div class="copy">
                            <p>طراحش شده توسط<br>{{cache()->get('user')->name}}</p>
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!--Header End-->

        <div id="main" class="site-main">

            <div class="blog-page">
                <div class="blog-image">
                    <img src="{{asset('img/blog/blog-page-img.jpg')}}" alt="">
                </div>
                <div class="blog-container">
                    <div class="row">

                        <!--Blog Heading Start-->
                        <div class="blog-heading col-md-10 offset-md-2">
                            <span class="cat">Fashion</span>
                            <h1>{{$post->title}}</h1>
                            <span class="blog-date">January 20, 2018</span>
                        </div>
                        <!--Blog Heading Start-->

                        <!--Blog Content Start-->
                        <div class="blog-content col-md-10 offset-md-1">
                            {{$post->body}}
                        </div>
                        <!--Blog Content End-->

                        <!--Blog Comments Start-->
                        <div class="blog-comments col-md-8 offset-md-2">
                            <h4 class="mb-40">Post Comments</h4>
                            <ul class="comment-list">

                                <li class="comment">

                                    <div class="author-img">
                                        <img src="{{asset('img/blog/img-1.jpg')}}" alt="">
                                    </div>
                                   @foreach($post->comments as $comment)
                                        <div class="comment-text">
                                            <h6 class="author"></h6>
                                            <span class="date">June 10, 2018 at 5:39 am</span>
                                            <p>Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat
                                                flexitarian
                                                four loko </p>
                                        </div>
                                   @endforeach

                                </li>
                            </ul>
                        </div>
                        <!--Blog Comments End-->

                        <div class="comment-form col-lg-8 offset-lg-2">

                            <h4 class="mt-40 mb-40">نظر شما</h4>

                            @if(session()->has('msg'))
                                <div class="alert alert-info">
                                    {{ Session::get('msg') }}
                                </div>
                            @endif

                            <form action="{{route('comment')}}" method="post">
                                @csrf

                                <div class="row">
                                    <!--Name Field-->
                                    <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field" type="text" id="name" name="title"
                                                       required/>
                                                <label class="input__label" for="name">نام </label>
                                            </span>
                                    </div>

                                    <!--Email Field-->
                                    <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field" type="text" id="email" name="email"
                                                       required/>
                                                <label class="input__label" for="email">ادرس ایمیل </label>
                                            </span>
                                    </div>

                                    <!--Message Box-->
                                    <div class="col-md-12 mb-30">
                                            <span class="input">
                                                <textarea class="input__field" id="message" name="body" rows="5"
                                                          required></textarea>
                                                <label class="input__label" for="message">کامنت شما</label>
                                            </span>
                                    </div>

                                    <!--Submit Button-->
                                    <div class="col-md-12">
                                        <button class="btn-main">Post Comment</button>
                                    </div>

                                </div>
                                <input name="post_id" value="{{$post->id}}" type="hidden">
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
