<?php

class Operacoes {

    // get all budgets created by the user that exist in database
    function getAllMovesFuncionario ($id) {
      global $dbh, $schema;
      try {
          // using prepared statements will help protect you from SQL injection
          $stmt = $dbh->prepare("SELECT * 
                                 FROM $schema.operacao
                                 WHERE (beneficiante= :id OR suporta= :id)
                                 ORDER BY operacao_id");
          $stmt->bindParam(':id', $id, PDO::PARAM_INT);
          $stmt->execute();
          // get next row as an array indexed by column name
          $result = $stmt->fetchall(PDO::FETCH_ASSOC);
          return ($result);
        }
      catch(PDOException $e) {
          $_SESSION["s_errors"]["generic"][] = "ERRO[11]: ".$e->getMessage();
          header("Location: ../principal/index.php"); 
          die;
      }
    }

    function getAllMoves () {
      global $dbh, $schema;
      try {
          // using prepared statements will help protect you from SQL injection
          $stmt = $dbh->prepare("SELECT * 
                                 FROM $schema.operacao
                                 ORDER BY operacao_id");
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

    function getById ($id) {
      global $dbh, $schema;
      try {
          $stmt = $dbh->prepare("SELECT * FROM $schema.operacao WHERE operacao_id = :id");
          $stmt->bindParam(':id', $id);
          $stmt->execute();
          // get next row as an array indexed by column name
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          return $result;
      }
      catch(PDOException $e) {
          $_SESSION["s_errors"]["generic"][] = "ERRO[32]: ".$e->getMessage();
          header("Location: ../principal/index.php");
          die;
      }
    }  

    function update ($id, $support_type, $move_type, $descritive, $value, $date, $benef, $support){
      global $dbh, $schema;
      try {
            $sql = "UPDATE $schema.operacao 
                    SET tipo_suporte=?, tipo_movimento=?, descritivo=?, montante=?, data=?, beneficiante=?, suporta=? 
                    WHERE operacao_id=?";
            $stmt = $dbh->prepare($sql);
            $stmt->execute(array ($support_type, $move_type, $descritive, $value, $date, $benef, $support, $id));
            //$count = $stmt->rowCount();
        }
        catch(PDOException $e) {
            $errmsg = $e->getMessage();
            // parse errmsg
            if (strpos($errmsg, 'op_ndate_ck')) 
                $errors["data_fim"] = "Data de registo inválida!";
            else 
                $errors["generic"] = "ERRO[23]: ".$errmsg;
            return $errors;
        }
    }  

    function insertOperations ($descritive, $move_type, $sup_type, $value, $benef_func, $cab_id, $suport_func) {
      global $dbh, $schema;

       try {
            $sql = "INSERT INTO $schema.operacao (operacao_id, tipo_movimento, tipo_suporte, descritivo, montante, data, beneficiante, requer, suporta) 
                VALUES (DEFAULT, ?, ?, ?, ?, DEFAULT, ?, ?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute(array($move_type, $sup_type, $descritive, $value, $benef_func, $cab_id, $suport_func));
            //$count = $stmt->rowCount();
        }
        catch(PDOException $e) {
            $errmsg = $e->getMessage();
            // parse errmsg
            $errors["generic"] = "ERRO[23]: ".$errmsg;
            return $errors;
        }   
    }

    function getLastInsertedId() {
      global $dbh, $schema;
      try {
          $stmt = $dbh->prepare("SELECT currval('$schema.operacao_aid_seq') as id");
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

    function getAllMovesBudget($id) {
      global $dbh, $schema;
      try {
          // using prepared statements will help protect you from SQL injection
          $stmt = $dbh->prepare("SELECT n.* 
                                FROM $schema.operacao n
                                WHERE n.requer= :id
                                ORDER BY data");
          $stmt->bindParam(':id', $id, PDO::PARAM_INT);
          $stmt->execute();
          // get array containing all of the result set rows 
          $result = $stmt->fetchall(PDO::FETCH_ASSOC);
          return ($result);
      }
      catch(PDOException $e) {
          $_SESSION["s_errors"]["generic"][] = "ERRO[28]: ".$e->getMessage();
          header("Location: ../principal/index.php");
          die;
       }
    }

    function getAllMovesBudgetLimit($id, $limit, $offset) {
      global $dbh, $schema;
      try {
        // using prepared statements will help protect you from SQL injection
        $stmt = $dbh->prepare("SELECT N.* 
                              FROM $schema.operacao N
                              WHERE N.requer= :id 
                              ORDER BY data
                              LIMIT :limit OFFSET :offset");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
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

}

?>