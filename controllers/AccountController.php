<?php 
	//load file model
	include "models/AccountModel.php";
	class AccountController extends Controller{
		use AccountModel;
		public function register(){
			$this->loadView("AccountRegisterView.php");
		}
		public function registerPost(){
			$this->modelRegister();			
		}
		public function login(){
			$this->loadView("AccountLoginView.php");
		}
		
		public function loginPost(){
			$this->modelLogin();
		}
		
		//dang xuat
		public function logout(){
			unset($_SESSION["nguoidung"]);
			header("location:index.php");
		}
	}	
 ?>