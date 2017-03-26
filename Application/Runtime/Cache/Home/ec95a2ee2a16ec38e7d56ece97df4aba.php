<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="'en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
<!--     <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/main.css" />
    <title>BBS论坛</title>
</head>
    
<body>
    
    <!--顶部toptb-->
    <div id="toptb" class="c1">
        <div class="wp">
            <div class="z">
                <a href="" onclick="setHomepage('');">设为首页</a>
                <a href="" onclick="addFavorite(this.href, '');">收藏本站</a>
            </div>
        </div>
    </div>
    
    <div class="navbar">
        
        <!--logo-->
        <div class="hd">
            <div class="hdc"><h2><a href="<?php echo U('Userindex/userindex');?>">BBS论坛</a></h2></div>
        </div>
        
        <!--navbar-head-->
        <div class="navbar-head">
            
            <h2 id="SpaceName"><?php echo $_SESSION['user_name']."个人空间" ?></h2>
        
    
            <!--导航-->
            <div class="navbar-nav">
                <ul>
                    <li><a href="<?php echo U('Userindex/personalSpace');?>" id="oBtnPzone">我的评论</a></li>
                    <!-- <li><a href="personalSpace-theme.html" id="oBtnTheme">我的主题</a></li> -->
                    <li><a href="<?php echo U('Userindex/personalPost');?>" id="oBtnPost">我的帖子</a></li>
                    <li><a href="<?php echo U('Userindex/personalCollect');?>" id="oBtnTheme">我的收藏</a></li>
                    <li><a href="<?php echo U('Userindex/personalInfo');?>" id="oBtnInfo" style="background:#28A2CA; color:white;">个人信息</a></li>
                    <li><a href="<?php echo U('Userindex/personalImg');?>" id="oBtnImg">修改头像</a></li>
                    <li><a href="<?php echo U('Userindex/personalPassword');?>" id="oBtnPassword">修改密码</a></li>
                </ul>
            </div>
        </div>
        
        
	</div>
    
    <!--内容-->
    <div class="PITwrap">
        
        <div class="PITwrap-con">
            
            <!--内容右侧PITwrap-con-left-->
            <div class="PITwrap-con-left">
                
                <!--个人信息-->
                <div class="personalInfo" id="pI">
                    <form class="pIform" id="pIf" method="post" action="/BBS/index.php/Home/Userindex/updateInfo">
                        
                        <div class="pI-name" id="pI-name">
                            <lable style="font-size:18px;">昵称：</lable>
                            <input type="text" name="name" style=" width:300px; height:25px; line-height:25px;" placeholder="<?php echo $_SESSION['user_name'];?>" maxlength="20" minlength="6" required oninvalid="setCustomValidity('必须是一个6-20位有效用户名');" oninput="setCustomValidity('');"/>
                        </div>
                        
                        <div class="pI-email" id="pI-email">
                            <lable style="font-size:18px;">邮箱：</lable>
                            <input type="text" name="e-mail" style=" width:300px; height:25px; line-height:25px;" placeholder="<?php echo $a['email'];?>" required oninvalid="setCustomValidity('必须是一个有效e-mail地址（e.g:user@gmail.com）');" oninput="setCustomValidity('');" />
                        </div>
                        
                        <div class="pI-phone" id="pI-phone">
                            <lable style="font-size:18px;">手机：</lable>
                            <input type="text" name="phone" style=" width:300px; height:25px; line-height:25px;" placeholder="<?php echo $a['phone'];?>" required pattern="(\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$" oninvalid="setCustomValidity('必须是一个有效的11位电话号码！');" oninput="setCustomValidity('');"/>
                        </div>
                        
<!--                         <div class="pI-s" id="pI-s">
                            <lable style="font-size:18px; float:left;">性别：</lable>
                            <div class="pure-u-1-3" >
                                <input type="radio" name="gender" checked="&quot;checked&quot;" value="0" />
                                <span>男&nbsp;</span>
                                <input type="radio" name="gender" false="" value="1" />
                                <span>女&nbsp;</span>
                            </div>
                        </div> -->
                        
                        <div class="pI-button">
                            <input type="submit" value="确定" class="button" />
                        </div>
                        
                    </form>
                </div>
            </div>

            <!--内容左侧PIwrap-con-right-->
            <div class="PIwrap-con-right">
                <div class="Pcr">
<!--                     <p><a href="<?php echo U('Userindex/userindex');?>"><img src="/BBS/Public/Images/img.png" style="width:150px; height:150px;" /></a></p> -->
                   <?php  $imgHref = U('Userindex/userindex'); $imgUrl1 = "C:/AppServ/www/BBS/Public/Uploads/".$_SESSION['user_name'].".JPG"; $url = U('Userindex/personalSpace'); if(is_file($imgUrl1)==ture){ $imgUrl = "/BBS/Public/Uploads/".$_SESSION['user_name'].".JPG"; }else{ $imgUrl = "/BBS/Public/Uploads/user.JPG"; } echo "<p><a href='$imgHref'><img src='$imgUrl' style='width:150px; height:150px;' /></a></p>"; ?>
                    <h2><a href="<?php echo U('Userindex/personalSpace');?>"><?php echo $_SESSION['user_name'] ;?></a></h2>
                </div>
            </div>
            
        </div>
        
    </div>
    
    <!--footer-->
    <div class="footer">
        <p class="copy">Copyright © 2016  All Rights Reserved.</p>
        <p class="copy">Powered by FZP</p>
    </div>
    
</body>
</html>