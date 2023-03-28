@extends('layout.admin-app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Currency Mgt </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Currency</li>
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



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if (Session::has('msg'))
                                <span class="alert alert-success w-80 mx-3 my-5 ">{{Session::get('msg')}}</span>
                            @endif
                            <div class="card-header">
                                <h5 class="card-title">Currency Mgt</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                </div>
                            </div>
                            <!-- /.card-header -->

                            <!-- /.row -->

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped"
                                        style="font-size:14px; font-weight: 400;">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Method</th>

                                                <th>Rate</th>

                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <?php
                                            $sn = 0;
                                            mysqli_select_db($dbsmart, $database_dbsmart);
                                            $query_l5 = sprintf('SELECT * FROM `coin`  ');
                                            ($l5 = mysqli_query($dbsmart, $query_l5)) or die(mysqli_error($dbsmart));
                                            
                                            $totalRows_l5 = mysqli_num_rows($l5);
                                            
                                            ?>
                                            <?php while($row_l5 = mysqli_fetch_assoc($l5)){
                  
                                   
              
              ?> --}}       
                                        @foreach ($coin as $coins )
                                        <tr>
                                            <td>
                                                {{$coins->sn}}
                                                {{-- <?php $sn += 1;
                                            echo $sn; ?> --}}
                                            </td>
                                            <td>
                                                {{$coins->name}}
                                                {{-- <?php echo $row_l5['name']; ?> --}}
                                            </td>





                                            <td>
                                                <div class="tools">
                                                    {{-- <?php echo $row_l5['api']; ?> --}}
                                                    <form method="POST" action="update_deposit_rate/{{$coins->sn}}">
                                                        @csrf
                                                        <div class="tools">
                                                            <input class="form-control" type="text" value="{{$coins->api}}" name="api" style="width:150px;" />
                                                        </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-dark" type="submit" name="update">Update</button>
                                            </form>
                                            </td>
                                        </tr>
                                            
                                        @endforeach
                                            {{-- <?php } ?> --}}
                                        </tbody>
                                    </table>
                                </div>
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
