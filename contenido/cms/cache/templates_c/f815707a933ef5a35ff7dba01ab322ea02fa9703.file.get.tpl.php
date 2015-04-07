<?php /* Smarty version Smarty-3.1.14, created on 2015-04-04 10:33:23
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_header_second/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:686072468551fa1d3337e13-46201708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f815707a933ef5a35ff7dba01ab322ea02fa9703' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_header_second/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '686072468551fa1d3337e13-46201708',
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
  'unifunc' => 'content_551fa1d33709c7_50166026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551fa1d33709c7_50166026')) {function content_551fa1d33709c7_50166026($_smarty_tpl) {?><!-- content_header_second -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php if (0<strlen($_smarty_tpl->tpl_vars['header']->value)){?>
    <h2><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h2>
<?php }?>

<!-- /content_header_second -->
<?php }} ?>