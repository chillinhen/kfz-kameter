<?php /* Smarty version Smarty-3.1.14, created on 2015-04-04 10:41:09
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_download_list/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:365164293551fa3a54cc077-32774332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '963ee0783f7773f2ca9887ccf726aa34441504c7' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_download_list/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '365164293551fa3a54cc077-32774332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'filelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551fa3a54f2a35_47588986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551fa3a54f2a35_47588986')) {function content_551fa3a54f2a35_47588986($_smarty_tpl) {?><!-- content_download_list -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['filelist']->value;?>


<!-- /content_download_list -->
<?php }} ?>