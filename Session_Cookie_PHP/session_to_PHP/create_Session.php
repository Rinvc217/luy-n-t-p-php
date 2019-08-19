<!-- Các biến session được đặt với biến toàn cục PHP: $ _SESSION.

Bây giờ, ta tạo một trang mới gọi là "demo_session1.php". 
Trong trang này, chúng ta bắt đầu một session PHP mới và đặt một số biến phiên: -->
<?php
// bắt đầu session.
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
//Note1. Đặt biến session.
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Các biến session được đặt."."<br/>";
//Note2.Hiển thị các session được đặt trên trang trước (Note1).
echo "Màu sắc yêu thích là : " . $_SESSION["favcolor"] . ".<br>";
echo "Động vật yêu thích là :" . $_SESSION["favanimal"] . "."."<br/>";
// .hiển thị tất cả các giá trị biến session cho session người dùng 
echo "<br/>"."hiển thị tất cả các giá trị biến session cho session người dùng "."<br/>";
print_r($_SESSION);
echo "<br/>"."<br/>";
echo "biến $ _ sesion có giá trị màu sắc cũ là favcolor = green ";
// để thay đổi một biến session, chỉ cần ghi đè lên nó.
echo "<br/>" . " sau khi ghì đè lên nó và thay đổi " ."<br/>";
 $_SESSION["favcolor"] = "yellow";
 print_r($_SESSION);
 unset($_SESSION["favcolor"]);
 echo "<br/>"."sau khi xóa đi 1 biến ([favcolor])"."<br/>" ."ta nhận lại biến Session mới là:" ;
 print_r($_SESSION);

?>
</body>
</html>


<!-- Biến session dùng để lưu trữ thông tin người dùng.
Biến session lưu giữ thông tin về một người dùng 
và có sẵn cho tất cả các trang trong một ứng dụng(như passworld, làm giỏ hàng...) 
Một trong các ứng dụng điển hình là việc quản lý Đăng nhập, Đăng xuất .
lưu ý: Nếu ta cần một bộ lưu trữ vĩnh viễn, ta nên lưu trữ dữ liệu trong cơ sở dữ liệu .

Một sesion được bắt đầu với session_start().
Để xóa 1 biến session ta dùng unset($_SESSION["value"]).
Để xóa tất cả các biến session ta dùng session_unset().
Để hủy biến session ta dùng session_destroy()
!-->

