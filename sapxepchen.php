<?php
//Sắp xếp chèn là chèn thêm một phần tử vào 1 danh sách con đã qua sắp xếp.
// Phần tử được chèn vào vị trí thích hợp
 // sao cho vẫn đảm bảo rằng danh sách con đó vẫn sắp theo thứ tự.
function insertion_Sort($my_array)  {  
	for($i=0; $i < count($my_array); $i++){   
		$val = $my_array[$i];  
		$j = $i-1; 
		// kiem tra xem so lien truoc co lon hon gia tri duoc chen khong
		//và xác định cho phần tử được chèn.
		while($j >= 0 && $my_array[$j] > $val){  
			$my_array[$j+1] = $my_array[$j];  
			$j--;  
		}  
			$my_array[$j+1] = $val;  
}  
	return $my_array;  
	}  	
	$test_array = array(3, 0, 2, 5, -1, 4, 1);  
	echo "Mảng ban đầu:<br>";  
	echo implode(', ',$test_array );  
	echo "<br>Mảng đã qua sắp xếp:<br>";  
    print_r(insertion_Sort($test_array));

    echo '<br/>';
    echo '<br/>';
    $test = array(5,10,4,3,2,6,9);  
	echo "Mảng ban đầu:<br>";  
	echo implode(' - ',$test);  
	echo "<br>Mảng đã qua sắp xếp:<br>";  
	print_r(insertion_Sort($test));  
?>