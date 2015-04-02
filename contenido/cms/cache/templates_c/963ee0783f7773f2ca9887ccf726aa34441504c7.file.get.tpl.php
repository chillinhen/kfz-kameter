<?php /* Smarty version Smarty-3.1.14, created on 2015-04-02 11:02:28
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_download_list/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:964208739551d05a47cd9e3-07512434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '964208739551d05a47cd9e3-07512434',
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
  'unifunc' => 'content_551d05a49cd9c5_93838127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d05a49cd9c5_93838127')) {function content_551d05a49cd9c5_93838127($_smarty_tpl) {?><!-- content_download_list -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['filelist']->value;?>


<!-- /content_download_list -->
<?php }} ?>