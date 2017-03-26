<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerPlatesController extends Controller {
	public function updatePlates(){
		// echo $_POST['platesID'].$_POST['title'].$_POST['content']."ok";
		$plates = D('plates');
    	$data['plates_title'] = $_POST['title'];
    	$data['plates_detail'] = $_POST['content'];
    	$flag = $plates->where('plates_id=%d',$_POST['platesID'])->save($data);
    	if($flag){
    		$this->success('成功修改!',U('manager/managerPlates'));
    	}else{
    		$this->error('修改失败！');
    	}
	}
	public function deletePlates(){
		$plates = D('plates');    	
    	$flag = $plates->where('plates_id=%d',$_GET['platesID'])->delete();
    	if($flag){
    		$this->success('成功删除!');
    	}else{
    		$this->error('删除失败！');
    	}
	}
	public function addPlates(){
		// echo $_POST['title'].$_POST['content'].$_POST['modID'];
        $plates = D('plates');
        $data['plates_title'] = $_POST['title'];
        $data['plates_detail'] = $_POST['content'];      
        $flag = $plates->add($data);
        // echo $flag;
        $moderator = D('moderator');
        // $map['moderator_id'] = $_POST['modID'];
        $map['plates_id'] = $flag;
        $modFlag = $moderator->field('plates_id')->where('moderator_id=%d',$_POST['modID'])->save($map);
        if($flag>0 and $modFlag>0){
            // $this->success('成功添加!');
            $this->display('Manager/managerPlates');
        }else{
            $this->error('添加失败！');
        }
	}
}
?>