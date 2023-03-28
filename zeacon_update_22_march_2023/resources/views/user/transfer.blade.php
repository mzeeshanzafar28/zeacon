@extends('layout.user-app')
@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            @if (Session::has('msg'))
                <span class="alert alert-success w-100 my-5  justify-center d-flex">{{Session::get('msg')}}</span>
            @endif


            <div class="col-xl-7 mx-auto">
                <blockquote class="blockquote media-object">
                    <div class="media">
                        <div class="usr-img mr-2">
                            <div class="icon-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="media-body align-self-center">
                            <h6><strong>Internal Transfer</strong></h6>
                            <small class="d-inline">Kndly enter the user ID of the user you want to send funds to</small>
                        </div>
                    </div>

                </blockquote>
               

                <form method="post" action="internal-transfer" class="mt-0" id>
                    @csrf

                    <div class="form-group">
                        <label><strong>Funding Amount(USD)</strong></label>

                        <input type="number" name="amount" class="form-control mb-2" id="amt"
                            placeholder="Enter Amount(USD)" >
                            @error('amount')
                                <span class="text text-danger my-5">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label><strong>Enter Client ID</strong></label>

                        <input type="text" name="client_id" class="form-control mb-2" id="name"
                            placeholder="Enter Receiver Client ID" >
                            @error('client_id')
                            <span class="text text-danger my-5">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Transfer</button>
                    <a class="btn btn-primary" id="vbvnload" style="display:none;">
                        <div class="spinner-border text-white mr-2 align-self-center loader-sm "></div>
                        Loading
                    </a>
                </form>
            </div>






        </div>



    </div>

    </div>
@endsection
