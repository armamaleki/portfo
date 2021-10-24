@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="m-b-30">
                            <a href="{{route('design.create')}}" id="addToTable"
                               class="btn btn-primary waves-effect waves-light">اضافه کردن <i
                                    class="fa-solid fa-plus-circle"></i></a>
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
                                            style="width: 451px;">میزان مهارت
                                        </th>

                                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions"
                                            style="width: 193px;">ویرایش پاک کردن
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($design as $des)
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">{{$des->title}}</td>
                                            <td>{{$des->style}}</td>
                                            <td class="actions">

                                                <a href="{{route('design.edit', $des->id)}}" class="on-default edit-row"><i class="fa-solid fa-pen"></i></a>
                                                <a onclick="getElementById('design-id-{{$des->id}}').submit()" class="on-default remove-row"><i class="fa-solid fa-trash-can-list"></i></a>
                                                <form action="{{route('design.destroy', $des->id) }} " method="post" id="design-id-{{$des->id}}">
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
