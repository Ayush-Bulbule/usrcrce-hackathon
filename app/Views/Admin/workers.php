<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Work Connect - ADmin</title>

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


  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">


    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
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

          <span class="page-title">Welcome Client @<?= session()->get('name') ?></span>

          <div class="navbar-right ">


            <ul class="nav navbar-nav">
              
              
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                  <span class="d-none d-lg-inline-block">Client</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a class="dropdown-link-item" href="profile">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">My Profile</span>
                    </a>
                  </li>


                  <li>
                    <a class="dropdown-link-item" href="user-account-settings.html">
                      <i class="mdi mdi-settings"></i>
                      <span class="nav-text">Account Setting</span>
                    </a>
                  </li>

                  <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="/auth/logout"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>


      </header>

      <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
      <div class="content-wrapper">
        <div class="content">


        <div class="col-xl-12">
    <!-- Basic Table-->
    <div class="card card-default">
      <div class="card-header">
        <h2>Workers Information</h2>
      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-table-1">
          <pre class="language-html mb-4">

        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">1</td>
              <td>Lucia</td>
              <td>Christ</td>
              <td>@Lucia</td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td>Catrin</td>
              <td>Seidl</td>
              <td>@catrin</td>
            </tr>
            <tr>
              <td scope="row">3</td>
              <td>Lilli</td>
              <td>Kirsh</td>
              <td>@lilli</td>
            </tr>
            <tr>
              <td scope="row">4</td>
              <td>Else</td>
              <td>Voigt</td>
              <td>@voigt</td>
            </tr>
            <tr>
              <td scope="row">5</td>
              <td>Ursel</td>
              <td>Harms</td>
              <td>@ursel</td>
            </tr>
            <tr>
              <td scope="row">6</td>
              <td>Anke</td>
              <td>Sauter</td>
              <td>@Anke</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


          <!-- Footer -->
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> Copyright <a class="text-primary" href="" target="_blank">PICTIAN</a>.
              </p>
            </div>
            <script>
              var d = new Date();
              var year = d.getFullYear();
              document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

        </div>
      </div>





      <script src="/plugins/jquery/jquery.min.js"></script>
      <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/plugins/simplebar/simplebar.min.js"></script>
      <script src="/https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



      <script src="/plugins/apexcharts/apexcharts.js"></script>



      <script src="/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

      <script src="/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
      <script src="/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
      <script src="/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
      <script src="/plugins/daterangepicker/moment.min.js"></script>
      <script src="/plugins/daterangepicker/daterangepicker.js"></script>
      <script>
        jQuery(document).ready(function() {
          jQuery('input[name="dateRange"]').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            locale: {
              cancelLabel: 'Clear'
            }
          });
          jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
          });
          jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            jQuery(this).val('');
          });
        });
      </script>
      <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
      <script src="/js/mono.js"></script>
      <script src="/js/map.js"></script>
      <script src="/js/custom.js"></script>
      <!--  -->
</body>

</html>