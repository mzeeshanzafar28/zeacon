@extends('layout.app')
@section('content')
    <!-- Start Reset password Area -->
    <section class="login-area">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0 mx-auto">
                <div class="login-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="login-form">

                                {{-- <div class="logo white-logo log">
                                    <a href="/"><img src="assets/img/logo2.png" width="90" alt="image"></a>
                                </div> --}}
                                <h3>Reset Password</h3>
                                <h3 style="color:green;"><?php if (isset($Err)) {
                                    echo $Err;
                                } ?></h3>
                                <form class="dzForm" method="POST" action="">
                                    <div class="form-group">
                                        <input type="email" name="fuser" id="user" placeholder="Your email address"
                                            class="form-control">
                                    </div>
                                    <button type="submit" id="loginbtn" class="btn btn-primary">Reset Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Reset Password Area -->
@endsection
