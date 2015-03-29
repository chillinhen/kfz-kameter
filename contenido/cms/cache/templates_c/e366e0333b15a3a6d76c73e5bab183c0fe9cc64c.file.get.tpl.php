<?php /* Smarty version Smarty-3.1.14, created on 2015-03-28 09:22:51
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_text/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2097939799551664db6e19a8-04491660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e366e0333b15a3a6d76c73e5bab183c0fe9cc64c' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_text/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2097939799551664db6e19a8-04491660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551664db707c27_41261467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551664db707c27_41261467')) {function content_551664db707c27_41261467($_smarty_tpl) {?><!-- content_text -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>


<!-- /content_text -->
<?php }} ?>