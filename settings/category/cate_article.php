<?php 
$setting['cate_models']['article']=array (
  'id' => '6',
  'name' => 'article',
  'description' => '文章',
  'perpage' => '12',
  'level' => '1',
  'hasattach' => '1',
  'built_in' => '0',
  'fields' => 
  array (
    29 => 
    array (
      'id' => '29',
      'name' => 'title',
      'description' => '文章题目',
      'model' => '6',
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
    83 => 
    array (
      'id' => '83',
      'name' => 'ispass',
      'description' => '是否通过审核',
      'model' => '6',
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
    89 => 
    array (
      'id' => '89',
      'name' => 'ishot',
      'description' => '是否热点',
      'model' => '6',
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
    31 => 
    array (
      'id' => '31',
      'name' => 'author',
      'description' => '作者',
      'model' => '6',
      'type' => 'input',
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
    30 => 
    array (
      'id' => '30',
      'name' => 'content',
      'description' => '文章内容',
      'model' => '6',
      'type' => 'wysiwyg',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '2',
      'editable' => '1',
    ),
    58 => 
    array (
      'id' => '58',
      'name' => 'type',
      'description' => '文章分类',
      'model' => '6',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => 'aDev',
        1 => 'D2前端技术论坛',
        2 => 'iDataForum',
        3 => 'iDevOps',
        4 => 'TCon测试技术论坛',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '*',
      'searchable' => '0',
      'listable' => '1',
      'order' => '3',
      'editable' => '1',
    ),
    59 => 
    array (
      'id' => '59',
      'name' => 'virtue',
      'description' => '性质',
      'model' => '6',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '原创',
        1 => '转载',
        2 => '翻译',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '4',
      'editable' => '1',
    ),
    60 => 
    array (
      'id' => '60',
      'name' => 'summary',
      'description' => '摘要',
      'model' => '6',
      'type' => 'textarea',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '5',
      'editable' => '1',
    ),
    61 => 
    array (
      'id' => '61',
      'name' => 'formal',
      'description' => '是否为草稿',
      'model' => '6',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '文章',
        1 => '草稿',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '6',
      'editable' => '1',
    ),
    53 => 
    array (
      'id' => '53',
      'name' => 'createtime',
      'description' => '创建时间',
      'model' => '6',
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
    0 => '29',
    1 => '83',
    2 => '89',
    3 => '31',
    4 => '30',
    5 => '58',
    6 => '59',
    7 => '60',
    8 => '61',
    9 => '53',
  ),
  'searchable' => 
  array (
    0 => '83',
    1 => '89',
    2 => '30',
    3 => '60',
  ),
);