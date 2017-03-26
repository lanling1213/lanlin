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
                    <span>搜索帖子</span>
                    
                </div>
            </div>
            
            <!--search-wrap搜索-->
            <div class="search-wrap">
                <div class="search-content">
                    <form action="<?php echo U('ManagerPost/searchPost');?>" method="post">
                        <table class="search-tab">
                            <tr>
                                <th width="70">关键字:</th>
                                <td><input class="common-text" placeholder="请输入关键字" name="title" value="" id="" type="text"></td>
                                <td><input class="search-btn" name="sub" value="帖子查询" type="submit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-content">
                    
                    <div class="result-content-title">
                        <div class="rct-user">帖子</div>
                        <div class="rct-operate">操作</div>
                    </div>
                    
                    <div class="rc-userList">
                        <ul>
         				   <?php
 $post = D('post'); $post_info = $post->select(); if(sizeof($postid)){ if($postid[0]==0){ echo "没有该帖子"; $post_info = 0; }else{ $data['post_id'] = array('IN',$postid); $post_info = $post->where($data)->select(); } } foreach($post_info as $postInfo){ echo "<li>"; echo "<div>"; $postUrl = U('Home/Comment/comment?postid='.$postInfo['post_id']); echo "<a href='$postUrl' class='rcul-name' id='rcul-name'>".$postInfo['post_title']."</a>"; echo "</div>"; echo " <div class='rcul-operate'>"; $postUrl = U('ManagerPost/deletePost?postID='.$postInfo['post_id']); echo "<a href='$postUrl' class='userDelete' id='userDelete'>删除帖子</a>"; echo "</div>"; echo "</li>"; } ?>
                        </ul>
                    </div>
                
                </div>
            </div>
            
        </div>
        
	</div>
	
</body>
</html>