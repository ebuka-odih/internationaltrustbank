@extends('admin.layouts.app2')
@section('content')

    <!-- Topbar Start -->
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->

    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Card Request</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            @if(session()->has('delete'))
                                <div class="alert alert-success">
                                    {{ session()->get('delete') }}
                                </div>
                            @endif

                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Card Type</th>
                                    <th>Nickname</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($cards as $item)
                                    <tr>
                                        <td><strong>{{ $item->first_name }}</strong></td>
                                        <td><strong>{{ $item->last_name }}</strong></td>
                                        <td><strong>{{ $item->card_type }}</strong></td>
                                        <td><strong>{{ $item->nickname }}</strong></td>
                                        <td><strong> {!! $item->status() !!}</strong></td>
                                        {{--                                            <td><strong>$ {{ optional($withdraw->account)->balance }}</strong></td>--}}
                                        <td><strong>{{ date('d M y', strtotime($item->created_at)) }}</strong></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.reject_card', $item->id) }}" class="btn btn-secondary btn-sm">Reject Card</a>
                                                <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>
{{--                                                <a href="" class="">Reject Card</a>--}}
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                    {{--                                                        <a class="dropdown-item" href="#">Delete Transaction</a>--}}
                                                    <form method="POST" action="{!! route('admin.delete_card', $item->id) !!}" accept-charset="UTF-8">
                                                        <input name="_method" value="DELETE" type="hidden">
                                                        {{ csrf_field() }}

                                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                                            <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                                Delete card
                                                            </button>

                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2018 - 2020 &copy; Zircos theme by <a href="#">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

@endsection
