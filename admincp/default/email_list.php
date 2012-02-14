<div class="headbar">
	<div class="position"><span>插件</span><span>></span><span>插件管理</span><span>></span><span>邮件订阅插件</span></div>
	<div class="operating">
    	<a class="hack_ie" href="javascript:void(0)" onclick="selectAll('id[]');"><button class="operating_btn" type="button"><span class="sel_all">全选</span></button></a>
		
        <a class="hack_ie" onclick="operate_plugins('<?php echo backend_url('email/add'); ?>');" href="javascript:void(0);"><button class="operating_btn" type="button"><span class="recover">发送邮件</span></button></a>
       
	</div>
	<div class="field">
		<table class="list_table">
			<col width="40px" />
			<col />
			<thead>
				<tr>
                	<th></th>
					<th>已订阅用户名</th>
					<th>email</th>
                    
                    
                   
				</tr>
			</thead>
		</table>
	</div>
</div>

<div class="content">
		<form method="post" action="" id="plugin_list_form">
		<table id="list_table" class="list_table">
			<col width="40px" />
			<col />
			<tbody>
            <?php foreach($list as $v) : ?>
            	<tr>
                	<td><input type="checkbox" name="id[]" value="<?php echo $v->email; ?>" /></td>
                	<td><?php echo $v->username; ?></td>
                    
                    <td><?php echo $v->email; ?></td>
                   
                   
                </tr>
            <?php endforeach; ?>
			</tbody>
		</table>
        </form>
</div>
<script language="javascript">
	$('a.confirm_delete').click(function(){
		return confirm('是否要卸载所选插件？');	
	});
	
	function selected_plugins()
	{
		if($(":checkbox[name='id[]']:checked").length  <= 0)
		{
				alert('请先选择要操作的插件!');
				return false;
		}
		return true;
	}
	
	function operate_plugins(action)
	{
		if(selected_plugins())
		{
				$('#plugin_list_form').attr('action',action).submit();
		}
		return false;
	}
	
</script>