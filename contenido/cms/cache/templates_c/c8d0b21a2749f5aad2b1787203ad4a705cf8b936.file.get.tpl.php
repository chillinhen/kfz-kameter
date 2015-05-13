<?php /* Smarty version Smarty-3.1.14, created on 2015-04-20 15:07:47
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_sitemap_html/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13854337035534fa23663806-72476087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d0b21a2749f5aad2b1787203ad4a705cf8b936' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_sitemap_html/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13854337035534fa23663806-72476087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isBackendEditMode' => 0,
    'trans' => 0,
    'category' => 0,
    'level' => 0,
    'article' => 0,
    'error' => 0,
    'tree' => 0,
    'first' => 0,
    'wrapper' => 0,
    'url' => 0,
    'name' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5534fa244966b6_13319166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534fa244966b6_13319166')) {function content_5534fa244966b6_13319166($_smarty_tpl) {?><!-- content_sitemap_html -->

<?php if (true==$_smarty_tpl->tpl_vars['isBackendEditMode']->value){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['trans']->value['headline'];?>
</label>
    <div class="sitemapdiv">
        <h2><?php echo $_smarty_tpl->tpl_vars['trans']->value['categoryLabel'];?>
</h2>
        <label><?php echo $_smarty_tpl->tpl_vars['trans']->value['categoryHintLabel'];?>
</label>
        <div><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</div>
    </div>
    <div class="sitemapdiv">
        <h2><?php echo $_smarty_tpl->tpl_vars['trans']->value['levelLabel'];?>
</h2>
        <label><?php echo $_smarty_tpl->tpl_vars['trans']->value['levelHintLabel'];?>
</label>
        <div><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</div>
    </div>
    <div class="sitemapdiv">
        <h2><?php echo $_smarty_tpl->tpl_vars['trans']->value['articleLabel'];?>
</h2>
        <label><?php echo $_smarty_tpl->tpl_vars['trans']->value['articleHintLabel'];?>
</label>
        <div><?php echo $_smarty_tpl->tpl_vars['article']->value;?>
</div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['error']->value){?><p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['tree']->value){?>
<ul<?php if ($_smarty_tpl->tpl_vars['first']->value==false){?> class="sitemap"<?php }?>>
    <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(true, null, 0);?>
    
    <?php  $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wrapper']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wrapper']->key => $_smarty_tpl->tpl_vars['wrapper']->value){
$_smarty_tpl->tpl_vars['wrapper']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["idcat"] = new Smarty_variable($_smarty_tpl->tpl_vars['wrapper']->value['idcat'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable($_smarty_tpl->tpl_vars['wrapper']->value['item']->getLink(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable($_smarty_tpl->tpl_vars['wrapper']->value['item']->get('name'), null, 0);?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
            <?php echo $_smarty_tpl->getSubTemplate ("content_sitemap_html/template/get.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tree'=>$_smarty_tpl->tpl_vars['wrapper']->value['subcats'],'path'=>$_smarty_tpl->tpl_vars['path']->value,'ulId'=>''), 0);?>

        
        <?php if (0<count($_smarty_tpl->tpl_vars['wrapper']->value['articles'])){?>
            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wrapper']->value['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value->getLink();?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value->get('title');?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value->get('title');?>
</a>
            </li>
            <?php } ?>
        <?php }?>
        </li>
     <?php } ?>
</ul>
<?php }?>

<!-- /content_sitemap_html -->
<?php }} ?>