@extends('layouts.admin')

@section('content')

    <div class="col-sm-8">
        <div class="bg-picture card-box">
            <div class="profile-info-name">
            </div>
            <form action="{{route('user.update', $user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="profile-info-detail">

                <div class="col-sm-6">
                    <img src="{{asset('assets/img/profile')}}/{{$user->avatar}}" width="700" class="img-thumbnail"
                         alt="{{$user->name}}-{{$user->lastname}}">

                </div>

                    <div class="col-sm-6 m-b-5">
                        <input type="file" name="avatar"  class="form-control">
                        @error('avatar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 m-b-5">
                        <input type="text" name="address"  class="form-control" maxlength="35"
                               placeholder=" ادرس 35 کارکتر"
                               value="{{$user->address}}">
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 m-b-5">

                        <input type="text" class="form-control" placeholder="نام 25 کارکتر " maxlength="25"
                               value="{{$user->name}}" name="name" id="alloptions">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 m-b-5">
                        <input type="text" class="form-control" placeholder="نام خانوادگی 25 کارکتر " maxlength="25"
                               value="{{$user->lastname}}"
                               name="lastname" id="alloptions">
                        @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 m-b-5">
                        <input type="text" name="residence" class="form-control" maxlength="25"
                               placeholder="محل زندگی 25 کارکتر"
                               value="{{$user->residence}}">
                        @error('residence')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-sm-6">
                        <input type="text" name="email" class="form-control" maxlength="25" placeholder=" ادرس ایمیل 25 کارکتر"
                               value="{{$user->email}}">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <p class="text-muted m-b-20"><i>طراح سایت</i></p>
                    <div class="form-group">
                        <div class="col-md-12 m-b-20">
                            <textarea name="about" class="form-control" id="elm1">{{$user->about}}</textarea>
                            @error('about')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="card-box">


                            <h4 class="header-title m-t-0 m-b-30">شبکه های اجتمائی</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                            <input value="{{$user->instagram}}" type="text" id="example-input1-group1"
                                                   name="instagram"
                                                   class="form-control" placeholder="instgram">
                                            @error('instagram')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                            <input value="{{$user->linkedin}}" type="text" id="example-input1-group1"
                                                   name="linkedin"
                                                   class="form-control" placeholder="linkedin">
                                            @error('linkedin')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                                            <input value="{{$user->youtube}}" type="text" id="example-input1-group1"
                                                   name="youtube"
                                                   class="form-control" placeholder="youtube">
                                            @error('youtube')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-facebook-f"></i></span>
                                            <input value="{{$user->facebook}}" type="text" id="example-input1-group1"
                                                   name="facebook"
                                                   class="form-control" placeholder="facebook">
                                            @error('facebook')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                            <input value="{{$user->twitter}}" type="text" id="example-input1-group1"
                                                   name="twitter"
                                                   class="form-control" placeholder="twitter">
                                            @error('twitter')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                                            <input value="{{$user->phone}}" type="text" id="example-input1-group1"
                                                   name="phone"
                                                   class="form-control" placeholder="phone">
                                            @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">update
                    </button>
                </div>

            </form>
        </div>
        <!--/ meta -->


    </div>
@endsection
