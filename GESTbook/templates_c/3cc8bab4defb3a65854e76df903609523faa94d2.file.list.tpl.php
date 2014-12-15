<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 23:53:03
         compiled from "../templates/cabimentacoes/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169397290654862212944e24-60172733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc8bab4defb3a65854e76df903609523faa94d2' => 
    array (
      0 => '../templates/cabimentacoes/list.tpl',
      1 => 1418596850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169397290654862212944e24-60172733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548622129fda0',
  'variables' => 
  array (
    's_user' => 0,
    'cabimentacao1' => 0,
    'cabimentacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548622129fda0')) {function content_548622129fda0($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_user']->value){?>
  <h1>Listar Cabimentações</h1>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Data do Pedido</th>
      <th class="center">Descritivo</th>
    </tr>
<?php  $_smarty_tpl->tpl_vars['cabimentacao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabimentacao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabimentacao1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabimentacao']->key => $_smarty_tpl->tpl_vars['cabimentacao']->value){
$_smarty_tpl->tpl_vars['cabimentacao']->_loop = true;
?>
    <tr>
      <td class="left"><a href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
</a></td>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['data_pedido'];?>
</td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['descritivo'];?>
</td>
    </tr>
<?php } ?>
  </table>

  <p>[<a class="navtext" href="insert.php">Pedir Cabimentação</a>] 
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>