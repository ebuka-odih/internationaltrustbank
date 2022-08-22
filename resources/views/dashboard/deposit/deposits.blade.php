@extends('dashboard.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Deposits</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Deposits</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">


        <!-- Latest Orders + Stats -->
        <div class="row">
            <div class="col-md-12">
                <!--  Latest Orders -->
                <div class="block block-rounded block-mode-loading-refresh">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Latest Deposits
                        </h3>

                    </div>
                    <div class="block-content">
                        <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                            <thead>
                            <tr class="text-uppercase">
                                <th class="d-none d-xl-table-cell">Date</th>
                                <th>From</th>
                                <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Amount</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deposits as $item)
                            <tr>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                </td>
                                <td>
                                    <span class="fw-semibold">{{ $item->from }}</span>
                                </td>

                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $@convert($item->amount)
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">{!! $item->status() !!}</span>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $deposits->links() !!}
                        </div>
                    </div>

                </div>
                <!-- END Latest Orders -->
            </div>
        </div>
        <!-- END Latest Orders + Stats -->
    </div>
    <!-- END Page Content -->
</main>

@endsection
