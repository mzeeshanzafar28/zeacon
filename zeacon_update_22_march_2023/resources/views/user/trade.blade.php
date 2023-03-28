@extends('layout.user-app')
@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">





            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Trading Accounts</h5>
                    </div>

                    <div class="widget-content">
                     
                            <div class="alert alert-danger align-center text-center"> <span
                                class="fa fa-info"></span> 
                              
                            </div> 
                            


                        <div class="row">

                            <div class="col-lg-6">
                             @if (!$user->binary_id)
                                 
                             <form class="comment-form" action="binary_id_submit" method="post">
                                 @csrf
                                 <div class="form-group">
                                     <label for="email" class="text-black font-w600">Binary Login ID: <span
                                             class="required">*</span></label>
                                     <div class="input-group mb-4">

                                         <input type="text" class="form-control" value=""
                                             name="binary_id" id="binary" >
                                            
                                         <div class="input-group-append">
                                             <button type="submit" class="btn btn-primary" type="button">Save</button>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                             @endif
                          

                                <hr>
                                <h5><i class="fa fa-id-card-o"></i> Binary Trading ID : @if ($user->binary_id)
                                    {{$user->binary_id}}
                                @endif
                            
                                </h5>

                               
                            </div>
                            <div class="col-lg-6">
                               @if (!$user->enaira)
                                   
                               <form method="post" action="enaira_wallet_submit">
                                   @csrf
                                   <div class="form-group">
                                       <label for="email" class="text-black font-w600">eNaira: <span
                                               class="required">*</span></label>
                                       <div class="input-group mb-4">

                                           <input type="text" class="form-control" value=""
                                               name="enaira" id="enaira" >
                                              
                                           <div class="input-group-append">
                                               <button type="submit" class="btn btn-primary" type="button">Save</button>
                                           </div>
                                       </div>
                                   </div>
                               </form>
                               @endif
                               

                                <hr>
                                <h5><i class="fa fa-id-card-o"></i> eNaira Wallet : 
                                   @if ($user->enaira)
                                       {{$user->enaira}}
                                   @endif
                                </h5>

                              

                            </div>




                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Bank Account</h5>
                        <small class="d-inline text-danger"><strong><i class="fa fa-info"></i> Please note your account name
                                must match your signup name</strong></small>
                    </div>
                    <a href="addbank" class="btn btn-primary float-right mb-3">Add New Bank</a>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-scroll">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content text-center">BANK NAME</div>
                                        </th>

                                        <th>
                                            <div class="th-content th-heading text-center">ACCOUNT/MOBILE MONEY</div>
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                  
                                @foreach ($bank as $banks)
                                    
                                <tr>
                                    <td class="text-center"><strong>
                                    {{$banks->bank}}
                                    </strong></td>




                                    <td class="text-center"><strong>
                                        {{$banks->accountno}}
                                    
                                    </strong></td>





                                </tr>
                                @endforeach
                                    

                                </tbody>
                            </table>
                        </div>
                        {{-- <?php if(isset($Err)){ ?> --}}
                            <div class="alert alert-danger align-center text-center"> <span
                                class="fa fa-info"></span> 
                                {{-- <?php echo $Err; ?> --}}
                            </div> 
                            {{-- <?php } ?> --}}



                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
