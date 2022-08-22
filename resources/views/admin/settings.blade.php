
@extends('admin.layouts.app2')
@section('content')
    <!-- Table datatable css -->


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
                            <h4 class="page-title">Settings</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <form action="{{ route('admin.admin_info_store') }}" method="POST">
                                @csrf
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">First Name</label>
                                        <input type="text" value="{{ auth()->user()->first_name }}" name="first_name" class="form-control" id="inputEmail4" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Last Name</label>
                                        <input type="text" value="{{ auth()->user()->last_name }}" name="last_name" class="form-control" id="inputPassword4" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Email</label>
                                        <input type="text" value="{{ auth()->user()->email }}" name="email" class="form-control" id="inputEmail4" >
                                        <span>Please make sure you are changing to a valid email when changing your email</span>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Update Info</button>
                            </form>
                            <br>


                            <form action="{{ route('admin.change_password') }}" method="POST">
                                @csrf
                                @if(session()->has('change_password'))
                                    <div class="alert alert-success">
                                        {{ session()->get('change_password') }}
                                    </div>
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Old Password</label>
                                        <input type="text" name="current-password" class="form-control" id="inputEmail4" >
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Password</label>
                                        <input type="text" name="new_password" class="form-control" id="inputEmail4" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Confirm</label>
                                        <input type="text" name="new_confirm_password" class="form-control" id="inputPassword4" >
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </form>
                        </div>




                    </div>
                </div>

                <!-- end row -->

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
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );

    </script>
@endsection
