<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Simple Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel ="stylesheet" href= "{{url('css/app.css')}}">

  <!-- Google Font -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo  menu de navegacion -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IN</b>CO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inventarios</b>Colombia</span>
    </a>
    @include('layouts.components.navbar')
    
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- menu donde estan los clientes y proveedores -->


  @include('layouts.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        @yield('content')
    </section>

  </div>
 

  @include('layouts.components.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('js/app.js')}}"></script> 
</body>
</html>
