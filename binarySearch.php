<?php 
function BinarySearch($array, $x)
{
   $min = 0;
   $max = count($array) - 1;
   while ($min <= $max) {
       $mid = floor(($min + $max) / 2);
       if ($x === $array[$mid]) {
           return $mid;
       } else if ($x < $array[$mid]) {
           $max = $mid - 1;
       } else if ($x > $array[$mid]) {
           $min = $mid + 1;
       }
   }
   return "đối tượng cần tìm không có trong mảng";
}
$array = [1,32,12,21,7,2,13,14,56,40];
sort($array);
echo 'index của số cần tìm là  :'. (BinarySearch($array,21))
?>



