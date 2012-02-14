<?php 
$setting['cate_models']['childtopic']=array (
  'id' => '11',
  'name' => 'childtopic',
  'description' => '沙龙子话题',
  'perpage' => '12',
  'level' => '1',
  'hasattach' => '0',
  'built_in' => '0',
  'fields' => 
  array (
    75 => 
    array (
      'id' => '75',
      'name' => 'fromsalon',
      'description' => '来自沙龙',
      'model' => '11',
      'type' => 'select_from_model',
      'length' => '0',
      'values' => 'salon|theme',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    76 => 
    array (
      'id' => '76',
      'name' => 'title',
      'description' => '话题标题',
      'model' => '11',
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
    77 => 
    array (
      'id' => '77',
      'name' => 'content',
      'description' => '话题内容',
      'model' => '11',
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
    90 => 
    array (
      'id' => '90',
      'name' => 'lecturer',
      'description' => '主讲嘉宾',
      'model' => '11',
      'type' => 'select_from_model',
      'length' => '0',
      'values' => 'guest|nickname',
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
    0 => '75',
    1 => '76',
    2 => '77',
    3 => '90',
  ),
  'searchable' => 
  array (
    0 => '75',
    1 => '76',
    2 => '77',
    3 => '90',
  ),
);