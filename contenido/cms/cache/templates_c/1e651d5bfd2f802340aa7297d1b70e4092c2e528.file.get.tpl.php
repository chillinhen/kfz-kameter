<?php /* Smarty version Smarty-3.1.14, created on 2015-04-26 13:23:13
         compiled from "/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_map_google/template/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:938967524552e9043d70f01-55584835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e651d5bfd2f802340aa7297d1b70e4092c2e528' => 
    array (
      0 => '/Users/chilliscope/Documents/Webseiten/kfz-kameter/contenido/cms/data/modules/content_map_google/template/get.tpl',
      1 => 1430046830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '938967524552e9043d70f01-55584835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_552e90440b6824_74567572',
  'variables' => 
  array (
    'isBackendEditMode' => 0,
    'trans' => 0,
    'header' => 0,
    'address' => 0,
    'lat' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e90440b6824_74567572')) {function content_552e90440b6824_74567572($_smarty_tpl) {?><!-- content_map_google -->

<?php if (true==$_smarty_tpl->tpl_vars['isBackendEditMode']->value){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['trans']->value['header'];?>
</label>
<?php }?>
<div><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</div>



<?php if (false==$_smarty_tpl->tpl_vars['isBackendEditMode']->value){?>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <div id="googleMap"></div>
<?php }?>

<?php if (true==$_smarty_tpl->tpl_vars['isBackendEditMode']->value){?>
    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['trans']->value['address'];?>
</label>
    <div><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</div>
<?php }else{ ?>
    <div id="address"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</div>
<?php }?>


<?php if (true==$_smarty_tpl->tpl_vars['isBackendEditMode']->value){?>

    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['trans']->value['latitude'];?>
</label>
    <div><?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
</div>

    <label class="content_type_label"><?php echo $_smarty_tpl->tpl_vars['trans']->value['longitude'];?>
</label>
    <div><?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
</div>

<?php }else{ ?>

    <div id="clearFloat">
        <input type="hidden" id="lat" value="<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
" />
        <input type="hidden" id="lon" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
" />
    </div>

<?php }?>

<!-- /content_map_google -->
<?php }} ?>