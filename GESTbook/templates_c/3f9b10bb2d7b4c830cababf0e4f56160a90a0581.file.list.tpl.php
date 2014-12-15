<?php /* Smarty version Smarty-3.1.5, created on 2014-12-10 02:10:22
         compiled from "../templates/funcionarios/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13021573535487986252e2c0-98690587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9b10bb2d7b4c830cababf0e4f56160a90a0581' => 
    array (
      0 => '../templates/funcionarios/list.tpl',
      1 => 1418173505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13021573535487986252e2c0-98690587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5487986260da2',
  'variables' => 
  array (
    'funcionarios1' => 0,
    'funcionario' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5487986260da2')) {function content_5487986260da2($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Listar Funcionários</h1>

  <table>
    <tr>
      <th class="left">Numero ID</th>
      <th class="left">Nome</th>
      <th class="left">Email</th>
    </tr>
<?php  $_smarty_tpl->tpl_vars['funcionario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['funcionario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funcionarios1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['funcionario']->key => $_smarty_tpl->tpl_vars['funcionario']->value){
$_smarty_tpl->tpl_vars['funcionario']->_loop = true;
?>
    <tr>
      <td class="left"><a href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['user_id'];?>
</a></td>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nome'];?>
</td>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['email'];?>
</td>
    </tr>
<?php } ?>
  </table>

<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
  <p>[<a class="navtext" href="insert.php">Inserir</a>]</p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>