@extends('admin.layouts.app2')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">{{ $user_details->name }} Deposits</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-xl-3 col-md-4">
                                    <div class="text-center card-box shadow-none border border-secoundary">
                                        <div class="member-card">
                                            <a href="{{ route('admin.user_details', $user_details->id) }}">
                                                <div class="avatar-xl member-thumb mb-3 mx-auto d-block">
                                                    <img src="{{ $user_details->profile_pic }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                                    {!! $user_details->admin_status() !!}
                                                </div>
                                            </a>

                                            <div class="">
                                                <h5 class="font-18 mb-1">{{ $user_details->last_name }}</h5>
                                                <p class="text-muted mb-2">{{ $user_details->email }}</p>
                                                <h5 class="font-18 mb-1">Account Bal: $ @convert($user_details->account->balance)</h5>
                                            </div>
                                            <a href="{{ route('admin.user_message', $user_details->id) }}" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Messages</a>
                                            <a href="{{ route('admin.personal_details', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">User Details</a>
                                            @if( $user_details->status == 0)
                                                <a href="{{ route('admin.verify_user', $user_details->id) }}" title="Verify this user" class="btn btn-secondary btn-sm width-sm waves-effect mt-2 waves-light">Verify User</a>
                                            @else
                                            @endif
{{--                                            <a href="{{ route('admin.user_details', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Deposits</a>--}}
{{--                                            <a href="{{ route('admin.user_withdrawal', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Withdrawal</a>--}}


                                            <hr/>

                                            <div class="text-left">
                                                <table style="width:100%">
                                                    <tr>
                                                        <th>First Name:</th>
                                                        <td>{{$user_details->first_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Last Name:</th>
                                                        <td>{{ $user_details->last_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email:</th>
                                                        <td>{{ $user_details->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Created At :</th>
                                                        <td>{{ date('d/m/Y', strtotime($user_details->created_at)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><hr></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Account No:</th>
                                                        <td>{{ optional($user_details->account)->account_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Account Type:</th>
                                                        <td>{{ $user_details->account_type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Account Limit:</th>
                                                        <td>${{ optional($user_details->account)->account_limit_per_day }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Active:</th>
                                                        <td>{!! optional($user_details->account)->active() !!}</td>
                                                    </tr>
                                                </table>

                                            </div>


                                        </div>

                                    </div>
                                    <!-- end card-box -->

                                </div>
                                <!-- end col -->

                                <div class="col-xl-9 col-md-8">
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Approved Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($user_deposit->transactions as $deposit)
                                            <tr>
                                                <td><strong>$@convert($deposit->amount)</strong></td>
{{--                                                <td><strong>{{ $deposit->user->email }}</strong></td>--}}

                                                <td><strong>{!! $deposit->admin_status() !!}</strong></td>
                                                <td><strong>{{ date('d/m/y', strtotime($deposit->created_at)) }}</strong></td>
                                                <td><strong>{{ date('d/m/y', strtotime($deposit->updated_at ? : '--/--/--/')) }}</strong></td>

                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.withdrawal_details', $deposit->id) }}" class="btn btn-secondary btn-sm">View</a>
{{--                                                        @if($deposit->status == 0)--}}
{{--                                                            <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>--}}
{{--                                                            </a>--}}

{{--                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">--}}
{{--                                                                <a class="dropdown-item" href="{{ route('admin.user_deposit', $deposit) }}">Approve</a>--}}
{{--                                                            </div>--}}
{{--                                                        @else--}}
{{--                                                        @endif--}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                    <form action="{{ route('admin.fund_account', $user_details->id) }}" method="POST" class="mt-5">
                                        @csrf
                                        @if(session()->has('fund_success'))
                                            <p class="alert alert-success">{{ session('fund_success') }}</p>
                                        @endif
                                        <div class="form-group">
                                            <label>Fund Account</label>
                                            <input type="number" name="amount" class="form-control col-md-6" placeholder="Enter Amount">
                                            <button type="submit" class="btn btn-success mt-2 col-md-2">Send</button>
                                        </div>
                                    </form>

                                    <form action="{{ route('admin.defund_account', $user_details->id) }}" method="POST" class="mt-5">
                                        @csrf
                                        @if(session()->has('defund_account'))
                                            <p class="alert alert-success">{{ session('defund_account') }}</p>
                                        @endif
                                        <div class="form-group">
                                            <label>Defund Account</label>
                                            <input type="number" name="amount" class="form-control col-md-6" placeholder="Enter Amount">
                                            <button type="submit" class="btn btn-success mt-2 col-md-2">Defund</button>
                                        </div>
                                    </form>
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <form class="form-horizontal" action="{{ route('admin.update_bank', $user_details->id) }}" method="POST">
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
{{--                                                    <div class="form-group row">--}}
{{--                                                        <label class="col-md-2 control-label">Account Type</label>--}}
{{--                                                        <div class="col-md-10">--}}
{{--                                                            <select name="account_type" id="" class="form-control">--}}
{{--                                                                <option>Chose Account Type</option>--}}
{{--                                                                <option value="personal_account">Personal Account</option>--}}
{{--                                                                <option value="business_account">Business Account</option>--}}
{{--                                                            </select>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                    <div class="form-group row">
                                                        <label class="col-md-2 control-label">Account Limit Per Day</label>
                                                        <div class="col-md-10">
                                                            <input type="number" required name="account_limit_per_day" class="form-control" value="{{ old('account_limit_per_day', optional($user_details)->account_limit_per_day) }}" placeholder="Account Limit">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 control-label">Block Account</label>
                                                        <div class="col-md-10">
                                                            <select name="active" id="" class="form-control" required="required">
                                                                <option value="" selected disabled>Select</option>
                                                                <option value="0" {{ old('active', $user_details->active) == 0 ? 'selected' : '' }}>No</option>
                                                                <option value="1" {{ old('active', $user_details->active) == 1 ? 'selected' : '' }}>Yes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <div class="col-md-10">
                                                            <button type="submit" class="btn btn-primary">Done</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <!-- end col -->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->

            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2018 - 2020 &copy; Zircos theme by <a href="#">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <script>
        $(function() {
            $("select").each(function (index, element) {
                const val = $(this).data('value');
                if(val !== '') {
                    $(this).val(val);
                }
            });
        })
    </script>
@endsection
