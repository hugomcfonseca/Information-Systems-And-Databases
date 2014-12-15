<?php /* Smarty version Smarty-3.1.5, created on 2014-12-11 00:18:18
         compiled from "../templates/centrocusto/get_cab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17949059785488d3f95a3f00-58699389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '091356fcb6812d7c952db2e72358fad8dbc0259d' => 
    array (
      0 => '../templates/centrocusto/get_cab.tpl',
      1 => 1418253342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17949059785488d3f95a3f00-58699389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5488d3f96fa75',
  'variables' => 
  array (
    'cabimentacao' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5488d3f96fa75')) {function content_5488d3f96fa75($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Ver Cabimentação Pendente Selecionada</h1>

  <ul>
    <li><strong>ID:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
</li>
    <li><strong>Estado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['estado'];?>
</li>
    <li><strong>Descritivo:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['descritivo'];?>
</li>
    <li><strong>Valor Estimado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['valor_estimado'];?>
</li>
    <li><strong>Data de Pedido:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['data_pedido'];?>
</li>
    <li><strong>Centro de Custos Associado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cativa'];?>
</li>
    <li><strong>Funcionário Associado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['pede'];?>
</li>
    <li><strong>Atividade Envolvida:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['envolve'];?>
</li>
    <li><strong>Justificação da decisão:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['justificacao_decisao'];?>
</li>
    <li><strong>Data da Decisão:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['data_decisao'];?>
</li>
  </ul>

  <p>[<a class="navtext" href="get_cab.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id']+1;?>
">Próximo</a>] 
      [<a class="navtext" href="../operacoes/list.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
">Ver Operações Associadas</a>]
<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
     [<a class="navtext" href="edit_cab.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
">Editar</a>] 
     <!-- [<a class="navtext" href="delete_cab.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
">Apagar</a>] -->
<?php }?> 
  </p>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>