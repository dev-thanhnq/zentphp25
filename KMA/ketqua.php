<?php 
$user = "thanh";
$pass = "123";
if (($_POST["username"]) == NULL or ($_POST["password"]) == NULL) {
	echo "Tài khoản và mật khẩu không được bỏ trống!";
} else {
	if ($_POST["username"] == $user && $_POST["password"] == $pass) {
		echo "Đăng nhập thành công!";
	} else {
		echo "Tài khoản hoặc mật khẩu không chính xác!";
	}
}
?>