@extends('layout.admin-app')
@section('content')
<div class="content-wrapper">
        @if (Session::has('msg'))
            <span class="alert alert-success w-100">{{Session::get('msg')}}</span>
        @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>KYC</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">KWC</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Know Your Customer Verification Form Confirmation</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>USER</th>
                                            <th>DOCUMENT TYPE</th>
                                            <th>URL</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <?php
                                        $sn = 0;
                                        mysqli_select_db($dbsmart, $database_dbsmart);
                                        $query_l5 = sprintf('SELECT * FROM `users` WHERE (vpin=1 OR vpin=2) ORDER by uID DESC');
                                        ($l5 = mysqli_query($dbsmart, $query_l5)) or die(mysqli_error($dbsmart));
                                        $row_l5 = mysqli_fetch_assoc($l5);
                                        $totalRows_l5 = mysqli_num_rows($l5);
                                        
                                        mysqli_data_seek($l5, 0);
                                        
                                        ?>
                                        <?php while($row_l5 = mysqli_fetch_assoc($l5)){?> --}}
                                       @foreach ($user as $users)
                                       <tr>

                                        <td style="font-size: .9rem;
font-weight: 400;
line-height: 1.5;">                         

                                            
                                            {{$users->name}}
                                            {{-- <?php echo $row_l5['fname'] . '&nbsp;' . $row_l5['lname']; ?> <?php echo $row_l5['dob']; ?> <br>
                                            <?php echo $row_l5['email']; ?> <?php echo $row_l5['phone']; ?> <?php echo $row_l5['address']; ?>
                                            <?php echo $row_l5['country']; ?><?php echo $row_l5['zipcode']; ?>  --}}
                                        </td>
                                        <td>
                                            {{$users->document}}

                                            {{-- <?php if ($row_l5['doctype'] == 1) {
                                                echo ' Drivers Lincense';
                                            } elseif ($row_l5['type'] == 2) {
                                                echo 'International passport';
                                            } elseif ($row_l5['type'] == 3) {
                                                echo 'NIN';
                                            } ?>  --}}
                                        </td>
                                        <td>
                                            {{-- <a href="/public/documents/{{$users->document}}" target="_blank" download>VIEW</a> --}}
                                            <a href="{{asset('documents/'.$users->document )}}" download>View </a>
                                        </td>
                                        <td>
                                            @if ($users->status==0)
                                            <span class="text text-danger">Not Verified</span>
                                                @elseif ($users->status==1)
                                            <span class="text text-success">Verified</span>
                                            @elseif ($users->status==2)
                                            <span class="text text-warning">Pending</span>

                                            @endif
                                            {{-- <?php if ($row_l5['vpin'] == 2) {
                                                echo ' Not verified';
                                            } elseif ($row_l5['vpin'] == 1) {
                                                echo 'Verified';
                                            } ?>  --}}
                                        </td>


                                        <td class="text-center">
                                            <table>
                                                <tbody>
                                                    <tr style=" background-color: rgba(222,433,345,.05);">
                                                        <td style="background-color:transparent; border:none;">
                                                            <form action="kyc_action/{{$users->id}}" method="POST">
                                                                @csrf
                                                                <input type="hidden"
                                                                    value="approve" name="action" />
                                                                {{-- <?php echo $row_l5['uID']; ?> --}}
                                                                <button class="btn btn-default btn-xs" type="submit"
                                                                    class=""><span class="fa fa-check text-info">
                                                                    </span></button>
                                                            </form>
                                                        </td>
                                                        
                                                        <td style="background-color:transparent; border:none;">
                                                            <form action="kyc_action/{{$users->id}}" method="POST">
                                                                @csrf
                                                                <input type="hidden"
                                                                    value="reject" name="action" />
                                                                {{-- <?php echo $row_l5['uID']; ?> --}}
                                                                <button class="btn btn-default btn-xs" type="submit"
                                                                    class=""><span
                                                                        class="fas fa-times text-danger">
                                                                    </span></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                       @endforeach

                                        {{-- <?php } ?> --}}

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>USER</th>
                                            <th>DOCUMENT TYPE</th>
                                            <th>URL</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
