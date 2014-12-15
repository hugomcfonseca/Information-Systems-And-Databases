<?php /* Smarty version Smarty-3.1.5, created on 2014-12-13 23:48:48
         compiled from "../templates/mycentrocusto/list_emprestimos_pendentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:760326915548cbd5dc06555-87832426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcea8b66becdd5cdd2c616896ce95b6c91334273' => 
    array (
      0 => '../templates/mycentrocusto/list_emprestimos_pendentes.tpl',
      1 => 1418510867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '760326915548cbd5dc06555-87832426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548cbd5dd03d3',
  'variables' => 
  array (
    's_type' => 0,
    'my_emprestimos' => 0,
    'cc1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548cbd5dd03d3')) {function content_548cbd5dd03d3($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
  <center><h1>Empréstimos à espera de resposta:</h1></center>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Descrição</th>
      <th class="center">Data</th>
      <th class="left">Estado</th>
    </tr>
  <?php  $_smarty_tpl->tpl_vars['cc1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['my_emprestimos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc1']->key => $_smarty_tpl->tpl_vars['cc1']->value){
$_smarty_tpl->tpl_vars['cc1']->_loop = true;
?>
    <tr>
      <td class="left"><a href="get_emprestimo_pendente.php?id=<?php echo $_smarty_tpl->tpl_vars['cc1']->value['emprestimo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['emprestimo_id'];?>
</a></td>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['descritivo'];?>
</td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['data'];?>
</td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['resposta'];?>
</td>
    </tr>
  <?php } ?>
  </table>

  <p>
     [<a class="navtext" href="list_emprestimos.php">Voltar à página anterior</a>]
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>