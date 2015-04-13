<?php /* Smarty version Smarty-3.1.14, created on 2015-04-13 20:27:22
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/script_cookie_directive/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1867875133552c0a8a90ef67-93992394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e42393aa384ac4bd21369473d02496b92c1f41' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/script_cookie_directive/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1867875133552c0a8a90ef67-93992394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trans' => 0,
    'pageUrlDeny' => 0,
    'pageUrlAccept' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_552c0a8a9a4973_92235512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552c0a8a9a4973_92235512')) {function content_552c0a8a9a4973_92235512($_smarty_tpl) {?>﻿<!-- script_cookie_directive/template/get.tpl -->

<div id="cookie_note">

    <h1><?php echo $_smarty_tpl->tpl_vars['trans']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['trans']->value['infoText'];?>
</p>
    <input type="hidden" id="accept" value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['accept'];?>
" />
    <input type="hidden" id="decline" value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['decline'];?>
" />
    <input type="hidden" id="page_url_deny" value="<?php echo $_smarty_tpl->tpl_vars['pageUrlDeny']->value;?>
" />
    <input type="hidden" id="page_url_accept" value="<?php echo $_smarty_tpl->tpl_vars['pageUrlAccept']->value;?>
" />

</div>

<!-- /script_cookie_directive/template/get.tpl --><?php }} ?>