<?php /* Smarty version Smarty-3.1.14, created on 2015-04-15 18:07:53
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_socialmedia_facebook/template/facebook_like_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1866193068552e8cd9687034-34464208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ca8366f39d0fe75e886686c246a6aee643614f' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_socialmedia_facebook/template/facebook_like_box.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866193068552e8cd9687034-34464208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LOCALE' => 0,
    'URL' => 0,
    'WIDTH' => 0,
    'SHOW_FACES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_552e8cd98df912_82037509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e8cd98df912_82037509')) {function content_552e8cd98df912_82037509($_smarty_tpl) {?><div id="fb-root"></div><script src="http://connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['LOCALE']->value;?>
/all.js#xfbml=1"></script><fb:like-box href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
" show_faces="<?php echo $_smarty_tpl->tpl_vars['SHOW_FACES']->value;?>
" border_color="" locale="en_US" stream="false" header="false"></fb:like-box><?php }} ?>