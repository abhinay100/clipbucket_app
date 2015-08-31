<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:18:23
         compiled from "/var/www/styles/cb_27/layout/blocks/photo.html" */ ?>
<?php /*%%SmartyHeaderCode:34899603855e4460f593ca2-58809665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '116ab6f0783674cbc54208361dca1e80ed1f9a31' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/photo.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34899603855e4460f593ca2-58809665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_type' => 0,
    'photo' => 0,
    'cbphoto' => 0,
    'baseurl' => 0,
    'userquery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4460f9ceb48_97879801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4460f9ceb48_97879801')) {function content_55e4460f9ceb48_97879801($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/includes/smartyv3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['display_type']->value=='') {?>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mbm ft-hover">
        <!--<span class="photoname" id="avatar1_file" style="height: 45px; overflow: hidden;" ><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],30);?>
</span>-->
        
        <a class="searchresult-photo" href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="Tolpis barbata (mariluzpicado)">
            <?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'size'=>'l','class'=>'photo-land','output'=>'html'),$_smarty_tpl);?>


           <!-- <img alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
" class="photo-land" id="photo_<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/styles/cbv2.7/timthumb.php?src=<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'size'=>'o'),$_smarty_tpl);?>
&h=150&w=150&zc=1"> -->
        <!-- <span class="photoname">
        <?php if ($_smarty_tpl->tpl_vars['photo']->value['photo_title']=='no-tag') {?>no-title
        <?php } else { ?>
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],25);?>

        <?php }?>
        </span> -->
        </a>
        <div class="hover">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="Tolpis barbata (mariluzpicado)">
				<span class="photo-title">
				<?php if ($_smarty_tpl->tpl_vars['photo']->value['photo_title']=='no-tag') {?>no-title
		        <?php } else { ?>
		        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],25);?>

		        <?php }?>
        		</span>
				<span class="plus">plus</span>
			</a>
		</div>
    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='related_photos') {?>
	<div class="relatedPhotos clearfix">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
"><?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','width'=>'120','class'=>'photoThumbBox moveL','style'=>'margin-right:5px;'),$_smarty_tpl);?>
</a>
        <div class="photoTitle" style="margin-bottom:5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],15);?>
</a></div>
        <span class="photoInfo"><?php echo number_format($_smarty_tpl->tpl_vars['photo']->value['views']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['photo']->value['total_comments'];?>
 <?php echo smarty_lang(array('code'=>"comments"),$_smarty_tpl);?>
</span>
        <?php echo show_rating(array('rating'=>$_smarty_tpl->tpl_vars['photo']->value['rating'],'total'=>'10','class'=>'rating moveL'),$_smarty_tpl);?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='subscription') {?>
	<div class="grid_view clearfix" style="width:auto; margin-right:4px;">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
"><?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','class'=>'photoThumbBox','width'=>'110'),$_smarty_tpl);?>
</a>
        <div class="photoTitle" style="margin:5px 0px; font:bold 11px Arial;">
        <a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],15);?>
</a></div> 
        <?php echo show_rating(array('rating'=>$_smarty_tpl->tpl_vars['photo']->value['rating'],'total'=>'10','class'=>'rating'),$_smarty_tpl);?>

        <div style="font-size:10px; margin:2px;"><?php echo number_format($_smarty_tpl->tpl_vars['photo']->value['views']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value);?>
" style="font:bold 10px Arial; text-decoration:none;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['username'],20);?>
</a>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="side_photos") {?>
	<div style="display:inline-block; *display:inline; vertical-align:middle; padding:0 8px 5px 0px;">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
"><?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','width'=>'82','class'=>'photoThumbBox'),$_smarty_tpl);?>
</a>
        <div class="photoTitle" style="font:bold 10px Arial; margin:1px 0px">
        <a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],15);?>
</a>
        </div>
   	<div class="watch_video_box_details">
        <span style="color:#666; font:normal 10px Arial;"><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
: <?php echo number_format($_smarty_tpl->tpl_vars['photo']->value['views']);?>
</span><br>
        <a style="font:bold 10px Arial; text-decoration:none;" href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['photo']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['username'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['username'],12);?>
</a>
	</div>        
    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="side_photos_viewed") {?>
    <div style="display:inline-block; *display:inline; vertical-align:middle; padding:0 8px 5px 0px;">
        <a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
"><?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','width'=>"255",'height'=>"100",'class'=>'cb_img_thum'),$_smarty_tpl);?>
</a>
        <div class="photoTitle pull-left" style="font:bold 10px Arial; margin:1px 0px">
        <a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['photo']->value,'view_item');?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['photo']->value['photo_title'],15);?>
</a>
        </div>
    <div class="watch_video_box_details pull-right">
        <span style="color:#666; font:normal 10px Arial;"><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
: <?php echo number_format($_smarty_tpl->tpl_vars['photo']->value['views']);?>
</span>
    </div>        
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="channel_page") {?>
	<li class="itemBox" onclick="loadObject(this,'photos','<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
','viewingArea')">
    	<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photo']->value,'output'=>'html','width'=>'110','height'=>'64','size'=>'m','style'=>'display:block;margin:0px auto;'),$_smarty_tpl);?>

    </li> <!-- itemBox <?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_key'];?>
 end -->
<?php }?>





<?php }} ?>
