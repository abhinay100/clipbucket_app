<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:15:08
         compiled from "/var/www/styles/cb_27/layout/photos.html" */ ?>
<?php /*%%SmartyHeaderCode:96749835255e4454cf21451-89378668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47b237f16a58ca0b8f294d2156931fab5f6510b8' => 
    array (
      0 => '/var/www/styles/cb_27/layout/photos.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96749835255e4454cf21451-89378668',
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
    'collections' => 0,
    'baseurl' => 0,
    'collection' => 0,
    'photos' => 0,
    'counter' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4454d54e731_02331131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4454d54e731_02331131')) {function content_55e4454d54e731_02331131($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['leftMenuLinks'])) {$_smarty_tpl->tpl_vars['leftMenuLinks'] = clone $_smarty_tpl->tpl_vars['leftMenuLinks'];
$_smarty_tpl->tpl_vars['leftMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,6); $_smarty_tpl->tpl_vars['leftMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['leftMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['leftMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,6), null, 0);?>
<div class="container">
    
    <!--<div class="cb-box row">
        <?php if (isset($_smarty_tpl->tpl_vars['sorting_links'])) {$_smarty_tpl->tpl_vars['sorting_links'] = clone $_smarty_tpl->tpl_vars['sorting_links'];
$_smarty_tpl->tpl_vars['sorting_links']->value = sorting_links(); $_smarty_tpl->tpl_vars['sorting_links']->nocache = null; $_smarty_tpl->tpl_vars['sorting_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['sorting_links'] = new Smarty_variable(sorting_links(), null, 0);?>
        <h4 class="smaller lighter pull-left"><?php echo smarty_lang(array('code'=>"Browsing All Photos"),$_smarty_tpl);?>
: </h4>
        <div class="photopadding col-md-6">
            <div class="btn-group">
                <?php if ($_GET['sorting']) {?>
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['time'])) {?>
                <button class="btn btn-default" type="button">
                    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                </button>
                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <?php }?>
                <?php } ?>
                <?php } else { ?>
                <button class="btn btn-default" type="button">
                    Recent
                </button>
                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                    <span class="caret"></span>
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
                    <li><a href="<?php echo cblink(array('name'=>'sort','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'photos'),$_smarty_tpl);?>
" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                    <?php } ?>
                </ul>
            </div>

            
            <?php if (isset($_smarty_tpl->tpl_vars['time_links'])) {$_smarty_tpl->tpl_vars['time_links'] = clone $_smarty_tpl->tpl_vars['time_links'];
$_smarty_tpl->tpl_vars['time_links']->value = time_links(); $_smarty_tpl->tpl_vars['time_links']->nocache = null; $_smarty_tpl->tpl_vars['time_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['time_links'] = new Smarty_variable(time_links(), null, 0);?>
            <div class="btn-group">
                <?php if ($_GET['timing']) {?>

                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['time'])) {?>

                <button class="btn btn-default" type="button">
                    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                </button>
                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <?php }?>
                <?php } ?>
                <?php } else { ?>
                <button class="btn btn-default" type="button">
                    All Time
                </button>
                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <?php }?>
                <ul role="menu" class="dropdown-menu">
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <li><a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'photos'),$_smarty_tpl);?>
&timing=time" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-3 photopaddin1 pull-right">
            <div class="pull-right" style="margin-right: 25px; margin-top: 4px;">
                    <div class="btn-group">
                      <button class="btn btn-primary" type="button"><?php echo smarty_lang(array('code'=>"Collections"),$_smarty_tpl);?>
</button>
                      <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul role="menu" class="dropdown-menu">
                       <?php  $_smarty_tpl->tpl_vars['collection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['collection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->key => $_smarty_tpl->tpl_vars['collection']->value) {
$_smarty_tpl->tpl_vars['collection']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_collection.php?cid=<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['collection']->value['type'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
</a></li>
                    <?php }
if (!$_smarty_tpl->tpl_vars['collection']->_loop) {
?>
                    <li><a href="#"><?php echo smarty_lang(array('code'=>"No Collection Found"),$_smarty_tpl);?>
</a></li>
                    <?php } ?>
                      </ul>
                    </div>
                </div>
            
        </div>
    </div>-->
    <div class="cb-box row">
    <!-- Page Heading -->
        <div class="page-hidding margin-bottom-10">
            <?php if (isset($_smarty_tpl->tpl_vars['sorting_links'])) {$_smarty_tpl->tpl_vars['sorting_links'] = clone $_smarty_tpl->tpl_vars['sorting_links'];
$_smarty_tpl->tpl_vars['sorting_links']->value = sorting_links(); $_smarty_tpl->tpl_vars['sorting_links']->nocache = null; $_smarty_tpl->tpl_vars['sorting_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['sorting_links'] = new Smarty_variable(sorting_links(), null, 0);?>
            <h4 class="smaller lighter pull-left"><?php echo smarty_lang(array('code'=>"Browsing All Categories"),$_smarty_tpl);?>
: </h4>
            <div class="pull-left">

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
                        <li><a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'photos'),$_smarty_tpl);?>
&sorting=dkfs" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected" <?php }?>>li <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
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
                        <li <?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="active selected"  <?php }?>><a href="<?php echo cblink(array('name'=>'sort','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'photos'),$_smarty_tpl);?>
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
                    <?php if ($_GET['time']) {?> 

                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                        <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['time'])) {?> 
                        
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
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <li><a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'photos'),$_smarty_tpl);?>
&timing=time" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected" style="color: #fff; background-color: #428bca;" <?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <li role="presentation" class="divider"></li>
                        <?php } ?>
                      </ul>
                </div>
            </div>
            <!--
				NOTE : This collection sorting will be added in Future
 			-->
			<!-- <div class="collection-menu">
                <div class="btn-group">
                    <button class="btn btn-primary" type="button"><?php echo smarty_lang(array('code'=>"Collections"),$_smarty_tpl);?>
</button>
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul role="menu" class="dropdown-menu pull-right">
            
                        <?php  $_smarty_tpl->tpl_vars['collection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['collection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->key => $_smarty_tpl->tpl_vars['collection']->value) {
$_smarty_tpl->tpl_vars['collection']->_loop = true;
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_collection.php?cid=<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['collection']->value['type'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
</a></li>
                        <?php }
if (!$_smarty_tpl->tpl_vars['collection']->_loop) {
?>
                        <li><a href="#"><?php echo smarty_lang(array('code'=>"No Collection Found"),$_smarty_tpl);?>
</a></li>
                        <?php } ?>
                  </ul>
                </div>
            </div> -->
        </div>

        <!-- /Page Heading -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix photos pull-left">

            <?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 0; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(0, null, 0);?>
            <ul class="list-unstyled " id="photos"> <!-- remove photos id to remove photo land styling --></ul>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['name'] = 'p_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['photos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total']);
?>
            
            <?php $_smarty_tpl->createLocalArrayVariable('photos', null, 0);
$_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['counter'] = $_smarty_tpl->tpl_vars['counter']->value;?>
            <div class="">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/photo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('photo'=>$_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]), 0);?>

            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
            <?php endfor; else: ?>
            <div class="col-md-10 "><?php echo smarty_lang(array('code'=>'no_results_found'),$_smarty_tpl);?>
</div>
            <?php endif; ?>
        
            <!--Pagination-->
             
            <!-- /Pagination-->
        </div>
        <!--<div class="col-md-2 pull-right paddingright0">
            <div class="ad"><?php echo getAd(array('place'=>'ad_160x600'),$_smarty_tpl);?>
</div>-->
            <!--<img src="http://www.ryangiggs.cc/system/files/banner-160x600-pride-tee_0.jpg">
            <a href="http://www.arvixe.com/clipbucket_hosting"><img class="banner pull-right" src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/assets/images/ad-box-160x600.jpg" ></a>-->
        <!--</div>-->
        <div align="center" class="col-md-12 clearfix pull-left">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        
    </div>
</div>

<div style="height:20px"> </div>
<script>
    jQuery(function() {                                              // <== Doc ready

        jQuery(".avatar1_file").hide();                  // Initially hide all buttons

        jQuery('.show-image').hover(function() {
            jQuery(this).find('#avatar1_file').fadeIn(1500);
        }, function() {
            jQuery(this).find('#avatar1_file').fadeOut(1500);
        });
    });
</script>
<?php }} ?>
