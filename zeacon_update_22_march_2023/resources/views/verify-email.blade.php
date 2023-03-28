@extends('layout.app')
@section('content')
    <!-- Start Login Area -->
<section class="login-area">
    <div class="row m-0">
        

        <div class="col-lg-6 col-md-12 p-0 mx-auto">
            <div class="login-content">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="login-form">
                          
                            {{-- <div class="logo white-logo log">
                                <a href="index.php"><img src="assets/img/logo2.png" width="90" alt="image"></a>
                            </div> --}}

                            <h3 style="text-align: left">Verify Email</h3>

                            <form method="POST" action="verify-email">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="verification-code" id="verification-code" placeholder="Enter verification code"
                                        class="form-control">
                                </div>

                                <button type="submit" id="loginbtn" class="btn btn-primary">Verify</button>
								 <a class="btn btn-primary" id="ajaxlogin" style="display:none;" ><i class="fa fa-spin fa-spinner"></i></a>
  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
@endsection