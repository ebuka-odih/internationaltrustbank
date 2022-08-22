@extends('dashboard.layout.app')
@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <i class="icon ion-key"></i>
            <div>
                <h4>Change Password</h4>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="d-flex align-items-center justify-content-center bg-gray-300 ht-500 pd-x-20 pd-xs-x-0">
                    <div class="card wd-350 shadow-base">
                        <div class="card-body pd-x-20 pd-xs-40">
                            <h5 class="tx-xs-24 tx-normal tx-gray-900 mg-b-15">Change Password</h5>

                            <form action="{{ route('user.storePassword') }}" method="POST">
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
                                <div class="form-group">
                                    <input class="form-control" type="password" name="current_password" placeholder="Enter Current Password">
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <input class="form-control" type="password" name="new_password" placeholder="Enter New password">
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <input class="form-control" type="password" name="new_confirm_password" placeholder="Confirm password">
                                </div><!-- form-group -->
                                <button class="btn btn-info btn-block" type="submit">Update</button>
                            </form>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>

            </div><!-- br-section-wrapper -->
        </div>
    </div>

@endsection
