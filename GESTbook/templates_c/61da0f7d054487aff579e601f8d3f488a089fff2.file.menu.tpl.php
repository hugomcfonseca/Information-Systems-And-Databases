<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 00:00:09
         compiled from "../templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194098519154824de7abf061-85584944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61da0f7d054487aff579e601f8d3f488a089fff2' => 
    array (
      0 => '../templates/menu.tpl',
      1 => 1418597980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194098519154824de7abf061-85584944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54824de7aef7b',
  'variables' => 
  array (
    's_type' => 0,
    's_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54824de7aef7b')) {function content_54824de7aef7b($_smarty_tpl) {?>    <!-- nav menu -->
    <div id="menu">
      <div class="title">Menu</div>
      <ul>
<?php if (($_smarty_tpl->tpl_vars['s_type']->value=="user")){?>
  <li><a href="../mycentrocusto/list.php">Centros de Custos</a></li> 
  <li><a href="../atividade/listByMyCC.php">Gestão Financeira</a></li>
<?php }?>   
<?php if ($_smarty_tpl->tpl_vars['s_type']->value!="user"&&$_smarty_tpl->tpl_vars['s_user']->value!=null){?>
  <li><a href="../centrocusto/list.php">Centros de Custos</a></li>
  <li><a href="../atividade/list.php">Gestão Financeira</a></li>
  <li><a href="../funcionarios/list.php">Funcionários</a></li>
<?php }?>
<?php if (($_smarty_tpl->tpl_vars['s_user']->value!=null)){?>
  <li><a href="../funcionarios/get_user.php">Definições da Conta</a></li>
<?php }?>
<?php if (($_smarty_tpl->tpl_vars['s_user']->value==null)){?>
  <li><a href="../funcionarios/insert_new.php">Criar nova conta</a></li>
<?php }?>
     </ul>
    </div>


<?php }} ?>