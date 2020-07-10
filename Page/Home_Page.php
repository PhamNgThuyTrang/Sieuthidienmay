<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Trung tâm Smartphone 3T</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/menu.css" rel="stylesheet">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
  
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }
    body {  
      padding-top:0px;
    }
    h1 {
      color:#F90
    }
    p {
      color:#0C0
    }
  </style>
</head>

<body>

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
  <main>
    <?php
      include_once("Data.php");
    ?>
    <div class="container">
      <!--Carousel Wrapper-->
      <div id="carousel-example-1z" 
      style="height: auto; width: 100%; margin-top: 40px;"  
      class="carousel slide carousel-fade pt-4" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
        <?php
          $sql_events = "SELECT *FROM slide_events";
          $events = Data::ExecuteQuery($sql_events);
          $count_slide = 0 ;
          while ($row = mysqli_fetch_array($events)){
          $chuoi_event = <<<EOD
           <li data-target="#carousel-example-1z" data-slide-to='$count_slide' class="active"></li>
EOD;
          echo $chuoi_event;
          $count_slide++;
          }
        ?>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
        <?php
          $sql_slides = "SELECT *FROM slide_events";
          $chuoi_slides = Data::ExecuteQuery($sql_slides);
          while ($row = mysqli_fetch_array($chuoi_slides)){
            if($row['ID'] == 1){
              $slide_event = <<<EOD
              <div class="carousel-item active ">
                <img class="view" style="width: inherit; height: inherit;"  src="{$row['Hinh']}">
              </div>
EOD;
              echo $slide_event;
            }
            if($row['ID'] != 1){
            $slide_event = <<<EOD
            <div class="carousel-item ">
              <img class="view" style="width: inherit; height: inherit;"  src="{$row['Hinh']}">
            </div>
EOD;
            echo $slide_event;
            }
          }
        ?>

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

      </div>
      <!--/.Carousel Wrapper-->

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Danh mục sản phẩm</span>

        <!-- Collapse button -->
        
        <!-- Collapsible content -->
        <div class="menu" >

          <!-- Links -->
          <ul>
            <li>
              <p href="Home_Page.php">All</p>
            </li>

            <li>
              <p>Điện thoại</p>
              <ul>
                <li>
                  <a href="iPhone_Page.php">Iphone</a>
                </li>
                <li>
                  <a href="Samsung_Page.php">Samsung</a>
                </li>
                <li>
                  <a href="Sony_Page.php">Sony</a>
                </li>
                <li>
                  <a href="OPPO_Page.php">OPPO</a>
                </li>
                <li>
                  <a href="Huawei_Page.php">Huawei</a>
                </li>
                <li>
                  <a href="Vivo_Page.php">Vivo</a>
                </li>
                <li>
                  <a href="Xiaomi_Page.php">Xiaomi</a>
                </li>
                <li>
                  <a href="Vsmart_Page.php">Vsmart</a>
                </li>
              </ul>
            </li>

            <li>
              <p>Phụ kiện</p>
              <ul>
                <li>
                  <a href="#">Cáp sạc</a>
                </li>
                <li>
                  <a href="#">Tai nghe</a>
                </li>
                <li>
                  <a href="#">Ốp lưng</a>
                </li>
                <li>
                  <a href="#">Sạc dự phòng</a>
                </li>
              </ul>
            </li>

            <li>
              <p>Khuyến mãi</p>
            </li>

            <li>
              <p>Máy cũ</p>
            </li>
          </ul>
          <!-- Links -->
        </div>
        <!-- Collapsible content -->
        <form  class="form-inline float-right">
          <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
        </form>
      </nav>
      <!--/.Navbar-->
      <!--Section: Products v.3-->
      <?php
      $sql_thongtin = "SELECT *FROM thongtin_sanpham";
      $ketqua = Data::ExecuteQuery($sql_thongtin);
      ?>
      <ul style="
      margin: auto;
      padding: 0;
      list-style: none;
      display: flex;
      flex-wrap: wrap;">
      <?php
        while ($row = mysqli_fetch_array($ketqua)) {
          $Giaban = number_format($row['Giá bán']);
          $chuoi = <<<EOD
              <li class = "list_product">

                <a onclick = "thongtinchitiet()">
                  <img src="{$row['Hình ảnh (url)']}">

                  <h3>{$row['Tên sản phẩm']}</h3>
EOD;
          echo $chuoi;

          if(isset($row['Giá niêm yết'])){
          $Gianiemyet = number_format($row['Giá niêm yết']);
          $chuoi = <<<EOD
          <div style="height: 15px; color: black; text-align: left; margin: 0 5px; font-size: 12px; text-decoration: line-through;">{$Gianiemyet}đ</div>
EOD;
          echo $chuoi;
          }
          if(!isset($row['Giá niêm yết'])){
            $chuoi = <<<EOD
            <div style="height: 15px; color: black; text-align: left; margin: 0 5px; font-size: 12px; text-decoration: line-through;"></div>
EOD;
            echo $chuoi;
            }
          
          $chuoi = <<<EOD
                  <div style="color: red; text-align: left; margin: 0 5px; font-weight: bold; margin-right: 5px;">{$Giaban}đ</div>
                  
                  <footer>
                  <div style="width:fit-content; margin: 0 5px; word-wrap: break-word; color: black; text-align: left; font-size: 12px; margin-right: 5px;">{$row['Khuyến mãi']}</div>
                  </footer>
                </a>
              </li>
EOD;
          echo $chuoi;
        }
        
      ?>
      </ul>
      
        
      <!--Section: Products v.3-->

      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn" style="margin-top: 100px">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">5</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Pagination-->

    </div>
  </main>
  <!--Main layout-->

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
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script>
  function thongtinchitiet() {
    <?php
    $GLOBALS = $row['ID'];
    ?>
    <meta http-equiv="Product_Page.php" content="ie=edge">
  }
  </script>
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
