<?php /* Smarty version Smarty-3.1.14, created on 2015-03-24 22:47:31
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_picture_gallery/template/picture_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17442145605511db73b2ff21-95298836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49422944baf8347e1363f5eb47028d74e71c2bc9' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_picture_gallery/template/picture_gallery.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17442145605511db73b2ff21-95298836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pictures' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5511db73d0ecb9_20213559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511db73d0ecb9_20213559')) {function content_5511db73d0ecb9_20213559($_smarty_tpl) {?><div class="galery">
    <div class="lightbox"></div>
    <ul class="source">
        <?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
            <li>
                <a title="<?php echo $_smarty_tpl->tpl_vars['picture']->value['description'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['picture']->value['copyright'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['picture']->value['lightbox'];?>
" style="background: url(<?php echo $_smarty_tpl->tpl_vars['picture']->value['lightbox'];?>
) no-repeat -9999px -9999px;">
                    <?php echo $_smarty_tpl->tpl_vars['picture']->value['thumb'];?>

                </a>
            </li>
        <?php } ?>
    </ul>

    <ul class="slider"></ul>

    <div class="clear"></div>
    <ul class="pagination">
        <li><a id="back" href="">Zurück</a></li>
    </ul>
</div><?php }} ?>