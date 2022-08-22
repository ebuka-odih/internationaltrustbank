@extends('dashboard.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Deposit</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.deposit') }}">Deposit</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bitcoin Deposit</li>
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
                    <a class="block block-rounded block-link-shadow" href="{{ route('user.deposit')}}" >
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
                    <a class="block block-rounded block-link-shadow" href="{{ route('user.bitcoin') }}" style="background-color: #2f3654; color: #8492b1;">
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
                            <h5>Pay into the Bitcoin address below</h5>
                            <h6 class="text-danger">(Your account will be funded with the corresponded amount deposit through bitcoin transaction)</h6>
                            <hr>
                            <div class="table">
                                <h3 class="text-center">Make payment of any amount below</h3>
                                <table class="table" style="width:100%">

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
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" >
                                @csrf

                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Name </label>
                                    <input readonly type="text" class="form-control form-control-lg" id="example-if-password" name="name" value="{{ auth()->user()->first_name." ".auth()->user()->last_name }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Account Email </label>
                                    <input readonly type="email" class="form-control form-control-lg" id="example-if-password" name="amount" value="{{ auth()->user()->email }}">
                                </div>
                                <hr>
                                <div class="col-lg-10 offset-lg-2">
                                    <img height="200" width="200" src="https://2d6qxj3uqdaw38d6lk27l0ao-wpengine.netdna-ssl.com/wp-content/uploads/2015/10/apb-qr-code.png" alt="">
                                </div>

                                <div class="col-lg-8">
                                    <div class="mb-4">
                                        <label for="example-ltf-text">Wallet Address</label>
                                        <div class="input-group">
                                            <input  type="text" class="form-control" id="foo" value="dsfdghjkjhfdsadfg" >                                            <span class="input-group-text">
                                              <a class="btn btn-info" data-clipboard-target="#foo">
                                                    <i class="fa fa-clipboard fs-2"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-secondary">Paid</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
    </script>

@endsection
