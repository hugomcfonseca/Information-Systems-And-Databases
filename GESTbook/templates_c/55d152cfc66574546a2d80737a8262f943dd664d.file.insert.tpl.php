<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 01:22:17
         compiled from "../templates/cabimentacoes/insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6873879895486390c513773-25620450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d152cfc66574546a2d80737a8262f943dd664d' => 
    array (
      0 => '../templates/cabimentacoes/insert.tpl',
      1 => 1418596805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6873879895486390c513773-25620450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5486390c5dfb7',
  'variables' => 
  array (
    's_type' => 0,
    'cabimentacao1' => 0,
    's_errors' => 0,
    'centrocustos' => 0,
    'cc' => 0,
    'funcionarios' => 0,
    'funcionario' => 0,
    'atividades' => 0,
    'atividade' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5486390c5dfb7')) {function content_5486390c5dfb7($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="user"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
      <h1>Pedir Nova Cabimentação</h1>

      <form action="insert_action.php" method="post">
        <fieldset>
        <label for="descritivo">Descrição:</label>
        <input type="text" size="42" name="descritivo" id="descritivo" value="<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['descritivo'];?>
" required="required" />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['descritivo'];?>
</span>
        <br />
        <label for="aemail">Valor Estimado:</label>
        <input type="int" size="24" name="valor_estimado" id="valor_estimado" value="<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['valor_estimado'];?>
" required="required" />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['valor_estimado'];?>
</span>
        <br /><br />
        <label for="centro_custos">Centro de Custos a cativar:</label>
        <select name="centro_custos" id="centro_custos">
        <?php  $_smarty_tpl->tpl_vars['cc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['centrocustos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc']->key => $_smarty_tpl->tpl_vars['cc']->value){
$_smarty_tpl->tpl_vars['cc']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['cc']->value['centrocustos_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['cabimentacao1']->value['cativa']==$_smarty_tpl->tpl_vars['cc']->value['centrocustos_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cc']->value['nome_curto'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['cc']->value['centrocustos_id'];?>
) 
        <?php } ?>
        </select>
        <br /><br /><br /><br />

        <?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
        <label for="funcionario">Funcionário que pede: </label>
        <input type="int" size="24" name="funcionario" id="funcionario" value="<?php echo $_smarty_tpl->tpl_vars['funcionarios']->value;?>
" readonly />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['aage'];?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
        <label for="funcionario">Funcionário que pede: </label>
        <select name="funcionario" id="funcionario">
        <?php  $_smarty_tpl->tpl_vars['funcionario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['funcionario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funcionarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['funcionario']->key => $_smarty_tpl->tpl_vars['funcionario']->value){
$_smarty_tpl->tpl_vars['funcionario']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['user_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['cabimentacao1']->value['pede']==$_smarty_tpl->tpl_vars['funcionario']->value['user_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nome'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['funcionario']->value['user_id'];?>
) 
        <?php } ?>
        </select>
        <?php }?>
        <br /><br /><br />
        <label for="atividade">Atividade relacionada: </label>
        <select name="atividade" id="atividade">
        <?php  $_smarty_tpl->tpl_vars['atividade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['atividade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['atividade']->key => $_smarty_tpl->tpl_vars['atividade']->value){
$_smarty_tpl->tpl_vars['atividade']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['cabimentacao1']->value['envolve']==$_smarty_tpl->tpl_vars['atividade']->value['atividade_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>

        <?php } ?>
        </select>
        <br />
        <p><input type="submit" value="Inserir" /></p>
        </fieldset>
      </form>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>