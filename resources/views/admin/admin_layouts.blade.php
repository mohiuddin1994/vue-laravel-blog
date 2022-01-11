

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{('adminAsset/plugins/fontawesome-free/css/all.min.cs')}}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminAsset/dist/css/adminlte.min.css')}}">
  <script src="{{asset('js/app.js')}} " defer ></script>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->






<div class="wrapper" id="app" >

   <!-- Navbar -->
   @include('admin.admin_header')
   <!-- /.navbar -->

   <!-- Main Sidebar Container -->
     @include('admin.admin_sidebar')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper" >

    <admin-master> </admin-master>

    <!-- Content Header (Page header) -->


     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

   <footer class="main-footer">
     <div class="float-right d-none d-sm-block">
       <b>Version</b> 3.2.0-rc
     </div>
     <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
   </footer>

   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
   </aside>


</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="{{asset('adminAsset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminAsset/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminAsset/dist/js/demo.js')}}"></script>
</body>
</html>
