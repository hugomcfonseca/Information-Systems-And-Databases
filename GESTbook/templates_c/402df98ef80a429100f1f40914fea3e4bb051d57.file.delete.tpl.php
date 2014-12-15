<?php /* Smarty version Smarty-3.1.5, created on 2014-12-09 18:13:53
         compiled from "../templates/cabimentacoes/delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143660063154872dd1751154-51476180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '402df98ef80a429100f1f40914fea3e4bb051d57' => 
    array (
      0 => '../templates/cabimentacoes/delete.tpl',
      1 => 1418145204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143660063154872dd1751154-51476180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cabimentacao1' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54872dd185c1c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54872dd185c1c')) {function content_54872dd185c1c($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Remover Centro de Custos</h1>

  <ul>
    <li><strong>ID:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['cabimentacao_id'];?>
</li>
    <li><strong>Estado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['estado'];?>
</li>
    <li><strong>Descritivo:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['descritivo'];?>
</li>
    <li><strong>Valor Estimado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['valor_estimado'];?>
</li>
    <li><strong>Data de Pedido:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['data_pedido'];?>
</li>
    <li><strong>Centro de Custos Associado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['cativa'];?>
</li>
    <li><strong>Funcionário Associado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['pede'];?>
</li>
    <li><strong>Atividade Envolvida:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['envolve'];?>
</li>
    <li><strong>Justificação da decisão:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['justificacao_decisao'];?>
</li>
    <li><strong>Data da Decisão:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['data_decisao'];?>
</li>
  </ul>

<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
  <p>Tem a certeza? 
     [<a class="navtext" href="delete_action.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['cabimentacao_id'];?>
">Sim</a>] 
     [<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['cabimentacao_id'];?>
">Não</a>]
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>