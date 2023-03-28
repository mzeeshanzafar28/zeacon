@extends('layout.admin-app')

@section('content')
<section class="content w-50" style="margin-left: 30%">
    <div class="container-fluid">
    


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">UPDATE ACCOUNT</h5>
  
           <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                    
            <!--    <div class="btn-group">
                  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-wrench"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                  </div>
                </div> -->
              <!--  <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>-->
              </div>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
            <h3>ACCOUNT UPDATE</h3> <br>
<h4 style="color:red;"></h4>			  <br>
              <div class="row">
        
                  <div class="col-sm-6">
              <form action="/admin/edit-user/{{$user->id}}" method="POST">
                @csrf
                     <!-- Date mm/dd/yyyy -->
                      <div class="form-group">
              <label>First Name </label>
                <div class="input-group">
                  
                  <input type="text" class="form-control"  placeholder="First Name" name="name" value="{{$user->name}}" >
                </div>
                <!-- /.input group -->
              </div>
              
                       <div class="form-group">
              <label>Email</label>
                <div class="input-group">
                  
                  <input type="text" class="form-control"  placeholder="Email" name="email" value="{{$user->email}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
              <label>Date of Birth</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask placeholder="Date of Birth" name="dob" value="{{$user->dob}}">
                </div>
                <!-- /.input group -->
              </div>
                  </div>
                  <div class="col-sm-6">
                             
                       
                  <div class="form-group">
                <label>Telephone</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="text" class="form-control"
                         data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask placeholder="Telephone" name="phone" value="{{$user->phone}}" >
                </div>
                <!-- /.input group -->
              </div>
                  </div>
                  
            
              </div>
              <div class="row" >
                   <div class="col-sm-6">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Zip Code</label>
                  <input type="text" class="form-control" id="" placeholder="Zip Code" name="zip" value="{{$user->zipcode}}">
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" class="form-control" id="" placeholder="Address" name="address" value="{{$user->address}}">
                </div>
                   </div>
               
              </div>
              <div class="row" >
                   <div class="col-sm-6">
                   <div class="form-group">
                  <label for="exampleInputEmail1">State</label>
                  <input type="text" class="form-control" id="" placeholder="State" name="state" value="{{$user->state}}">
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Country</label>
                  <input type="text" class="form-control" id="" placeholder="Country" name="country" value="{{$user->country}}">
                </div>
                   </div>
               
              </div>
              <div class="row" >
                   <div class="col-sm-12">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  <select  class="form-control" id=""  name="status"  >
                  <option value="">Select Status</option>
                  <option value="1" > Active</option>
                  <option value="0" selected> Banned</option>
                  </select>
                </div>
                </div>
                
               
              </div>
              
              <!-- /.row -->
              <hr />
              
      
                      
              
                      
                                    <button type="submit" class="btn btn-primary" >UPDATE ACCOUNT</button>
                  
            </div>
            <!-- ./card-body -->
         </form>
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