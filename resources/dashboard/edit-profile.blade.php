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

    <div class="br-mainpanel br-profile-page">

        <div class="card shadow-base bd-0 rounded-0 widget-4">
            <div class="card-header ht-75">

            </div><!-- card-header -->
            <div class="card-body">
                <div class="card-profile-img">
                    <img src="https://via.placeholder.com/500" alt="">
                </div><!-- card-profile-img -->
                <h4 class="tx-normal tx-roboto tx-white">{{ auth()->user()->first_name." ".auth()->user()->last_name }}</h4>
                <p class="mg-b-25">{{ auth()->user()->email }}</p>

            </div><!-- card-body -->
        </div><!-- card -->

        <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
            <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
                <li class="nav-item"><a class="nav-link" href="{{ route('user.profile') }}" >Profile</a></li>
                <li class="nav-item hidden-xs-down"><a class="nav-link active" href="{{ route('user.editProfile', $user->id) }}" >Edit Profile</a></li>
            </ul>
        </div>

        <div class="br-pagebody">

        <div class="tab-content br-profile-body">
            <div class="tab-pane fade active show" id="posts">
                <div class="row">
                    <div class="col-lg-10">
                        <h4 class="text-center">Contact Your Account Manager To edit Your information</h4>
                        <div class="media-list bg-white rounded shadow-base">

                            <div class="row">
                                <div class="col-xl-12">
                                    <h3 class="text-center"><a  href="mailto:account-officer@nsbplc.com">account-officer@nsbplc.com</a></h3>
                                </div><!-- col-6 -->

                            </div>
                        </div>
                    </div><!-- col-lg-8 -->

                </div><!-- row -->

            </div><!-- tab-pane -->

        </div><!-- br-pagebody -->
        </div>

    </div>

@endsection
