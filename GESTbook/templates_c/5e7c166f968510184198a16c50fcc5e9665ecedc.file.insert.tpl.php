<?php /* Smarty version Smarty-3.1.5, created on 2014-12-12 00:51:01
         compiled from "../templates/operacoes/insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1543031346548a2b51350025-35521729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e7c166f968510184198a16c50fcc5e9665ecedc' => 
    array (
      0 => '../templates/operacoes/insert.tpl',
      1 => 1418341856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1543031346548a2b51350025-35521729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548a2b51456f3',
  'variables' => 
  array (
    'operacao1' => 0,
    's_errors' => 0,
    'cab_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a2b51456f3')) {function content_548a2b51456f3($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Inserir Operação</h1>

  <form action="insert_action.php" method="post">
    <fieldset>
    <input type="hidden" name="operacao_id" value="<?php echo $_smarty_tpl->tpl_vars['operacao1']->value['operacao_id'];?>
" />
    
    <label for="descritivo">Descritivo:</label>
    <textarea rows="5" cols="50" name="descritivo" id="descritivo" required="required"><?php echo $_smarty_tpl->tpl_vars['operacao1']->value['descritivo'];?>
</textarea>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['descritivo'];?>
</span>
    </br> </br> </br>
    
     <label for="tipo_movimento">Tipo de movimento:</label>
    <select name="tipo_movimento" id="tipo_movimento"}>
    <option value="Despesa">Despesa</option>
    <option value="Entrada">Entrada</option>
    <option value="Emprestimo">Emprestimo</option>
    </select>
    </br> </br> </br>
    
    <label for="tipo_suporte">Tipo de suporte:</label>
    <select name="tipo_suporte" id="tipo_suporte">
    <option value="Instituicao">Instituicao</option>
    <option value="Pessoal">Pessoal</option>
    </select>
    </br> </br> </br>
    
    <label for="montante">Montante:</label>
    <input id="montante" name="montante" type="int" value="<?php echo $_smarty_tpl->tpl_vars['operacao1']->value['montante'];?>
">
    </br> </br>

    <label for="beneficiante">Beneficiante:</label>
    <input id="beneficiante" name="beneficiante" type="int" value="<?php echo $_smarty_tpl->tpl_vars['operacao1']->value['beneficiante'];?>
" >
    </br> </br>

    <label for="cab_id">Cabimentação respetiva:</label>
    <input id="cab_id" name="cab_id" type="int" value="<?php echo $_smarty_tpl->tpl_vars['cab_id']->value;?>
" readonly="readonly">
    </br> </br>

    <label for="suporta">Responsável pelo suporte:</label>
    <input id="suporta" name="suporta" type="int" value="<?php echo $_smarty_tpl->tpl_vars['operacao1']->value['suporta'];?>
">
    </br> </br>
    
    <p><input type="submit" value="Inserir" /></p>
    </fieldset>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>