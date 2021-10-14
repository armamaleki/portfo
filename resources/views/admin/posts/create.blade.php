@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="card-box">



            <h4 class="header-title m-t-0 m-b-30">پست جدید</h4>

            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{route('posts.store')}}" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">موضوع</label>
                            <div class="col-md-10">
                                <input type="text" name="title" class="form-control" placeholder="موضوع جدید.....">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">توضیحات</label>
                            <div class="col-md-10">
                                <textarea name="body" id="elm1" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                        <button type="submit" class="btn btn-inverse btn-block btn-rounded">ارسال پست </button>
                            </div>
                        </div>

                    </form>
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
    </div>

@endsection
