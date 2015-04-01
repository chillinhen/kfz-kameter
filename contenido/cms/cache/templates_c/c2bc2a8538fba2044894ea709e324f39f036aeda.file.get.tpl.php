<?php /* Smarty version Smarty-3.1.14, created on 2015-03-31 19:36:02
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_service_label/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2092384301551adb02e75a34-50711890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2bc2a8538fba2044894ea709e324f39f036aeda' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_service_label/template/get.tpl',
      1 => 1427822951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2092384301551adb02e75a34-50711890',
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
  'unifunc' => 'content_551adb036a8166_53663958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551adb036a8166_53663958')) {function content_551adb036a8166_53663958($_smarty_tpl) {?><!-- content_service_label -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>


<!-- /content_service_label -->
<?php }} ?>