<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:42
         compiled from "/var/www/styles/cb_27/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:42751934655e444426061b1-28959063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6091a37f1725c8cc15d4e51776cf84df17604838' => 
    array (
      0 => '/var/www/styles/cb_27/layout/index.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42751934655e444426061b1-28959063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myquery' => 0,
    'editor_picks' => 0,
    'theme' => 0,
    'featured_videos' => 0,
    'video_01' => 0,
    'video_02' => 0,
    'videos' => 0,
    'row' => 0,
    'result_photos1_01' => 0,
    'i' => 0,
    'result_photo1_01' => 0,
    'cbphoto' => 0,
    'result_photo1_08' => 0,
    'result_photos2_08' => 0,
    'result_photo2_08' => 0,
    'result_photos2_01' => 0,
    'result_photo2_01' => 0,
    'feature_users' => 0,
    'user' => 0,
    'userquery' => 0,
    'imageurl' => 0,
    'cbcollection' => 0,
    'collections' => 0,
    'collection' => 0,
    'limit' => 0,
    'items' => 0,
    'item' => 0,
    'playlists' => 0,
    'playlist' => 0,
    'cbvid' => 0,
    'videoid' => 0,
    'video' => 0,
    'thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44443075054_87310853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44443075054_87310853')) {function content_55e44443075054_87310853($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/includes/smartyv3/plugins/modifier.truncate.php';
?><div class="container">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=120542078043680";
	    fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="row cb-box marginBottom">

		<?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(); $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(), null, 0);?>

	    <!--<div class="alert alert-info margin-bottom-10 ">-->
	    <?php echo ANCHOR(array('place'=>'global'),$_smarty_tpl);?>
 
	    <!--	</div> -->
	    <div class="clearfix"></div>
	       
		<?php if (is_installed('editorspick')) {?>
		<?php if ($_smarty_tpl->tpl_vars['editor_picks']->value) {?>
		<div class="row">
	        <div class="col-md-8">
				<!-- Editor Pick Video Main Container START //-->
				<div id="ep_video_container">
					<?php if (is_installed('editorspick')) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['name'] = 'e_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['editor_picks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total']);
?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/editor_pick/video_block.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['editor_picks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e_list']['index']]), 0);?>

					<?php endfor; else: ?>
					There is no video in editor's pick, Please Add Videos In Editor's Pick<br />Videos Manager > Add to editor's pick
					<?php endif; ?>
					<?php }?>
				</div>
				
				<!-- Editor Pick Video Main Container END //-->

	        </div>

			<!-- Editor Pick Videos Slider Container START //-->
	        <div class="col-md-4 col-sm-12 col-xs-12 editorpick-holder pull-right custom-elements">
	            <div id="slide" class="scrollable-area">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['name'] = 'e_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['editor_picks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total']);
?>
	            	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/editor_pick/index_featured_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['editor_picks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e_list']['index']]), 0);?>

					<?php endfor; endif; ?>
	        	</div>
				<div class="next_pre_hold">
					<a href="#" class="col-md-6 btn btn-primary" id="slide_prev">
					<span class="glyphicon glyphicon-chevron-up"></span>
					</a>
					<a href="#" class="col-md-6 btn btn-primary" id="slide_next">
					<span class="glyphicon glyphicon-chevron-down"></span>
					</a>
				</div>
			</div>
	        <!-- Editor Pick Videos Slider Container END //-->
		</div>
		<?php }?>
		<?php }?>
	    <!-- ******************************************* //-->
		<!-- ************ EDITORS BLOCK END ************ //-->
	    <!-- ******************************************* //-->
	       
	    
	         
	   <!-- <div align="center" class="margin-bottom-10">
	    	<a href="http://www.arvixe.com/clipbucket_hosting">
	    		<img class="banner" src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/assets/images/ad-box-728x90.jpg" >

			</a>
		</div>-->
		<div class="ad"><?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>
</div>
		<!-- ******************************************* //-->
		<!-- *********** LATEST VIDEOS START *********** //-->
		<!-- ******************************************* //-->
		<div class="row">
			<div class="col-md-12 clearfix">
				<div class="col-md-8 nopadding padding-right-10 featuredvideos-wrapper">
					<h2 class="myHeading theme_color"><?php echo smarty_lang(array('code'=>"Featured Videos"),$_smarty_tpl);?>
