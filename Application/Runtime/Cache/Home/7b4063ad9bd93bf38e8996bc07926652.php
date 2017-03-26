<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="'en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
<!--     <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
        <script type="text/javascript" src="js/jquery-browser.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.qqFace.js" charset="utf-8"></script> -->
    <script type="text/javascript" src="/BBS/Public/Js/qqFace.js"></script>
    <script type="text/javascript" src="/BBS/Public/Js/jquery.min.js"></script>
    <script type="text/javascript" src="/BBS/Public/Js/jquery-browser.js"></script>
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
            <div class="y">
                
            </div>
        </div>
    </div>
    
    <div class="navbar">
        
        <!--logo-->
        <div class="hd">
            <div class="hdc"><h2><a href="<?php echo U('Index/index');?>">BBS论坛</a></h2></div>
        </div>
        
        <!--navbar-head-->
        <div class="navbar-head">
            
            <h2 id="SpaceName"><?php echo $_SESSION['user_name']."个人空间" ?></h2>
        
    
            <!--导航-->
            <div class="navbar-nav">
                <ul>
                    <li><a href="<?php echo U('Userindex/personalSpace');?>" id="oBtnPzone" style="background:#28A2CA; color:white;">我的评论</a></li>
                    <!-- <li><a href="personalSpace-theme.html" id="oBtnTheme">我的主题</a></li> -->
                    <li><a href="<?php echo U('Userindex/personalPost');?>" id="oBtnPost">我的帖子</a></li>
                    <li><a href="<?php echo U('Userindex/personalCollect');?>" id="oBtnTheme">我的收藏</a></li>
                    <li><a href="<?php echo U('Userindex/personalInfo');?>" id="oBtnInfo">个人信息</a></li>
                    <li><a href="<?php echo U('Userindex/personalImg');?>" id="oBtnImg">修改头像</a></li>
                    <li><a href="<?php echo U('Userindex/personalPassword');?>" id="oBtnPassword">修改密码</a></li>
                </ul>
            </div>
        </div>
        
        
	</div>
    
    <!--内容-->
    <div class="PIwrap">
        
        <div class="PIwrap-con">
            
            <div class="PIwrap-con-left">
                <div class="Pcl">
                    
                    <div class="Pcl-h">
                        <h1>我的评论</h1>
                    </div>
                    
                    <div class="t1">
                        <form id="themeform">
                            <table cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr class="tfh" style="height: 35px; line-height: 35px;">
                                        <th>帖子</th>
                                        <td class="frm">作者</td>
                                        <td class="evaluate">好评/差评</td>
                                        <td class="time">发帖时间</td>
                                    </tr>
                                    <?php  $post = D('post'); $sql ="select * from bbs_post a ,bbs_user b where a.user_id = b.user_id and a.post_id in(select post_id from bbs_comment where user_id = ".$_SESSION['user_id'].")" ; $post_info = $post->query($sql); foreach($post_info as $postInfo){ echo "<tr class='tfc'>"; $post_url = U('Comment/comment?postid='.$postInfo['post_id']); echo "<td class='tfc-postName'><a href='$post_url'>".$postInfo['post_title']."</a></td>"; echo "<td class='tfc-from'>".$postInfo['user_name']."</td>"; echo "<td class='tfc-com'>".$postInfo['post_good']."/".$postInfo['post_bad']."</td>"; echo "<td class='tfc-time'>".$postInfo['post_time']."</td>"; echo "</tr>"; } ?>
<!--                                     <tr class="tfh">
                                        <th>帖子</th>
                                        <td class="frm">作者</td>
                                        <td class="num">好评/差评</td>
                                        <td class="num">好评/差评</td>
                                    </tr>
                                    <tr class="tfc">
                                        <td class="tfc-postName"><a href="">毕业啦</a></td>
                                        <td class="tfc-from">faf</td>
                                        <td class="tfc-com">32/2</td>
                                        <td class="tfc-time">2016-6-1 10:11:11</td>
                                        
                                    </tr>
                                    <tr class="tfc">
                                        <td class="tfc-postName"><a href="">毕业啦毕业啦毕业啦</a></td>
                                        <td class="tfc-from">asf</td>
                                        <td class="tfc-com">32/2</td>
                                        <td class="tfc-time">2016-6-1 15:11:11</td>
                                        
                                    </tr>
                                    <tr class="tfc">
                                        <td class="tfc-postName"><a href="">毕业啦毕业啦毕业啦</a></td>
                                        <td class="tfc-from">affas</td>
                                        <td class="tfc-com">32/2</td>
                                        <td class="tfc-time">2016-6-1 15:11:11</td>
                                        
                                    </tr> -->

                                </tbody>
                            </table>
                        </form>
                    </div>
                    
                </div>
            </div>
            
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
    
    <script type="text/javascript">
        $(function(){
            $('.emotion').qqFace({
                id : 'facebox', 
                assign:'saytext', 
                path:'images/arclist/'	//表情存放的路径
            });
            $(".sub_btn").click(function(){
                var str = $("#saytext").val();
                $("#show").html(replace_em(str));
            });
        });
    </script>
</body>
</html>