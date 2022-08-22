@extends('dashboard.layout.app')
@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <i class="icon ion-ios-arrow-up"></i>
            <div>
                <h4>Make A Withdraw</h4>
            </div>
        </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <p class="br-section-text">Carefully enter the information below</p>
            <form action="{{ route('user.store') }}" method="POST">
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

                @if(session()->has('declined'))
                    <div class="alert alert-danger">
                        {{ session()->get('declined') }}
                    </div>
                @endif
                @if(session()->has('illicit'))
                    <div class="alert alert-danger">
                        {{ session()->get('illicit') }}
                    </div>
                @endif
                @if(session()->has('not_found'))
                    <div class="alert alert-danger">
                        {{ session()->get('not_found') }}
                    </div>
                @endif

                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="rep_name"  placeholder="Enter Full Name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Acct Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="acct_number"  placeholder="Enter Account No">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Account Type: <span class="tx-danger">*</span></label>
                                <select name="account_type" id="" class="form-control">
                                    <option selected>Choose Account Type</option>
                                    <option value="savings">Savings</option>
                                    <option value="current">Current</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Amount: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" name="amount"  placeholder="Enter Amount">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Transaction Type: <span class="tx-danger">*</span></label>
                                <select name="trans_type" id="" class="form-control">
                                    <option selected>Choose Transaction Type</option>
                                    <option value="Internal">Internal Transaction</option>
                                    <option value="Local">Local Transaction</option>
                                    <option value="International">International Transaction</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Bank Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="bank_name" placeholder="Enter Bank Name">
                            </div>
                        </div><!-- col-8 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info" type="submit">Proceed</button>
{{--                        <button class="btn btn-secondary">Cancel</button>--}}
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>


        </div><!-- br-section-wrapper -->
    </div>
    </div>

@endsection
