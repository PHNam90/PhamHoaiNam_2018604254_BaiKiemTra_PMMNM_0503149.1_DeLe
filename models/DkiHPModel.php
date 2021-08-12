<?php 
	trait DkiHPModel{
		public function getdsmonhoc(){
			$conn = Connection::getInstance();
			$data = $conn->query("select * from lop l inner join monhoc mh on l.MaMH=mh.MaMH");
			return $data->fetchAll();
		}
		public function dangkyPost($maLop){
			$MaNguoiDung = $_SESSION['nguoidung']['MaNguoiDung'];
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into chitietlop set MaNguoiDung=:var_MaNguoiDung,MaLop=:var_MaLop");
			$query->execute(array("var_MaNguoiDung"=>$MaNguoiDung,"var_MaLop"=>$maLop));
			header("location:index.php?controller=DkiHP&action=thanhcong");
		}
	}
 ?>