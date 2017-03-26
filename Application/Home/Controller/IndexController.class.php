<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

		$this->assign('sessinfo',$_SESSION['user_name']);
		$this->display();
    }
    public function search(){
    	// echo $_POST['content'].$_POST['flag'];
    	if($_POST['flag']=="帖子"){
    		// echo "post";
    		$i = 0;
    		$id = array();
    		$post = D('post');
    		$content = $_POST['content'];
    		$map['post_title'] = array('like','%'.$content.'%');
    		$map['post_detail'] = array('like','%'.$content.'%');
    		$map['_logic'] = 'OR'; 
    		$postInfo = $post->field('post_id,post_title,post_detail')->where($map)->select();
    		// dump($postInfo);
    		// echo sizeof($postInfo);
    		if(sizeof($postInfo) <= 0){
    			$this->error("没有相关内容的帖子!","",1);
    		}
    		foreach($postInfo as $post_info){
    			// echo $post_info['post_id'].$post_info['post_title']."<br/>";
    			$id[$i] = $post_info['post_id'];
    			$i++;

    		}
    		// dump($id);
    		// $data['post_id'] = array('IN',$id);
    		// $a = $post->where($data)->select();
    		// dump($a);

    		$this->assign('postid',$id);
    		$this->display();
    	}else{
    		// echo "user";
    		$i = 0;
    		$id = array();
    		$user = D('user');
    		$name = $_POST['content'];
    		$map['user_id'] = array('like','%'.$name.'%');
    		$map['user_name'] = array('like','%'.$name.'%');
    		$map['_logic'] = 'OR';
    		$user_info = $user->where($map)->select();
    		// dump($user_info);
    		if(sizeof($user_info) <= 0){
    			$this->error("没有相关的用户!","",1);
    		}
    		foreach ($user_info as $userInfo) {
    			# code...
    			$id[$i] = $userInfo['user_id'];
    			$i++;
    		}
    		// dump($id);
    		$this->assign('userid',$id);
    		$this->display();
    	}
    }
    public function user_info(){
        // echo $_GET['userID'];

        $this->assign('userID',$_GET['userID']);
        $this->display();
    }
}