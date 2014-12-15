<?php

class Centrocustos {

  // get all tuples
  function getAll() {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT * FROM $schema.centrocustos ORDER BY centrocustos_id");
      $stmt->execute();
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[21]: ".$e->getMessage();
      header("Location: ../principal/index.php");
      die;
     }
  }

  // get CC's data (edit or see CC)
  function getById($id) {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.centrocustos WHERE centrocustos_id = :id");
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return ($result);
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[22]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // action edit CC list (ALTERAR catch)
  function update($id, $name, $acronym, $descritive, $value_orcament, $cost_type, $cycle, $responsible) {
    global $dbh, $schema;
    try {
      $sql = "UPDATE $schema.centrocustos SET nome=?, nome_curto=?, descricao=?, valor_orcamentado=?, tipo_custo=?, periodo=?, responsavel=? 
              WHERE centrocustos_id=?";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($name, $acronym, $descritive, $value_orcament, $cost_type, $cycle, $responsible, $id));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg 
	    $errors["generic"] = "ERRO[23]: ".$errmsg;
      return $errors;
    }
  }

  // insert new CC (ALTERAR catch)
  function insert($name, $acronym, $descritive, $value_orcament, $cost_type, $cycle, $responsible) {
    global $dbh, $schema;
    try {
      $sql = "INSERT INTO $schema.centrocustos (centrocustos_id, nome, nome_curto, descricao, valor_orcamentado, tipo_custo, periodo, responsavel) 
              VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($name, $acronym, $descritive, $value_orcament, $cost_type, $cycle, $responsible));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      if (strpos($errmsg, 'news_ndate_ck')) 
	      $errors["ndate"] = 'Data inválida!';
      elseif (strpos($errmsg, 'news_nauthor_fk')) 
	      $errors["nauthor"] = 'Autor inexistente!';
      else 
	      $errors["generic"] = "ERRO[24]: ".$errmsg;
      return $errors;
    }
  }

  // delete CC
  function delete($id) {
    global $dbh, $schema;
    try {
      $sql = "DELETE FROM $schema.centrocustos WHERE centrocustos_id = :id";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[25]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // get last used id from sequence
  function getLastInsertedId() {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT currval('$schema.centrocustos_aid_seq') as id");
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result["id"];
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[26]: ".$e->getMessage();
      header("Location: ../principal/index.php");
      die;
    }
  }

  // get number of tuples
  function getNumRows() {
    global $dbh, $schema;
    try {
      $stmt = $dbh->query("SELECT COUNT(*) FROM $schema.centrocustos");
      $result = $stmt->fetchColumn();
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[27]: ".$e->getMessage();
      header("Location: ../principal/index.php");
      die;
    }
  }

  // get all tuples with the name of the author
  function getAllCCFuncionario($id) {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT c.*
                             FROM $schema.centrocustos c
                             WHERE c.responsavel= :id
                             ORDER BY centrocustos_id");
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return ($result);
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[28]: ".$e->getMessage();
      header("Location: ../principal/index.php");
      die;
     }
  }

  // get :limit tuples with the name of the author starting in :offset
  function getAllCCLimit($limit, $offset) {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT N.*
                             FROM $schema.centrocustos N
                             ORDER BY centrocustos_id
                             LIMIT :limit OFFSET :offset");
      $stmt->execute(array($limit, $offset));
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[29]: ".$e->getMessage();
      header("Location: ../principal/index.php");
      die;
     }
  }

  function getAllCCFuncionarioLimit($limit, $offset) {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT C.*, F.aname 
                             FROM $schema.centrocustos C, $schema.funcionarios F
                             WHERE C.responsavel = F.user_id
                             ORDER BY centrocustos_id
                             LIMIT :limit OFFSET :offset");
      $stmt->execute(array($limit, $offset));
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[29]: ".$e->getMessage();
      header("Location: ../principal/index.php");
      die;
     }
  }

} /*** end of class ***/

?>