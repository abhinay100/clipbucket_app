<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:28:14
         compiled from "/var/www/styles/cb_27/layout//blocks/collection_form.html" */ ?>
<?php /*%%SmartyHeaderCode:133905942955e4485e8637a8-61924486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7286bb0fa4fcc7fa1b65ef1fb497b6c3d69c7592' => 
    array (
      0 => '/var/www/styles/cb_27/layout//blocks/collection_form.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133905942955e4485e8637a8-61924486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'collections' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4485e8eec61_35822786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4485e8eec61_35822786')) {function content_55e4485e8eec61_35822786($_smarty_tpl) {?><!-- Add To Collection This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<div id="collection_form" class="action_box"  >
	
    <div class="form_container" align="center">
    
     <div class="form_result" id="collection_form_result" style="display:none"></div>
     
    <form id="add_collection_form" name="collection_form" method="post" action="" class="">
    Please select collection name from following<br>
	<select name="collection" id="collection" class="form-control">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['clist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['name'] = 'clist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['collections']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total']);
?>
    	<option value="<?php echo $_smarty_tpl->tpl_vars['collections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clist']['index']]['collection_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['collections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clist']['index']]['collection_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['collections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clist']['index']]['total_objects'];?>
)</option>
    <?php endfor; else: ?>
    	<option>No Collection Found</option>    
    <?php endif; ?>
    </select>
    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <input type="button" name="add_to_playlist" value="Add to collection" class="btn btn-primary mtm btn-block" onclick="collection_actions('add_collection_form','add_new_item','<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','#collection_form_result','video');"/>
        </div>
    </div>
    </form>
    </div>
</div>
<!-- Add To Collection This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<?php }} ?>
