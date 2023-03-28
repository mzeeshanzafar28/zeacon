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

                            <h3>Welcome back</h3>
                            <p>New to ZEACON? <a href="sign-up">Sign up</a></p>

                            <form method="POST" action="login">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Your email address"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="Your password"
                                        class="form-control">
                                </div>

                                <button type="submit" id="loginbtn" class="btn btn-primary">Login</button>
								 <a class="btn btn-primary" id="ajaxlogin" style="display:none;" ><i class="fa fa-spin fa-spinner"></i></a>

                                <div class="forgot-password">
                                    <a href="reset-password">Forgot Password?</a>
                                </div>

                              
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