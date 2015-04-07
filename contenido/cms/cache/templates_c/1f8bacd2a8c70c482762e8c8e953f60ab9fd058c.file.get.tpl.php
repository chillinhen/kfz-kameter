<?php /* Smarty version Smarty-3.1.14, created on 2015-04-04 10:41:08
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_date/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2075385270551fa3a4e95280-89445054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f8bacd2a8c70c482762e8c8e953f60ab9fd058c' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_date/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075385270551fa3a4e95280-89445054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551fa3a4efa897_99972865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551fa3a4efa897_99972865')) {function content_551fa3a4efa897_99972865($_smarty_tpl) {?><!-- content_date -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['date']->value;?>


<!-- /content_date -->
<?php }} ?>