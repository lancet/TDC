<?php
$q=$_GET["q"];
?>
 <ul class="salonlist clearfix">
					<?php if(isset($rows_comm)) {
						foreach($rows_comm as $r) { ?>
                    	<li>
                        	<img src="<?php echo base_url();?>images/temp/temp_face.gif" width="85" height="85" />
                        	<div class="salon_bbsbox">
                            	<p class="salonlist_tit"><em><?php echo $r->commid;?></em> - <?php echo $r->time;?> </p>
                                <p class="salonlist_txt"><?php echo $r->content;?></p>
                            </div>
                        </li><?php }}?>
						  
						</ul><!-- 分页-->
                    <div class="pages clearfix">
                        <span class="pre">共40页</span>
                        <ul>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                        </ul>
                    </div>
                    <!-- /分页-->
                  