</h2>
					<?php if (isset($_smarty_tpl->tpl_vars['featured_videos'])) {$_smarty_tpl->tpl_vars['featured_videos'] = clone $_smarty_tpl->tpl_vars['featured_videos'];
$_smarty_tpl->tpl_vars['featured_videos']->value = get_videos(array('featured'=>'yes','limit'=>6)); $_smarty_tpl->tpl_vars['featured_videos']->nocache = null; $_smarty_tpl->tpl_vars['featured_videos']->scope = 0;
} else $_smarty_tpl->tpl_vars['featured_videos'] = new Smarty_variable(get_videos(array('featured'=>'yes','limit'=>6)), null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['featured_videos']->value) {?>
					<div class="col-md-12 featured-videos nopadding">
						<div class="col-md-12 text-center nopadding ">
							<div class="col-md-8 text-center nopadding mouse_hover featured-imglg">
							
								<?php if (isset($_smarty_tpl->tpl_vars['video_01'])) {$_smarty_tpl->tpl_vars['video_01'] = clone $_smarty_tpl->tpl_vars['video_01'];
$_smarty_tpl->tpl_vars['video_01']->value = $_smarty_tpl->tpl_vars['featured_videos']->value[0]; $_smarty_tpl->tpl_vars['video_01']->nocache = null; $_smarty_tpl->tpl_vars['video_01']->scope = 0;
} else $_smarty_tpl->tpl_vars['video_01'] = new Smarty_variable($_smarty_tpl->tpl_vars['featured_videos']->value[0], null, 0);?>
								<div class="col-md-12 text-center nopadding video_thumb_lg">
									<a href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['video_01']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['video_01']->value['title'];?>
">
										<span class="play-icon fa fa-play"></span>
										<img class="cb_img_thum" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video_01']->value,'num'=>'4','size'=>'big'),$_smarty_tpl);?>
" width="500" height="285" border="0" <?php echo ANCHOR(array('place'=>"video_thumb",'data'=>$_smarty_tpl->tpl_vars['video_01']->value),$_smarty_tpl);?>
 />
									</a>
									<div class="cbHomeVidTitle cbHomeVidTitle_Big mouse_hover_on"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video_01']->value['title'],30);?>
</div>
								</div>
					            <div class="cbHomeVidDuration mouse_hover_on">
					            <?php if ($_smarty_tpl->tpl_vars['video_01']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video_01']->value['duration']);?>
<?php } else { ?>00:00ewwew<?php }?>
					            </div>
					            <div class="cbHomeVidDuration_left mouse_hover_on">
					            	<?php echo $_smarty_tpl->tpl_vars['video_01']->value['username'];?>

					            </div>
							</div>
							<div class="col-md-4 col-sm-6 hidden-xs text-center nopadding-right pull-right tumb-sm">
							<?php  $_smarty_tpl->tpl_vars['video_02'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video_02']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video_02']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video_02']->key => $_smarty_tpl->tpl_vars['video_02']->value) {
$_smarty_tpl->tpl_vars['video_02']->_loop = true;
 $_smarty_tpl->tpl_vars['video_02']->iteration++;
?>
								<?php if ($_smarty_tpl->tpl_vars['video_02']->iteration>1&&$_smarty_tpl->tpl_vars['video_02']->iteration<4) {?>
								<div class="col-md-12 text-center nopadding mouse_hover1 featured-video video_thumb" style="<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']) {?> <?php }?> " >
									<a href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['video_02']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['video_02']->value['title'];?>
">
										<span class="play-icon fa fa-play"></span>
										<img class="cb_img_thum" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video_02']->value,'size'=>'240x133'),$_smarty_tpl);?>
" width="240" height="133" <?php echo ANCHOR(array('place'=>"video_thumb",'data'=>$_smarty_tpl->tpl_vars['video_02']->value),$_smarty_tpl);?>
 />
										<div class="cbHomeVidTitle mouse_hover_on1"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video_02']->value['title'],10);?>
</div>
										<div class="cbHomeVidDuration mouse_hover_on1">
						            		<?php if ($_smarty_tpl->tpl_vars['video_02']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video_02']->value['duration']);?>
<?php } else { ?>00:00<?php }?>
						            	</div>
									</a>
								</div>
								<?php }?>

							<?php } ?>
							</div>
							<div class="col-lg-12 col-md-12 text-center nopadding">
							<?php  $_smarty_tpl->tpl_vars['video_02'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video_02']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video_02']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video_02']->key => $_smarty_tpl->tpl_vars['video_02']->value) {
