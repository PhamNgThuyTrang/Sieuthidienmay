<?php
    clasS Data
    {
        public static function ExecuteQuery($sql){
            $connect = mysqli_connect("localhost", "user_sanpham", "TripleTWeb", "smartphone_3t");
            if(!$connect){
                die("Không kết nối: ".mysqli_connect_error());
                exit();
              }
            mysqli_query($connect, "set names 'utf8'");
            $result = mysqli_query($connect, $sql);
            mysqli_close($connect);
            return $result;

        }
    }
?>
        
        
      
        
