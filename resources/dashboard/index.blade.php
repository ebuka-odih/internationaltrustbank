@extends('dashboard.layout.app')
@section('content')

<div class="br-mainpanel">
    <div class="br-pagetitle">
        <img style="border-radius: 50%" src="{{ asset('avatar/'.auth()->user()->avatar) }}" alt="">
{{--        <i class="icon ion-ios-home-outline"></i>--}}
        <div>
            <h2>Welcome...</h2>
{{--            <h4 class="mg-b-0">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h4>--}}
        </div>
    </div>

    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <img class="pl-2" style=" height: 150px; width: 150px" src="https://cdn.vox-cdn.com/thumbor/zFJuBWv5NjSeVilWJntvQcgji5M=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19979927/jomi_avatar_nickleodeon_ringer.jpg" alt="">
                            <h4 class="pl-2">{{  auth()->user()->first_name.' '.auth()->user()->last_name }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="bg-info rounded overflow-hidden">
                    <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                        <i class="ion ion-cash tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Avaliable Balance</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">@convert(auth()->user()->account->balance) </p>
                        </div>
                    </div>
                    <div id="ch1" class="ht-50 tr-y-1"></div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="bg-purple rounded overflow-hidden">
                    <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                        <i class="ion ion-arrow-down-a tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Inflow</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">$329,291</p>
                        </div>
                    </div>
                    <div id="ch3" class="ht-50 tr-y-1"></div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                        <i class="ion ion-arrow-up-a tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Outflow</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">54.45%</p>
                        </div>
                    </div>
                    <div id="ch2" class="ht-50 tr-y-1"></div>
                </div>
            </div><!-- col-3 -->

            <!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
            <h4>Recent Transactions</h4>

            <div class="col-lg-12">
                <div class="card bd-0 shadow-base">
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table table-striped mg-b-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($withdrawal as $item)
                            <tr>
                                <th scope="row">{{ $item->withdraw_id }}</th>
                                <td>{{ date('d M y h:i A', strtotime($item->created_at)) }}</td>
                                <td>$@convert($item->amount)</td>
                                <td>{!! $item->status() !!}</td>
                                <td><a href="{{ route('user.withdrawal_details', $item->id) }}" class="btn btn-link">View</a></td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div><!-- card -->



            </div><!-- col-8 -->

        </div><!-- row -->

    </div><!-- br-pagebody -->

</div>

@endsection
