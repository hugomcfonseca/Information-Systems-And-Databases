<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 03:15:23
         compiled from "../templates/cabimentacoes/insert_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:772458244548df891379ce0-62543712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37a961165271da8f29e16e94db99d7a3ccea86dc' => 
    array (
      0 => '../templates/cabimentacoes/insert_act.tpl',
      1 => 1418604311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772458244548df891379ce0-62543712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548df89145f54',
  'variables' => 
  array (
    's_user' => 0,
    'cabimentacao1' => 0,
    's_errors' => 0,
    'responsavel' => 0,
    'atividade_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548df89145f54')) {function content_548df89145f54($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_user']->value){?>
      <h1>Pedir Nova Cabimentação</h1>

      <form action="insert_act_action.php" method="post">
        <fieldset>
        <label for="descritivo">Descrição:</label>
        <input type="text" size="42" name="descritivo" id="descritivo" value="<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['descritivo'];?>
" required="required" />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['descritivo'];?>
</span>
        <br />
        <label for="valor_estimado">Valor Estimado:</label>
        <input type="int" size="24" name="valor_estimado" id="valor_estimado" value="<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['valor_estimado'];?>
" required="required" />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['valor_estimado'];?>
</span>
        <br /><br />
        <label for="centro_custos">Centro de Custos a cativar:</label>
        <input type="int" size="24" name="centro_custos" id="centro_custos" value="<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['centro_custos'];?>
" required="required" />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['aphone'];?>
</span>
        <br /><br /><br /><br />
        <label for="funcionario">Funcionário que pede: </label>
        <input type="int" size="24" name="funcionario" id="funcionario" value="<?php echo $_smarty_tpl->tpl_vars['responsavel']->value;?>
" readonly />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['aage'];?>
</span>
        <br /><br /><br />
        <label for="atividade">Atividade relacionada (ALTERAR): </label>
        <input type="int" size="24" name="atividade" id="atividade" value="<?php echo $_smarty_tpl->tpl_vars['atividade_id']->value;?>
" readonly />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['aage'];?>
</span>
        <br />
        <p><input type="submit" value="Inserir" /></p>
        </fieldset>
      </form>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>