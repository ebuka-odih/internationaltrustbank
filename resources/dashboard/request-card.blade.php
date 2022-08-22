@extends('dashboard.layout.app')
@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <i class="icon ion-ios-arrow-up"></i>
            <div>
                <h4>Debit Card</h4>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <form action="{{ route('user.storeCard') }}" method="POST">
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

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Card Nick Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="nickname"  placeholder="Enter Nick Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Card Type: <span class="tx-danger">*</span></label>
                                    <select name="card_type" id="" class="form-control">
                                        <option selected>Choose Account Type</option>
                                        <option value="Visa-Card">Visa Card</option>
                                        <option value="Master-Card">Master Card</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-10">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Note (What will this card be use for): </label>
                                    <textarea name="note" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div><!-- col-8 -->

                        </div><!-- row -->
                        <p>1. Upon approval $30.00 will be deducted from your account balance</p>
                        <p>2. 0.7(%) annual charge for card maintenance</p>

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
