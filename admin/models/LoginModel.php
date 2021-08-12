<?php 
	trait LoginModel{
		public function modelLogin(){
			$Email = $_POST["email"];
			$MatKhau = $_POST["password"];	
			$MatKhau = md5($MatKhau);
			$conn = Connection::getInstance();
			//chuan bi cau truy van			
			$query = $conn->query("select Email,MatKhau from nguoidung where Email='$Email' and Admin = 1 and MatKhau ='$MatKhau' ");
			if($query->rowCount() > 0){
				$record = $query->fetch();
				if($record->MatKhau == $MatKhau){
					$_SESSION["email"] = $Email;
					header("location:index.php");
				}
			}else
				header("location:index.php?controller=login");
		}
	}
 ?>