<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 02:33:10
         compiled from "../templates/cabimentacoes/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192410445454862cafc213a4-89550914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3eafda485edeb3eb1d4be2e7807dbac25feca5' => 
    array (
      0 => '../templates/cabimentacoes/get.tpl',
      1 => 1418607186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192410445454862cafc213a4-89550914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54862cafd516b',
  'variables' => 
  array (
    's_type' => 0,
    'login' => 0,
    'funcionario' => 0,
    'cabimentacao' => 0,
    'centrocusto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54862cafd516b')) {function content_54862cafd516b($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"||$_smarty_tpl->tpl_vars['login']->value==$_smarty_tpl->tpl_vars['funcionario']->value['user_id']){?>
  <h1>Ver Cabimentação Selecionada</h1>

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
    <li><strong>Centro de Custos Associado:</strong> <a href="../mycentrocusto/get.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocusto']->value['centrocustos_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['centrocusto']->value['nome_curto'];?>
</a> (ID: <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cativa'];?>
)</li>
    <li><strong>Funcionário Associado:</strong> <a href="../funcionarios/get.php?id=<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nome'];?>
</a> (ID: <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['pede'];?>
)</li>
    <li><strong>Atividade Envolvida:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['envolve'];?>
</li>
    <li><strong>Justificação da decisão:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['justificacao_decisao'];?>
</li>
    <li><strong>Data da Decisão:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['data_decisao'];?>
</li>
  </ul>

  <p>[<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id']+1;?>
">Próximo</a>] 
     [<a class="navtext" href="../operacoes/list.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
">Ver Operações Associadas</a>]
<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
     [<a class="navtext" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
">Editar</a>] 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
     [<a class="navtext" href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['cabimentacao']->value['cabimentacao_id'];?>
">Apagar</a>]
<?php }?> 
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>