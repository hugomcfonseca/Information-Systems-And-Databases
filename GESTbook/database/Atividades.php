<?php

class Atividades {

  // get all tuples of authors
  function getAll() {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT * FROM $schema.atividade ORDER BY atividade_id");
      $stmt->execute();
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[11]: ".$e->getMessage();
      header("Location: ../principal/index.php");
      die;
    }
  }

  // get author's data
  function getById($id) {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.atividade WHERE atividade_id = :id");
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return ($result);
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[12]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }
 
 // editar atividade
   function update($atividade_i, $descritiv, $tip, $data_inici, $data_fi) {
    global $dbh, $schema;
    try {
      $sql = "UPDATE $schema.atividade SET descritivo=?, tipo=?, data_inicio=?, data_fim=? WHERE atividade_id=?";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($descritiv, $tip, $data_inici, $data_fi, $atividade_i));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      if (strpos($errmsg, 'ativ_data_ck')) 
	         $errors["data_fim"] = "Data de fim inválida!";
      else 
	         $errors["generic"] = "ERRO[23]: ".$errmsg;
      return $errors;
    }
  }

  //inserir atividade
   function insert($descritiv, $tip, $data_inici, $data_fi, $criado) {
    global $dbh, $schema;
    try {
      $sql = "INSERT INTO $schema.atividade (atividade_id, descritivo, tipo, data_inicio, data_fim, criado_por) 
      VALUES (DEFAULT, ?, ?, ?, ?, ?)";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($descritiv, $tip, $data_inici,$data_fi, $criado));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      if (strpos($errmsg, 'ativ_data_ck')) 
           $errors["data_fim"] = "Data de fim inválida!";
      else 
	         $errors["generic"] = "ERRO[24]: ".$errmsg;
      return $errors;
    }
  }

  // delete authors
  function delete($id) {
    global $dbh, $schema;
    try {
      $sql = "DELETE FROM $schema.atividade WHERE atividade_id = :id";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[15]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // get last used id from sequence
  function getLastInsertedId() {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT currval('$schema.atividade_aid_seq') as id");
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result["id"];
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[16]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }
  
    // get number of tuples
  function getNumRows() {
    global $dbh, $schema;
    try {
      $stmt = $dbh->query("SELECT COUNT(*) FROM $schema.atividade");
      $result = $stmt->fetchColumn();
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[27]: ".$e->getMessage();
      header("Location: ../principal/index.php");
      die;
    }
  }

  function getAllActivityFuncionario($id) {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT *
                             FROM $schema.atividade 
                             WHERE criado_por= :id
                             ORDER BY atividade_id");
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

  function getAllNewsAuthorLimit($limit, $offset) {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT N.*, A.tipo 
                             FROM $schema.atividade N, $schema.authors A
                             WHERE N.nauthor = A.aid
                             ORDER BY ndate
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