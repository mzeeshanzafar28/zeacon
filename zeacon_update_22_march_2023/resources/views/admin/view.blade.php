@extends('layout.admin-app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          @if (Session::has('msg'))
              <span class="alert alert-success">{{Session::get('msg')}}</span>
          @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Information </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Account Management</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content " >
    <div class="container-fluid">
    
     <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Customer Details</h5>

           <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
          
              </div>
            </div>
            <!-- /.card-header -->
            
              <!-- /.row -->
              
               <div class="card-body  p-0">
               
                   <div class="row">
          
                 
                  <div class="col-sm-12">
                      
                     
              
              <p style="padding:2px;" class="ml-2">Available balance: ${{$userbalance}}</p>
<p style="padding:2px;" class="ml-2">Available withdrawal: ${{$userbalance}}</p>
<p style="padding:2px;" class="ml-2">Total Deposit: ${{$deposit}}</p>

<p style="padding:2px;" class="ml-2">Total Withdrawal: ${{$withdrawal}}</p>
<p style="padding:2px;" class="ml-2">Total Transfer: ${{$transfer}} </p>
              
               </div>
               </div>
              
               
          </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Profile</h5>

           <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
          
              </div>
            </div>
            <!-- /.card-header -->
            
              <!-- /.row -->
               
              <div class="card-body  p-0">
              <div class="row">
          
                 
                  <div class="col-sm-12">
              <p style="padding:10px;" class="ml-2"> Name : {{$user->name}}</p>
              
              <p style="padding:10px;" class="ml-2">Email : {{$user->email}}</p><br>
              
              <p style="padding:10px;" class="ml-2">Memebers Since:{{$user->created_at}}</p>
              
          
               </div>
               </div>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
           <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Add Customer Transaction</h5>

           <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
          
              </div>
              
              
            </div>
            <!-- /.card-header -->
            
              <!-- /.row -->
              
               <div class="card-body  ">
               
               <div class="row">
               <p style="color:red;"></p>
             <form action="/admin/add-customer-transaction/{{$user->id}}" method="post">
                 @csrf
                  <div class="col-sm-12">
                      
                   <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" placeholder="Amount" name="amount" >
                
                
              </div>
            
                  </div>
                  
                   <div class="col-sm-12">
                       <label></label>
                   <div class="input-group">
               <div class="input-group-append">
                  <span class="input-group-text">Description </span>
                </div>
                <textarea  class="form-control" placeholder="Description" name="desc" ></textarea>
                
                
              </div>
            
                  </div>
                  
                   <div class="col-sm-12">
              
                    <!-- select -->
                    <div class="form-group">
                      <label></label>
                  
                      <select class="form-control"  name="type"> 
                        <option value="">Select type</option>
                       <option value="1">Fund Customer Account</option>
                      
                       <option value="3">Deduct Customer Account</option>
                       
                        
                      </select>
                    </div>
                  </div>
                   <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                  </form>
                  <div class="card-footer" >
               
              </div>
            
              </div>
               
           </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Send Customer Email</h5>

           <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
          
              </div>
              
              
            </div>
            <!-- /.card-header -->
            
              <!-- /.row -->
              
               <div class="card-body  ">
               
               <div class="row">
                    <div class="col-sm-12">
               <p style="color:red;"></p><br />
               <p>Name: {{$user->name}}</p>
               <p>Email Address: {{$user->email}}</p><br>
             <form action="/admin/sendmail/{{$user->id}}" method="post">
                @csrf
                 <div class="row">
                  <div class="col-sm-12">
                      
                  
                
                <input type="text" class="form-control" placeholder="Subject" name="sub" >
                
                
            
            
                  </div>
                  
                   <div class="col-sm-12">
                       <label></label>
                  
                <textarea  class="form-control" placeholder="Message" name="msg" ></textarea>
                
                
              
            
                  </div>
                  </div><br />
                  <input type="hidden" name="user" value="" />
                   <button type="submit" class="btn btn-primary" style="float:right;">Send Mail</button>
                  </form>
                  <div class="card-footer" >
               
              </div>
            
              </div>
               </div>
           </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
     
      </div>
          


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Transactions</h5>

           <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
          
              </div>
            </div>
            <!-- /.card-header -->
            
              <!-- /.row -->
              
             <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>S/N</th>
                  <th>Description</th>
                 
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Date</th>
              
                </tr>
                </thead>
                <tbody>
                               
               @foreach ($transaction as $transactions )
               <tr>
                <td>{{$sn=$sn+1}}</td>
        
                <td>  {{$transactions->nar}}</td>
                <td>  {{$transactions->type}}</td>
             <td>{{$transactions->status}}</td>
                <td> {{$transactions->adate}}</td>
              </tr>
               @endforeach
                
               
                
   
               
                </tbody>
                <tfoot>
               <tr>
                <th>S/N</th>
                  <th>Description</th>
                 
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
              
            </div>
            <!-- ./card-body -->
         
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>

@endsection