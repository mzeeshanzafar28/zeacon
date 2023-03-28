@extends('layout.user-app')
@section('content')

   
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
				
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        @if (Session::has('kycsuccess'))
            <span class="alert alert-success">{{Session::get('kycsuccess')}}</span>
            <br>
        @endif
                        <div class="widget widget-table-three">

                            {{-- <div class="widget-heading">
                                <h5 class="">KYC</h5>
                            </div>

                            <div class="widget-content">
                           	
				                <form class="form" method="post" action="" enctype="multipart/form-data">
	<h3>My Bio Data: </h3>
	<h4 style="color:red;"> </h4>	
		<div class="form-group">
				<label>Date of birth: </label>
				<div class="input-group">
						<input name="dob" type="date" placeholder="Date of birth" class="form-control" required="" value="">
						</div></div><div class="form-group">
				<label>Phone: </label>
				<div class="input-group">
							<input name="phone" type="text" placeholder="Phone" class="form-control" required="" >
						</div></div><div class="form-group">
				<label>Zip code: </label>
				<div class="input-group">
							<input name="zip" type="text" placeholder="Zip code" class="form-control" required="" >
						</div></div><div class="form-group">
				<label class="">Address: </label>
				<div class="input-group">
							<textarea name="add" placeholder="Address" class="form-control" required="" required ></textarea>
						</div> </div><div class="form-group">
				<label class="">State: </label>
				<div class="input-group">
							<input name="state" type="text" placeholder="State" class="form-control" required="" >
						</div></div>
						<div class="form-group">
				<label class="">Country: </label>
				<div class="input-group">
							<input name="country" type="text" placeholder="Country" class="form-control" required="" >
						</div></div> --}}
					

						{{-- After Submitting KYC code  --}}

                        @if ($user->status==2)
                           
                       <div class="alert alert-light-primary border-0 mb-4" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                        <strong>Hello </strong>Your KYC approval is inprogress, we will get intouch with you in 24hours </button>
                    </div>
                    @elseif ($user->status==1)
                    <div class="alert alert-light-primary border-0 mb-4" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                        <strong>Hello </strong>Your KYC is Approved ! </button>
                    </div>
                        @endif
						
                         @if ($user->status==0)
                             
                         <form class="form" method="post" action="kycData" enctype="multipart/form-data">
                          @csrf
<h3>Update your account to proceed with KYC: </h3>
<h4 style="color:red;"> </h4>	
  <div class="form-group">
          <label>Date of birth: </label>
          <div class="input-group">
                  <input name="dob" type="date" placeholder="Date of birth" class="form-control" >
                  @error('dob')
                  <br>
                      <span style="color:red">{{$message}}</span>
                      <br>
                  @enderror
                  </div></div><div class="form-group">
          <label>Phone: </label>
          <div class="input-group">
                      <input name="phone" type="text" placeholder="Phone" class="form-control"  >
                      @error('phone')
                      <br>
                      <span style="color:red">{{$message}}</span>
                      <br>
                  @enderror
                  </div></div><div class="form-group">
          <label>Zip code: </label>
          <div class="input-group">
                      <input name="zipcode" type="text" placeholder="Zip code" class="form-control"  >
                      @error('zipcode')
                      <br>
                      <span style="color:red">{{$message}}</span>
                      <br>
                  @enderror
                  </div></div><div class="form-group">
          <label class="">Address: </label>
          <div class="input-group">
                      <textarea name="address" placeholder="Address" class="form-control"   ></textarea>
                      @error('address')
                      <br>
                      <span style="color:red">{{$message}}</span>
                      <br>
                  @enderror
                  </div> </div><div class="form-group">
          <label class="">State: </label>
          <div class="input-group">
                      <input name="state" type="text" placeholder="State" class="form-control"  >
                      @error('state')
                      <br>
                      <span style="color:red">{{$message}}</span>
                      <br>
                  @enderror
                  </div></div>
                  <div class="form-group">
          <label class="">Country: </label>
          <div class="input-group">
                      <input name="country" type="text" placeholder="Country" class="form-control"  >
                      @error('country')
                      <br>
                      <span style="color:red">{{$message}}</span>
                      <br>
                  @enderror
                  </div></div>
                  
                      <div class="form-group">
          <label class="">Select Document type </label>
          <div class="input-group">
                  <select  class="form-control" id=""  name="doc_type"  >
              <option value="">Select Document Type</option>
          
              <option value="Drivers Lincense"> Drivers Lincense</option>
              <option value="International Passport"> International Passport</option>
              <option value="NIN"> NIN </option>
              </select>
              @error('doc_type')
                     <br>
                      <span style="color:red">{{$message}}</span>
                      <br>  
                  @enderror
                  </div></div>
                  
                  <div class="form-group">
          <label class="">Upload Document (back & front)  </label>
          <span style="color:red">*Upload in pdf </span>
          <div class="input-group">
                      <input name="document" type="file"  class="form-control"  >
                      @error('document')
                      <br>
                      <span style="color:red">{{$message}}</span>
                      <br>
                  @enderror
                  </div></div>
                  
                  <div> 
      <label><input type="checkbox" name="checkbox" > I agree that the information submited is correct to the best of my knowledge.</label>
      @error('checkbox')
                        <br>
                      <span style="color:red">{{$message}}</span>
                      <br>
                  @enderror
  </div>

  <input type="submit" value="Update account" class="btn btn-info">

</form>
        @endif
						
			
                           
                           </div>
                        </div>
                    </div>

                 
       </div>

                    

                </div>

            </div>
        
@endsection
