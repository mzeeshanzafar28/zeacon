@extends('layout.user-app')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            @if (Session::has('msg'))
                <span class="alert alert-success mx-3 w-100">{{ Session::get('msg') }}</span>
            @endif
            @if (Session::has('error'))
                <span class="alert alert-danger mx-3 w-100">{{ Session::get('error') }}</span>
            @endif
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Deposit To Wallet</h5>
                    </div>
                    <div class="widget-content widget-content-area border-top-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs mb-3 mt-3" id="borderTop" role="tablist">
                                    <?php
                                    $paystack_method = DB::table('d_method')
                                        ->where('id', 1)
                                        ->first();
                                    ?>
                                    @if ($paystack_method->status == 1)
                                        <li class="nav-item">
                                            <a class="nav-link active" id="border-top-home-tab" data-toggle="tab"
                                                href="#border-top-home" role="tab" aria-controls="border-top-home"
                                                aria-selected="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-credit-card">
                                                    <rect x="1" y="4" width="22" height="16"
                                                        rx="2" ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23" y2="10">
                                                    </line>
                                                </svg>
                                                Paystack</a>
                                        </li>
                                    @endif
                                    <?php
                                    $enaira_method = DB::table('d_method')
                                        ->where('id', 2)
                                        ->first();
                                    ?>
                                    @if ($enaira_method->status == 1)
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-profile-tab" data-toggle="tab"
                                                href="#border-top-profile" role="tab" aria-controls="border-top-profile"
                                                aria-selected="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-credit-card">
                                                    <rect x="1" y="4" width="22" height="16"
                                                        rx="2" ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23" y2="10">
                                                    </line>
                                                </svg> e-naira </a>
                                        </li>
                                    @endif
                                    <?php
                                    $crypto_method = DB::table('d_method')
                                        ->where('id', 3)
                                        ->first();
                                    ?>
                                    @if ($crypto_method->status == 1)
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-contact-tab" data-toggle="tab"
                                                href="#border-top-contact" role="tab" aria-controls="border-top-contact"
                                                aria-selected="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-credit-card">
                                                    <rect x="1" y="4" width="22" height="16"
                                                        rx="2" ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23" y2="10">
                                                    </line>
                                                </svg>
                                                Crypto</a>
                                        </li>
                                    @endif

                                    <?php
                                    $perfectmoney_method = DB::table('d_method')
                                        ->where('id', 4)
                                        ->first();
                                    ?>
                                    @if ($perfectmoney_method->status == 1)
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-contacta-tab" data-toggle="tab"
                                                href="#border-top-contacta" role="tab"
                                                aria-controls="border-top-contacta" aria-selected="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-credit-card">
                                                    <rect x="1" y="4" width="22" height="16"
                                                        rx="2" ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23" y2="10">
                                                    </line>
                                                </svg>
                                                Perfect Money</a>
                                        </li>
                                    @endif
                                    <?php
                                    $payeer_method = DB::table('d_method')
                                        ->where('id', 5)
                                        ->first();
                                    ?>
                                    @if ($payeer_method->status == 1)
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-contactb-tab" data-toggle="tab"
                                                href="#border-top-contactb" role="tab"
                                                aria-controls="border-top-contactb" aria-selected="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-credit-card">
                                                    <rect x="1" y="4" width="22" height="16"
                                                        rx="2" ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23" y2="10">
                                                    </line>
                                                </svg>
                                                Payeer</a>
                                        </li>
                                    @endif

                                    <?php
                                    $manual_method = DB::table('d_method')
                                        ->where('id', 7)
                                        ->first();
                                    ?>
                                    @if ($manual_method->status == 1)
                                        <li class="nav-item">
                                            <a  class="nav-link col lg-8" id="border-top-contactd-tab" data-toggle="tab"
                                                href="#border-top-contacte" role="tab"
                                                aria-controls="border-top-contactb" aria-selected="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-bank">
                                                    <rect x="1" y="4" width="22" height="16"
                                                        rx="2" ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23" y2="10">
                                                    </line>
                                                </svg>
                                                Manual Payment</a>
                                        </li>
                                    @endif

                                    {{-- <?php --}}
                                </ul>
                                <div class="tab-content" id="borderTopContent">
                                    <div class="tab-pane fade show active" id="border-top-home" role="tabpanel"
                                        aria-labelledby="border-top-home-tab">

                                        <form class="comment-form" id="commentform" method="post" action="pay">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email" class="text-black font-w600">Enter Amount
                                                            (NGN)<span class="required">*</span></label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Amount (NGN)" name="amount" id="pamt">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Pay Securely"
                                                            class="submit btn btn-primary" id="submit" name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="border-top-profile" role="tabpanel"
                                        aria-labelledby="border-top-profile-tab">
                                        <form class="comment-form" id="commentform" method="post">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email" class="text-black font-w600">Enter Amount
                                                            (NGN)<span class="required">*</span></label>
                                                        <input type="number" class="form-control" value=""
                                                            placeholder="Amount (NGN)" name="eamount" id="eamount">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Pay eNaira"
                                                            class="submit btn btn-primary" id="submit" name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="border-top-contact" role="tabpanel"
                                        aria-labelledby="border-top-contact-tab">
                                        <form class="comment-form" id="commentform" method="post"
                                            action="crypto-payment">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email" class="text-black font-w600">Select
                                                            Coin<span class="required">*</span></label>
                                                        <select class="form-control" value="" name="select_coin"
                                                            id="curr" required>
                                                            <option disabled> Choose Coin </option>
                                                            @foreach ($coins as $coin)
                                                                @if (is_array($coin))
                                                                    <option value="{{ $coin['code'] }}">
                                                                        {{ $coin['name'] }}</option>
                                                                @endif
                                                            @endforeach
                                                            {{-- <option value=""> Choose Coin </option>
                                                            <option value="btc"> Bitcoin </option>
                                                            <option value="eth"> Ethereum </option>
                                                            <option value="usdttrc20"> USDT(TRC20) </option>
                                                            <option value="bnb"> BNB </option>
                                                            <option value="doge"> Doge Coin </option>
                                                            <option value="ltc"> Litecoin </option> --}}


                                                        </select>
                                                        @error('select_crypto')
                                                            <span class="text text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email" class="text-black font-w600">Enter Amount
                                                            (USD)<span class="required">*</span></label>
                                                        <input type="number" class="form-control" value=""
                                                            placeholder="Amount (USD)" name="amount" id="camt">
                                                        @error('amount')
                                                            <span class="text text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Proceed"
                                                            class="submit btn btn-primary" id="submit" name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane fade" id="border-top-contacta" role="tabpanel"
                                        aria-labelledby="border-top-contacta-tab">
                                        <form class="comment-form" id="commentform" method=post
                                            action="https://perfectmoney.is/api/step1.asp" target="_blank">
                                            <div class="row">
                                                <input type="hidden" name="PAYEE_ACCOUNT" value="U35380201">
                                                <input type="hidden" name="PAYEE_NAME" value="Zeaconglobal">

                                                <input type="hidden" name="PAYMENT_UNITS" value="USD">
                                                <input type="hidden" name="SUGGESTED_MEMO" value="">
                                                {{-- <?php echo test_input($row_cl['fname']); ?> --}}
                                                <input type="hidden" name="STATUS_URL"
                                                    value="https://onlinenaira.com/pm-notify.php?id=">
                                                {{-- <?php echo test_input($row_cl['uID']); ?> --}}
                                                <input type="hidden" name="PAYMENT_URL"
                                                    value="https://zeaconglobal.com/pnotify.php">
                                                <input type="hidden" name="NOPAYMENT_URL"
                                                    value="https://zeaconglobal.com/app/deposit">
                                                <input type="hidden" name="BAGGAGE_FIELDS" value="">
                                                {{-- <?php echo test_input($row_cl['uID']); ?> --}}
                                                <input type="hidden" name="ORDER_NUM" value="">
                                                <input type="hidden" name="PAYMENT_ID" value="">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email" class="text-black font-w600">Enter Amount
                                                            (USD)<span class="required">*</span></label>
                                                        <input type="number" class="form-control" value=""
                                                            placeholder="Amount (USD)" name="PAYMENT_AMOUNT">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Proceed"
                                                            class="submit btn btn-primary" id="submit" name="Procced">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="border-top-contactb" role="tabpanel"
                                        aria-labelledby="border-top-contactb-tab">
                                        <form class="comment-form" id="commentform" method="post" action="/deposit/submitByPayeer">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email" class="text-black font-w600">Enter Amount
                                                            (USD)<span class="required">*</span></label>
                                                        <input type="number" class="form-control" value=""
                                                            placeholder="Amount (USD)" name="amount" id="amount">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Proceed"
                                                            class="submit btn btn-primary" id="submit" name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="border-top-contactd" role="tabpanel"
                                        aria-labelledby="border-top-contactd-tab">
                                        <script src="https://js.stripe.com/v3/"></script>
                                        <form action="bank-deposit" method="POST">
                                            @csrf
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="email" class="text-black font-w600">Enter Amount
                                                        (NAIRA)<span class="required">*</span></label>
                                                    <input type="number" class="form-control" value=""
                                                        placeholder="Amount (NGN)" name="amount" id="bamt">
                                                </div>
                                            </div>
                                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_PUB_KEY') }}"
                                                data-name="Zeacon" data-description="Widget"
                                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="usd">
                                            </script>
                                        </form>
                                        {{-- <form class="comment-form" id="commentform" method="post">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email" class="text-black font-w600">Enter Amount
                                                            (NAIRA)<span class="required">*</span></label>
                                                        <input type="number" class="form-control" value=""
                                                            placeholder="Amount (NGN)" name="bamt" id="bamt">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Proceed"
                                                            class="submit btn btn-primary" id="submit" name="bamm">
                                                    </div>
                                                </div>
                                            </div>
                                        </form> --}}
                                    </div>
                                    <div class="tab-pane fade" id="border-top-contacte" role="tabpanel"
                                        aria-labelledby="border-top-contactd-tab">
                                        <form action="manual-deposit/{{ $userid }}" class="comment-form"
                                            id="commentform" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="email" class="text-black font-w600">Enter Amount
                                                            (NAIRA)<span class="required">*</span></label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Amount (NGN)" name="amount" id="bamt">
                                                        @error('amount')
                                                            <span class="text text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group my-3">
                                                        <label for="bamt" style="color:black;">Proof:</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                id="bamt" name="proof"
                                                                onchange="document.getElementById('file-name').innerHTML = this.files[0].name;">
                                                            <label class="custom-file-label" for="bamt"
                                                                id="file-name">Choose file</label>
                                                            @error('proof')
                                                                <span class="text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                    <div class="form-check " style="margin-top: 30px;">
                                                        <input class="form-check-input form-check-input-lg"
                                                            type="checkbox" id="exampleCheckbox" name="paid">
                                                        <label class="form-check-label text-black font-w600"
                                                            for="exampleCheckbox">Mark as paid</label>
                                                        @error('paid')
                                                            <span class="text text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    {{-- <div class="form-group " style="margin:30px 30px 30px 0px;padding:0;">
                                                        <div class="form-check">
                                                            <label class="form-check-label text-black font-w600" for="checkbox" style="margin-right: 30px">Mark as paid :</label>
                                                          <input class="form-check-input" type="checkbox"  id="checkbox" style="width:20px;height:20px;">
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-lg-12">
                                                        <div class="form-group my-3">
                                                            <input type="submit" value="Proceed"
                                                                class="submit btn btn-primary" id="submit" name="bamm">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="card" style="width: 18rem;">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Manual Payment Account</h5>
                                                            {{-- <hr> --}}
                                                            <h6 class="card-subtitle mb-2 text-body-secondary">Admin Account details</h6>
                                                            <strong><label for="">Bank</label></strong>
                                                            <p>{{ $manualAccount['bank'] }}</p>
                                                            <strong><label for="">Account Holder</label></strong>
                                                            <p>{{ $manualAccount['owner'] }}</p>
                                                            <strong><label for="">Account No</label></strong>
                                                            <p>{{ $manualAccount['account_no'] }}</p>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