$_smarty_tpl->tpl_vars['video_02']->_loop = true;
 $_smarty_tpl->tpl_vars['video_02']->iteration++;
?>
							<?php if ($_smarty_tpl->tpl_vars['video_02']->iteration>3) {?>
								<div class="col-lg-4 col-md-4 col-sm-6 hidden-xs video_thumb text-center nopadding-right mouse_hover featured-video <?php if ($_smarty_tpl->tpl_vars['video_02']->iteration==4) {?>nopadding<?php }?> ">
									<a href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['video_02']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['video_02']->value['title'];?>
">
										<span class="play-icon fa fa-play"></span>
										<img class="cb_img_thum" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video_02']->value,'size'=>'240x133'),$_smarty_tpl);?>
" width="240" height="133" <?php echo ANCHOR(array('place'=>"video_thumb",'data'=>$_smarty_tpl->tpl_vars['video_02']->value),$_smarty_tpl);?>
 />
									
										<div class="cbHomeVidTitle mouse_hover_on"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video_02']->value['title'],10);?>
</div>

										<div class="cbHomeVidDuration mouse_hover_on">
							            <?php if ($_smarty_tpl->tpl_vars['video_02']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video_02']->value['duration']);?>
<?php } else { ?>00:00<?php }?>
							            </div>
									</a>
								</div>
							<?php }?>
							<?php } ?>
							</div>
			                
			            </div>
					
		        		<div class="clearfix"></div>    
					</div>
					<?php } else { ?>
					<div class="col-md-12 nopadding">No featured Video</div>
					<?php }?>
			        <div class="clearfix"></div>
			        <div class="row nopadding">
			        	<h3 class="myHeading theme_color"><?php echo lang('Recent videos');?>
</h3>
			        	<?php if (isset($_smarty_tpl->tpl_vars['videos'])) {$_smarty_tpl->tpl_vars['videos'] = clone $_smarty_tpl->tpl_vars['videos'];
$_smarty_tpl->tpl_vars['videos']->value = get_videos(array("order"=>"date_added DESC","limit"=>12)); $_smarty_tpl->tpl_vars['videos']->nocache = null; $_smarty_tpl->tpl_vars['videos']->scope = 0;
} else $_smarty_tpl->tpl_vars['videos'] = new Smarty_variable(get_videos(array("order"=>"date_added DESC","limit"=>12)), null, 0);?>
						<div class="clearfix recent-videos row">
				        	<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>

				        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mbm cb-video-fixed-block">
				        		<!-- <div class="marginBottom grid_view recent-col list_view nopadding-right"> -->
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/videos/video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

								<!-- </div> -->
							</div>
				        	<?php } ?>
			        	</div>
			        </div>
					
	              	<div class="ad"><?php echo getAd(array('place'=>'ad_468x60'),$_smarty_tpl);?>
