<?php 
$setting['menus']=array (
  0 => 
  array (
    'menu_id' => '1',
    'class_name' => 'system',
    'method_name' => 'home',
    'menu_name' => '系统',
    'sub_menus' => 
    array (
      0 => 
      array (
        'menu_id' => '2',
        'class_name' => 'system',
        'method_name' => 'home',
        'menu_name' => '后台首页',
        'sub_menus' => 
        array (
          0 => 
          array (
            'menu_id' => '3',
            'class_name' => 'system',
            'method_name' => 'home',
            'menu_name' => '后台首页',
          ),
        ),
      ),
      1 => 
      array (
        'menu_id' => '4',
        'class_name' => 'setting',
        'method_name' => 'site',
        'menu_name' => '系统设置',
        'sub_menus' => 
        array (
          0 => 
          array (
            'menu_id' => '5',
            'class_name' => 'setting',
            'method_name' => 'site',
            'menu_name' => '站点设置',
          ),
          1 => 
          array (
            'menu_id' => '6',
            'class_name' => 'setting',
            'method_name' => 'backend',
            'menu_name' => '后台设置',
          ),
          2 => 
          array (
            'menu_id' => '7',
            'class_name' => 'system',
            'method_name' => 'password',
            'menu_name' => '修改密码',
          ),
          3 => 
          array (
            'menu_id' => '8',
            'class_name' => 'system',
            'method_name' => 'cache',
            'menu_name' => '更新缓存',
          ),
        ),
      ),
      2 => 
      array (
        'menu_id' => '9',
        'class_name' => 'model',
        'method_name' => 'view',
        'menu_name' => '模型管理',
        'sub_menus' => 
        array (
          0 => 
          array (
            'menu_id' => '10',
            'class_name' => 'model',
            'method_name' => 'view',
            'menu_name' => '内容模型管理',
          ),
          1 => 
          array (
            'menu_id' => '11',
            'class_name' => 'category',
            'method_name' => 'view',
            'menu_name' => '分类模型管理',
          ),
        ),
      ),
      3 => 
      array (
        'menu_id' => '12',
        'class_name' => 'plugin',
        'method_name' => 'view',
        'menu_name' => '插件管理',
        'sub_menus' => 
        array (
          0 => 
          array (
            'menu_id' => '13',
            'class_name' => 'plugin',
            'method_name' => 'view',
            'menu_name' => '插件管理',
          ),
        ),
      ),
      4 => 
      array (
        'menu_id' => '14',
        'class_name' => 'role',
        'method_name' => 'view',
        'menu_name' => '权限管理',
        'sub_menus' => 
        array (
          0 => 
          array (
            'menu_id' => '15',
            'class_name' => 'role',
            'method_name' => 'view',
            'menu_name' => '用户组管理',
          ),
          1 => 
          array (
            'menu_id' => '16',
            'class_name' => 'user',
            'method_name' => 'view',
            'menu_name' => '用户管理',
          ),
        ),
      ),
    ),
  ),
  1 => 
  array (
    'menu_id' => '17',
    'class_name' => 'content',
    'method_name' => 'view',
    'menu_name' => '内容管理',
    'sub_menus' => 
    array (
      0 => 
      array (
        'menu_id' => '18',
        'class_name' => 'content',
        'method_name' => 'view',
        'menu_name' => '内容管理',
        'sub_menus' => 
        array (
        ),
      ),
      1 => 
      array (
        'menu_id' => '19',
        'class_name' => 'category_content',
        'method_name' => 'view',
        'menu_name' => '分类管理',
        'sub_menus' => 
        array (
          0 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'guest',
            'menu_name' => '用户',
          ),
          1 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'salon',
            'menu_name' => '沙龙',
          ),
          2 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'branch',
            'menu_name' => '分会（俱乐部品牌）',
          ),
          3 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'article',
            'menu_name' => '文章',
          ),
          4 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'application',
            'menu_name' => '沙龙报名表',
          ),
          5 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'comment',
            'menu_name' => '话题评论',
          ),
          6 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'usercom',
            'menu_name' => '评论用户',
          ),
          7 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'label',
            'menu_name' => '标签库',
          ),
          8 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'childtopic',
            'menu_name' => '沙龙子话题',
          ),
          9 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'childcomm',
            'menu_name' => '子话题评论',
          ),
          10 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'art_comm',
            'menu_name' => '文章评论',
          ),
          11 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'lecture',
            'menu_name' => '演讲',
          ),
          12 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'question',
            'menu_name' => '技术Q&A',
          ),
          13 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'return',
            'menu_name' => '用户回复',
          ),
          14 => 
          array (
            'class_name' => 'category_content',
            'method_name' => 'view',
            'extra' => 'guanzhu',
            'menu_name' => '关注沙龙',
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'menu_id' => '20',
    'class_name' => 'module',
    'method_name' => 'run',
    'menu_name' => '工具',
    'sub_menus' => 
    array (
    ),
  ),
);