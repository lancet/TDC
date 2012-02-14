<?php

	class plugin_model_dili_wysiwyg extends Dili_model_plugin
	{
		
		function __construct($name)
		{
			parent::__construct($name);
		}
		
		function register_view( & $data )
		{
			@include $this->_path.'include/config.inc.php';
			if($editors && $editors['default'] && isset($editors['list'][$editors['default']]))
			{
				$editor = $editors['list'][$editors['default']];
				echo '<script>$("script[src*=\'xheditor\']").remove();$("textarea.xheditor").removeClass("xheditor").addClass("wysiwyg");</script>';
				echo '<script language="javascript" src="'.base_url().'plugins/'.$this->_name.'/editors/'.$editor['id'].'/'.$editor['script_name'].'"></script>';
				echo '<script>
							$(function(){
								$.each($("textarea.wysiwyg"),function(k,v){
									if($(v).hasClass("{tools:\'mfull\',skin:\'nostyle\'}"))
									{
										'.str_replace('$id','$(v).attr("id")',$editor['init_full_script']).'	
									}
									else
									{
										'.str_replace('$id','$(v).attr("id")',$editor['init_mini_script']).'		
									}
								});
							});
					  </script>';
			}
		}
			
	}