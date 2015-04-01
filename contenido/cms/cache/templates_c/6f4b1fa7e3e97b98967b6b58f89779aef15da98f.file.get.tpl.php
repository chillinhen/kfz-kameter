<?php /* Smarty version Smarty-3.1.14, created on 2015-03-31 19:21:54
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_footer_text/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104243453551ad7b29d6cf9-54569330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f4b1fa7e3e97b98967b6b58f89779aef15da98f' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_footer_text/template/get.tpl',
      1 => 1427822262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104243453551ad7b29d6cf9-54569330',
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
  'unifunc' => 'content_551ad7b2ba5ce7_84149826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551ad7b2ba5ce7_84149826')) {function content_551ad7b2ba5ce7_84149826($_smarty_tpl) {?><!-- content__footer_text -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>


<!-- /content__footer_text -->
<?php }} ?>