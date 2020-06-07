<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Trung tâm Smartphone 3T</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="Home_Page.php" target="_blank">
        <strong class="blue-text">3T</strong>
      </a>
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link waves-effect" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <!-- chèn giới thiệu 3T -->
          <li class="nav-item">
            <a class="nav-link waves-effect" href="/" target="_blank">About 3T</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <span class="badge red z-depth-1 mr-1"> 1 </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
          </li>    
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Phương thức thanh toán</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--Tên-->
                  <div class="md-form ">
                    <input type="text" id="Tên" class="form-control">
                    <label for="Tên" class="">Tên</label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--Họ-->
                  <div class="md-form">
                    <input type="text" id="Họ" class="form-control">
                    <label for="Họ" class="">Họ</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Username-->
              <div class="md-form input-group pl-0 mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
              </div>

              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                <label for="email" class="">Email </label>
              </div>

              <!--Địa chỉ-->
              <div class="md-form mb-5">
                <input type="text" id="Địa chỉ" class="form-control" placeholder="280 An Dương Vương, Phường 4, Quận 5, Hồ Chí Minh">
                <label for="Địa chỉ" class="">Địa chỉ</label>
              </div>

       

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <label for="Tỉnh/Thành phố">Tỉnh/Thành phố</label>
                  <select class="custom-select d-block w-100" id="Tỉnh/Thành phốa" required>
                    <option value="">Choose...</option>
                    <option>Thành phố Hồ Chí Minh</option>
                    <option>Hà Nội</option>
                    <option>Long An</option>
                    <option>Đồng Nai</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid Tỉnh/Thành phố.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="Quận/Huyện">Quận/Huyện</label>
                  <select class="custom-select d-block w-100" id="Quận/Huyện" required>
                    <option value="">Choose...</option>
                    <option>Quận 1</option>
                    <option>Quận 2</option>
                    <option>Quận 3</option>
                    <option>Quận 4</option>
                    <option>Quận 5</option>
                    <option>Quận 6</option>
                    <option>Quận 7</option>
                    <option>Quận 8</option>
                    <option>Quận 9</option>
                    <option>Quận 10</option>
                    <option>Quận 11</option>
                    <option>Quận 12</option>
                    <option>Quận Bình Thạnh</option>
                    <option>Quận Bình Tân</option>
                    <option>Quận Tân Bình</option>
                    <option>Quận Tân Phú</option>
                    <option>Quận Phú Nhuận</option>
                    <option>Quận Gò Vấp</option>
                    <option>Huyện Củ Chi</option>
                    <option>Huyện Hóc Môn</option>
                    <option>Huyện Cần Giờ</option>
                    <option>Huyện Bình Chánh</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid Quận/Huyện.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Địa chỉ giao hàng giống như địa chỉ thanh toán của tôi</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Lưu thông tin này cho lần sau</label>
              </div>

              <hr>

              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Tên chủ card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Tên đầy đủ như được hiển thị trên card</small>
                  <div class="invalid-feedback">
                    Tên trên thẻ là bắt buộc
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Số thẻ tín dụng</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Số thẻ tín dụng là bắt buộc
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Hết hạn</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Ngày hết hạn yêu cầu
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Yêu cầu mã bảo mật
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Tiếp tục thanh toán</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Giỏ hàng của bạn</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Smart Tivi SHARP 40 inch LC-40SA5500X (Loại O2A)</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">3.990.000Đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Máy Giặt SAMSUNG 9.0 KG WW90J54E0BW/SV (Loại O2A)</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">7.790.000Đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Tủ Lạnh Sanaky 140 Lít VH-148HPA (Loại O2B)</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">3.490.000Đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Mã khuyến mại</h6>
                <small>BIGSALE</small>
              </div>
              <span class="text-success">-1.000.000Đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Tổng</span>
              <strong>1.4270.000Đ</strong>
            </li>
          </ul>
          <!-- Cart -->

          <!-- Mã khuyến mại -->
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Mã khuyến mại" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Nhập mã</button>
              </div>
            </div>
          </form>
          <!-- Mã khuyến mại -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Contact-->
    <div class="pt-4" style="text-align: left; margin: 10px 0 10px 10px;">
        Trung tâm Smartphone 3T </br>
        197 Cao Đạt, Phường 1, Quận 5, TP.HCM</br>
        Hotline: 0909 388 266</br>
        Email: TripleTWeb@gmail</br>
    </div>
    <!--/Contact-->
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a> TripleTWeb</a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>
</html>
