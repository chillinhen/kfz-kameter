<?php /* Smarty version Smarty-3.1.14, created on 2015-04-02 11:23:23
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_socialmedia_googleplus/template/google_plus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618394463551d0a8bcdc7c3-43831740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c1ad41ab4d82719c13f8e0925218d3692b7060' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_socialmedia_googleplus/template/google_plus.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '618394463551d0a8bcdc7c3-43831740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LAYOUT' => 0,
    'URL' => 0,
    'SHOW_COUNT' => 0,
    'LOCALE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551d0a8bea90c5_72175687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d0a8bea90c5_72175687')) {function content_551d0a8bea90c5_72175687($_smarty_tpl) {?><g:plusone<?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SHOW_COUNT']->value;?>
></g:plusone>

<script type="text/javascript">
  window.___gcfg =   { lang: '<?php echo $_smarty_tpl->tpl_vars['LOCALE']->value;?>
' } ;

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script><?php }} ?>