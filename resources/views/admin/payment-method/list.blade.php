@extends('admin.layouts.app')
@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Payment Method</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        <div class="content">

            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <a href="{{ route('admin.addMethod') }}" class="btn btn-secondary m-3">Add Payment Method</a>
                <div class="block-header block-header-default">
                    <h3 class="block-title">All Payment Method</h3> </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                    <tr>
                                        {{--                                        <th class="text-center sorting sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>--}}
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">User</th>
                                        <th style="width: 15%;" class="d-none d-sm-table-cell sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" >Payment Method</th>
                                        <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Amount 1</th>
                                        <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Amount 2</th>
                                        <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Amount 3</th>
                                        <th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Date</th>
{{--                                        <th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Status</th>--}}
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($payment_method as $item)
                                        <tr class="odd">
                                            {{--                                        <td class="text-center sorting_1">1</td>--}}
                                            <td class="fw-semibold"> <a href="{{ route('admin.user_details', $item->user->id) }}">{{ $item->user->first_name." ".$item->user->last_name }}</a> </td>
                                            <td class="d-none d-sm-table-cell"> {{ $item->payment_method() }}</td>
                                            <td class="fw-semibold">$@convert($item->amount_1) </td>
                                            <td class="fw-semibold">$@convert($item->amount_2) </td>
                                            <td class="fw-semibold">$@convert($item->amount_3) </td>
                                            <td class="d-none d-sm-table-cell"> {{ date('Y-M-d', strtotime($item->created_at)) }}  </td>
{{--                                            <td class="d-none d-sm-table-cell"> {!! $item->status() !!} </td>--}}
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    @if($item->status == 0)
                                                        <a href="{{ route('admin.approveLoan', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="View User" data-bs-original-title="View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    @else
                                                    @endif
                                                    <form method="POST" action="{!! route('admin.deleteMethod', $item->id) !!}" accept-charset="UTF-8">
                                                        <input name="_method" value="DELETE" type="hidden">
                                                        {{ csrf_field() }}

                                                        <div class="btn-group btn-group-xs pull-right" role="group">

                                                            <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="Delete User" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete User?&quot;)">
                                                                <i class="fa fa-times"></i>
                                                            </button>

                                                        </div>

                                                    </form>
                                                </div>
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
            <!-- END Dynamic Table with Export Buttons -->

        </div>
        <!-- END Page Content -->
    </main>
@endsection
