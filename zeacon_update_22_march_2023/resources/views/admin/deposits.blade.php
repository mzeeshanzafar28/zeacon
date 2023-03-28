@extends('layout.admin-app')
@section('content')
    <div class="content-wrapper">
        @if (Session::has('msg'))
            <span class="alert alert-success">{{Session::get('msg')}}</span>

        @endif
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Deposit Method Mgt </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Deposit Method Mgt</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- smart content -->


        <!-- smart content -->
        <section class="content">
            <div class="container-fluid">



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">View all </h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <!--    <div class="btn-group">
                                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                  <i class="fas fa-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                  <a href="#" class="dropdown-item">Action</a>
                                  <a href="#" class="dropdown-item">Another action</a>
                                  <a href="#" class="dropdown-item">Something else here</a>
                                  <a class="dropdown-divider"></a>
                                  <a href="#" class="dropdown-item">Separated link</a>
                                </div>
                              </div> -->
                                    <!--  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>-->
                                </div>
                            </div>
                            <!-- /.card-header -->

                            <!-- /.row -->

                            <div class="card-body">
                                <table id="example" class="table table-bordered table-striped"
                                    style="font-size:14px; font-weight: 400;">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer</th>
                                            <th>Txn ID</th>
                                            <th>Method</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <?php
                                        $sn = 0;
                                        mysqli_select_db($dbsmart, $database_dbsmart);
                                        $query_l51 = sprintf('SELECT * FROM `d_method` ');
                                        ($l51 = mysqli_query($dbsmart, $query_l51)) or die(mysqli_error($dbsmart));
                                        $row_l51 = mysqli_fetch_assoc($l51);
                                        $totalRows_l51 = mysqli_num_rows($l51);
                                        
                                        mysqli_data_seek($l51, 0);
                                        
                                        ?>
                                        <?php while($row_l51 = mysqli_fetch_assoc($l51)){?> --}}

                                  @foreach ($wallet as $wallets )
                                  <tr>
                                    <td>
                                        {{$sn=$sn+1}}
                                        {{-- <?php echo $sn++; ?> --}}
                                    </td>

                                    <td>
                                        {{$wallets->name}}
                                        {{-- <?php echo $row_l51['name']; ?> --}}
                                    </td>


                                    <td>
                                        {{$wallets->txnID}}
                                       
                                    </td>
                                    <td>
                                        @if ($wallets->dtype==1)
                                           <span>Paystack</span>
                                        @elseif ($wallets->dtype==2)
                                        <span>eNaira</span>
                                        @elseif ($wallets->dtype==3)
                                        <span>Crypto</span>
                                        @elseif ($wallets->dtype==4)
                                        <span>Perfect Money</span>
                                        @elseif ($wallets->dtype==5)
                                        <span>Payeer</span>
                                        @elseif ($wallets->dtype==6)
                                        <span>Bank Deposit</span>
                                        @elseif ($wallets->dtype==7)
                                        <span>Manual Deposit</span>
                                        @endif
                                    </td>
                                  
                                    <td>
                                        {{$wallets->cr}}

                                    </td>
                                    <td>
                                        {{$wallets->adate}}

                                    </td>
                                    <td>
                                        @if ($wallets->status==1)
                                            <span class="btn btn-success">Success</span>
                                            @elseif ($wallets->status==2)
                                            <span class="btn btn-warning">Pending</span>
                                            @elseif ($wallets->status==0)
                                            <span class="btn btn-danger">Failed</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <table><tbody><tr style=" "> 
                 
                                            <td style="background-color:transparent; border:none;">
                                                <form method="post" action="update-deposit-status/{{$wallets->id}}" >
                                                    @csrf
                                                    <input type="hidden" name="action" value="pending"> 
                                                    <button type="submit" class="btn btn-default btn-xs" style="">
                                                        <span class="fa fa-pause text-info"> 
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>
                                          <td style="background-color:transparent; border:none;">
                                            <form method="post" action="update-deposit-status/{{$wallets->id}}" ><input type="hidden" name="action" value="reject">
                                                @csrf

                                                <button type="submit" class="btn btn-default btn-xs" style="">
                                                    <span class="fas fa-times text-danger"> 
                                                        </span>
                                                    </button>
                                                </form></td>
                                           <td style="background-color:transparent; border:none;">
                                            <form method="post" action="update-deposit-status/{{$wallets->id}}" ><input type="hidden" name="action" value="approve"> 
                                                @csrf

                                                <button type="submit" class="btn btn-default btn-xs" style="">
                                                    <span class="fas fa-check text-success"> 
                                                        </span></button></form></td>
                                          
                                         
                       </tr></tbody></table>
                                    </td>

                                </tr>
                                  @endforeach

                                        {{-- <?php } ?> --}}

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>



                
            </div>

        </section>
        <section class="content">
            <div class="container-fluid">



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Manual Deposits </h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <!--    <div class="btn-group">
                                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                  <i class="fas fa-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                  <a href="#" class="dropdown-item">Action</a>
                                  <a href="#" class="dropdown-item">Another action</a>
                                  <a href="#" class="dropdown-item">Something else here</a>
                                  <a class="dropdown-divider"></a>
                                  <a href="#" class="dropdown-item">Separated link</a>
                                </div>
                              </div> -->
                                    <!--  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>-->
                                </div>
                            </div>
                            <!-- /.card-header -->

                            <!-- /.row -->

                            <div class="card-body">
                                <table id="example" class="table table-bordered table-striped"
                                    style="font-size:14px; font-weight: 400;">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer</th>
                                            <th>User ID</th>
                                            <th>Proof</th>
                                            <th>Amount</th>
                                            <th>Paid</th>
                                            <th>Status</th>
                                            <th>Action</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                       

                                  @foreach ($deposit as $deposits )
                                  <tr>
                                    <td>
                                        {{$snm=$snm+1}}
                                        {{-- <?php echo $sn++; ?> --}}
                                    </td>

                                    <td>
                                        {{$deposits->name}}
                                        {{-- <?php echo $row_l51['name']; ?> --}}
                                    </td>


                                    <td>
                                        {{$deposits->uID}}
                                       
                                    </td>
                                    <td>
                                        <a href="{{asset('manual_deposit_proof_doc/'.$deposits->proof )}}" download>{{$deposits->proof}}</a>
                                    </td>
                                  
                                    <td>
                                        {{$deposits->amount}}

                                    </td>
                                    <td>
                                        @if ($deposits->paid==1)
                                            <span class="text text-success">Yes</span>
                                            @elseif ($deposits->paid==0)
                                            <span class="text text-danger">No</span>
                                        @endif

                                    </td>
                                    <td>
                                        @if ($deposits->status==1)
                                            <span class="btn btn-success">Approved</span>
                                            @elseif ($deposits->status==2)
                                            <span class="btn btn-warning">Pending</span>
                                            @elseif ($deposits->status==0)
                                            <span class="btn btn-danger">Rejected</span>
                                        @endif
                                    </td>

                                    @if ($deposits->status==2)
                                        
                                    <td class="text-center">
                                        <table><tbody><tr style=" "> 
                 
                                            <td style="background-color:transparent; border:none;">
                                                <form method="post" action="update-manual-deposit-status/{{$deposits->id}}" >
                                                    @csrf
                                                    <input type="hidden" name="action" value="pending"> 
                                                    <button type="submit" class="btn btn-default btn-xs" style="">
                                                        <span class="fa fa-pause text-info"> 
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>
                                          <td style="background-color:transparent; border:none;">
                                            <form method="post" action="update-manual-deposit-status/{{$deposits->id}}" ><input type="hidden" name="action" value="reject">
                                                @csrf

                                                <button type="submit" class="btn btn-default btn-xs" style="">
                                                    <span class="fas fa-times text-danger"> 
                                                        </span>
                                                    </button>
                                                </form></td>
                                           <td style="background-color:transparent; border:none;">
                                            <form method="post" action="update-manual-deposit-status/{{$deposits->id}}" ><input type="hidden" name="action" value="approve"> 
                                                @csrf

                                                <button type="submit" class="btn btn-default btn-xs" style="">
                                                    <span class="fas fa-check text-success"> 
                                                        </span></button></form></td>
                                          
                                         
                       </tr></tbody></table>
                                    </td>

                                    @elseif ($deposits->status==0||$deposits->status==1)
                                    <td>
                                    <span class="btn btn-disabled">Action Performed</span>

                                    </td>
                                    @endif

                                </tr>
                                  @endforeach

                                        {{-- <?php } ?> --}}

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>



                
            </div>

        </section>
                </div>
 
    
  





    
 
@endsection
