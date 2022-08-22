@extends('dashboard.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Deposit Methods</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


            <!-- Latest Orders + Stats -->
            <div class="row">
                <div class="col-md-12">
                    <!--  Latest Orders -->
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                Make Deposit
                            </h3>

                        </div>
                        <div class="block-content">
                            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="d-none d-xl-table-cell">Date</th>
                                    <th>Payment Method</th>
                                    <th class="d-none d-sm-table-cell text-end">Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payment_method as $item)
                                    <tr>
                                        <td class="d-none d-xl-table-cell">
                                            <span class="fs-sm text-muted">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">{{ $item->payment_method() }}</span>
                                        </td>

                                        <td class="d-none d-sm-table-cell text-end fw-medium">
                                            $@convert($item->amount_1)
                                        </td>
                                        <td>
                                            <a href="{{ route('user.PaymentMethodDetails', $item->id) }}" class="btn btn-sm btn-secondary">view</a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- END Latest Orders -->
                </div>
            </div>
            <!-- END Latest Orders + Stats -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
