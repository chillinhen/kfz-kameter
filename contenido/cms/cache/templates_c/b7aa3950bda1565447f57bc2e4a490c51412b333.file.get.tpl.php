<?php /* Smarty version Smarty-3.1.14, created on 2015-03-28 09:53:14
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_social_media/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126744987455166bfa440a21-60522534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7aa3950bda1565447f57bc2e4a490c51412b333' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_social_media/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126744987455166bfa440a21-60522534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55166bfa5670f1_91734297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55166bfa5670f1_91734297')) {function content_55166bfa5670f1_91734297($_smarty_tpl) {?><!-- navigation_social_media -->

<ul class="social_media">
<?php if (0<strlen($_smarty_tpl->tpl_vars['url']->value['rss'])){?>
    <li class="rss"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['rss'];?>
" target="_blank"></a></li>
<?php }?>

<?php if (0<strlen($_smarty_tpl->tpl_vars['url']->value['facebook'])){?>
    <li class="facebook"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['facebook'];?>
" target="_blank"></a></li>
<?php }?>

<?php if (0<strlen($_smarty_tpl->tpl_vars['url']->value['googleplus'])){?>
    <li class="google"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['googleplus'];?>
" target="_blank"></a></li>
<?php }?>

<?php if (0<strlen($_smarty_tpl->tpl_vars['url']->value['twitter'])){?>
    <li class="twitter"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['twitter'];?>
" target="_blank"></a></li>
<?php }?>

<?php if (0<strlen($_smarty_tpl->tpl_vars['url']->value['youtube'])){?>
    <li class="youtube"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['youtube'];?>
" target="_blank"></a></li>
<?php }?>

<?php if (0<strlen($_smarty_tpl->tpl_vars['url']->value['xing'])){?>
    <li class="xing"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['xing'];?>
" target="_blank"></a></li>
<?php }?>
</ul>

<!-- /navigation_social_media -->
<?php }} ?>