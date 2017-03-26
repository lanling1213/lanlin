<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
            <div class="y">
                
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
                    <li><a href="<?php echo U('Userindex/personalCollect');?>" id="oBtnTheme" style="background:#28A2CA; color:white;">我的收藏</a></li>
                    <li><a href="<?php echo U('Userindex/personalInfo');?>" id="oBtnInfo">个人信息</a></li>
                    <li><a href="<?php echo U('Userindex/personalImg');?>" id="oBtnImg">修改头像</a></li>
                    <li><a href="<?php echo U('Userindex/personalPassword');?>" id="oBtnPassword" >修改密码</a></li>
                </ul>
            </div>
        </div>
        
        
	</div>
    
    <!--内容-->
    <div class="PITwrap">
        
        <div class="PITwrap-con">
            
            <div class="PITwrap-con-left">
                <div class="Pcl">
                    
                    <div class="Pcl-h">
                        <h1>我的收藏</h1>
                    </div>
                    
                    <div class="t1">
                        <form id="themeform">
                            <table cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr class="tfh">
                                        <th>帖子</th>
                                        
                                        <td class="time"><cite>收藏时间</cite></td>
                                        <td class="delete">操作</td>
                                    </tr>
                                    <?php
 $collect = D('collect'); $sql = "SELECT * from bbs_collect a , bbs_post b where a.post_id = b.post_id and a.user_id = ".$_SESSION['user_id']; $collect_info = $collect->query($sql); foreach($collect_info as $collectInfo){ echo "<tr class='tfc' id=''>"; $postUrl = U('Comment/comment?postid='.$collectInfo['post_id']); echo "<td class='tfc-postName'><a href='$postUrl'>".$collectInfo['post_title']."</a></td>"; echo "<td class='tfc-time'>".$collectInfo['collect_time']."</td>"; $postUrl = U('UserPost/deleteCollect?collectid='.$collectInfo['collect_id']); echo "<td class='tfc-delete'><a href='$postUrl'>取消收藏</a></td>"; echo "</tr>"; } ?>
<!--                                     <tr>
                                        <td colspan="5">
                                            <p class="emp">还没有相关内容</p>
                                        </td>
                                    </tr>  -->
                                </tbody>
                            </table>
                        </form>
                    </div>
                    
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