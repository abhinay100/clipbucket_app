<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:15:35
         compiled from "/var/www/styles/global/remote_upload_form.html" */ ?>
<?php /*%%SmartyHeaderCode:83048156355e44567d5ca55-89997072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95dc0867e25f8bb9afaafd6887230e5c665284e3' => 
    array (
      0 => '/var/www/styles/global/remote_upload_form.html',
      1 => 1438313194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83048156355e44567d5ca55-89997072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44567df5ff3_66229563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44567df5ff3_66229563')) {function content_55e44567df5ff3_66229563($_smarty_tpl) {?><div class="alert alert-info marginTop">
	<?php echo lang('upload_remote_video_msg');?>

</div>
<?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = ''; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['class']) {?>
<?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['params']->value['class']; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['class'], null, 0);?>
<?php }?>


<div class="upload_form_div clearfix form-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="remoteUploadFormDiv">
	<div class="input-group marginTop">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
	  <input name="remote_file_url" type="text"  class="remoteUrlInput form-control" id="remote_file_url" value="<?php echo lang('remote_upload_example');?>
" onclick="if($(this).val()=='<?php echo lang('remote_upload_example');?>
') $(this).val('')"/>
	  <input name="submit_upload" type="hidden" value="<?php echo lang('upload_data_now');?>
">
	</div>
	
	
	<div class="downloadStatusContainer hidden">
		<div class="progress marginTop">
		  <div id="prog_bar" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
		    <span class="sr-only">60% Complete</span>
		  </div>
		</div>
		<div align="center" id="loading" style=""></div>
		<div id="downloadStatus">
			<small>
				<span>Downloaded </span>
				<span id="downloaded">0.00 Mb</span>
				<span> of </span>
				<span id="totalSize">0.00 Mb</span>
			</small>
		</div>
	</div>
	<!-- <div></div> -->
	
	<div class="align-right marginTop">
		<!--<input type="button" name="ytUploadBttn" id="ytUploadBttn" value="<?php echo lang('grab_from_youtube');?>
" onClick="_cb.youtube_upload()" class="btn btn-primary btn-lg">-->
		<input type="button" name="ytUploadBttn"  data-loading-text="Loading..." id="ytUploadBttn" value="<?php echo lang('grab_from_youtube');?>
" onClick="youtube_upload()" class="btn btn-primary btn-lg">
		<input type="button" name="remoteUploadBttn" id="remoteUploadBttn" data-loading-text="Loading..." value="<?php echo lang('upload');?>
" onClick="_cb.<?php echo get_remote_url_function();?>
" class="btn btn-primary btn-lg">
		<input type="button" name="remoteUploadBttnStop" id="remoteUploadBttnStop" value="<?php echo lang('cancel');?>
"   class="btn btn-primary btn-lg" style="display:none"/>
	</div>
</div>
<div id="remoteForm"></div>
<?php }} ?>
