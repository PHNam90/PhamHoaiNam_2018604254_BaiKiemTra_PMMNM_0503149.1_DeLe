<?php 
	include "models/KtraDkiModel.php";
	class KtraDkiController extends Controller{
		use KtraDkiModel;
		public function detail(){
			$maLop = isset($_GET["id"]) ? $_GET["id"] : 0;
			$data = $this->getTTLop($maLop);
			$dssv = $this->getDsSV($maLop);
			$this->loadView("ChiTietDkiView.php",array('data'=>$data,'dssv'=>$dssv));
		}
		public function index(){
			$data = $this->getDsDki();
			$this->loadView("KtraDkiView.php",array('data'=>$data));
		}
		
	}
 ?>