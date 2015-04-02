<?php /* Smarty version Smarty-3.1.14, created on 2015-04-02 10:48:07
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/form_login/template/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:567482224551d024762e576-88714065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d34b95dd68179935e2d9a0d9955e6b621f8ec42' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/form_login/template/logout.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567482224551d024762e576-88714065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'url' => 0,
    'label_logout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551d02478d6f69_15490523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d02478d6f69_15490523')) {function content_551d02478d6f69_15490523($_smarty_tpl) {?><div id="logoutText">
    <p><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['label_logout']->value;?>
" class="button red"><?php echo $_smarty_tpl->tpl_vars['label_logout']->value;?>
</a>
</div>
<?php }} ?>