@extends('layout.user-app')
@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table id="default-ordering" class="table table-hover" style="width:100%">
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
                                    
                                   
                                        @foreach ($wallet as $wallets)
                                            
                                        <tr>
                                        <td style="">
                                            {{$wallets->id}}
                                        </td>
                                        <td style="">
                                            {{$wallets->nar}}

                                        </td>


                                        <td style="">
                                            @if ($wallets->type==3 ||$wallets->type==9||$wallets->type==4||$wallets->type==8)
                                                {{$wallets->dr}}
                                                @else
                                                {{$wallets->cr}}
                                            @endif
                                       
                                        </td>


                                        <td style="">
                                            @if ($wallets->status==4)
                                            <button class="btn btn-danger" style="">  Sending</button>
                                            @elseif ($wallets->status==0)
                                            <button class="btn btn-danger" style=""> Failed</button>
                                            @elseif ($wallets->status==2)
                                            <button class="btn btn-warning" style=""> Pending</button>
                                            @elseif ($wallets->status==1)
                                            <button class="btn btn-success" style=""> Success</button>
                                            @endif
                                           
                                        </td>
                                        <td style="">
                                            {{$wallets->adate}}
                                        </td>
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

    </div>
@endsection
