<?php /* Smarty version Smarty-3.1.14, created on 2015-03-24 22:08:48
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_teaser_config/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20363546815511d260d32ff6-19453948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '20363546815511d260d32ff6-19453948',
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
  'unifunc' => 'content_5511d260db1564_17906086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511d260db1564_17906086')) {function content_5511d260db1564_17906086($_smarty_tpl) {?><?php if (true==$_smarty_tpl->tpl_vars['isBackendEditMode']->value){?>
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