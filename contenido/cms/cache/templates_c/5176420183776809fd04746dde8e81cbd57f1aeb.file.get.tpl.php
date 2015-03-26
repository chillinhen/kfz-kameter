<?php /* Smarty version Smarty-3.1.14, created on 2015-03-25 08:41:41
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/config_social_media/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256881212551266b5db1b25-63747908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5176420183776809fd04746dde8e81cbd57f1aeb' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/config_social_media/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256881212551266b5db1b25-63747908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551266b60537d7_70187257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551266b60537d7_70187257')) {function content_551266b60537d7_70187257($_smarty_tpl) {?><!-- config_social_media -->

<label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

    <?php if (0<strlen($_smarty_tpl->tpl_vars['item']->value['name'])){?>
        <label class="content_type_label_secondary"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</label>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>


<?php } ?>

<!-- /config_social_media -->
<?php }} ?>