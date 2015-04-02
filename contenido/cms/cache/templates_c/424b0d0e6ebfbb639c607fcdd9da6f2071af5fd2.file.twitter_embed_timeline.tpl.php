<?php /* Smarty version Smarty-3.1.14, created on 2015-04-02 11:22:39
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_socialmedia_twitter/template/twitter_embed_timeline.tpl" */ ?>
<?php /*%%SmartyHeaderCode:463808454551d0a5f587927-42504515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424b0d0e6ebfbb639c607fcdd9da6f2071af5fd2' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_socialmedia_twitter/template/twitter_embed_timeline.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '463808454551d0a5f587927-42504515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'twitterName' => 0,
    'twitterShowReplies' => 0,
    'twitterTheme' => 0,
    'twitterLinkColor' => 0,
    'twitterWidth' => 0,
    'twitterHeight' => 0,
    'twitterBorderColor' => 0,
    'twitterRelated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551d0a5f6b96b5_33886633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d0a5f6b96b5_33886633')) {function content_551d0a5f6b96b5_33886633($_smarty_tpl) {?><a class="twitter-timeline"
data-screen-name="<?php echo $_smarty_tpl->tpl_vars['twitterName']->value;?>
"
data-show-replies="<?php echo $_smarty_tpl->tpl_vars['twitterShowReplies']->value;?>
"
data-theme="<?php echo $_smarty_tpl->tpl_vars['twitterTheme']->value;?>
"
data-link-color="<?php echo $_smarty_tpl->tpl_vars['twitterLinkColor']->value;?>
"
width="<?php echo $_smarty_tpl->tpl_vars['twitterWidth']->value;?>
"
height="<?php echo $_smarty_tpl->tpl_vars['twitterHeight']->value;?>
"
data-border-color="<?php echo $_smarty_tpl->tpl_vars['twitterBorderColor']->value;?>
"
data-related="<?php echo $_smarty_tpl->tpl_vars['twitterRelated']->value;?>
"
href="https://twitter.com/<?php echo $_smarty_tpl->tpl_vars['twitterName']->value;?>
"
data-widget-id="347351638245253120">
Tweets by @<?php echo $_smarty_tpl->tpl_vars['twitterName']->value;?>

</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<?php }} ?>