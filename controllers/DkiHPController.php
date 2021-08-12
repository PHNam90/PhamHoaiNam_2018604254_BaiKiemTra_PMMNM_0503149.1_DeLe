<?php 
	//load file model
	include "models/DkiHPModel.php";
	class DkiHPController extends Controller{
		use DkiHPModel;
		public function index(){
			$data =$this->getdsmonhoc();
			$this->loadView("DkiHPView.php",['data'=>$data]);
		}
		public function thanhcong(){
			$this->loadView("DkiThanhCongView.php");
		}
		public function checkout(){
			//kiem tra neu user chua dang nhap thi di chuyen den trang dang nhap
			if(isset($_SESSION["nguoidung"]) == false)
				header("location:index.php?controller=account&action=login");
			else{
				header("location:index.php?controller=DkiHP");
			}
		}
		public function dangky(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->dangkyPost($id);
		}
	}	
 ?>