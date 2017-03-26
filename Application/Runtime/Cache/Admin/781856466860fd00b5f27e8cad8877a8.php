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
                    <a href="<?php echo U('Manager/managerAnnou');?>">公告管理</a>
                    <span class="crumb-step">&gt;</span>
                    <span>新增公告</span>
                </div>
            </div>
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-wrap-list">

                    <form action="<?php echo U('ManagerAnnou/addAnnou');?>" method="post" id="" name="myform">
                        <table class="insert-tab" width="100%">
                            <tbody>
                                <tr>
                                    <th>公告标题：</th>
                                    <td>
                                        <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <th>版块：</th>
                                    <td>
                                    <select id='selectPlates' name="selectPlates">
                                        <?php  $plates = D('plates'); $plates_info = $plates->select(); $i = 1; foreach($plates_info as $platesInfo){ echo "<option value='$i'>".$platesInfo['plates_title']."</option>"; $i++; } ?>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>公告内容：</th>
                                    <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input class="btn-primary" value="发布" type="submit" onclick="getPlates();">
                                    </td>
                                </tr>
                                <tr><input type="hidden"  name="platesID"  id="platesID"/></tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            
        </div>
        
	</div>
	<script type="text/javascript">
        function getPlates(){
            var platesid = document.getElementById("selectPlates")
            document.getElementById("platesID").value = platesid.value;
           // alert(platesid.value);
        }
    </script>
</body>
</html>