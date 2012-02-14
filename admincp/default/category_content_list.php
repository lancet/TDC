<div class="headbar">
	<div class="position">
    	<span>分类管理</span><span>></span>
        <span><?php echo $model['description']; ?></span>
        <?php if($provider['path']): ?>
		<?php foreach($provider['path'] as $v): ?>
        <span>></span><span><?php echo $v; ?></span>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
	<div class="operating">
    	<a href="javascript:void(0)" onclick="selectAll('classid[]');"><button class="operating_btn" type="button"><span class="sel_all">全选</span></button></a>
		<a class="hack_ie" href="<?php echo backend_url('category_content/form','model='.$model['name'].'&u_c_level='.$provider['where']['u_c_level']); ?>"><button class="operating_btn" type="button"><span class="addition">添加</span></button></a>
        <a href="javascript:void(0)" onclick="multi_delete();"><button class="operating_btn" type="button"><span class="delete">批量删除</span></button></a>
        <?php if($provider['next_level'] > 1): ?>
        <a class="hack_ie" href="<?php echo backend_url('category_content/view','model='.$model['name'].'&u_c_level='.($provider['parent'] ? $provider['parent']->parentid  : '0')); ?>"><button class="operating_btn" type="button"><span class="grade">返回上一级</span></button></a>
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
	<form id="category_content_list_form" method="post" action="<?php echo backend_url('category_content/del','model='.$model['name']); ?>">
		<table id="list_table" class="list_table">
			<col width="40px" />
			<col />
			<tbody>
            <?php foreach($provider['list'] as $v) : ?>
            	<tr>
                	<td><input type="checkbox" name="classid[]" value="<?php echo $v->classid; ?>" /></td>
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
							
							//$this->session->set_userdata('field_options',$setting[$options[0]][$v->$model['fields'][$vt]['name']][$options[1]]);
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
                    	<?php if( $provider['next_level'] < $model['level'] ): ?>
                        	<a href="<?php echo backend_url('category_content/view/','model='.$model['name'].'&u_c_level='.$v->classid); ?>">进入子分类</a>
                            <a href="<?php echo backend_url('category_content/form/','model='.$model['name'].'&u_c_level='.$v->classid); ?>"><img class="operator" src="images/icon_add.gif" alt="添加" title="添加"></a>
                        <?php endif; ?>
                    	<a href="<?php echo backend_url('category_content/form/','model='.$model['name'].'&id='.$v->classid); ?>"><img class="operator" src="images/icon_edit.gif" alt="修改" title="修改"></a>
                        <a class="confirm_delete" href="<?php echo backend_url('category_content/del','model='.$model['name'].'&classid='.$v->classid); ?>"><img class="operator" src="images/icon_del.gif" alt="删除" title="删除"></a>
                    </td>
                </tr>
            <?php endforeach; ?>
			</tbody>
		</table>
        </form>
</div>
<div class="pages_bar pagination"><?php echo $provider['pagination']; ?></div>
<script language="javascript">
	var confirm_str = '是否要删除所选分类？\n此操作还会删除该分类下属分类，以及这些分类的附件等关联信息!';
	$('a.confirm_delete').click(function(){
		return confirm(confirm_str);	
	});
	function multi_delete()
	{
		if($(":checkbox[name='classid[]']:checked").length  <= 0)
		{
				alert('请先选择要删除的分类!');
				return false;
		}
		else
		{
			if(confirm(confirm_str))
			{
				$('#category_content_list_form').submit();	
			}
			else
			{
				return false;	
			}
		}
	}
</script>
<?php $this->plugin_manager->trigger_model_action('register_list_view', $provider['list']); ?>