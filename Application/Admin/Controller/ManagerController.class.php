<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller {
    public function index(){
		$this->display();
    }
    public function managerUser(){
    	$this->display();
    }
    public function managerMod(){
    	$this->display();
    }
    public function managerPlates(){
    	$this->display();
    }
    public function addPlates(){
        $this->display();
    }
    public function updatePlates(){
        $this->assign('platesID',$_GET['platesID']);
        $this->display();
    }
    public function managerTheme(){
        // echo $_GET['platesID'];
        $this->assign('platesID',$_GET['platesID']);
    	$this->display();
    }
    public function updateTheme(){
        $this->assign('platesID',$_GET['platesID']);
        $this->assign('themeID',$_GET['themeID']);
        $this->display();
    }
    public function managerPost(){
        $this->assign('platesID',$_GET['platesID']);
        $this->assign('themeID',$_GET['themeID']);
		$this->display();
    }
    public function searchPost(){
        $this->display();
    }
    public function managerAnnou(){
    	$this->display();
    }
    public function userInfo(){
        $this->assign('userID',$_GET['userID']);
        $this->display();
    }
    public function addAnnou(){
       
        $this->display();
    }
    public function updateMod(){
        // echo $_GET['modID'].$_GET['modName'];
        $this->assign('modID',$_GET['modID']);
        $this->assign('modName',$_GET['modName']);
        $this->display();
    }
    public function addMod(){
        $this->display();
    }
}