<?php /* Smarty version Smarty-3.1.14, created on 2015-03-28 09:22:49
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_main/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:867914541551664d926e696-52010211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '440b45e4dad0f5e3262d3e2c33f02db0995d4a3e' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/navigation_main/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '867914541551664d926e696-52010211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ulId' => 0,
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
  'unifunc' => 'content_551664d9771c15_54002770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551664d9771c15_54002770')) {function content_551664d9771c15_54002770($_smarty_tpl) {?><?php if (0<strlen($_smarty_tpl->tpl_vars['ulId']->value)){?><!-- navigation_main/template/get.tpl --><?php }?>

<ul class="<?php echo $_smarty_tpl->tpl_vars['ulId']->value;?>
">

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
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars["aClass"] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <li>
            <a class="<?php echo $_smarty_tpl->tpl_vars['aClass']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
        <?php if (in_array($_smarty_tpl->tpl_vars['idcat']->value,$_smarty_tpl->tpl_vars['path']->value)){?>
            <?php echo $_smarty_tpl->getSubTemplate ("navigation_main/template/get.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tree'=>$_smarty_tpl->tpl_vars['wrapper']->value['subcats'],'path'=>$_smarty_tpl->tpl_vars['path']->value,'ulId'=>''), 0);?>

        <?php }?>
        </li>
     <?php } ?>
</ul>

<?php if (0<strlen($_smarty_tpl->tpl_vars['ulId']->value)){?><!-- /navigation_main/template/get.tpl --><?php }?><?php }} ?>