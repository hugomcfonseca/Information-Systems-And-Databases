<?php /* Smarty version Smarty-3.1.5, created on 2014-12-06 01:29:27
         compiled from "../templates/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48402097654824de7c2d453-60244013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2eac13291a77276b65b9b907b2ae160c0f3f2e3' => 
    array (
      0 => '../templates/errors.tpl',
      1 => 1322587744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48402097654824de7c2d453-60244013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54824de7c4ddf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54824de7c4ddf')) {function content_54824de7c4ddf($_smarty_tpl) {?>  <!-- error messages -->
  <div id="errors">
<?php if ($_smarty_tpl->tpl_vars['s_errors']->value['generic']){?>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_errors']->value['generic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
<?php } ?>
<?php }?>
  </div>
<?php }} ?>