<?php 
$setting['cate_models']['branch']=array (
  'id' => '5',
  'name' => 'branch',
  'description' => '分会（俱乐部品牌）',
  'perpage' => '12',
  'level' => '1',
  'hasattach' => '1',
  'built_in' => '0',
  'fields' => 
  array (
    10 => 
    array (
      'id' => '10',
      'name' => 'name',
      'description' => '分会名称',
      'model' => '5',
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
    13 => 
    array (
      'id' => '13',
      'name' => 'introduce',
      'description' => '分会介绍',
      'model' => '5',
      'type' => 'wysiwyg',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '1',
      'editable' => '1',
    ),
    52 => 
    array (
      'id' => '52',
      'name' => 'createtime',
      'description' => '创建时间',
      'model' => '5',
      'type' => 'datetime',
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
    0 => '10',
    1 => '13',
    2 => '52',
  ),
  'searchable' => 
  array (
    0 => '10',
    1 => '13',
    2 => '52',
  ),
);