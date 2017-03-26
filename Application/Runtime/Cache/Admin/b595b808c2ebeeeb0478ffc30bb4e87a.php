<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="'en">
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">

<link rel="stylesheet" type="text/css" href="/BBS/Public/Css/xgxt_login.css" />
<title>后台管理系统</title>
</head>
<body>

<div id="header">
	<div class="header_title">
		<span class="title_con">后台管理系统</span>
	</div>
</div>

<div id="content">
	<center>
    <form action="/BBS/Admin/Login/login" method="post">
		<div class="con">
		<div class="con_title">
			<span class="con_title_sp">欢迎后台管理系统</span>
		</div>
		<div class="con_panel">
			<div class="con_input">
				<span>用户名：</span><input type="text" name="name" placeholder="用户名" required />
			</div>
			<div class="con_input">
				<span>密&nbsp;&nbsp;&nbsp;&nbsp;码：</span><input type="password" name="password" placeholder="密码" required  />
			</div>
			<div class="con_select">
				
				<input type="radio" name="flag" value="moderator" checked />版主
				<input type="radio" name="flag" value="manager" />管理员
			</div>
			<input type="submit" value="登    录" class="submit-btn"/>
		</div>
	</div>
    </form>
	</center>
</div>
</body>
</html>