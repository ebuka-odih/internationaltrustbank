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


    <div class="br-mainpanel">
        <div class="br-pageheader">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="{{ route('user.deposit') }}"> Deposit</a>
                <span class="breadcrumb-item active"> Payment</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="br-pagetitle">
            <i class="icon icon ion-social-usd"></i>
            <div>
                <h4>Make Payment</h4>
            </div>
        </div><!-- d-flex -->

        <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">


            <div class="row row-sm mg-t-20">

                <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                    <div class="card bd-0 shadow-base widget-15 ht-100p">
                        <div class="card-body">
                            <div class="card-title">Payment Information</div>

                            <!-- form-group -->

                            <p class="tx-32">
                                <i class="fab fa-cc-visa mg-r-5"></i>
                                <i class="fab fa-cc-mastercard mg-r-5"></i>
                                <i class="fab fa-btc"></i>
                            </p>
                            @if($deposit->payment_method == "BTC")
                               <div class="row">
                                   <div class="col-md-10">
                                       <h4>Make Payment To The Bitcoin Wallet Below ($@convert($deposit->amount))</h4>
                                       <img height="250" width="250" src="https://2d6qxj3uqdaw38d6lk27l0ao-wpengine.netdna-ssl.com/wp-content/uploads/2015/10/apb-qr-code.png" alt="">

                                       <div class="mt-3">
                                           <input id="foo" type="text" class="form-control col-lg-8" value="wertyutrewrtyrse">
                                       </div>
                                   </div>
                               </div>


                            <p class="mg-b-0 mg-t-20">
                                <span>Your Deposit will be approved once the transaction is confirmee</span>

                            </p>
                        </div><!-- card-body -->
                        <div class="card-footer mg-t-auto">
                            <a data-clipboard-target="#foo" class="btn btn-info bd-0 btn-oblong text-white">
                                <i class="fab fa-clipboard"></i>
                                Copy Wallet</a>
                        </div><!-- card-footer -->
                        @endif
                        @if($deposit->payment_method == "Bank-Transfer")
                            <h4>Make Payment To The Bank Details Below ($@convert($deposit->amount))</h4>

                            <table style="width:100%">
                                <tr>
                                    <th>Bank Name:</th>
                                    <td>Bill Gates</td>
                                </tr>
                                <tr>
                                    <th>Account No:</th>
                                    <td>555 77 854</td>
                                </tr>
                                <tr>
                                    <th>Account Name:</th>
                                    <td>555 77 855</td>
                                </tr>
                            </table>

                            <a href="{{ route('user.withdrawHistory') }}" class="btn btn-primary mt-2">Done</a>
                        @endif

                    </div><!-- card -->
                </div><!-- col-6 -->
            </div><!-- row -->

        </div>
        <!-- br-pagebody -->

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script src="dist/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
    </script>

@endsection
