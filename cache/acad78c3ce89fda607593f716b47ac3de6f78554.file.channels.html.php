<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:59
         compiled from "/var/www/styles/cb_27/layout/channels.html" */ ?>
<?php /*%%SmartyHeaderCode:25651449455e44453280890-84607966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acad78c3ce89fda607593f716b47ac3de6f78554' => 
    array (
      0 => '/var/www/styles/cb_27/layout/channels.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25651449455e44453280890-84607966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'myAccountLinks' => 0,
    'sorting_links' => 0,
    'sort' => 0,
    'name' => 0,
    'time_links' => 0,
    'users' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44453514239_17380332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44453514239_17380332')) {function content_55e44453514239_17380332($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['leftMenuLinks'])) {$_smarty_tpl->tpl_vars['leftMenuLinks'] = clone $_smarty_tpl->tpl_vars['leftMenuLinks'];
$_smarty_tpl->tpl_vars['leftMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7); $_smarty_tpl->tpl_vars['leftMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['leftMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['leftMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7), null, 0);?>

<div class="container marginBottom">
    
    <div class="cb-box row">
        <!-- Listing Categories -->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/category_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>'channels'), 0);?>

        <!-- Listing Categories End -->
        <div class="col-md-9 nopadding">
            <!-- Page Heading -->
            <div class="page-hidding hidden-xs ">
                <?php if (isset($_smarty_tpl->tpl_vars['sorting_links'])) {$_smarty_tpl->tpl_vars['sorting_links'] = clone $_smarty_tpl->tpl_vars['sorting_links'];
$_smarty_tpl->tpl_vars['sorting_links']->value = sorting_links(); $_smarty_tpl->tpl_vars['sorting_links']->nocache = null; $_smarty_tpl->tpl_vars['sorting_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['sorting_links'] = new Smarty_variable(sorting_links(), null, 0);?>
                <h4 class="smaller lighter pull-left"><?php if ($_GET['cat']=='all'||$_GET['cat']=='') {?><?php echo smarty_lang(array('code'=>"Browsing All Categories"),$_smarty_tpl);?>
: 
                <?php } elseif ($_GET['seo_cat_name']!='') {?> Browsing <i><?php echo $_GET['seo_cat_name'];?>
</i> Category <?php } else { ?> 
                Browsing Category <?php echo $_GET['cat'];?>
 <?php }?></h4>
                <div class="pull-right">
                    <!--Sorting By View-->
                    <div class="btn-group custom-dropdown">
                        <?php if ($_GET['sort']) {?>
                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['sort'])) {?> 
                            <button class="btn btn-default" type="button">
                            <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                            </button>
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                <span class="arrow-drop"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <?php }?>
                        <?php } ?>
                        <?php } else { ?>
                            <button class="btn btn-default" type="button">
                            Recent
                            </button>
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                <span class="arrow-drop"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                        <?php }?>       

                        <ul role="menu" class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <li><a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'channels'),$_smarty_tpl);?>
&sorting=dkfs" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <?php } ?>
                        </ul>



                        <ul role="menu" class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <li <?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><a href="<?php echo cblink(array('name'=>'sort','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'channels'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <li role="presentation" class="divider"></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <!--Sorting By time-->
                    <?php if (isset($_smarty_tpl->tpl_vars['time_links'])) {$_smarty_tpl->tpl_vars['time_links'] = clone $_smarty_tpl->tpl_vars['time_links'];
$_smarty_tpl->tpl_vars['time_links']->value = time_links(); $_smarty_tpl->tpl_vars['time_links']->nocache = null; $_smarty_tpl->tpl_vars['time_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['time_links'] = new Smarty_variable(time_links(), null, 0);?>
                    <div class="btn-group custom-dropdown">
                        <?php if ($_GET['timing']) {?>

                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['times']['last'] = $_smarty_tpl->tpl_vars['name']->last;
?>
                        <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['time'])) {?>

                        <button class="btn btn-default" type="button">
                            <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                        </button>
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                            <span class="arrow-drop"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button><!--<span class="glyphicon glyphicon-sort"></span> Most <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-->
                        <?php }?>
                        <?php } ?>
                        <?php } else { ?>
                        <button class="btn btn-default" type="button">
                            All Time
                        </button>
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                            <span class="arrow-drop"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <?php }?>
                        <ul role="menu" class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['times']['last'] = $_smarty_tpl->tpl_vars['name']->last;
?>
                            <li><a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'channels'),$_smarty_tpl);?>
&timing=time" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Heading-->
            <div class="clearfix">
                <div class="time_cont">
                    <?php if (isset($_smarty_tpl->tpl_vars['time_links'])) {$_smarty_tpl->tpl_vars['time_links'] = clone $_smarty_tpl->tpl_vars['time_links'];
$_smarty_tpl->tpl_vars['time_links']->value = time_links(); $_smarty_tpl->tpl_vars['time_links']->nocache = null; $_smarty_tpl->tpl_vars['time_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['time_links'] = new Smarty_variable(time_links(), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['times']['last'] = $_smarty_tpl->tpl_vars['name']->last;
?>
                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['times']['last']) {?><?php }?>
                    <?php } ?>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['u_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['name'] = 'u_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['u_list']['total']);
?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 marginBottom grid_view list_view channels-view">
                    <div class="user-block user-view-home clearfix">
                    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/user.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u_list']['index']],'block_type'=>"groups_show"), 0);?>

                    </div>
                </div>
                <?php endfor; else: ?>
                <?php echo smarty_lang(array('code'=>'no_results_found'),$_smarty_tpl);?>

                <?php endif; ?>
            </div>
            <div align="center">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
        <div class="col-md-2  paddingright0  hidden-sm hidden-xs visible-md visible-lg">
         
             <div class="ad"><?php echo getAd(array('place'=>'ad_160x600'),$_smarty_tpl);?>
</div>
           <!-- <a href="http://www.arvixe.com/clipbucket_hosting"><img class="banner pull-right" src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/assets/images/ad-box-160x600.jpg"></a>-->
        </div>
    </div>
</div><?php }} ?>
