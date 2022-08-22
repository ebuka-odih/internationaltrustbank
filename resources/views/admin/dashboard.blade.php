@extends('admin.layouts.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Dashboard
                    </h1>
                    <p class="fw-medium mb-0 text-muted">
                        Welcome, {{ auth()->user()->first_name." ".auth()->user()->last_name }}!
                    </p>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Overview -->
            <div class="row items-push">
                <div class="col-sm-6 col-xl-3">
                    <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                        <div class="block-content block-content-full flex-grow-1">
                            <div class="item rounded-3 bg-body mx-auto my-3">
                                <i class="fa fa-users fa-lg text-primary"></i>
                            </div>
                            <div class="fs-1 fw-bold">{{ $users }}</div>
                            <div class="text-muted mb-3">Registered Users</div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                        <div class="block-content block-content-full flex-grow-1">
                            <div class="item rounded-3 bg-body mx-auto my-3">
                                <i class="fa fa-level-up-alt fa-lg text-primary"></i>
                            </div>
                            <div class="fs-1 fw-bold">{{ $transfer }}</div>
                            <div class="text-muted mb-3">Transfers</div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                        <div class="block-content block-content-full flex-grow-1">
                            <div class="item rounded-3 bg-body mx-auto my-3">
                                <i class="fa fa-chart-line fa-lg text-primary"></i>
                            </div>
                            <div class="fs-1 fw-bold">{{ $deposits }}</div>
                            <div class="text-muted mb-3">Deposits</div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                        <div class="block-content block-content-full">
                            <div class="item rounded-3 bg-body mx-auto my-3">
                                <i class="fa fa-wallet fa-lg text-primary"></i>
                            </div>
                            <div class="fs-1 fw-bold">${{ $money_transferred }}</div>
                            <div class="text-muted mb-3">Money Transferred</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Overview -->

            <!-- Latest Orders + Stats -->

            <!-- END Latest Orders + Stats -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
