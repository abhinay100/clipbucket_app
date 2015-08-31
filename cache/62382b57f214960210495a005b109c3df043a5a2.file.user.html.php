<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:59
         compiled from "/var/www/styles/cb_27/layout/blocks/user.html" */ ?>
<?php /*%%SmartyHeaderCode:58072226855e44453746bd5-84353428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62382b57f214960210495a005b109c3df043a5a2' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/user.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58072226855e44453746bd5-84353428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_type' => 0,
    'user' => 0,
    'userquery' => 0,
    'imageurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44453a38184_88672607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44453a38184_88672607')) {function content_55e44453a38184_88672607($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['block_type']->value==''||$_smarty_tpl->tpl_vars['block_type']->value=='normal') {?>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">
            <hr>
            <div class="cb-user-thumb pull-left">
                <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value);?>
" class="img-circle full-width">
                </a>
            </div>
            <div class="col-md-10">
                <div class="pull-left">
                    <h4><a class="show" href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></h4>
                    <ul class="list-unstyled">
                        <?php if (isSectionEnabled('videos')) {?>
                        <li class="label label-primary" style="display: inline"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
</li>
                        <?php }?>
                        <?php if (isSectionEnabled('photos')) {?>
                        <li class="label label-info" style="display: inline"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_photos']);?>
 <?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>
</li>
                        <?php }?>
                        <li class="label label-info" style="display: inline"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</li>
                        <li class="label label-danger" style="display: inline"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['subscribers']);?>
 <?php echo smarty_lang(array('code'=>"subscribers"),$_smarty_tpl);?>
</li>
                        <!--<li><?php echo smarty_lang(array('code'=>"last_active"),$_smarty_tpl);?>
 : <?php echo nicetime($_smarty_tpl->tpl_vars['user']->value['last_active']);?>
</li>-->
                    </ul>
                </div>
  </div>

        </div>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='groups_show') {?>
<div class="clearfix" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">
    <div class="cb-user-thumb pull-left">
        <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value);?>
" class="full-width">
        </a>
    </div>
    <div class="user-detail-block">
        <div class="clearfix">
            <h4><a class="show" href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></h4>
            <div class="clearfix info-box">
				<div class="pull-left small"><span class="bg-eye"></span>&nbsp;<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</span></div>
				<div class="pull-right small"><span class="bg-videocam"></span>&nbsp;<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>'Videos'),$_smarty_tpl);?>
</span></div>
			</div>
			<div class="clearfix">
				<div class="pull-left small"><span class="bg-photos"></span>&nbsp;<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_photos']);?>
 <?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>
</span></div>
				<div class="pull-right small"><span class="fa fa-users fa-lg"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($_smarty_tpl->tpl_vars['user']->value['subscribers']);?>
 <?php echo smarty_lang(array('code'=>"subscribers"),$_smarty_tpl);?>
</div>
			</div>
            <!--<ul class="list-unstyled ">
                <?php if (isSectionEnabled('videos')) {?>
                <li class="label " style="display: inline"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
</li>
                <?php }?>
                <?php if (isSectionEnabled('photos')) {?>
                <li class="label " style="display: inline"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_photos']);?>
 <?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>
</li>
                <?php }?>
                <li class="label" style="display: inline"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</li>
                <li class="label" style="display: inline"><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['subscribers']);?>
 <?php echo smarty_lang(array('code'=>"subscribers"),$_smarty_tpl);?>
</li>
                *<li><?php echo smarty_lang(array('code'=>"last_active"),$_smarty_tpl);?>
 : <?php echo nicetime($_smarty_tpl->tpl_vars['user']->value['last_active']);?>
</li>-->
            <!--</ul>-->






        </div>
    </div>
    <!-- <div class="user_icon">
        <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
        <img class="opacity_low" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/user_next_icon.png" width="25" height="25" />
        </a>
    </div> -->
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='small') {?>
	<div class="col-md-2" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
" align="center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value);?>
" class="img-thumbnail" class="user_mid_thumb">
		</a>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='medium') {?>
	<div class="user_block_med" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">
		<div class="thumb_container_medium" >
			<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value);?>
" class="img-thumbnail" class="user_thumb_medium">
			</a>
		</div>
		<div class="prof_title"><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></div>
		<?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
 <?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=="friends") {?>
	<div class="pull-left marginLeft group_thumb_member" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">
		<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">
			<img class="group_thumb " src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value,'size'=>'small'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" />
		</a>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=="topic_view") {?>
	<div class="topicStarterAvatar moveL">
		<i class="topicStarterAvatarBG" style="background:url(<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
) center no-repeat; width:56px; height:56px;"><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></i>
	</div>
<?php }?><?php }} ?>
