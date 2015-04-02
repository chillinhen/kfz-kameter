<?php /* Smarty version Smarty-3.1.14, created on 2015-04-02 10:36:11
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_link_list/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:739289475551cff7b34bb35-84672263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cd91e1c686862dcc7a6aab1d22b291052618489' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_link_list/template/get.tpl',
      1 => 1426792724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739289475551cff7b34bb35-84672263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'usable_links' => 0,
    'contents' => 0,
    'descriptions' => 0,
    'kcontent' => 0,
    'kdesc' => 0,
    'content' => 0,
    'description' => 0,
    'breakForBackend' => 0,
    'createLabel' => 0,
    'inputfield' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_551cff7b53c124_62364963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551cff7b53c124_62364963')) {function content_551cff7b53c124_62364963($_smarty_tpl) {?><!-- content_link_list -->
<?php if (0<strlen($_smarty_tpl->tpl_vars['label']->value)){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
<?php }?>

<div class="link_list">
    <h2><?php echo $_smarty_tpl->tpl_vars['usable_links']->value;?>
</h2>

    <ul class="link_list">
        <!-- BEGIN:BLOCK -->
        <li>
            <?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['kcontent'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['kcontent']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
                <?php  $_smarty_tpl->tpl_vars['description'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['description']->_loop = false;
 $_smarty_tpl->tpl_vars['kdesc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['descriptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['description']->key => $_smarty_tpl->tpl_vars['description']->value){
$_smarty_tpl->tpl_vars['description']->_loop = true;
 $_smarty_tpl->tpl_vars['kdesc']->value = $_smarty_tpl->tpl_vars['description']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['kcontent']->value==$_smarty_tpl->tpl_vars['kdesc']->value){?>
                            <div>
                                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</br>
                                <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</br>
                            </div>
                        <?php if ($_smarty_tpl->tpl_vars['breakForBackend']->value===true){?>
                            </br>
                        <?php }?>
                    <?php }?>
                <?php } ?>
            <?php } ?>
        </li>
        <?php echo $_smarty_tpl->tpl_vars['createLabel']->value;?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['inputfield']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['button']->value;?>

        <!-- END:BLOCK -->

    </ul>
</div>
<!-- content_link_list -->
<?php }} ?>