<?php
  function linersearch($arr, $x) {
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] == $x)
         return $i;
    }
    return "đối tượng cần tìm không có trong mảng";
}
$arr = array(4, 2, 15, 21, 3, 5, 6, 14, 7, 15, 3);
echo 'index của số cần tìm là '.linersearch($arr, 14) ; 
?>