<?php /* Smarty version Smarty-3.1.5, created on 2014-12-13 02:29:49
         compiled from "../templates/funcionarios/insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74765697548b94aca47431-94960060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af7a69db1166ffc69e107fa373d676ccaf8277c' => 
    array (
      0 => '../templates/funcionarios/insert.tpl',
      1 => 1418434089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74765697548b94aca47431-94960060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548b94acc4302',
  'variables' => 
  array (
    's_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548b94acc4302')) {function content_548b94acc4302($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Inserir Funcionário</h1>

    <form action="insert_action.php" method="post">
    <fieldset>
    <label for="email1">E-mail:</label>
    <input type="text" name="email1" id="email1" value="E-MAIL" required="required" size="70" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['email1'];?>
</span>
    </br> </br>

    <label for="pass1">Password:</label>  
    <input type="password" size="10" name="pass1" id="pass1" value="" required="required" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['pass1'];?>
</span>
    </br> </br>

    <label for="nif">NIF:</label>
    <input type="text" name="nif" id="nif" value="" required="required" size="30" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['nif'];?>
</span>
    </br> </br>
    
    <label for="nome">Nome:</label>
    <input type="text" size="70" name="nome" id="nome" value="" required="required"/>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['nome'];?>
</span>
    </br> </br>
    
    <label for="tipo">Tipo:</label>
    <select name="tipo">
    <option value="administrativo">Administrativo</option>
    <option value="docente">Docente</option>
    <option value="investigador">Investigador</option>
    </select>
    </br> </br>
    
    <label for="categoria">Categoria:</label>
    <select name="categoria">
    <option value="Assistente Técnico">Assistente Técnico</option>
    <option value="Técnico Superior">Técnico Superior</option>
    <option value="Outro">Outro</option>
    <option value="Assistente">Assistente</option>
    <option value="Convidado">Convidado</option>
    <option value="Professor Assistente">Professor Assistente</option>
    <option value="Professor Associado">Professor Associado</option>
    <option value="Professor Catedrático">Professor Catedrático</option>
    <option value="arquitetura">Arquitetutra</option>
    <option value="artes">Belas Artes</option>
    <option value="ciencias">Ciências</option>
    <option value="nutricao">Ciências da Nutrição e da Alimentação</option>
    <option value="desporto">Desporto</option>
    <option value="direito">Direito</option>
    <option value="economia">Economia</option>
    <option value="engenharia">Engenharia</option>
    <option value="farmacia">Farmácia</option>
    <option value="letras">Letras</option>
    <option value="medicina">Medicina</option>
    <option value="dentaria">Medicina Dentária</option>
    <option value="psicologia">Psicologia</option>
    <option value="educacao">Ciências da Educação</option>
    <option value="bio">Ciências Biomédicas</option>
    </select>
    </br> </br>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" value="" required="required"size="30"/>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['telefone'];?>
</span>
    </br> </br>
    
    <label for="morada">Morada:</label>
    <input type="text" name="morada" id="morada" value="" required="required"size="70"/>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['morada'];?>
</span>
    </br> </br>
    
    <p><input type="submit" value="Inserir" /></p>
     <p>[<a class="navtext" href="list.php">Retroceder</a>] 
  </p>
    </fieldset>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>