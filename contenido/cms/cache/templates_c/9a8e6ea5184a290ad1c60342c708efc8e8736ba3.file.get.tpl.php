<?php /* Smarty version Smarty-3.1.14, created on 2015-04-04 10:33:21
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_top/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:529067101551fa1d16c3ad3-26057149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8e6ea5184a290ad1c60342c708efc8e8736ba3' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_top/template/get.tpl',
      1 => 1428081505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529067101551fa1d16c3ad3-26057149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'wrapper' => 0,
    'idcat' => 0,
    'path' => 0,
    'aClass' => 0,
    'url' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551fa1d187f1a7_91714568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551fa1d187f1a7_91714568')) {function content_551fa1d187f1a7_91714568($_smarty_tpl) {?><!-- navigation_top/template/get.tpl -->

<ul class="navigation">
    <?php  $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wrapper']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wrapper']->key => $_smarty_tpl->tpl_vars['wrapper']->value){
$_smarty_tpl->tpl_vars['wrapper']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["idcat"] = new Smarty_variable($_smarty_tpl->tpl_vars['wrapper']->value['idcat'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable($_smarty_tpl->tpl_vars['wrapper']->value['item']->getLink(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable($_smarty_tpl->tpl_vars['wrapper']->value['item']->get('name'), null, 0);?>
        <?php if (in_array($_smarty_tpl->tpl_vars['idcat']->value,$_smarty_tpl->tpl_vars['path']->value)){?>
            <?php $_smarty_tpl->tpl_vars["aClass"] = new Smarty_variable('active', null, 0);?>
        <?php }?>
        <li>
            <a class="<?php echo $_smarty_tpl->tpl_vars['aClass']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
        <?php if (in_array($_smarty_tpl->tpl_vars['idcat']->value,$_smarty_tpl->tpl_vars['path']->value)){?>
            <?php echo $_smarty_tpl->getSubTemplate ("navigation_top/template/get.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tree'=>$_smarty_tpl->tpl_vars['wrapper']->value['subcats'],'path'=>$_smarty_tpl->tpl_vars['path']->value), 0);?>

        <?php }?>
        </li>
     <?php } ?>
</ul>

<!-- /navigation_top/template/get.tpl --><?php }} ?>