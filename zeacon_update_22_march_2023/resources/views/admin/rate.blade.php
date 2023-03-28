@extends('layout.admin-app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <?php echo $row_gcheck['fname'] . '&nbsp;' . $row_gcheck['lname']; ?> --}}
                        <h1 class="m-0 text-dark"> Information </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Rate Management</li>
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
                    <div class="col-md-4">
                        <div class="card">
                            @if (Session::has('msg'))
                                <span class="alert alert-success w-80 mx-3 my-3">{{Session::get('msg')}}</span>

                            @endif
                            <div class="card-header">
                                <h5 class="card-title">Rate Mgt</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                </div>
                            </div>
                            <!-- /.card-header -->

                            <!-- /.row -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Update Naira Rate</h5>




                                </div>
                                <!-- /.card-header -->

                                <!-- /.row -->

                                <div class="card-body  ">

                                    <div class="row">
                                        <p style="color:red;">
                                            {{-- <?php if (isset($Err)) {
                                                echo $Err;
                                            } ?> --}}
                                        </p>
                                        <form action="update-ngn-rate" method="post">
                                            @csrf
                                            <div class="col-sm-12">

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">NGN</span>
                                                    </div>
                                                    {{-- <?php echo $rate; ?> --}}
                                                   
                                                    <input type="text" class="form-control" 
                                                        name="rate" value="{{$rate}}" >


                                                </div>

                                            </div>


                                    </div>

                                </div>


                                <button type="submit" class="btn btn-dark" style="float:right;">Update</button>
                                </form>
                                <div class="card-footer">

                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->
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
