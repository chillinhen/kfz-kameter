<?php /* Smarty version Smarty-3.1.14, created on 2015-04-15 18:07:53
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_fb_embeddedpost/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1845284977552e8cd993b404-26245691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4899e50f25d45caa17899dd9bbd0ac4b641d73f8' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_fb_embeddedpost/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1845284977552e8cd993b404-26245691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_552e8cd9a6a8b7_13794498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e8cd9a6a8b7_13794498')) {function content_552e8cd9a6a8b7_13794498($_smarty_tpl) {?><!-- content_fb_embeddedpost/template/get.tpl -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


<!-- /content_fb_embeddedpost/template/get.tpl -->
<?php }} ?>