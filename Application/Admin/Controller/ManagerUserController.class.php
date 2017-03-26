<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerUserController extends Controller {
    // 删除用户
    public function deleteUser(){
        // echo $_GET['userID'];
        $user = D('user');
        $data['user_id'] = $_GET['userID'];
        $flag = $user->where($data)->delete();
        if($flag > 0 ){
            $this->success('成功删除');
        }else{
            $this->error('删除失败');
        }
    }
    // 限制用户
    public function limitUser(){
        $user = D('user');
        $map['user_id'] = $_GET['userID'];
        $data['user_flag'] = 1;
        $flag = $user->field('user_flag')->where($map)->save($data);
        // $flag = $user->where($map)->save($data);
        // dump($flag);
        if($flag >0){
            $this->success('限制成功');
        }else{
            $this->error('限制失败');
        }
    }
    // 恢复用户
    public function restoreUser(){
        // echo $_GET['userID'];
        $user = D('user');
        $map['user_id'] = $_GET['userID'];
        $data['user_flag'] = 0;
        $flag = $user->field('user_flag')->where($map)->save($data);
        if($flag > 0 ){
            $this->success('恢复成功');
        }else{
            $this->error('恢复失败');
        }
    }
    public function deletePost(){
        // echo $_GET['postid'];
        $post = D('post');
        $data['post_id'] = $_GET['postid'];
        $flag = $post->where($data)->delete();
        if($flag > 0 ){
            $this->success('成功删除');
        }else{
            $this->error('删除失败');
        }
    }
    public function searchUser(){
        // echo $_POST['username'];
        $i = 0;
        // $data = array();
        $id = array();
        // $name = array();
        $user = D('user');
        // $name = $_POST['content'];
        $map['user_id'] = array('like','%'.$_POST['username'].'%');
        $map['user_name'] = array('like','%'.$_POST['username'].'%');
        $map['_logic'] = 'OR';
        $user_info = $user->where($map)->select();
        // dump($user_info);
        if(sizeof($user_info) <= 0){
            $id[0] = 0;
        }
        foreach ($user_info as $userInfo) {
            # code...
            $name[$i] = $userInfo['user_name'];
            $id[$i] = $userInfo['user_id'];
            $i++;
        }
        // dump($id);
        // $id1 = implode(',', $id);
        // $data1['user_id'] = array('IN',$id);
        // $userInfo11 = $user->where($data1)->select();
        /*$sql = "select * from bbs_user where user_id IN (".$id[0].")";
        $userInfo11 = $user->query($sql);*/
        // dump($userInfo11);
        // $this->assign('username',$name);

        // dump(sizeof($user_info));

        $this->assign('userid',$id);
        $this->display('Manager/managerUser');
    }
}