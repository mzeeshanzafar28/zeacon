@extends('layout.user-app')
@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">My Profile</h5>
                    </div>

                    <div class="widget-content">
                        <form class="comment-form" action="" method="post">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="text-black font-w600"> Name <span
                                                class="required">*</span></label>
                                             
                                        <input type="text" readonly class="form-control" value="{{auth()->user()->name}}"
                                            name="amt" id="email" required>
                                            
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="text-black font-w600">Email Address<span
                                                class="required">*</span></label>
                                        <input type="text" readonly class="form-control" value="{{auth()->user()->email}}"
                                            name="amt" id="email" required>
                                          
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="text-black font-w600">Phone Number <span
                                                class="required">*</span></label>
                                        <input type="text" readonly class="form-control" value="{{auth()->user()->phone}}"
                                            name="amt" id="email" required>
                                           
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="text-black font-w600">Country <span
                                                class="required">*</span></label>
                                        <input type="text" readonly class="form-control" value="{{auth()->user()->country}}"
                                            name="email" id="email" required>
                                            {{-- <?php echo $row_cl['country']; ?> --}}
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>



    </div>

    </div>
@endsection
