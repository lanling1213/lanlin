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
                    <a href="<?php echo U('Manager/managerUser');?>">用户管理</a>
                    <span class="crumb-step">&gt;</span>
                    <span>用户信息</span>
                </div>
            </div>
            
            <!--main-wrap内容-->
            <div class="result-wrap">
                <div class="result-content">
                    
                    <div class="rc-userInfo">
                        <div class="rc-userInfo-name">
                            <?php
 $user = D('user'); $user_info = $user->field('user_name,user_email,user_phone')->where('user_id=%d',$userID)->select(); foreach($user_info as $userInfo){ echo "<span>用户名：".$userInfo['user_name']."</span>"; echo " <span>手机号码：".$userInfo['user_phone']."</span>"; echo " <span>手机号码：".$userInfo['user_email']."</span>"; } ?>
                        </div>
                        
                        <div class="rc-userInfo-postList">
                            <h3><?php echo $user_info[0]['user_name'] ;?>用户发表的帖子：</h3>
                        <ul>
              
                            <?php
 $post = D('post'); $post_info = $post->field('post_title,post_id')->where('user_id=%d',$userID)->select(); foreach($post_info as $postInfo){ echo "<li>"; $postUrl = U('Home/Comment/comment?postid='.$postInfo['post_id']); echo "<a href='$postUrl'>".$postInfo['post_title']."</a>"; echo "<div class='rwl-btn'>"; $postUrl = U('ManagerUser/deletePost?postid='.$postInfo['post_id']); echo "<a href='$postUrl'>删除</a>"; echo "</div>"; echo "</li>"; } ?>

                        </ul>
                        </div>
                    </div>
                
                </div>
            </div>
            
        </div>
        
	</div>
	
</body>
</html>