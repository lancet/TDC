<?php 
$setting['cate_models']['salon']=array (
  'id' => '4',
  'name' => 'salon',
  'description' => '沙龙',
  'perpage' => '12',
  'level' => '1',
  'hasattach' => '1',
  'built_in' => '0',
  'fields' => 
  array (
    37 => 
    array (
      'id' => '37',
      'name' => 'theme',
      'description' => '主题',
      'model' => '4',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    82 => 
    array (
      'id' => '82',
      'name' => 'isWonderful',
      'description' => '精彩沙龙',
      'model' => '4',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '否',
        1 => '是',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    85 => 
    array (
      'id' => '85',
      'name' => 'stime',
      'description' => '沙龙时间',
      'model' => '4',
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
    12 => 
    array (
      'id' => '12',
      'name' => 'fhid',
      'description' => '来自分会',
      'model' => '4',
      'type' => 'select_from_model',
      'length' => '0',
      'values' => 'branch|name',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '1',
      'editable' => '1',
    ),
    47 => 
    array (
      'id' => '47',
      'name' => 'introduction',
      'description' => '介绍',
      'model' => '4',
      'type' => 'wysiwyg',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '3',
      'editable' => '1',
    ),
    49 => 
    array (
      'id' => '49',
      'name' => 'location',
      'description' => '活动地点',
      'model' => '4',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '*',
      'searchable' => '1',
      'listable' => '1',
      'order' => '5',
      'editable' => '1',
    ),
    50 => 
    array (
      'id' => '50',
      'name' => 'showtime',
      'description' => '本期/预期/往期',
      'model' => '4',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '本期',
        1 => '预期',
        2 => '往期',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '6',
      'editable' => '1',
    ),
    51 => 
    array (
      'id' => '51',
      'name' => 'createtime',
      'description' => '创建时间',
      'model' => '4',
      'type' => 'datetime',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '7',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '37',
    1 => '82',
    2 => '85',
    3 => '12',
    4 => '47',
    5 => '49',
    6 => '50',
    7 => '51',
  ),
  'searchable' => 
  array (
    0 => '82',
    1 => '85',
    2 => '12',
    3 => '47',
    4 => '49',
    5 => '50',
  ),
);