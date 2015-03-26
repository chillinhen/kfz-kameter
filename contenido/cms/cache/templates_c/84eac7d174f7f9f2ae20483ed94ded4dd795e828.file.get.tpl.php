<?php /* Smarty version Smarty-3.1.14, created on 2015-03-24 21:56:18
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_breadcrumb/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12281719105511cf72e5e6c9-99658397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84eac7d174f7f9f2ae20483ed94ded4dd795e828' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_breadcrumb/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12281719105511cf72e5e6c9-99658397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumb' => 0,
    'label_breadcrumb' => 0,
    'i' => 0,
    'category' => 0,
    'headline' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5511cf73155197_45631997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511cf73155197_45631997')) {function content_5511cf73155197_45631997($_smarty_tpl) {?><!-- navigation_breadcrumb/template/get.tpl -->

<?php if (count($_smarty_tpl->tpl_vars['breadcrumb']->value)>0){?>
<ul>
    <li><?php echo $_smarty_tpl->tpl_vars['label_breadcrumb']->value;?>
:</li>
    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value==0){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['category']->value->getLink();?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->get('name');?>
</a></li>
        <?php }else{ ?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['category']->value->getLink();?>
">- <?php echo $_smarty_tpl->tpl_vars['category']->value->get('name');?>
</a></li>
        <?php }?>
    <?php } ?>
    <?php if (0<strlen(trim($_smarty_tpl->tpl_vars['headline']->value))){?>
        <li><?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
</li>
    <?php }?>
</ul>
<?php }?>

<!-- /navigation_breadcrumb/template/get.tpl -->
<?php }} ?>