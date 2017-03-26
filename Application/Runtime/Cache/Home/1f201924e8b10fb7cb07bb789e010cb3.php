<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="'en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <script type="text/javascript" src="/BBS/Public/Js/show.js"></script>
    <script type="text/javascript" src="/BBS/Public/Js/show.js"></script>
    <script type="text/javascript" src="/BBS/Public/Js/myfocus-2.0.1.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/main.css" />
    <script type="text/javascript" src="/BBS/Public/Js/jquery.min.js"></script>
    <script type="text/javascript">
        window.onload = function(){
            $("p").hide();
            var a = $("p").html();
            if(a){
                $("#Loginform").hide();
                $("#userindex").show();
            }else{
                $("#Loginform").show();
                $("#userindex").hide();
                /*alert("onload");*/
            }
             
        }
    </script>

    <script type="text/javascript">
        myFocus.set({
            id:'boxID',//焦点图盒子ID
            pattern:'mF_fancy',//风格应用的名称
            time:3,//切换时间间隔(秒)
            trigger:'click',//触发切换模式:'click'(点击)/'mouseover'(悬停)
            width:350,//设置图片区域宽度(像素)
            height:300,//设置图片区域高度(像素)
            txtHeight:'default'//文字层高度设置(像素),'default'为默认高度，0为隐藏
        });
        
        function move() {
            var ul = document.getElementById("head");
            ul.style.display = "";
        }
        function out() {
            var ul = document.getElementById("head");
            ul.style.display = "none";
        }
    </script>
    <title>BBS论坛</title>
    <style type="text/css">
        .friends { height:400px; min-height: 450px; }
        .friendsInfo { height: 55px; line-height: 55px; padding: 0 20px;  background: #D0ECF3;}
        .friendsInfo span { padding-left: 50px; font-size: 16px; }
        .friendsPostList { height: 390px;  }
        .friendsPostList h2 { height: 35px; line-height: 35px; padding: 10px 30px;; font-size: 16px; border-bottom: 1px solid gray;}
        .friendsPostList ul { padding: 10px 20px; }
        .friendsPostList li { height: 35px; line-height: 35px; border-bottom: 1px dashed gray; }
    </style>
</head>
     
<body>
    <p ><?php echo $_SESSION['user_name']?></p>   
    <!--顶部-->
    <div id="toptb" class="c1">
        <div class="wp">
            <div class="z">
                <a href="" onclick="setHomepage('');">设为首页</a>
                <a href="" onclick="addFavorite(this.href, '');">收藏本站</a>
            </div>
            <div class="y">
                
            </div>
        </div>
    </div>
    
    
    <div class="navbar">
        <!--logo-->
        <div class="hd">
            <div class="hdc"><h2><a href="index.html">BBS论坛</a></h2></div>

            <form id="Loginform" action="/BBS/Home/Login/userLogin" method="post">
                <div class="hdlogin">
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="ls_username">帐号</label>
                                </td>
                                <td>
                                    <input type="text" name="username" id="username" class="px vm xg1" placeholder="用户名/Email" required>
                                </td>
                                <td><a href="<?php echo U('Login/register');?>" class="xi2 xw1"><input type="button" value="注册"  class="pn vm" style="width: 75px;"/></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="password">密码</label>
                                </td>
                                <td>
                                    <input type="password" name="password" id="password" required class="px vm" />
                                </td>
                                <td class="fastlg_l">
                                    <button type="submit" class="pn vm" style="width: 75px;"><em>登录</em></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>

            <div class="user" id="userindex">
                <div class="user-box">
                    <!-- <div class="user-nav">
                        <a id="a1" class="user-avatar" href="<?php echo U('Userindex/personalSpace');?>" onmousemove="move()" onmouseout="out()"><img src="/BBS/Public/Images/noavatar_middle.gif" alt="" width="50px" height="50px"  /></a> -->
                    <?php  $imgHref = U('Userindex/userindex'); $imgUrl1 = "C:/AppServ/www/BBS/Public/Uploads/".$_SESSION['user_name'].".JPG"; $url = U('Userindex/personalSpace'); if(is_file($imgUrl1)==ture){ $imgUrl = "/BBS/Public/Uploads/".$_SESSION['user_name'].".JPG"; }else{ $imgUrl = "/BBS/Public/Uploads/user.JPG"; } echo "<a id='a1' class='user-avatar' href='$url' onmousemove='move()' onmouseout='out()'><img src='$imgUrl' alt='' width='50px' height='50px' /></a>"; ?>
                        <div class="user-nav-submenu"  >
                          <ul id="head" class="plain" style="display: none;" onmousemove="move()" onmouseout="out()">
    <!--                             <li><a href="#" >个人信息</a></li>
                            <li><a href="#" >我的主题</a></li>
                            <li><a href="#" >我的帖子</a></li>
                            <li><a href="#" >我喜欢的</a></li> -->
                            <li><a href="<?php echo U('Userindex/personalInfo');?>" id="oBtnInfo">个人信息</a></li>
                            <li><a href="<?php echo U('Userindex/personalPost');?>" id="oBtnPost">我的帖子</a></li>
                            <li><a href="<?php echo U('Userindex/personalSpace');?>" >我的评论</a></li>
                            <li><a href="<?php echo U('Login/out');?>">注销</a></li>
                          </ul>
                        </div>
                </div>
            </div>

        </div>


        <!--nav-->
        <div class="nav">
            <ul class="" id="">
                <li><a href="<?php echo U('Index/index');?>" >首页</a></li>
                <li><a href="<?php echo U('Content/content');?>" >板块</a></li>
                <li><a href="#" >社团</a></li>
            </ul>
        </div>


        <!--search-->
        <div class="search">
            <form class="search_form" id="search_form" action="/BBS/Home/Index/search" method="post">
                <table cellSpacing="0" cellPadding="0">
                    <tr>
                        <td class="sch_txt_td"><input id="sch_txt" class="xg1" name="content" type="text" placeholder="请输入搜索内容" /></td>
                        <td class="sch_type_td">
                            <select id="sch_type" class="xg1" name="flag" style=" wight:60px; height:25px;">
                                <option value ="帖子">帖子</option>
                                <option value ="用户">用户</option>
                            </select>
                        </td>
                        <td class="sch_btn_td"><input type="submit" id="sch_btn" class="sch_btn" value="搜索" style="width:60px; height:25px;" /></td>
                    </tr>
                </table>
            </form>
        </div>
    
    </div>
        
    <!--内容-->
    <div class="wpcl">
        
        <div class="friends" id="">
            
            <div class="friendsInfo">
                <?php
 $user = D('user'); $user_info = $user->field('user_name,user_email,user_phone')->where('user_id=%d',$userID)->select(); foreach($user_info as $userInfo){ echo "<span>用户名：".$userInfo['user_name']."</span>"; echo " <span>手机号码：".$userInfo['user_phone']."</span>"; echo " <span>手机号码：".$userInfo['user_email']."</span>"; } ?>

            </div>
            
            <div class="friendsPostList">
                <h2><?php echo $user_info[0]['user_name'] ;?>用户发表的帖子：</h2>
                <ul>
                    <!-- <li><a href="">ffffakhallafhafh</a></li>
                    <li><a href="">ffffakhallafhafh</a></li>
                    <li><a href="">ffffakhallafhafh</a></li>
                    <li><a href="">ffffakhallafhafh</a></li> -->
                    <?php
 $post = D('post'); $post_info = $post->field('post_title,post_id')->where('user_id=%d',$userID)->select(); foreach($post_info as $postInfo){ echo "<li>"; $postUrl = U('Home/Comment/comment?postid='.$postInfo['post_id']); echo "<a href='$postUrl'>".$postInfo['post_title']."</a>"; echo "</li>"; } ?>
                </ul>
            </div>
            
        </div>
        
    </div>
    
    
    <!--底部-->
    <div class="footer">
        <p class="copy">Copyright © 2016  All Rights Reserved.</p>
        <p class="copy">Powered by FZP</p>
    </div>

</body>
</html>