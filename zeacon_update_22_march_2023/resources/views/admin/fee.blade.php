@extends('layout.admin-app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Fee Mgt </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Fee</li>
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
                                <span class="alert alert-success">
                                    {{Session::get('msg')}}
                                </span>

                            @endif
                            <div class="card-header">
                                <h5 class="card-title">Withdrawal/Tranfer Fee Mgt</h5>

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
                                           
                                        @foreach ($fee as $fees)
                                        <tr>
                                            <td>
                                                {{$sn=$sn+1}}
                                                {{-- <?php $sn += 1;
                                                echo $sn; ?> --}}
                                            </td>
                                            <td>
                                                {{$fees->name}}

                                                {{-- <?php echo $row_l5['name']; ?>  --}}
                                            </td>
                                            <td>
                                                <div class="tools">
                                                    <form action="update-fee/{{$fees->sn}}" method="POST">
                                                        @csrf
                                                    {{-- <?php echo $row_l5['api']; ?> --}}
                                               
                                                    <input type="text" value=" {{$fees->api}}" name="api"
                                                        style="width:150px;" />
                                                </div>
                                            </td>
                                            
                                            <td>
                                                {{-- <?php echo $row_l5['sn']; ?> --}}
                                                <button class="btn btn-dark" type="submit" value=""
                                                    name="update"> Update </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
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
