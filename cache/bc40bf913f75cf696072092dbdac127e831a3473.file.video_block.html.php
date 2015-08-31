<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 06:04:06
         compiled from "/var/www/styles/cb_27/layout/blocks/quicklist/video_block.html" */ ?>
<?php /*%%SmartyHeaderCode:1357717155e450c6aa4f36-41651011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc40bf913f75cf696072092dbdac127e831a3473' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/quicklist/video_block.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1357717155e450c6aa4f36-41651011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videoLink' => 0,
    'video' => 0,
    'bg' => 0,
    'selected' => 0,
    'unique_id' => 0,
    'show_delete' => 0,
    'imageurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e450c6b42735_58348266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e450c6b42735_58348266')) {function content_55e450c6b42735_58348266($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/includes/smartyv3/plugins/modifier.truncate.php';
?><?php if (!$_smarty_tpl->tpl_vars['videoLink']->value) {?>
	<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'assign'=>'videoLink'),$_smarty_tpl);?>

<?php }?>
<div class="qlist_item" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['bg']->value;?>
; <?php if ($_smarty_tpl->tpl_vars['selected']->value==$_smarty_tpl->tpl_vars['video']->value['videoid']) {?> border:1px solid #999<?php }?>"  id="<?php echo $_smarty_tpl->tpl_vars['unique_id']->value;?>
playlist_cont_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">
	<div class="pl_num"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['item']['iteration'];?>
</div>
    <div class="pl_thumb">
        <a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" target="blank">
            <img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
"/>
        </a>
    </div>
    <div class="pl_details" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['videoLink']->value;?>
'">
        <a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" target="blank" ><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],25);?>
</a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['show_delete']->value=='yes') {?>
    <div class="ql_delete">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" class="cross_icon" onclick="remove_qucklist('#<?php echo $_smarty_tpl->tpl_vars['unique_id']->value;?>
playlist_cont_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
','<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
')" title="remove <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 from qucklist" alt="quicklist">
    </div>
    <?php }?>
    <div class="pl_duration"><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
</div>        
    <div class="clearfix"></div>
</div>
    
    <?php }} ?>
