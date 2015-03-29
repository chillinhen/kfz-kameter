<?php /* Smarty version Smarty-3.1.14, created on 2015-03-28 09:53:13
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_top/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205146587955166bf981f447-71491075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8e6ea5184a290ad1c60342c708efc8e8736ba3' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_top/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205146587955166bf981f447-71491075',
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
  'unifunc' => 'content_55166bf9a95166_76467459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55166bf9a95166_76467459')) {function content_55166bf9a95166_76467459($_smarty_tpl) {?><!-- navigation_top/template/get.tpl -->

<ul>
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