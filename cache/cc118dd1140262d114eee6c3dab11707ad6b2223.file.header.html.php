<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:41
         compiled from "/var/www/styles/cb_27/layout/header.html" */ ?>
<?php /*%%SmartyHeaderCode:163450098755e44441c2d5b2-56954451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc118dd1140262d114eee6c3dab11707ad6b2223' => 
    array (
      0 => '/var/www/styles/cb_27/layout/header.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163450098755e44441c2d5b2-56954451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'baseurl' => 0,
    'website_title' => 0,
    'Cbucket' => 0,
    'counter' => 0,
    'stypes' => 0,
    'head_menu' => 0,
    'menu' => 0,
    'logged_in_user' => 0,
    'usr_head_thumb' => 0,
    'admin_baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e444424a21f7_68136490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e444424a21f7_68136490')) {function content_55e444424a21f7_68136490($_smarty_tpl) {?>    <?php if ($_smarty_tpl->tpl_vars['userquery']->value->udetails['soclid']!='') {?>
        <?php if (isset($_smarty_tpl->tpl_vars["usr_head_thumb"])) {$_smarty_tpl->tpl_vars["usr_head_thumb"] = clone $_smarty_tpl->tpl_vars["usr_head_thumb"];
$_smarty_tpl->tpl_vars["usr_head_thumb"]->value = ((string)$_smarty_tpl->tpl_vars['userquery']->value->getUserThumb('','',userid())); $_smarty_tpl->tpl_vars["usr_head_thumb"]->nocache = null; $_smarty_tpl->tpl_vars["usr_head_thumb"]->scope = 0;
} else $_smarty_tpl->tpl_vars["usr_head_thumb"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['userquery']->value->getUserThumb('','',userid())), null, 0);?>
        <?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars["usr_head_thumb"])) {$_smarty_tpl->tpl_vars["usr_head_thumb"] = clone $_smarty_tpl->tpl_vars["usr_head_thumb"];
$_smarty_tpl->tpl_vars["usr_head_thumb"]->value = ((string)$_smarty_tpl->tpl_vars['userquery']->value->getUserThumb('','small',userid())); $_smarty_tpl->tpl_vars["usr_head_thumb"]->nocache = null; $_smarty_tpl->tpl_vars["usr_head_thumb"]->scope = 0;
} else $_smarty_tpl->tpl_vars["usr_head_thumb"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['userquery']->value->getUserThumb('','small',userid())), null, 0);?>
    <?php }?>

<div id="quick_container">
    <div id="quicklist_box">
    </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['logged_in_user'])) {$_smarty_tpl->tpl_vars['logged_in_user'] = clone $_smarty_tpl->tpl_vars['logged_in_user'];
$_smarty_tpl->tpl_vars['logged_in_user']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()); $_smarty_tpl->tpl_vars['logged_in_user']->nocache = null; $_smarty_tpl->tpl_vars['logged_in_user']->scope = 0;
} else $_smarty_tpl->tpl_vars['logged_in_user'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['searchPage'])) {$_smarty_tpl->tpl_vars['searchPage'] = clone $_smarty_tpl->tpl_vars['searchPage'];
$_smarty_tpl->tpl_vars['searchPage']->value = $_GET['query']; $_smarty_tpl->tpl_vars['searchPage']->nocache = null; $_smarty_tpl->tpl_vars['searchPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['searchPage'] = new Smarty_variable($_GET['query'], null, 0);?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-container clearfix">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navig-resp-bg" data-toggle="collapse" data-target="#khulja-sim-sim">
                <!--<span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> -->
            </button>

            <button type="button" class="navbar-toggle nav-toggle search-resp-bg" data-toggle="collapse" data-target="#navbar-search-collapse">
             <!--  <span class="glyphicon glyphicon-search"></span> -->
         </button>

         <a class="navbar-brand cb-logo" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['website_title']->value;?>
</a>
     </div>
     
    <?php echo ANCHOR(array('place'=>'mature_content'),$_smarty_tpl);?>
 

     <?php echo ANCHOR(array('place'=>'premium_button'),$_smarty_tpl);?>


     <?php if (isset($_smarty_tpl->tpl_vars['head_menu'])) {$_smarty_tpl->tpl_vars['head_menu'] = clone $_smarty_tpl->tpl_vars['head_menu'];
$_smarty_tpl->tpl_vars['head_menu']->value = cb_menu(); $_smarty_tpl->tpl_vars['head_menu']->nocache = null; $_smarty_tpl->tpl_vars['head_menu']->scope = 0;
} else $_smarty_tpl->tpl_vars['head_menu'] = new Smarty_variable(cb_menu(), null, 0);?>

     <div class="responsive-search collapse" id="navbar-search-collapse">
        <!--<form class="" role="search" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">-->
        <form class="navbar-form navbar-left no-border" role="search" action="<?php echo cblink(array('name'=>'search_result'),$_smarty_tpl);?>
">
            <div class="input-group cbsearchtype">
                <input type="text" class="form-control" name="query" placeholder="search keyword here" value="<?php echo get_form_val('query',true);?>
" id="query">
                <div class="input-group-btn">
                    <input type="hidden" name="type" class="type" value="<?php if (isset($_GET['type'])) {?><?php echo $_GET['type'];?>
<?php } else { ?>videos<?php }?>" id="type">
                    <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle search-drop-btn" type="button">
                        <span class="search-type"><?php if ($_GET['type']) {?><?php echo $_GET['type'];?>
<?php } else { ?>Videos<?php }?></span>
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['stypes'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Cbucket']->value->search_types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['stypes']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['counter']->value==3) {?>
                        <li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['stypes']->value||$_GET['type']=='') {?>  class="active"  <?php }?>>
                            <a  class="s-types" href="#"><?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
</a>
                        </li>
                        <?php } else { ?>
                        <li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['stypes']->value) {?>  class="active" <?php }?>>
                            <a  class="s-types" href="#"><?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
</a>
                        </li>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
                        <?php } ?>
                    </ul>
                    <input tabindex="-1" type="submit" name="cbsearch" id="cbsearch" value="<?php echo smarty_lang(array('code'=>'Go'),$_smarty_tpl);?>
" class="btn btn-default minus-marginLeft" />
                </div>
                
            </div>

        </form>
    </div>

    <ul class="nav navbar-nav main-nav navbar-collapse collapse manual-height left-margin-xero pad-left-xero" id="khulja-sim-sim">
        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>
        <?php if ($_smarty_tpl->tpl_vars['menu']->iteration<5) {?>
        <li <?php if ($_GET['type']==mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')) {?>class="active"
        <?php } elseif (!$_GET['type']) {?>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?>class="active"<?php }?>
        <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a></li>
        <?php }?>
        <?php } ?>

        <?php if (userid()) {?>
        <li class="dropdown myaccount-dd hidden-lg hidden-md hidden-sm">
            <span class="dropdown-toggle theme_color col-md-12" data-toggle="dropdown">Setting<b class="caret"></b></span>
            <ul class="dropdown-menu no-padding">
                <li>
                    <div class="adminthumb">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['logged_in_user']->value);?>
">
                        <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['usr_head_thumb']->value;?>
"/>
                        <h4><?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
</h4> 
                    </a>    
                    </div> 
                </li>
                <?php if (has_access('admin_access')) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_baseurl']->value;?>
"><i class="fa fa-cogs"></i>&nbsp;<?php echo smarty_lang(array('code'=>"Admin area"),$_smarty_tpl);?>
</a></li>
                <?php }?>
                <li><a href="<?php echo cblink(array('name'=>'my_account'),$_smarty_tpl);?>
<?php echo userid(array(),$_smarty_tpl);?>
"><i class="fa fa-user"></i></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"my_account"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo cblink(array('name'=>'my_videos'),$_smarty_tpl);?>
"><i class="fa fa-video-camera"></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"Manage Videos"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo cblink(array('name'=>'channels'),$_smarty_tpl);?>
"><i class="fa fa-eye"></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"View Channels"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_channel.php?user=<?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
"><i class="fa fa-desktop"></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"My Channel"),$_smarty_tpl);?>
</a></li>
            </ul>
        </li>

        <li class="dropdown hidden-lg hidden-md hidden-sm ">
            <a href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
" class="dropdown-toggle" data-toggle="dropdown"><?php echo smarty_lang(array('code'=>"Uploads"),$_smarty_tpl);?>
 <b class="caret"></b></a>
            <ul role="menu" class="dropdown-menu">
                <li><a href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"Upload Video"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo cblink(array('name'=>'photo_upload'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"Upload Photo"),$_smarty_tpl);?>
</a></li>
            </ul>
        </li>
        <li class="navbar-sm-login-links"><a href="<?php echo cblink(array('name'=>'logout'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>'logout'),$_smarty_tpl);?>
</a></li>
        <?php } else { ?>
        
        <!-- Shown to small devices only Start  @todo : Add condition for logged in user -->

        <li class="navbar-sm-login-links"><a href="#" data-toggle="modal" data-target="#login-modal"><?php echo smarty_lang(array('code'=>'login'),$_smarty_tpl);?>
</a></li>
        <li class="navbar-sm-login-links"><a href="<?php echo cblink(array('name'=>"signup"),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>'Create new account'),$_smarty_tpl);?>
</a></li>
        <!-- Ends -->
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['head_menu']->value)>4) {?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">

                <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->iteration>4) {?>
                <li <?php if ($_GET['type']==mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')) {?> class="active"
                <?php } elseif (!$_GET['type']) {?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> class="active"<?php }?>
                <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a></li>
                <?php }?>
                <?php } ?>
            </ul>
        </li>
        <?php }?>
    </ul>


    <!-- Shown to small devices only Start-->
    <form id="search" class="navbar-form navbar-search navbar-left" name="search" method="get" role="search" action="<?php echo cblink(array('name'=>'search_result'),$_smarty_tpl);?>
">

        <div class="input-group mtxs cbsearchtype">
            <input type="text" class="form-control" name="query" placeholder="search keyword here"  value="<?php echo get_form_val('query',true);?>
" id="query">
            <div class="input-group-btn">
                <input type="hidden" name="type" class="type" value="<?php if (isset($_GET['type'])) {?><?php echo $_GET['type'];?>
<?php } else { ?>videos<?php }?>" id="type">
                <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle search-drop-btn" type="button">
                    <span class="search-type"><?php if ($_GET['type']) {?><?php echo $_GET['type'];?>
<?php } else { ?>Videos<?php }?></span>
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['stypes'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Cbucket']->value->search_types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['stypes']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['counter']->value==3) {?>
                    <li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['stypes']->value||$_GET['type']=='') {?>  class="active"  <?php }?>>
                        <a  class="s-types" href="#"><?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
</a>
                    </li>
                    <?php } else { ?>
                    <li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['stypes']->value) {?>  class="active" <?php }?>>
                        <a  class="s-types" href="#"><?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
</a>
                    </li>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
                    <?php } ?>
                </ul>
                <input tabindex="-1" type="submit" name="cbsearch" id="cbsearch" value="<?php echo smarty_lang(array('code'=>'Go'),$_smarty_tpl);?>
" class="btn btn-default minus-marginLeft" />
            </div>
            
        </div>

    </form>
    <!-- Ends -->
    <!-- Shown to Large displays only Start -->
    <ul class="nav navbar-nav navbar-right nav-login-btns">

        <?php if (userid()) {?>
        <li class="dropdown myaccount-dd">
            <span class="dropdown-toggle theme_color col-md-12" data-toggle="dropdown"> <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['usr_head_thumb']->value;?>
" style="width: 40px; height: 40px;"/> <b class="caret"></b></span>
            <ul class="dropdown-menu no-padding">
                <li>
                    <div class="adminthumb">
                         <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['logged_in_user']->value);?>
">
                        <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['usr_head_thumb']->value;?>
"/>
                        <h4><?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
</h4>
                        </a>     
                    </div>
                      
                </li>
                <?php if (has_access('admin_access')) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_baseurl']->value;?>
"><i class="fa fa-cogs"></i>&nbsp;<?php echo smarty_lang(array('code'=>"Admin area"),$_smarty_tpl);?>
</a></li>
                <?php }?>
                <li><a href="<?php echo cblink(array('name'=>'my_account'),$_smarty_tpl);?>
<?php echo userid(array(),$_smarty_tpl);?>
"><i class="fa fa-user"></i></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"my_account"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo cblink(array('name'=>'my_videos'),$_smarty_tpl);?>
"><i class="fa fa-video-camera"></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"Manage Videos"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo cblink(array('name'=>'channels'),$_smarty_tpl);?>
"><i class="fa fa-eye"></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"View Channels"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_channel.php?user=<?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
"><i class="fa fa-desktop"></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"My Channel"),$_smarty_tpl);?>
</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo cblink(array('name'=>'logout'),$_smarty_tpl);?>
"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>"Logout"),$_smarty_tpl);?>
</a></li>
            </ul>
        </li>
        <?php } else { ?>
        <li>
            <div class="mrl">
                <a href="<?php echo cblink(array('name'=>'signup'),$_smarty_tpl);?>
" class="btn btn-primary btn-success btn-sm"><?php echo smarty_lang(array('code'=>"Create Account"),$_smarty_tpl);?>
</a>
                <a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-primary btn-sm"><?php echo smarty_lang(array('code'=>"Login"),$_smarty_tpl);?>
</a>
            </div>

        </li>
        <?php }?>
    </ul>
    <!-- Ends -->

    <!-- Shown to Large displays only Start -->
    <?php if (userid()) {?>
    <div class="upload-dropdown-btn-d hidden-xs ">
        <div class="btn-group">
            <button title="Upload" class="btn btn-primary" type="button">
                <a class="upload-vid-photo-icon" href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
">Upload</a>
            </button>
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul role="menu" class="dropdown-menu upload-dropdown">
                <li><a href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"Upload Video"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo cblink(array('name'=>'photo_upload'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"Upload Photo"),$_smarty_tpl);?>
</a></li>
            </ul>
        </div>
    </div>
    <?php }?>
    
    <!-- Ends -->

    



    <!-- SHown to middle size displays only  @todo : Add condition for logged in user -->
    <ul class="nav navbar-nav navbar-right nav-login-dd">

        <li class="search-form show-small-form pull-left mrxll" ><i class="glyphicon glyphicon-search cursor-pointer"></i></li>
        <div class="form-small full-width">                    
            <form action="<?php echo cblink(array('name'=>'search_result'),$_smarty_tpl);?>
" role="search" method="get" name="search_small" id="search_small">
                <div class="input-group cbsearchtype">
                    <input type="text" class="form-control" name="query" value="<?php echo get_form_val('query',true);?>
" placeholder="search keyword here" id="query">
                    <div class="input-group-btn">
                        <input type="hidden" name="type" class="type" value="<?php if (isset($_GET['type'])) {?><?php echo $_GET['type'];?>
<?php } else { ?>videos<?php }?>" id="type">
                        <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle search-drop-btn" type="button">
                            <span class="search-type"><?php if ($_GET['type']) {?><?php echo $_GET['type'];?>
<?php } else { ?>Videos<?php }?></span>
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul role="menu" class="dropdown-menu">
                            <?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['stypes'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Cbucket']->value->search_types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['stypes']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['counter']->value==3) {?>
                            <li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['stypes']->value||$_GET['type']=='') {?>  class="active"  <?php }?>>
                                <a class="s-types" href="#"><?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
</a>
                            </li>
                            <?php } else { ?>
                            <li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['stypes']->value) {?>  class="active" <?php }?>>
                                <a class="s-types" href="#"><?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
</a>
                            </li>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
                            <?php } ?>
                        </ul>
                        <input tabindex="-1" type="submit" name="cbsearch" id="cbsearch" value="<?php echo smarty_lang(array('code'=>'Go'),$_smarty_tpl);?>
" class="btn btn-default minus-marginLeft" />
                    </div>
                    
                </div>
                
                
            </form>
        </div>
        <?php if (userid()) {?>
        <li class="dropdown myaccount-dd">
            <span class="dropdown-toggle theme_color col-md-12" data-toggle="dropdown"><img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['usr_head_thumb']->value;?>
" style="width: 40px; height: 40px;"/><b class="caret"></b></span>
            <ul class="dropdown-menu">
                <li>
                    <div class="adminthumb">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['logged_in_user']->value);?>
">
                        <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['usr_head_thumb']->value;?>
"/>
                        <h4><?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
</h4>     
                        </a>
    
                    </div>
                      
                </li>
                <?php if (has_access('admin_access')) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_baseurl']->value;?>
"><?php echo smarty_lang(array('code'=>"Admin area"),$_smarty_tpl);?>
</a></li>
                <?php }?>
                <li><a href="<?php echo cblink(array('name'=>'my_account'),$_smarty_tpl);?>
<?php echo userid(array(),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"my_account"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo cblink(array('name'=>'my_videos'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"Manage Videos"),$_smarty_tpl);?>
</a></li>
                <li><a href="<?php echo cblink(array('name'=>'channels'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"View Channels"),$_smarty_tpl);?>
</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo cblink(array('name'=>'logout'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"Logout"),$_smarty_tpl);?>
</a></li>
            </ul>
        </li>
        <?php } else { ?>
        <li>
            <div class=" mlm mrm">
                <a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span></a>
            </div>

        </li>
        <?php }?>
    </ul>
</div>
<!-- Ends -->
</nav>

<div class="modal fade" id="login-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form name="login-form" role="form" action="<?php echo cblink(array('name'=>'signup'),$_smarty_tpl);?>
" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><?php echo smarty_lang(array('code'=>"Login"),$_smarty_tpl);?>
</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="login_username"><?php echo smarty_lang(array('code'=>"Username"),$_smarty_tpl);?>
</label>
                        <input type="text" class="form-control" id="login_username"  name="username"  placeholder="Enter username">
                    </div>

                    <div class="form-group">
                        <label for="login_password"><?php echo smarty_lang(array('code'=>"Password"),$_smarty_tpl);?>
</label>
                        <input type="password" class="form-control" id="login_password" name="password" placeholder="Enter password">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> <?php echo smarty_lang(array('code'=>"Remember me"),$_smarty_tpl);?>

                        </label>
                    </div>

                    <div align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/forgot.php"><?php echo smarty_lang(array('code'=>'user_forgot_password'),$_smarty_tpl);?>
</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/forgot.php?mode=recover_username"><?php echo smarty_lang(array('code'=>'user_forgot_username'),$_smarty_tpl);?>
</a></div>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo cblink(array('name'=>'signup'),$_smarty_tpl);?>
" class="btn btn-primary btn-success btn-sm pull-left"><?php echo smarty_lang(array('code'=>"Create Account"),$_smarty_tpl);?>
</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smarty_lang(array('code'=>"Cancel"),$_smarty_tpl);?>
</button>
                    <input type="submit" class="btn btn-primary" value="<?php echo smarty_lang(array('code'=>'Login'),$_smarty_tpl);?>
" name="login">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $(document).ready(function(){
        $(".cbsearchtype a").on({
            click: function(e){
                e.preventDefault();
                var prent_li = $(this).parents();
                $('.type').val($(this).html());
                $('.cbsearchtype li').removeClass('active');
                prent_li.addClass('active');
            }
            });
        
        $('.show-small-form').click(function() {
            $('.form-small').toggleClass('show');   
        });

        $('.s-types').on("click", function(){
            var _this = $(this);
            var text = _this.html();
            $('.search-type').html(text);
        });

    });

</script><?php }} ?>
