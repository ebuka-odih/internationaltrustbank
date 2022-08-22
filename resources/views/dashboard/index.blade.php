@extends('dashboard.layout.app')
@section('content')

<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <h2 class="content-heading">
            <i class="fa fa-angle-right text-muted me-1"></i> Quick Overview
        </h2>
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <div class="row text-center">
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-dark mb-1">
                            @convert(auth()->user()->account->balance) <small style="font-size: 12px" class="badge bg-info">USD</small>
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Balance</a>
                    </div>
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-success mb-1">
                            +@convert($credit) <small style="font-size: 12px" class="badge bg-info">USD</small>
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Income Today</a>
                    </div>
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-danger mb-1">
                            -@convert($debit) <small style="font-size: 12px" class="badge bg-info">USD</small>
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Expenses Today</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <!-- Bank Account #2 -->
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <p class="fs-lg fw-semibold mb-0">
                                {{ auth()->user()->account->account_number }}
                            </p>
                            <p class="text-muted mb-0">
                                Account Number
                            </p>
                        </div>
                        <div class="ms-3">
                            <i class="fa fa-wallet fa-2x text-gray"></i>
                        </div>
                    </div>
                </a>
                <!-- END Bank Account #2 -->
            </div>
            <div class="col-lg-6">
                <!-- Bank Account #1 -->
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <p class="fs-lg fw-semibold mb-0">
                                {{ auth()->user()->account_type }}
                            </p>
                            <p class="text-muted mb-0">
                               Account Type
                            </p>
                        </div>
                        <div class="ms-3">
                            <i class="fa fa-piggy-bank fa-2x text-gray"></i>
                        </div>
                    </div>
                </a>
                <!-- END Bank Account #1 -->
            </div>

        </div>
        <!-- END Quick Overview -->

        <!-- Cards -->
        <h2 class="content-heading">
            <i class="fa fa-angle-right text-muted me-1"></i> Transactions Overview
        </h2>
        <div class="row">
            <div class="col-xl-4">
                <!-- Card #1 -->
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                        <div class="ribbon-box">{{ $total_dep }}</div>
                        <div class="py-3 text-center">
                            <i class="fa fa-arrow-alt-circle-down fa-4x text-gray"></i>
                            <p class="fs-sm fw-bold text-muted mb-0">
                                Deposits
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END Card #1 -->
            </div>
            <div class="col-xl-4">
                <!-- Card #2 -->
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                        <div class="ribbon-box">{{ $total_with }}</div>
                        <div class="py-3 text-center">
                            <i class="fa fa-exchange-alt fa-4x text-gray"></i>
                            <p class="fs-sm fw-bold text-muted mb-0">
                                Transfers
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END Card #2 -->
            </div>

            <div class="col-xl-4">
                <!-- Card #3 -->
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                        <div class="ribbon-box">{{ $total_loan }}</div>
                        <div class="py-3 text-center">
                            <i class="fa fa-money-check-alt fa-4x text-gray"></i>
                            <p class="fs-sm fw-bold text-muted mb-0">
                                Loan
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END Card #3 -->
            </div>
        </div>
        <!-- END Cards -->


        <!-- Latest Transactions -->
        <h2 class="content-heading">
            <i class="fa fa-angle-right text-muted me-1"></i> Latest Transactions
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
            <a class="btn btn-sm btn-alt-secondary fw-semibold" href="{{ route('user.statement') }}">
                <i class="fa fa-arrow-down opacity-50 me-1"></i> View More..
            </a>
        </div>
        <!-- END View More -->
    </div>
    <!-- END Page Content -->
</main>

@endsection
