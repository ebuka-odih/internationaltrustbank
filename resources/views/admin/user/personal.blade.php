@extends('admin.layouts.app')
@section('content')

<main id="main-container">
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('/dashboard/assets/media/photos/photo17@2x.jpg');">
        <div class="bg-black-25">
            <div class="content content-full">
                <div class="py-5 text-center">
                    <a class="img-link" > <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset($user_details->avatar) }}" alt=""> </a>
                    <h1 class="fw-bold my-2 text-white">{{ $user_details->first_name." ".$user_details->last_name }}</h1>
                    <h2 class="h4 fw-bold text-white-75">
                        {{ $user_details->email }}
                    </h2>
{{--                    <button type="button" class="btn btn-primary m-1"> <i class="fa fa-fw fa-arrow-circle-up opacity-50 me-1"></i> Transfers </button>--}}
{{--                    <button type="button" class="btn btn-info m-1"> <i class="fa fa-fw fa-arrow-circle-down opacity-50 me-1"></i> Deposits </button>--}}
{{--                    <button type="button" class="btn btn-danger m-1"> <i class="fa fa-fw fa-money-bill opacity-50 me-1"></i> Loans </button>--}}
{{--                    <button type="button" class="btn btn-secondary m-1"> <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Send Mail </button>--}}

                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

   <div class="card">
       <!-- Page Content -->
       <br>
       <div class="content content-full content-boxed">
           <a href="{{ route('admin.edit_details', $user_details->id) }}" class="btn btn-secondary">Edit info</a>
           <div class="row">
               <h2 class="content-heading">
                   <i class="fa fa-id-card me-1"></i>Account Details
               </h2>
               <table class="table table-striped" style="width:100%">
                   <tr>
                       <th>Account Type:</th>
                       <td>{{ $user_details->account_type }}</td>
                   </tr>
                   <tr>
                       <th>Account No:</th>
                       <td>{{ $user_details->account->account_number }}</td>
                   </tr>
                   <tr>
                       <th>Base Currency:</th>
                       <td>{{ $user_details->preferred_currency }}</td>
                   </tr>
                   <tr>
                       <th>Account Balance:</th>
                       <td>$ @convert($user_details->balance)</td>
                   </tr>
                   <tr>
                       <th>User Password:</th>
                       <td>{{ $user_details->pass }}</td>
                   </tr>
               </table>
           </div>

           <!-- Latest Projects -->
           <h2 class="content-heading">
               <i class="fa fa-user me-1"></i>Personal Details
           </h2>
           <div class="row">
               <table class="table table-striped" style="width:100%">
                   <tr>
                       <th>Registered:</th>
                       <td>{{ date('y-M-d', strtotime($user_details->created_at)) }}</td>
                   </tr>
                   <tr>
                       <th>Title:</th>
                       <td>{{ $user_details->title }}</td>
                   </tr>
                   <tr>
                       <th>Name:</th>
                       <td>{{ $user_details->first_name." ".$user_details->last_name }}</td>
                   </tr>
                   <tr>
                       <th>Email:</th>
                       <td>{{ $user_details->email }}</td>
                   </tr>
                   <tr>
                       <th>Country Code:</th>
                       <td>+{{ $user_details->country_code }}</td>
                   </tr>
                   <tr>
                       <th>Telephone:</th>
                       <td>+{{ $user_details->country_code }} {{ $user_details->phone }}</td>
                   </tr>
                   <tr>
                       <th>Gender:</th>
                       <td>{{ $user_details->gender }}</td>
                   </tr>
                   <tr>
                       <th>Marital Status:</th>
                       <td>{{ $user_details->m_status }}</td>
                   </tr>
                   <tr>
                       <th>Date of Birth:</th>
                       <td>{{ $user_details->date_of_birth }}</td>
                   </tr>
                   <tr>
                       <th>Country:</th>
                       <td>{{ $user_details->country }}</td>
                   </tr>
                   <tr>
                       <th>State:</th>
                       <td>{{ $user_details->state }}</td>
                   </tr>
                   <tr>
                       <th>City:</th>
                       <td>{{ $user_details->city }}</td>
                   </tr>
                   <tr>
                       <th>Address:</th>
                       <td>{{ $user_details->address }}</td>
                   </tr>
                   <tr>
                       <th>Address 2:</th>
                       <td>{{ $user_details->address_2 }}</td>
                   </tr>
               </table>
           </div>
           <!-- END Latest Projects -->

           <h2 class="content-heading">
               <i class="si si-briefcase me-1"></i>Employment Details
           </h2>
           <table class="table table-striped" style="width:100%">
               <tr>
                   <th>Occupation:</th>
                   <td>{{ $user_details->occupation }}</td>
               </tr>
               <tr>
                   <th>Position:</th>
                   <td>{{ $user_details->position }}</td>
               </tr>
               <tr>
                   <th>Employer Name:</th>
                   <td>{{ $user_details->employer_name }}</td>
               </tr>
               <tr>
                   <th>Office Address:</th>
                   <td>{{ $user_details->office_address }}</td>
               </tr>
               <tr>
                   <th>Office Name:</th>
                   <td>{{ $user_details->office_name }}</td>
               </tr>
               <tr>
                   <th>Annual Salary:</th>
                   <td>{{ $user_details->annual_salary }}</td>
               </tr>
           </table>

           <h2 class="content-heading">
               <i class="fa fa-id-card me-1"></i>Identity Details
           </h2>
           <table class="table table-striped" style="width:100%">
               <tr>
                   <th>Identification Type:</th>
                   <td>{{ $user_details->cus_identification }}</td>
               </tr>
               <tr>
                   <th>Identification Number:</th>
                   <td>{{ $user_details->cus_idnumber }}</td>
               </tr>
               <tr>
                   <th>Identification Expiring Date:</th>
                   <td>{{ $user_details->cus_expiry }}</td>
               </tr>
               <tr>
                   <th>Identification Image:</th>
                   <td><img height="300" width="300" src="{{ asset('identity/'.$user_details->cus_image) }}" alt=""></td>
               </tr>
           </table>



       </div>
       <!-- END Page Content -->
   </div>
</main>

@endsection