</div>
			    	<div class="row nopadding">
			    		<?php if ($_smarty_tpl->tpl_vars['row']->value['photosSection']=='yes') {?>
						<div class="col-md-12 clearfix nopadding ">
			        		<h2 class="myHeading theme_color"><?php echo smarty_lang(array('code'=>"Photos"),$_smarty_tpl);?>
</h2>
							<?php if (isset($_smarty_tpl->tpl_vars['result_photos1_01'])) {$_smarty_tpl->tpl_vars['result_photos1_01'] = clone $_smarty_tpl->tpl_vars['result_photos1_01'];
$_smarty_tpl->tpl_vars['result_photos1_01']->value = get_photos(array('order'=>' RAND() LIMIT 15 ')); $_smarty_tpl->tpl_vars['result_photos1_01']->nocache = null; $_smarty_tpl->tpl_vars['result_photos1_01']->scope = 0;
} else $_smarty_tpl->tpl_vars['result_photos1_01'] = new Smarty_variable(get_photos(array('order'=>' RAND() LIMIT 15 ')), null, 0);?>		
			        		<?php if ($_smarty_tpl->tpl_vars['result_photos1_01']->value) {?>
	        				<!-- *********** FIRST PHOTOS START ************ //-->
	        				<!-- <div class="row clearfix fill-background lg-img"> -->
							<div class="clearfix featured-images">
								<div class="clearfix">
								<?php  $_smarty_tpl->tpl_vars['result_photo1_01'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result_photo1_01']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result_photos1_01']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_photo1_01']->key => $_smarty_tpl->tpl_vars['result_photo1_01']->value) {
$_smarty_tpl->tpl_vars['result_photo1_01']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['result_photo1_01']->key;
?>
									
								<?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>			

									<div class="ft-img col-md-7">
									

						            	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo1_01']->value,'view_item');?>
">
						            	<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['result_photo1_01']->value,'output'=>'html','size'=>"l",'class'=>"cb_img_thum"),$_smarty_tpl);?>

						            	</a>
						            	<div class="hover">
						            		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo1_01']->value,'view_item');?>
">
						            			<span class="photo-title"><?php echo $_smarty_tpl->tpl_vars['result_photo1_01']->value['photo_title'];?>
</span>
						            			<span class="plus">plus</span>
						            		</a>
						            	</div>
						          
						            </div>
						        <?php } elseif ($_smarty_tpl->tpl_vars['i']->value<3) {?>    

						           
						            
									
									<div class="ft-img col-md-5">
						            	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo1_08']->value,'view_item');?>
">
						            	<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['result_photo1_01']->value,'output'=>'html','size'=>"l",'class'=>'photoThumbBox moveL cb_img_thum'),$_smarty_tpl);?>

						            	</a>
						            	<div class="hover">
						            		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo1_01']->value,'view_item');?>
">
						            			<span class="photo-title"><?php echo $_smarty_tpl->tpl_vars['result_photo1_01']->value['photo_title'];?>
</span>
						            			<span class="plus">plus</span>
						            		</a>
						            	</div>
						           
						       	    </div>
						           
								<?php } elseif ($_smarty_tpl->tpl_vars['i']->value<7) {?>
						           
									<div class="ft-img col-md-6">
						            	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo1_08']->value,'view_item');?>
">
						            	<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['result_photo1_01']->value,'output'=>'html','size'=>"l",'class'=>'photoThumbBox moveL cb_img_thum'),$_smarty_tpl);?>

						            	</a>
						            	<div class="hover">
						            		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo1_01']->value,'view_item');?>
">
						            			<span class="photo-title"><?php echo $_smarty_tpl->tpl_vars['result_photo1_01']->value['photo_title'];?>
</span>
						            			<span class="plus">plus</span>
						            		</a>
						            	</div>
						            
						       	    </div>
						            
								<?php } else { ?>			
						           
									<div class="ft-img col-md-3" style="height:140px;">
						            	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo1_08']->value,'view_item');?>
">
						            	<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['result_photo1_01']->value,'output'=>'html','size'=>"l",'class'=>'photoThumbBox moveL cb_img_thum'),$_smarty_tpl);?>

						            	</a>
						            	<div class="hover">
						            		<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo1_01']->value,'view_item');?>
">
						            			<span class="photo-title"><?php echo $_smarty_tpl->tpl_vars['result_photo1_01']->value['photo_title'];?>
