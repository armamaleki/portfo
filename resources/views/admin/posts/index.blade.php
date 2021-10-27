@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                    <a href="{{route('posts.create')}}" id="addToTable" class="btn btn-primary waves-effect waves-light">ارسال پست </a>
                            </div>
                        </div>
                    </div>

                    <div class="editable-responsive">
                        <div id="datatable-editable_wrapper"
                             class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped dataTable no-footer" id="datatable-editable"
                                           role="grid" aria-describedby="datatable-editable_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending"
                                                style="width: 366px;">تایتل
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending"
                                                style="width: 366px;">خلاصه
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-editable"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                style="width: 450px;">نویسنده
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-editable"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                style="width: 450px;">وضعیت
                                            </th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions"
                                                style="width: 193px;">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($posts as $post)
                                            <tr class="gradeA odd" role="row">
                                                <td class="sorting_1">{{$post->title}}</td>

                                                <td>{{$post->body}}</td>
                                                <td>{{$post->user->name}}-{{$post->user->lastname}}</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn @if($post->status == 0) btn-danger @else btn-success @endif btn-rounded w-md waves-effect waves-light m-b-5">@if($post->status == 0)
                                                            غیر فعال@else فعال @endif</button>
                                                </td>

                                                <td class="actions">
                                                    <a href="#" class="on-default edit-row"><i class="fa-solid fa-pen"></i></a>
                                                    <a href="#" class="on-default remove-row"><i
                                                            class="fa-solid fa-trash-can-list"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end: panel body -->

            </div> <!-- end panel -->
        </div> <!-- end col-->
    </div>
@endsection
