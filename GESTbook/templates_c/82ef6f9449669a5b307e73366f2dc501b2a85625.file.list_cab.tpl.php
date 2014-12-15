<?php /* Smarty version Smarty-3.1.5, created on 2014-12-11 00:15:02
         compiled from "../templates/centrocusto/list_cab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11274926405488d258dc2a89-18325898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82ef6f9449669a5b307e73366f2dc501b2a85625' => 
    array (
      0 => '../templates/centrocusto/list_cab.tpl',
      1 => 1418253061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11274926405488d258dc2a89-18325898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5488d258e9126',
  'variables' => 
  array (
    'cab_pendente' => 0,
    'cab_pendente1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5488d258e9126')) {function content_5488d258e9126($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Lista de Cabimentações Pendentes do CC selecionado</h1>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Data do Pedido</th>
      <th class="center">Descritivo</th>
    </tr>
<?php  $_smarty_tpl->tpl_vars['cab_pendente1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cab_pendente1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cab_pendente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cab_pendente1']->key => $_smarty_tpl->tpl_vars['cab_pendente1']->value){
$_smarty_tpl->tpl_vars['cab_pendente1']->_loop = true;
?>
    <tr>
      <td class="left"><a href="get_cab.php?id=<?php echo $_smarty_tpl->tpl_vars['cab_pendente1']->value['cabimentacao_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cab_pendente1']->value['cabimentacao_id'];?>
</a></td>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['cab_pendente1']->value['data_pedido'];?>
</td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['cab_pendente1']->value['descritivo'];?>
</td>
    </tr>
<?php } ?>
  </table>

  <p>[<a class="navtext" href="list_page.php">Paginar</a>]</p>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>