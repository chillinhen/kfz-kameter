<?php /* Smarty version Smarty-3.1.14, created on 2015-03-24 21:56:20
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_search_results/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14912568705511cf74978145-44005599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a436a6ad1208cf611a6624c37f34a9df489c55' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_search_results/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14912568705511cf74978145-44005599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'action' => 0,
    'method' => 0,
    'idart' => 0,
    'idlang' => 0,
    'msgResult' => 0,
    'prev' => 0,
    'pages' => 0,
    'next' => 0,
    'msgRange' => 0,
    'page' => 0,
    'href' => 0,
    'currentPage' => 0,
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5511cf74b568b1_86926881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511cf74b568b1_86926881')) {function content_5511cf74b568b1_86926881($_smarty_tpl) {?><!-- content_search_results/template/get.tpl -->


<h1><?php echo $_smarty_tpl->tpl_vars['label']->value['headline'];?>
</h1>


<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" id="navigation_searchform_top">
    <?php if ($_smarty_tpl->tpl_vars['idart']->value){?><input type="hidden" name="idart" value="<?php echo $_smarty_tpl->tpl_vars['idart']->value;?>
" /><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['idlang']->value){?><input type="hidden" name="idlang" value="<?php echo $_smarty_tpl->tpl_vars['idlang']->value;?>
" /><?php }?>
    <input type="text" id="search_term" name="search_term" class="full" title="Suche" />
    <input type="submit" class="submit search" value="<?php echo $_smarty_tpl->tpl_vars['label']->value['submit'];?>
 &raquo;" />
</form>

<h3><?php echo $_smarty_tpl->tpl_vars['msgResult']->value;?>
</h3>


<?php if (0<strlen(trim((($_smarty_tpl->tpl_vars['prev']->value).($_smarty_tpl->tpl_vars['pages']->value)).($_smarty_tpl->tpl_vars['next']->value)))){?>
<div class="pagination">
    <span><?php echo $_smarty_tpl->tpl_vars['msgRange']->value;?>
</span>
    <ul>
    <?php if (0<strlen($_smarty_tpl->tpl_vars['prev']->value)){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value['previous'];?>
</a></li>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = array_keys($_smarty_tpl->tpl_vars['pages']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->tpl_vars['page']->value], null, 0);?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['page']->value){?><?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
    <?php } ?>
    <?php if (0<strlen($_smarty_tpl->tpl_vars['next']->value)){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value['next'];?>
</a></li>
    <?php }?>
    </ul>
</div>
<?php }?>


<ul id="search_result">
<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
    <li>
        <span><?php echo $_smarty_tpl->tpl_vars['result']->value['number'];?>
</span>
        <a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['headline'];?>
</a>
        <p><?php echo $_smarty_tpl->tpl_vars['result']->value['paragraph'];?>
</p>
    </li>
<?php } ?>
</ul>


<?php if (0<strlen(trim((($_smarty_tpl->tpl_vars['prev']->value).($_smarty_tpl->tpl_vars['pages']->value)).($_smarty_tpl->tpl_vars['next']->value)))){?>
<div class="pagination">
    <span><?php echo $_smarty_tpl->tpl_vars['msgRange']->value;?>
</span>
    <ul>
    <?php if (0<strlen($_smarty_tpl->tpl_vars['prev']->value)){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value['previous'];?>
</a></li>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = array_keys($_smarty_tpl->tpl_vars['pages']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->tpl_vars['page']->value], null, 0);?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['page']->value){?><?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
    <?php } ?>
    <?php if (0<strlen($_smarty_tpl->tpl_vars['next']->value)){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value['next'];?>
</a></li>
    <?php }?>
    </ul>
</div>
<?php }?>

<!-- /content_search_results/template/get.tpl -->
<?php }} ?>