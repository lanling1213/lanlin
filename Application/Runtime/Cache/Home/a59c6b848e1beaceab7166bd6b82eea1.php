<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="'en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <!--引入myFocus库-->
    <script type="text/javascript" src="/BBS/Public/Js/show.js"></script>
    <script type="text/javascript" src="/BBS/Public/Js/myfocus-2.0.1.min.js"></script>
   

    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/main.css" />
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
    
    <!--顶部toptb-->
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
            <div class="user">
                <div class="user-box">
                    <!-- <div class="user-nav">
                        <a id="a1" class="user-avatar" href="<?php echo U('Userindex/personalSpace');?>" onmousemove="move()" onmouseout="out()"><img src="/BBS/Public/Images/noavatar_middle.gif" alt="" width="50px" height="50px"  /></a> -->
                    <?php  $imgHref = U('Userindex/userindex'); $imgUrl1 = "C:/AppServ/www/BBS/Public/Uploads/".$_SESSION['user_name'].".JPG"; $url = U('Userindex/personalSpace'); if(is_file($imgUrl1)==ture){ $imgUrl = "/BBS/Public/Uploads/".$_SESSION['user_name'].".JPG"; }else{ $imgUrl = "/BBS/Public/Uploads/user.JPG"; } $url = U('Userindex/personalSpace'); echo "<a id='a1' class='user-avatar' href='$url' onmousemove='move()' onmouseout='out()'><img src='$imgUrl' alt='' width='50px' height='50px' /></a>"; ?>
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
        </div>


        <!--导航nav-->
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

    
    <!--notice--> 
    <div class="notice">

        <div class="ad">
            <div id="boxID"><!--焦点图盒子-->
              <div class="loading"><img src="/BBS/Public/Images/loading.gif" alt="请稍候..." /></div>
              <!--载入画面(可删除)-->
              <div class="pic"><!--内容列表(li数目可随意增减)-->
                <ul>
                  <li><a href="#"><img src="/BBS/Public/Images/ad2.jpg" thumb="" alt="" text="详细描述2" /></a></li>
                  <li><a href="#"><img src="/BBS/Public/Images/ad3.jpg" thumb="" alt="" text="详细描述3" /></a></li>
                  <li><a href="#"><img src="/BBS/Public/Images/ad4.jpg" thumb="" alt="" text="详细描述4" /></a></li>
                  <li><a href="#"><img src="/BBS/Public/Images/ad3.jpg" thumb="" alt="" text="详细描述5" /></a></li>
                </ul>
              </div>
            </div>
        </div>
        <!--ad-->

        <div class="show">
            
            <!--show标题-->
            <div class="show-tit" id="show-tit">
                <ul>
                    <li class="select"><a href="#">最新主题</a></li>
                    <li><a href="#">热门帖子</a></li>
                    <li><a href="#">最新回复</a></li>
                </ul>
            </div>
            
            <!--show内容-->
            <div class="show-con" id="show-con">
                <div class="mod" style="display:block">
                    <ul>
                        <?php
 $theme = D('theme'); $theme_info = $theme->order('theme_time desc')->limit(10)->select(); foreach($theme_info as $themeInfo){ $url_info = U('Content/content?themeID='.$themeInfo['theme_id']); echo "<li><a href='$url_info'>"; echo $themeInfo['theme_title']."</a></li>"; } ?>

                    </ul>
                </div>
                <div class="mod" style="display:none">
                    <ul>
                        <?php
 $post = M('post'); $post_info = $post->limit(10)->select(); foreach($post_info as $postInfo){ $post_url = U('Comment/comment?postid='.$postInfo['post_id']); echo "<li><a href='$post_url'>"; echo $postInfo['post_title']."</a></li>"; } ?>                       
                    </ul>
                </div>
                <div class="mod" style="display:none">
                    <ul>
                        <?php
 $comment = D('comment'); $comment_info = $comment->field('comment_detail,post_id')->order('comment_time desc')->limit(10)->select(); foreach($comment_info as $commentInfo){ $comment_url = U('Comment/comment?postid='.$commentInfo['post_id']); echo "<li><a href='$comment_url'>"; echo $commentInfo['comment_detail']."</a></li>"; } ?>  
                    </ul>
                </div>
            </div>
        </div>
        <!--show通知-->

        <div class="announcement">
            <div class="acm-head"><h2><a href="#">公告</a></h2></div>
            <div class="acm-li">
                <ul>
                    <?php
 $annou = D('annou'); $a = $annou->select(); foreach($a as $b){ echo "<li><a href=''>".$b['annou_title'] ."</a></li>"; } ?>
                </ul>
            </div>
        </div>
        <!--annoucement公告-->

    </div>
    
    
    <!--wrap-->
    <div class="wrap">   
        
        <div class="wrap_cont">
            
            <div class="post">
                
                <?php
 $plates = D('plates'); $sql = "SELECT a.plates_id,plates_title,moderator_name from bbs_moderator a ,bbs_plates b where a.plates_id = b.plates_id order by a.plates_id"; $plates_info = $plates->query($sql); foreach($plates_info as $platesInfo){ echo "<div class='post-li' id='li1' style='block'>"; echo "<div class='pl-head'>"; $content = U('Content/content?platesID='.$platesInfo['plates_id']); echo "<h2><a href='$content' id='pl1'>".$platesInfo['plates_title']."</a></h2>"; echo "<span>版主：".$platesInfo['moderator_name']."</span>"; echo "</div>"; echo "</div>"; $theme = D('theme'); $theme_info = $theme->where('plates_id=%d',$platesInfo['plates_id'])->select(); foreach($theme_info as $themeInfo){ echo "<div class='post-li' id='li1' style='block'>"; echo "<div class='pl-box'>"; echo "<ul>"; echo "<li class='pl-con' id='pl-con'>"; echo "<div class='pl-con-img'>"; echo "<a href=''><img src='/BBS/Public/Images/comment1.png' /></a>"; echo "</div>"; $themeId = U('Content/content?themeID='.$themeInfo['theme_id']); echo "<div class='pl-con-com'>"; echo "<h2><a href='$themeId'>".$themeInfo['theme_title']."</a></h2>"; echo "<p>".$themeInfo['theme_detail']."</p>"; echo "</div>"; $post = D('post'); $sql1="SELECT post_title,post_time,user_name,theme_id,post_good,post_bad from bbs_post a,bbs_user b WHERE a.user_id=b.user_id and a.theme_id=".$themeInfo['theme_id']." ORDER BY post_time desc LIMIT 1 "; $info = $post->query($sql1); foreach($info as $ab){ echo "<div class='pl-con-m'>"; echo "<span class='pl-con-m-xi'>".$ab['post_good']."个好评</span>"; echo "<span class='pl-con-m-gi'> /".$ab['post_bad']."个差评</span>"; echo "</div>"; echo "<div class='pl-con-r'>"; echo "<p class='r-tit'><a href='$url_info'>"; echo $ab['post_title']."</a></p>"; echo "<div class='r-con'>"; echo "<span>".$ab['post_time']."</span>"; echo " <a href='#'>".$ab['user_name']."</a>"; echo "</div>"; echo "</div>"; } echo "</li>"; echo "</ul>"; echo "</div>"; echo "</div>"; } } ?>
                
            </div>
            <!--post内容-->
        </div>
        <!--wrap_cont-->
        
    </div>
        
    
    <!--blogroll-->
    <div class="blogroll">
        <ul>
            <li><a href="#">百度</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            <li><a href="#">广东海洋大学</a></li>
            
        </ul>
    </div>
    
    <!--footer-->
    <div class="footer">
        <p class="copy">Copyright © 2016  All Rights Reserved.</p>
        <p class="copy">Powered by FZP</p>
    </div>
    
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