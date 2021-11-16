@extends('layouts.index')
@section('title')
    {{cache()->get('user')->name}}-{{cache()->get('user')->lastname}}
@endsection


@section('content')

    <!--Preloader Start-->
    <div class="preloader">
        <div class="loader">
            <!--Your Name-->
            <h4>{{cache()->get('user')->name}}-{{cache()->get('user')->lastname}}</h4>
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
                        <h2 class="header-name">{{cache()->get('user')->name}}</h2>

                        <img src="{{asset('assets/img/profile')}}/{{cache()->get('user')->avatar}}" alt="profile-pic">
                    </div>


                    <!--Nav Menus-->
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="#home" class="pt-link active"><span class="nav-menu-icon"><i
                                            class="lnr lnr-home"></i></span>خانه </a></li>
                            <li><a href="#about" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-user"></i></span>درباره من</a></li>
                            <li><a href="#resume" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-license"></i></span>رزومه</a></li>
                            <li><a href="#portfolio" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-briefcase"></i></span>نمونه کاران</a></li>
                            <li><a href="#blog" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-book"></i></span>بلاگ</a>
                            </li>
                            <li><a href="#contact" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-envelope"></i></span>تماس</a></li>

                            @if(auth()->check() && auth()->user()->is_admin ==1)
                                <li><a href="{{route('index')}}" class="pt-link"><span class="nav-menu-icon"><i
                                                class="lnr lnr-envelope"></i></span>پنل ادمین</a></li>
                            @endif
                        </ul>
                    </nav>

                    <!--Nav Footer-->
                    <div class="nav-footer">
                        <!--Social Links-->
                        <ul class="social">
                            <li><a href="{{cache()->get('user')->facebook}}"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li><a href="{{cache()->get('user')->twitter}}"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li><a href="{{cache()->get('user')->youtube}}"><i class="fab fa-youtube-square"></i></a>
                            </li>
                            <li><a href="{{cache()->get('user')->instagram}}"><i
                                        class="fab fa-instagram-square"></i></a></li>
                            <li><a href="{{cache()->get('user')->linkedin}}"><i class="fab fa-linkedin"></i></a></li>

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

        <!--Main Start-->
        <div id="main" class="site-main">

            <!--Banner Section Start-->
            <section id="home" class="banner-section pt-page"
                     style="background-image: url('img/background/home-bg.jpg')">

                <div id="video-container"></div>

                <div class="banner-content">
                    <!--Banner Text-->
                    <h1 class="mb-20">{{cache()->get('user')->lastname}}<span>{{cache()->get('user')->name}}</span></h1>

                    <!--Animated Text-->

                    <p class="cd-headline clip is-full-width">

                        <span class="cd-words-wrapper">
                            @foreach($design as  $des)
                                <b class="is-visible">{{$des->title}}</b>
                            @endforeach
                        </span>

                    </p>

                </div>

            </section>
            <!--Banner Section End-->


            <!--About Section Start-->
            <section id="about" class="about-section pt-page">
                <div class="section-container">
                    <!--Page Heading-->
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-user"></i></span>
                        <h2>درباره من </h2>
                    </div>

                    <!-- About Info Row Start-->
                    <div class="row about mb-70">

                        <div class="col-lg-8">
                            <!--Personal Intro-->

                            <h3 class="mb-20">{{cache()->get('user')->residence}}</h3>
                            <p>{!! cache()->get('user')->about !!}</p>

                            <!--Signature Image-->
                            <div class="signature mt-20">
                                <img src="img/signature-white.png" alt="">
                            </div>
                        </div>

                        <!--Personal Info-->
                        <div class="col-lg-4">
                            <div class="about-info">
                                <h3 class="mb-20">اطلاعات فردی</h3>
                                <ul>
                                    <li>
                                        <span class="value">{{cache()->get('user')->name}}</span>
                                        <span class="title">نام</span>
                                    </li>
                                    {{--@todo--}}
                                    <li>
                                        <span class="value">26 </span>
                                        <span class="title">سن</span>
                                    </li>

                                    <li>
                                        <span class="value">{{cache()->get('user')->residence}}</span>
                                        <span class="title">محل سکونت</span>
                                    </li>
                                    <li>
                                        <span class="value">{{cache()->get('user')->address}}</span>
                                        <span class="title">آدرس</span>
                                    </li>
                                    <li>
                                        <span class="value">{{cache()->get('user')->email}}</span>
                                        <span class="title">ایمیل</span>
                                    </li>
                                    <li>
                                        <span class="value">{{cache()->get('user')->phone}}</span>
                                        <span class="title">شماره تلفن</span>
                                    </li>

                                </ul>
                                <div class="resume-button mt-30">
                                    <a class="btn-main" href="#">دانلود رزومه</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Info Row End-->

                    <!--Services Row Start-->
                    <div class="row services mb-30">
                        <div class="col-md-12">
                            <div class="subheading">
                                <h3>سرویس ها</h3>
                            </div>
                        </div>

                        <!--Service Item-->
                        @foreach($services as $service)
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="{!! $service->icon !!}" style="color: Tomato;"></i>
                                    </div>
                                    <h4>{!! $service->title !!}</h4>
                                    <p>{!! $service->body !!}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!--Services Row End-->

                    <!--Clients Row Start-->
                    <div class="row clients mb-70">
                        <div class="col-md-12">
                            <div class="subheading">
                                <h3>همکاران</h3>
                            </div>
                        </div>

                        <div class="owl-carousel owl-theme">
                        @foreach($client as $cli)
                            <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="{{$cli->address}}">
                                        <img src="{{asset('assets/img/clients')}}/{{$cli->avatar}}"
                                             alt="{{$cli->title}}">
                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <!--Clients Row End-->

                    <!--Testimonials Row Start-->
                    <div class="row testimonials mb-50">
                        <div class="col-md-12">
                            <div class="subheading">
                                <h3>نظر کاربران</h3>
                            </div>
                            <div class="owl-carousel owl-theme">
                            @foreach($user_comments as $user_comment)

                                <!--Testimonail Item-->
                                    @foreach($user_comment->comments as $users)
                                        <div class="testimonial-item">
                                            <div class="testimonial-content">
                                                <p>{{$users->body}}</p>
                                            </div>
                                            <div class="testimonial-meta">

                                                <div class="meta-info">
                                                    <h4>{{$user_comment->email}}</h4>
                                                    <p>{{$users->title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                        <!--Testimonials Row End-->
                        <div class="comment-form col-lg-12 offset-lg-12">

                            <h4 class=" mt-40 mb-40">ارسال نظر </h4>
                            @if(session()->has('msg'))
                                <div class="alert alert-info">
                                    {{ Session::get('msg') }}
                                </div>
                            @endif
                            <form dir="rtl" action="{{route('comment')}}" method="post">
                                @csrf

                                <div class="row">
                                    <!--Name Field-->
                                    <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field" type="text" id="name" name="title"
                                                       required/>
                                                <label class="input__label" for="name">موضوع </label>
                                            </span>
                                    </div>

                                    <!--Email Field-->
                                    <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field" type="text" id="email" name="email"
                                                       required/>
                                                <label class="input__label" for="email">ایمیل</label>
                                            </span>
                                    </div>

                                    <!--Message Box-->
                                    <div class="col-md-12 mb-30">
                                            <span class="input">
                                                <textarea class="input__field" id="message" name="body" rows="5"
                                                          required></textarea>
                                                <label class="input__label" for="message">ارسال نظر</label>
                                            </span>
                                    </div>
                                    <input type="hidden" value="{{$user->id}}" name="user_id">
                                    <!--Submit Button-->
                                    <div class="col-md-12">
                                        <button class="btn-main">ارسال نظر</button>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </section>
            <!--About Section Start-->


            <!--Resume Section Start-->
            <section id="resume" class="resume-section pt-page">
                <div class="section-container">
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-license"></i></span>
                        <h2>رزومه من </h2>
                    </div>

                    <!--Education & Experience Row Start-->


                    <div class="row mb-20">
                        <!--Experience Column Start-->

                        @foreach($cv as $c)
                            <div class="col-lg-6">
                                <div class="">
                                    <h3></h3>
                                </div>
                                <ul class="experience">

                                    <!--Experience Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>{{$c->title}}</h4>
                                            <h5>{{$c->company}}</h5>
                                            <p class="info">
                                                {!! $c->body !!}
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">{{$c->from}}</span>
                                            <span class="from">{{$c->to}}</span>
                                        </span>
                                    </li>


                                </ul>
                            </div>
                        @endforeach

                    </div>
                    <!--Education & Experience Row End-->


                    <!--Skills Row Start-->
                    <div class="row">

                        @foreach($design as $des)
                            <div class="col-lg-6 skills">
                                <div class="skill-item">
                                    <h4 class="progress-title">{{$des->title}}</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped " role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: {{$des->style}}%" >
                                            <div class="progress-value">91%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--Skills Row End-->
                </div>
            </section>
            <!--Resume Section End-->


            <!--Porfolio Section Start-->
            <section id="portfolio" class="portfolio-section pt-page">
                <div class="section-container">

                    <!--Page Heading-->
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-briefcase"></i></span>
                        <h2>نمونه کارها</h2>
                    </div>

                    <div class="row">
                        <!--Portfolio Filter-->
                        <div class="col-md-12 portfolio-filter text-center">
                            <ul>
                                <li class="active" data-filter="*">همه نمونه کارها </li>
                                @foreach($category as $cat)
                                    <li data-filter=".cat-{{$cat->id}}">{{$cat->title}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!--Portfolio Items-->
                    <div class="row portfolio-items mb-50">
                        @foreach($portfolio as $port)

                        <!--Portfolio Item-->
                            <div class="@foreach($port->categories as $cat)
                                cat-{{$cat->id}}
                                @endforeach item col-lg-4 col-sm-6 ">
                                <a class="ajax-link" href="{{route('portfolio_view',$port->slug)}}">
                                    <figure>
                                        <img src="{{asset('img/portfolio/avatar')}}/{{($port->avatar)}}"
                                             alt="">
                                        <figcaption>
                                            <h4>{{$port->title}}</h4>
                                            <p>{{$port->client}}</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--Porfolio Section End-->


            <!--Blog Section Start-->
            <section id="blog" class="blog-section pt-page">
                <div class="section-container">

                    <!--Page Heading-->
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-book"></i></span>
                        <h2>پست ها </h2>
                    </div>

                    <div class="row blogs-masonry">

                        @foreach($posts as $post)

                            <div class="col-lg-4 col-sm-6">
                                <a href="{{route('show',$post->slug)}}" class="blog-item">
                                    <div class="blog-image">
                                        <img src="{{asset('img/blog/avatar')}}/{{$post->avatar}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <span class="cat">{{$post->user->name}}-{{$post->user->lastname}}</span>
                                        <h4 class="blog-title">{{$post->title}}</h4>
                                        <div class="blog-date">{{$post->created_at}}</div>
                                    </div>
                                </a>
                            </div>

                        @endforeach
                    </div>
                </div>
            </section>
            <!--Blog Section End-->

            <!--Contact Section Start-->
            <section id="contact" class="contact-section pt-page">
                <div class="section-container">

                    <!--Page Heading-->
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-envelope"></i></span>
                        <h2>تماس با ما</h2>
                    </div>

                    <!--Form Row-->
                    <div class="row mb-70">
                        <div class="col-lg-12  offset-lg-2">
                            <div class="subheading">
                                <h3>ارسال ایمیل</h3>
                            </div>

                            <!--Form Start-->
                            <div class="comment-form col-lg-12 offset-lg-12">

                                <h4 class=" mt-40 mb-40">ارسال نظر </h4>
                                @if(session()->has('msg'))
                                    <div class="alert alert-info">
                                        {{ Session::get('msg') }}
                                    </div>
                                @endif
                                <form dir="auto" action="{{route('comment')}}" method="post">
                                    @csrf

                                    <div class="row">
                                        <!--Name Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field" type="text" id="name" name="title"
                                                       required/>
                                                <label class="input__label" for="name">موضوع </label>
                                            </span>
                                        </div>

                                        <!--Email Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field" type="text" id="email" name="email"
                                                       required/>
                                                <label class="input__label" for="email">ایمیل</label>
                                            </span>
                                        </div>

                                        <!--Message Box-->
                                        <div class="col-md-12 mb-30">
                                            <span class="input">
                                                <textarea class="input__field" id="message" name="body" rows="5"
                                                          required></textarea>
                                                <label class="input__label" for="message">ارسال نظر</label>
                                            </span>
                                        </div>
                                        <input type="hidden" value="{{$user->id}}" name="user_id">
                                        <!--Submit Button-->
                                        <div class="col-md-12">
                                            <button class="btn-main " id="cf-submit">ارسال نظر</button>
                                        </div>

                                    </div>

                                </form>

                            </div>
                            <!--Form End-->

                        </div>
                    </div>

                    <!--Contact Info Row Start-->
                    <div class="row contact-info mb-70">

                        <!--Contact Info Item-->
                        <div class="col-md-4 info-item">
                            <span class="icon"><i class="fas fa-paper-plane"></i></span>
                            <h5><a href="mailto:{{cache()->get('user')->email}}"></a></h5>
                        </div>

                        <!--Contact Info Item-->
                        <div class="col-md-4 info-item">
                            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                            <h5>{{cache()->get('user')->address}}</h5>
                        </div>

                        <!--Contact Info Item-->
                        <div class="col-md-4 info-item">
                            <span class="icon"><i class="fas fa-phone"></i></span>
                            <a href="tel:{{cache()->get('user')->phone}}"><h5>{{cache()->get('user')->phone}}</h5> </a>
                        </div>

                    </div>
                    <!--Contact Info Row End-->

                </div>
                <!--Google Map Start-->
                <div class="google-map">
                    <div id="map" data-latitude="35.658675" data-longitude="51.487381" data-zoom="15"></div>
                </div>
                <!--Google Map End-->
            </section>
            <!--Contact Section End-->


        </div>
        <!--Main End-->
    </div>
@endsection
