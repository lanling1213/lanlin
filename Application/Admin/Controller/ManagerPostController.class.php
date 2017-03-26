<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerPostController extends Controller {
	public function deletePost(){
		$post = D('post');    	
    	$flag = $post->where('post_id=%d',$_GET['postID'])->delete();
    	if($flag){
    		$this->success('成功删除!');
    	}else{
    		$this->error('删除失败！');
    	}
	}
	public function searchPost(){
		// echo $_POST['title'];
		$i = 0;
        $id = array();
        $post = D('post');
        $map['post_title'] = array('like','%'.$_POST['title'].'%');
        $map['post_detail'] = array('like','%'.$_POST['title'].'%');
        $map['_logic'] = 'OR';
        $post_info = $post->where($map)->select();
        if(sizeof($post_info) <= 0){
            $id[0] = 0;
        }
        foreach ($post_info as $postInfo) {
            $id[$i] = $postInfo['post_id'];
            $i++;
        }
        // dump($id);
        $this->assign('postid',$id);
        $this->display('Manager/searchPost');

	}
}
?>