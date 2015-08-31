<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:28:04
         compiled from "/var/www/styles/cb_27/layout/blocks/videos/video.html" */ ?>
<?php /*%%SmartyHeaderCode:164972799955e44854a4a9d0-14582070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5893547f1a36f4ab43ce3d4edebfb85ff3344bd0' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/videos/video.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164972799955e44854a4a9d0-14582070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_type' => 0,
    'video' => 0,
    'imageurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44854c085f1_90364963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44854c085f1_90364963')) {function content_55e44854c085f1_90364963($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/includes/smartyv3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['display_type']->value=='normal'||$_smarty_tpl->tpl_vars['display_type']->value=='') {?>
<div class="item_video">
    <div class="cb_item_container clearfix">
        <div class="cb_item_thumb video_thumb relative" >
        <a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
        <?php if ($_smarty_tpl->tpl_vars['video']->value['broadcast']=='private') {?>
         <span class="private_video">PRIVATE</span>
        <?php }?>
            <span class="fa fa-play play-icon"></span>
            <span class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>
            </span>
            <img class="img" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'160x90'),$_smarty_tpl);?>
 " border="1" />
        </a>
        <?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

         <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
         class="add_icon cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" onclick="add_quicklist(this,'<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
')" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist" alt="Quicklist" />
        </div>
        <h5>
           <a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],20);?>
</a>
        </h5>
        <div class="clearfix views-time">
			<span class="font1"><span class="bg-eye"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
 views</span>
			<span class="font2"><span class="bg-time"></span>&nbsp;<?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</span>
		</div>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='user_videos') {?>
<div class="col-md-3  col-sm-4  col-xs-6 video_thumb ">
    <a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
        <span class="fa fa-play play-icon"></span>
        <img alt="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'171x120'),$_smarty_tpl);?>
" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"  title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
"/>
    </a>
    <p class="cbHomeVidDuration duration_view">
        <?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?>
            <?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>

        <?php } else { ?>
            00:00
        <?php }?>
    </p>
    <a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
"><h5>
    <b> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],25);?>
</b></h5></a>                     
    <span class="pull-left"><h5><small><?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
 views</small></h5></span>
    <span class="pull-right"><h5><small><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</small></h5></span>
</div>
<?php }?>
<?php }} ?>
