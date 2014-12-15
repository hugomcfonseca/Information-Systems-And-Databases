<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 02:13:22
         compiled from "../templates/atividade/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10905123545485c5ab6d05e3-76522892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15a3d4ba1cefb75ac79809e8859a0dc0c4903ecb' => 
    array (
      0 => '../templates/atividade/edit.tpl',
      1 => 1418500458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10905123545485c5ab6d05e3-76522892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5485c5ab7825f',
  'variables' => 
  array (
    's_type' => 0,
    'atividade' => 0,
    's_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5485c5ab7825f')) {function content_5485c5ab7825f($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
 <center> <h1>Editar Atividade</h1> </center>

  <form action="edit_action.php" method="post">
    <fieldset>
    <input type="hidden" name="atividade_id" value="<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
" />
    
	<label for="descritivo">Descritivo:</label>
    <textarea rows="5" cols="50" name="descritivo" id="descritivo" required="required"><?php echo $_smarty_tpl->tpl_vars['atividade']->value['descritivo'];?>
</textarea>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['descritivo'];?>
</span>
	</br> </br>
	
    <label for="tipo">Tipo:</label>
	<select name="tipo" id="tipo">
	<option value="Estudantes">Estudantes</option>
	<option value="Eventos">Eventos</option>
	<option value="Pessoais">Pessoais</option>
	<option value="Projetos">Projetos</option>
	</select>
	</br> </br>
	
	<label for="data_inicio">Início:</label>
	<input id="data_inicio" name="data_inicio" type="date" value="<?php echo $_smarty_tpl->tpl_vars['atividade']->value['data_inicio'];?>
">
	</br> </br>
	
	<label for="data_fim">Fim:</label>
	<input id="data_fim" name="data_fim" type="date" value="<?php echo $_smarty_tpl->tpl_vars['atividade']->value['data_fim'];?>
">
	</br>
	
 <p><input type="submit" value="Editar" /></p>
 <p>[<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
">Retroceder</a>] 
    </fieldset>
  </form>
  <?php }?> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>