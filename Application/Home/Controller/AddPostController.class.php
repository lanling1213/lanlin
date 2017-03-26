<?php
namespace Home\Controller;
use Think\Controller;
class AddPostController extends Controller {
    public function addPost(){
    	if($_SESSION['user_name']){
    		// echo $_GET['themeID'];
    		$this->assign('themeID',$_GET['themeID']);
    		$this->display();
    	}else{
    		$this->display("Login/login");
    	}
    }
    public function add(){
    	// echo $_SESSION['user_name'].$_POST['title'].$_POST['content'].$_POST['themeID']."<br/>".date('Y-m-d H:i:s');
        if($_SESSION['user_id'] == 0){
            $this->display("Login/login");
        }else{
            $post = D('post');
            $data['post_title'] = $_POST['title'];
            $data['post_detail'] = $_POST['content'];
            $data['user_id'] = $_SESSION['user_id'];
            $data['theme_id'] = $_POST['themeID'];
            $data['post_time'] = date('Y-m-d H:i:s');
            $data['post_good'] = 0;
            $data['post_bad'] = 0;
            $flag = $post->add($data);
        // dump($flag);
        // echo $flag;
            if($flag){
                $this->redirect('Home/Comment/comment/postid/'.$flag,'',1,'发帖成功');
            }else{
                $this->error('发帖失败',"",1);
            }
        }
    	
    }
/*    public function content($i){
        $this->display('Content/content?postID='.$i);
    }*/
    public function adds(){
        echo "ok";
    }
}