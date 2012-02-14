<script src="js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script src="js/colorPicker/colorpicker.js" type="text/javascript"></script>
<script src="js/dili_utility/jquery.ld.js" type="text/javascript"></script>
<link rel="stylesheet" media="screen" type="text/css" href="js/colorpicker/css/colorpicker.css" />
<div class="headbar">
	<div class="position">
    	<span>内容管理</span><span>></span>
        <span><?php echo $model['description']; ?></span>
    </div>
	<div class="operating" style="position:relative; overflow:visible ">
    	<a href="javascript:void(0)" onclick="selectAll('id[]');"><button class="operating_btn" type="button"><span class="sel_all">全选</span></button></a>
		<a class="hack_ie" href="<?php echo backend_url('content/form','model='.$model['name']); ?>"><button class="operating_btn" type="button"><span class="addition">添加</span></button></a>
        <a href="javascript:void(0)" onclick="multi_delete();"><button class="operating_btn" type="button"><span class="delete">批量删除</span></button></a>
        <?php if($model['searchable']) : ?>
            <a href="javascript:void(0)" onclick="$('#content_search_form').slideToggle('slow');" ><button class="operating_btn" type="button"><span class="remove">筛选</span></button></a>
            <div id="content_search_form">
                <form method="post" action="<?php echo backend_url('content/view','model='.$model['name']); ?>">
                    <table class="form_table">
                        <colgroup><col width="150px"><col></colgroup><tbody>
                        <?php foreach($model['searchable'] as $v): ?>
                        <tr>
                            <td><?php echo $model['fields'][$v]['description']; ?></td>
                            <td>
                            	<?php 
									if(in_array($model['fields'][$v]['type'],array('select','checkbox','radio','select_from_model','radio_from_model','checkbox_from_model','linked_menu','datetime','colorpicker')))  
									{
										$this->form->display($model['fields'][$v],(isset($provider['where'][$model['fields'][$v]['name']]) ? $provider['where'][$model['fields'][$v]['name']]  : '') , false);
				
									}
									else
									{
										echo $this->form->_input($model['fields'][$v] ,(isset($provider['where'][$model['fields'][$v]['name']]) ? $provider['where'][$model['fields'][$v]['name']] : '' ));
									}
								?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td></td>
                            <td><button class="submit" type="submit"><span>搜索</span></button></td>
                        </tr>
                    </tbody></table>
                </form>
            </div>
        <?php endif; ?>
		<?php $this->plugin_manager->trigger_operation(); ?>
	</div>
	<div class="field">
		<table class="list_table">
			<col width="40px" />
			<col />
			<thead>
				<tr>
                	<th></th>
					<?php foreach($model['listable'] as $v): ?>
        			<th><?php echo $model['fields'][$v]['description']; ?></th>
    				<?php endforeach; ?>
                    <th>操作选项</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<div class="content">
	<form id="content_list_form" method="post" action="<?php echo backend_url('content/del','model='.$model['name']); ?>">
		<table id="list_table" class="list_table">
			<col width="40px" />
			<col />
			<tbody>
            <?php foreach($provider['list'] as $v) : ?>
            	<tr>
                	<td><input type="checkbox" name="id[]" value="<?php echo $v->id; ?>" /></td>
					<?php foreach($model['listable'] as $vt): ?>
                    <td>
                    <?php
                        if($model['fields'][$vt]['type'] == 'radio' || $model['fields'][$vt]['type'] == 'select')
                        {
                            echo isset($model['fields'][$vt]['values'][$v->$model['fields'][$vt]['name']]) ?  $model['fields'][$vt]['values'][$v->$model['fields'][$vt]['name']] : 'undefined' ;
                        }
                        else if($model['fields'][$vt]['type'] == 'checkbox')
                        {
                            foreach(explode(',',$v->$model['fields'][$vt]['name']) as $t)
                            {
                                echo isset($model['fields'][$vt]['values'][$t]) ?  $model['fields'][$vt]['values'][$t].'<br />' : 'undefined'.'<br />';
                            }
                        }
						else if($model['fields'][$vt]['type'] == 'radio_from_model')
						{
							$options = explode('|',$model['fields'][$vt]['values']);
                            $this->settings->load('category/data_'.$options[0]);
                            $setting = &setting('category');
                            echo isset($setting[$options[0]][$v->$model['fields'][$vt]['name']][$options[1]]) ? $setting[$options[0]][$v->$model['fields'][$vt]['name']][$options[1]] : 'undefined' ;
						}
						else if($model['fields'][$vt]['type'] == 'checkbox_from_model')
						{
							$options = explode('|',$model['fields'][$vt]['values']);
                            $this->settings->load('category/data_'.$options[0]);
                            $setting = &setting('category');
							$checkbox_values = explode(',',$v->$model['fields'][$vt]['name']);
							foreach($checkbox_values as $checkbox)
							{
                            	echo isset($setting[$options[0]][$checkbox][$options[1]]) ? $setting[$options[0]][$checkbox][$options[1]].'<br />' : 'undefined<br />' ;
							}
						}
						else if($model['fields'][$vt]['type'] == 'select_from_model')
                        {
                            $options = explode('|',$model['fields'][$vt]['values']);
                            $this->settings->load('category/data_'.$options[0]);
                            $setting = &setting('category');
                            echo isset($setting[$options[0]][$v->$model['fields'][$vt]['name']][$options[1]]) ? $setting[$options[0]][$v->$model['fields'][$vt]['name']][$options[1]] : 'undefined' ;	
                        }else if($model['fields'][$vt]['type'] == 'linked_menu')
                        {
                            $options = explode('|',$model['fields'][$vt]['values']);
                            $this->settings->load('category/data_'.$options[0]);
                            $setting = &setting('category');
                            $temp_out = explode('|',$v->$model['fields'][$vt]['name']);
                            foreach($temp_out as &$t)
                            {
                                $t = str_replace(',','',$t);
                                $temp = explode('-',$t);
                                foreach($temp as &$tt)
                                {
                                    $tt = (isset($setting[$options[0]][$tt][$options[1]]) ? $setting[$options[0]][$tt][$options[1]] : 'undefined');
                                }
                                $t = implode('-',$temp);
                            }
                            echo implode(',',$temp_out);
                        }
                        else
                        {
                            echo $v->$model['fields'][$vt]['name'];	
                        }
                     ?>
                    </td>
                 <?php endforeach; ?>
                    <td>
                    	<a href="<?php echo backend_url('content/form/','model='.$model['name'].'&id='.$v->id); ?>"><img class="operator" src="images/icon_edit.gif" alt="修改" title="修改"></a>
                        <a class="confirm_delete" href="<?php echo backend_url('content/del','model='.$model['name'].'&id='.$v->id); ?>"><img class="operator" src="images/icon_del.gif" alt="删除" title="删除"></a>
                    </td>
                </tr>
            <?php endforeach; ?>
			</tbody>
		</table>
        </form>
</div>
<div class="pages_bar pagination"><?php echo $provider['pagination']; ?></div>
<script language="javascript">
	var confirm_str = '是否要删除所选信息？\n此操作还会删除附件等关联信息!';
	$('a.confirm_delete').click(function(){
		return confirm(confirm_str);	
	});
	function multi_delete()
	{
		if($(":checkbox[name='id[]']:checked").length  <= 0)
		{
				alert('请先选择要删除的信息!');
				return false;
		}
		else
		{
			if(confirm(confirm_str))
			{
				$('#content_list_form').submit();
			}
			else
			{
				return false;	
			}
		}
	}
</script>
<script src="js/dili_utility/content_form.js" type="text/javascript"></script>
<?php $this->plugin_manager->trigger_model_action('register_list_view', $provider['list']); ?>
