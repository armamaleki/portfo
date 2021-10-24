@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-6">
                    <form method="post" action="{{route('service.store')}}" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">ایکون </label>
                            <div class="col-md-10">
                                <input name="icon" type="text" class="form-control" placeholder="like this= fa-solid fa-magnifying-glass-dollar">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">موضوع </label>
                            <div class="col-md-10">
                                <input name="title" type="text" class="form-control" placeholder="title ..">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">توضیحات</label>
                            <div class="col-md-10">
                                <textarea id="elm1" name="body" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">ساخت </label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">
                                    store
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
