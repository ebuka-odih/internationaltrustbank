@extends('dashboard.layout.app')
@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="{{ route('user.withdraw') }}">Withdraw</a>
                <span class="breadcrumb-item active">Withdrawal History</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="br-pagetitle">
            <i class="icon icon ion-ios-bookmarks-outline"></i>
            <div>
                <h4>Transaction History</h4>
            </div>
        </div><!-- d-flex -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <div class="table-wrapper">
                    <div id="datatable1_wrapper" class="dataTables_wrapper no-footer">

                        <table id="datatable1" class="table display responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="datatable1_info" style="width: 1434px;">
                            <thead>
                            <tr role="row">
                                <th class="wd-15p sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 191px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Date</th>
                                <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 191px;" aria-label="Last name: activate to sort column ascending">Amount</th>
                                <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 263px;" aria-label="Position: activate to sort column ascending">Recipient</th>
                                <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 191px;" aria-label="Start date: activate to sort column ascending">Status</th>
                                <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 191px;" aria-label="Start date: activate to sort column ascending">View</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($withdraw as $item)

                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1" style="">{{ date('d M y h:i A', strtotime($item->created_at)) }}</td>
                                <td>$@convert($item->amount)</td>
                                <td>{{ $item->rep_name }}</td>
                                <td>{!! $item->status() !!}</td>
                                <td><a class="btn btn-link" href="{{ route('user.withdrawal_details', $item->id) }}">View</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div><!-- table-wrapper -->

            </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->

    </div>

@endsection
