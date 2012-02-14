<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/editor.css" />
<script type="text/javascript" src="http://localhost/dili/xheditor-1.1.10/xheditor-1.1.10/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://localhost/dili/xheditor-1.1.10/xheditor-1.1.10/xheditor-1.1.10-zh-cn.min.js"></script>
<title>文章上传</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--文章上传内容开始-->
   	  	<div class="editor"><?php echo form_open_multipart('per_article/do1');?>
       	  <p class="log"><a href="http://localhost/dili/index.php/person/article">查看我的全部日志</a> &gt;</p>
            <div class="uploadlog"><em>上传日志,通过俱乐部审核后，就可以出现在相应品牌的版块上,供同行排砖哦。</em><a href=""><img src="<?php echo base_url();?>images/editor/editor_close.jpg" width="30" height="30" align="absmiddle" /></a></div>
            <?php if(isset($rows)) {
						foreach($rows as $r) { ?>
			<div class="log_tit">
           	  <span>日志标题</span>
              	<input type="text" name="title" id="textfield2" value="<?php echo $r->title;?>" />
            </div>
            <!--编辑列表-->
            <textarea name='content'  id="content" style="height:400px;width:100%" class="xheditor {skin:'nostyle'}"><?php echo $r->content;?></textarea>
            <!--/编辑列表-->
            
            <!--/分类摘要区域-->
            <div class="summary">
            	<ul>
                	<li>
					<input type="text" id="articleid" name="articleid" value="<?php echo $r->classid;;?>" style="display:none;" />
					<input type="text" id="ispass" name="ispass" value="<?php echo $r->ispass;;?>" style="display:none;" />
                    	<span>分类</span>
                        <select name="type" id="type">
                                  <option value="0">aDev</option>
                                  <option value="1">D2前端技术论坛</option>
                                  <option value="2">iDataForum</option>
                                  <option value="3">iDevOps</option>
                                  <option value="4">TCon测试技术论坛</option>
                                  
                        </select>
                    </li>
                    <li>
                    	<span>属性</span>
                       <select name="virtue" id="virtue">
								  <option value="0">随笔</option>
                                  <option value="1">技术文章</option>
                                  <option value="2">我爱开源</option>
                        </select>
                    </li>
                    <li>
                    	<span>摘要</span>
                        <div class="ipt_textarea">
                        	<textarea name="summary" cols="" rows=""><?php echo $r->summary;?></textarea>
                  		</div>
                    </li>
                    <li class="prompt">
						<span>填写摘要,能让您的日志尽快通过审核哦！</span>
                      <em>
                      <input type="checkbox" name="checkbox" id="checkbox" />
                    显示在日志开头</em>                    </li>
                </ul><?php }}?>
       	  </div>
            <!--/分类摘要区域-->
            <!--提交-->
           
        <input name="" type="submit" class="smt" value="上传" />
		</form></div>
      	<!--/文章上传内容结束-->
    </div>
</div>
<!-- /内容 -->
<!-- foot -->
<div class="footer">
	<div class="foot_bg">
    	<div class="font_weibo">
        	<div class="atten_left">
            	<p class="attention">关注我们的官方微博<img src="<?php echo base_url();?>images/common/ico_weibo.jpg" width="26" height="24" align="top" /></p>
                <div class="attentionbox"><img src="<?php echo base_url();?>images/temp/temp_user.jpg" width="46" height="46" />
                	<div class="club_foot">
                    	<p>技术俱乐部</p>
                        <div class="btn"><a href="" class="W_addbtn"><img src="<?php echo base_url();?>images/common/transparent.gif" alt="" class="addicon">加关注</a></div>
                    </div>
                </div>
       	    </div>
            <div class="pagetop"><a href="#"><img src="<?php echo base_url();?>images/common/page_top.gif" width="63" height="64" /></a></div>
        </div>
    </div>
    <p class="address">联系我们：developerclub@taobao.com</p>
</div>
<!--/foot-->
</body>
</html>
