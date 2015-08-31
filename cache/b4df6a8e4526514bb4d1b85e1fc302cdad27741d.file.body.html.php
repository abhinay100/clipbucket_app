<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:40
         compiled from "/var/www/styles/cb_27/layout/body.html" */ ?>
<?php /*%%SmartyHeaderCode:15761483655e44440e8a112-77696154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4df6a8e4526514bb4d1b85e1fc302cdad27741d' => 
    array (
      0 => '/var/www/styles/cb_27/layout/body.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15761483655e44440e8a112-77696154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44441478ad2_12466954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44441478ad2_12466954')) {function content_55e44441478ad2_12466954($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/global_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <body>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="container">

        <!-- Message -->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
            <?php echo include_template_file(array('file'=>$_smarty_tpl->tpl_vars['file']->value),$_smarty_tpl);?>

        <?php } ?>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </body>
</html><?php }} ?>
