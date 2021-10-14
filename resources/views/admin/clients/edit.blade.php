@extends('layouts.admin')

@section('content')

    <div class="col-sm-12">
        <div class="card-box">


            <h4 class="header-title m-t-0 m-b-30">ساخت همکاران</h4>

            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{route('client.update' ,$client->id)}}" class="form-horizontal" role="form">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">تایتل</label>
                            <div class="col-md-10">
                                <input type="text" value="{{$client->title}}" name="title" class="form-control" >
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-2 control-label">ادرس همکار</label>
                            <div class="col-md-10">
                                <input type="text" name="address" class="form-control" value="{{$client->address}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">توضیحات</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="elm1" name="body" >{{$client->body}}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">add</button>
                    </form>

                    <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
                        @csrf
                        <input type="hidden" name="client_id" value="{{$client->id}}" />
                    </form>

                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>

    @yield('dropzone')
@endsection
