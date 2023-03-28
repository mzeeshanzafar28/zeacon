<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin Dashboard | Zeacon Global</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="smart-header navbar navbar-expand navbar-white navbar-light"
            style="background-color:#dd4b39;color:#fff;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color:#fff;"><i
                            class="fas fa-bars"></i></a>
                </li>


            </ul>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <a href="#" class="nav-link" style="color:#fff;">Admin Dashboard</a>
                    <!-- <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        </div>-->
                </div>
            </form>
            <!-- SEARCH FORM --
                <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                </form> -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->


                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="color:#fff; float:right;">{{ auth()->user()->name }}</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- smart Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link" style="background-color: #d73925; ">
              <img src="dist/img/logo-full.png" alt=" Logo" class="brand-image "
                   >

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex" >
               <!-- <div class="image">
                  <img src="dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
                </div> -->
                <div class="info">

                  <a href="#" class="d-block" > <span class="fa fa-user img-circle" style="color:white; font-size:50px;"> </span>&nbsp; <b>{{auth()->user()->name}}</b>
                  <i class="fa fa-circle text-success"></i></a>
                  <p></p>
                </div>

              </div>

               <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview menu-open">
                    <a href="/admin/dashboard" class="nav-link">
                     <!-- <a href="#" class="nav-link active">-->
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard

                      </p>
                    </a>

                  </li>

                  <li class="nav-item has-treeview">
                    <a href="/admin/client-mgt" class="nav-link" >
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                        User Management


                      </p>
                    </a>

                  </li>
                  <li class="nav-item has-treeview">
                    <a href="/admin/deposit" class="nav-link">
                      <i class="nav-icon fas fa-credit-card"></i>
                      <p>
                       Deposits

                      </p>
                    </a>

                  </li>
                   <li class="nav-item has-treeview">
                    <a href="/admin/d_methods" class="nav-link">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                      Deposit Methods Mgt

                      </p>
                    </a>

                  </li>
                   <li class="nav-item has-treeview">
                    <a href="/admin/fee" class="nav-link">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                      Fees Mgt

                      </p>
                    </a>

                  </li>
                  <li class="nav-item has-treeview">
                    <a href="/admin/deposit_rate" class="nav-link">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                      Deposit Charges

                      </p>
                    </a>

                  </li>
                   <li class="nav-item has-treeview">
                    <a href="/admin/rate" class="nav-link">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                      Naira Rate

                      </p>
                    </a>

                  </li>
                   <li class="nav-item has-treeview">
                    <a href="/admin/transfer" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                      Transfer

                      </p>
                    </a>

                  </li>
                  <li class="nav-item has-treeview">
                    <a href="/admin/withdrawal" class="nav-link">
                      <i class="nav-icon fas fa-cogs"></i>
                      <p>
                      Withdrawals

                      </p>
                    </a>

                  </li>
                  <li class="nav-item has-treeview">
                    <a href="/admin/kyc" class="nav-link">
                      <i class="nav-icon fas fa-cogs"></i>
                      <p>
                      KYC

                      </p>
                    </a>

                  </li>
                  <li class="nav-item has-treeview">
                    <a href="/admin/updateManualAccount" class="nav-link">
                      <i class="nav-icon fas fa-cogs"></i>
                      <p>
                      Update Manual Account

                      </p>
                    </a>

                  </li>
                  <li class="nav-item has-treeview">
                    <a href="/logout" class="nav-link">
                      <i class="nav-icon fas fa-sign-out-alt"></i>
                      <p>
                       Log Out

                      </p>
                    </a>

                  </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.col -->
    </div>
    <!-- /.row -->


    <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.row -->


    <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- smart Footer -->
    <footer class="smart-footer">
        <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="">Zeacon Global</a>.</strong>
        All rights reserved.

    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $(document).ready(function() {
                $('#example').DataTable({
                    "pagingType": "full_numbers"

                });
            });
        });
    </script>
</body>

</html>
