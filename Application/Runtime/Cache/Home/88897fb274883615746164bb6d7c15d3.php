<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="'en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/main.css" />
    <script type="text/javascript" src="/BBS/Public/Js/show.js"></script>
    <script type="text/javascript" src="/BBS/Public/Js/myfocus-2.0.1.min.js"></script>
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
            // alert("onload");
        }
    </script>
    <title>BBS论坛</title>
</head>
    
<body>
<!-- <input id="hid" value='<?php echo ($sessiofo); ?>' type="hidden"></input> -->
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
            <!-- <form id="Loginform"> -->
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

    
    <!--wrap-->
    <div class="wrap">
        
        <!--板块导航-->
        <div class="wrap-l">
            <div class="wrap-l_tbn">
            <h2>板块导航</h2>
            <?php
 $plates = D('plates'); $plates_info = $plates->select(); foreach($plates_info as $platesInfo){ echo "<dl class='' id=''>"; echo "<dt><a href=''>".$platesInfo['plates_title']."</a></dt>"; $theme = D('theme'); $theme_info = $theme->where('plates_id=%d',$platesInfo['plates_id'])->select(); foreach($theme_info as $themeInfo){ $themeId = U('Content/content?themeID='.$themeInfo['theme_id']); echo "<dd><a href='$themeId'>".$themeInfo['theme_title']."</a></dd>"; } echo "</dl>"; } ?>
            </div>
        </div>
        
        
        <div class="wrap-r">
            
            <!--主题简介  rm-->
            <div class="rm">
                <div class="rm-tit">
                    <h2><a href="#">【精彩校园】</a></h2>
                    <span class="rm-con">
                        <a href="#">收藏本版</a>
                        <span>|</span>
                        <a href="#">订阅</a>
                    </span>
                </div>
                
                <div class="rm-c">
                    <div class="rm-c-tit">
                        版主：
                        <span><a href="#">fzp</a></span>
                    </div>
                    <div class="rm-c-co">欢迎大家来到精彩校园版区</div>
                </div>
            </div>
            
            <!--发帖 pgt-->
            <div class="pgt">
               <!--  <a href="<?php echo U('AddPost/addPost?themeID='.$themeID);?>"><img src="/BBS/Public/Images/newpost.png"></a> -->
                <img src="/BBS/Public/Images/newpost.png" onclick="setfocus()">
            </div>
            
            <!--主题帖子 post——list-->
            <div class="post-list">
                
                <div class="p-l-tit">
                    <ul>
                        <li class="tf">帖子</li>
                        <li class="by">作者</li>
                        <li class="number">好评/差评</li>
                        <li class="by">发布时间</li>
                    </ul>
                </div>
                
                <!--帖子列表  p-l-c-->
                <div class="p-l-c">
                    <form id="moderate">
                        <ul>
<!--                             <li>
                                <div class="plc-img"><a href="#"><img src="/BBS/Public/Images/new.gif" title="有新回复-新窗口打开" /></a></div>
                                <div class="plc-tf">
                                    <a href="#">回顾海大80周年校庆的精彩画面</a>
                                </div>
                                <div class="plc-by">
                                    <p class="plc-by-name" id="plc-by-name"><a href="#">fzp</a></p>
                                    <p class="plc-by-time" id="plc-by-time">2015-12-30</p>
                                </div>
                                <div class="plc-num">
                                    <p><a href="#">4</a></p>
                                    <p>123</p>
                                </div>
                                <div class="plc-by">
                                    <p class="plc-by-rename" id="plc-by-rename"><a href="#">fff</a></p>
                                    <p class="plc-by-retime" id="plc-by-retime">2016-1-1</p>
                                </div>
                            </li> <?php echo ($platesID); ?> <?php echo ($themeID); ?> $themeID-->
                            <?php
 $post = D('post'); if($themeID){ $id = $themeID; }else{ $id = 0; } $sql = "select * from bbs_post a ,bbs_user b where a.user_id=b.user_id and a.theme_id=".$id; $post_info = $post->query($sql); foreach($post_info as $postInfo){ echo "<li>"; echo " <div class='plc-img'><a href=''><img src='/BBS/Public/Images/new.gif' title='有新回复-新窗口打开 '/></a></div>"; echo "<div class='plc-tf'>"; $post_url = U('Comment/comment?postid='.$postInfo['post_id']); echo "<a href='$post_url'>".$postInfo['post_title']."</a>"; echo "</div>"; echo "<div class='plc-by'>"; echo "<span class='plc-by-name' id='plc-by-name'><a href=''>".$postInfo['user_name']."</a></span>"; echo "</div>"; echo "<div class='plc-num'>"; echo "<span><a href=''>".$postInfo['post_good']."</a></span>"; echo "<span>"."/".$postInfo['post_bad']."</span>"; echo "</div>"; echo "<div class='plc-by'>"; echo "<span class='plc-by-time' id='plc-by-time'>".$postInfo['post_time']."</span>"; echo "</div>"; echo "</li>"; } ?>
                        </ul>
                    </form>
                </div>
                
                <div class="p-l-b">
                    <a href="#">下一页>></a>
                </div>
                
                <!--发帖图标-->
                <div class="pgt">
                 <!-- <a href="<?php echo U('AddPost/addPost?themeID='.$themeID);?>"><img src="/BBS/Public/Images/newpost.png"></a> -->
                    <img src="/BBS/Public/Images/newpost.png" onclick="setfocus()">
                </div>

                
            </div>
                
            
            <!--发帖-->
            <div id="f_pst" class="bm">
                <div class="bm_h">
                    <h2>快速发帖</h2>
                </div>

                <div class="bm_c">
                    <form method="post" autocomplete="off" id="fastpostform" action="/BBS/Home/AddPost/add" id="addPost">
                    
                        <div class="pbt cl">
                            <input type="text" id="subject" name="title" class="px" placeholder="标题" style="width: 25em; height: 22px; line-height: 22px; margin-bottom:5px;" />
                        </div>

                        <div class="textarea">
                            <textarea rows="13" cols="100" name="content"></textarea>   
                            <!-- <input type="text" width="1300" height="2000"> </input> -->
                        </div>
      
<!--                         <button type="submit" id="fastpostsubmit" class="pn pnc">
                            <strong>发表回复</strong>
                        </button> -->
                        <input type="hidden" name="themeID" value="<?php echo ($themeID); ?>"></input>
                        <input type="submit" value="Submit" />
                    </form>
<!--                     <form action="__Root__/Home/AddPost/add" method="post">
                         <p>主题: <input type="text" name="title" /></p>
                         <p>内容: <input type="text" name="content" /></p>
                        <input type="hidden" name="themeID" value="<?php echo ($themeID); ?>"></input>
                        <input type="submit" value="Submit" />
                    </form> -->
                </div>
            </div>
            
        </div>
            
    </div>

    <div class="footer">
        <p class="copy">Copyright © 2016  All Rights Reserved.</p>
        <p class="copy">Powered by FZP</p>
    </div>
        <script type="text/javascript">
            function setfocus(){
                document.getElementById("subject").focus();
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