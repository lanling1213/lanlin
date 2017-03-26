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

                    <span>版块管理</span>
                </div>
            </div>
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-content">
	                        <?php
 $plate = D('plates'); $sql = "SELECT * from bbs_plates a, bbs_moderator b where a.plates_id = b.plates_id and b.moderator_name = '".$_SESSION['moderator_name']."'"; $plate_info = $plate->query($sql); foreach($plate_info as $plateInfo){ echo "<li>"; echo "<a href=''>".$plateInfo['plates_title']."</a>"; echo "<div class='rwl-btn'>"; $plateUrl = U('Moderator/updatePlate?platesID='.$plateInfo['plates_id']); echo "<a href='$plateUrl'>修改</a>"; echo "</div>"; echo "</li>"; } ?>
                </div>
            </div>
            
        </div>
        
	</div>
	
</body>
</html>