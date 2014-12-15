<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 16:14:48
         compiled from "../templates/mycentrocusto/insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1227095991548da937f3d221-72640736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f94aca612e9e9d740a6aa8aaa3f203885bbee12' => 
    array (
      0 => '../templates/mycentrocusto/insert.tpl',
      1 => 1418570067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1227095991548da937f3d221-72640736',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548da9380d7fd',
  'variables' => 
  array (
    's_type' => 0,
    'centrocustos1' => 0,
    's_errors' => 0,
    'time_type' => 0,
    'tempo' => 0,
    'responsavel' => 0,
    'cost_type' => 0,
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548da9380d7fd')) {function content_548da9380d7fd($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
      <h1>Criar Centro de Custos</h1>

      <form action="insert_action.php" method="post">
        <fieldset>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome'];?>
" required="required" />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['nome'];?>
</span>
        <br />
        <label for="nome_curto">Nome Curto:</label>
        <input type="text" name="nome_curto" id="nome_curto" value="<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome_curto'];?>
" required="required" />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['nome_curto'];?>
</span>
        <br />
        <label for="periodo">Período de Vida:</label>
        <input type="text" size="4" name="periodo" id="periodo" value="<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['periodo'];?>
" required="required"/>
        <select name="time_type" id="time_type">
    <?php  $_smarty_tpl->tpl_vars['tempo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tempo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['time_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tempo']->key => $_smarty_tpl->tpl_vars['tempo']->value){
$_smarty_tpl->tpl_vars['tempo']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['tempo']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tempo']->value==$_smarty_tpl->tpl_vars['time_type']->value){?> selected="selected"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['tempo']->value;?>

    <?php } ?>
        </select>
        <br />
        <br />
        <label for="valor_orcamentado">Valor Orçamentado:</label>
        <input type="int" name="valor_orcamentado" id="valor_orcamentado" value="<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['valor_orcamentado'];?>
" required="required" />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['valor_orcamentado'];?>
</span>
        <br />
        <br />
        <label for="descricao">Descrição:</label>
        <textarea rows="5" cols="52" name="descricao" id="descricao" required="required"><?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['descricao'];?>
</textarea>
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['descricao'];?>
</span>
        <br />
        <label for="responsavel">Responsável:</label>
        <input type="text" name="responsavel" id="responsavel" value="<?php echo $_smarty_tpl->tpl_vars['responsavel']->value;?>
" required="required" readonly />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['responsavel'];?>
</span>
        <br />
        <label for="tipo_custo">Tipo de Custo:</label>
        <select name="tipo_custo" id="tipo_custo">
    <?php  $_smarty_tpl->tpl_vars['tipo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tipo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cost_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->key => $_smarty_tpl->tpl_vars['tipo']->value){
$_smarty_tpl->tpl_vars['tipo']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tipo']->value==$_smarty_tpl->tpl_vars['centrocustos1']->value['tipo_custo']){?> selected="selected"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>

    <?php } ?>
        </select>
        <br />
        <p><input type="submit" value="Inserir" /></p>
        </fieldset>
      </form>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>