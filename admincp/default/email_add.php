<div class="headbar">
	<div class="position"><span>插件</span><span>></span><span>邮件订阅插件</span><span>></span><span>发送邮件</span></div>
</div>
<div class="content_box">
	<div class="content form_content">
		<form action="<?php echo backend_url('email/sent'); ?>"  method="post">
			<table class="form_table"  >
				<col width="150px" />
				<col />
				
                
                <tr>
					<th> 邮件主题：</th>
					<td><input name="title" type="text" class="txbx" value="" /></td>
				</tr>
                <tr>
					<th> 邮件内容：</th>
					<td><textarea name="content" type="text" class="txbx" value=""></textarea></td>
				</tr>
               
				<tr>
					<th></th>
					<td>
						<button class="submit" type='submit'><span>发送</span></button>
					</td>
				</tr>
			</table>
		</form>
        
	</div>
</div>