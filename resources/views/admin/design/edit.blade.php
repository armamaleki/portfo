
@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="card-box">


            <div class="row">
                <div class="col-lg-6">
                    <form class="form-horizontal" method="post" action="{{route('design.update' ,$design->id)}}" role="form">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">مهارت</label>
                            <div class="col-md-10">
                                <input type="text" value="{{$design->title}}" name="title" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">مهارت شما</label>
                            <div class="col-sm-10">
                                <select name="style" class="form-control">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="33">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="60">60</option>
                                    <option value="70">70</option>
                                    <option value="80">80</option>
                                    <option value="90">90</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">اپدیت</button>
                    </form>
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
    </div>
@endsection
