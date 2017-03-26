<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerThemeController extends Controller {
    public function updateTheme(){
    	// echo $_POST['themeID'].$_POST['title'].$_POST['content'];
    	$theme = D('theme');
        $data['theme_title'] = $_POST['title'];
        $data['theme_detail'] = $_POST['content'];
        // $data['plates_id'] = $_SESSION['plates_id'];
        $data['theme_time'] = date('Y-m-d H:m:s');
        $a['theme_id'] = $_POST['themeID'];
        $flag = $theme->field('theme_title,theme_detail,theme_time')->where($a)->save($data);
        $platesid = $theme->field('plates_id')->where($a)->select();
        if($flag >0){
            // dump($platesid); 
            $this->success("成功修改!",U('manager/managerTheme?platesID='.$platesid[0]['plates_id']));
        }else{
            $this->error("修改失败！");
        }
    }
    public function deleteTheme(){
    	$theme = D('theme');
    	$a['theme_id'] = $_GET['themeID'];
    	$flag = $theme->where($a)->delete();
    	if($flag >0){ 
            $this->success("成功删除!");
        }else{
            $this->error("删除失败！");
        }
    }
}