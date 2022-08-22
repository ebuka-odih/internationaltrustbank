@extends('dashboard.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Transfer Code</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.acuTransfer') }}">Transfer</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transfer NSB Code</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


            <!-- Layouts -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">NSB Code</h3>
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

                        </div>

                        <div class="col-lg-12 space-y-2">
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('user.nsb_store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="withdrawal_id" value="{{ $with_dt->id }}">

                                <div class="col-lg-12">
                                    <label for="example-ltf-text">NSB Code <span class="text-danger">*</span></label>
                                    <input required="" type="text" class="form-control form-control-lg" id="example-if-password" name="nsb_code" placeholder="000111">
                                </div>
                                <div class="col-lg-12">
                                    <p>Request for an NSB Code <a target="_blank" href="mailto:support@nsbplc.com">support@nsbplc.com</a></p>
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
