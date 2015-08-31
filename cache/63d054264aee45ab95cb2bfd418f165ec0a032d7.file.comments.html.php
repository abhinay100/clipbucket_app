<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:28:16
         compiled from "/var/www/styles/cb_27/layout/blocks/comments/comments.html" */ ?>
<?php /*%%SmartyHeaderCode:36337632055e44860e30e68-12075594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d054264aee45ab95cb2bfd418f165ec0a032d7' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/comments/comments.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36337632055e44860e30e68-12075594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'comment' => 0,
    'type' => 0,
    'no_comments' => 0,
    'object_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4486101b6e6_03728106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4486101b6e6_03728106')) {function content_55e4486101b6e6_03728106($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
<div class="cb-item-comments-container">
	<div id="latest_comment_container"></div>
    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/comments/comment.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['comment']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'parents'=>$_smarty_tpl->tpl_vars['comments']->value['parents']), 0);?>

    <?php } ?>
<?php } else { ?>
	<div align="center" class="no_comments" id="no_comments">
    	<?php echo smarty_lang(array('code'=>'no_comments','assign'=>'no_comments'),$_smarty_tpl);?>
 <?php echo sprintf($_smarty_tpl->tpl_vars['no_comments']->value,$_smarty_tpl->tpl_vars['object_type']->value);?>

    </div>
</div>
<?php }?>


<?php }} ?>
