<center><h1>Đăng kí</h1></center>
<form action="" method="post" style="margin: 0 auto; width: 280px">
	<table cellpadding="3px" cellspacing="3px">
		<tr>
			<td>Mã SV</td>
			<td><input type="text" name="svnumber"></td>
		</tr>
		<tr>
			<td>Họ tên</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Ngày sinh</td>
			<td><input type="text" name="birth"></td>
		</tr>
		<tr>
			<td>Giới tính</td>
			<td>
				<input type="radio" name="sex">Nam
				<input type="radio" name="sex">Nữ
			</td>
		</tr>
		<tr>
			<td>Nơi sinh</td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>Lớp</td>
			<td><input type="text" name="class"></td>
		</tr>
	</table>
	<center>
		<input type="reset" value="Nhập lại">
		<input type="submit" value="Đăng kí">
	</center>
</form>
<?php
	if (isset($_POST["svnumber"]) && isset($_POST["name"])) {
		echo "Mã sinh viên: " . $_POST["svnumber"] . '<br>' . "Họ tên: " . $_POST["name"];
	}
?>