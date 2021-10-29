@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="card-box">


            <h4 class="header-title m-t-0 m-b-30">پست جدید</h4>

            <div class="row">
                <div class="col-lg-12">
                    <form method="post" enctype="multipart/form-data" action="{{route('posts.update', $post->id)}}"
                          class="form-horizontal" role="form">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">موضوع</label>
                            <div class="col-md-10">
                                <input type="text" value="{{$post->title}}" name="title" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">وضعیت پست</label>
                            <div class="col-sm-10">
                                <select name="status" class="form-control">
                                    <option value="0">غیر فعال</option>
                                    <option value="1">فعال</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">اواتار</label>
                            <div class="col-md-10">
                                <input type="file" name="avatar" class="form-control">
                            </div>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label class="col-md-2 control-label">دسته بندی</label>--}}
{{--                            <div class="col-md-10">--}}
{{--                                <select class=" col-md-12 js-example-basic-multiple" name="category[]" multiple="multiple">--}}
{{--                                    @foreach($post->categories as $cat)--}}
{{--                                        <option value="{{$cat->id}}">{{$cat->title}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label class="col-md-2 control-label">توضیحات</label>
                            <div class="col-md-10">
                                <textarea name="body" id="elm1">{{$post->body}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-inverse btn-block btn-rounded">اپدیت پست</button>
                            </div>
                        </div>

                    </form>
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection
