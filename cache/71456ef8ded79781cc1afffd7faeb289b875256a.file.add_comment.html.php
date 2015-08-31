<?php /* Smarty version Smarty-3.1.15, created on 2015-08-31 05:28:14
         compiled from "/var/www/styles/cb_27/layout/blocks/comments/add_comment.html" */ ?>
<?php /*%%SmartyHeaderCode:214379578355e4485e98a4a0-31560412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71456ef8ded79781cc1afffd7faeb289b875256a' => 
    array (
      0 => '/var/www/styles/cb_27/layout/blocks/comments/add_comment.html',
      1 => 1438313206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214379578355e4485e98a4a0-31560412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'Cbucket' => 0,
    'id' => 0,
    'captcha' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e4485ead5e40_22088703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4485ead5e40_22088703')) {function content_55e4485ead5e40_22088703($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['userquery']->value->login_check('',true)||$_smarty_tpl->tpl_vars['Cbucket']->value->configs['anonym_comments']=='yes') {?>
   <div class="add_comment_box" id="add_comment"> </div>
<div class="">
    <div id="comment-add-err"></div>
  <script type="text/javascript">
//Edit the counter/limiter value as your wish
var count = "125";
//Example: var count = "175";
function limiter(){
var tex = document.myform.comment.value;
var len = tex.length;
if(len > count){
tex = tex.substring(0,count);
document.myform.comment.value =tex;
return false;
}
document.myform.limit.value = count-len;
}
</script>
    <form class=""  id="comment_form" name="myform">

        <input type="hidden" name="reply_to" id="reply_to" value="0">
        <input type="hidden" name="obj_id" id="obj_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <?php if (!$_smarty_tpl->tpl_vars['userquery']->value->login_check('',true)&&$_smarty_tpl->tpl_vars['Cbucket']->value->configs['anonym_comments']=='yes') {?>

        <div class="form-group">
            <label for="comment_name">
                <?php echo smarty_lang(array('code'=>'name'),$_smarty_tpl);?>

            </label>
            <input type="text" name="name" id="comment_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="comment_email">
                <?php echo smarty_lang(array('code'=>'email_wont_display'),$_smarty_tpl);?>

            </label>
            <input type="email" name="email" id="comment_email" class="form-control">
        </div>



        <?php } else { ?>
            <strong class="comment-as"><?php echo sprintf(lang('Comment as %s'),$_smarty_tpl->tpl_vars['userquery']->value->username);?>
</strong>
        <?php }?>

        <?php echo ANCHOR(array('place'=>'before_compose_box'),$_smarty_tpl);?>



        <?php if (config('comments_captcha')=='all'||(config('comments_captcha')=='guests'&&!$_smarty_tpl->tpl_vars['userquery']->value->login_check('',true))) {?>

            <div class="form-group">

            <?php if (isset($_smarty_tpl->tpl_vars['captcha'])) {$_smarty_tpl->tpl_vars['captcha'] = clone $_smarty_tpl->tpl_vars['captcha'];
$_smarty_tpl->tpl_vars['captcha']->value = get_captcha(); $_smarty_tpl->tpl_vars['captcha']->nocache = null; $_smarty_tpl->tpl_vars['captcha']->scope = 0;
} else $_smarty_tpl->tpl_vars['captcha'] = new Smarty_variable(get_captcha(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['captcha']->value['show_field']) {?>
            <label class="label" for="captcha">Verification Code</label>
            <?php echo load_captcha(array('captcha'=>$_smarty_tpl->tpl_vars['captcha']->value,'load'=>'field','field_params'=>' id="captcha" class="input" '),$_smarty_tpl);?>


            <?php }?>
             <?php echo load_captcha(array('captcha'=>$_smarty_tpl->tpl_vars['captcha']->value,'load'=>'function'),$_smarty_tpl);?>



            <?php }?>
            </div>
        <?php }?>


        <div class="form-group">
            <?php if (!$_smarty_tpl->tpl_vars['userquery']->value->login_check('',true)&&$_smarty_tpl->tpl_vars['Cbucket']->value->configs['anonym_comments']=='yes') {?>
            <label for="comment_text">
                <?php echo smarty_lang(array('code'=>'Your comment'),$_smarty_tpl);?>

            </label>
            <?php }?>  
         
          <script type="text/javascript">
document.write("<input style='float:right;margin-top:-31px' type=text name=limit size=4 readonly value="+count+">");
</script>
<div class="clear"></div>
            <textarea onkeyup="limiter()" name="comment" placeholder="Type your comment here. Make sure it means something.." id="comment_text" class="form-control clearfix comment_text_new"></textarea>
           
           <div id="reply_to_img"><i class="glyphicon glyphicon-share-alt" style="color:#428BCA;"></i></div>
        </div>
        <div class="form-group clearfix">
            <button  data-loading-text="Loading..." type="button" class="hidden-xs hidden-sm  btn btn-primary pull-right" id="addCommentButton"><?php echo lang('Comment');?>
</button>

        </div>


        <script>

        function blink(selector){
        $(selector).fadeOut('slow', function(){
        $(this).fadeIn('slow', function(){
        blink(this);
        });
        });
        }

       
        var ajaxPage = baseurl+'/ajax.php';
        $('#addCommentButton').on('click',function(e){  
                e.preventDefault();
                var btn =$(this);
                btn.button('loading');
        

                $('#comment-add-err').hide();
               
                var data = $(this).parents("form").serialize() + "&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&mode=add_comment";
                console.log(data);
                $.ajax({
                    url: ajaxPage,
                    type: "post",
                    data: data,
                    dataType : 'json',
                }).success(function(response){
                     
                    //var response = $.parseJSON(response);
                   
                    var cid = parseInt(response.cid);
                    if(cid > 1){
                        $.ajax({
                            url: ajaxPage,
                            type: "post",
                            data: {
                                mode: "get_comment",
                                cid: cid,
                                 
                            },
                        }).success(function(comment){
                            $("#comment_text").val('');
                            $("#userCommentsList").prepend(comment);
                            
                            var count_comments =  $("#comment_counter").val();
                            $("#com_count").html("");
                            $("#com_count").append('Comments '+count_comments);
                             

                            
                        });
                    }else{
                        if(response.msg){
                         $('#comment-add-err').show().html(response.msg);   
                        }
                        else if(response.err)
                        {
                            $('#comment-add-err').show().html(response.err);
                        }
                    }
               
                btn.button('reset');
                });
               
            });
        </script>

        <div class="hidden-lg hidden-md mbxl">
            <button type="submit" class="btn btn-primary" onclick="add_comment_js('comment_form','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')<?php echo ANCHOR(array('place'=>'onClickAddComment'),$_smarty_tpl);?>
"><?php echo lang('Comment');?>
</button>
        </div>
    </form>
   


<div id="add_comment_result" class="add_comment_result mtm mbm" style="display:none"></div>

<?php } else { ?>
    <?php echo smarty_lang(array('code'=>'please_login_to_comment'),$_smarty_tpl);?>

<?php }?>
</div>

<style>
#reply_to_img{

position:absolute;
 margin-left:686px;
 margin-top:-65px;
 display:none;

}



</style>
<!-- Script by hscripts.com -->
<?php }} ?>
