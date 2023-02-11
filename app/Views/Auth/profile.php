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
              <a class="sidenav-item-link" href="add_req">
                <i class="mdi mdi-notebook"></i>
                <span class="nav-text">Add Issue/Requst</span>
              </a>
            </li>

            <li>
              <a class="sidenav-item-link" href="">
                <i class="mdi mdi-database"></i>
                <span class="nav-text">Manage Requests</span>
              </a>
            </li>










            <li class="section-title">
              Apps
            </li>





            <li>
              <a class="sidenav-item-link" href="chat.html">
                <i class="mdi mdi-wechat"></i>
                <span class="nav-text">Chat</span>
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
              <!-- Offcanvas -->
              <li class="custom-dropdown">
                <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:">
                  <i class="mdi mdi-contacts icon"></i>
                </a>
              </li>
              <li class="custom-dropdown">
                <button class="notify-toggler custom-dropdown-toggler">
                  <i class="mdi mdi-bell-outline icon"></i>
                  <span class="badge badge-xs rounded-circle">21</span>
                </button>
                <div class="dropdown-notify">

                  <header>
                    <div class="nav nav-underline" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home" aria-selected="true">All (5)</a>
                    </div>
                  </header>

                  <div class="" data-simplebar style="height: 325px;">
                    <div class="tab-content" id="myTabContent">

                      <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                        <div class="media media-sm bg-warning-10 p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="profile.html">
                              <img src="images/user/user-sm-02.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="profile.html">
                              <span class="title mb-0">John Doe</span>
                              <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                              <span class="time">
                                <time>Just now</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 bg-light mb-0">
                          <div class="media-sm-wrapper bg-primary">
                            <a href="profile.html">
                              <i class="mdi mdi-calendar-check-outline"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="profile.html">
                              <span class="title mb-0">New event added</span>
                              <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                              <span class="time">
                                <time>10 min ago...</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="profile.html">
                              <img src="images/user/user-sm-03.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="profile.html">
                              <span class="title mb-0">Sagge Hudson</span>
                              <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                              <span class="time">
                                <time>1 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info-dark">
                            <a href="profile.html">
                              <i class="mdi mdi-account-multiple-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="profile.html">
                              <span class="title mb-0">Add request</span>
                              <span class="discribe">Add Dany Jones as your contact.</span>
                              <div class="buttons">
                                <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                <a href="#" class="btn btn-sm shadow-none">delete</a>
                              </div>
                              <span class="time">
                                <time>6 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info">
                            <a href="profile.html">
                              <i class="mdi mdi-playlist-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="profile.html">
                              <span class="title mb-0">Task complete</span>
                              <span class="discribe">Afraid at highly months do things on at.</span>
                              <span class="time">
                                <time>1 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                      </div>



                      <footer class="border-top dropdown-notify-footer">
                        <div class="d-flex justify-content-between align-items-center py-2 px-4">
                          <span>Last updated 3 min ago</span>
                          <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                        </div>
                      </footer>
                    </div>
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                  <span class="d-none d-lg-inline-block">Client</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a class="dropdown-link-item" href="profile.html">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">My Profile</span>
                    </a>
                  </li>



                  <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i> Log Out </a>
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


          <div class="col-xl-10">
            <!-- Account Settings -->
            <div class="card card-default">
              <div class="card-header">
                <h2 class="mb-5">Account Settings</h2>

              </div>


              <div class="card-body">

                <form action="<?php echo base_url('auth/profile'); ?>" method="post" enctype="multipart/form-data">
                  <div class="row mb-2">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="name" value="<?= $user['name'] ?>">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="lastName">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row mb-2">
                    <div class="col-lg-6">
                      <div class="form-group mb-4">
                        <label for="userName">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"  value="<?= $user['phone'] ?>">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group mb-4">
                        <label for="email">Address</label>
                        <input type="text" class="form-control" id="address" name="address"  value="<?= $user['address'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group mb-4">
                    <label for="newPassword">New password</label>
                    <input type="password" class="form-control" id="newPassword" name="password">
                  </div>

                  <div class="form-group mb-4">
                    <label for="conPassword">Confirm password</label>
                    <input type="password" class="form-control" id="conPassword">
                  </div>

                  <div class="d-flex justify-content-end mt-6">
                    <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                  </div>

                </form>
              </div>
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



      <!-- Card Offcanvas -->
      <div class="card card-offcanvas" id="contact-off">
        <div class="card-header">
          <h2>Contacts</h2>
          <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
        </div>
        <div class="card-body">

          <div class="mb-4">
            <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
          </div>

          <div class="media media-sm">
            <div class="media-sm-wrapper">
              <a href="profile.html">
                <img src="images/user/user-sm-01.jpg" alt="User Image">
                <span class="active bg-primary"></span>
              </a>
            </div>
            <div class="media-body">
              <a href="profile.html">
                <span class="title">Selena Wagner</span>
                <span class="discribe">Designer</span>
              </a>
            </div>
          </div>

          <div class="media media-sm">
            <div class="media-sm-wrapper">
              <a href="profile.html">
                <img src="images/user/user-sm-02.jpg" alt="User Image">
                <span class="active bg-primary"></span>
              </a>
            </div>
            <div class="media-body">
              <a href="profile.html">
                <span class="title">Walter Reuter</span>
                <span>Developer</span>
              </a>
            </div>
          </div>

          <div class="media media-sm">
            <div class="media-sm-wrapper">
              <a href="profile.html">
                <img src="images/user/user-sm-03.jpg" alt="User Image">
              </a>
            </div>
            <div class="media-body">
              <a href="profile.html">
                <span class="title">Larissa Gebhardt</span>
                <span>Cyber Punk</span>
              </a>
            </div>
          </div>

          <div class="media media-sm">
            <div class="media-sm-wrapper">
              <a href="profile.html">
                <img src="images/user/user-sm-04.jpg" alt="User Image">
              </a>

            </div>
            <div class="media-body">
              <a href="profile.html">
                <span class="title">Albrecht Straub</span>
                <span>Photographer</span>
              </a>
            </div>
          </div>

          <div class="media media-sm">
            <div class="media-sm-wrapper">
              <a href="profile.html">
                <img src="images/user/user-sm-05.jpg" alt="User Image">
                <span class="active bg-danger"></span>
              </a>
            </div>
            <div class="media-body">
              <a href="profile.html">
                <span class="title">Leopold Ebert</span>
                <span>Fashion Designer</span>
              </a>
            </div>
          </div>

          <div class="media media-sm">
            <div class="media-sm-wrapper">
              <a href="profile.html">
                <img src="images/user/user-sm-06.jpg" alt="User Image">
                <span class="active bg-primary"></span>
              </a>
            </div>
            <div class="media-body">
              <a href="profile.html">
                <span class="title">Selena Wagner</span>
                <span>Photographer</span>
              </a>
            </div>
          </div>

        </div>
      </div>



      <script src="/plugins/jquery/jquery.min.js"></script>
      <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/plugins/simplebar/simplebar.min.js"></script>
      <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



      <script src="/plugins/apexcharts/apexcharts.js"></script>



      <script src="/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>



      <script src="/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
      <script src="/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
      <script src="/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>



      <script src="plugins/daterangepicker/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
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