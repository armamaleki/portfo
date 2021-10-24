@extends('layouts.admin')

@section('content')
    <a href="{{route('service.create')}}" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-20">اضافه
        کردن</a>
    <br>
    @foreach($services as $servise)
        <div class="col-lg-3 col-md-6">
        <div class="text-center card-box">
                <div>
                    <i style="font-size: 100px;" class="{{$servise->icon}}"></i>
                    <h2 class="text-muted m-b-10">{{$servise->title}}</h2>
                    <p class="text-muted font-13 m-b-30">
                        {!! $servise->body !!}
                    </p>
                    <td class="actions">
                        <a href="{{route('service.edit',$servise->id)}}" class="on-default edit-row"><i class="fa-solid fa-pen"></i></a>

                        <a onclick="getElementById('servise-delete-{{$servise->id}}').submit()" class="on-default remove-row"><i class="fa-solid fa-trash-can-list"></i></a>
                        <form method="post" action="{{route('service.destroy',$servise->id)}}" id="servise-delete-{{$servise->id}}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </div>
        </div>
        </div>
    @endforeach
@endsection
