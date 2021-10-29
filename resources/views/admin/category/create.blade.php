@extends('layouts.admin')

@section('content')


    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">ساخت رزومه</h4>

            <div class="row">
                <div class="col-lg-8">

                    <div class="p-20">
                        <form action="{{route('category.store')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-group">


                                <div class="form-group">
                                    <label class="col-md-2 control-label">تایتل</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="تایتل">
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
