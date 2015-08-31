<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:28:14
         compiled from "/var/www/player/CB_video_js/cb_video_js.html" */ ?>
<?php /*%%SmartyHeaderCode:199823757855e4485e1e1049-35674692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '162657851f71ce82fae2e8b135ff047aaf73d0ac' => 
    array (
      0 => '/var/www/player/CB_video_js/cb_video_js.html',
      1 => 1438313234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199823757855e4485e1e1049-35674692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cb_vjs_player_url' => 0,
    'width' => 0,
    'height' => 0,
    'vdata' => 0,
    'video_files' => 0,
    'file' => 0,
    'quality' => 0,
    'cb_logo' => 0,
    'player_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4485e299e78_95046198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4485e299e78_95046198')) {function content_55e4485e299e78_95046198($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/video-js.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/cb_vjs_res.css" rel="stylesheet" type="text/css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,700italic,400italic' rel='stylesheet' type='text/css'>

<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/video.dev.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/cb_vjs_res.js"></script>


<video id="cb_video_js" class="video-js vjs-default-skin" width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" poster="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['vdata']->value),$_smarty_tpl);?>
" >
    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = explode('-',$_smarty_tpl->tpl_vars['file']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(explode('-',$_smarty_tpl->tpl_vars['file']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = end($_smarty_tpl->tpl_vars['quality']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(end($_smarty_tpl->tpl_vars['quality']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = explode('.',$_smarty_tpl->tpl_vars['quality']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(explode('.',$_smarty_tpl->tpl_vars['quality']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = $_smarty_tpl->tpl_vars['quality']->value[0]; $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable($_smarty_tpl->tpl_vars['quality']->value[0], null, 0);?>
    <source src='<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
' type="video/mp4" data-res="<?php echo $_smarty_tpl->tpl_vars['quality']->value;?>
" />
    <?php } ?>
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>

<script type="text/javascript">
var videotitle = "<?php echo $_smarty_tpl->tpl_vars['vdata']->value['title'];?>
";
var uploader = "<?php echo $_smarty_tpl->tpl_vars['vdata']->value['username'];?>
";
var branding_logo  = "<?php echo $_smarty_tpl->tpl_vars['cb_logo']->value;?>
";
var product_link = "<?php echo $_smarty_tpl->tpl_vars['player_config']->value['player_logo_url'];?>
";
var show_logo = true;

	var cb_player_setup = {
		plugins : { resolutionSelector : {
			// Pass any options here
			default_res : 'HD'
			// Define an on.ready function
		} }, 
		"techOrder" : ['html5', 'flash'],
		"controls": true,
		"autoplay": false,
		"preload": "auto",
		"videotitle" : videotitle,
		"uploader" : uploader,
		"branding_logo" : branding_logo,
		"show_logo" : show_logo,
		"product_link" : product_link
	};
	//Initializing
	var player = videojs('cb_video_js', cb_player_setup , function(){
		var cb_video_js = this;
	});

</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/cb_vjs_custom.js"></script>
<?php }} ?>
