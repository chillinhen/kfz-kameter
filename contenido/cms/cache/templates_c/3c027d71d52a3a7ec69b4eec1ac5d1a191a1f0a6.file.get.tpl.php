<?php /* Smarty version Smarty-3.1.14, created on 2015-04-04 10:33:23
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_header_third/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1480120036551fa1d30264a6-38474474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c027d71d52a3a7ec69b4eec1ac5d1a191a1f0a6' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_header_third/template/get.tpl',
      1 => 1427297497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1480120036551fa1d30264a6-38474474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551fa1d3076da9_54431903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551fa1d3076da9_54431903')) {function content_551fa1d3076da9_54431903($_smarty_tpl) {?><!-- content_header_third -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php if (0<strlen($_smarty_tpl->tpl_vars['header']->value)){?>
    <h3><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h3>
<?php }?>

<!-- /content_header_third -->
<?php }} ?>