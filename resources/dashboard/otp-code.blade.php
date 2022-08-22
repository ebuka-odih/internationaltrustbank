@extends('dashboard.layout.app')
@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <i class="icon ion-ios-arrow-up"></i>
            <div>
                <h4>Enter Your OTP Code</h4>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <form action="{{ route('user.otpStore') }}" method="POST">
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

                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">OTP Code: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="otp"  placeholder="Enter Your OTP Code">

                                    <input type="hidden" value="{{ $with_dt->id }}" name="withdrawal_id">
                                </div>
                                <p>Request for an OPT Code <a target="_blank" href="mailto:support@nsbplc.com">support@nsbplc.com</a></p>
                            </div><!-- col-4 -->

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
