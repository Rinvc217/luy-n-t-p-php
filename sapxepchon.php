<?php
//Giải thuật sắp xếp chọn (Selection Sort) là một giải thuật dựa trên việc so sánh ,
//trong đó danh sách được chia thành hai phần,
// phần được sắp xếp (sorted list) ở bên trái và phần chưa được sắp xếp (unsorted list) ở bên phải.
//Ban đầu, phần được sắp xếp là trống và phần chưa được sắp xếp là toàn bộ danh sách ban đầu.
function selection_sort($data)  {  
for($i=0; $i < count($data)-1; $i++) {  
    $min = $i;  
    for($j=$i+1; $j < count($data); $j++) {  
        if ($data[$j] < $data[$min]) {  
            $min = $j;  
        }  
    }  
    $data = swap_positions($data, $i, $min);  
}  
return $data;  
}  

function swap_positions($data1, $left, $right) {  
    $backupdata = $data1[$right];  
    $data1[$right] = $data1[$left];  
    $data1[$left] = $backupdata;  
    return $data1;  
}  
$my_array = array(3, 0, 2, 5, -1, 4, 1);  
echo "Mảng ban đầu: <br>";  
echo implode(' , ',$my_array);  
echo "<br>Mảng đã qua sắp xếp:<br>";  
echo implode(', ',selection_sort($my_array));

echo '<br/>';
echo '<br/>';
$my_array1 = array(1.2,1.21,2,3,-3,-4);  
echo "Mảng ban đầu: <br>";  
echo implode(' , ',$my_array1);  
echo "<br>Mảng đã qua sắp xếp:<br>";  
echo implode(', ',selection_sort($my_array1));

?>