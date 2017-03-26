<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
<!--     <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/BBS/Public/Css/main.css" />
    <title>BBS论坛</title>
</head>
    
<body>
    
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

    <!--注册-->
    <div class="login">
        <div class="loginbox">
            
            <div class="loginbox_h">
                <h2>登录</h2>
            </div>
            
            <div class="loginbox_c">
                <form id="loginform" name="loginform" method="post" action="/BBS/Home/Login/userLogin">
                    <div class="loginbox_l">
                        <ul class="mform_r">			
                            <li>
                                <input type="text" name="username" id="username" placeholder="用户名/账号" required oninvalid="setCustomValidity('必须填写！');" oninput="setCustomValidity('');" />
                            </li><br>
                            <li>
                                <input type="password" name="password" id="password" placeholder="密码" required />
                            </li>
                        </ul>

                    </div>
                    <p class="loginbox_c_reg"><a href="<?php echo U('Login/register');?>">注册>></a></p>
                    <input type="submit" id="loginbtn" class="loginbtn" value="登录">
                </form>
                
            </div>
        </div>
    </div>

    
</body>
</html>