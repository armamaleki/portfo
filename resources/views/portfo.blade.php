@extends('layouts.index')


@section('content')

    <div class="ajax-portfolio-popup on">
        <span class="ajax-loader" style="display: none;"></span>
        <div class="navigation-wrap">
            <span class="popup-close"><i class="fas fa-times-circle"></i></span>
        </div>
        <div class="content-wrap">
            <div class="popup-content">
                <meta charset="UTF-8">
                <div class="single-work">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-10 offset-md-1 mb-40">
                                <h1 class="title mb-30">{{$portfo->title}}</h1>
                                <p class="mb-30">{!! $portfo->body !!}</p>
                                <ul class="information">
                                    <li><span class="title">نام همکار :</span> {!! $portfo->client !!}</li>
                                    <li><span class="title">سایت:</span> {!! $portfo->url !!}</li>
                                    <li><span class="title">دسته بندی:</span> web, creative, photography</li>
                                </ul>
                                @foreach($portfo->galleries as $port)
                                    <figure class="mt-30"><img style="width: 50%;" class="figure-img img-fluid rounded" src="{{asset('img/portfolio/320')}}/{{$port->file}}" alt="{{$portfo->url}}">
                                    </figure>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
