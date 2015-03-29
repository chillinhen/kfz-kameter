<?php /* Smarty version Smarty-3.1.14, created on 2015-03-28 09:22:50
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_header_first/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2069259539551664dae135a8-51914658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2069259539551664dae135a8-51914658',
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
  'unifunc' => 'content_551664dae805a4_10949983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551664dae805a4_10949983')) {function content_551664dae805a4_10949983($_smarty_tpl) {?><!-- content_header_first -->

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