<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:28:14
         compiled from "/var/www/styles/cb_27/layout/blocks/common/rating.html" */ ?>
<?php /*%%SmartyHeaderCode:197060109555e4485e3401e2-88047619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78540efde64ae36571a23c4b64ab85094bce6732' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/common/rating.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197060109555e4485e3401e2-88047619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'disable' => 0,
    'id' => 0,
    'type' => 0,
    'perc' => 0,
    'likes' => 0,
    'dislikes' => 0,
    'rating_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4485e3c0719_44980387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4485e3c0719_44980387')) {function content_55e4485e3c0719_44980387($_smarty_tpl) {?><!--CB like and dislike section-->
<div id="" class="pull-right clearfix full-width">
    <div class="newRating clearfix mbm">
    	<ul class="like-dislike-block clearfix">
    		<li><a <?php if (!$_smarty_tpl->tpl_vars['disable']->value) {?> onclick="rate('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','5','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"<?php }?> href="javascript:void(0)">Like</a></li>
    	   <li><span class="_percentage"><?php echo $_smarty_tpl->tpl_vars['perc']->value;?>
</span></li>
    		<li><a <?php if (!$_smarty_tpl->tpl_vars['disable']->value) {?> onclick="rate('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','1','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"<?php }?> href="javascript:void(0)">Dislike</a></li>
    	</ul>
    </div>
    <div  class="clearfix like-dislike-text">
    <?php echo $_smarty_tpl->tpl_vars['likes']->value;?>
 Likes &nbsp;|&nbsp; <?php echo $_smarty_tpl->tpl_vars['dislikes']->value;?>
 Dislikes
    </div>
    <div id="rating_result_container" class="watch-vid-error">
     <?php if ($_smarty_tpl->tpl_vars['rating_msg']->value) {?><?php echo $_smarty_tpl->tpl_vars['rating_msg']->value;?>
<?php }?>   
    </div>
</div>

<script type="text/javascript">
var _percent = '<?php echo $_smarty_tpl->tpl_vars['perc']->value;?>
';
var _numb = parseInt(_percent);
if ( _numb > 49 )
$('._percentage').addClass('likes_perc_more');
else
$('._percentage').addClass('likes_perc_less');
</script>
<?php }} ?>
