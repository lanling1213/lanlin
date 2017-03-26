<?php
namespace Home\Controller;
use Think\Controller;
class ContentController extends Controller {
    public function content(){
    	//echo $_GET['platesID'];
		$this->assign('platesID',$_GET['platesID']);
		$this->assign('themeID',$_GET['themeID']);
		// $this->assign('theme',$_GET['themeID']);
		$this->assign('sessinfo',$_SESSION['user_name']);
		$this->display();
    }
/*    public function register(){
    	$this->display();
    }*/
}