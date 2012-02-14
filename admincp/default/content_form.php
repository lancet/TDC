<script src="js/xheditor/xheditor-zh-cn.min.js" type="text/javascript"></script>
<script src="js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script src="js/colorPicker/colorpicker.js" type="text/javascript"></script>
<script src="js/dili_utility/jquery.ld.js" type="text/javascript"></script>
<link rel="stylesheet" media="screen" type="text/css" href="js/colorpicker/css/colorpicker.css" />
<script src="js/dili_utility/content_form.js" type="text/javascript"></script>
<div class="headbar">
	<div class="position">
    	<span>内容管理</span><span>></span>
        <span><?php echo $model['description']; ?></span>
        <span>></span>
        <span><?php echo $button_name = (isset($content['id']) ? '修改' : '添加'); ?></span>
    </div>
    <div class="operating" style="overflow:visible">
    	<?php if($model['hasattach']): ?>
		<div class="search f_r" style="position:relative">
			<button class="btn" type="button" hidefocus="true"  onclick="$('#dili_uploader').toggle('slow');"><span class="add">附件列表</span></button>
            <?php $this->load->view('sys_uploader'); ?>
		</div>
        <?php endif; ?>
        <a class="hack_ie" href="<?php echo backend_url('content/view','model='.$model['name']); ?>">
        	<button class="operating_btn" type="button">
            	<span>返回列表</span>
            </button>
        </a>
    </div>
</div>
<div class="content_box">
	<div class="content form_content">
		<form action="<?php echo backend_url('content/save','model='.$model['name'].'&id='.(isset($content['id']) ? $content['id'] : '')); ?>"  method="post">
			<table class="form_table" >
				<col width="150px" />
				<col />
				<?php foreach( $model['fields'] as $v) :  ?>
                <?php if($v['editable']): ?>
                <tr>
					<th> <?php echo $v['description'];?>：</th>
					<td>
						<?php $this->form->display($v , isset($content[$v['name']]) ? $content[$v['name']] : ''); ?>
						<?php echo form_error($v['name']); ?>
                    </td>
				</tr>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php $this->plugin_manager->trigger_model_action('register_view', $content); ?>
				<tr>
					<th></th>
					<td>
                    	<?php if($model['hasattach']): ?>
                        <?php $this->form->show_hidden('uploadedfile','0',true); ?>
                        <?php endif; ?>
                    	<button class="submit" type='submit'><span><?php echo $button_name; ?></span></button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