</span>
						            			<span class="plus">plus</span>
						            		</a>
						            	</div>
						            
						       	    </div>
						         <?php }?>   
						        
						        <?php } ?>
						        </div>
								<!-- </div> -->
							</div>
					        <!-- *********** FIRST PHOTOS END ************ //-->
				     		<?php }?>

							<?php if (isset($_smarty_tpl->tpl_vars['result_photos2_08'])) {$_smarty_tpl->tpl_vars['result_photos2_08'] = clone $_smarty_tpl->tpl_vars['result_photos2_08'];
$_smarty_tpl->tpl_vars['result_photos2_08']->value = get_photos(array('order'=>'  photo_id ASC LIMIT 4 ')); $_smarty_tpl->tpl_vars['result_photos2_08']->nocache = null; $_smarty_tpl->tpl_vars['result_photos2_08']->scope = 0;
} else $_smarty_tpl->tpl_vars['result_photos2_08'] = new Smarty_variable(get_photos(array('order'=>'  photo_id ASC LIMIT 4 ')), null, 0);?>
						    
						    <?php if ($_smarty_tpl->tpl_vars['result_photos2_08']->value) {?> 		
					        <!-- *********** SECOND PHOTOS START ************ //-->
							<!-- <div class="col-md-12 fill-background clearfix lg-img">
						        <div class="col-md-5 nopadding sm-imgs clearfix left-aligned">
								<?php  $_smarty_tpl->tpl_vars['result_photo2_08'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result_photo2_08']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_photos2_08']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_photo2_08']->key => $_smarty_tpl->tpl_vars['result_photo2_08']->value) {
$_smarty_tpl->tpl_vars['result_photo2_08']->_loop = true;
?>
									<div class="col-md-6 col-sm-6">
						        	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo2_08']->value,'view_item');?>
">
						        	<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['result_photo2_08']->value,'output'=>'html','width'=>"128",'height'=>"118",'size'=>"l",'class'=>'photoThumbBox moveL cb_img_thum'),$_smarty_tpl);?>

						        	</a>
						        <?php if ($_smarty_tpl->tpl_vars['photos']->iteration>1) {?><?php break 1?><?php }?>
						   	    </div>
						        <?php } ?>
								</div>
								<?php if (isset($_smarty_tpl->tpl_vars['result_photos2_01'])) {$_smarty_tpl->tpl_vars['result_photos2_01'] = clone $_smarty_tpl->tpl_vars['result_photos2_01'];
$_smarty_tpl->tpl_vars['result_photos2_01']->value = get_photos(array('order'=>'  RAND() LIMIT 1 ')); $_smarty_tpl->tpl_vars['result_photos2_01']->nocache = null; $_smarty_tpl->tpl_vars['result_photos2_01']->scope = 0;
} else $_smarty_tpl->tpl_vars['result_photos2_01'] = new Smarty_variable(get_photos(array('order'=>'  RAND() LIMIT 1 ')), null, 0);?>
								<div class="col-md-7 big_img">
								<?php  $_smarty_tpl->tpl_vars['result_photo2_01'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result_photo2_01']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_photos2_01']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_photo2_01']->key => $_smarty_tpl->tpl_vars['result_photo2_01']->value) {
$_smarty_tpl->tpl_vars['result_photo2_01']->_loop = true;
?>
						        	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['result_photo2_01']->value,'view_item');?>
">
						        	<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['result_photo2_01']->value,'output'=>'html','width'=>"420",'height'=>"235",'size'=>"l",'class'=>"cb_img_thum"),$_smarty_tpl);?>

						        	</a>
						        <?php } ?>
						        </div>
							</div> -->
							<!-- *********** SECOND PHOTOS END ************ //-->
							<?php }?>
						</div>
						<?php } else { ?>
						<div class="col-md-12 nopadding">No featured Photo</div>
						<?php }?>	
					</div>

			        <!-- ******************************************* //-->
			        <!-- *********** PHOTOS END ************ //-->
			        <!-- ******************************************* //-->

				</div>
				<!-- ******************************************* //-->
		        <!-- ******** ADVERTISEMENT BLOCK START ******** //-->
		        <!-- ******************************************* //-->
				<!--<div class="col-md-4" style="background-color:#F2F2F2; padding-top:10px; padding-bottom:10px; margin-bottom:10px;">
				<h2 class="myHeadingBLK" style="margin-top:0;">Advertisement</h2>
					<div class="col-md-12 text-center nopadding" style="font-size:18px; border:1px solid #CCC; background:#FFF; display:block; height: 250px; width: 300px; line-height: 200px; text-align:center; left:7%;">
					Ad Box 300 x 250
					</div>
				</div>-->
				<!-- ******************************************* //-->
		        <!-- ******** ADVERTISEMENT BLOCK END ******** //-->
		        <!-- ******************************************* //-->


				<!-- ******************************************* //-->
		        <!-- ************* USER BLOCK START ************ //-->
		        <!-- ******************************************* //-->
				<?php if (isset($_smarty_tpl->tpl_vars['feature_users'])) {$_smarty_tpl->tpl_vars['feature_users'] = clone $_smarty_tpl->tpl_vars['feature_users'];
$_smarty_tpl->tpl_vars['feature_users']->value = get_users(array('featured'=>'yes','limit'=>5)); $_smarty_tpl->tpl_vars['feature_users']->nocache = null; $_smarty_tpl->tpl_vars['feature_users']->scope = 0;
} else $_smarty_tpl->tpl_vars['feature_users'] = new Smarty_variable(get_users(array('featured'=>'yes','limit'=>5)), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['feature_users']->value) {?>
	     		<div class="col-md-4 side_user_home">
					<h2 class="myHeading theme_color"><?php echo smarty_lang(array('code'=>"Featured Users"),$_smarty_tpl);?>
</h2>
	               
	               <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
					
	                <div class="col-md-12 nopadding clearfix user-view-home">
						<div class="col-md-3 nopadding">
							<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value,'small');?>
