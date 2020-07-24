<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trung tâm smartphone_3t</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">  
  
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="grey lighten-3">
<main>
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Thêm tài khoản</h1>
              </div>
              <form class="user" action="AddUser.php" method="post" enctype="multipart/form-data">
              
           <div class="form-group">
               <input type="text" class="form-control form-control-user" name="Name" id="Name" placeholder="Tên tài khoản"  required>
           </div>
           <div class="form-group">
               <input type="text" class="form-control form-control-user" id="Password" name="Password" placeholder="Mật khẩu"  required>
           </div>
           <div class="form-group">
               <input type="email" class="form-control form-control-user" id="Email" name="Email" placeholder="youremail@gmail.com"  required>
           </div>

           <div class="form-group">
               <input id="Level" name="Level" type="radio" value="Admin" checked="checked" />Admin
               <input id="Level" name="Level" type="radio" value="Member" />Member
           </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <button class="btn btn-primary form-control" type="submit">
                          Thêm
                      </button>
                  </div>
                  <div class="col-sm-6">
                    <button class="btn btn-danger form-control" type="reset">
                        Nhập lại
                    </button>
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
  </main>
  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Contact-->
    <div class="pt-4" style="text-align: left; margin: 10px 0 10px 10px;">
        Trung tâm Smartphone 3T <br>
        197 Cao Đạt, Phường 1, Quận 5, TP.HCM<br>
        Hotline: 0909 388 266<br>
        Email: TripleTWeb@gmail.com<br>
    </div>
    <!--/Contact-->
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      <a> TripleTWeb</a>
    </div>
    <!--/.Copyright-->

  </footer>
</body>

</html>
