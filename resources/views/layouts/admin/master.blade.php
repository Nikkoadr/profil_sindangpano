<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('layouts.admin.head')
@yield('link')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
@include('layouts.admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layouts.admin.asidebar')

  <!-- Content Wrapper. Contains page content -->
@yield('content')
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
@include('layouts.admin.footer')
@yield('scripts')
</body>
</html>
