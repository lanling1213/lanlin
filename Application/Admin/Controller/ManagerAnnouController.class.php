<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerAnnouController extends Controller {
	public function deleteAnnou(){
		// echo $_GET['annouID'];
		$annou = D('annou');
		$data['annou_id'] = $_GET['annouID'];
		$flag = $annou->where($data)->delete();
		if($flag){
			$this->success("删除成功");
		}else{
			$this->error('删除失败');
		}
	}
	public function addAnnou(){
		// echo $_POST['title'].$_POST['content'].$_POST['platesID'];
		// echo $_POST['platesID'];
		$annou = D('annou');
		$data['plates_id'] = $_POST['platesID'];
		$data['annou_title'] = $_POST['title'];
		$data['annou_content'] = $_POST['content'];
		$flag = $annou->field('annou_id,annou_title,annou_content,plates_id')->add($data);
		if($flag){
			$this->success("添加成功");
		}else{
			$this->error('添加失败');
		}
	}
}
?>