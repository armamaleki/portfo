@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-6">
                    <form method="post" action="{{route('service.update',$service->id)}}" class="form-horizontal" role="form">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">icon</label>
                            <div class="col-md-10">
                                <input name="icon" value="{{$service->icon}}" type="text" class="form-control" placeholder="use fontawdome ...">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">title</label>
                            <div class="col-md-10">
                                <input name="title" value="{{$service->title}}" type="text" class="form-control" placeholder="title ..">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">body</label>
                            <div class="col-md-10">
                                <textarea id="elm1" name="body" >{{$service->body}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">store</label>
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
