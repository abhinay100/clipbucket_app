<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:59
         compiled from "/var/www/styles/cb_27/layout/blocks/pagination.html" */ ?>
<?php /*%%SmartyHeaderCode:147789637955e44453a44315-52765336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4990c04c8345215243bcd821877ff15148ffbd68' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/pagination.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147789637955e44453a44315-52765336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagination' => 0,
    'commentPagination' => 0,
    'first_link' => 0,
    'pre_link' => 0,
    'next_link' => 0,
    'last_link' => 0,
    'type' => 0,
    'type_id' => 0,
    'last_update' => 0,
    'total' => 0,
    'object_type' => 0,
    'pre_page' => 0,
    'next_page' => 0,
    'total_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44453b7a8a7_70996665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44453b7a8a7_70996665')) {function content_55e44453b7a8a7_70996665($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pagination']->value&&!$_smarty_tpl->tpl_vars['commentPagination']->value) {?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtl">
  <ul align="center" class="pagination pagination-center">

      <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?><li>  <a <?php echo $_smarty_tpl->tpl_vars['first_link']->value;?>
 ><i class="fa fa-angle-double-left "></i></a></li><?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><li><a <?php echo $_smarty_tpl->tpl_vars['pre_link']->value;?>
 ><i class="fa fa-angle-left"></i></a></li><?php }?> 

             <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  


       <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><li><a <?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
 ><i class="fa fa-angle-right"></i></a></li><?php }?>
       
        <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?><li>  <a <?php echo $_smarty_tpl->tpl_vars['last_link']->value;?>
 ><i class="fa fa-angle-double-right"></i></a></li><?php }?>
     </ul>  
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['commentPagination']->value) {?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtl">
  <ul align="center" class="pagination pagination-center">
         <!-- <li class="prev disabled">
             <a href="#">
                 <i class="icon-double-angle-left"></i></a></li> -->
         
        
        <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?>
        <li>  <a href="javascript:void(0)"
          onclick="getComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','1','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
          <i class="fa fa-angle-double-left"></i></a></li>
         <?php }?>


      
       <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><li><a href="javascript:void(0)" 
       onclick="getComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['pre_page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
       <i class="fa fa-angle-left"></i></a>
       </li><?php }?> 

             <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  


       <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><li><a href="javascript:void(0)" 
       onclick="getComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
       <i class="fa fa-angle-right"></i></a>
       </li><?php }?>
       
        <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?>
        <li>  <a href="javascript:void(0)"
          onclick=" getComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
          <i class="fa fa-angle-double-right"></i></a></li>
         <?php }?>
     </ul>  
</div>
<?php }?> 
<?php }} ?>
