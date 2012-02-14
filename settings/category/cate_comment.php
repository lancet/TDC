<?php 
$setting['cate_models']['comment']=array (
  'id' => '8',
  'name' => 'comment',
  'description' => '话题评论',
  'perpage' => '12',
  'level' => '1',
  'hasattach' => '0',
  'built_in' => '0',
  'fields' => 
  array (
    34 => 
    array (
      'id' => '34',
      'name' => 'username',
      'description' => '评论人',
      'model' => '8',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    36 => 
    array (
      'id' => '36',
      'name' => 'tid',
      'description' => '被评论topic_id',
      'model' => '8',
      'type' => 'int',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '1',
      'editable' => '1',
    ),
    35 => 
    array (
      'id' => '35',
      'name' => 'content',
      'description' => '评论内容',
      'model' => '8',
      'type' => 'wysiwyg',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '2',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '34',
    1 => '36',
    2 => '35',
  ),
  'searchable' => 
  array (
    0 => '34',
    1 => '35',
  ),
);