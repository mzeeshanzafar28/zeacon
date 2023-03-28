@extends('layout.user-app')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
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
                            <h6><strong>Fund Deriv Trading Account</strong></h6>
                            <small class="d-inline">Kndly ensure to double check the your deriv login ID before initiating
                                transfer</small>
                        </div>
                    </div>

                </blockquote>
               

                <form method="post" action="" class="mt-0" id>
               

                    <div class="alert alert-arrow-left alert-icon-left alert-light-primary mb-4" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg
                                xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg></button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        <strong>Please</strong> Add Trading Account <a href="trade.php">Click here to add</a>
                    </div>
                    {{-- <?php }else{ ?> --}}

                    <hr>
                    <h6><i class="fa fa-id-card-o"></i> Binary Trading ID : 
                       @if ($user->binary_id)
                           {{$user->binary_id}}
                       @endif
                    </h6>
                    <hr>
                    <input type="hidden" name="bid" class="form-control mb-2" value=""
                        placeholder="" required>
                        {{-- <?php echo $row_cl['bid']; ?> --}}
                    {{-- <?php } ?> --}}

                    <div class="form-group">
                        <label><strong>Funding Amount(USD)</strong></label>

                        <input type="number" name="amt" class="form-control mb-2" id="amt"
                            placeholder="Enter Amount(USD)" required>
                    </div>

                    <div class="form-group">
                        <label><strong>Enter Binary Account Name</strong></label>

                        <input type="text" name="name" class="form-control mb-2" id="name"
                            placeholder="Enter Full Name" required>
                    </div>

                    {{-- <?php if($row_cl['bid']==""){ }else{?> --}}
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Transfer</button>
                    {{-- <?php } ?> --}}
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
