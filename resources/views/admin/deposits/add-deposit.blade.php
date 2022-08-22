@extends('admin.layouts.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Deposit</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


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


                        </div>

                        <div class="col-lg-12 space-y-2">
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('admin.storeDeposit') }}" method="POST" >
                                @csrf

                                <input type="hidden" name="trans_type" value="nsb_transfer">
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">From <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="example-if-email" name="from">
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Amount <span class="text-danger">*</span></label>
                                    <input required type="number" class="form-control form-control-lg" id="example-if-password" name="amount">
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Select User <span class="text-danger">*</span></label>
                                    <select name="user_id" id="" class="form-control">
                                        @foreach($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->first_name." ".$item->last_name }}  ({{ $item->account->account_number }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Description</label>
                                    <input type="text" class="form-control form-control-lg" id="example-if-password" name="note" placeholder="Description">
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
