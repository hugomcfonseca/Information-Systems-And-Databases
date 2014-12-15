<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 01:10:43
         compiled from "../templates/atividade/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160107901554838471e66ce8-12396797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9700fe7b6ff634ae8e8e55ca80cddc57168d40a8' => 
    array (
      0 => '../templates/atividade/list.tpl',
      1 => 1418601948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160107901554838471e66ce8-12396797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548384720967d',
  'variables' => 
  array (
    's_user' => 0,
    's_type' => 0,
    'atividades' => 0,
    'atividade' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548384720967d')) {function content_548384720967d($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_user']->value&&$_smarty_tpl->tpl_vars['s_type']->value!="user"){?>
  <center><h1>Lista de Atividades</h1></center>

  <table>
    <tr>
      <th class="left">ID</th>
      <th class="left">Tipo</th>
	  <th class="left">Descritivo</th>
     
    </tr>
<?php  $_smarty_tpl->tpl_vars['atividade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['atividade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['atividade']->key => $_smarty_tpl->tpl_vars['atividade']->value){
$_smarty_tpl->tpl_vars['atividade']->_loop = true;
?>
    <tr>
      <td class="left"><a href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
</a></td>
       <td class="left"><?php echo $_smarty_tpl->tpl_vars['atividade']->value['tipo'];?>
</td>
	  <td class="center"><?php echo $_smarty_tpl->tpl_vars['atividade']->value['descritivo'];?>
</td>
    </tr>
<?php } ?>
  </table>
  

  <p>[<a class="navtext" href="insert.php">Inserir</a>] 
  </p>
  <p>[<a class="navtext" href="../operacoes/list_moves.php">Ver Todas as Operações</a>] 
  </p>
  
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>