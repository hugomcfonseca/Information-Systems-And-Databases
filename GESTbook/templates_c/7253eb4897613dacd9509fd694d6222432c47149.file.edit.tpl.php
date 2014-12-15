<?php /* Smarty version Smarty-3.1.5, created on 2014-12-10 01:49:47
         compiled from "../templates/definicoes_conta/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:844750716548798abbfb384-01510157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7253eb4897613dacd9509fd694d6222432c47149' => 
    array (
      0 => '../templates/definicoes_conta/edit.tpl',
      1 => 1418127675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '844750716548798abbfb384-01510157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'funcionario1' => 0,
    's_errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548798abd544f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548798abd544f')) {function content_548798abd544f($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Editar Dados da Conta</h1>

  <form action="edit_action_user.php" method="post">
    <fieldset>
    <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['user_id'];?>
" />
  
    <label for="pass">Password:</label>  
    <input type="password" size="10" name="pass1" id="pass1" value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['pass'];?>
" required="required" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['pass'];?>
</span>
   </br> </br>

    <label for="nome">Nome:</label>
    <input type="text" size="40" name="nome1" id="nome1" value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['nome'];?>
" required="required" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['nome'];?>
</span>
  </br> </br>

    <label for="nif">NIF:</label>
    <input type="text" size="40" name="nif" id="nif" value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['nif'];?>
" required="required" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['nif'];?>
</span>
    </br> </br>

    <label for="tipo">Tipo:</label>
    <select name="tipo" id="tipo">
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['tipo'];?>
">Administrativo</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['tipo'];?>
">Docente</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['tipo'];?>
">Investigador</option>
    </select>
    </br> </br>

    <label for="categoria">Categoria:</label>
    <select name="categoria" id="categoria">
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Assistente</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Convidado</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Professor Assistente</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Professor Associado</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Professor Catedrático</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Arquitetutra</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Belas Artes</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Ciências</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Ciências da Nutrição e da Alimentação</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Desporto</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Direito</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Economia</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Engenharia</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Farmácia</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Letras</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Medicina</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Medicina Dentária</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Psicologia</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Ciências da Educação</option>
    <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['categoria'];?>
">Ciências Biomédicas</option>
    </select>
    </br> </br>

    <label for="morada">Morada:</label>
    <input type="text" name="morada" id="morada" value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['morada'];?>
" required="required" size="30"/>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['ntitle'];?>
</span>
    </br> </br>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" value="<?php echo $_smarty_tpl->tpl_vars['funcionario1']->value['telefone'];?>
" required="required" size="10"/>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['ntitle'];?>
</span>
    </br> </br>





    <p><input type="submit" value="Editar" /></p>
    </fieldset>

    <!-- Acrescentar outros campos!!!! -->
  </form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>