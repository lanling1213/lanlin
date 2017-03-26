<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>发帖</title>
</head>
<form action="/BBS/index.php/Home/AddPost/add" method="post">
  <p>主题: <input type="text" name="title" /></p>
  <p>内容: <input type="text" name="content" /></p>
  <input type="hidden" name="themeID" value="<?php echo ($themeID); ?>"></input>
  <input type="submit" value="Submit" />
</form>
</body>
</html>