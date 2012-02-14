<?php 
$setting['cate_models']['usercom']=array (
  'id' => '9',
  'name' => 'usercom',
  'description' => '评论用户',
  'perpage' => '12',
  'level' => '1',
  'hasattach' => '0',
  'built_in' => '0',
  'fields' => 
  array (
    39 => 
    array (
      'id' => '39',
      'name' => 'username',
      'description' => '评论用户名',
      'model' => '9',
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
    40 => 
    array (
      'id' => '40',
      'name' => 'commented',
      'description' => '被评论者',
      'model' => '9',
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
    41 => 
    array (
      'id' => '41',
      'name' => 'content',
      'description' => '评论内容',
      'model' => '9',
      'type' => 'wysiwyg',
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
  ),
  'listable' => 
  array (
    0 => '39',
    1 => '40',
    2 => '41',
  ),
  'searchable' => 
  array (
    0 => '39',
    1 => '40',
    2 => '41',
  ),
);