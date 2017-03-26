<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller {
    public function comment(){
		// echo $_GET['postid'];
		
		$this->assign('postID',$_GET['postid']);
		$this->assign('sessinfo',$_SESSION['user_name']);
		$this->display();
    }
    public function commentPost(){
    	// echo $_SESSION['user_id'].$_POST['commentPost'].$_POST['postid'];
        if($_SESSION['user_id']==0){
            $this->display('Login/login');
        }else{
            $comment = D('comment');
            $data['user_id'] = $_SESSION['user_id'];
            $data['comment_detail'] = $_POST['commentPost'];
            $data['post_id'] =$_POST['postid'];
            $data['comment_time'] = date('Y-m-d H:i:s');
            $flag = $comment->add($data);
            if($flag>0){
                $this->success('评论成功');
            }else{
                $this->erroe("评论失败","",1);
            }
        }
    	
    }
}