" width="56" height="56" class="img-circle" />
						</div>
						<div class="col-md-9 nopadding">
							<h4 class="nopadding "><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></h4>

							<div class=" nopadding col-md-6 min-height-20">
								<div class="pull-left small"><span class="bg-eye"></span>&nbsp;<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</span></div>
								<div class="pull-right small"><span class="bg-videocam"></span>&nbsp;<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>'Videos'),$_smarty_tpl);?>
</span></div>
							</div>
		                    <br>
		                    <div class="row pull-left" style="margin-left: 0px; width: 99%;">
			                    <div class="progres">
			                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
			                            <span class="sr-only">40% Complete (success)</span>
			                        </div>
			                    </div>
		                    </div>
							<!--<div class="col-md-12 nopadding progress no-border-radius">
			      				<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
			        			<span class="sr-only">40% Complete (success)</span>
			  					</div>
			    			</div>-->
						</div>
						<div class="user_icon">
							<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
							<img class="" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/user_next_icon.png" width="25" height="25" />
							</a>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php }?>
				<!-- ******************************************* //-->
		        <!-- ************* USER BLOCK END ************ //-->
		        <!-- ******************************************* //-->
		        <?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']=='yes') {?>
				<?php if (isset($_smarty_tpl->tpl_vars['collections'])) {$_smarty_tpl->tpl_vars['collections'] = clone $_smarty_tpl->tpl_vars['collections'];
$_smarty_tpl->tpl_vars['collections']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>5,'active'=>'yes')); $_smarty_tpl->tpl_vars['collections']->nocache = null; $_smarty_tpl->tpl_vars['collections']->scope = 0;
} else $_smarty_tpl->tpl_vars['collections'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>5,'active'=>'yes')), null, 0);?>
				<div class="col-md-4 comment_home side_user_home" >
					<h2 class="myHeading"><?php echo smarty_lang(array('code'=>"Top Collections"),$_smarty_tpl);?>
