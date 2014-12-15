{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Editar Dados da Conta do Funcionário</h1>

  <form action="edit_action.php" method="post">
    <fieldset>
    <input type="hidden" name="user_id" value="{$funcionario1.user_id}" />

    <label for="nome">Nome:</label>
    <input type="text" size="40" name="nome1" id="nome1" value="{$funcionario1.nome}" required="required" />
    <span class="error">{$s_errors.nome}</span>
  </br> </br>

    <label for="nif">NIF:</label>
    <input type="text" size="40" name="nif" id="nif" value="{$funcionario1.nif}" required="required" />
    <span class="error">{$s_errors.nif}</span>
    </br> </br>

    <label for="tipo">Tipo:</label>
    <select name="tipo" id="tipo">
    <option value="{$funcionario1.tipo}">Administrativo</option>
    <option value="{$funcionario1.tipo}">Docente</option>
    <option value="{$funcionario1.tipo}">Investigador</option>
    </select>
    </br> </br>

    <label for="categoria">Categoria:</label>
    <select name="categoria" id="categoria">
    <option value="{$funcionario1.categoria}">Assistente</option>
    <option value="{$funcionario1.categoria}">Convidado</option>
    <option value="{$funcionario1.categoria}">Professor Assistente</option>
    <option value="{$funcionario1.categoria}">Professor Associado</option>
    <option value="{$funcionario1.categoria}">Professor Catedrático</option>
    <option value="{$funcionario1.categoria}">Arquitetutra</option>
    <option value="{$funcionario1.categoria}">Belas Artes</option>
    <option value="{$funcionario1.categoria}">Ciências</option>
    <option value="{$funcionario1.categoria}">Ciências da Nutrição e da Alimentação</option>
    <option value="{$funcionario1.categoria}">Desporto</option>
    <option value="{$funcionario1.categoria}">Direito</option>
    <option value="{$funcionario1.categoria}">Economia</option>
    <option value="{$funcionario1.categoria}">Engenharia</option>
    <option value="{$funcionario1.categoria}">Farmácia</option>
    <option value="{$funcionario1.categoria}">Letras</option>
    <option value="{$funcionario1.categoria}">Medicina</option>
    <option value="{$funcionario1.categoria}">Medicina Dentária</option>
    <option value="{$funcionario1.categoria}">Psicologia</option>
    <option value="{$funcionario1.categoria}">Ciências da Educação</option>
    <option value="{$funcionario1.categoria}">Ciências Biomédicas</option>
    </select>
    </br> </br>

    <label for="morada">Morada:</label>
    <input type="text" name="morada" id="morada" value="{$funcionario1.morada}" required="required" size="30"/>
    <span class="error">{$s_errors.ntitle}</span>
    </br> </br>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" value="{$funcionario1.telefone}" required="required" size="10"/>
    <span class="error">{$s_errors.ntitle}</span>
    </br> </br>


    <p><input type="submit" value="Editar" /></p>
    </fieldset>

    <!-- Acrescentar outros campos!!!! -->
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
