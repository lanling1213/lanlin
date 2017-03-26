<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BBS/Public/Css/Moderator.css" />
	<title>BBS论坛版主后台管理系统</title>
</head>
<body>

	<div class="topbar-wrap">
	    <div class="topbar-inner">
	    	<h1>BBS论坛版主后台管理系统</h1>
	    </div>
        <div class="topbar-right">
            <p>版主：<i id="moderatorName"><?php echo $_SESSION['moderator_name'];?></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="<?php echo U('Login/out');?>">注销</a></span></p>
            
        </div>
	</div>

	<div class="container">
	    <div class="sidebar-wrap">

	        <div class="sidebar-title">
	            <h2>菜单</h2>
	        </div>

	        <div class="sidebar-content">
	            <ul class="sidebar-list">
	            	<li><a href="<?php echo U('Moderator/modPlate');?>">&nbsp;<i><img src="/BBS/Public/Images/moderator.png"></i>&nbsp;板块信息</a></li>
	                <li><a href="<?php echo U('Moderator/modTitle');?>">&nbsp;<i><img src="/BBS/Public/Images/theme.png"></i>&nbsp;主题管理</a></li>
	                <li><a href="<?php echo U('Moderator/modAnnou');?>">&nbsp;<i><img src="/BBS/Public/Images/annoucement.png"></i>&nbsp;公告管理</a></li>
	            </ul>
	        </div>

	    </div>
        
        <!--main-wrap-->
        <div class="main-wrap">
            
            <!--main-wrap标题-->
            <div class="m-w">
                <div class="main-wrap-list">
                    <i><img src="/BBS/Public/Images/homepage.png" ></i>
                    <a href="">首页</a>
                    <span class="crumb-step">&gt;</span>
                    <span>主题管理</span>
                    
                </div>
            </div>
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-wrap-list">
                    <div class="theme-add"><a href="<?php echo U('moderator/addTitle');?>" id="">新增主题</a></div>
                    <ul>
						<?php
 $theme = D('theme'); $theme_info = $theme->where('plates_id=%d',$_SESSION['plates_id'])->select(); foreach($theme_info as $themeInfo){ echo "<li>"; $post = D('post'); $postCount = $post->where('theme_id='.$themeInfo['theme_id'])->count('theme_id'); $plateUrl = U('Moderator/modPost?themeID='.$themeInfo['theme_id']); echo "<a href='$plateUrl' >".$themeInfo['theme_title']."<span>（帖子数：<a href=''>".$postCount."</a>）</span></a>"; echo "<div class='rwl-btn'>"; $plateUrl = U('Moderator/deleteTitle?themeID='.$themeInfo['theme_id']); echo "<a href='$plateUrl'>删除</a>"; $plateUrl = U('Moderator/updateTitle?themeID='.$themeInfo['theme_id']); echo "<a href='$plateUrl'>修改</a>"; $plateUrl = U('Moderator/modPost?themeID='.$themeInfo['theme_id']); echo "<a href='$plateUrl'>查看主题帖子</a>"; echo "</div>"; echo "</li>"; } ?>
                    </ul>
                </div>
            </div>
            
        </div>
        
	</div>
	
</body>
</html>