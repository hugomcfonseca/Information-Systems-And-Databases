<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 15:16:08
         compiled from "../templates/mycentrocusto/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:923492516548b274b70b1a3-86301411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ec2fa43e8b3048638e7c0228017f217bfd9878' => 
    array (
      0 => '../templates/mycentrocusto/get.tpl',
      1 => 1418523473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '923492516548b274b70b1a3-86301411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548b274b83f29',
  'variables' => 
  array (
    's_type' => 0,
    'centrocustos1' => 0,
    'responsavel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548b274b83f29')) {function content_548b274b83f29($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"&&$_smarty_tpl->tpl_vars['centrocustos1']->value['responsavel']==$_smarty_tpl->tpl_vars['responsavel']->value){?>
    <h1>Ver Centro de Custos</h1>

    <ul>
      <li><strong>ID:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
</li>
      <li><strong>Nome:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome'];?>
</li>
      <li><strong>Nome Curto:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome_curto'];?>
</li>
      <li><strong>Período de vida:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['periodo'];?>
</li>
      <li><strong>Valor Orçamentado:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['valor_orcamentado'];?>
 €</li>
      <li><strong>Descrição:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['descricao'];?>
</li>
      <li><strong>Tipo de Custo:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['tipo_custo'];?>
</li>
    </ul>

    <p>[<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id']+1;?>
">Próximo</a>]
       [<a class="navtext" href="../centrocusto/list_cab.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Ver Cabimentações Pendentes</a>] 
       [<a class="navtext" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Editar</a>] 
       [<a class="navtext" href="list.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Retroceder</a>] 
    </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>