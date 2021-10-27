
    @extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{route('portfolio.create')}}" id="addToTable" class="btn btn-primary waves-effect waves-light">نمونه کار <i
                                        class="fa-solid fa-plus-circle"></i></a>
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

                                        @foreach($portfo as $port)
                                            <tr class="gradeA odd" role="row">
                                                <td class="sorting_1">{!! $port->title !!}</td>

                                                <td>{!! Illuminate\Support\Str::limit($port->body, 20) !!}</td>
                                                <td>----------</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn @if( $port->status == 0) btn-danger @else btn-success @endif btn-rounded w-md waves-effect waves-light m-b-5">@if( $port->status == 0)
                                                            غیر فعال@else فعال @endif</button>
                                                </td>

                                                <td class="actions">

                                                    <a href="{{route('portfolio.edit', $port->id)}}" class="on-default edit-row"><i class="fa-solid fa-pen"></i></a>
                                                    <a onclick="getElementById('portfolio-id-{{$port->id}}').submit()" class="on-default remove-row"><i
                                                            class="fa-solid fa-trash-can-list"></i></a>
                                                </td>
                                                <form action="{{route('portfolio.destroy',$port->id)}}" method="post" id="portfolio-id-{{$port->id}}">
                                                    @csrf
                                                    @method('delete')
                                                </form>
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
