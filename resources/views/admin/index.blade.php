@extends('layouts.admin')

@section('content')
    <div class="row">
        @foreach($service as $serv)
            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">

                    <i style="font-size: 50px;" class="{{$serv->icon}}"></i>
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">{{$serv->title}}</h4>
                            <p class="text-muted m-b-5 font-13">{!! Illuminate\Support\str::limit($serv->body, 20) !!}</p>
                            <small class="text-warning"><b>{{$serv->user->name}}</b></small>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        @endforeach
    </div>
    <div class="row">
        @foreach($clients as $serv)
            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">

                    <img src="{{asset('assets/img/clients')}}/{{$serv->avatar}}" class="img-responsive img-circl" alt="">
                    <div>
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">{{$serv->title}}</h4>
                            <p class="text-muted m-b-5 font-13">{!! $serv->company!!}</p>
                            <p class="text-muted m-b-5 font-13">{!! $serv->address!!}</p>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        @endforeach
    </div>
    <div class="row">
        @foreach($cv as $serv)
            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">

                    <div>
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">{{$serv->title}}</h4>
                            <p class="text-muted m-b-5 font-13">{!! $serv->company!!}</p>
                            <p class="text-muted m-b-5 font-13">{!! $serv->from!!}</p>
                            <p class="text-muted m-b-5 font-13">{!! $serv->to!!}</p>
                            <p class="text-muted m-b-5 font-13">{!! Illuminate\Support\str::limit($serv->body, 20) !!}</p>

                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        @endforeach
    </div>
    <div class="row">
        @foreach($design as $serv)
            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">{{$serv->title}}</h4>
                            <p class="text-muted m-b-5 font-13">{!! $serv->style!!}%مهارت دارم</p>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        @endforeach
    </div>
@endsection
