@extends('layouts.admin')

@section('content')

    <div class="col-sm-12">
        <div class="card-box">


            <h4 class="header-title m-t-0 m-b-30">ساخت همکاران</h4>

            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{route('client.update' ,$client->id)}}" enctype="multipart/form-data" class="form-horizontal" role="form">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">تایتل</label>
                            <div class="col-md-10">
                                <input type="text" value="{{$client->title}}" name="title" class="form-control" >
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-2 control-label">ادرس اینترنتی همکار</label>
                            <div class="col-md-10">
                                <input type="text" name="address" class="form-control" value="{{$client->address}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">نام شرکت</label>
                            <div class="col-md-10">
                                <input type="text" name="company" class="form-control" value="{{$client->company}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">تصویر</label>
                            <div class="col-md-10">
                                <input type="file" name="avatar" class="form-control" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">add</button>
                    </form>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>

    @yield('dropzone')
@endsection
