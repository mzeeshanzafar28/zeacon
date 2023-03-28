@extends('layout.user-app')
@section('content')

   
        
        <!--  BEGIN CONTENT AREA  -->
      
            <div class="layout-px-spacing">
                @if (Session::has('success'))
                <br>
                <br>
                <span class="alert alert-success " style="width: 100%">{{Session::get('success')}}</span>
                <br>
                @endif
              <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                  <div class="widget widget-table-three">
                    <div class="widget-heading">
                      
                                <h5 class="">Add Account</h5>
                                <small class="d-inline text-danger"><strong><i class="fa fa-info"></i> Please note your account name must match your signup name</strong></small>
                            </div>
                           
                            <div class="widget-content">
                               
		
                           	<div class="row"> 
												
												<div class="col-lg-6">
												    
												    <form class="comment-form" action="add_bank" method="POST">
                                                        @csrf
														<div class="form-group">
														     <label for="email" class="text-black font-w600"><strong>Account Number/Mobile Money Number/eNaira Payment Code <span class="required">*</span></strong></label>
													<div class="input-group mb-4">
													   
  <input type="text"  class="form-control" value=""  name="accountno" id="accno" >
 
</div>
	</div>
											   
														<div class="form-group">
														     <label for="email" class="text-black font-w600"><strong>Select Bank: <span class="required">*</span></strong></label>
													<div class="input-group mb-4">
													   
  <select  class="form-control" value=""  name="bank" id="bank" >
      <option value=""> Select Bank </option>
      <option value="eNaira"> eNaira</option>
      <option value="Access Bank">Access Bank</option><option value="ACCESS - Diamond Bank">ACCESS - Diamond Bank</option><option value="Citibank">Citibank</option><option value="Ecobank Nigeria">Ecobank Nigeria</option>
      
      <option value="Enterprise Bank">Enterprise Bank</option><option value="FCMB">FCMB</option><option value="Fidelity Bank">Fidelity Bank</option><option value="First Bank">First Bank</option><option value="Flutterwave">Flutterwave</option><option value="Guaranty Trust">Guaranty Trust</option><option value="Heritage Bank">Heritage Bank</option><option value="Irish Channel">Irish Channel</option><option value="Jaiz Bank">Jaiz Bank</option><option value="Key Stone Bank">Key Stone Bank</option><option value="Kuda Bank">Kuda Bank</option><option value="MainStreet Bank">MainStreet Bank</option><option value="Mobile Money">Mobile Money</option><option value="Paga">Paga</option><option value="Paycom">Paycom</option><option value="Polaris Bank Plc">Polaris Bank Plc</option><option value="RedBiller">RedBiller</option><option value="Sterling Bank Plc">Sterling Bank Plc</option><option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option><option value="SANTANDER UK">SANTANDER UK</option><option value="Standard Bank">Standard Bank</option><option value="Standard Chartered Bank">Standard Chartered Bank</option><option value="SunTrust Bank">SunTrust Bank</option><option value="Union Bank of Nigeria Plc">Union Bank of Nigeria Plc</option><option value="United Bank For Africa Plc">United Bank For Africa Plc</option><option value="Unity Bank Plc">Unity Bank Plc</option><option value="Wema Bank Plc">Wema Bank Plc</option><option value="Zenith Bank Plc">Zenith Bank Plc</option>
      </select>
      
</div>
	</div>
								<div class="form-group">
														     <label for="email" class="text-black font-w600"><strong>Account Name <span class="required">*</span></strong></label>
														     <label> <small class="text-primary"><strong></strong></small></label>
													<div class="input-group mb-4">
													   
  <input type="text"  class="form-control" value=""  name="accountname" id="bname" >

</div>
	</div>
							<div class="form-group">
														     <label for="email" class="text-black font-w600"><strong>Bank Phone <span class="required">*</span></strong></label>
														     
													<div class="input-group mb-4">
													   
  <input type="text"  class="form-control" value=""  name="bankphone" id="phone" >

</div>
	</div>
	 <div class="form-group">
    <button type="submit" class="btn btn-primary" type="button">Save</button>
  </div>
	                                                 

												</div>
											
											
												
											
												
											</div>
										
										 </div>
                        </div>
                   
                  </div>


                </div>

            </div>
        
@endsection
