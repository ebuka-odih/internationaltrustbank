@extends('dashboard.layout.app')
@section('content')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Deposit</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.deposits') }}">Deposit</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Internal Deposit</li>
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
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)" style="background-color: #2f3654; color: #8492b1;">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-dollar-sign fa-3x text-gray"></i>
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Bank Deposit
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>

                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="{{ route('user.bitcoin') }}">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fab fa-bitcoin fa-3x text-gray"></i>
                                {{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Bitcoin Deposit
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
                                <i class="fab fa-monero fa-3x text-gray"></i>
                                {{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    MoneyGram
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
                    <h3 class="block-title">Make A Deposit</h3>
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
                          <div class="table">
                              <table class="table" style="width:100%">
                                  <tr>
                                      <th>Bank Name:</th>
                                      <td>Bill Gates</td>
                                  </tr>
                                  <tr>
                                      <th>Account Name:</th>
                                      <td>---</td>
                                  </tr>
                                  <tr>
                                      <th>Account Number:</th>
                                      <td>---</td>
                                  </tr>
                                  <tr>
                                      <th>Swift Code:</th>
                                      <td>555 77 855</td>
                                  </tr>
                                  <tr>
                                      <th>Routine Number:</th>
                                      <td>555 77 855</td>
                                  </tr>
                                  <tr>
                                      <th>First Amount:</th>
                                      <td>$3000</td>
                                  </tr>
                                  <tr>
                                      <th>Second Amount:</th>
                                      <td>$5000</td>
                                  </tr>
                                  <tr>
                                      <th>Third Amount:</th>
                                      <td>$6000</td>
                                  </tr>
                              </table>
                          </div>

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
