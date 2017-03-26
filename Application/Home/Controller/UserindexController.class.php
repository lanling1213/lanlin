<?php
namespace Home\Controller;
use Think\Controller;
class UserindexController extends Controller {
    public function userindex(){
/*        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');*/
		/*echo session('user_name');*/
		if(session('?user_name')){
			$this->display();
		}else{
			$this->display('Index/index');
		}
		
    }
/*    public function init(){
        $user = U('user');
    }*/
    public function personalSpace(){
    	$this->display();
    }
    public function personalPost(){
    	$this->display();
    }
    public function personalInfo(){
        $a = array();
        $user = D('user');
        $data['user_id'] = $_SESSION['user_id'];
        $user_info = $user->where($data)->select();
        foreach($user_info as $userInfo){
            $a['name'] = $userInfo['user_name'];
            $a['phone'] = $userInfo['user_phone'];
            $a['email'] = $userInfo['user_email'];
        }
        $this->assign('a',$a);
    	$this->display();
    }
    public function updateInfo(){
        // echo $_POST['name'].$_POST['e-mail'].$_POST['phone'];
        $userData['user_name'] = $_POST['name'];
        $userData['user_email'] = $_POST['e-mail'];
        $userData['user_phone'] = $_POST['phone'];
        $b['user_name'] = $_SESSION['user_name'];
        $userinfo = D('user');
        $flag = $userinfo->field('user_name,user_email,user_phone')->where($b)->save($userData);
        if($flag){
            $this->success("成功修改信息");
            session('user_name',$_POST['name']);
        }else{
            $this->error("修改失败","",1);
        }
        
    }
    public function personalPassword(){
        $this->display();
    }
        public function personalImg(){
        $this->display();
    }
    public function upload(){
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        $upload->saveName = $this->myname();
        
        $upload->subType = 'custom'; //自定义目录
        $upload->subDir = $this->myname();

        $upload->replace = true;
        $upload->autoSub = false;
        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            // $this->error($upload->getsError());
            $this->error('上传失败！',"",1);
        }else{// 上传成功
            // $this->success('上传成功！');
            $this->redirect('/Home/Userindex/personalImg','',1,"更换成功");
        }
    }
    public function myname(){
        return $_SESSION['user_name'];
    }
    public function updatePassword(){
        $user = D('user');
        $data['user_name'] = $_SESSION['user_name'];
        $userInfo = $user->field('user_password')->where($data)->select();
        // dump($userInfo);
/*        if($userInfo){
            echo $userInfo[0]['user_password'].$_POST['oldpassword'].$_POST['newpassword'].$_POST['newpassword1'];
        }*/
        // echo $userInfo[0]['user_password'].$_POST['oldpassword'];
        // echo $_POST['newpassword1'].$_POST['newpassword2'];
        // echo $_SESSION['user_id'];
        if($userInfo[0]['user_password']==$_POST['oldpassword']){
            if($_POST['newpassword2']==$_POST['newpassword1']){
                $a['user_password'] = $_POST['newpassword1'];
                $user->field("user_password")->where('user_id=%d',$_SESSION['user_id'])->save($a);
                $this->success("成功修改密码！");
            }else{
                $this->error("密码不相同！","",1);
            }
        }else{
            $this->error("密码不正确！","",1);
        }
        

        // echo $userInfo[0][0];
    }
    public function personalConllect(){
        $this->display();
    }
}