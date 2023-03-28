@extends('layout.admin-app')
@section('content')
    <section class="content w-60 " style="margin-left:20%;margin-top:30px;">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">View all Withdrawal</h5>

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
                                        <th>Address</th>
                                        
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
                                    $query_l51 = sprintf('SELECT * FROM `wallet` WHERE type=3  ORDER BY id DESC ');
                                    ($l51 = mysqli_query($dbsmart, $query_l51)) or die(mysqli_error($dbsmart));
                                    $row_l51 = mysqli_fetch_assoc($l51);
                                    $totalRows_l51 = mysqli_num_rows($l51);
                                    
                                    mysqli_data_seek($l51, 0);
                                    
                                    ?>
                                    <?php while($row_l51 = mysqli_fetch_assoc($l51)){?>

                                    <?php
                                    mysqli_select_db($dbsmart, $database_dbsmart);
                                    $query_gcheck = sprintf('SELECT * FROM `users` WHERE uID= %s ', GetSQLValueString(test_input($row_l51['uID']), 'int'));
                                    ($gcheck = mysqli_query($dbsmart, $query_gcheck)) or die(mysqli_error());
                                    $row_gcheck = mysqli_fetch_assoc($gcheck); ?> --}}
                                   @foreach ($wallet as $wallets)
                                   <tr>
                                        <td>
                                            {{$sn=$sn+1}}
                                            {{-- <?php echo $sn++; ?> --}}
                                        </td>
                                        <td>
                                            {{$wallets->name}}
                                            {{-- <?php
                                            echo $row_gcheck['fname'] . ' ' . $row_gcheck['lname'];
                                            ?> --}}
                                        </td>
                                       
                                        <td>

                                            {{$wallets->bank}}
                                            <br>
                                            {{$wallets->accountno}}


                                        </td>

                                        <td>
                                           
                                            {{$wallets->dr}}

                                            {{-- <?php echo "$ " . $row_l51['dr']; ?> --}}
                                        </td>

                                        <td>
                                            {{$wallets->adate}}

                                            {{-- <?php if ($row_l51['draw'] == 1) {
                                                echo 'Success';
                                            } elseif ($row_l51['draw'] == 0) {
                                                echo 'Failed';
                                            } elseif ($row_l51['draw'] == 2) {
                                                echo 'Pending';
                                            } ?> --}}
                                        </td>
                                        <td>
                                            @if ($wallets->status==1)
                                            <span class="btn btn-success">Approved</span>
                                            @elseif ($wallets->status==0)
                                            <span class="btn btn-danger">Rejected</span>
                                            @elseif ($wallets->status==2)
                                            <span class="btn btn-warning">Pending</span>

                                        @endif
                                        </td>
                                        
                                        <td class="text-center">
                                            @if ($wallets->status==2)
                                                
                                            <table>
                                                <tbody>
                                                    <tr style=" ">

                                                        <td style="background-color:transparent; border:none;">
                                                            <form method="post" action="update-withdraw-status/{{$wallets->id}}">
                                                                @csrf
                                                                <input type="hidden"
                                                                    name="action" value="approve">
                                                                {{-- <?php echo $row_l51['id']; ?> --}}
                                                                <button type="submit" class="btn btn-default btn-xs"
                                                                    style=""><span class="fas fa-check text-success">
                                                                    </span></button>
                                                            </form>
                                                        </td>
                                                        <td style="background-color:transparent; border:none;">
                                                            <form method="post" action="update-withdraw-status/{{$wallets->id}}">
                                                                @csrf

                                                                <input type="hidden"
                                                                    name="action" value="reject">
                                                                {{-- <?php echo $row_l51['id']; ?> --}}
                                                                <button type="submit" class="btn btn-default btn-xs"
                                                                    style=""><span class="fas fa-times text-danger">
                                                                    </span></button>
                                                            </form>
                                                        </td>
                                                        


                                                    </tr>
                                                </tbody>
                                            </table>
                                            @else
                                            <span class="btn btn-outline btn-dark" >Action Performed</span>
                                            @endif
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
    <!-- /.row -->


   
@endsection
