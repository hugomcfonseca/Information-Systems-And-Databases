<?php /* Smarty version Smarty-3.1.5, created on 2014-12-12 20:47:10
         compiled from "../templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185393799954824de7b02b19-62939648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927222f66c1cabf1737d32d5161fdb6810b2fdcc' => 
    array (
      0 => '../templates/login.tpl',
      1 => 1418413299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185393799954824de7b02b19-62939648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54824de7b41ae',
  'variables' => 
  array (
    's_user' => 0,
    's_tipo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54824de7b41ae')) {function content_54824de7b41ae($_smarty_tpl) {?>    <!-- login form -->
<?php if ($_smarty_tpl->tpl_vars['s_user']->value){?>
    <div id="login">
      <div class="title"><?php echo $_smarty_tpl->tpl_vars['s_user']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['s_tipo']->value;?>
)</div>
      <form action="../principal/logout_action.php" method="post">
      <input type="submit" value="Logout" />
      </form>
    </div>
<?php }else{ ?>
    <div id="login">
      <div class="title">Login</div>
      <form action="../principal/login_action.php" method="post">
        <label for="email">Username:</label>
        <input type="text" size="10" name="email" id="email"/>
        <label for="pass">Password:</label>
        <input type="password" size="10" name="pass" id="pass"/>
        <input type="submit" value="Login" />
      </form>
    </div>
<?php }?>
<?php }} ?>