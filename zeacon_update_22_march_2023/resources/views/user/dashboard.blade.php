@extends('layout.user-app')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-three">
                    <div class="widget-heading">
                        <h5 class="">Summary</h5>
                    </div>
                    <div class="widget-content">
                        <div class="order-summary">
                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2"
                                            ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>
                                </div>
                                <div class="w-summary-details">
                                    <div class="w-summary-info">
                                        <h6>Pending Deposit</h6>
                                        <p class="summary-count">
                                            {{ intval($trade) }}
                                        </p>
                                    </div>
                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                                style="width: 100%" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2"
                                            ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>
                                </div>
                                <div class="w-summary-details">
                                    <div class="w-summary-info">
                                        <h6>Pending Withdrawal</h6>
                                        <p class="summary-count">
                                            {{$with}}
                                        </p>
                                    </div>
                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar"
                                                style="width: 100%" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2"
                                            ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>
                                </div>
                                <div class="w-summary-details">
                                    <div class="w-summary-info">
                                        <h6>Balance In NGN</h6>
                                        <p class="summary-count">
                                            {{-- {{number_format($bal * $rate, 2)}} --}}
                                            {{$bal}}
                                        </p>
                                    </div>
                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                style="width: 100%" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-account-invoice-three">
                    <div class="widget-heading">
                        <div class="wallet-usr-info">
                            <div class="usr-name">
                                <span>
                                    {{-- <?php echo $row_cl['fname'] . ' ' . $row_cl['lname']; ?> --}}
                                    {{auth()->user()->name}}
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
                            <h5 class=""><span class="w-currency">$  <span>{{$walletbalance}}</span></span>

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
                            <p>$
                                {{$dep}}
                            </p>
                        </div>
                        <div class="w-a-info funds-spent">
                            <span>Outflow <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg></span>
                            <p>$
                                {{$withdraw->withdraw}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">
                    <div class="widget-heading">
                        <h5 class="">Last 5 Transactions</h5>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-scroll">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content">TxnID</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Description</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Amount</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Status</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Date</div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sn = 0;
                                        $wallets = DB::table('wallets')->where('uID', '=', session('MM_uID'))->orderBy('id', 'desc')->limit(5)->get();
                                    @endphp
                                
                                    @foreach ($wallet as $wallets)
                                       
                                        <tr>
                                            <td style="">{{ 'ZE'.$wallets->id }}</td>
                                            <td style="">{{ $wallets->nar }}</td>
                                            <td style="">
                                                @if ($wallets->type == 3 || $wallets->type == 9 || $wallets->type == 4 || $wallets->type == 8)
                                                    ${{ $wallets->dr }}
                                                @else
                                                    ${{ $wallets->cr }}
                                                @endif
                                            </td>
                                            <td style="">
                                                @if ($wallets->type == 1)
                                                  
                                                        @if ($wallets->status == 4)
                                                            <button class="btn btn-warning" style="">Sending</button>
                                                        @elseif ($wallets->status == 0)
                                                            <button class="btn btn-danger" style="">Failed</button>
                                                        @elseif ($wallets->status == 2)
                                                            <button class="btn btn-warning" style="">Pending</button>
                                                        @elseif ($wallets->status == 1)
                                                            <button class="btn btn-success" style="">Success</button>
                                                        @endif
                                                    
                                                @elseif ($wallets->type == 3)
                                                    @if ($wallets->status == 2)
                                                        <button class="btn btn-warning" style="">Pending</button>
                                                    @elseif ($wallets->status == 1)
                                                        <button class="btn btn-success" style="">Success</button>
                                                        @elseif ($wallets->status == 0)
                                                        <button class="btn btn-danger" style="">Rejected</button>
                                                    @endif
                                                @else
                                                    @if ($wallets->status == 4)
                                                        <button class="btn btn-warning">Sending</button>
                                                    @elseif ($wallets->status == 0)
                                                        <button class="btn btn-danger">Failed</button>
                                                    @elseif ($wallets->status == 2)
                                                        <button class="btn btn-warning">Pending</button>
                                                    @elseif ($wallets->status == 1)
                                                        <button class="btn btn-success">Success</button>
                                                    @endif
                                                @endif
                                            </td>
                                            <td style="">{{ $wallets->adate }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
