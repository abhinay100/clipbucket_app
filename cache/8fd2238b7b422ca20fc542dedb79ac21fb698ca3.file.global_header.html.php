<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:10:41
         compiled from "/var/www/styles/cb_27/layout/global_header.html" */ ?>
<?php /*%%SmartyHeaderCode:160397953055e444414ae976-93326756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fd2238b7b422ca20fc542dedb79ac21fb698ca3' => 
    array (
      0 => '/var/www/styles/cb_27/layout/global_header.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160397953055e444414ae976-93326756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'baseurl' => 0,
    'imageurl' => 0,
    'theme' => 0,
    'cache_buster' => 0,
    'cbvid' => 0,
    'quicklist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e44441897a91_94399789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e44441897a91_94399789')) {function content_55e44441897a91_94399789($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/includes/smartyv3/plugins/modifier.date_format.php';
?><!DOCTYPE HTML>

<html>
    <head>
        <?php if (in_dev()) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['cache_buster'])) {$_smarty_tpl->tpl_vars['cache_buster'] = clone $_smarty_tpl->tpl_vars['cache_buster'];
$_smarty_tpl->tpl_vars['cache_buster']->value = microtime(true); $_smarty_tpl->tpl_vars['cache_buster']->nocache = null; $_smarty_tpl->tpl_vars['cache_buster']->scope = 0;
} else $_smarty_tpl->tpl_vars['cache_buster'] = new Smarty_variable(microtime(true), null, 0);?>
        <?php } else { ?>
            <?php if (isset($_smarty_tpl->tpl_vars['cache_buster'])) {$_smarty_tpl->tpl_vars['cache_buster'] = clone $_smarty_tpl->tpl_vars['cache_buster'];
$_smarty_tpl->tpl_vars['cache_buster']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->version; $_smarty_tpl->tpl_vars['cache_buster']->nocache = null; $_smarty_tpl->tpl_vars['cache_buster']->scope = 0;
} else $_smarty_tpl->tpl_vars['cache_buster'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->version, null, 0);?>
        <?php }?>

        <script src="//code.jquery.com/jquery-latest.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            var loading = '<i class="fa fa-spinner fa-spin"></i> <?php echo smarty_lang(array('code'=>"loading"),$_smarty_tpl);?>
...';
            var baseurl = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
";
            var imageurl = "<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
";
        </script>
      
          <!-- custom scrollbars plugin -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script>
            (function($){
                $(window).load(function(){
                    $("#content_1").mCustomScrollbar({
                        scrollButtons:{
                            enable:true
                        }
                    });
                });
            })(jQuery);
        </script>

        <!-- ClipBucket v<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->version;?>
 -->
        <meta name="copyright" content="ClipBucket - Integrated Units 2007 - <?php echo smarty_modifier_date_format(time(),"%Y");?>
" />
        <meta name="author" content="Arslan Hassan - http://clip-bucket.com/arslan-hassan" />
        <meta name="author" content="Fawaz Tahir - http://clip-bucket.com/fawaz-tahir" />
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/favicon.ico">
        <link rel="icon" type="image/ico" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/favicon.ico" />

        <!-- RSS FEEDS -->
        <?php echo rss_feeds(array('link_tag'=>true),$_smarty_tpl);?>


        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['keywords'];?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['description'];?>
" />
        <meta name="distribution" content="global" />


        <title><?php echo cbtitle(array(),$_smarty_tpl);?>
</title>


        <link href='//fonts.googleapis.com/css?family=Rambla:400,700|Roboto:400,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/bootstrap.min.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
" />
        <?php if (this_page('index')) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/home.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
" />
        <?php }?>
        
     
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/main.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/ClipBucket.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/channel.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/groups.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/header.css?cache=<?php echo $_smarty_tpl->tpl_vars['cache_buster']->value;?>
">

        

        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/font-awesome.min.css">

        <?php if (this_page('watch_video')||this_page('view_item')||this_page('view_channel')) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/watch-video.css">
        
    	<?php }?>

    	<?php if (this_page('view_channel')) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/view-channel-header.css">
    	<?php }?>


    	
        <?php if (this_page('photo_upload')||this_page('upload')) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/uploader.css">
        <?php }?>
        <?php if (this_page('view_channel')) {?>
         <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/view_channel.css">
        <?php }?>

        <?php if (this_page('signup')) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/styles/global/jquery_ui.css">
        <?php }?>
       
		<?php if (this_page('index')) {?>
			<script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/custom-elements.js"></script>
		<?php }?>
        <?php echo ANCHOR(array('place'=>'ajax_data'),$_smarty_tpl);?>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/functions.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/admin_functions.js"></script>
        
        <script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/bootstrap.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/masonary.desandro.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/clipbucket.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/masonary.desandro.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script



		<!-- Script For Home Page Videos Slider //-->
		<script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/jssor.slider.min.js"></script>

        <script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/uslider_js/jquery.easing.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/uslider_js/jquery.mousewheel.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/uslider_js/jquery.ulslide.js?v=4"></script>
		<!-- Script For Home Page Videos Slider //-->

        <?php if (isset($_smarty_tpl->tpl_vars['quicklist'])) {$_smarty_tpl->tpl_vars['quicklist'] = clone $_smarty_tpl->tpl_vars['quicklist'];
$_smarty_tpl->tpl_vars['quicklist']->value = json_encode($_smarty_tpl->tpl_vars['cbvid']->value->get_quicklist()); $_smarty_tpl->tpl_vars['quicklist']->nocache = null; $_smarty_tpl->tpl_vars['quicklist']->scope = 0;
} else $_smarty_tpl->tpl_vars['quicklist'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['cbvid']->value->get_quicklist()), null, 0);?>
        
        <script>
            $(document).ready(function(){
                var quicklist_videos = '<?php echo $_smarty_tpl->tpl_vars['quicklist']->value;?>
';
                if (quicklist_videos)
                quicklist_videos_check(quicklist_videos);

                loading = '<i class="fa fa-spinner fa-spin"></i> <?php echo smarty_lang(array('code'=>"loading"),$_smarty_tpl);?>
...';
               /* var container = document.querySelector('.the_');
                var msnry = new Masonry( container, {
                    // options

                    itemSelector: '.the-item',
                    stamp : '.ad-box'

                });
    */
    //            less.watch({
    //            poll : 300
    //            });

            // For changing language on Click in footer
            $( 'ul#photos li:visible' ).each( function( i ){
                $( this )[ (1&i) ? 'addClass' : 'removeClass' ]( 'photo-land-no' );
            });

            // Language change select code
            $('#lang_selector').change(function(){
            var optionSelectedValue = $('#lang_selector option:selected').val();
            if(optionSelectedValue)
                {
                    var $currentLocation = window.location.href,
                            matchedElement = $currentLocation.match(/\?/);
                            
                    if(matchedElement == null)
                    {
                        window.location = "?set_site_lang="+optionSelectedValue;    
                    } else {
                        window.location = window.location+"&set_site_lang="+optionSelectedValue;    
                    }
                }
            });
            
            });

        </script>


        <?php echo include_header(array('file'=>'global_header'),$_smarty_tpl);?>


    </head><?php }} ?>
