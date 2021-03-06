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
                    <span>版主管理</span>
                </div>
            </div>
            
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-content">
                    
                    <div class="result-content-themeAdd">
                        <a href="<?php echo U('Manager/addMod');?>"><input type="button" value="新增版主" action='' id='' class="themeAdd" /></a>
                    </div>
                    
                    <div class="result-content-title">
                        <div class="rct-user" style="width: 150px;">版块</div>
                        <div class="rct-moderator" style="width: 150px; float: left; margin-left:30px; border-right: 1px solid black;">版主</div>
                        <div class="rct-operate">操作</div>
                    </div>
                    
                    <div class="rc-moderator">
                        <form action="" method="" id="" name="">
                            <table class="moderatorTable">
                                <tbody>
                                <?php
 $moderator = D('moderator'); $moderator_info = $moderator->order('plates_id')->select(); foreach($moderator_info as $moderatorInfo){ echo "<tr class='mt-list'>"; if($moderatorInfo['moderator_flag']==1){ $i="该版主已被禁止"; }else{ $i=""; } echo "<td class='modulName'>".$moderatorInfo['plates_id']."</td>"; echo "<td class='moderatorName'>".$moderatorInfo['moderator_name']."&nbsp;&nbsp;&nbsp;".$i."</td>"; echo "<td class='moderator-operate'>"; $modUrl = U('Manager/updateMod',array('modID'=>$moderatorInfo['moderator_id'],'modName'=>$moderatorInfo['moderator_name'])); echo "<a href='$modUrl' id=''>更改版主</a>"; $modUrl = U('ManagerMod/limitMod?modID='.$moderatorInfo['moderator_id']); echo "<a href='$modUrl' id=''>禁止登陆</a>"; $modUrl = U('ManagerMod/restoreUser?modID='.$moderatorInfo['moderator_id']); echo "<a href='$modUrl' id=''>恢复登陆</a>"; $modUrl = U('ManagerMod/deleteMod?modID='.$moderatorInfo['moderator_id']); echo "<a href='$modUrl' id=''>删除版主</a>"; echo "</td>"; echo "</tr>"; } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                
                </div>
            </div>
            
        </div>
        
	</div>
	
</body>
</html>