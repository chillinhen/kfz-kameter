<?php /* Smarty version Smarty-3.1.14, created on 2015-03-24 21:56:20
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_bottom/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10400411935511cf74be6063-46961743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65e8af217110eaead978f6107de378b7dcf20b5b' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_bottom/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10400411935511cf74be6063-46961743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5511cf74c25c97_42409595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511cf74c25c97_42409595')) {function content_5511cf74c25c97_42409595($_smarty_tpl) {?><ul class="navigation">
<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
<?php } ?>
</ul>
<?php }} ?>