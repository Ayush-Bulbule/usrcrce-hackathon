<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Work Connect</title>

  <!-- theme meta -->


  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="/plugins/simplebar/simplebar.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="/plugins/nprogress/nprogress.css" rel="stylesheet" />




  <link href="/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />



  <link href="/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />



  <link href="/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



  <link href="/plugins/toaster/toastr.min.css" rel="stylesheet" />



  <link id="main-css-href" rel="stylesheet" href="/css/style.css" />




  <!-- FAVICON -->
  <link href="/images/favicon.png" rel="shortcut icon" />

  <script src="/plugins/nprogress/nprogress.js"></script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">



  <div id="toaster"></div>
  <div class="wrapper">

    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="/index.html">
            <img src="/images/logo.png" alt="Mono">
            <span class="brand-name">Work Connect</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">

          <li class="active">
              <a class="sidenav-item-link" href="requests">
                <i class="mdi mdi-plus"></i>
                <span class="nav-text">Registration Requst</span>
              </a>
            </li>

            <li >
              <a class="sidenav-item-link" href="workers">
                <i class="mdi mdi-notebook"></i>
                <span class="nav-text">Manage Workers</span>
              </a>
            </li>

            <li>
              <a class="sidenav-item-link" href="clients">
                <i class="mdi mdi-database"></i>
                <span class="nav-text">Manage Clients</span>
              </a>
            </li>












          </ul>

        </div>


      </div>
    </aside>



    <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
    <div class="page-wrapper">

      <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>

          <span class="page-title">Welcome </span>

          <div class="navbar-right ">


            <ul class="nav navbar-nav">
              
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  
                  <span class="d-none d-lg-inline-block">Admin</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  
                  <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="/auth/logout"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>