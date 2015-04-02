<?php /* Smarty version Smarty-3.1.14, created on 2015-04-02 10:47:33
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/form_login/template/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:952426663551d022511bbc4-39478622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f88ad0e35822decbfdc16e0ac20faad485918ef' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/form_login/template/login.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '952426663551d022511bbc4-39478622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_action' => 0,
    'label_name' => 0,
    'label_pass' => 0,
    'label_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551d022525e7a4_93596911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d022525e7a4_93596911')) {function content_551d022525e7a4_93596911($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post" class="login">
    <fieldset>
        <label for="username"><?php echo $_smarty_tpl->tpl_vars['label_name']->value;?>
</label> <input type="text" id="username" name="username" />
        <br />
        <label for="password"><?php echo $_smarty_tpl->tpl_vars['label_pass']->value;?>
</label> <input type="password" id="password" name="password" />
        <br />
        <input id="loginBtn" type="submit" name="login" value="<?php echo $_smarty_tpl->tpl_vars['label_login']->value;?>
" />
    </fieldset>
</form><?php }} ?>