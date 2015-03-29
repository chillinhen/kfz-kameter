<?php /* Smarty version Smarty-3.1.14, created on 2015-03-28 09:53:13
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_image/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179299486955166bf9e41039-06551972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0738cf8db253f19b2f10ab273e64ef8241f06638' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_image/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179299486955166bf9e41039-06551972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'editor' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55166bf9e76845_16991487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55166bf9e76845_16991487')) {function content_55166bf9e76845_16991487($_smarty_tpl) {?><!-- content_image -->

<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['editor']->value;?>


<?php if (null!=$_smarty_tpl->tpl_vars['image']->value){?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->src;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->alt;?>
" width="<?php echo $_smarty_tpl->tpl_vars['image']->value->width;?>
" height="<?php echo $_smarty_tpl->tpl_vars['image']->value->height;?>
" />
<?php }?>

<!-- /content_image -->
<?php }} ?>