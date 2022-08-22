@extends('admin.layouts.app')
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
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Payment Method</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="{{ route('admin.addMethod') }}">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-dollar-sign fa-3x text-gray"></i>
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Bank Deposit
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>

                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="{{ route('admin.bitcoinMethod') }}"  style="background-color: #2f3654; color: #8492b1;">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fab fa-bitcoin fa-3x text-gray"></i>
                                {{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Bitcoin Deposit
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>



                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="{{ route('admin.instantTransfer') }}">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fab fa-monero fa-3x text-gray"></i>
                                {{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Instant Transfer
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>

            </div>

            <!-- Layouts -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Make A Deposit</h3>
                </div>
                <div class="block-content">

                    <div class="row">
                        <div class="col-lg-12 space-y-2">
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('admin.storeBtcMethod') }}" method="POST" >
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <input type="hidden" name="trans_type" value="nsb_transfer">
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Select User <span class="text-danger">*</span></label>
                                    <select name="user_id" id="" class="form-control">
                                        @foreach($users as $item)
                                            <option value="{{ $item->id }}">{{ $item->first_name." ".$item->last_name }}  ({{ $item->account->account_number }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Bitcoin Wallet Address<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="example-if-email" name="btc_wallet">
                                </div>


                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Amount 1 <span class="text-danger">*</span></label>
                                    <input  type="number" class="form-control form-control-lg" id="example-if-password" name="amount_1">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Amount 2 <span class="text-danger">*</span></label>
                                    <input  type="number" class="form-control form-control-lg" id="example-if-password" name="amount_2">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Amount 3 <span class="text-danger">*</span></label>
                                    <input  type="number" class="form-control form-control-lg" id="example-if-password" name="amount_3">
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-secondary m-3">Send</button>
                                </div>


                            </form>
                            <!-- END Form Inline - Default Style -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- END Layouts -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
