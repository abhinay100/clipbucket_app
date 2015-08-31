<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:59
         compiled from "/var/www/styles/cb_27/layout/blocks/category_list.html" */ ?>
<?php /*%%SmartyHeaderCode:60193783555e44453542542-97996064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b9504a91ca4bbe7d391289d8e95309411fbe7e' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/category_list.html',
      1 => 1438313208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60193783555e44453542542-97996064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e444535d2684_93246642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e444535d2684_93246642')) {function content_55e444535d2684_93246642($_smarty_tpl) {?><div class="col-md-3 paddingleft0">
  <div class="ad"><?php echo getAd(array('place'=>'ad_320x250'),$_smarty_tpl);?>
</div>
  <div class="left-navbar-collapse"> 
    <div class="navbar-collapse collapse padding-left-right-zero" id="collapsed-navigation">
      <ul class="nav navbar-stacked nopadding">
        <?php echo getSmartyCategoryList(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'echo'=>"TRUE",'list_style'=>"collapsed",'output'=>"list",'with_all'=>"TRUE"),$_smarty_tpl);?>

      </ul>
    </div>
  </div>
</div>

<script>
$(document).ready(function (){
$('.CategoryToggler').css({
   'padding-left' : '1px',
     'padding-right' : '1px',
         'cursor' : 'pointer'
});

$('.CategoryToggler').addClass('CategoryToggler2');
$('.CategoryToggler').on("click", function (){

$(this).toggleClass('CategoryToggler2');
if(!$(this).hasClass('CategoryToggler2')) 
{

$('.sub_categories').slideDown();

}
else

{

  $('.sub_categories').slideUp();
}

});

});
</script>
<style type="text/css">
  
  .left-navbar-collapse .navbar-collapse {
    max-height: 100% !important;
    height: auto !important;
  }

</style><?php }} ?>
