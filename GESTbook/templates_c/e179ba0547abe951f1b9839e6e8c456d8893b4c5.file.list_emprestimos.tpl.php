<?php /* Smarty version Smarty-3.1.5, created on 2014-12-13 23:50:37
         compiled from "../templates/mycentrocusto/list_emprestimos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619351686548cba50a01931-88871806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e179ba0547abe951f1b9839e6e8c456d8893b4c5' => 
    array (
      0 => '../templates/mycentrocusto/list_emprestimos.tpl',
      1 => 1418511026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619351686548cba50a01931-88871806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548cba50b0078',
  'variables' => 
  array (
    's_type' => 0,
    'my_emprestimos' => 0,
    'cc1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548cba50b0078')) {function content_548cba50b0078($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
  <center><h1>Os meus empréstimos:</h1></center>

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
      <td class="left"><a href="get_emprestimo.php?id=<?php echo $_smarty_tpl->tpl_vars['cc1']->value['emprestimo_id'];?>
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

  <p>[<a class="navtext" href="insert_emprestimo.php">Pedir novo Empréstimo</a>]
     [<a class="navtext" href="list_emprestimos_pendentes.php">Ver os Meus pedidos de Empréstimos</a>]
     [<a class="navtext" href="list.php">Retroceder</a>]
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>