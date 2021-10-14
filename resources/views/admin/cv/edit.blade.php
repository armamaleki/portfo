@extends('layouts.admin')

@section('content')


    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">ساخت رزومه</h4>

            <div class="row">
                <div class="col-lg-8">

                    <div class="p-20">
                        <form action="{{route('cv.update',$cv->id)}}" method="post" class="form-horizontal">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="control-label col-sm-2">مقدار زمان فعالیت </label>
                                <div class="col-sm-10">
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="text" value="{{$cv->from}}" placeholder="شروع فعالیت " class="form-control" name="from">
                                        <span class="input-group-addon bg-primary b-0 text-white">تا</span>
                                        <input type="text" value="{{$cv->to}}" placeholder="پایان فعالیت" class="form-control" name="to">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">تایتل</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" value="{{$cv->title}}" class="form-control" placeholder="تایتل">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">نام شرکت</label>
                                    <div class="col-md-10">
                                        <input type="text" name="company" value="{{$cv->company}}" class="form-control" placeholder="نام شرکت ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ادرس اینترنتی</label>
                                    <div class="col-md-10">
                                        <input type="text" name="slug" class="form-control" value="{{$cv->slug}}" placeholder="ادرس اینترنتی شرکت">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">توضیحات کار</label>
                                    <div class="col-md-10">
                                        <textarea id="elm1"  name="body" class="form-control" placeholder="توضیحات....." rows="5">{{$cv->body}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">Block Button</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div><!-- end col -->


            </div><!-- end row-->
        </div>
    </div>
@endsection
