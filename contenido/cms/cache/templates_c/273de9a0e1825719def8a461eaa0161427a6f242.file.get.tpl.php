<?php /* Smarty version Smarty-3.1.14, created on 2015-03-28 09:53:14
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_teaser_config/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110331056455166bfa15d896-93774300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '273de9a0e1825719def8a461eaa0161427a6f242' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_teaser_config/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110331056455166bfa15d896-93774300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isBackendEditMode' => 0,
    'label' => 0,
    'editor' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55166bfa2a0b69_65619522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55166bfa2a0b69_65619522')) {function content_55166bfa2a0b69_65619522($_smarty_tpl) {?><?php if (true==$_smarty_tpl->tpl_vars['isBackendEditMode']->value){?>
<!-- content_teaser_config -->

    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>

    <?php echo $_smarty_tpl->tpl_vars['editor']->value;?>


    <?php if (0<strlen(trim($_smarty_tpl->tpl_vars['image']->value))){?>
    <br /><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"/>
    <?php }?>

<!-- /content_teaser_config -->
<?php }?>
<?php }} ?>