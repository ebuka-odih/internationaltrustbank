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
                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="{{ route('user.acuTransfer') }}">
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

                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="{{ route('user.otherBankTransfer') }}"  style="background-color: #2f3654; color: #8492b1;">
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


                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="{{ route('user.wire_transfer') }}">
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
                        <div class="col-lg-10 offset-lg-1">
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
                        </div>


                        <div class="col-lg-12 space-y-2">
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('user.storeObankTransfer') }}" method="POST">
                               @csrf

                                <input type="hidden" name="trans_type" value="obank_transfer">
                                <input type="hidden"  class="form-control form-control-lg" id="example-if-email" name="from" value="{{ auth()->user()->account->account_number }}">

                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Bank Name <span class="text-danger">*</span></label>
                                    <input type="text"  class="form-control form-control-lg" id="example-if-email" name="bank_name" placeholder="Bank Name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Account Name <span class="text-danger">*</span></label>
                                    <input type="text"  class="form-control form-control-lg" id="example-if-email" name="rep_name" placeholder="Account Name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-ltf-text">Account Number <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-lg" id="example-if-password" name="acct_number" placeholder="Recipient Acct No">
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Amount <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-lg" id="example-if-password" name="amount" placeholder="$">
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Description</label>
                                    <input type="text" class="form-control form-control-lg" id="example-if-password" name="note" placeholder="Description">
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-secondary">Send</button>
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
