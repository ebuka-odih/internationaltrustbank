@extends('dashboard.layout.app')
@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <i class="icon ion-ios-arrow-up"></i>
            <div>
                <h4>Make A Deposit</h4>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <form action="{{ route('user.storeDeposit') }}" method="POST">
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
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Amount($): <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="amount"  placeholder="Enter Deposit Amount">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Payment Method: <span class="tx-danger">*</span></label>
                                    <select name="payment_method" id="" class="form-control">
                                        <option selected>Choose Account Type</option>
                                        <option value="Bank-Transfer">Bank Transfer</option>
                                        <option value="Wire-Transfer">Wire Transfer</option>
                                        <option value="BTC">Bitcoin Deposit</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-10">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Note: </label>
                                    <textarea name="note" id="" cols="30" rows="10" class="form-control"></textarea>
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
