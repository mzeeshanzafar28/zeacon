@extends('layout.admin-app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><i class="nav-icon fas fa-tachometer-alt"></i> &nbsp;Dashboard </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- smart content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon elevation-1" style="background-color: #00c0ef;"><i
                                    class="fas fa-dollar-sign " style="color: #fff;"></i></span>
                            {{-- <?php
                            
                            mysqli_select_db($dbsmart, $database_dbsmart);
                            $query_wit = sprintf('SELECT SUM(cr) FROM `wallet` WHERE type=1 AND status=1');
                            ($wit = mysqli_query($dbsmart, $query_wit)) or die(mysqli_error($dbsmart));
                            $row_wit = mysqli_fetch_assoc($wit);
                            $bal = $row_wit['SUM(cr)'];
                            
                            mysqli_select_db($dbsmart, $database_dbsmart);
                            $query_buy = sprintf('SELECT SUM(dr) FROM `wallet` WHERE type=3 AND status=%s', GetSQLValueString(1, 'int'));
                            ($buy = mysqli_query($dbsmart, $query_buy)) or die(mysqli_error($dbsmart));
                            $row_buy = mysqli_fetch_assoc($buy);
                            $totalRows_count = mysqli_num_rows($buy);
                            $pendingwitdraw = $row_buy['SUM(dr)'];
                            
                            mysqli_select_db($dbsmart, $database_dbsmart);
                            $query_l5 = sprintf('SELECT * FROM `users` ORDER BY uID DESC');
                            ($l5 = mysqli_query($dbsmart, $query_l5)) or die(mysqli_error($dbsmart));
                            
                            $totalRows_l5 = mysqli_num_rows($l5);
                            $Tuser = $totalRows_l5;
                            
                            ?> --}}
                            <div class="info-box-content">
                                <span class="info-box-text">TOTAL DEPOSITS</span>
                                <span class="info-box-number">
                                   ${{$total_balance}}
                                    {{-- $<?php echo number_format($bal); ?> --}}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="nav-icon fas fa-chart-pie"
                                    style="color: #fff;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">TOTAL TRANSFER</span>
                                    
                                    <span class="info-box-number">${{$total_deposit}}
                                    {{-- <?php echo number_format($pendingwitdraw); ?> --}}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon elevation-1" style="background-color: #00a65a;"><i
                                    class="fa fa-users" style="color:#fff;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">TOTAL USERS</span>


                                <span class="info-box-number"> @foreach ($user as $users )
                                    <?php  $nouser=$nouser+1; ?>
                                @endforeach
                                {{$nouser}}

                                    {{-- <?php echo number_format($Tuser); ?> --}}
                                </span>

                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-orange"><i class="fas fa-money" style="color:#fff;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">TOTAL WITHDRAWALS</span>
                                <span class="info-box-number">${{$total_deposit}}
                                    {{-- <?php echo number_format($pendingwitdraw); ?> --}}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


                <!-- /.card-header -->
                <!-- smart content -->
                <section class="content">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" style="border-bottom:none;">

                                        <caption>Recent investors <a href="{{route('client-mgt')}}">View all investors</a></caption>

                                    </div>
                                    <!-- /.card-header -->
                                    <!-- /.row -->

                                    <div class="card-body">
                                        <table id="example2" class="table" style="font-size:14px; font-weight: 400;">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name - Information</th>
                                                    <th>contact</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <?php
                                                $sn = 0;
                                                mysqli_select_db($dbsmart, $database_dbsmart);
                                                $query_l5 = sprintf('SELECT * FROM `users` ORDER by uID DESC');
                                                ($l5 = mysqli_query($dbsmart, $query_l5)) or die(mysqli_error($dbsmart));
                                                
                                                $totalRows_l5 = mysqli_num_rows($l5);
                                                
                                                mysqli_data_seek($l5, 0);
                                                
                                                ?>
                                                <?php while($row_l5 = mysqli_fetch_assoc($l5)){?> --}}
                                              @foreach ($user as $users )
                                              <tr>
                                                <td>
                                                    
                                                    {{$sn=$sn+1}}
                                                    
                                                </td>
                                                <td>
                                                    {{-- <?php echo $row_l5['fname'] . '&nbsp;' . $row_l5['lname']; ?> <br>
                                                    <span style="color:#dd4b39;"> <?php if ($row_l5['ref'] > 0) {
                                                        mysqli_select_db($dbsmart, $database_dbsmart);
                                                        $query_l5m = sprintf('SELECT * FROM `users` WHERE code=%s', $row_l5['ref']);
                                                        ($l5m = mysqli_query($dbsmart, $query_l5m)) or die(mysqli_error($dbsmart));
                                                        $row_l5m = mysqli_fetch_assoc($l5m);
                                                        $name = $row_l5m['fname'] . '&nbsp;' . $row_l5m['lname'];
                                                    
                                                        echo ' Referred By: ' . $name;
                                                    } ?></span>
                                                    &nbsp; Member Since: <?php echo $row_l5['date']; ?>
                                                    &nbsp; Status: <?php if ($row_l5['vpin'] == 1) {
                                                        echo 'Verified';
                                                    } else {
                                                        echo 'Not Verified';
                                                    } ?> --}}
                                                    {{$users->name}} <br>
                                                    Member Since: {{$users->created_at}} <br>
                                                    Status : @if ($users->status==1)
                                                        <span class="text text-success">Verified</span>
                                                        @elseif ($users->status==0)
                                                        <span class="text text-danger">Not Verified</span>
                                                        
                                                    @endif
                                                </td>
                                                <td>
                                                    {{$users->email}}
                                                    {{-- <?php echo $row_l5['email']; ?> --}}
                                                </td>



                                                <td>
                                                    <div class="">
                                                        <a href="view/{{$users->id}}"> <i
                                                                class="fas fa-eye">View</i></a>&nbsp; | &nbsp;
                                                        <a href="edit/{{$users->id}}"><i
                                                                class="fas fa-edit">Edit</i></a>
    
                                                    </div>
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
                    <!-- ./card-body -->

            </div>
            <!-- /.card -->
    </div>
@endsection
