@extends('dashboard.layout.app')
@section('content')

    <main id="main-container">
        <!-- Page Content -->
        <div class="content">


            <!-- Latest Transactions -->
            <h2 class="content-heading">
                <i class="fa fa-angle-right text-muted me-1"></i> Transactions History
            </h2>

            @forelse($transactions as $item)
                @if($item->nsb_transfer == 1)
                    @if($item->status == 1)
                        @if($item->from == optional(auth()->user()->account)->account_number)
                            <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.nsb_withdrawal_details', $item->id) }}">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                    <div>
                                        <p class="fs-lg fw-semibold mb-0">
                                            -$@convert($item->amount)
                                        </p>
                                        <p class="text-muted mb-0">
                                            {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                        </p>
                                    </div>
                                    <div class="ms-3">
                                        <i class="fa fa-arrow-right text-success"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="fs-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong> {{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                                </div>
                            </a>
                        @else
                            <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.nsb_withdrawal_details', $item->id) }}">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                    <div>
                                        <p class="fs-lg fw-semibold mb-0">
                                            +$@convert($item->amount)
                                        </p>
                                        <p class="text-muted mb-0">
                                            {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                        </p>
                                    </div>
                                    <div class="ml-3">
                                        <i class="fa fa-arrow-left text-success"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                                </div>
                            </a>
                        @endif
                    @else
                        @if($item->from == optional(auth()->user()->account)->account_number)
                            <a class="block block-rounded block-link-shadow border-start border-warning border-3" href="{{ route('user.nsb_withdrawal_details', $item->id) }}">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                    <div>
                                        <p class="fs-lg fw-semibold mb-0">
                                            -$@convert($item->amount)
                                        </p>
                                        <p class="text-muted mb-0">
                                            {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                        </p>
                                    </div>
                                    <div class="ml-3">
                                        <i class="fa fa-arrow-right text-warning"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-warning">Pending</strong></span>
                                </div>
                            </a>

                        @else
                            <a class="block block-rounded block-link-shadow invisible border-left border-success border-3x" data-toggle="appear" href="{{ route('user.nsb_withdrawal_details', $item->id) }}">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="fs-lg fw-semibold mb-0">
                                            +$@convert($item->amount)
                                        </p>
                                        <p class="text-muted mb-0">
                                            {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                        </p>
                                    </div>
                                    <div class="ml-3">
                                        <i class="fa fa-arrow-left text-success"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">Status <strong class="badge badge-danger">Pending</strong></span>
                                </div>
                            </a>
                        @endif

                    @endif
                @elseif($item->obank_transfer == 1)
                    @if($item->status == 1)
                        @if($item->from == optional(auth()->user()->account)->account_number)
                            <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                    <div>
                                        <p class="fs-lg fw-semibold mb-0">
                                            -$@convert($item->amount)
                                        </p>
                                        <p class="text-muted mb-0">
                                            {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                        </p>
                                    </div>
                                    <div class="ms-3">
                                        <i class="fa fa-arrow-right text-success"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="fs-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong> {{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                                </div>
                            </a>
                        @else
                            <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                    <div>
                                        <p class="fs-lg fw-semibold mb-0">
                                            +$@convert($item->amount)
                                        </p>
                                        <p class="text-muted mb-0">
                                            {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                        </p>
                                    </div>
                                    <div class="ml-3">
                                        <i class="fa fa-arrow-left text-success"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                                </div>
                            </a>
                        @endif
                    @else
                        @if($item->from == optional(auth()->user()->account)->account_number)
                            <a class="block block-rounded block-link-shadow border-start border-warning border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                    <div>
                                        <p class="fs-lg fw-semibold mb-0">
                                            -$@convert($item->amount)
                                        </p>
                                        <p class="text-muted mb-0">
                                            {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                        </p>
                                    </div>
                                    <div class="ml-3">
                                        <i class="fa fa-arrow-right text-warning"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-warning">Pending</strong></span>
                                </div>
                            </a>

                        @else
                            <a class="block block-rounded block-link-shadow invisible border-left border-success border-3x" data-toggle="appear" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="fs-lg fw-semibold mb-0">
                                            +$@convert($item->amount)
                                        </p>
                                        <p class="text-muted mb-0">
                                            {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                        </p>
                                    </div>
                                    <div class="ml-3">
                                        <i class="fa fa-arrow-left text-success"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <span class="font-size-sm text-muted">Status <strong class="badge badge-danger">Pending</strong></span>
                                </div>
                            </a>
                        @endif

                    @endif
                @elseif($item->fcurrency_transfer == 1)
                @elseif($item->wire_transfer == 1)
                @endif

                <!-- END Latest Transactions -->
            @empty
                <h3>No Transaction</h3>
            @endforelse
            <!-- END Latest Transactions -->

            <!-- View More -->
            <div class="text-center">
                <div class="d-flex justify-content-center">
                    {!! $transactions->links() !!}
                </div>
            </div>
            <!-- END View More -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
