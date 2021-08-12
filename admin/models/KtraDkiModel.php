<?php 
	trait KtraDkiModel{
		public function getDsDki(){
			$conn = Connection::getInstance();
			$data = $conn->query("select DISTINCT ct.MaLop, mh.MaMH, mh.TenMH from chitietlop ct inner join lop l on ct.MaLop = l.MaLop inner join monhoc mh on mh.MaMH = l.MaMH");
			return $data->fetchAll();
		}
		public function getTTLop($maLop){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from lop l inner join monhoc mh on l.MaMH = mh.MaMH where MaLop=:_MaLop");
				$query->execute(array("_MaLop"=>$maLop));
			return $query->fetch();
		}
		public function getDsSV($maLop){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select DISTINCT nd.MaNguoiDung, Ten from chitietlop ct inner join nguoidung nd on ct.MaNguoiDung = nd.MaNguoiDung where MaLop=:_MaLop");
				$query->execute(array("_MaLop"=>$maLop));
			return $query->fetchAll();
		}
	}
 ?>