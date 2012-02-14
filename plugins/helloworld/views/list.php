<form action="<?php echo $this->_url('save'); ?>" method="post">
<div class="headbar">
	<div class="position"><span>随变编辑器</span><span>></span><span>编辑器配置</span></div>
	<div class="operating" style="position:relative; overflow:visible ">
		<a><button  class="operating_btn" type="submit"><span class="addition">保存</span></button></a>
    </div>
    <div class="field">
		<table class="list_table">
			<col width="40px" />
			<col />
			<thead>
				<tr>
                	<th>启用?</th>
					<th>标识</th>
                    <th>名称</th>
                    <th>文件名</th>
                    <th>完整初始化</th>
                    <th>简单初始化</th>
                    <th>删除</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<div class="content">
		<table id="list_table" class="list_table">
			<col width="40px" />
			<col />
			<tbody>
            <?php foreach($list as $key => $v) : ?>
            	<tr>
                	<td><input type="radio" name="default" <?php echo $default == $key ? 'checked="checked"' : '' ?>  value="<?php echo $key; ?>" /></td>
                	<td><input class="small" name="editors[list][<?php echo $key; ?>][id]" value="<?php echo $key; ?>" /></td>
                    <td><input class="small" name="editors[list][<?php echo $key; ?>][name]" value="<?php echo $v['name']; ?>" /></td>
                    <td><input class="small" name="editors[list][<?php echo $key; ?>][script_name]" value="<?php echo $v['script_name']; ?>" /></td>
                    <td><textarea style="width:150px;height:40px" name="editors[list][<?php echo $key; ?>][init_full_script]"><?php echo $v['init_full_script']; ?></textarea></td>
                    <td><textarea style="width:150px;height:40px" name="editors[list][<?php echo $key; ?>][init_mini_script]"><?php echo $v['init_mini_script']; ?></textarea></td>
                    <td><a href="javascript:void(0);" onclick="$(this).parent().parent().remove();">删除</a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                	<td>添加新</td>
                	<td><input class="small" name="editors[list][_new_][id]" value="" /></td>
                    <td><input class="small" name="editors[list][_new_][name]" value="" /></td>
                    <td><input class="small" name="editors[list][_new_][script_name]" value="" /></td>
                    <td><textarea style="width:150px;height:40px" name="editors[list][_new_][init_full_script]"></textarea></td>
                    <td><textarea style="width:150px;height:40px" name="editors[list][_new_][init_mini_script]"></textarea></td>
            </tr>
			</tbody>
		</table>
</div>
</form>