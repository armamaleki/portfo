@extends('layouts.admin')

@section('content')

    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">ساخت همکاران</h4>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{route('client.store')}}" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">نام همکار</label>
                            <div class="col-md-10">
                                <input type="text" name="title" class="form-control" placeholder="نام همکار">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">ادرس همکار</label>
                            <div class="col-md-10">
                                <input type="text" name="address" class="form-control" placeholder="ادرس">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">توضیحات</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="elm1" name="body" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">ارسال</label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">ارسال </button>
                            </div>
                        </div>
                    </form>


                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>
@endsection
