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
        <link href="../css/menu.css" rel="stylesheet">
        <link href="../css/Product_style.css" rel="stylesheet">
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

        </style>
    </head>
    <body>
        <div class="box_content">
            <aside class="left_content">
                <h2>Đặc điểm nổi bật của iPhone 11 Pro Max 64GB</h2>
                <div id="carousel-example-1z" style="height: auto; width: 100%;" class="carousel slide carousel-fade pt-4" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                    <?php
                    include_once("Data.php");
                    $sql_product = "SELECT * FROM `slide_sanpham` WHERE ID_sanpham = '10'";
                    $img_product = Data::ExecuteQuery($sql_product);
                    $count_img = 0 ;
                    while ($row = mysqli_fetch_array($img_product)){
                    $chuoi_img = <<<EOD
                    <li data-target="#carousel-example-1z" data-slide-to='$count_img' class="active"></li>
EOD;
                    echo $chuoi_img;
                    $count_img++;
                    }
                    ?>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                    <?php
                    echo $GLOBALS;
                    $count_img = 1;
                    $sql_product = "SELECT * FROM `slide_sanpham` WHERE ID_sanpham = '{$GLOBALS}'";
                    $img_product = Data::ExecuteQuery($sql_product);
                    while ($row = mysqli_fetch_array($img_product)){
                        if($count_img == 1){
                        $slide_event = <<<EOD
                        <div class="carousel-item active ">
                            <img class="view" style="width: inherit; height: inherit;"  src="{$row['Hinh']}">
                        </div>
EOD;
                        echo $slide_event;
                        $count_img++;
                        }
                        if($count_img != 1){
                        $slide_event = <<<EOD
                        <div class="carousel-item">
                        <img class="view" style="width: inherit; height: inherit;"  src="{$row['Hinh']}">
                        </div>
EOD;
                        echo $slide_event;
                        $count_img++;
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
            </aside>

            <aside class="right_content" style="border-left: 1px solid #e4e4e4;">
                <div class="tableparameter">     
                    <h2>Thông số kỹ thuật</h2>
                    <ul class="parameter ">
                        <li class="p200533 g6459_79_77">
                            <span>Màn hình:</span>
                            <div>
                                
                            </div>
                        </li>
                        
                        <li class="p200533 g72">
                            <span>Hệ điều hành:</span>
                            <div>
                            </div>
                        </li>
                        
                        <li class="p200533 g27">
                            <span>Camera sau:</span>
                            <div>3 camera 12 MP</div>
                        </li>
                        
                        <li class="p200533 g29">
                            <span>Camera trước:</span>
                            <div>12 MP</div>
                        </li>
                        
                        <li class="p200533 g6059">
                            <span>CPU:</span>
                            <div>
                                <a>Apple A13 Bionic 6 nhân</a>
                            </div>
                        </li>
                        
                        <li class="p200533 g50">
                            <span>RAM:</span>
                            <div>4 GB</div>
                        </li>
                        
                        <li class="p200533 g49">
                            <span>Bộ nhớ trong:</span>
                            <div>64 GB</div>
                        </li>
                        
                        <li class="g6339_6463">
                            <span>Thẻ SIM:</span>
                            <div class="isim">
                                <a>1 eSIM &amp; 1 Nano SIM</a>, 
                                <a>Hỗ trợ 4G</a>
                            </div>
                            <div class="ibsim">
                                <b class="h">HOT</b>
                                <a>SIM Vina Bùm 120 (2GB/ngày)</a>
                            </div>
                        </li>
                        
                        <li class="p200533 g84_10882">
                            <span>Dung lượng pin:</span>
                            <div>3969 mAh, có sạc nhanh</div>
                        </li>
                    </ul>
                        <button type="button" class="viewparameterfull" onclick="getFullSpec(200533,)">Thêm vào giỏ hàng</button>
                    <div class="closebtn none"><i class="icondetail-closepara"></i></div>
                </div>
            </aside>
        </div>
        </body>
</html>
