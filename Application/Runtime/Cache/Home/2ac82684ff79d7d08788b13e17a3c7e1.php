<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="'en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
<!--     <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/main.css" />
    <script type="text/javascript" src="/BBS/Public/Js/show.js"></script>
    <script type="text/javascript" src="/BBS/Public/Js/myfocus-2.0.1.min.js"></script>
<!--     <script type="text/javascript" src="js/show.js"></script>
    <script type="text/javascript" src="js/myfocus-2.0.1.min.js" charset="utf-8"></script> --><!--引入myFocus库-->
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
</head>
    
<body>
    <p ><?php echo ($sessinfo); ?></p>   
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
                                <td><a href="<?php echo U('Login/register');?>" class="xi2 xw1"><input type="button" value="注册" class="pn vm" style="width: 75px;"/></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="password">密码</label>
                                </td>
                                <td>
                                    <input type="password" name="password" id="password" class="px vm" required/>
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
                            <a id="a1" class="user-avatar" href="<?php echo U('Userindex/personalSpace');?>" onmousemove="move()" onmouseout="out()"><img src="/BBS/Public/Images/noavatar_middle.gif" alt="" width="50px" height="50px" string(27) "/BBS/Public/Uploads/lan.JPG"  /></a> -->
                        <?php  $imgHref = U('Userindex/userindex'); $imgUrl1 = "C:/AppServ/www/BBS/Public/Uploads/".$_SESSION['user_name'].".JPG"; $url = U('Userindex/personalSpace'); if(is_file($imgUrl1)==ture){ $imgUrl = "/BBS/Public/Uploads/".$_SESSION['user_name'].".JPG"; }else{ $imgUrl = "/BBS/Public/Uploads/user.JPG"; } echo "<a id='a1' class='user-avatar' href='$url' onmousemove='move()' onmouseout='out()'><img src='$imgUrl' alt='' width='50px' height='50px' /></a>"; ?>
                            <div class="user-nav-submenu"  >
                              <ul id="head" class="plain" style="display: none;" onmousemove="move()" onmouseout="out()">
    <!--                             <li><a href="#" >个人信息</a></li>
                                <li><a href="#" >我的主题</a></li>
                                <li><a href="#" >我的帖子</a></li>
                                <li><a href="#" >我喜欢的</a></li> -->
                                <li><a href="<?php echo U('Userindex/personalInfo');?>" id="oBtnInfo">个人信息</a></li>
                                <li><a href="<?php echo U('Userindex/personalPost');?>" id="oBtnPost">我的帖子</a></li>
                                <li><a href="#" >我喜欢的</a></li>
                                <li><a href="<?php echo U('Login/out');?>">注销</a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
        </div>

        
        <!--nav-->
    <!--     <div class="nav">
            <ul class="" id="">
                <li><a href="index.html" >首页</a></li>
                <li><a href="#" >板块</a></li>
                <li><a href="#" >社团</a></li>
            </ul>
        </div> -->
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
        
        <!--发帖图标-->
        <div class="wpcl-pgt">
            <a href="#"><img src="/BBS/Public/Images/newpost.png"></a>
        </div>
        <!--评论列表-->
        <div class="wpcl-postlist" id="wpcl-postlist">

            <?php
 $post = D('post'); $sql = "select * from bbs_post a ,bbs_user b where a.user_id=b.user_id and a.post_id = ".$postID; $post_info = $post->query($sql); foreach($post_info as $postInfo){ echo"<table cellspacing='0' cellpadding='0'>"; echo "<tbody>"; echo " <tr>"; echo "<td class='wpcl-pl-l'>"; echo "<div class='wpcl-pl-l-hm'>"; echo "<span class='cg1'>好评</span>"; echo "<span class='ci1'>".$postInfo['post_good']."</span>"; echo "<span class='pipe'>|</span>"; echo "<span class='cg1'>差评</span>"; echo "<span class='ci1'>".$postInfo['post_bad']."</span>"; echo "</div>"; echo "</td>"; echo "<td class='wpcl-pl-r'>"; echo "<h2 class='ts'><span id='thread_subject'>".$postInfo['post_title']."</span></h2>"; echo " </td>"; echo "</tr>"; echo "</tbody>"; echo "</table>"; echo "<div class='pl-space>'</div>"; echo "<div class='post_1'>"; echo " <table id='pid1' class='plhin' cellspacing='0' cellpadding='0'>"; echo " <tbody>"; echo " <tr>"; echo "<td class='pljin-l p-con'>"; echo " <div class='peop'>"; echo "<div class='p-name'><a href=''>".$postInfo['user_name']."</a></div>"; echo "<div class='p-img'><a href=''><img src='/BBS/Public/Images/noavatar_middle.gif'></a></div>"; echo "</div>"; echo "</td>"; echo "<td class='pljin-r p-con'>"; echo "<div class='p-r-con1'>"; echo " <div class='con-pi'>"; echo "<img src='/BBS/Public/Images/online_member.gif'>"; echo " <em>发表于<span title='2016-1-1 0:00:00'>".$postInfo['post_time']."</span></em>"; echo " <strong id='con-pi-number'>楼主</strong>"; echo "</div>"; echo "<div class='con-pct'>"; echo "<div class='con-pct-comment'>".$postInfo['post_detail']."</div>"; echo "<div class='con-pct-btn'>"; $goodPost = U('UserPost/goodPost?postID='.$postInfo['post_id']); echo "<a href='$goodPost' id='' title='好评'><i><img src='/BBS/Public/Images/good.png'  />好评</i></a>"; $badPost = U('UserPost/badPost?postID='.$postInfo['post_id']); echo "<a href='$badPost' id='' title='差评'><i><img src='/BBS/Public/Images/bad.png' />差评</i></a>"; $collectPost =U('UserPost/collectPost?postID='.$postInfo['post_id']); echo "<a href=' $collectPost' id='' title='收藏'><i><img src='/BBS/Public/Images/collection.png' />收藏</i></a>"; echo " </div>"; echo "<div class='con-pct-reply'>"; echo "<a onclick='setfocus()' id='' title='回复'><i><img src='/BBS/Public/Images/comment.png' />回复</i></a>"; echo "</div>   " ; echo "</div>"; echo "</div> "; echo "</td>"; echo "</tr>"; echo " </tbody>"; echo "</table>"; echo "<div class='pl-space'></div>"; echo "</div>"; } ?>
            
            <?php
 $comment = D('comment'); $sql1 = "select * from bbs_comment a,bbs_user b where a.user_id = b.user_id and a.post_id = ".$postID." ORDER BY comment_time desc"; $i = 0; $comment_info = $comment->query($sql1); foreach($comment_info as $commentInfo){ echo "<div class='post_1'>"; echo " <table id='pid1' class='plhin' cellspacing='0' cellpadding='0'>"; echo " <tbody>"; echo " <tr>"; echo "<td class='pljin-l p-con'>"; echo " <div class='peop'>"; echo "<div class='p-name'><a href=''>".$commentInfo['user_name']."</a></div>"; echo "<div class='p-img'><a href=''><img src='/BBS/Public/Images/noavatar_middle.gif'></a></div>"; echo "</div>"; echo "</td>"; echo "<td class='pljin-r p-con'>"; echo "<div class='p-r-con'>"; echo " <div class='con-pi'>"; echo "<img src='/BBS/Public/Images/online_member.gif'>"; echo " <em>发表于<span title='2016-1-1 0:00:00'>".$commentInfo['comment_time']."</span></em>"; echo " <strong id='con-pi-number'>".$i."楼</strong>"; echo "</div>"; echo "<div class='con-pct'>"; echo "<table>"; echo "<tbody>"; echo "  <tr>"; echo " <td>".$commentInfo['comment_detail']."</td>"; echo "</tr>"; echo "</tbody>"; echo "</table>"; echo "</div>"; echo "</div> "; echo "</td>"; echo "</tr>"; echo " </tbody>"; echo "</table>"; echo "<div class='pl-space'></div>"; echo "</div>"; $i++; } ?>
		
		<div class="p-l-b" style="width:1024px;">
			<a href="#">下一页>></a>
		</div>


        
		<!--发帖-->
		<div id="f_pst" class="bm" style="margin-top:-5px;">
			<div class="bm_h">
				<h2>快速回复</h2>
			</div>

			<div class="bm_c">
				<form method="post" autocomplete="off" id="fastpostform" action="/BBS/index.php/Home/Comment/commentPost">

					<div class="textarea">
						<textarea rows="13" cols="100" name="commentPost" id="commentPost"></textarea>   
					</div>

					<button type="submit" id="fastpostsubmit" class="pn pnc">
						<strong>发表回复</strong>
					</button>
                    <input type="hidden" name="postid" value="<?php echo ($postID); ?>">
				</form>
			</div>
		</div>
		
    </div>
    
	
	<!--底部-->
    <div class="footer">
        <p class="copy">Copyright © 2016  All Rights Reserved.</p>
        <p class="copy">Powered by FZP</p>
    </div>

    <script type="text/javascript">
        function setfocus(){
            document.getElementById("commentPost").focus();
        }
    </script>
    
    <script>
        (function Table(){
            var oBtn1 = document.getElementById('pl1');
            var oBtn2 = document.getElementById('pl2');
            var oBtn3 = document.getElementById('pl3');
            var oBtn4 = document.getElementById('pl4');
            var oPanel1 = document.getElementById('li1');
            var oPanel2 = document.getElementById('li2');
            var oPanel3 = document.getElementById('li3');
            var oPanel4 = document.getElementById('li4');
            
            oBtn1.onclick = function(){
                oPanel1.style.display="block";
                oPanel2.style.display="none";
                oPanel3.style.display="none";
                oPanel4.style.display="none";
            }
            oBtn2.onclick = function(){
                oPanel1.style.display="none";
                oPanel2.style.display="block";
                oPanel3.style.display="none";
                oPanel4.style.display="none";
            }
            oBtn3.onclick = function(){
                oPanel1.style.display="none";
                oPanel2.style.display="none";
                oPanel3.style.display="block";
                oPanel4.style.display="none";
            }
            oBtn4.onclick = function(){
                oPanel1.style.display="none";
                oPanel2.style.display="none";
                oPanel3.style.display="none";
                oPanel4.style.display="block";
            }
        })();
    </script>
</body>
</html>