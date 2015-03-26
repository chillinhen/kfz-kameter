<?php /* Smarty version Smarty-3.1.14, created on 2015-03-25 10:56:01
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_article_include/template/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13788205955128631800398-97361574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90132f50c279d849a2e29fd062a3771cde280bba' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_article_include/template/edit.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13788205955128631800398-97361574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'backendUrl' => 0,
    'id' => 0,
    'articleIncludeSettingsLabel' => 0,
    'articleIncludeChooseCategoryLabel' => 0,
    'categorySelect' => 0,
    'articleIncludeChooseArticleLabel' => 0,
    'articleSelect' => 0,
    'ajaxUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55128631e06b38_50848759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55128631e06b38_50848759')) {function content_55128631e06b38_50848759($_smarty_tpl) {?><div class="content_article_include">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['backendUrl']->value;?>
styles/content_types/cms_abstract_tabbed.css">
    <div class="content_article_include_holder cms_abstract ui-draggable" id="article_include_container_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="position: absolute; display: none;">
        <form name="content_article_include_form_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="content_article_include_form_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" action="" method="POST">
            <div class="content_article_include_close close" style="cursor: pointer;">
                <img id="article_include_close_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['backendUrl']->value;?>
/images/but_cancel.gif">
            </div>
            <p class="head" style="cursor: move;"><?php echo $_smarty_tpl->tpl_vars['articleIncludeSettingsLabel']->value;?>
</p>
            <div class="clearfix"></div>
            <div class="config_container">
                <label><?php echo $_smarty_tpl->tpl_vars['articleIncludeChooseCategoryLabel']->value;?>
</label><?php echo $_smarty_tpl->tpl_vars['categorySelect']->value;?>

                <br />
                <label><?php echo $_smarty_tpl->tpl_vars['articleIncludeChooseArticleLabel']->value;?>
</label><?php echo $_smarty_tpl->tpl_vars['articleSelect']->value;?>

            </div>
            <div class="toolbar">
                <img src="<?php echo $_smarty_tpl->tpl_vars['backendUrl']->value;?>
images/but_ok.gif" class="save_settings" id="article_include_save_settings_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="cursor: pointer;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['backendUrl']->value;?>
images/but_cancel.gif" class="cancel_settings" id="article_include_cancel_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="cursor: pointer;">
            </div>
        </form>
    </div>
    <div class="popup_opener">
        <img src="<?php echo $_smarty_tpl->tpl_vars['backendUrl']->value;?>
images/article_include.png" class="cms_abstract_img cms_teaser_img" id="article_include_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="cursor: pointer;" />
    </div>
</div>
<script type="text/javascript">
(function($) {
    $('.content_article_include .popup_opener img#article_include_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').click(function() {
        var holder = $(this).parent().parent().find('#article_include_container_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
        holder.css("top", $(this).offset().top + holder.height() + (holder.height()/2) + 'px');
        holder.css("left", $(this).offset().left + (holder.width()/2) + 'px');
        holder.show();
    });

    $('.content_article_include .content_article_include_close img#article_include_close_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').click(function() {
        $('#article_include_container_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').hide();
    });

    $('.content_article_include .content_article_include_holder .toolbar img#article_include_cancel_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').click(function() {
        $('#article_include_container_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').hide();
    });

    $('.content_article_include #categoryselect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').on('change', function() {

        var optionVal = $("option:selected", this).val();
        var ajaxUrl = $(this).find('input[name=ajaxUrl]').val();

        $.ajax({
            type: "POST",
            url: '<?php echo $_smarty_tpl->tpl_vars['ajaxUrl']->value;?>
',
            data: { idcat: optionVal, ajax: 'artsel', name: 'articleselect_ajax_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'},
            success: function(responsedata){
                if($('.content_article_include #articleselect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').length > 0) {
                    $('.content_article_include #articleselect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').replaceWith(responsedata);
                } else {
                    $('.content_article_include #articleselect_ajax_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').replaceWith(responsedata);
                }
            }
        });
    });

    $('.content_article_include .content_article_include_holder .toolbar #article_include_save_settings_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').click(function() {
        $('.content_article_include_holder #content_article_include_form_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').submit();
    });

 })(jQuery);

</script><?php }} ?>