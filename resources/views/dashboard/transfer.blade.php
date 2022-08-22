@extends('dashboard.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Transfer</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transfer</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-xl-3">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)" style="background-color: #0a0c15; color: #8492b1;">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-university fa-3x text-gray"></i>
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    ACU Transfer
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>

                <div class="col-xl-3">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-exchange-alt fa-3x text-gray"></i>
{{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Other Bank Transfer
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>

                <div class="col-xl-3">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-money-check-alt fa-3x text-gray"></i>
                                {{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Foreign Currency
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>

                <div class="col-xl-3">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-wifi fa-3x text-gray"></i>
                                {{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Wire Transfer
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
                    <h3 class="block-title">Make A Transfer</h3>
                </div>
                <div class="block-content">

                    <div class="row">

                        <div class="col-lg-12 space-y-2">
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">From <span class="text-danger">*</span></label>
                                    <input type="text" readonly class="form-control form-control-lg" id="example-if-email" name="from" value="{{ auth()->user()->account->account_number }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Amount <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-lg" id="example-if-password" name="amount" placeholder="$">
                                </div>

                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Transaction Type <span class="text-danger">*</span></label>
                                    <select id="inputState" name="trans_type" class="form-control form-control-lg" required="">
                                        <option selected="">Choose Transaction Type</option>
                                        <option value="Internal-Transaction">Internal Transaction</option>
                                        <option value="Local-Transaction">Local Transaction</option>
                                        <option value="International-Transaction">International Transaction</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Account Number <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-lg" id="example-if-password" name="acct_number" placeholder="Recipient Acct No">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Recipient's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="example-if-password" name="rep_name" placeholder="Recipient Name">
                                </div>

                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Bank Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="example-if-password" name="bank_name" placeholder="Recipient Acct No">
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Account Type <span class="text-danger">*</span></label>
                                    <select id="inputState" name="account_type" class="form-control form-control-lg" required="">
                                        <option selected="" disabled="">Account Type</option>
                                        <option value="Savings">Savings</option>
                                        <option value="Checking">Checking</option>
                                        <option value="Current">Current</option>
                                        <option value="Offshore">Offshore</option>
                                        <option value="Joint">Joint</option>
                                        <option value="Fixed Deposit">Fixed Deposit</option>
                                    </select>
                                </div>
                            </form>
                            <!-- END Form Inline - Default Style -->

                        </div>
                    </div>
                    <br>

                </div>
            </div>
            <!-- END Layouts -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
