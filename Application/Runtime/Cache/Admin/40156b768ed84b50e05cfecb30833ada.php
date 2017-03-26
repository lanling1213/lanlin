<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BBS/Public/Css/Adminstraor.css" />
	<link rel="stylesheet" type="text/css" href="/BBS/Public/Css/Moderator.css" />
	<title>BBS论坛后台管理系统</title>
</head>
<body>

	<div class="topbar-wrap">
	    <div class="topbar-inner">
	    	<h1>BBS论坛管理员后台管理系统</h1>
	    </div>
        <div class="topbar-right">
            <p>管理员：<i id="moderatorName"><?php echo $_SESSION['manager_name'];?></i></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="<?php echo U('Login/out');?>">注销</a></span></p>
            
        </div>
	</div>

	<div class="container">
	    <div class="sidebar-wrap">

	        <div class="sidebar-title">
	            <h2>菜单</h2>
	        </div>

	        <div class="sidebar-content">
	            <ul class="sidebar-list">
	            	<li><a href="<?php echo U('Manager/managerUser');?>">&nbsp;<i><img src="/BBS/Public/Images/moderator.png"></i>&nbsp;用户管理</a></li>
	                <li><a href="<?php echo U('Manager/managerPlates');?>">&nbsp;<i><img src="/BBS/Public/Images/theme.png"></i>&nbsp;版块管理</a></li>
	                <li><a href="<?php echo U('Manager/managerAnnou');?>">&nbsp;<i><img src="/BBS/Public/Images/annoucement.png"></i>&nbsp;公告管理</a></li>
                    <li><a href="<?php echo U('Manager/managerMod');?>">&nbsp;<i><img src="/BBS/Public/Images/moderator.png" /></i>&nbsp;版主管理</a></li>
                    <li><a href="<?php echo U('Manager/searchPost');?>">&nbsp;<i><img src="/BBS/Public/Images/moderator.png" /></i>&nbsp;帖子搜索</a></li>
	            </ul>
	        </div>

	    </div>
        
        <!--main-wrap-->
        <div class="main-wrap">
            
            <!--main-wrap标题-->
            <div class="m-w">
                <div class="main-wrap-list">
                    <i><img src="/BBS/Public/Images/homepage.png" ></i>
                    <a href="<?php echo U('Manager/index');?>">首页</a>
                    <span class="crumb-step">&gt;</span>
                    <span>用户管理</span>
                    
                </div>
            </div>
            
            <!--search-wrap搜索-->
            <div class="search-wrap">
                <div class="search-content">
                    <form action="<?php echo U('ManagerUser/searchUser');?>" method="post">
                        <table class="search-tab">
                            <tr>
                                <th width="70">关键字:</th>
                                <td><input class="common-text" placeholder="请输入用户账号或用户名" name="username" value="" id="" type="text"></td>
                                <td><input class="search-btn" name="sub" value="查询" type="submit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-content">
                    
                    <div class="result-content-title">
                        <div class="rct-user">用户名</div>
                        <div class="rct-operate">操作</div>
                    </div>
                    
                    <div class="rc-userList">
                        <ul>
         				   <?php
 $user = D('user'); $user_info = $user->select(); if(sizeof($userid)){ if($userid[0]==0){ echo "没有该用户"; $user_info = 0; }else{ $data['user_id'] = array('IN',$userid); $user_info = $user->where($data)->select(); } } foreach($user_info as $userInfo){ echo "<li>"; if($userInfo['user_flag'] == 1){ $flag = "此用户已被限制"; }else{ $flag = ""; } $userUrl = U('Manager/userInfo?userID='.$userInfo['user_id']); echo "<div><a href='$userUrl' class='rcul-name' id='rcul-name'>".$userInfo['user_name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$flag."</a></div>"; echo "<div class='rcul-operate'>"; $userUrl = U('ManagerUser/limitUser?userID='.$userInfo['user_id']); echo "<a href='$userUrl' class='userForbid' id='userForbid'>限制此用户</a>"; $userUrl = U('ManagerUser/deleteUser?userID='.$userInfo['user_id']); echo "<a href='$userUrl' class='userDelete' id='userDelete'>删除此用户</a>"; $userUrl = U('ManagerUser/restoreUser?userID='.$userInfo['user_id']); echo "<a href='$userUrl' class='userDelete' id='userDelete'>恢复 </a>"; echo "</div>"; echo "</li>"; } ?>
                        </ul>
                    </div>
                
                </div>
            </div>
            
        </div>
        
	</div>
	
</body>
</html>