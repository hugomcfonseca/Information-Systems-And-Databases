<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 01:03:25
         compiled from "../templates/operacoes/insert_enter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:515148853548e254d033732-15535745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994f52628134fc28c67f474de127436d5886d52c' => 
    array (
      0 => '../templates/operacoes/insert_enter.tpl',
      1 => 1418601693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '515148853548e254d033732-15535745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'operacao1' => 0,
    's_errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548e254d1bff6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e254d1bff6')) {function content_548e254d1bff6($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Inserir Operação de Entrada</h1>

  <form action="insert_enter_action.php" method="post">
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
    <input id="tipo_movimento" name="tipo_movimento" type="text" value="Entrada" readonly>
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

    <label for="suporta">Responsável pelo suporte:</label>
    <input id="suporta" name="suporta" type="int" value="<?php echo $_smarty_tpl->tpl_vars['operacao1']->value['suporta'];?>
">
    </br> </br>
    
    <p><input type="submit" value="Inserir" /></p>
    </fieldset>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>