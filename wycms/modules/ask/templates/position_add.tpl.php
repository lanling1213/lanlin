<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"<?php echo L('input').L('posid_name')?>",onfocus:"<?php echo L('posid_name').L('not_empty')?>"}).inputValidator({min:1,max:999,onerror:"<?php echo L('posid_name').L('not_empty')?>"});
})
//-->
</script>
<div class="pad_10">
<div class="common-form">
<form name="myform" action="?m=ask&c=position&a=add" method="post" id="myform">
<table width="100%" class="table_form contentWrap">
<tr>
<td  width="80"><?php echo L('posid_name')?></td> 
<td><input type="text" name="info[name]" value="<?php echo $info[name]?>" class="input-text" id="name"></input></td>
</tr>
<tr>
<td><?php echo L('posid_typeid')?></td> 
<td><?php echo select_type('ask_type_' . SITEID, 0, 'name="info[typeid]" id="typeid"',L('please_select_parent_type'), SITEID);?></td>
</tr>

<tr>
<td><?php echo L('listorder')?></td> 
<td><input type="text" name="info[listorder]" id="listorder" class="input-text" size="5" value=""></input></td>
</tr> 

<tr>
<td><?php echo L('上传对应图')?></td> 
<td><?php echo form::images('info[thumb]', 'thumb', '', 'thumb','','30')?></td>
</tr> 
</table>

    <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="<?php echo L('submit')?>" class="dialog" id="dosubmit">
</form>
<div class="explain-col">
<?php echo L('position_tips')?>
</div>
</div></div>
</body>
</html>
