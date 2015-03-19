<?php /* Smarty version Smarty-3.1.14, created on 2015-03-19 20:31:12
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_header_first/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248069541550b2400c7e6f2-18244644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '248069541550b2400c7e6f2-18244644',
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
  'unifunc' => 'content_550b2400cb90f3_57360241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b2400cb90f3_57360241')) {function content_550b2400cb90f3_57360241($_smarty_tpl) {?><!-- content_header_first -->

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