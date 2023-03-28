@extends('layout.admin-app')
@section('content')
<section class="content mx-auto w-50 align-middle">
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-9">
            <div class="card">
                @if (Session::has('msg'))
                <span class="alert alert-success">{{Session::get('msg')}}</span>
                @endif
                <div class="card-header">
                    <h5 class="card-title">Update Bank Details</h5>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                        <form href="/admin/updateManualAccount" method="POST">
                            @csrf
                            <div class="row g-3 align-items-center justify-content-center">
                                <div class="mb-3 col-12">
                                    <label for="bank" class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" name="bank">
                                  </div>
                                  <div class="mb-3 col-12">
                                    <label for="owner" class="form-label">Account Owner Name</label>
                                    <input type="text" class="form-control" name="owner">
                                  </div>
                                  <div class="mb-3 col-12">
                                      <label for="account_no">Account Number</label>
                                    <input type="text" class="form-control" name="account_no">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary ">Update</button>
                                    <br>
                                    @if(Session::has('changeSuccess'))
                                    <p class="text-success">{{ Session::get('changeSuccess') }}</p>
                                    @endif

                                </div>
                              </div>
                          </form>

                </div>

                <!-- /.card-body -->

            </div>

            <!-- /.card -->
        </div>

        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title"><strong>Manual Payment Account</strong></h4>
                    <br><hr>
                    {{-- <h6 class="card-subtitle mb-2 text-body-secondary">Admin Account details</h6> --}}
                    <strong><label for="">Bank</label></strong>
                    <p>{{ $manualAccount['bank'] }}</p>
                    <strong><label for="">Account Holder</label></strong>
                    <p>{{ $manualAccount['owner'] }}</p>
                    <strong><label for="">Account No</label></strong>
                    <p>{{ $manualAccount[ 'account_no'] }}</p>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
</section>

@endsection
