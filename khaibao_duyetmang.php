<?php
$arr = array(4, 2, 15, 21, 3, 5, 6, 14, 7, 15, 3);
$array = [1,32,12,21,7,2,13,14,56,40];
$length = count($array);
echo 'mảng ban đầu :' ;
for($i = 0; $i < $length; $i++) {
    echo $array[$i]. ' , '    ;
}
//thêm pt vào mảng
echo '<br/>';
echo 'sau khi them la :';
array_push($array, "them cuoi",);
array_unshift($array,"42", "them dau");
 for($i = 0; $i < count($array); $i++) {
    echo $array[$i]. ' , '    ;
} 
echo '<br/>';
//xóa pt khỏi mảng
$arr = array(4, 2, 15, 21, 3, 5, 6, 14, 7, 15, 3);
$length = count($arr);
echo 'mảng ban đầu :' ;
for($i = 0; $i < $length; $i++) {
    echo ' , '.$arr[$i];
}
echo '<br/>';
echo 'mang sau khi xoa dau va xoa cuoi la :' ;
array_shift($arr); //xóa đầu
array_pop($arr);// xóa cuối
for($i = 0; $i < count($arr); $i++) {
    echo ' , '. $arr[$i];
}
echo '<br/>';
//tìm giá trị trong mảng.
echo 'giá trị cần tìm có index là :';
$search = array('PHP','JAVA','CSS','HTML');
echo array_search('CSS',$search);
echo '<br/>';

//loại bỏ giá trị trùng trong mảng  
$hocweb = array("HTML", "CSS", "JS", "CSS", "PHP");
echo 'mảng ban đầu là: ';
for($i = 0; $i < count($hocweb); $i++){
echo ' , '. $hocweb[$i];
}
echo '<br/>';
echo 'sau khi loại bỏ giá trị trùng là :'
;print_r(array_unique($hocweb));
echo '<br/>';
//  sắp xếp mảng theo chiều tăng dần
$number = array(2,3,4,6,8,1,9,5,7);
sort($number);
echo 'mảng sau khi xắp xếp :';
for($i = 0; $i < count($number); $i++){
    echo $number[$i];
}
// sắp xếp mảng theo chiều giảm dần
$number1 = array(1,2,3,4,5,6,7,89);
ksort($number1);
echo ''

echo '<br/>'.'<br/>';//duyệt mảng 1 chiều
echo 'check màu bằng duyệt mảng 1 chiều: ';
$colorArray = array('green', 'blue', 'red');
foreach($colorArray as $key=>$color){
  echo $color.' có index là '.$key .'<br/>';
}
echo '<br/>'.'<br/>';
// duyệt mảng 2 chiều
$customers = array(
    array(
        'name' => 'nguyễn văn A',
        'addr' => 'Huế',
        'phone' => '123456789'
    ),
    array(
        'name' => 'nguyễn văn B',
        'addr' => '.Huế',
        'phone' => '123456789'
    ),
    array(
        'name' => 'nguyễn văn C',
        'addr' => 'Hà Nội',
        'phone' => '123456789'
    )
);


echo '<ul>';
foreach ($customers as $key => $customer)
{
    echo '<li>';
    echo 'Số TT: '. ++$key . '<br/>';
    echo 'Name: ' . $customer['name'] . '<br/>';
    echo 'addr: ' . $customer['addr'] . '<br/>';
    echo 'phone: ' . $customer['phone'] . '<br/>';
    
    echo '</li>';
}
echo '</ul>';



?>