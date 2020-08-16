<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$arr1 = array('zent', 'php', '25');
		// $arr2 = ['zent', 'php'];
		// var_dump($arr1);

		// print_r($arr2);
		$user1 = [];
		$user1['address'] = 'Hà Nội';
		$user1['username'] = 'Thành';
		$user1['email'] = 'tquangds@gmail.com';
		$user1['phone'] = '0342956209';
		$user2 = [];
		$user2['address'] = 'Hà Nội';
		$user2['username'] = 'luân';
		$user2['email'] = 'tquangds@gmail.com';
		$user2['phone'] = '0342956209';
		$user3 = [];
		$user3['address'] = 'Hà Nội';
		$user3['username'] = 'Phong';
		$user3['email'] = 'tquangds@gmail.com';
		$user3['phone'] = '0342956209';
		// print_r($user);

		// echo "Địa chỉ: " . $user['address'] . '<br>';
		// echo "Tên: " . $user['username'] . "<br>";
		// echo "Email: " . $user['email'] . '<br>';
		// echo "Số điện thoại: " . $user['phone'] . '<br>';
		// for ($i=0; $i < count($arr1); $i++) { 
		// 	echo $arr1[$i] . '<br>';
		// }
		// foreach ($arr1 as $key => $value) {
		// 	echo $key . " - " . $value .'<br>';
		// }
		$users = [];
		$users[] = $user1;
		$users[] = $user2;
		$users[] = $user3;
		foreach ($users as $key => $user) {
			echo "---------------" . "<br>";
			echo "address: " . $user['address'] . "<br>";
			echo "username: " . $user['username'] . "<br>";
			echo "email: " . $user['username'] . "<br>";
			echo "phone: " . $user['username'] . "<br>";
		}
		echo "================" . "<br>";

		// Hàm


		// Số cần kiểm tra
		$number = 12;
		  
		// gọi đến hàm kiem_tra_so_chan và truyền biến cần kiểm tra vào
		// vì hàm kiem_tra_so_chan trả về true/false nên ta có thể đặt nó trong câu điều
		// kiện if như thế này
		if (kiem_tra_so_chan($number)) {
		    echo 'Số chẵn';
		}
		else {
		    echo 'Số lẻ';
		}
		  
		// Hàm kiểm tra số chẵn sẽ trả về true nếu $number là số chẵn và ngược lại.
		// biến $number gọi là biến truyền vào hàm, đó chính là biến cần kiểm tra
		function kiem_tra_so_chan($number)
		{
		    if ($number % 2 == 0)
		        return true;
		    else return false;
		}
		// Biến toàn cục và cục bộ

		$sum = 1;
		function tinhTong2($arr) {
			global $sum;
			foreach ($arr as $key => $number) {
				$sum += $number;
			}
			echo "suma = " . $sum ."<br>";
			return $sum;
		}
		tinhTong2([1, 2, 3, 4]);
		echo "sumb = " . $sum;
	?>
</body>
</html>