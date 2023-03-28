@extends('layout.admin-app')
@section('content')
    <div class="content-wrapper">
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
                                            <th>Name</th>
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


                                      @foreach ($dmethod as $dm)
                                      <tr>
                                        <td>
                                            {{$sn=$sn+1}}
                                            {{-- <?php echo $sn++; ?> --}}
                                        </td>

                                        <td>
                                            {{$dm->name}}

                                            {{-- <?php echo $row_l51['name']; ?> --}}
                                        </td>


                                        <td>
                                            @if ($dm->status==1)
                                                <span class="text text-success">Active</span>
                                                @elseif ($dm->status==0)
                                                <span class="text text-danger">Disabled</span>
                                                @elseif ($dm->status==2)
                                                <span class="text text-warning">Pending</span>
                                            @endif
                                            {{-- <?php if ($row_l51['status'] == 1) {
                                                echo 'Active';
                                            } elseif ($row_l51['status'] == 0) {
                                                echo 'Disbaled';
                                            } elseif ($row_l51['status'] == 2) {
                                                echo 'Pending';
                                            } ?> --}}
                                        </td>
                                        <td class="text-center">

                                           @if ($dm->status==1)
                                               
                                      
                                            <form method="post" action="dmethod-update/{{$dm->id}}">
                                                @csrf
                                                <input type="hidden" name="action"
                                                    value="dis">
                                                {{-- <?php echo $row_l51['id']; ?> --}}
                                                <button type="submit" class="btn btn-danger "
                                                    style="">Disable</button>
                                            </form>
                                            @elseif ($dm->status==0)
                                            <form method="post" action="dmethod-update/{{$dm->id}}">
                                                @csrf
                                                
                                                <input type="hidden" name="action"
                                                    value="en">
                                                {{-- <?php echo $row_l51['id']; ?> --}}
                                                <button type="submit" class="btn btn-success "
                                                    style="">Enable</button>
                                            </form>
                                            {{-- <?php } ?> --}}
                                            @endif
                                        </td>



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
