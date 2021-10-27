@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">نمونه کار جدید</h4>

            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{route('portfolio.update', $portfo->id)}}" enctype="multipart/form-data" class="form-horizontal" role="form">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">موضوع</label>
                            <div class="col-md-10">
                                <input type="text" name="title" value="{{$portfo->title}}" class="form-control"
                                       placeholder="شغل همکار ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">نام شرکت</label>
                            <div class="col-md-10">
                                <input type="text" name="client" value="{{$portfo->client}}" class="form-control"
                                       placeholder="نام شرکت">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">ادرس اینترنتی</label>
                            <div class="col-md-10">
                                <input type="text" name="url" value="{{$portfo->url}}" class="form-control"
                                       placeholder="ادرس اینترنتی">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">ادرس اینترنتی</label>
                            <div class="col-md-10">
                                <input type="file" name="avatar"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">توضیحات</label>
                            <div class="col-md-10">
                                <textarea name="body" id="elm1">{{$portfo->body}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-inverse btn-block btn-rounded">ساخت</button>
                            </div>
                        </div>

                    </form>

                    <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data"
                          class="dropzone" id="my-awesome-dropzone">
                        @csrf
                        <input type="hidden" name="portfo_id" value="{{$portfo->id}}"/>
                    </form>

                </div><!-- end col -->

            </div><!-- end row -->
        </div>
    </div>

@endsection


