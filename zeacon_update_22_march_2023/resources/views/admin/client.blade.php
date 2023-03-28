@extends('layout.admin-app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Customer Management </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer Management</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                @if (Session::has('msg'))
                    <span class="alert alert-success">
                        {{Session::get('msg')}}
                    </span>

                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Customer Management</h5>

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
                                            <th>Name - Information</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Satus</th>
                                            <th>Reg Date</th>
                                            <th>Action</th>
                                            <th>Action2</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <?php
                                        $sn = 0;
                                        mysqli_select_db($dbsmart, $database_dbsmart);
                                        $query_l5 = sprintf('SELECT * FROM `users` ORDER BY uID DESC');
                                        ($l5 = mysqli_query($dbsmart, $query_l5)) or die(mysqli_error($dbsmart));
                                        
                                        $totalRows_l5 = mysqli_num_rows($l5);
                                        
                                        mysqli_data_seek($l5, 0);
                                        
                                        ?> --}}
                                        {{-- <?php while($row_l5 = mysqli_fetch_assoc($l5)){?> --}}
                                        
                                        @foreach ($user as $users )
                                        <tr>
                                            <td>
                                                {{$sn=$sn+1;}}
                                                {{-- <?php $sn += 1;
                                            echo $sn; ?> --}}
                                            </td>
                                            <td>
                                                {{$users->name}} <br>
                                                    Member Since: {{$users->created_at}} <br>
                                                   Kyc Status : @if ($users->status==1)
                                                        <span class="text text-success">Verified</span>
                                                        @elseif ($users->status==0)
                                                        <span class="text text-danger">Not Verified</span>
                                                        
                                                    @endif
                                                {{-- <?php echo $row_l5['fname'] . '&nbsp;' . $row_l5['lname']; ?> <br>

                                                &nbsp; Member Since: <?php echo $row_l5['date']; ?>
                                                &nbsp; Status: <?php if ($row_l5['vpin'] == 1) {
                                                    echo 'Verified';
                                                } else {
                                                    echo 'Not Verified';
                                                } ?> --}}
                                            </td>
                                            <td>
                                                {{$users->email}}

                                                {{-- <?php echo $row_l5['email']; ?> --}}
                                            </td>
                                            <td>
                                                {{$users->phone}}

                                                {{-- <?php echo $row_l5['phone']; ?> --}}
                                            </td>
                                            <td>
                                                @if ($users->user_status==1)
                                                <span class="text text-success">Active</span>
                                                    @elseif ($users->user_status==0)
                                                    <span class="text text-danger">Banned</span>

                                                @endif
                                                {{-- <?php if ($row_l5['status'] == 1) {
                                                echo 'Active';
                                            } elseif ($row_l5['status'] == 0) {
                                                echo 'Banned';
                                            } ?> --}}
                                            </td>
                                            <td>
                                                {{$users->created_at}}
                                                {{-- <?php echo $row_l5['date']; ?> --}}
                                            </td>



                                            <td>
                                                <div class="">
                                                    <a href="view/{{$users->id}}"> <i
                                                            class="fas fa-eye">View</i></a>&nbsp; | &nbsp;
                                                    <a href="edit/{{$users->id}}"><i
                                                            class="fas fa-edit">Edit</i></a>

                                                </div>
                                            </td>
                                            <td>
                                                 @if($users->user_status==1)
                                                    <form method="post" action="update-user-status/{{$users->id}}">
                                                        @csrf
                                                        
                                                        <input type="hidden"
                                                        name="action" value="disable" /><button type="submit"
                                                        class="btn btn-danger">Disable User</button></form>
                                                
                                                @elseif ($users->user_status==0)
                                                    <form method="post" action="update-user-status/{{$users->id}}">
                                                        @csrf
                                                        <input type="hidden"
                                                        name="action" value="enable" /><button type="submit"
                                                        class="btn btn-success">Enable User</button></form>
                                                
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
            <!-- ./card-body -->

    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->


    <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.row -->


    <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
