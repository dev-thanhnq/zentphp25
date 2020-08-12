<form> 
	ma sinh vien <input type="text" name="svnumber">
	<input type="reset" value="Nhập lại"> <br>
	<input type="submit" value="Đăng kí"> 
</form>
<?php
if (isset($_POST["svnumber"]) && isset($_POST["name"])) {
		echo "hello";
	}
	?>