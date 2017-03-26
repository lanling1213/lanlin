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
    <div class="register">
        <div class="registerbox">
            
            <div class="registerbox_h">
                <h2>注册</h2>
            </div>
            
            <div class="registerbox_c">
                <form id="registerform" name="registerform" method="post" action="/BBS/Home/Login/userRegister">
                <div class="registerbox_l">
                    <ul class="mform_r">			
                        <li>
                            <label for="userId">账　号：</label>
                            <input type="text" name="userId" id="userId" maxlength="11" required  oninvalid="setCustomValidity('必须是一个小于11位有效账号');" oninput="setCustomValidity('');"/>
                        </li>
                        <li>
                            <label for="username">用户名：</label>
                            <input type="text" name="username" id="username" maxlength="20" minlength="6" required  oninvalid="setCustomValidity('必须是一个6-20位有效用户名');" oninput="setCustomValidity('');"/>
                        </li>
                        <li style="border:0;">
                            <label for="password">密　码：</label>
                            <input type="password" name="password" id="password" maxlength="20" minlength="6"  required oninvalid="setCustomValidity('必须是一个6-20位有效密码');" oninput="setCustomValidity('');"/>
                        </li>
                        <li>
                            <label for="e-mail">邮　箱：</label>
                            <input type="email" name="e-mail" id="e-mail" required oninvalid="setCustomValidity('必须是一个有效e-mail地址（e.g:user@gmail.com）');" oninput="setCustomValidity('');"/>
                        </li>
                        <li>
                            <label for="phone">手　机：</label>
                            <input type="text" name="phone" id="phone" required pattern="(\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$" oninvalid="setCustomValidity('必须是一个有效的11位电话号码！');" oninput="setCustomValidity('');"/></li>
                    </ul>
                    <p class="registerbox_c_login"><a href="<?php echo U('Login/login');?>">登录>></a></p>
                    <input type="submit" id="registerbtn" class="registerbtn" value="注  册">
                </div>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>