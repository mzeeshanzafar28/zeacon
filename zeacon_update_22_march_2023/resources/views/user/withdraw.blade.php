@extends('layout.user-app')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            @if (Session::has('msg'))
                <span class="alert alert-success">{{Session::get('msg')}}</span>

            @endif
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-account-invoice-three">
                    <div class="widget-heading">
                        <div class="wallet-usr-info">
                            <div class="usr-name">
                                <span>
                                    {{-- <?php echo $row_cl['fname'] . ' ' . $row_cl['lname']; ?> --}}
                                </span>
                            </div>
                            <div class="add">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="wallet-balance">
                            <p>Wallet Balance</p>
                            <h5 class="">
                                $ {{$walletbalance}}
                                {{-- <span class="w-currency">$</span><?php echo number_format($bal, 2); ?> --}}
                            </h5>
                        </div>
                    </div>
                    <div class="widget-amount">
                        <div class="w-a-info funds-received">
                            <span>Deposit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg></span>
                            <p>${{$dep->deposit}}
                                {{-- <?php echo number_format($dep, 2); ?> --}}
                            </p>
                        </div>
                        <div class="w-a-info funds-spent">
                            <span>Outflow <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg></span>
                            <p>${{$with->withdraw}}
                                {{-- <?php echo number_format($with, 2); ?> --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                {{-- <?php if(isset($Err)){ ?> --}}
                    <center>
                    <div class="alert alert-danger align-center text-center"> <span class="fa fa-info"></span>
                        {{-- <?php echo $Err; ?></div> --}}
                </center>
                 {{-- <?php } ?> --}}
                {{-- <?php if(isset($succ)){ ?> --}}
                    <center>
                    <div class="alert alert-success align-center text-center"> <span class="fa fa-info"></span>
                        {{-- <?php echo $succ; ?></div> --}}
                </center>
                {{-- <?php } ?> --}}
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Make Withdrawal</h5>
                    </div>

                    <div class="widget-content">
                        <center><small class="text-danger text-center"><b>Withdrawal Fee: {{$fee->api}} %
                            {{-- <?php echo $wfee; ?> --}}
                        </b></small>
                        </center>

                        <form class="comment-form" id="commentform" method="POST" action="withdraw">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email" class="text-black font-w600">Enter Amount (USD)<span
                                                class="required">*</span></label>
                                        <input type="number" class="form-control" value="" placeholder="Amount"
                                            name="amount" id="email" required>
                                    </div>
                                </div>


                                {{-- <?php
                                mysqli_select_db($dbsmart, $database_dbsmart);
                                $query_l5 = sprintf('SELECT * FROM `currency` WHERE   uID=%s', test_input($_SESSION['MM_uID']));
                                ($l5 = mysqli_query($dbsmart, $query_l5)) or die(mysqli_error($dbsmart));
                                
                                $totalRows_l5 = mysqli_num_rows($l5);
                                ?> --}}




                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="author" class="text-black font-w600">Select Method <span
                                                class="required">*</span></label>
                                        <select class="form-control" name="wallet" required>
                                            <option value=""> Choose Withdrawal Method </option>
                                            @foreach ($withdraw as $withdraws)
                                            <option value="{{$withdraws->id}}">{{$withdraws->bank}} ({{$withdraws->accountno}}) </option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="submit" value="Proceed" class="submit btn btn-primary" id="submit"
                                        name="submit">
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
