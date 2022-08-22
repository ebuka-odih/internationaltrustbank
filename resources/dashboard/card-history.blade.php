@extends('dashboard.layout.app')
@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="{{ route('user.card') }}">Card</a>
                <span class="breadcrumb-item active">Card History</span>
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
                <a class="btn btn-primary btn-sm" href="{{ route('user.card') }}">Request Card</a>

                <div class="row row-sm mg-t-20">
                    <h4>Recent Request</h4>

                    <div class="col-lg-12">
                        <div class="card bd-0 shadow-base">
                            <div class="bd bd-gray-300 rounded table-responsive">
                                <table class="table table-striped mg-b-0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Nick Name</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cards as $item)
                                        <tr>
                                            <th scope="row">{{ $item->card_id }}</th>
                                            <td>{{ date('d M y h:i A', strtotime($item->created_at)) }}</td>
                                            <td>{{ $item->nickname }}</td>
                                            <td>{!! $item->status() !!}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div><!-- card -->

                    </div><!-- col-8 -->

                </div><!-- row -->
            </div><!-- br-pagebody -->

        </div>

@endsection
