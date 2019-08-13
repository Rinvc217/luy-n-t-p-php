<?php
//Sắp xếp nổi bọt(bubble) là một giải thuật sắp xếp đơn giản.
//  Giải thuật sắp xếp này được tiến hành dựa trên việc so sánh cặp phần tử
//   liền kề nhau và tráo đổi thứ tự nếu chúng không theo thứ tự.
// **Giải thuật này không thích hợp sử dụng với các tập dữ liệu lớn.

//Những giải thuật mà không yêu cầu thêm bất kỳ bộ nhớ phụ và việc sắp xếp được 
//tiến hành trong chính phần bộ nhớ đã khai báo trước đó
// (ví dụ trong một mảng chẳng hạn) thì được gọi là in-place . 
//Ví dụ cho loại giải thuật sắp xếp này là giải thuật sắp xếp nổi bọt (bubble sorting).
//
//Nhưng trong một số giải thuật sắp xếp, chương trình cần thêm lượng bộ nhớ mà có thể lớn hơn
// hoặc bằng với số phần tử đang được sắp xếp. Các giải thuật này được gọi là not-in-place.
//Ví dụ cho loại giải thuật này là sắp xếp trộn (merge sort).
//vd1.
$numbers = array(1,3,2,5,2);
$array_size = count($numbers);

echo "Mảng trước khi sắp xếp : ";
for ( $i = 0; $i < $array_size; $i++ )
   echo $numbers[$i];
echo "n";

for ( $i = 0; $i < $array_size; $i++ )
{
   for ($j = 0; $j < $array_size; $j++ )
   {
      if ($numbers[$i] < $numbers[$j])
      {
         $temp = $numbers[$i];
         $numbers[$i] = $numbers[$j];
         $numbers[$j] = $temp;
      }
   }
}
echo '<br/>';
echo "Mảng sau khi sắp xếp : ";
for( $i = 0; $i < $array_size; $i++ )
   echo $numbers[$i];
echo "n";


echo '<br/>';
echo '<br/>';
//vd2
    function bubbleSort(array $arr)
    {
        $n = sizeof($arr);
        for ($i = 1; $i < $n; $i++) {
            for ($j = $n - 1; $j >= $i; $j--) {
                if($arr[$j-1] > $arr[$j]) {
                    $tmp = $arr[$j - 1];
                    $arr[$j - 1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }

        return $arr;
    }

    // Example:
    echo 'mảng trước khi sắp xếp ';
    $arr = array(255,1,22,3,45,5);
    print_r($arr);
    echo '<br/>';
    echo 'mảng sau khi sắp xếp ';
    $result = bubbleSort($arr);
    print_r($result);
    echo "<pre>";

    echo '<br/>';
//bubble với Swap
    $sortarr = array(3,5,15,3,2,6,7,5);
    echo "<pre>";
    // Array to be sorted
    print_r($sortarr);
    // Sorted Array
    print_r(bubble_sort($sortarr));
    echo "<pre>";

    function bubble_sort($sortarr){
        // Bubble sorting
        $array_count = count($sortarr);
        for($x = 0; $x < $array_count; $x++){
            for($a = 0 ;  $a < $array_count - 1 ; $a++){
                if($a < $array_count ){
                    if($sortarr[$a] > $sortarr[$a + 1] ){
                            swap($sortarr, $a, $a+1);
                    }
                }
            }
        }
        return $sortarr;    
    }

    function swap(&$arr, $a, $b) {
        $tmp = $arr[$a];
        $arr[$a] = $arr[$b];
        $arr[$b] = $tmp;
    }

?>