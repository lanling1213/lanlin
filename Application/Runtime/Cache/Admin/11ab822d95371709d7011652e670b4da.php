<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BBS/Public/Css/Moderator.css" />
	<link rel="stylesheet" type="text/css" href="/BBS/Public/Css/Adminstraor.css" />
	<title>BBS论坛后台管理系统</title>
</head>
<body>

	<div class="topbar-wrap">
	    <div class="topbar-inner">
	    	<h1>BBS论坛后台管理系统</h1>
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
                    <a href="<?php echo U('Manager/managerPlates');?>">版块管理</a>
                    <span class="crumb-step">&gt;</span>
                    <span>版块主题</span>
                </div>
            </div>
            
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-content">

                    <div class="result-content-themeAdd">
                        <input type="button" value="新增主题" action='' id='' class="themeAdd" />
                    </div>

                    <div class="result-content-title">
                        <div class="rct-user">版块主题名</div>
                        <div class="rct-operate">操作</div>
                    </div>
                    
                    <div class="rc-userList">
                        <ul>
                        	<?php
 $theme = D('theme'); $theme_info = $theme->where('plates_id=%d',$platesID)->select(); foreach($theme_info as $themeInfo){ echo "<li>"; echo "<div>"; $themeUrl = U('manager/managerPost',array('themeID'=>$themeInfo['theme_id'],'platesID'=>$platesID)); echo "<a href='$themeUrl' class='rcul-name' id='rcul-name'>".$themeInfo['theme_title']."</a>"; echo "</div>"; echo "<div class='rcul-operate'>"; $themeUrl = U('manager/updateTheme',array('themeID'=>$themeInfo['theme_id'],'platesID'=>$platesID)); echo "<a href='$themeUrl' class='userForbid' idechoecho='userForbid'>修改主题信息</a>"; $themeUrl = U('ManagerTheme/deleteTheme?themeID='.$themeInfo['theme_id']); echo " <a href='$themeUrl' class='userDelete' id='userDelete'>删除主题</a>"; echo "</div>"; echo "</li>"; } ?>
                        </ul>
                    </div>
                
                </div>
            </div>
            
        </div>
        
	</div>
	
</body>
</html>