<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
		// echo $_POST['txtModerator'].$_POST['txtManager'].$_POST['flag'];
		if($_POST['flag'] !=""){
			if($_POST['flag'] == "moderator"){
				// echo "moderator";
				$moderator = D('moderator');
				$data['moderator_name'] = $_POST['name'];
				$moderator_info = $moderator->where($data)->select();
				// dump($moderator_info);
				// echo $_POST['name'];
				if($moderator_info ==""){
					$this->error("账号不存在！");
				}elseif($moderator_info[0]['moderator_flag'] == 1){
					$this->error("账号已被管理员禁止，请联系管理员！","",1);
				}elseif($moderator_info[0]['moderator_password'] == $_POST['password']){
					session('moderator_name',$_POST['name']);
					session('plates_id',$moderator_info[0]['plates_id']);
					// $this->moderatorIndex();
					$this->success("成功登陆",'moderatorIndex');
				}else{
					$this->error("密码错误！");
				}
			}else{
				// echo "manager";
				$manager = D('manager');
				$data['manager_name'] = $_POST['name'];
				$manager_info = $manager->where($data)->select();
				// dump($manager_info);
				// echo $_POST['name'];
				if($manager_info ==""){
					$this->error("账号不存在！");
				}elseif($manager_info[0]['manager_password'] == $_POST['password']){
					session('manager_name',$_POST['name']);
					$this->success("成功登陆",'managerIndex');
					// $this->managerIndex();
				}else{
					$this->error("密码错误！");
				}
			}
		}else{
			$this->error("请选择角色！");
		}
    }
    public function moderatorIndex(){
    	$this->display('Moderator/index');
    }
    public function managerIndex(){
    	$this->display('Manager/index');
    }
    public function out(){
    	session(null);
    	$this->display('index/index');
    }
}