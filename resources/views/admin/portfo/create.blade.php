
    @extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">نمونه کار جدید</h4>

            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{route('portfolio.store')}}" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">موضوع</label>
                            <div class="col-md-10">
                                <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="شغل همکار ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">نام شرکت</label>
                            <div class="col-md-10">
                                <input type="text" name="client" {{old('client')}} class="form-control" placeholder="نام شرکت">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">ادرس اینترنتی</label>
                            <div class="col-md-10">
                                <input type="text" name="url" {{old("url")}} class="form-control" placeholder="ادرس اینترنتی">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">توضیحات</label>
                            <div class="col-md-10">
                                <textarea name="body" id="elm1" >{{old('body')}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-inverse btn-block btn-rounded">ساخت </button>
                            </div>
                        </div>

                    </form>
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
    </div>

@endsection


