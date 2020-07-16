<?php
      $sql_arrs_list = "SELECT * FROM `thongtin_sanpham` WHERE `LoaiSP` = 1";
      $arrs_list = Data::ExecuteQuery($sql_arrs_list);
      ?>
      <ul style="
      margin: auto;
      padding: 0;
      list-style: none;
      display: flex;
      flex-wrap: wrap;">
      <?php
        include_once('Data.php');
        $page = 1;//khởi tạo trang ban đầu
        $limit = 15;//số bản ghi trên 1 trang (20 bản ghi trên 1 trang)
        
        $total_record = mysqli_num_rows($arrs_list);//tính tổng số bản ghi có trong bảng thongtin_sanpham
        
        $total_page=ceil($total_record/$limit);//tính tổng số trang sẽ chia
    
        //xem trang có vượt giới hạn không:
        if(isset($_GET["page"]))
          $page=$_GET["page"];//nếu biến $_GET["page"] tồn tại thì trang hiện tại là trang $_GET["page"]
        if($page<1) 
          $page=1; //nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
        if($page>$total_page) 
          $page=$total_page;//nếu trang hiện tại vượt quá số trang được chia thì sẽ bằng trang cuối cùng
    
        //tính start (vị trí bản ghi sẽ bắt đầu lấy):
        $start=($page-1)*$limit;
        $sql_arrs = "SELECT * FROM `thongtin_sanpham` WHERE `LoaiSP` = 1 LIMIT $start,$limit";
        //lấy ra danh sách và gán vào biến $arrs:
        $arrs = Data::ExecuteQuery($sql_arrs);
        foreach($arrs as $arr) {
          $Giaban = number_format($arr['GiaBan']);
          $chuoi = <<<EOD
              <li class = "list_product">

                <a onclick = "thongtinchitiet()">
                  <img src="{$arr['Hinh']}">

                  <h3>{$arr['TenSP']}</h3>
EOD;
          echo $chuoi;

          if(isset($arr['GiaNY'])){
          $Gianiemyet = number_format($arr['GiaNY']);
          $chuoi = <<<EOD
          <div style="height: 15px; color: black; text-align: left; margin: 0 5px; font-size: 12px; text-decoration: line-through;">{$Gianiemyet}đ</div>
EOD;
          echo $chuoi;
          }
          if(!isset($arr['GiaNY'])){
            $chuoi = <<<EOD
            <div style="height: 15px; color: black; text-align: left; margin: 0 5px; font-size: 12px; text-decoration: line-through;"></div>
EOD;
            echo $chuoi;
            }
          
          $chuoi = <<<EOD
                  <div style="color: red; text-align: left; margin: 0 5px; font-weight: bold; margin-right: 5px;">{$Giaban}đ</div>
                  
                  <footer>
                  <div style="width:fit-content; margin: 0 5px; word-wrap: break-word; color: black; text-align: left; font-size: 12px; margin-right: 5px;">{$arr['KhuyenMai']}</div>
                  </footer>
                </a>
              </li>
EOD;
          echo $chuoi;
        }
        
      ?>
      </ul>

      <!-- 'start hiện nút phân trang' -->
      <nav class="d-flex justify-content-center wow fadeIn" style="margin-top: 100px">
				<ul class="pagination pg-blue">
					<?php for($i=1;$i<=$total_page;$i++){ ?>
				    <li <?php if($page == $i) echo "class='active'"; ?> >
              <a class="page-link" href="phantrang.php?page=<?php echo $i; ?>"><?php echo $i; ?>
              </a>
            </li>
				    <?php } ?>
				</ul>
