@extends('dashboard.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light d-print-none">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Invoice</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-boxed">
            <!-- Invoice -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">#INV0{{ $with_dt->withdraw_id }}</h3>
                    <div class="block-options">
                        <!-- Print Page functionality is initialized dmPrint() -->
                        <button type="button" class="btn-block-option" onclick="Dashmix.helpers('dm-print');">
                            <i class="si si-printer me-1"></i> Print Invoice
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="p-sm-4 p-xl-7">
                        <!-- Invoice Info -->
                        <div class="row mb-5">
                            <!-- Company Info -->
                            <div class="col-6">
                                <p class="h3">SENDER</p>
                                <div>
                                    <strong>Name:</strong> {{ auth()->user()->first_name." ".auth()->user()->last_name }}<br>
                                    <strong>Email:</strong> {{ auth()->user()->email }}<br>
                                    <strong>Bank Name:</strong> Nations Star Bank PLC<br>
                                    <strong>Account No:</strong> <span class="text text-primary">{{ auth()->user()->account->account_number }}</span><br>
                                </div>
                            </div>
                            <!-- END Company Info -->

                            <!-- Client Info -->
                            <div class="col-6 text-end">
                                <p class="h3">RECEIVER</p>
                                <div>
                                    <strong>Name:</strong> {{ $with_dt->rep_name }}<br>
                                    <strong>Account No:</strong> {{ $with_dt->acct_number }}<br>
                                    <strong>Bank Name:</strong> {{ $with_dt->bank_name }}<br>
                                    <strong>Transaction Type:</strong> {{ $with_dt->transactionType() }}<br>
                                </div>
                            </div>
                            <!-- END Client Info -->
                        </div>
                        <!-- END Invoice Info -->

                        <!-- Table -->
                        <div class="table-responsive push">
                            <table class="table table-bordered">
                                <thead class="bg-body">
                                <tr>
                                    <th class="text-center" style="width: 60px;">Date</th>
                                    <th>Description</th>
                                    <th class="text-center" style="width: 90px;">Status</th>
                                    <th class="text-right" style="width: 120px;">Unit</th>
                                    <th class="text-right" style="width: 120px;">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">{{ date('d.M.y h:i A', strtotime($with_dt->created_at)) }}</td>
                                    <td>

                                        <div class="text-muted">{{ $with_dt->note }}</div>
                                    </td>
                                    <td class="text-center">
                                        {!! $with_dt->status() !!}
                                    </td>
                                    <td class="text-right">$@convert( $with_dt->amount)</td>
                                    <td class="text-right">$@convert( $with_dt->amount)</td>
                                </tr>

                                <tr>
                                    <td colspan="4" class="fw-semibold text-end">Vat Rate</td>
                                    <td class="text-end">@convert( $with_dt->vat )%</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="fw-semibold text-end">Vat Due</td>
                                    <td class="text-end">$@convert( $with_dt->vat() )</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="fw-bold text-uppercase text-end bg-body-light">Total Due</td>
                                    <td class="fw-bold text-end bg-body-light">$@convert( $with_dt->amount )</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END Table -->

                        <!-- Footer -->
                        <p class="text-muted text-center my-5">
                            Your growth is our interest.
                        </p>
                        <!-- END Footer -->
                    </div>
                </div>
            </div>
            <!-- END Invoice -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
