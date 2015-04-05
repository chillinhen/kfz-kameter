<?php /* Smarty version Smarty-3.1.14, created on 2015-04-04 10:33:22
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_header_first/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218392927551fa1d2e23555-49279319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86cacd87e0ff340ff7efc9d1f00725584cc4111' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_header_first/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218392927551fa1d2e23555-49279319',
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
  'unifunc' => 'content_551fa1d2e5b9e7_49647153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551fa1d2e5b9e7_49647153')) {function content_551fa1d2e5b9e7_49647153($_smarty_tpl) {?><!-- content_header_first -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php if (0<strlen($_smarty_tpl->tpl_vars['header']->value)){?>
    <h1><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
<?php }?>

<!-- /content_header_first -->
<?php }} ?>