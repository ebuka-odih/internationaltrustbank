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
                            <h4 class="page-title">{{ $user_details->name }} Messages</h4>
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
                                            <div class="avatar-xl member-thumb mb-3 mx-auto d-block">
                                                <img src="{{ $user_details->profile_pic }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                                {!! $user_details->admin_status() !!}
                                            </div>

                                            <div class="">
                                                <h5 class="font-18 mb-1">{{ $user_details->name }}</h5>
                                                <p class="text-muted mb-2">{{ $user_details->email }}</p>
                                            </div>
                                            <a href="{{ route('admin.user_message', $user_details->id) }}" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Messages</a>
                                            <a href="{{ route('admin.personal_details', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">User Details</a>
                                            @if( $user_details->status == 0)
                                                <a href="{{ route('admin.verify_user', $user_details->id) }}" title="Verify this user" class="btn btn-secondary btn-sm width-sm waves-effect mt-2 waves-light">Verify User</a>
                                            @else
                                            @endif
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
                                                        <th>Account No :</th>
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
                                    <a href="{{ route('admin.create', $user_details->id) }}" class="btn btn-primary btn-sm mb-5">Create Message</a>
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Title</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($user_msg->notifyUser as $message)
                                            <tr>
                                                <td><strong>{{ date('d/m/y', strtotime($message->created_at)) }}</strong></td>
                                                <td><strong class=" text d-inline-block text-truncate" style="max-width: 150px;">{{ $message->title}}</strong></td>
                                                <td class="text d-inline-block text-truncate" style="max-width: 150px;">{{ $message->message }}</td>
                                                <td>{!! $message->status() !!}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.msg_show', $message->id) }}" class="btn btn-secondary btn-sm">View</a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
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
@endsection
