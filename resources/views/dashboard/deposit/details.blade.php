@extends('dashboard.layout.app')
@section('content')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Deposit</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


            <!-- Layouts -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Deposit Details</h3>
                </div>
                <div class="block-content">

                    <div class="row">
                        @if($payment_method->payment_type == 1)
                        <div class="col-lg-12 space-y-2">
                            <div class="table">
                                <table class="table" style="width:100%">
                                    <tr>
                                        <th>Bank Name:</th>
                                        <td>{{ $payment_method->bank_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Account Name:</th>
                                        <td>{{ $payment_method->acct_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Account Number:</th>
                                        <td>{{ $payment_method->acct_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>Swift Code:</th>
                                        <td>{{ $payment_method->swift_code }}</td>
                                    </tr>
                                    <tr>
                                        <th>Routine Number:</th>
                                        <td>{{ $payment_method->routine_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>First Amount:</th>
                                        <td>$@convert($payment_method->amount_1)</td>
                                    </tr>
                                    <tr>
                                        <th>Second Amount:</th>
                                        <td>$@convert($payment_method->amount_2)</td>
                                    </tr>
                                    <tr>
                                        <th>Third Amount:</th>
                                        <td>$@convert($payment_method->amount_1)</td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        @elseif($payment_method->payment_type == 2)

                            <div class="col-lg-12 space-y-2">
                                <div class="table">
                                    <table class="table" style="width:100%">
                                        <tr>
                                            <th>First Amount:</th>
                                            <td>$@convert($payment_method->amount_1)</td>
                                        </tr>
                                        <tr>
                                            <th>Second Amount:</th>
                                            <td>$@convert($payment_method->amount_2)</td>
                                        </tr>
                                        <tr>
                                            <th>Third Amount:</th>
                                            <td>$@convert($payment_method->amount_1)</td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- Form Inline - Default Style -->
                                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" >
                                    @csrf

                                    <hr>
                                    <div class="col-lg-10 offset-lg-2">
                                        {!! QrCode::size(200)->generate($payment_method->btc_wallet ? : ''); !!}
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="mb-4">
                                            <label for="example-ltf-text">Wallet Address</label>
                                            <div class="input-group">
                                                <input  type="text" readonly class="form-control" id="foo" value="{{ $payment_method->btc_wallet }}" >
                                                <span class="input-group-text">
                                              <a class="btn btn-info" data-clipboard-target="#foo">
                                                    <i class="fa fa-clipboard fs-2"></i>
                                                </a>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <!-- END Form Inline - Default Style -->
                            </div>
                        @endif

                    </div>
                    <br>

                </div>
            </div>
            <!-- END Layouts -->
        </div>
        <!-- END Page Content -->
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
