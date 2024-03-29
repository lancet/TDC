<?php 
$setting['cate_models']['guest']=array (
  'id' => '1',
  'name' => 'guest',
  'description' => '用户',
  'perpage' => '10',
  'level' => '1',
  'hasattach' => '1',
  'built_in' => '0',
  'fields' => 
  array (
    1 => 
    array (
      'id' => '1',
      'name' => 'username',
      'description' => '用户名',
      'model' => '1',
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
    2 => 
    array (
      'id' => '2',
      'name' => 'password',
      'description' => '密码',
      'model' => '1',
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
    57 => 
    array (
      'id' => '57',
      'name' => 'plant',
      'description' => '来自哪个平台',
      'model' => '1',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '淘宝',
        1 => '新浪微博',
        2 => 'QQ微博',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '*',
      'searchable' => '1',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    84 => 
    array (
      'id' => '84',
      'name' => 'isrss',
      'description' => '是否订阅',
      'model' => '1',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        1 => '是',
        0 => '否',
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
    86 => 
    array (
      'id' => '86',
      'name' => 'chenghao',
      'description' => '嘉宾称号',
      'model' => '1',
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
    87 => 
    array (
      'id' => '87',
      'name' => 'instruction',
      'description' => '嘉宾介绍',
      'model' => '1',
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
    88 => 
    array (
      'id' => '88',
      'name' => 'ishere',
      'description' => '是否签到',
      'model' => '1',
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
    100 => 
    array (
      'id' => '100',
      'name' => 'blog',
      'description' => '微博',
      'model' => '1',
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
    14 => 
    array (
      'id' => '14',
      'name' => 'nickname',
      'description' => '昵称',
      'model' => '1',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '*',
      'searchable' => '1',
      'listable' => '1',
      'order' => '1',
      'editable' => '1',
    ),
    66 => 
    array (
      'id' => '66',
      'name' => 'picture',
      'description' => '头像',
      'model' => '1',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '1',
      'editable' => '1',
    ),
    9 => 
    array (
      'id' => '9',
      'name' => 'ident',
      'description' => '身份（来自哪个分会）',
      'model' => '1',
      'type' => 'select_from_model',
      'length' => '0',
      'values' => 'branch|name',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '*',
      'searchable' => '1',
      'listable' => '1',
      'order' => '2',
      'editable' => '1',
    ),
    15 => 
    array (
      'id' => '15',
      'name' => 'email',
      'description' => '邮件',
      'model' => '1',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required|valid_email',
      'ruledescription' => '*',
      'searchable' => '1',
      'listable' => '1',
      'order' => '3',
      'editable' => '1',
    ),
    42 => 
    array (
      'id' => '42',
      'name' => 'phone',
      'description' => '手机',
      'model' => '1',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '4',
      'editable' => '1',
    ),
    16 => 
    array (
      'id' => '16',
      'name' => 'position',
      'description' => '职位',
      'model' => '1',
      'type' => 'input',
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
    17 => 
    array (
      'id' => '17',
      'name' => 'company',
      'description' => '公司',
      'model' => '1',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '6',
      'editable' => '1',
    ),
    43 => 
    array (
      'id' => '43',
      'name' => 'city',
      'description' => '城市',
      'model' => '1',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '杭州',
        1 => '北京',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '*',
      'searchable' => '1',
      'listable' => '1',
      'order' => '7',
      'editable' => '1',
    ),
    64 => 
    array (
      'id' => '64',
      'name' => 'workyear',
      'description' => '工作年限',
      'model' => '1',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '0',
        1 => '1',
        2 => '2',
        3 => '3',
        4 => '4',
        5 => '5',
        6 => '6',
        7 => '7',
        8 => '8',
        9 => '9',
        10 => '10',
        11 => '>10',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '7',
      'editable' => '1',
    ),
    65 => 
    array (
      'id' => '65',
      'name' => 'attention',
      'description' => '关注的技术领域',
      'model' => '1',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '7',
      'editable' => '1',
    ),
    44 => 
    array (
      'id' => '44',
      'name' => 'technology',
      'description' => '技术领域',
      'model' => '1',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '前端',
        1 => '后台',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '*',
      'searchable' => '1',
      'listable' => '1',
      'order' => '8',
      'editable' => '1',
    ),
    46 => 
    array (
      'id' => '46',
      'name' => 'speach_date',
      'description' => '演讲时间',
      'model' => '1',
      'type' => 'datetime',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '讲师填写',
      'searchable' => '1',
      'listable' => '1',
      'order' => '9',
      'editable' => '1',
    ),
    45 => 
    array (
      'id' => '45',
      'name' => 'type',
      'description' => '用户类别',
      'model' => '1',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        0 => '普通用户',
        1 => '嘉宾',
        2 => '讲师',
      ),
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '*',
      'searchable' => '1',
      'listable' => '1',
      'order' => '10',
      'editable' => '1',
    ),
    62 => 
    array (
      'id' => '62',
      'name' => 'label',
      'description' => '标签',
      'model' => '1',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '11',
      'editable' => '1',
    ),
    18 => 
    array (
      'id' => '18',
      'name' => 'time',
      'description' => '注册时间',
      'model' => '1',
      'type' => 'datetime',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '12',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '1',
    1 => '2',
    2 => '57',
    3 => '84',
    4 => '86',
    5 => '87',
    6 => '88',
    7 => '100',
    8 => '14',
    9 => '66',
    10 => '9',
    11 => '15',
    12 => '42',
    13 => '16',
    14 => '17',
    15 => '43',
    16 => '64',
    17 => '65',
    18 => '44',
    19 => '46',
    20 => '45',
    21 => '62',
    22 => '18',
  ),
  'searchable' => 
  array (
    0 => '1',
    1 => '2',
    2 => '57',
    3 => '84',
    4 => '86',
    5 => '87',
    6 => '88',
    7 => '100',
    8 => '14',
    9 => '9',
    10 => '15',
    11 => '16',
    12 => '17',
    13 => '43',
    14 => '64',
    15 => '44',
    16 => '46',
    17 => '45',
  ),
);