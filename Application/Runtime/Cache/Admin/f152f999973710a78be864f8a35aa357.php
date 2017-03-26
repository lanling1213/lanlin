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
                    <a href="<?php echo U('Moderator/modAnnou');?>">公告管理</a>
                    <span class="crumb-step">&gt;</span>
                    <span>新增公告</span>
                </div>
            </div>
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-content">
                    <form action="/BBS/index.php/Admin/Moderator/addAnnous" method="post" id="" name="myform">
                        <table class="insert-tab" width="100%">
                            <tbody>
                                <tr>
                                    <th>公告标题：</th>
                                    <td>
                                        <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <th>公告内容：</th>
                                    <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input class="btn-primary" value="发布" type="submit">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            
        </div>
        
	</div>
	
</body>
</html>