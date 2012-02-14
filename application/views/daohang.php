<!-- 导航开始 -->
<div class="nav">
    <div class="header_top">
        <div class="header_login">
            <img src="<?php echo base_url();?>images/common/title.gif" width="131" height="17" />
            <div>
			<?php if($this->session->userdata('username'))
					{
					$abc=$this->session->userdata('username');
					echo '&nbsp;&nbsp;&nbsp;欢迎您！';echo $abc;
					echo "&nbsp;&nbsp;&nbsp;<a href=\"".base_url()."index.php/person\">个人中心</a>";
					echo "&nbsp;&nbsp;<a href=\"".base_url()."index.php/login/quit\">退出</a>";
					} 
					else
					{
					echo "<a href=\"".base_url()."index.php/dclub/login\">登陆</a> | ";
					echo "<a href=\"".base_url()."index.php/dclub/registe\">注册</a>";
					}
			?>
               
            </div>
        </div>
    </div>
    <div class="nav_conn clearfix">
        <h1><img src="<?php echo base_url();?>images/common/logo.gif" width="186" height="72" alt="" /></h1>
        <ul class="menu">
            <li><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/common/nav_clue_home.png" alt="" /></a></li>
            <li class="nav_technology">
            	<ul class="technologylist">
                	<li class="fst"><a href="<?php echo base_url();?>index.php/dclub/members/aDev">aDev</a></li>
                    <li><a href="<?php echo base_url();?>index.php/dclub/members/D2">D2</a></li>
                    <li><a href="<?php echo base_url();?>index.php/dclub/members/iDataForum">iData</a></li>
                    <li><a href="<?php echo base_url();?>index.php/dclub/members/iDevOps">iDevOps</a></li>
                    <li><a href="<?php echo base_url();?>index.php/dclub/members/TCon">TCon</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url();?>index.php/dclub/about"><img src="<?php echo base_url();?>images/common/nav_about.png" alt="" /></a></li>
            <li><a href="<?php echo base_url();?>index.php/dclub/kaiyuan"><img src="<?php echo base_url();?>images/common/nav_source.png" alt="" /></a></li>
            <li>
            	<div class="search"><input name="textfield" type="text" id="textfield" value="来试试我们的新风格的搜索" />
          		<a href="#"><img src="<?php echo base_url();?>images/common/btn_search.gif" width="34" height="27" align="absmiddle" /></a>
        		</div>
            </li>
        </ul>
  </div>
</div>
<!-- /导航结束 -->