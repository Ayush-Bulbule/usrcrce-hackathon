

<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Hire Hands</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="/plugins/simplebar/simplebar.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="/plugins/nprogress/nprogress.css" rel="stylesheet" />

  <link id="main-css-href" rel="stylesheet" href="/css/style.css" />

  


  <!-- FAVICON -->
  <link href="/images/favicon.png" rel="shortcut icon" />

  <script src="/plugins/nprogress/nprogress.js"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                      <a class="w-auto pl-0" href="/index.html">
                        <img src="/images/logo.png" >
                        <span class="brand-name text-dark">Hire Hands</span>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0">
                    <h4 class="text-dark text-center mb-5">Worker Sign Up</h4>
                    <form action="<?php echo base_url('auth/register'); ?>" method="post" enctype="multipart/form-data">
                      <div class="row">

                        <div class="form-group col-md-6 mb-4">
                          <input type="text" class="form-control input-lg" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6 mb-4">
                          <input type="email" class="form-control input-lg" id="email" name="email"  placeholder="Email">
                        </div>
                        <div class="form-group col-md-6 ">
                          <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6 ">
                          <input type="password" class="form-control input-lg" id="cpassword" name="" placeholder="Confirm Password">
                        </div>
                        <div class="form-group col-md-6 mb-4">
                          <input type="text" class="form-control input-lg" id="work_cat" name="work_cat"  placeholder="Work Category">
                        </div>
                        <div class="form-group col-md-6 mb-4">
                          <input type="number" class="form-control input-lg" id="phone" name="phone"  placeholder="Phone">
                        </div>
                        
                        <div class="form-group col-md-6 mb-4">
                          <input type="number" class="form-control input-lg" id="age" name="age" aria-describedby="agek_catHelp" placeholder="Age">
                        </div>
                        <div class="form-group col-md-6 mb-4">
                          <input type="text" class="form-control input-lg" id="address" name="address" aria-describedby="address_catHelp" placeholder="Address">
                        </div>

                        <div class="form-group col-md-6 mb-4">
                          
                          <select class="form-control" id="role" name="role">
                            <option>--Select Role--</option>
                            <option>Client</option>
                            <option>Worker</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6 mb-4">
                          <label for="idproof">Upload ID Proof</label>
                          <input type="file" class="form-control input-lg" id="idproof" name="idproof" aria-describedby="idproof" placeholder="Id Proof">
                        </div>
                        
                        <div class="col-md-12">
                          <div class="d-flex justify-content-between mb-3">

                            <div class="custom-control custom-checkbox mr-3 mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                              <label class="custom-control-label" for="customCheck2">I Agree the terms and conditions.</label>
                            </div>

                          </div>

                          <button type="submit" class="btn btn-primary btn-pill mb-4" name="submit">Sign Up</button>

                          <p>Already have an account?
                            <a class="text-blue" href="login">Sign in</a>
                          </p>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>
