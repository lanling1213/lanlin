<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="'en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
<!--     <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/main.css"> -->
        <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/main.css" />
    <script type="text/javascript" src="/BBS/Public/Js/jquery.min.js"></script>
    <title>BBS论坛</title>
    <script type="text/javascript">
        function checkPass(){
            var pass1 = $("#password1");
            var pass2 = $("#password2");
            if(pass1.val() !=pass2.val()){
                alert("二次密码不一致");
            }
        }
    </script>
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
                    <li><a href="<?php echo U('Userindex/personalInfo');?>" id="oBtnInfo">个人信息</a></li>
                    <li><a href="<?php echo U('Userindex/personalImg');?>" id="oBtnImg">修改头像</a></li>
                    <li><a href="<?php echo U('Userindex/personalPassword');?>" id="oBtnPassword" style="background:#28A2CA; color:white;">修改密码</a></li>
                </ul>
            </div>
        </div>

	</div>
    
    
    <!--内容-->
    <div class="PITwrap">
        
        <div class="PITwrap-con">
            
            <div class="PITwrap-con-left">

                <!--修改密码-->
                <div class="pI-pw" id="pI-pw">
                 <form id="PersonalPass" action="/BBS/index.php/Home/Userindex/updatePassword" method="post">
                    <ul>
                        <li>
                            <lable>旧的密码：</lable>
                            <input type="password" name="oldpassword" required style=" width:300px; height:25px; line-height:25px;" />
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <lable>新的密码：</lable>
                            <input type="password" name="newpassword1" required id="password1" style=" width:300px; height:25px; line-height:25px;" />
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <lable>确定密码：</lable>
                            <input type="password" name="newpassword2"  required id="password2" style=" width:300px; height:25px; line-height:25px;" />
                        </li>
                    </ul>
                    <!-- <input class="pass-button" type="button" value="确定" onclick="checkPass()" style="width:70px; height:35px;" /> -->
                     <button type="submit" class="pass-button" style="width:70px; height:35px;" onclick="checkPass()" ><em>确定</em></button>
                </form>
                </div>
                
            </div>
            
            <div class="PIwrap-con-right">
                <div class="Pcr">
                    <!-- <p><a href="<?php echo U('Userindex/userindex');?>"><img src="/BBS/Public/Images/img.png" style="width:150px; height:150px;" /></a></p> -->
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