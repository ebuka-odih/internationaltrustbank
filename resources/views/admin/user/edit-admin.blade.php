@extends('admin.layouts.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Admin</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Layouts -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title text-center">Personal Info</h3>
                </div>
                <div class="block-content">
                    <!-- Inline Layout -->
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-lg-12 space-y-2">
                            <!-- Form Inline - Alternative Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('admin.store_admin') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <input type="hidden" name="account_type" value="Savings">

                                <div class="col-lg-4">
                                    <label class="" for="example-if-email2">First Name</label>
                                    <input value="{{ old('first_name', optional($user)->first_name) }}" type="text" class="form-control form-control-alt"  id="example-if-email2" name="first_name" >
                                </div>
                                <div class="col-lg-4">
                                    <label class="" for="example-if-email2">Last Name</label>
                                    <input value="{{ old('last_name', optional($user)->last_name) }}" type="text" class="form-control form-control-alt" id="example-if-email2" name="last_name" >
                                </div>
                                <div class="col-lg-4">
                                    <label class="" for="example-if-email2">Email</label>
                                    <input value="{{ old('email', optional($user)->email) }}" type="email" required class="form-control form-control-alt" id="example-if-email2" name="email" >
                                </div>
                                <div class="col-lg-12">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title text-center">Password</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="" for="example-if-email2">Old Password</label>
                                    <input  type="password" name="current_password" class="form-control form-control-alt" id="example-if-email2"  >
                                </div>
                                <div class="col-lg-4">
                                    <label class="" for="example-if-email2">New Password</label>
                                    <input  type="password" name="new_password" class="form-control form-control-alt" id="example-if-email2"  >
                                </div>
                                <div class="col-lg-4">
                                    <label class="" for="example-if-email2">Confirm New Password</label>
                                    <input  type="password" name="new_confirm_password" class="form-control form-control-alt" id="example-if-email2"  >
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-secondary">Update</button>
                                </div>
                            </form>
                            <!-- END Form Inline - Alternative Style -->
                        </div>
                    </div>
                    <!-- END Inline Layout -->
                    <br>



                </div>
            </div>
            <!-- END Layouts -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
