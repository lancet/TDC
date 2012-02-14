<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/guests.css" />
<script type='text/javascript' src='<?php echo base_url();?>js/jquery.min.js'></script>
<script type='text/javascript'>
 $(document).ready(function(){
 $('#all').change(function()
 {
  if($('#all option:selected').val()==3)
  {
  $('div').show();
  }
 if($('#all option:selected').val()==0)
 {
	$('div').show();
	$('div[name^="1show"]').hide();$('div[name^="2show"]').hide();
	//$('div[name="2"]').hide();
 }
  if($('#all option:selected').val()==1)
 {
	$('div').show();
	$('div[name^="0show"]').hide();$('div[name^="2show"]').hide();
	//$('div[name="2"]').hide();
 }
  if($('#all option:selected').val()==2)
 {
	$('div').show();
	$('div[name^="1show"]').hide();$('div[name^="0show"]').hide();
	//$('div[name="2"]').hide();
 }
 });
$('#month').change(function(){
if($('#month option:selected').val()==1&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==2&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-01"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==3&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-01"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==4&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-01"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==5&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-01"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==6&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-01"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==7&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-01"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==8&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-01"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==9&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-01"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==10&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-01"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==11&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-01"]').hide();$('div[name^="2012-12"]').hide();
	//window.alert("请先登录");
	}
if($('#month option:selected').val()==12&&$('#year option:selected').val()==0)
	{
	$('div').show();
	$('div[name^="2012-02"]').hide();
	$('div[name^="2012-03"]').hide();$('div[name^="2012-04"]').hide();
	$('div[name^="2012-05"]').hide();$('div[name^="2012-06"]').hide();
	$('div[name^="2012-07"]').hide();$('div[name^="2012-08"]').hide();
	$('div[name^="2012-09"]').hide();$('div[name^="2012-10"]').hide();
	$('div[name^="2012-11"]').hide();$('div[name^="2012-01"]').hide();
	//window.alert("请先登录");
	}
});

 });
</script>
<title>所有沙龙</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--所有沙龙内容开始-->
   	  	<div class="guests">
        	<!--日志类别-->
            <div class="manage_tit">
                <span class="tit">技术领域：</span>
                <div class="options">
                    <select name="yesr" size="1" id="all" onchange= "all()">  
				<option value="3">全部</option>  
				<option value="0">本期</option>
				<option value="1">预期</option>
				<option value="2">往期</option>
				</select>
                </div>
                <span class="tit">时间：</span>


                <div class="options" style="width:66px;">
				<select name="yesr" size="1" id="year">  
				<option value="0">2012</option>  
				</select>
                </div>
                <span class="tit">年</span>
                <div class="options" style="width:66px;">
                    <select name="month" size="1" id="month" onchange= "showit()" >  
					  <option value="1">1 </option>  
					  <option value="2">2 </option>  
					  <option value="3">3 </option>  
					  <option value="4">4</option>  
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					  <option value="10">10</option>
					  <option value="11">11</option>
					  <option value="12">12</option>
					  <option value="0" selected="selected">请选择</option>  
					</select>
                </div>
                <span class="tit">月</span>
            </div>
            <!-- /日志类别-->
        	<div class="guests_left">
                <div class="about_top"></div>
                <div class="about_conn">
				<?php if(isset($rows)) {
						foreach($rows as $r) { ?>
						<div name="<?php echo $r->showtime."showtime";?>">
						<div name="<?php echo str_cut($r->stime,10);?>">
                  	<dl class="allsalon">
                    	<dt><a href="#"><?php echo $r->theme;?></a></dt>
                  		<dd>
                        	<ul>
                            	<li><span class="topic w_textc">时间:</span><?php echo str_cut($r->stime,10);?><span class="technology w_textc">技术领域：</span><?php if($r->fhid==1) echo 'aDev';if($r->fhid==2) echo 'D2前端技术论坛';if($r->fhid==3) echo 'iDataForum';if($r->fhid==4) echo 'iDevOps';if($r->fhid==5) echo 'TCon测试技术论坛 ';?>  </li>
                                <?php
$q=$r->classid;
$sql="SELECT * FROM dili_u_c_childtopic WHERE fromsalon = '".$q."'  ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{ ?><li><span class="topic w_textc">话题:</span><?php echo $row['title'];?></li><?php }?>
                               
                            </ul>
                        </dd>
                  </dl></div></div>
				  <?php }}?>
                  
                  
                  
                </div>
                <div class="about_bottom"></div>
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
            <!--关于淘宝技术沙龙-->
            <div class="guests_info">
            	<div class="list_top"></div>
                	<div class="list_conn clearfix">
                    	<p class="about">About 淘宝技术沙龙</p>
                    	<p class="info_txt">技术沙龙是由工程师自主发起，专注于专业领域，是一个倡导“享技术 聚朋友”的互动、交流的平台。希望工程师们能够通过沙龙平台结识更,技术沙龙是由工程师自主发起，专注于专业领域，是一个倡导“享技术 聚朋友”的互动、交流的平台。希望工程师们能够通过沙龙平台结识更,技术沙龙是由工程师自主发起，专注于专业领域，是一个倡导“享技术 聚朋友”的互动、交流的平台。希望工程师们能够通过沙龙平台结识。</p>
                        <div class="hotlist_top"></div>
                        <div class="hotlist_conn clearfix">
                        	<h6>火热报名中</h6>
                            <ul class="clearfix">
                            	<li>2012-12-24 杭州 [iDevOps]</li>
                                <li>主题：前沿系统技术</li>
                                <li>2012-12-24 杭州 [iDevOps]</li>
                                <li>主题：前沿系统技术</li>
                            </ul>
                            <h6>沙龙预告</h6>
                            <ul class="clearfix">
                            	<li>2012-12-24 杭州 [iDevOps]</li>
                                <li>主题：前沿系统技术</li>
                                <li>2012-12-24 杭州 [iDevOps]</li>
                                <li>主题：前沿系统技术</li>
                            </ul>
                        </div>
                        <div class="hotlist_bottom"></div>
                        <p class="weiboadd">&nbsp;</p>
                    </div>
                <div class="list_bottom"></div>
            </div>
            <!--/关于淘宝技术沙龙-->
        </div>
      	<!--/所有沙龙内容结束-->
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
