@extends('dashboard.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Request Loan</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


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
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('user.loan.store') }}" method="POST" >
                                @csrf

                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Loan Type <span class="text-danger">*</span></label>
                                    <select name="loan_type" id="" class="form-control">
                                        <option selected disabled>Choose Loan Type</option>
                                        <option value="Business Loan">Business Loan</option>
                                        <option value="School Loan">School Loan</option>
                                        <option value="House Hold Loan">House Hold Loan</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Enter Amount<span class="text-danger">*</span></label>
                                    <input required type="number" class="form-control form-control-lg" id="example-if-password" name="amount">
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Currency <span class="text-danger">*</span></label>
                                    <select name="currency" required class="form-control currency_changer" id="currency">
                                        <option selected>Prefered Currency</option>
                                        <option value="USD">USD</option>
                                        <option value="GBP">British pound (GBP)</option>
                                        <option value="EURO">EURO (EUR)</option>
                                        <option value="AUD" >Australian Dollar (AUD)</option>
                                        <option value="CAD">Canadian Dollars (CAD)</option>
                                        <option value="CHF">Swiss Franc (fr)</option>
                                        <option value="JPY">Japanese Yen (JPY)</option>
                                        <option value="NZD">New Zealand Dollars (NZD)</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Description</label>
                                    <input type="text" class="form-control form-control-lg" id="example-if-password" name="desc" placeholder="Description">
                                </div>

                                <div class="col-lg-6">
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
