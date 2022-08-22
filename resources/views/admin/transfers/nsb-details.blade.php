@extends('admin.layouts.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Transfer Details</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Layouts -->
            <div class="block block-rounded">

                <div class="block-content">
                    <div class="block-header block-header-default mb-3">
                        <h3 class="block-title text-center">Transaction Details</h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 space-y-2">

                            <table class="table table-striped" style="width:100%">
                                <tr>
                                    <th>Amount:</th>
                                    <td>$@convert($transfer->amount)</td>
                                </tr>
                                <tr>
                                    <th>Transfer Type:</th>
                                    <td>{{ $transfer->transactionType() }}</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>{!! $transfer->status() !!}</td>
                                </tr>
                                <tr>
                                    <th>User NSB Code:</th>
                                    <td>{{ $transfer->nsb_code ? : "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th>Admin NSB Code:</th>
                                    <td>{{ $transfer->admin_nsb_code ? : "N/A" }}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <br>

                    <div class="block-header block-header-default mb-3">
                        <h3 class="block-title text-center">Sender Details</h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 space-y-2">

                            <table class="table table-striped" style="width:100%">
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $transfer->user->first_name." ".$transfer->user->last_name }}</td>
                                </tr>
                                <tr>
                                    <th>Account Number:</th>
                                    <td>{{ $transfer->from }}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <br>

                    <div class="block-header block-header-default mb-3">
                        <h3 class="block-title text-center">Receiver Details</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 space-y-2">
                            <table class="table table-striped" style="width:100%">
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $transfer->rep_name }}</td>
                                </tr>
                                <tr>
                                    <th>Account Number:</th>
                                    <td>{{ $transfer->acct_number }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    @if($transfer->status == 0)
                    <div class="row">
                        <div class="col-lg-4">
                            <button onclick="myFunction()" class="btn btn-secondary">Generate Code</button>
                            <p id="demo" class="mt-2" style="font-size: 20px"></p>
                        </div>

                    </div>
                    <br>
                    <hr>

                    <div class="row">
                        @if(session()->has('admin_nsb_code'))
                            <div class="alert alert-success">
                                {{ session()->get('admin_nsb_code') }}
                            </div>
                        @endif
                        <div class="col-lg-8 space-y-2">
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('admin.admin_nsb', $transfer->id) }}" method="POST" >
                                @csrf

                                <div class="col-12">
                                    <label class="" for="example-if-email">NSB Code</label>
                                    <input type="text" value="{{ old('nsb_code', optional($transfer)->nsb_code) }}" class="form-control" id="example-if-email" name="admin_nsb_code" >
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-secondary">Send</button>
                                </div>
                            </form>
                            <!-- END Form Inline - Default Style -->


                        </div>
                    </div>
                    <br>
                    @endif

                </div>
            </div>
            <!-- END Layouts -->
        </div>
        <!-- END Page Content -->
    </main>

    <script>
        function myFunction() {
            var x = Math.floor((Math.random() * 1000000) + 1);
            document.getElementById("demo").innerHTML = x;
        }
    </script>
@endsection
