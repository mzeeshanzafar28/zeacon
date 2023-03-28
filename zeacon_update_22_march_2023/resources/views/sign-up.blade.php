@extends('layout.app')
@section('content')
    <!-- Start Signup Area -->
    <section class="signup-area" style="margin: 7% 0 30% 0;">
        <div class="row">
            <div class="col-lg-6 col-md-12 mx-auto">
                <div class="signup-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="signup-form">
                                <!-- <div class="logo black-logo">
                                    <a href="index.html"><img src="assets/img/ZEACON.png" alt="image"></a>
                                </div> -->
                                {{-- <div class="logo white-logo">
                                    <a href="index.php"><img src="assets/img/logo2.png" width="90" alt="image"></a>
                                </div> --}}

                                <h3>Open up your ZEACON Account now</h3>
                                <p>Already signed up? <a href="login.php">Log in</a></p>

                                <form method="POST" action="register">
                                    @csrf
                                    <div class="form-group" >
                                        <select name="account_type"
                                            class="form-control" >
                                            <option Selected Disabled>Select Account Type</option>
                                            <option value="personal">Personal</option>
                                            <option value="business">Business</option>
                                        </select>
                                        @error('account_type')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" placeholder="Full Name"
                                            class="form-control">
                                            @error('name')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Your email address"
                                            class="form-control">
                                            @error('email')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" placeholder="Username"
                                            class="form-control">
                                            @error('username')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" placeholder="Phone"
                                            class="form-control">
                                            @error('phone')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="dob" id="dob" placeholder="Date of Birth"
                                            class="form-control">
                                            @error('dob')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" placeholder="Address"
                                            class="form-control">
                                            @error('address')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="country" id="country" placeholder="Country"
                                            class="form-control">
                                            @error('country')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="state" id="state" placeholder="State"
                                            class="form-control">
                                            @error('state')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" id="password"
                                            placeholder="Create a password" class="form-control">
                                            @error('password')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password"
                                            class="form-control">
                                            @error('password_confirmation')
                                            <span class="text text-danger" style="text-align: left">{{$message}}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                          <input class="form-check-input mt-0" type="checkbox" name="terms" aria-label="Checkbox for following text input" checked >
                                        </div>
                                        <span  class="form-control" style="text-align: left" aria-label="Text input with checkbox" >Agree to <a href="#">Terms & Conditions</a></span>
                                      </div>
                                      <div class="input-group mb-3">
                                        <div class="input-group-text">
                                          <input class="form-check-input mt-0" type="checkbox" name="newsletter" aria-label="Checkbox for following text input" checked > 
                                        </div>
                                        {{-- <input type="text" class="form-control" aria-label="Text input with checkbox" disabled value="Agree to the"> --}}
                                        <span  class="form-control" style="text-align: left" aria-label="Text input with checkbox" >Join Our Newsletter</span>
                                      </div>
                                    <button type="submit" class="btn btn-primary mb-5" id="register-1">Sign Up</button>
                                    <a class="btn btn-primary" id="ajaxp" style="display:none;"><i
                                            class="fa fa-spin fa-spinner"></i></a>

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
