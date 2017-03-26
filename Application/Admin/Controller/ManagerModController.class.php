<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerModController extends Controller {
        public function deleteMod(){
            // echo $_GET['modID'];
            $mod = D('moderator');
            $flag = $mod->where('moderator_id=%d',$_GET['modID'])->delete();
            if($flag){
                $this->success("成功删除");
            }else{
                $this->error("删除失败");
            }
        }
        public function limitMod(){
            $mod = D('moderator');
            $data['moderator_flag'] =1;
            $flag= $mod->where('moderator_id=%d',$_GET['modID'])->save($data);
            if($flag){
                $this->success("成功禁止");
            }else{
                $this->error("禁止失败");
            }
        }
        public function restoreUser(){
            $mod = D('moderator');
            $data['moderator_flag'] =0;
            $flag= $mod->where('moderator_id=%d',$_GET['modID'])->save($data);
            if($flag){
                $this->success("成功解除");
            }else{
                $this->error("解除失败");
            }
        }
        public function updateMod(){
            // echo $_POST['modID'].$_POST['platesID'];
            $mod = D('moderator');
            $data['plates_id'] =$_POST['platesID'];
            $flag= $mod->where('moderator_id=%d',$_POST['modID'])->save($data);
            if($flag){
                $this->success("成功修改",show);
            }else{
                $this->error("修改失败");
            }
        }
        public function addMod(){
            // echo $_POST['name'].$_POST['password'].$_POST['platesID'];
            $mod = D('moderator');
            $data['plates_id'] =$_POST['platesID'];
            $data['moderator_name'] = $_POST['name'];
            $data['moderator_password'] = $_POST['password'];
            $data['moderator_flag'] = 0;
            $flag= $mod->add($data);
            if($flag){
                $this->success("成功添加",show);
            }else{
                $this->error("添加失败");
            }
        }
        public function show(){
            $this->display('Manager/managerMod');
        }
}
?>