</h2>
					<?php if (isset($_smarty_tpl->tpl_vars['limit'])) {$_smarty_tpl->tpl_vars['limit'] = clone $_smarty_tpl->tpl_vars['limit'];
$_smarty_tpl->tpl_vars['limit']->value = 10; $_smarty_tpl->tpl_vars['limit']->nocache = null; $_smarty_tpl->tpl_vars['limit']->scope = 0;
} else $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(10, null, 0);?>
		        	<?php if ($_smarty_tpl->tpl_vars['collections']->value) {?>        
					<?php  $_smarty_tpl->tpl_vars['collection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['collection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->key => $_smarty_tpl->tpl_vars['collection']->value) {
$_smarty_tpl->tpl_vars['collection']->_loop = true;
?>
					<div class="clearfix collection-section">
						<div class="category-header row clearfix">
							<div class="col-sm-6 clearfix"><?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
</div>
							<div class="col-sm-6 clearfix"><span class="total-obj"><?php echo $_smarty_tpl->tpl_vars['collection']->value['total_objects'];?>
</span></div>

							<!--  -->
							<!-- <div class="col-sm-6 clearfix"><span class="total-obj"><?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
</span></div> -->
						</div>
						<div class="collection-grid clearfix"> 
						<?php if ($_smarty_tpl->tpl_vars['collection']->value['type']=='photos') {?>
							<?php if (isset($_smarty_tpl->tpl_vars['items'])) {$_smarty_tpl->tpl_vars['items'] = clone $_smarty_tpl->tpl_vars['items'];
$_smarty_tpl->tpl_vars['items']->value = $_smarty_tpl->tpl_vars['cbphoto']->value->collection->get_collection_items_with_details($_smarty_tpl->tpl_vars['collection']->value['collection_id'],0,$_smarty_tpl->tpl_vars['limit']->value,false); $_smarty_tpl->tpl_vars['items']->nocache = null; $_smarty_tpl->tpl_vars['items']->scope = 0;
} else $_smarty_tpl->tpl_vars['items'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbphoto']->value->collection->get_collection_items_with_details($_smarty_tpl->tpl_vars['collection']->value['collection_id'],0,$_smarty_tpl->tpl_vars['limit']->value,false), null, 0);?>
						<?php } else { ?>
							<?php if (isset($_smarty_tpl->tpl_vars['items'])) {$_smarty_tpl->tpl_vars['items'] = clone $_smarty_tpl->tpl_vars['items'];
$_smarty_tpl->tpl_vars['items']->value = get_videos_of_collection($_smarty_tpl->tpl_vars['collection']->value['collection_id'],0,$_smarty_tpl->tpl_vars['limit']->value,false); $_smarty_tpl->tpl_vars['items']->nocache = null; $_smarty_tpl->tpl_vars['items']->scope = 0;
} else $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(get_videos_of_collection($_smarty_tpl->tpl_vars['collection']->value['collection_id'],0,$_smarty_tpl->tpl_vars['limit']->value,false), null, 0);?>
						<?php }?>	



						<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<div class="collection-item">
									<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['item']->value,'view_item');?>
">
										<?php if ($_smarty_tpl->tpl_vars['collection']->value['type']=='photos') {?>
											<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['item']->value,'output'=>'html','size'=>"l",'class'=>"cb_img_thum"),$_smarty_tpl);?>

										<?php } else { ?>
											<img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="cb_img_thum" id="photo_<?php echo $_smarty_tpl->tpl_vars['item']->value['ci_id'];?>
" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>
">
										<?php }?>
									</a>
								</div>
							<?php } ?>
						<?php }?>
						</div>
					</div>

					<?php } ?>
					<?php } else { ?>
					<div class="col-md-12 nopadding">No Collection</div>
					<?php }?>
		    	</div>
		    	<?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['playlists'])) {$_smarty_tpl->tpl_vars['playlists'] = clone $_smarty_tpl->tpl_vars['playlists'];
$_smarty_tpl->tpl_vars['playlists']->value = get_playlists(array('limit'=>5,'order'=>'total_items DESC')); $_smarty_tpl->tpl_vars['playlists']->nocache = null; $_smarty_tpl->tpl_vars['playlists']->scope = 0;
} else $_smarty_tpl->tpl_vars['playlists'] = new Smarty_variable(get_playlists(array('limit'=>5,'order'=>'total_items DESC')), null, 0);?>
                <div class="col-md-4 comment_home side_user_home " >
                	<h2 class="myHeading"><?php echo smarty_lang(array('code'=>"Top Playlists"),$_smarty_tpl);?>
