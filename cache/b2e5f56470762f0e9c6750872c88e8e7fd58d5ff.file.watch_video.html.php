<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:28:13
         compiled from "/var/www/styles/cb_27/layout/watch_video.html" */ ?>
<?php /*%%SmartyHeaderCode:133008515255e4485dc03c84-25824394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2e5f56470762f0e9c6750872c88e8e7fd58d5ff' => 
    array (
      0 => '/var/www/styles/cb_27/layout/watch_video.html',
      1 => 1438319606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133008515255e4485dc03c84-25824394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vdo' => 0,
    'video' => 0,
    'userquery' => 0,
    'Cbucket' => 0,
    'cbvid' => 0,
    'files' => 0,
    'file' => 0,
    'quality' => 0,
    'file_quality' => 0,
    'myquery' => 0,
    'theme' => 0,
    'videos' => 0,
    'items' => 0,
    'playlist' => 0,
    'type' => 0,
    'object_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4485e0df5a0_64301515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4485e0df5a0_64301515')) {function content_55e4485e0df5a0_64301515($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['video'])) {$_smarty_tpl->tpl_vars['video'] = clone $_smarty_tpl->tpl_vars['video'];
$_smarty_tpl->tpl_vars['video']->value = $_smarty_tpl->tpl_vars['vdo']->value; $_smarty_tpl->tpl_vars['video']->nocache = null; $_smarty_tpl->tpl_vars['video']->scope = 0;
} else $_smarty_tpl->tpl_vars['video'] = new Smarty_variable($_smarty_tpl->tpl_vars['vdo']->value, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['type'])) {$_smarty_tpl->tpl_vars['type'] = clone $_smarty_tpl->tpl_vars['type'];
$_smarty_tpl->tpl_vars['type']->value = 'video'; $_smarty_tpl->tpl_vars['type']->nocache = null; $_smarty_tpl->tpl_vars['type']->scope = 0;
} else $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('video', null, 0);?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 html5_player_enlarge nopadding-right ">
            <div class="cb-box pad-bottom-sm">
                <div id="cb_player" class="no-pad cb_player">
                    <?php echo flashPlayer(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>'100%','height'=>'100%'),$_smarty_tpl);?>

                </div>
                <!-- cb_player end -->

                <div class="watch-vid-title  mbm">
                    <h1><?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
</h1> 
                </div>
                <div class="vid-detail-sec">
                    <div class="watch-vid-thumb">    
                        <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->avatar($_smarty_tpl->tpl_vars['video']->value);?>
" class="img-circle"/>
                    </div> 
                    <div class="watch-vid-user-sec">
                        <div class="watch-vid-user-name mtm">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
"> <?php echo $_smarty_tpl->tpl_vars['video']->value['username'];?>
</a>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['video']->value['userid']!=userid()) {?>
                        <a id="subscribeUser" class="btn btn-xs btn-primary" href="javascript:void(0)">
                        <?php echo lang('Subscribe');?>

                        </a><?php }?>
                    </div>
                    <div class="watch-vid-rating-sec">
                        <div class="watch-vid-rating-view">
                            <?php echo number_format($_smarty_tpl->tpl_vars['vdo']->value['views']);?>

                            <span class="small font18"><?php echo lang('View');?>
<?php if ($_smarty_tpl->tpl_vars['vdo']->value['views']>1) {?><?php echo lang('s');?>
<?php }?></span>
                        </div>
                        <div class="watch-vid-thumbsupdown-sec" id="rating_container">
                            <?php echo show_video_rating(array('rating'=>$_smarty_tpl->tpl_vars['vdo']->value['rating'],'ratings'=>$_smarty_tpl->tpl_vars['vdo']->value['rated_by'],'total'=>'10','id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'video'),$_smarty_tpl);?>

                        </div>    
                    </div>         
                </div>
                <!-- vid-detail-sec end -->




                
                <div class="cb-item-desc-container clearfix grey-tabs">

                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#cb-item-info" data-toggle="tab"><i class="fa fa-info"></i>&nbsp;<?php echo lang('Info');?>
</a>
                        </li>
                        <li>
                            <a href="#cb-item-share" data-toggle="tab"><i class="fa fa-share-square-o"></i>&nbsp;<?php echo lang('Share');?>
</a>
                        </li>
                        <li>
                            <a href="#cb-item-addto" data-toggle="tab"><i class="fa fa-plus"></i>&nbsp;<?php echo lang('Add to');?>
</a>
                        </li>
                        <li>
                            <a id="reportVideo" href="#cb-item-report" data-toggle="tab"><i class="fa fa-flag"></i>&nbsp;<?php echo lang('Report');?>
</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="cb-item-info">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-padding">
                            	<p><?php echo description(description($_smarty_tpl->tpl_vars['video']->value['description']));?>
</p>
                                <div class="watch-vid-tag">
                                    <strong ><?php echo lang('Category:');?>
&nbsp;</strong>
                                    <span ><?php echo categories($_smarty_tpl->tpl_vars['vdo']->value['category'],'video');?>
</span>
                                </div>
                                <div class="watch-vid-tag">
                                    <strong ><?php echo lang('Tags:');?>
&nbsp;</strong>
                                    <span ><?php echo tags($_smarty_tpl->tpl_vars['vdo']->value['tags'],'videos');?>
</span>
                                </div>
                                <div class="watch-vid-tag">
                                    <strong >Published:&nbsp;</strong>
                                    <span ><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</span>
                                </div>
                                <!-- view sec hide on told arslan bhai -->
                                <!-- <div class="mtm">
                                        <strong><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</strong> : <?php echo number_format($_smarty_tpl->tpl_vars['vdo']->value['views']);?>
 &ndash;
                                        <strong><?php echo smarty_lang(array('code'=>'duration'),$_smarty_tpl);?>
</strong> : <?php echo SetTime($_smarty_tpl->tpl_vars['vdo']->value['duration']);?>
 &ndash;
                                        <strong><?php echo smarty_lang(array('code'=>'comments'),$_smarty_tpl);?>
</strong> : <?php echo number_format($_smarty_tpl->tpl_vars['vdo']->value['comments_count']);?>

                                </div> -->
                        	</div>

                        <?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_download']==1&&$_smarty_tpl->tpl_vars['cbvid']->value->downloadable($_smarty_tpl->tpl_vars['vdo']->value)) {?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 no-padding" style="margin-top:25px;">
                                 <div class="watch-vid-social-sec col-lg-12 pull-right no-padding">
                                    <a class="cb-item-social-icon twitter" href="https://twitter.com/share" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="cb-item-social-icon googlep" href="https://plus.google.com/share?url=<?php echo urlencode(videolink($_smarty_tpl->tpl_vars['video']->value));?>
" target="_blank">
                                        <i class="fa fa-google-plus"></i>

                                    </a>
                                    <a class="cb-item-social-icon facebook" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(videoLink($_smarty_tpl->tpl_vars['video']->value));?>
&p[images][0]=<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
&p[title]=<?php echo urlencode(title($_smarty_tpl->tpl_vars['video']->value['title']));?>
&p[summary]=<?php echo urlencode(description($_smarty_tpl->tpl_vars['video']->value['description']));?>
" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                          
                                    </a>
                                </div> 
                                <div class="dropdown col-lg-12 pull-right no-padding text-right">
                                  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="margin-top: 10px;">
                                    Download
                                        <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <?php if (isset($_smarty_tpl->tpl_vars['files'])) {$_smarty_tpl->tpl_vars['files'] = clone $_smarty_tpl->tpl_vars['files'];
$_smarty_tpl->tpl_vars['files']->value = get_video_files($_smarty_tpl->tpl_vars['vdo']->value,true,true); $_smarty_tpl->tpl_vars['files']->nocache = null; $_smarty_tpl->tpl_vars['files']->scope = 0;
} else $_smarty_tpl->tpl_vars['files'] = new Smarty_variable(get_video_files($_smarty_tpl->tpl_vars['vdo']->value,true,true), null, 0);?>
                                  <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                                  <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = explode('-',$_smarty_tpl->tpl_vars['file']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(explode('-',$_smarty_tpl->tpl_vars['file']->value), null, 0);?>
                                  <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = explode('.',$_smarty_tpl->tpl_vars['quality']->value[1]); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(explode('.',$_smarty_tpl->tpl_vars['quality']->value[1]), null, 0);?>
                                  <?php if (isset($_smarty_tpl->tpl_vars['file_quality'])) {$_smarty_tpl->tpl_vars['file_quality'] = clone $_smarty_tpl->tpl_vars['file_quality'];
$_smarty_tpl->tpl_vars['file_quality']->value = $_smarty_tpl->tpl_vars['quality']->value[0]; $_smarty_tpl->tpl_vars['file_quality']->nocache = null; $_smarty_tpl->tpl_vars['file_quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['file_quality'] = new Smarty_variable($_smarty_tpl->tpl_vars['quality']->value[0], null, 0);?>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"  download><?php echo $_smarty_tpl->tpl_vars['vdo']->value['file_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['file_quality']->value;?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-download-alt"></span></a>
                                        
                                    </li>
                                  <?php } ?>
                                  </ul>
                                </div>
                           </div>
                           <br>
                           <?php }?>        
                        </div>

                        <div class="tab-pane" id="cb-item-share">
                            <?php echo show_share_form(array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'video'),$_smarty_tpl);?>

                        </div>

                        <div class="tab-pane" id="cb-item-addto">
                            <div class="clearfix visible-xs-block" style="margin-bottom:25px;">
                                <div id="video_action_result_cont" style="display:none;"></div>   
                                <a  class="btn mtm btn-block btn-primary" href="javascript:void(0)" onclick="add_to_fav('video','<?php echo $_smarty_tpl->tpl_vars['vdo']->value['videoid'];?>
');" style="color:white;">Add to My Favorites</a>
                            </div>

                            <div class="alert ">
                            <?php echo show_playlist_form(array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'video'),$_smarty_tpl);?>

                            </div>
                            <?php if (userid()) {?>
                            <div class="alert ">
                                <div class="clearfix"></div>
                                <div align="right"><a href="javascript:void(0)"
                                     onclick="$('#addCollectionCont').toggle()"
                                        style="text-decoration:none"><strong>+ <?php echo smarty_lang(array('code'=>'add_to_my_collection'),$_smarty_tpl);?>
</strong></a>
                                </div>
                                <div id="addCollectionCont" style="display:none"><?php echo show_collection_form(array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'Video'),$_smarty_tpl);?>
</div>
                            </div>
                            <?php }?>    
                        </div>

                        <div class="tab-pane" id="cb-item-report">
                            <?php echo show_flag_form(array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'video'),$_smarty_tpl);?>

                        </div>

                    </div>
                </div>
                
                <div id="messageFav" class="alert alert-info marginTop" style="display:none"></div>
                <div id="test1"></div>
	    		<div id="reply" class="clearfix"> 
	    		    <div class="pad-bottom">
	                    <div  class="addComment clearfix">
                            <div class="com_count" id="com_count"><span><?php echo smarty_lang(array('code'=>'comments'),$_smarty_tpl);?>
 </span> <?php echo $_smarty_tpl->tpl_vars['vdo']->value['comments_count'];?>
</div>
	                        <?php if ($_smarty_tpl->tpl_vars['myquery']->value->is_commentable($_smarty_tpl->tpl_vars['vdo']->value,'v')) {?>
	                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/comments/add_comment.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'v'), 0);?>

	                        <?php } else { ?>
	                        <div class="alert alert-warning"><?php echo smarty_lang(array('code'=>'comm_disabled_for_vid'),$_smarty_tpl);?>
</div>
	                        <?php }?>
	                    </div>
	                   	<div id="comments">
	           				<ul class="list-unstyled" id="userCommentsList"></ul>
	           			</div>
	    		    </div>
	    		</div> 
            </div>
        </div>
        
		<!--Side bar start--> 
        <div class="col-lg-4 col-md-4 visible-lg visible-md side-video pull-right">
            <div class="cb-box">
                 <div class="ad"><?php echo getAd(array('place'=>'ad_320x250'),$_smarty_tpl);?>
</div>
                <!-- <a href="http://www.arvixe.com/clipbucket_hosting?utm_campaign=300x250_Demo&utm_medium=banner&utm_source=clipbucket.com"><img class="banner" src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/assets/images/add320x250.png" style="margin-bottom: 10px; width: 100%;" >
                </a>-->
                <!-- <h3><?php echo smarty_lang(array('code'=>"Most Popular"),$_smarty_tpl);?>
</h3> -->
    <?php if ($_GET['play_list']=='') {?>
                <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
                 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/videos/video_popular.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } ?>
                <?php } else { ?>

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['name'] = 'plist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total']);
?>
                  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']],'control'=>"onWatch",'pid'=>$_smarty_tpl->tpl_vars['playlist']->value['playlist_id']), 0);?>

        <?php endfor; endif; ?>

        <?php }?>
            </div>
        </div>


        <!-- /Side bar-->
	</div>
</div>

<div style="height:20px"> </div>
<script>
    //var aspect_ratio = 1.77778
    var aspect_ratio = 2.2
    var $cb_player = $("#cb_player");

    $(document).ready(function(){
        $cb_player.height( $cb_player.width() / aspect_ratio );

        var videoInfo = $("#videoDescription").text();
        var newInfo = videoInfo.replace(/(((https?:\/\/)|([\s\t]))(www.)?([a-z0-9]+)\.[a-z]+)/g, '<a href="$1">$1</a>');
        $("#videoDescription").html(newInfo);

        comments_voting = '<?php echo $_smarty_tpl->tpl_vars['vdo']->value['comment_voting'];?>
';
        _cb.getAllComments(
            '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
',
            '<?php echo $_smarty_tpl->tpl_vars['vdo']->value['videoid'];?>
',
            '<?php echo $_smarty_tpl->tpl_vars['vdo']->value['last_commented'];?>
',1,
            '<?php echo $_smarty_tpl->tpl_vars['vdo']->value['comments_count'];?>
',
            '<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
'
        );


        // $('.cb-item-description').readmore({
        //     speed: 75,
        //     maxHeight: 120,
        //     moreLink : '<a href="#" class="btn btn-min btn-block btn-primary"><i class="glyphicon glyphicon-arrow-down"></i> <?php echo lang("Read more");?>
</a>',
        //     lessLink : '<a href="#" class="btn btn-min btn-block btn-default"><?php echo lang("Close");?>
</a>'
        // });
        $("#reportVideo").on({
            click : function(e){
                e.preventDefault();
                $("#flag_item").show();
            }
        });

        $("#subscribeUser").on({
            click: function(e){
                e.preventDefault();
                _cb.subscribeToChannel('<?php echo $_smarty_tpl->tpl_vars['video']->value['userid'];?>
','subscribe_user','video_detail_result_cont');
            }
        });
    });

    var resizePlayer =  _cb.debounce(function() {
        $cb_player.height( $cb_player.width() / aspect_ratio );
    }, 500, false);

    $(window).resize(resizePlayer);

</script>

<style type="text/css">
footer{
     position: relative;
    top: 65px;
}
</style><?php }} ?>
