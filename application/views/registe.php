<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>css/conf/club.css" />
<title>我的资料</title>
</head>

<body>
<?php $this->load->view('daohang'); ?>
<!-- 内容 -->
<div class="warp">
	<div class="main">
   	  	<!--我的资料内容开始-->
   	  	<div class="club personal_info">
        	<div class="personal_user clearfix">
                <div class="user_face">
                    <a href="#" class="face"><img src="<?php echo base_url();?>images/temp/temp_02.jpg" /></a>
                    <p><a href="#"><img src="<?php echo base_url();?>images/common/btn_changeface.gif" width="87" height="30" alt="" /></a></p>
                </div>
          		<div class="user_txe">
                	<h2>欢迎您加入技术俱乐部！</h2>
                  	<p>请您真实填写以下信息，我们会及时发送最新信息及相关资讯给您！<br /> 真实的信息也能让您获得更多参加线下活动的机会！<br /> 俱乐部不会泄露任何您的个人信息，也不会对您造成不必要的骚扰。</p>
                </div>
          </div>
        	<dl>
                <dt><span class="red">*</span> 昵称：</dt>
                <dd>
                  <div class="bdmain">
                      <div class="bdmain weibourl">
                            <input type="text" class="ml_texta">
                    </div>
                  </div>
                    <div class="msg"><span>给自己取个江湖代号吧</span></div>
                </dd>
            </dl>
            <dl class="dl_place">
                <dt><span class="red">*</span> 姓名：</dt>
                <dd>
                    <div class="bdmain">
                        <div class="bdmain weibourl">
                            <input type="text" class="ml_texta">
                        </div>
                    </div>
                    <div class="msg">仅自己可见</div>
                </dd>
            </dl>
            <dl class="dl_place">
                <dt><span class="red">*</span> 邮箱：</dt>
                <dd>
                    <div class="bdmain">
                        <div class="bdmain weibourl">
                            <input type="text" class="ml_texta">
                        </div>
                    </div>
                    <div class="msg"></div>
                </dd>
            </dl>
            <dl class="dl_place">
                <dt><span class="red">*</span> 手机：</dt>
                <dd>
                    <div class="bdmain">
                        <div class="bdmain weibourl">
                            <input type="text" class="ml_texta">
                        </div>
                    </div>
                    <div class="msg"></div>
                </dd>
            </dl>
            <dl class="dl_place">
                <dt><span class="red">*</span> 公司：</dt>
                <dd>
                    <div class="bdmain">
                        <div class="bdmain weibourl">
                            <input type="text" class="ml_texta" style="width:140px">
                        </div>
                    </div>
                    <div class="tit"><span class="red">*</span> 职位：</div>
                    <div class="bdmain">
                        <div class="bdmain weibourl">
                            <input type="text" class="ml_texta" style="width:140px">
                        </div>
                    </div>
                    <div class="tit">
                      <input type="checkbox" name="checkbox" id="checkbox" /> 
                    自由职业</div>
                    <div class="msg"></div>
                </dd>
            </dl>
          <dl class="dl_place">
                <dt><span class="red">*</span> 城市：</dt>
                <dd>
                    <div class="bdmain">
               	    <div class="ipt_text"><strong><input type="text" class="ml_texta" value="浙江省杭州市">
                    	</strong><a href="#"><img src="<?php echo base_url();?>images/common/bg_arrow_input.png" width="26" height="24" /></a></div>
                    </div>
                    <div class="msg"></div>
                </dd>
          </dl>
            <dl class="dl_place">
                <dt><span class="red">*</span> 工作年限：</dt>
                <dd>
                    <div class="bdmain">
                    	<div class="ipt_text" style="width:66px"><strong><input type="text" class="ml_texta" value="1" style=" width:31px">
                    	</strong><a href="#"><img src="<?php echo base_url();?>images/common/bg_arrow_input.png" width="26" height="24" /></a></div>
                    </div>
                    <div class="msg"></div>
                </dd>
            </dl>
          <dl class="dl_place">
                <dt><span class="red">*</span> 关注技术领域：</dt>
                <dd class="placebox">
                	<input type="checkbox" name="checkbox2" id="checkbox2" />
                    <label>前端</label>
                    <input type="checkbox" name="checkbox2" id="checkbox2" />
                    <label>测试</label>
                    <input type="checkbox" name="checkbox2" id="checkbox2" />
                    <label>交互</label>
                    <input type="checkbox" name="checkbox2" id="checkbox2" />
                    <label>视觉</label>
                    <input type="checkbox" name="checkbox2" id="checkbox2" />
                    <label>前端</label>
                    <span class="w_textf">（可多选）</span>
                </dd>
          </dl>
            <dl class="dl_tab">
                <dt>我的标签：</dt>
                <dd>
                    <div class="bdmain">
                   	  <div class="bdmain weibourl">
                            <input type="text" class="ml_texta">
                        </div>
                    </div>
                    <div class="msg"><a href="#"><img src="<?php echo base_url();?>images/common/btn_addtab.jpg" width="90" height="26" /></a></div>
                    <div class="interest">
                    	<p>您可能感兴趣的标签：<img src="<?php echo base_url();?>images/common/btn_change.jpg" alt="换一换" width="72" height="24" align="absmiddle" /></p>
                        <ul>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                            <li><a href="#"><img src="<?php echo base_url();?>images/common/ico_add.jpg" width="15" height="14" align="absmiddle" />睡觉</a></li>
                        </ul>
                  </div>
                </dd>
            </dl>
            <dl class="dl_place">
                <dt>已添加标签：</dt>
                <dd>
                    <ul class="tablist">
                    	<li>睡觉<a href="#"><img src="<?php echo base_url();?>images/common/btn_close_y.jpg" width="15" height="14" align="absmiddle" /></a></li>
                        <li>睡觉<a href="#"><img src="<?php echo base_url();?>images/common/btn_close_y.jpg" width="15" height="14" align="absmiddle" /></a></li>
                        <li>睡觉<a href="#"><img src="<?php echo base_url();?>images/common/btn_close_y.jpg" width="15" height="14" align="absmiddle" /></a></li>
                        <li>睡觉<a href="#"><img src="<?php echo base_url();?>images/common/btn_close_y.jpg" width="15" height="14" align="absmiddle" /></a></li>
                        <li>睡觉<a href="#"><img src="<?php echo base_url();?>images/common/btn_close_y.jpg" width="15" height="14" align="absmiddle" /></a></li>
                    </ul>
                    <div class="msg"></div>
                </dd>
            </dl>
            <dl class="dl_txtbox">
                <dt><span class="red">*</span> 自我介绍：</dt>
                <dd>
                    <div class="bdmain">
                        <p class="bdmain_tit">写一段自我介绍，快点跟大家熟起来哦！</p>
                        <div class="bdmain_txt">
                        	<span class="arrow"></span>
                       <div class="txtbox">
                               <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
                            </div>
                        </div>
                      <p class="bdmain_btn"><a href="#"><img src="<?php echo base_url();?>images/common/btn_save.jpg" width="77" height="26" /></a></p>
                  </div>
                    <div class="msg"></div>
                </dd>
            </dl>
        </div>
   	  <!--/我的资料内容结束-->
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
