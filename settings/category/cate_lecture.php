<?php 
$setting['cate_models']['lecture']=array (
  'id' => '14',
  'name' => 'lecture',
  'description' => '演讲',
  'perpage' => '12',
  'level' => '1',
  'hasattach' => '0',
  'built_in' => '0',
  'fields' => 
  array (
    67 => 
    array (
      'id' => '67',
      'name' => 'fsalon',
      'description' => '来自沙龙',
      'model' => '14',
      'type' => 'radio_from_model',
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
    68 => 
    array (
      'id' => '68',
      'name' => 'title',
      'description' => '题目',
      'model' => '14',
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
    69 => 
    array (
      'id' => '69',
      'name' => 'lecturer',
      'description' => '主讲人',
      'model' => '14',
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
    70 => 
    array (
      'id' => '70',
      'name' => 'content',
      'description' => '内容介绍',
      'model' => '14',
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
    0 => '67',
    1 => '68',
    2 => '69',
    3 => '70',
  ),
  'searchable' => 
  array (
    0 => '67',
    1 => '68',
    2 => '69',
    3 => '70',
  ),
);