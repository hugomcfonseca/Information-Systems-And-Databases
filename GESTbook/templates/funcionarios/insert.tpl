{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Inserir Funcionário</h1>

    <form action="insert_action.php" method="post">
    <fieldset>
    <label for="email1">E-mail:</label>
    <input type="text" name="email1" id="email1" value="E-MAIL" required="required" size="70" />
    <span class="error">{$s_errors.email1}</span>
    </br> </br>

    <label for="pass1">Password:</label>  
    <input type="password" size="10" name="pass1" id="pass1" value="" required="required" />
    <span class="error">{$s_errors.pass1}</span>
    </br> </br>

    <label for="nif">NIF:</label>
    <input type="text" name="nif" id="nif" value="" required="required" size="30" />
    <span class="error">{$s_errors.nif}</span>
    </br> </br>
    
    <label for="nome">Nome:</label>
    <input type="text" size="70" name="nome" id="nome" value="" required="required"/>
    <span class="error">{$s_errors.nome}</span>
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
    <span class="error">{$s_errors.telefone}</span>
    </br> </br>
    
    <label for="morada">Morada:</label>
    <input type="text" name="morada" id="morada" value="" required="required"size="70"/>
    <span class="error">{$s_errors.morada}</span>
    </br> </br>
    
    <p><input type="submit" value="Inserir" /></p>
     <p>[<a class="navtext" href="list.php">Retroceder</a>] 
  </p>
    </fieldset>
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
