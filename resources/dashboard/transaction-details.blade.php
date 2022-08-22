@extends('dashboard.layout.app')
@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="{{ route('user.withdraw') }}">Withdrawal</a>
                <span class="breadcrumb-item active">Transaction Details</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="br-pagetitle">
            <i class="icon icon ion-ios-paper-outline"></i>
            <div>
                <h4>Transaction Invoice</h4>
            </div>
        </div><!-- d-flex -->

        <div class="br-pagebody">

            <div class="card bd-0 shadow-base">
                <div class="card-body pd-30 pd-md-60">
                    <div class="d-md-flex justify-content-between flex-row-reverse">
                        <h1 class="mg-b-0 tx-uppercase tx-gray-400 tx-mont tx-bold">Invoice</h1>
                        <div class="mg-t-25 mg-md-t-0">
                            <h6 class="tx-primary">NationsStar Bank, PLC.</h6>
                                <p>Email: support@nsbplc.com</p>
                        </div>
                    </div><!-- d-flex -->
                    <hr>

                    <div class="row mg-t-20">
                        <div class="col-md-6">
                            <div class="col-lg-6 col-md-12">
                                <p class="h3">SENDER</p>
                                <div style="line-height: 2.0">
                                    <strong>Name:</strong> {{ auth()->user()->first_name." ".auth()->user()->last_name }}<br>
                                    <strong>Email:</strong> {{ auth()->user()->email }}<br>
                                    <strong>Bank Name:</strong> NationsStar Bank, PLC.<br>
                                    <strong>Account No:</strong> <span class="text text-primary">{{ auth()->user()->account->account_number }}</span><br>
                                </div>
                            </div>
                        </div><!-- col -->

                        <div class="col-lg-6 col-md-12 ">
                            <p class="h3">RECEIVER</p>
                            <div style="line-height: 2.0;">
                                <strong>Name:</strong> {{ $with_dt->rep_name }}<br>
                                <strong>Account No:</strong> <span class="text-primary">{{ $with_dt->acct_number }}</span><br>
                                <strong>Bank Name:</strong> {{ $with_dt->bank_name }}<br>
                                <strong>Account Type:</strong> {{ $with_dt->account_type }}<br>
                            </div>
                        </div>

                    </div><!-- row -->

                    <div class="table-responsive mg-t-40">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="wd-20p">Date</th>
                                <th class="wd-40p">Note</th>
                                <th class="tx-center">Status</th>
                                <th class="tx-right">Unit Price</th>
                                <th class="tx-right">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> {{ date('d.M.y h:i A', strtotime($with_dt->created_at)) }}</td>
                                <td class="tx-12"> <div class="text-muted">{{ $with_dt->note }}</div></td>
                                <td class="tx-center"> {!! $with_dt->status() !!}</td>
                                <td class="tx-right">$@convert( $with_dt->amount)</td>
                                <td class="tx-right">$@convert( $with_dt->amount)</td>
                            </tr>

                            <tr >
                                <td colspan="2" rowspan="4" class="valign-middle">
                                    <div class="mg-r-20">
                                    </div>
                                </td>
                                <td class="tx-right">Tax (0.5%)</td>
                                <td colspan="2" class="tx-right">$@convert( $with_dt->vat )</td>
                            </tr>

                            <tr>
                                <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                                <td colspan="2" class="tx-right"><h4 class="tx-teal tx-bold tx-lato">$@convert( $with_dt->amount + $with_dt->vat )</h4></td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->

                    <hr class="mg-b-60">

                    <a href="" class="btn btn-info btn-block">Print</a>

                </div><!-- card-body -->
            </div><!-- card -->

        </div><!-- br-pagebody -->
        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright © 2017. Bracket Plus. All Rights Reserved.</div>
                <div>Attentively and carefully made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div>


@endsection
