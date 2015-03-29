<?php /* Smarty version Smarty-3.1.14, created on 2015-03-28 09:22:51
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_searchform_top/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1006925372551664db79bee3-00998347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84b1eb18877237030247a90592a48ce16c1fe06' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_searchform_top/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1006925372551664db79bee3-00998347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'method' => 0,
    'idart' => 0,
    'idlang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551664db820cd7_79073930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551664db820cd7_79073930')) {function content_551664db820cd7_79073930($_smarty_tpl) {?><!-- navigation_searchform_top/template/get.tpl -->

<?php if (0==strlen(trim($_smarty_tpl->tpl_vars['action']->value))){?>
    <!--
        In order for the search form to be shown
        you have to define a search result page.
    -->
<?php }else{ ?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" id="navigation_searchform_top">
    <?php if ($_smarty_tpl->tpl_vars['idart']->value){?><input type="hidden" name="idart" value="<?php echo $_smarty_tpl->tpl_vars['idart']->value;?>
" /><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['idlang']->value){?><input type="hidden" name="idlang" value="<?php echo $_smarty_tpl->tpl_vars['idlang']->value;?>
" /><?php }?>
        <input type="text" id="search_term" name="search_term" />
    </form>
<?php }?>

<!-- /navigation_searchform_top/template/get.tpl --><?php }} ?>