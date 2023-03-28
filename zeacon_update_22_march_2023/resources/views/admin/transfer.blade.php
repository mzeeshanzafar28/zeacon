@extends('layout.admin-app')
@section('content')
  


 <section class="content mx-auto w-50 align-middle">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            @if (Session::has('msg'))
              <span class="alert alert-success">{{Session::get('msg')}}</span>

            @endif
            <div class="card-header">
              <h5 class="card-title">View all Transfer</h5>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
  
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" style="font-size:14px; font-weight: 400;">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Customer</th>
                      <th>Txn ID</th>
                      <th>Deriv LoginID</th>
                      <th>Amount</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                   @foreach ($wallet as $wallets )
                   <tr>
                    <td>{{$sn=$sn+1}}</td>
                    <td>  
                       {{$wallets->name}}
                    </td>
                    <td>{{$wallets->txnID}}</td>
                    <td>{{$wallets->name}}</td>
                    <td>{{$wallets->amount}}</td>
                    <td>{{$wallets->adate}}</td>

                    <td>
                      @if ($wallets->status==1)
                        <span class="btn btn-success">Approved</span>
                        @elseif ($wallets->status==0)
                        <span class="btn btn-danger">Failed</span>
                        @elseif ($wallets->status==2)
                        <span class="btn btn-warning">Pending</span>

                      @endif
                    </td>
                    <td class="text-center">
                      <table>
                        <tbody>
                          <tr>
                              <td style="background-color:transparent; border:none;">
                                  <form method="post" action="update-transfer-status/{{$wallets->id}}">
                                    @csrf
                                    <input type="hidden"
                                          name="action" value="pending">
                                      {{-- <?php echo $row_l51['id']; ?> --}}
                                      <button type="submit" class="btn btn-default btn-xs"
                                          style=""><span class="fa fa-pause text-info">
                                          </span></button>
                                  </form>
                              </td>
                              <td style="background-color:transparent; border:none;">
                                <form method="post" action="update-transfer-status/{{$wallets->id}}">

                                    @csrf

                                    <input type="hidden"
                                          name="action" value="reject">
                                      {{-- <?php echo $row_l51['id']; ?> --}}
                                      <button type="submit" class="btn btn-default btn-xs"
                                          style=""><span class="fas fa-times text-danger">
                                          </span></button>
                                  </form>
                              </td>
                              <td style="background-color:transparent; border:none;">
                                <form method="post" action="update-transfer-status/{{$wallets->id}}">

                                    @csrf

                                    <input type="hidden"
                                          name="action" value="accept">
                                      {{-- <?php echo $row_l51['id']; ?> --}}
                                      <button type="submit" class="btn btn-default btn-xs"
                                          style=""><span class="fas fa-check text-success">
                                          </span></button>
                                  </form>
                              </td>
                              </tr>
                              </tbody>
                              </table>
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
                                <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                
                                  </div>
                                  <!-- /.container-fluid -->
                                </section>
  
   

                                @endsection
