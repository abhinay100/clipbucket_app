<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:28:14
         compiled from "/var/www/styles/cb_27/layout/blocks/common/report.html" */ ?>
<?php /*%%SmartyHeaderCode:18724295655e4485e8f7153-34553569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d997e424819ea5b541afe9a56e89a4845e3a4d0' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/common/report.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18724295655e4485e8f7153-34553569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'params' => 0,
    'flag_options' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4485e971fb3_11738153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4485e971fb3_11738153')) {function content_55e4485e971fb3_11738153($_smarty_tpl) {?><!-- Flag This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<div id="flag_item" class="action_box" >
    <div class="form_container">
        <div class="form_result" id="flag_form_result" ></div>

        <form id="flag_form" name="flag_form"  method="post" action="#">
            <div class="alert alert-info">
                <?php echo sprintf(lang("Please select the category that most closely reflects your concern about the %s, so that we can review it and determine whether it violates our Community Guidelines or isn't appropriate for all viewers. Abusing this feature is also a violation of the Community Guidelines, so don't do it."),$_smarty_tpl->tpl_vars['params']->value['type']);?>

            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['flag_options'])) {$_smarty_tpl->tpl_vars['flag_options'] = clone $_smarty_tpl->tpl_vars['flag_options'];
$_smarty_tpl->tpl_vars['flag_options']->value = get_flag_options($_smarty_tpl->tpl_vars['type']->value); $_smarty_tpl->tpl_vars['flag_options']->nocache = null; $_smarty_tpl->tpl_vars['flag_options']->scope = 0;
} else $_smarty_tpl->tpl_vars['flag_options'] = new Smarty_variable(get_flag_options($_smarty_tpl->tpl_vars['type']->value), null, 0);?>

            <div class="form-group mtm mbm">
                <label for="flag_type"><?php echo lang("Choose a category");?>
</label>
                <select class="form-control" name="flag_type" id="flag_type">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flag_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                    <?php } ?>
                </select>
            </div>
            <input type="button" name="send_content" value="<?php echo sprintf(lang("Flag this %s"),$_smarty_tpl->tpl_vars['params']->value['type']);?>
" class="btn btn-primary" onclick="flag_object('flag_form','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
')"/>
        </form>
    </div>
</div>
<!-- Flag This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<?php }} ?>
