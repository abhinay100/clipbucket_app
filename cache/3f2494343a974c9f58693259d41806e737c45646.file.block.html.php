<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 06:04:06
         compiled from "/var/www/styles/cb_27/layout/blocks/quicklist/block.html" */ ?>
<?php /*%%SmartyHeaderCode:157263184055e450c69d0419-50228872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2494343a974c9f58693259d41806e737c45646' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/quicklist/block.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157263184055e450c69d0419-50228872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cbvid' => 0,
    'quicklist' => 0,
    'quicklist_json' => 0,
    'vid' => 0,
    'item' => 0,
    'bg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e450c6a7f4b1_65074074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e450c6a7f4b1_65074074')) {function content_55e450c6a7f4b1_65074074($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['quicklist'])) {$_smarty_tpl->tpl_vars['quicklist'] = clone $_smarty_tpl->tpl_vars['quicklist'];
$_smarty_tpl->tpl_vars['quicklist']->value = $_smarty_tpl->tpl_vars['cbvid']->value->get_quicklist(); $_smarty_tpl->tpl_vars['quicklist']->nocache = null; $_smarty_tpl->tpl_vars['quicklist']->scope = 0;
} else $_smarty_tpl->tpl_vars['quicklist'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->get_quicklist(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['quicklist_json'])) {$_smarty_tpl->tpl_vars['quicklist_json'] = clone $_smarty_tpl->tpl_vars['quicklist_json'];
$_smarty_tpl->tpl_vars['quicklist_json']->value = json_encode($_smarty_tpl->tpl_vars['quicklist']->value); $_smarty_tpl->tpl_vars['quicklist_json']->nocache = null; $_smarty_tpl->tpl_vars['quicklist_json']->scope = 0;
} else $_smarty_tpl->tpl_vars['quicklist_json'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['quicklist']->value), null, 0);?>

<div  class="quicklist_box">
	<div class="quicklist_box_head">
		<a class="ql_show-hide" href="javascript:void(0)" onClick="quick_show_hide_toggle('#quicklist_cont')"><?php echo smarty_lang(array('code'=>'Hide'),$_smarty_tpl);?>
</a>
		<a class="ql_rem" href="javascript:void(0)" onClick='clear_quicklist(<?php echo $_smarty_tpl->tpl_vars['quicklist_json']->value;?>
)' ><?php echo smarty_lang(array('code'=>'remove'),$_smarty_tpl);?>
</a>
		<h1><?php echo smarty_lang(array('code'=>'quicklists'),$_smarty_tpl);?>
(<?php echo $_smarty_tpl->tpl_vars['cbvid']->value->total_quicklist();?>
)</h1>
	</div>
	<div id="quicklist_cont" class="quicklist_cont">
	
	<?php if ($_smarty_tpl->tpl_vars['quicklist']->value) {?>
		<div id="my_quicklist" class="my_quicklist">
			
			<!-- Getting Playlist Items-->
			<?php if (isset($_smarty_tpl->tpl_vars['bg'])) {$_smarty_tpl->tpl_vars['bg'] = clone $_smarty_tpl->tpl_vars['bg'];
$_smarty_tpl->tpl_vars['bg']->value = 'fff'; $_smarty_tpl->tpl_vars['bg']->nocache = null; $_smarty_tpl->tpl_vars['bg']->scope = 0;
} else $_smarty_tpl->tpl_vars['bg'] = new Smarty_variable('fff', null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['vid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quicklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vid']->key => $_smarty_tpl->tpl_vars['vid']->value) {
$_smarty_tpl->tpl_vars['vid']->_loop = true;
?>
			    <?php if (isset($_smarty_tpl->tpl_vars['item'])) {$_smarty_tpl->tpl_vars['item'] = clone $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->tpl_vars['item']->value = $_smarty_tpl->tpl_vars['cbvid']->value->get_video_details($_smarty_tpl->tpl_vars['vid']->value); $_smarty_tpl->tpl_vars['item']->nocache = null; $_smarty_tpl->tpl_vars['item']->scope = 0;
} else $_smarty_tpl->tpl_vars['item'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->get_video_details($_smarty_tpl->tpl_vars['vid']->value), null, 0);?>
			    
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/quicklist/video_block.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['item']->value,'bg'=>$_smarty_tpl->tpl_vars['bg']->value,'show_delete'=>'yes','unique_id'=>"quicklist_"), 0);?>

			    
			    <?php if ($_smarty_tpl->tpl_vars['bg']->value=='fff') {?>
			    <?php if (isset($_smarty_tpl->tpl_vars['bg'])) {$_smarty_tpl->tpl_vars['bg'] = clone $_smarty_tpl->tpl_vars['bg'];
$_smarty_tpl->tpl_vars['bg']->value = 'EFF5F8'; $_smarty_tpl->tpl_vars['bg']->nocache = null; $_smarty_tpl->tpl_vars['bg']->scope = 0;
} else $_smarty_tpl->tpl_vars['bg'] = new Smarty_variable('EFF5F8', null, 0);?>
			    <?php } else { ?>
			    <?php if (isset($_smarty_tpl->tpl_vars['bg'])) {$_smarty_tpl->tpl_vars['bg'] = clone $_smarty_tpl->tpl_vars['bg'];
$_smarty_tpl->tpl_vars['bg']->value = 'fff'; $_smarty_tpl->tpl_vars['bg']->nocache = null; $_smarty_tpl->tpl_vars['bg']->scope = 0;
} else $_smarty_tpl->tpl_vars['bg'] = new Smarty_variable('fff', null, 0);?>
			    <?php }?>    
			<?php } ?>
			<div class="clearfix"></div>
		</div>
		<?php }?>
	</div>
</div>

<script>




</script><?php }} ?>
