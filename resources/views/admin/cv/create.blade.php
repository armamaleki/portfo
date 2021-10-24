@extends('layouts.admin')

@section('content')


    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">ساخت رزومه</h4>

            <div class="row">
                <div class="col-lg-8">

                    <div class="p-20">
                        <form action="{{route('cv.store')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-2">مقدار زمان فعالیت </label>
                                <div class="col-sm-10">
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="text" placeholder="شروع فعالیت " value="{{old('from')}}" class="form-control" name="from">
                                        <span class="input-group-addon bg-primary b-0 text-white">تا</span>
                                        <input type="text" placeholder="پایان فعالیت" value="{{old('to')}}" class="form-control" name="to">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">تایتل</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="تایتل">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">نام شرکت</label>
                                    <div class="col-md-10">
                                        <input type="text" name="company" class="form-control" value="{{old('company')}}" placeholder="نام شرکت ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ادرس اینترنتی</label>
                                    <div class="col-md-10">
                                        <input type="text" name="slug" class="form-control " value="{{old('slug')}}" placeholder="ادرس اینترنتی شرکت">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">توضیحات کار</label>
                                    <div class="col-md-10">
                                        <textarea id="elm1" name="body" class="form-control" placeholder="توضیحات....." rows="5">{{old('body')}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">ارسال</button>
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
