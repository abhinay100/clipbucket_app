<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:31:29
         compiled from "/var/www/styles/cb_27/layout/videos.html" */ ?>
<?php /*%%SmartyHeaderCode:88489351155e44921d8a487-91354422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e998f7d10037b80df4f0c908420ba6c7650982' => 
    array (
      0 => '/var/www/styles/cb_27/layout/videos.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88489351155e44921d8a487-91354422',
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
    'type' => 0,
    'cbvid' => 0,
    'videos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44922239157_11633146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44922239157_11633146')) {function content_55e44922239157_11633146($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['leftMenuLinks'])) {$_smarty_tpl->tpl_vars['leftMenuLinks'] = clone $_smarty_tpl->tpl_vars['leftMenuLinks'];
$_smarty_tpl->tpl_vars['leftMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7); $_smarty_tpl->tpl_vars['leftMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['leftMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['leftMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7), null, 0);?>

<div class="container marginBottom">
    
    <div class="cb-box clearfix row">
        
        <!-- Listing Categories -->
        <div class="hidden-xs">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/category_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>'video'), 0);?>
    
        </div>
        
        <!-- Listing Categories End -->
        <div class="col-md-9 clearfix paddingleft0">
            <!-- Page Heading -->
            <div class="page-hidding hidden-xs">
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
                            <li><a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'videos'),$_smarty_tpl);?>
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
                            <li <?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="active selected"  <?php }?>><a href="<?php echo cblink(array('name'=>'sort','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'videos'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <li role="presentation" class="divider"></li>
                            <?php } ?>
                        </ul>
                    </div>

                    

 
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
                                <li><a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'videos'),$_smarty_tpl);?>
&timing=time" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected" style="color: #fff; background-color: #428bca;" <?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                                <li role="presentation" class="divider"></li>
                            <?php } ?>
                          </ul>
                    </div>
                </div>
            </div> 

            <div class="page-hidding visible-xs">
                <div class="" role="group">
                    <?php if (isset($_smarty_tpl->tpl_vars['time_links'])) {$_smarty_tpl->tpl_vars['time_links'] = clone $_smarty_tpl->tpl_vars['time_links'];
$_smarty_tpl->tpl_vars['time_links']->value = time_links(); $_smarty_tpl->tpl_vars['time_links']->nocache = null; $_smarty_tpl->tpl_vars['time_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['time_links'] = new Smarty_variable(time_links(), null, 0);?>
                    <div class="btn-group custom-dropdown resp-full-wdth480 resp-mgnt10">
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
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                                <li>
                                    <a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'videos'),$_smarty_tpl);?>
&timing=time" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"  <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                                    </a>
                                </li>
                                <li role="presentation" class="divider"></li>
                            <?php } ?>
                          </ul>
                    </div> 

                    <?php if (isset($_smarty_tpl->tpl_vars['sorting_links'])) {$_smarty_tpl->tpl_vars['sorting_links'] = clone $_smarty_tpl->tpl_vars['sorting_links'];
$_smarty_tpl->tpl_vars['sorting_links']->value = sorting_links(); $_smarty_tpl->tpl_vars['sorting_links']->nocache = null; $_smarty_tpl->tpl_vars['sorting_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['sorting_links'] = new Smarty_variable(sorting_links(), null, 0);?>
                    <div class="btn-group custom-dropdown resp-full-wdth480 resp-mgnt10">
                        <?php if ($_GET['sorting']) {?>   
                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['sort'])) {?> 
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
                            <?php echo $_GET['sort'];?>

                            </button>
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                <span class="arrow-drop"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                        <?php }?>    

                        <!--
                        <ul role="menu" class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <li><a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'videos'),$_smarty_tpl);?>
&sorting=dkfs" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <?php } ?>
                        </ul>-->



                        <ul role="menu" class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <li <?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected" <?php }?>><a href="<?php echo cblink(array('name'=>'sort','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'videos'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <li role="presentation" class="divider"></li>
                            <?php } ?>
                        </ul>
                    </div> 

                    <div class="btn-group custom-dropdown pull-left resp-full-wdth480 resp-mgnt10">
                        <button class="btn btn-default" type="button">
                        Categories
                        </button>
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                            <span class="arrow-drop"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        
                        <ul role="menu" class="dropdown-menu">
                        <?php echo $_smarty_tpl->tpl_vars['cbvid']->value->cbCategories(array("type"=>$_smarty_tpl->tpl_vars['type']->value,"echo"=>"TRUE","output"=>"list","with_all"=>"TRUE"));?>

                        </ul>
                    </div>                    
                </div>
            </div>


            <div class="row">
                <?php if ($_smarty_tpl->tpl_vars['videos']->value) {?> 
                <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
                    <div class="col-md-3  col-sm-4  col-xs-6 marginBottom grid_view list_view cb-video-fixed-block">
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/videos/video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display_type'=>'normal'), 0);?>

                    </div>
                <?php } ?>
                <?php } else { ?> 
                <div class="col-md-12"><?php echo smarty_lang(array('code'=>'no_results_found'),$_smarty_tpl);?>
</div>
                <?php }?>

                <div class="clearfix"></div>
            </div>
       
            <!-- /Page Heading -->
            
        <div class="clr"></div>
        <!--Pagination-->
        <div align="center">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div> 
            <!-- /Pagination-->
        </div>
    </div>
</div>
<div style="height:20px"> </div>



<?php }} ?>