</h2>
                	<?php if ($_smarty_tpl->tpl_vars['playlists']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['playlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['playlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['playlist']->key => $_smarty_tpl->tpl_vars['playlist']->value) {
$_smarty_tpl->tpl_vars['playlist']->_loop = true;
?>

						<div class="clearfix collection-section">
							<div class="category-header row clearfix">
								<div class="col-sm-6 clearfix"><span class=""><?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_name'];?>
</span></div>
								<div class="col-sm-6 clearfix">
									<span class="total-obj">
										<?php echo number_format($_smarty_tpl->tpl_vars['cbvid']->value->action->count_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']));?>

									</span>
								</div>
                            </div>

							<div class="collection-grid clearfix"> 
							<?php if (isset($_smarty_tpl->tpl_vars['items'])) {$_smarty_tpl->tpl_vars['items'] = clone $_smarty_tpl->tpl_vars['items'];
$_smarty_tpl->tpl_vars['items']->value = get_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']); $_smarty_tpl->tpl_vars['items']->nocache = null; $_smarty_tpl->tpl_vars['items']->scope = 0;
} else $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(get_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']), null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								    <div class="collection-item">
										    <?php if (isset($_smarty_tpl->tpl_vars['videoid'])) {$_smarty_tpl->tpl_vars['videoid'] = clone $_smarty_tpl->tpl_vars['videoid'];
$_smarty_tpl->tpl_vars['videoid']->value = $_smarty_tpl->tpl_vars['item']->value['videoid']; $_smarty_tpl->tpl_vars['videoid']->nocache = null; $_smarty_tpl->tpl_vars['videoid']->scope = 0;
} else $_smarty_tpl->tpl_vars['videoid'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['videoid'], null, 0);?>
										    <?php if ($_smarty_tpl->tpl_vars['videoid']->value) {?>
		                                    <?php if (isset($_smarty_tpl->tpl_vars['videos'])) {$_smarty_tpl->tpl_vars['videos'] = clone $_smarty_tpl->tpl_vars['videos'];
$_smarty_tpl->tpl_vars['videos']->value = get_videos(array('videoid'=>$_smarty_tpl->tpl_vars['videoid']->value,'limit'=>'4')); $_smarty_tpl->tpl_vars['videos']->nocache = null; $_smarty_tpl->tpl_vars['videos']->scope = 0;
} else $_smarty_tpl->tpl_vars['videos'] = new Smarty_variable(get_videos(array('videoid'=>$_smarty_tpl->tpl_vars['videoid']->value,'limit'=>'4')), null, 0);?>
											    <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
				                                    <a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
">
														<?php if (isset($_smarty_tpl->tpl_vars['thumb'])) {$_smarty_tpl->tpl_vars['thumb'] = clone $_smarty_tpl->tpl_vars['thumb'];
$_smarty_tpl->tpl_vars['thumb']->value = get_thumb($_smarty_tpl->tpl_vars['video']->value); $_smarty_tpl->tpl_vars['thumb']->nocache = null; $_smarty_tpl->tpl_vars['thumb']->scope = 0;
} else $_smarty_tpl->tpl_vars['thumb'] = new Smarty_variable(get_thumb($_smarty_tpl->tpl_vars['video']->value), null, 0);?>
				                                        <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" />
						                            </a>
												<?php } ?>
											<?php } else { ?>
											<span class="label label-default">no items</span>
											<?php }?>
                                    </div>
								<?php } ?>
							</div>
						</div>	

                    <?php } ?>
                    <?php } else { ?>
						<div class="col-md-12 nopadding">No Playlists</div>
					<?php }?>
				</div>

			</div>
		</div>
	</div>
	
</div>

<div style="height:20px;"></div>
<script type="text/javascript">
	$(function() {
				
	    $('#slide').ulslide({
	        width: 350,
	        height: 88,
			effect: {
				type: 'carousel', // slide or fade
	            axis: 'y',        // x, y
				showCount: 5
			},
	        nextButton: '#slide_next',
	        prevButton: '#slide_prev',
	        duration: 800,
	        /*autoslide: 2000*/
			easing: 'easeOutBounce'
	    });
	    $('#slide1').ulslide({
	        width: 150,
	        height: 80,
			effect: {
				type: 'carousel', // slide or fade
	            axis: 'x',        // x, y
				showCount: 5
			},
	        nextButton: '#slide_next1',
	        prevButton: '#slide_prev1',
	        duration: 800,
	        autoslide: 2000
			/*easing: 'easeOutBounce'*/
	    });
	    $('#slide3').ulslide({
	        width: 150,
	        height: 80,
			effect: {
				type: 'carousel', // slide or fade
	            axis: 'x',        // x, y
				showCount: 5
			},
	        nextButton: '#slide_next3',
	        prevButton: '#slide_prev3',
	        duration: 800,
	        autoslide: 2000,
			easing: 'easeOutBounce'
	    });
	});
</script>

<!--<style>

.ad{
    background: none repeat scroll 0 0 #F3F3F3;
    border: 1px solid #CCCCCC;
    font-size: 15px;
    height: 90px;
    margin: 0 auto 25px;
    padding: 0;
    text-align: center;
    width: 728px;
}
</style>--><?php }} ?>
