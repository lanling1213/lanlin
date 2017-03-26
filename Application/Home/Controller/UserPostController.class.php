<?php
namespace Home\Controller;
use Think\Controller;
class UserPostController extends Controller {
	// 好评
   public function goodPost(){
   		// echo $_GET['postID'];
   		if($_SESSION['user_id']==''){
   			// 没登录
   			$this->display('Login/login');
   		}else{
   			// 登录状态
   			$post = D('post');
   			$post_info = $post->field('post_good')->where('post_id=%d',$_GET['postID'])->select();
   			// dump($post_info);
   			$data['post_good'] = $post_info[0]['post_good'] + 1;
   			$flag = $post->where('post_id=%d',$_GET['postID'])->save($data);
   			// echo $flag;
   			$postid = $_GET['postID'];
   			$postUrl = U('Comment/comment?postid='.$_GET['postID']);
   			// $postUrl = 'Comment/comment?postid='.$_GET['postID'];
   			/*$this->assign('postid',$_GET['postID']);
   			$this->display('Comment/comment');*/
   			// R('Comment/comment',$postid);
   			$this->redirect('/Home/Comment/comment/postid/'.$_GET['postID']);
   		}
   }
   // 差评
   public function badPost(){
   		if($_SESSION['user_id']==""){
   			$this->display('Login/login');
   		}else{
   			$post = D('post');
   			$post_info = $post->field('post_bad')->where('post_id=%d',$_GET['postID'])->select();
   			 dump($post_info);
   			$data['post_bad'] = $post_info[0]['post_bad'] + 1;
   			$flag = $post->where('post_id=%d',$_GET['postID'])->save($data);
   			$postid = $_GET['postID'];
   			$postUrl = U('Comment/comment?postid='.$_GET['postID']);
   			$this->redirect('/Home/Comment/comment/postid/'.$_GET['postID']);
   		}
   }
   // 收藏帖子
   public function collectPost(){
   		// echo $_GET['postID'].$_SESSION['user_id'];
         if($_SESSION['user_id']==""){
            $this->display('Login/login');
         }else{
   		$collect = D('collect');
   		$a['user_id'] = $_SESSION['user_id'];
   		$a['post_id'] = $_GET['postID'];
         $a['_logic'] = 'AND';
   		$flag = $collect->field('collect_id')->where($a)->select();
         // dump($flag);
   		if(sizeof($flag)>0){
   			$this->error("你已经收藏该帖子","",1);
   		}else{
   			$a['collect_time'] = date('Y-m-d H:i:s');
   			$collected = $collect->add($a);
   			$this->success('收藏成功');
   		}
   		}
   }
   // 取消收藏
   public function deleteCollect(){
      // echo  $_GET['collectid'];
      $collect = D('collect');
      $flag = $collect->where('collect_id=%d',$_GET['collectid'])->delete();
      if($flag>0){
         $this->success("成功取消收藏");
      }else{
         $this->error("取消失败","",1);
      }
   }
   // 删除帖子
   public function deletePost(){
      // echo $_GET['postid'];
      $post = D('post');
      $flag = $post->where('post_id=%d',$_GET['postid'])->delete();
      if($flag>0){
         $this->success("成功删除帖子");
      }else{
         $this->error("删除失败","",1);
      }

   }
}