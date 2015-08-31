<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:43
         compiled from "/var/www/styles/cb_27/layout/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:86388701455e444435b20e2-89702753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7da1cffa83bb556bb4ea65c434aae7c2d85d4de9' => 
    array (
      0 => '/var/www/styles/cb_27/layout/footer.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86388701455e444435b20e2-89702753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'foot_menu' => 0,
    'fm' => 0,
    'cbobjects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4444370b6e7_95753344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4444370b6e7_95753344')) {function content_55e4444370b6e7_95753344($_smarty_tpl) {?>
<footer>
        <div class="row col-md-12 clearfix footer_pad">
            <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->footer();?>

            <div class="col-md-8 col-sm-6 col-xs-12">
                <ul class="nav list-unstyled pull-left">
                    <?php if (isset($_smarty_tpl->tpl_vars['foot_menu'])) {$_smarty_tpl->tpl_vars['foot_menu'] = clone $_smarty_tpl->tpl_vars['foot_menu'];
$_smarty_tpl->tpl_vars['foot_menu']->value = foot_menu(); $_smarty_tpl->tpl_vars['foot_menu']->nocache = null; $_smarty_tpl->tpl_vars['foot_menu']->scope = 0;
} else $_smarty_tpl->tpl_vars['foot_menu'] = new Smarty_variable(foot_menu(), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['fm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foot_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fm']->key => $_smarty_tpl->tpl_vars['fm']->value) {
$_smarty_tpl->tpl_vars['fm']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['fm']->value['name']!='') {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['fm']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['fm']->value['target']) {?> target="<?php echo $_smarty_tpl->tpl_vars['fm']->value['target'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['fm']->value['onclick']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['fm']->value['onclick'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['fm']->value['name'];?>
</a></li>
                    <?php }?>
                    <?php } ?>

                    <li>
                         <div class="lang_wrapper">
                          <?php if (config("allow_language_change")) {?>
                            <form action="" method="post" name="change_lang">
                                <?php echo $_smarty_tpl->tpl_vars['cbobjects']->value->_display_languages();?>
              
                            </form>
                          <?php }?>
                        </div>
                    </li>
                </ul> 

                 

            </div>

           <div class="col-md-3 col-sm-3 col-xs-12">
              
           
              <!-- <div class="temp_wrapper">
              <?php if (config("allow_template_change")) {?>
                 <form action="" method="post" name="change_temp">
                    <?php echo $_smarty_tpl->tpl_vars['cbobjects']->value->display_templates();?>
              
                </form>
              <?php }?>
             </div>   -->
            
            </div>
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                   <ul class="nav list-unstyled pull-right">
                    <!--<li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Bad Page</a></li>-->
                    <li><a href="http://clipbucket.com/">Forged By ClipBucket</a></li>
                </ul>
            </div>
        </div><!--//row-->
</footer>

<script>
    $(".lang_ul li a").on({
            click: function(e){
            e.preventDefault();
            var prent_li = $(this).parents();
            $('.lang').html($(this).html()+" <span class='caret'></span>");
            $('.lang_ul li').removeClass('active');
            prent_li.addClass('active');
        }
    });
</script>

<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->footer();?>


<?php }} ?>
