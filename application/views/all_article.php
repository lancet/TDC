<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/guests.css" />
<title>查看具体文章</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--具体文章内容开始-->
   	  	<div class="guests">
        	<div class="guests_left article">
                <div class="about_conn articlelist articlelist_w">
                	
                  	<dl>
                    	<dt><span>所有文章列表</span><em><a class="del">&nbsp;</a></em></dt>
                        <dd>
						<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
                        	<div class="article">
                            	<h5><a href="<?php echo base_url();?>index.php/article/index/<?php echo $r->classid;?>"><?php echo $r->title;?></a></h5>
                                <p class="article_txt"><?php echo $r->summary;?></p>
                            </div>
                           <?php }}?>
                        </dd>
                        <dd class="article_share">快速分享此文章至：</dd>
                  	</dl>
                  	
                </div>
                <div class="pages">
                	<span class="pre">共40页</span>
                    <ul>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>
                </div>
            </div>
        </div>
      	<!--/具体文章内容结束-->
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
