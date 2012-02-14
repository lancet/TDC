<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/conf/index.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"  charset="utf-8"></script>	
<title>我爱开源</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main pt02">
		<div class="banner banner03" style="display:">
        	<div class="banner_tit">
            	<img src="<?php echo base_url();?>images/common/opensource.png" width="202" height="202" />
                <h4>淘宝开源</h4>
                <p class="tit">Taobao Open Source</p>
       	  		<ul>
                    <li>在这里，和大家分享淘宝开源方面的努力和成果。 </li>
                    <li>在这里，和大家分享淘宝开源方面的。 </li>
                    <li>在这里，和大家分享淘宝开源方面。</li>
              	</ul>
                <p>希望以我们自身的实际行动推进国内开源事业的发展</p>
          	</div>
      </div>
        <!--左侧内容开始-->
   	  	<div class="opensourcebox">
        	<!--左侧左边-->
        	<div class="opensource_l">
            	<!--语言分类开始-->
                <div class="title log_tit">
                    语言分类
                    <div class="btn_arrow"><a href="http://code.taobao.org/all/">所有项目</a></div>
                </div>
                <ul class="language">
                	<li>
                    	<div class="sort">JavaScript</div>
                        <div class="sort">Ruby</div>
                    </li>
                    <li>
                    	<div class="sort">Python</div>
                        <div class="sort">Shell</div>
                    </li>
                    <li>
                    	<div class="sort">Java</div>
                        <div class="sort">Objective-c</div>
                    </li>
                    <li>
                    	<div class="sort">C/C++</div>
                        <div class="sort">PHP</div>
                    </li>
                    <li>
                    	<div class="sort">C#</div>
                        <div class="sort">Lisp</div>
                    </li>
                </ul>
                <!--/语言分类结束-->
                <!--热门项目开始-->
                <div class="title log_tit">
                    热门项目
                    <div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
                </div>
                <ul class="topitems ylw">
                <?php for($i=0;$i<5;$i++){?>
                   
                    <li>
                    	<div class="items_tit w_textf"><?php echo $hot_prjs[$i]->fields->name;?><span><?php echo $hot_prjs[$i]->fields->ctime;?></span></div>
                        <p><?php echo $hot_prjs[$i]->fields->title;?></p>
                        <p>发起人：<span class="w_textf"><?php echo $hot_prjs[$i]->fields->owner;?></span> / 目录：<span class="w_textf"><?php echo $hot_prjs[$i]->fields->tags;?></span></p>
                    </li><?php }?>
                </ul>
                <!--/热门项目结束-->
            </div>
            <!--/左侧左边-->
        	<!--左侧右边-->
        	<div class="opensource_l">
            	<!--项目分类开始-->
                <div class="title log_tit">
                    项目分类
                    <div class="btn_arrow"><a href="http://code.taobao.org/all/">所有项目</a></div>
                </div>
                <ul class="language">
                	<li>
                    	<div class="sort sort_b">Andriod</div>
                        <div class="sort sort_b">IOS</div>
                    </li>
                    <li>
                    	<div class="sort sort_b">KV/NoSQL</div>
                        <div class="sort sort_b">数据库</div>
                    </li>
                    <li>
                    	<div class="sort sort_b">网络应用</div>
                        <div class="sort sort_b">图形图像</div>
                    </li>
                    <li>
                    	<div class="sort sort_b">系统管理</div>
                        <div class="sort sort_b">媒体音乐</div>
                    </li>
                    <li>
                    	<div class="sort sort_b">体验与交互设计</div>
                        <div class="sort sort_b">UED/UI</div>
                    </li>
                </ul>
                <!--/项目分类结束-->
                <div class="title log_tit">
                    最新项目
                    <div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
                </div>
                <ul class="topitems blue">
				<?php for($i=0;$i<7;$i++){?>
                	<li>
                    	<div class="items_tit w_textf"><?php echo $new_prjs[$i]->fields->name;?><span><?php echo $new_prjs[$i]->fields->ctime;?></span></div>
                        <p><?php echo $new_prjs[$i]->fields->title;?></p>
                        <p>发起人：<span class="w_textf"><?php echo $new_prjs[$i]->fields->owner;?></span> / 目录：<span class="w_textf"><?php echo $new_prjs[$i]->fields->tags;?></span></p>
                    </li> <?php }?>
                   
                </ul>
            </div>
            <!--/左侧右边-->
        </div>
      	<!--/左侧内容结束-->
        <!--右侧内容开始-->
        <div class="sideright">
        	<!--活跃用户开始-->
       	  	<div class="title log_tit">
            	活跃用户


            	<div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
            </div>
            <div class="therapist clearfix opensourcelist">
            	<div class="therapist_list">
            		<ul>
					<?php if(isset($hot_user)) {
						foreach($hot_user as $r) { ?>
               	  	<li>
                        <img src="<?php echo $this->dclub_mdl->getAvatar($r->fields->email);?>" width="85" height="85" />
                        <p class="w_textc"><a href="http://code.taobao.org/u/<?php echo $r->fields->name;?>"><?php echo $r->fields->name;?></a></p>
                        <p><?php echo $r->fields->last_login;?></p>
                        <p class="w_texta">所属项目（2）  参加项目（3）</p>
                  	</li> <?php }}?>
                   
                </ul>
                </div>
          	</div>
            <!--/活跃用户结束-->
            <!--最新动态开始-->
          	<div class="title log_tit">
            	最新动态
            	<div class="btn_arrow"><a href="#"><img src="<?php echo base_url();?>images/common/btn_more.jpg" width="49" height="18" alt="" /></a></div>
          	</div>
            <div class="dynamic">
                <ul>
			<?php for($i=0;$i<7;$i++){?>
                    <li>
                    	<img src="<?php echo base_url();?>images/temp/temp_face.gif" alt="" />
                        <p class="w_textc"><?php echo $last_logs[$i]->fields->user;?></p>
                        <p><?php echo $last_logs[$i]->fields->content;?>   <?php echo $last_logs[$i]->fields->ctime;?> </p>
                        <div class="audit"><?php echo $last_logs[$i]->fields->act_type;?></div>
                    </li><?php }?>
                    
                </ul>
          	</div>
            <!--/最新动态结束-->
        </div>
        <!--/左侧内容结束-->
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
