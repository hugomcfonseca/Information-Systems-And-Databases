<?php /* Smarty version Smarty-3.1.5, created on 2014-12-13 02:32:48
         compiled from "../templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37660353454824de7a28095-77353521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a619664980ef7178e07f2c499692ae2bd0ad70' => 
    array (
      0 => '../templates/header.tpl',
      1 => 1418434362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37660353454824de7a28095-77353521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54824de7aa2a8',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54824de7aa2a8')) {function content_54824de7aa2a8($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <title>GESTbook® :: Gestão de Centros de Custos</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
<?php if (isset($_smarty_tpl->tpl_vars['css']->value)){?>
  <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['js']->value)){?>
  <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

<?php }?>
</head>
<body>

  <!-- header tag -->
  <header>
    <p><a href="../">GESTbook®</a> :: Gestão de Centros de Custos :: U. Porto</p>
  </header>

  <!-- nav tag -->
  <nav>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </nav>

  <!-- page content  -->
  <div id="content">

<?php echo $_smarty_tpl->getSubTemplate ("messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>