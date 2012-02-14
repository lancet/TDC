<?php 
$editors=array (
  'list' => 
  array (
    'ckeditor' => 
    array (
      'id' => 'ckeditor',
      'name' => 'ckeditor',
      'script_name' => 'ckeditor.js',
      'init_full_script' => 'CKEDITOR.replace($id);',
      'init_mini_script' => 'CKEDITOR.replace($id);',
    ),
    'kindeditor' => 
    array (
      'id' => 'kindeditor',
      'name' => 'kindeditor',
      'script_name' => 'kindeditor-min.js',
      'init_full_script' => 'KE.show({id : $id});',
      'init_mini_script' => 'KE.show({id : $id});',
    ),
  ),
  'default' => 'kindeditor',
);