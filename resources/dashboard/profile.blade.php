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
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Profile</a></li>
                <li class="nav-item hidden-xs-down"><a class="nav-link" href="{{ route('user.editProfile', $user->id) }}" >Edit Profile</a></li>
            </ul>
        </div>

        <div class="tab-content br-profile-body">
            <div class="tab-pane fade active show" id="posts">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="media-list bg-white rounded shadow-base">
                            <h3 class="text-center">Personal Information</h3>
                            <table class="table table-striped" style="width:100%">
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $user->first_name." ".$user->last_name }}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Telephone:</th>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Title:</th>
                                    <td>{{ $user->title }}</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>{{ $user->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Marital Status:</th>
                                    <td>{{ $user->m_status }}</td>
                                </tr>
                                <tr>
                                    <th>Date of Birth:</th>
                                    <td>{{ $user->date_of_birth }}</td>
                                </tr>
                                <tr>
                                    <th>Home Address:</th>
                                    <td>{{ $user->address.", ".$user->address2 }}</td>
                                </tr>
                                <tr>
                                    <th>City:</th>
                                    <td>{{ $user->city }}</td>
                                </tr>
                                <tr>
                                    <th>Zipcode:</th>
                                    <td>{{ $user->zipcode }}</td>
                                </tr>
                                <tr>
                                    <th>State:</th>
                                    <td>{{ $user->state }}</td>
                                </tr>
                                <tr>
                                    <th>Country:</th>
                                    <td>{{ $user->country }}</td>
                                </tr>
                                <tr>
                                    <th>Occupation:</th>
                                    <td>{{ $user->occupation }}</td>
                                </tr>
                            </table>
                        </div><!-- card -->

                    </div><!-- col-lg-8 -->

                </div><!-- row -->

                <div class="row">
                    <div class="col-lg-10">
                        <div class="media-list bg-white rounded shadow-base">
                            <h3 class="text-center">Account Information</h3>
                            <table class="table table-striped" style="width:100%">
                                <tr>
                                    <th>Account Number:</th>
                                    <td>{{ $user->account->account_number }}</td>
                                </tr>
                                <tr>
                                    <th>Account Type:</th>
                                    <td>{{ $user->account_type }}</td>
                                </tr>
                                <tr>
                                    <th>Account Currency:</th>
                                    <td>{{ $user->preferred_currency }}</td>
                                </tr>
                                <tr>
                                    <th>Account Status:</th>
                                    <td>{!! $user->account->active() !!}</td>
                                </tr>
                            </table>
                        </div><!-- card -->

                    </div><!-- col-lg-8 -->

                </div><!-- row -->
            </div><!-- tab-pane -->

        </div><!-- br-pagebody -->

    </div>

@endsection
