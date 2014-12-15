<?php /* Smarty version Smarty-3.1.5, created on 2014-12-11 15:02:57
         compiled from "../templates/centrocusto/delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21281616955484c4b054a1c5-91870464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e58cf9d50b20c3059fe4eb6a1ac3a5b0acd0527e' => 
    array (
      0 => '../templates/centrocusto/delete.tpl',
      1 => 1418009254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21281616955484c4b054a1c5-91870464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5484c4b061710',
  'variables' => 
  array (
    's_type' => 0,
    'centrocustos1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484c4b061710')) {function content_5484c4b061710($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



  <?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
    <h1>Remover Centro de Custos</h1>

    <ul>
      <li><strong>ID:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
</li>
      <li><strong>Nome:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome'];?>
</li>
      <li><strong>Nome Curto:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome_curto'];?>
</li>
      <li><strong>Período de Vida:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['periodo'];?>
</li>
      <li><strong>Valor Orçamentado:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['valor_orcamentado'];?>
</li>
      <li><strong>Descrição:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['descricao'];?>
</li>
      <li><strong>Tipo de Custo:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['tipo_custo'];?>
</li>
      <li><strong>Responsável:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['responsavel'];?>
</li>
    </ul>

  <?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
    <p>Tem a certeza? 
       [<a class="navtext" href="delete_action.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Sim</a>] 
       [<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Não</a>]
    </p>
  <?php }?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>