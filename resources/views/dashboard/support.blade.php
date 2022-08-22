@extends('dashboard.layout.app')
@section('content')

    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Quick Overview -->
            <h2 class="content-heading">
                <i class="fa fa-angle-right text-muted me-1"></i> Quick Overview
            </h2>
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="row text-center">
                        <div class="col-md-4 py-3">
                            <div class="fs-1 fw-light text-dark mb-1">
                                @convert(auth()->user()->account->balance) <small style="font-size: 12px" class="badge bg-info">USD</small>
                            </div>
                            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Balance</a>
                        </div>
                        <div class="col-md-4 py-3">
                            <div class="fs-1 fw-light text-success mb-1">
                                +@convert($credit) <small style="font-size: 12px" class="badge bg-info">USD</small>
                            </div>
                            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Income Today</a>
                        </div>
                        <div class="col-md-4 py-3">
                            <div class="fs-1 fw-light text-danger mb-1">
                                -@convert($debit) <small style="font-size: 12px" class="badge bg-info">USD</small>
                            </div>
                            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Expenses Today</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- END Page Content -->
    </main>
    <script src="//code.jivosite.com/widget/4mUuj0iAgO" async></script>

@endsection
