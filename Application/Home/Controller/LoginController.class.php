<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function userLogin(){
        $user = D('user');
        $data['user_id'] = $_POST['username'];
        $data['user_name'] = $_POST['username'];
        $data['_logic'] = "OR";
        // $user_info = $user->field('user_id,user_password,user_flag')->where("user_name = '%s'",$_POST['username'])->select();
        $user_info = $user->field('user_id,user_password,user_flag,user_name')->where($data)->select();
        foreach ($user_info as $userInfo ) {
            # code...
            $name = $userInfo['user_name'];
            $passwd = $userInfo['user_password'];
            $userId = $userInfo['user_id'];
            $flag = $userInfo['user_flag'];
        }
/*        echo $passwd;
        echo $_POST['password'];*/
        if($flag ==1){
            $this->error('已被管理员禁止，请联系管理员。');
        }
        if($_POST['password'] !="" and $_POST['username'] !=""){
            if($_POST['password'] == $passwd){
            // 设置session
                session('user_name',$name);
                session('user_id',$userId);
                $this->assign('sessinfo',$_SESSION['user_name']);
/*          echo $_SESSION['user_name'];
          $this->display("Userindex/userindex");*/
                $this->display("Index/index");
            }else{
/*          echo "error";
            echo $passwd;*/
                $this->display("Index/index");
            }  
        }else{
            $this->display("Index/index");
        }
    }
    public function login(){
/*		echo $_POST['username'];
		echo $_POST['password'];
*/

		$this->display();
    }
    public function register(){
    	
    	$this->display();
    }
    public function userRegister(){
    	$user = D('user');
    	$data['user_id'] = $_POST['userId']; 
    	$data['user_name'] = $_POST['username'];
    	$data['user_password'] = $_POST['password'];
    	$data['user_email'] = $_POST['e-mail'];
    	$data['user_phone'] = $_POST['phone'];
        $data['user_flag'] = 0;
     	$userinfo = $user->add($data);
    	if($userinfo){
    		// 设置session
			session('user_name',$_POST['username']);
            session('user_id',$userinfo);
/*			echo $_SESSION['user_name'];
*/			$this->display("Userindex/userindex");
    	}else{
            // echo $userinfo;
    		$this->register();
    	}
    }
    public function out(){
    	session('user_name',null);
        session('user_id',null);
    	// session(null); 清空session
    	$this->display("Index/index");
    }
}