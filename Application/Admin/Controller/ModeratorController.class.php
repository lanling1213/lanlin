<?php
namespace Admin\Controller;
use Think\Controller;
class ModeratorController extends Controller {
    public function index(){
		$this->display();
    }
    // 管理版块
    public function modPlate(){
    	$this->display();
    }
    public function updatePlate(){
    	// echo $_GET['platesID'];
    	$this->assign('platesID',$_GET['platesID']);
    	$this->display();
    }
    public function updatePlates(){
    	// echo $_POST['title'].$_POST['content'].$_POST["platesID"];
    	$plates = D('plates');
    	$data['plates_title'] = $_POST['title'];
    	$data['plates_detail'] = $_POST['content'];
    	$flag = $plates->where('plates_id=%d',$_POST['platesID'])->save($data);
    	if($flag){
    		$this->success('成功修改!',modPlate);
    	}else{
    		$this->error('修改失败！');
    	}
    }
    //管理主题
    public function modTitle(){
        // echo $_SESSION['plates_id'];
        $this->display();
    }
    public function updateTitle(){
        $this->assign('platesID',$_SESSION['platesID']);
        $this->assign('themeID',$_GET['themeID']);
        $this->display();
    }
    public function updateTitles(){
        // echo $_POST['title'].$_POST['content'].$_SESSION['plates_id'].date('Y-m-d H:m:s');
         //echo $_POST['themeID'];
        $theme = D('theme');
        $data['theme_title'] = $_POST['title'];
        $data['theme_detail'] = $_POST['content'];
        // $data['plates_id'] = $_SESSION['plates_id'];
        $data['theme_time'] = date('Y-m-d H:m:s');
        $a['theme_id'] = $_POST['themeID'];
        $flag = $theme->field('theme_title,theme_detail,theme_time')->where($a)->save($data);
        if($flag >0){
            $this->success("成功修改!",modTitle);
        }else{
            $this->error("修改失败！");
        }
    }
    public function addTitle(){
        $this->display();
    }
    public function addTitles(){
        $theme = D('theme');
        $data['theme_title'] = $_POST['title'];
        $data['theme_detail'] = $_POST['content'];
        $data['plates_id'] = $_SESSION['plates_id'];
        $data['theme_time'] = date('Y-m-d H:m:s');
        $flag = $theme->add($data);
        if($flag >0){
            $this->success("成功添加!",modTitle);
        }else{
            $this->error("添加失败！");
        }
    }
    public function deleteTitle(){
        $theme = D('theme');
        $data['theme_id'] = $_GET['themeID'];
        $flag = $theme->where($data)->delete();
        // dump($flag);
        if($flag >0){
            $this->success("成功删除!");
        }else{
            $this->error("删除失败！");
        }
    }
    // 管理帖子
    public function modPost(){
        // echo $_GET['themeID'];
        $this->assign('themeID',$_GET['themeID']);
        $this->display();
    }
    public function deletePost(){
        //echo $_GET['postID'];
        $post = D('post');
        $data['post_id'] = $_GET['postID'];
        $flag = $post->where($data)->delete();
        // dump($flag);
        if($flag >0){
            $this->success("成功删除帖子!");
        }else{
            $this->error("删除帖子失败！");
        }
    }
    public function addPost(){
        $this->assign('themeID',$_GET['themeID']);
        $this->display();
    }
    public function addPosts(){
        // echo $_POST['themeID'].$_POST['title'].$_POST['content']; 
        $post = D('post');
        $data['user_id'] = $_SESSION['moderator_id'];
        $data['post_title'] = $_POST['title'];
        $data['post_content'] = $_POST['content'];
        $data['theme_id'] = $_POST['themeID'];
        $data['post_time'] = date('Y-m-d H:m:s');
        $data['post_good'] = 0;
        $data['post_bad'] = 0;
        $flag = $post->add($data);
        if($flag >0){
            $this->success("成功添加帖子!");
        }else{
            $this->error("添加帖子失败！");
        }
        // $data[]
    }
    // 管理公告
    public function modAnnou(){
        $this->display();
    }
    public function deleteAnnou(){
        // echo $_GET['annouID'];
        $annou = D('annou');
        $data['annou_id'] = $_GET['annouID'];
        $flag = $annou->where($data)->delete();
        // dump($flag);
        if($flag >0){
            $this->success("成功删除公告!");
        }else{
            $this->error("删除公告失败！");
        }
    }
    public function addAnnou(){
        $this->display();
    }
    public function addAnnous(){
        // echo $_POST['title'].$_POST['content'].$_SESSION['plates_id'];
        // echo $_SESSION['plates_id'];
        $annou = D('annou');
        $info['annou_title'] = $_POST['title'];
        $info['annou_content'] = $_POST['content'];
        $info['plates_id'] = $_SESSION['plates_id'];
        $flag = $annou->field('annou_id,annou_title,annou_content,plates_id')->add($info);

        if($flag >0){
            $this->success("成功添加!",modAnnou);
            // $this->display('Moderator/modAnnou');
        }else{
            $this->error("添加失败！");
        }
    }
    public function updateAnnou(){
        $this->assign("annou_id",$_GET['annouID']);
        $this->display();
    }
    public function updateAnnous(){
         // echo $_POST['annou_id'];
        $annou = D('annou');
        $info['annou_title'] = $_POST['title'];
        $info['annou_content'] = $_POST['content'];
        $data['annou_id'] = $_POST['annou_id'];
        $flag = $annou->where($data)->save($info);
        if($flag >0){
            $this->success("成功修改!",modAnnou);
        }else{
            $this->error("修改失败！");
        }
    }
}