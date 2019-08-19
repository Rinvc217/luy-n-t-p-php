<!-- Xóa cookie
Để xóa cookie, hãy sử dụng setcookie()chức năng có ngày hết hạn trong quá khứ: -->
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' đã bị xóa.";
?>

</body>
</html>