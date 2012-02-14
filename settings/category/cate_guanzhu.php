<?php 
$setting['cate_models']['guanzhu']=array (
  'id' => '17',
  'name' => 'guanzhu',
  'description' => '关注沙龙',
  'perpage' => '12',
  'level' => '1',
  'hasattach' => '0',
  'built_in' => '0',
  'fields' => 
  array (
    97 => 
    array (
      'id' => '97',
      'name' => 'slid',
      'description' => '沙龙id',
      'model' => '17',
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
    98 => 
    array (
      'id' => '98',
      'name' => 'name',
      'description' => '关注者昵称',
      'model' => '17',
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
    99 => 
    array (
      'id' => '99',
      'name' => 'time',
      'description' => '开始关注时间',
      'model' => '17',
      'type' => 'datetime',
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
    0 => '97',
    1 => '98',
    2 => '99',
  ),
  'searchable' => 
  array (
    0 => '97',
    1 => '98',
    2 => '99',
  ),
);