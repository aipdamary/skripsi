  <?php
session_start();
include ("koneksi.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PT. ASSYIFA BERKAH ABADI - Home</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================Header Menu Area =================-->
  <!-- <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          
          <a class="navbar-brand logo_h" href="index.html"><img src="img/" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#login" rel="page-scroll">Login</a></li> 
           
              
							</li>
              <li class="nav-item"><a class="nav-link" href="#kontak" rel="page-scroll">Kontak</a></li>
            </ul>

            
          </div> 
        </div>
      </nav>
    </div>
  </header> -->
  <!--================Header Menu Area =================-->
    <div class="hero-banner d-flex align-items-center" style="height:100vh !important">
      <div class="container">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <div class="mr-4">
              <img src="img/asyifa.png" style="width: 120px !important">
            </div>
            <div>
              <span class="text-white" style="font-size: 30px;">Sistem Informasi Karyawan</span>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-6">
                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <div class="card w-100">
                        <div class="card-body d-flex justify-content-center">
                          Karyawan
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-6">
                    <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <div class="card w-100">
                        <div class="card-body d-flex justify-content-center">
                          Admin
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="accordion" id="accordionExample">
                  <div class="card border-0">
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body border-0">
                        <div class="row">
                          <div class="col-12 d-flex justify-content-center">
                            <h2>Login Karyawan</h1>
                          </div>
                        </div>
                        <form method="post" action="karyawan/pro_login_karyawan.php">
                          <div class="row mg-4">
                            <div class="col-12">
                              <div class="form-group">
                                <small style="font-size: 13px;">Username</small>
                                <input type="text" class="form-control border" name="username" id="username" placeholder="username" style="height: 50px !important" styla="color:black !Important">
                              </div>
                            </div>
                          </div>
                          <div class="row mt2">
                            <div class="col-12">
                              <div class="form-group">
                                <small style="font-size: 13px;">Password</small>
                                <input type="password" class="form-control border" name="password" id="password" placeholder="password" style="height: 50px !important">
                              </div>
                            </div>
                          </div>
                          <div class="row mt-4">
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary rounded btn-block">Log In</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 d-flex justify-content-center">
                            <h2>Login Admin</h1>
                          </div>
                        </div>
                        <form method="post" action="proses_login.php">
                          <div class="row mg-4">
                            <div class="col-12">
                              <div class="form-group">
                                <small style="font-size: 13px;">Username</small>
                                <input type="text" class="form-control border bg-white" name="username" id="username" placeholder="username" style="height: 50px !important">
                              </div>
                            </div>
                          </div>
                          <div class="row mt2">
                            <div class="col-12">
                              <div class="form-group">
                                <small style="font-size: 13px;">Password</small>
                                <input type="password" class="form-control border" name="password" id="password" placeholder="password" style="height: 50px !important">
                              </div>
                            </div>
                          </div>
                          <div class="row mt-4">
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary rounded btn-block">Log In</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>