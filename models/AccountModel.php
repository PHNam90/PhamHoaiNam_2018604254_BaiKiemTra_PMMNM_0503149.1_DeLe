<?php 
	trait AccountModel{
		public function modelRegister(){
			$Ten = $_POST["Ten"];
			$Email = $_POST["Email"];
			$DiaChi = $_POST["DiaChi"];
			$SDT = $_POST["SDT"];
			$MatKhau = $_POST["MatKhau"];
			$conn = Connection::getInstance();
			$check = $conn->prepare("select MaNguoiDung from nguoidung where Email=:_Email");
			$check->execute(array("_Email"=>$Email));
			if($check->rowCount() == 0){
				$MatKhau = md5($MatKhau);
				$query = $conn->prepare("insert into nguoidung set Ten=:_Ten,Email=:_Email,DiaChi=:_DiaChi,SDT=:_SDT,MatKhau=:_MatKhau");
				$query->execute(array("_Ten"=>$Ten,"_Email"=>$Email,"_DiaChi"=>$DiaChi,"_SDT"=>$SDT,"_MatKhau"=>$MatKhau));
				header("location:index.php?controller=account&action=login&notify=success");
			}else
				header("location:index.php?controller=account&action=register&notify=exists");
		}
		public function modelLogin(){
			$Email = $_POST["Email"];
			$MatKhau = $_POST["MatKhau"];
			$MatKhau = md5($MatKhau);
			$conn = Connection::getInstance();
			$query = $conn->prepare("select Email,MaNguoiDung,Ten from nguoidung where Email=:_Email and MatKhau=:_MatKhau and Admin=0");
			$query->execute(array("_Email"=>$Email,"_MatKhau"=>$MatKhau));
			if($query->rowCount() > 0){
				//---
				$record = $query->fetch();
				 $_SESSION['nguoidung'] = array(
		            'Email' => $record->Email,
		            'MaNguoiDung' => $record->MaNguoiDung,
		            'Ten' => $record->Ten
		        );
				header("location:index.php");
			}else
				header("location:index.php?controller=account&action=login");
		}
	}
 ?>