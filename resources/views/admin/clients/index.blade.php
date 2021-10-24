@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="m-b-30">
                            <a href="{{route('client.create')}}" id="addToTable"
                               class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-20">اضافه کردن همکار
                                جدید</a>
                        </div>
                    </div>
                </div>

                <div class="editable-responsive">
                    <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped dataTable no-footer" id="datatable-editable"
                                       role="grid" aria-describedby="datatable-editable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending"
                                            style="width: 366px;">موضوع
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 451px;">نام شرکت
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 413px;">تصویر
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 413px;">ویرایش
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($clients as $client)
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">{{$client->title}}</td>
                                            <td>{{$client->company}}</td>
                                            <td><img class="img-responsive img-circle" src="{{asset('assets/img/clients')}}/{{$client->avatar}}"
                                                     width="100" alt="{{$client->company}}"></td>
                                            <td class="actions">
                                                <a href="{{route('client.edit',$client->id)}}"
                                                   class="on-default edit-row"><i
                                                        class="fa-solid fa-pen"></i></a>
                                                <a onclick="getElementById('servise-delete-{{$client->id}}').submit()"
                                                   class="on-default remove-row"><i class="fa-solid fa-trash-can-list"></i></a>
                                                <form method="post" action="{{route('client.destroy',$client->id)}}"
                                                      id="servise-delete-{{$client->id}}">
                                                    @csrf
                                                    @method('delete')
                                                </form>
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
    </div>

@endsection
