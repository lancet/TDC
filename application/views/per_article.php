<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/club.css" />
<title>文章管理</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--俱乐部主页内容开始-->
   	  	<div class="club club_w">
        	<p class="newlog"><a href="<?php echo base_url();?>index.php/person/up_article"><img src="<?php echo base_url();?>images/common/btn_post.jpg" width="102" height="26" alt="发表新日志" /></a></p>
   	  	  	<div class="manage_tit">
            	<span class="tit">日志管理：</span>
            	<div class="options">
                    <input name="textfield2" type="text" id="textfield2" value="全部" />             
                    <a href="#"><img src="<?php echo base_url();?>images/common/btn_options.gif" width="21" height="20" /></a>
                </div>
              <span class="switching"><a href="#"><img src="<?php echo base_url();?>images/common/btn_switching.jpg" width="153" height="22" /></a></span>
            </div>
   	  	<div class="manage">
                <!--我的文章-->
                <ul class="club_article clearfix">
				<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
                	<li><em><?php if($r->ispass==0) echo "<span class=\"audit\">审核中</span>";?><?php echo $r->title;?></em><span class="time"> [ <?php echo str_cut($r->createtime,10);?> ]</span><a href="<?php echo base_url();?>index.php/article/index/<?php echo $r->classid;?>">查看</a><a href="#" class="w_textc">删除</a><a href="<?php echo base_url();?>index.php/person/edit_article/<?php echo $r->classid;?>" class="yoll">编辑</a></li><?php }}?>
                  
                </ul>
                <!--/我的文章-->
                <!--分页-->
                <div class="pages clearfix">
                    <ul>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">6</a></li>
                        <li><a href="">7</a></li>
                    </ul>
                    <span class="pre">共40页</span>
                </div>
                <!--/分页-->
            </div>
        </div>
   	  <!--/嘉宾主页内容结束-->
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
