<?php

class Cabimentacoes {

	// get all budgets created by the user that exist in database
	function getPendentBudgetsCC ($id) {
		global $dbh, $schema;

		try {
	      // using prepared statements will help protect you from SQL injection
	     	$stmt = $dbh->prepare("SELECT n.* 
                                FROM $schema.cabimentacao n
                               WHERE (n.estado= 'Aberta' OR n.estado= 'Em Análise') AND (n.envolve = :id)
                               ORDER BY data_pedido");
      	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        // get next row as an array indexed by column name
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        return ($result);
    }
    catch(PDOException $e) {
    		$_SESSION["s_errors"]["generic"][] = "ERRO[11]: ".$e->getMessage();
     		header("Location: ../principal/index.php"); // verificar?????
      	die;
  	}
	}

  function getAll($id) {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT * 
                            FROM $schema.cabimentacao
                            WHERE pede = :id 
                            ORDER BY cabimentacao_id");
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

  // get author's data
  function getById($id) {
      global $dbh, $schema;
      try {
          $stmt = $dbh->prepare("SELECT * FROM $schema.cabimentacao WHERE cabimentacao_id = :id");
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

	function insert ($descritive, $estimatedVal, $centrocustos, $funcionario, $ativity) {
		global $dbh, $schema;

		 try {
	      	$sql = "INSERT INTO $schema.cabimentacao (cabimentacao_id, estado, descritivo, valor_estimado, data_pedido, cativa, pede, envolve) 
	      			    VALUES (DEFAULT, DEFAULT, ?, ?, DEFAULT, ?, ?, ?)";
	      	$stmt = $dbh->prepare($sql);
	      	$stmt->execute(array($descritive, $estimatedVal, $centrocustos, $funcionario, $ativity));
	      	//$count = $stmt->rowCount();
	    }
	    catch(PDOException $e) {
	      	$errmsg = $e->getMessage();
	      	// parse errmsg
	      	$errors["generic"] = "ERRO[14]: ".$errmsg;
	      	return $errors;
	    }		
	}


	function update ($id, $date_end, $justification, $state){
		global $dbh, $schema;

		try {
      		$sql = "UPDATE $schema.cabimentacao SET data_decisao=?, justificacao_decisao=?, estado=? WHERE cabimentacao_id=?";
      		$stmt = $dbh->prepare($sql);
      		$stmt->execute(array ($date_end, $justification, $state, $id));
      		//$count = $stmt->rowCount();
    	}
    	catch(PDOException $e) {
      		$errmsg = $e->getMessage();
      		// parse errmsg
      		if (strpos($errmsg, 'cab_ndate_ck')) 
				      $errors["data_fim"] = "Data de encerramento inválida!";
      		else 
				      $errors["generic"] = "ERRO[23]: ".$errmsg;
      		return $errors;
    	}
	}

	function delete ($id) {
		global $dbh, $schema;
    	try {
      		$sql = "DELETE FROM $schema.cabimentacao WHERE cabimentacao_id = :id";
      		$stmt = $dbh->prepare($sql);
      		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
      		$stmt->execute();
      		//$count = $stmt->rowCount();
    	}
    	catch(PDOException $e) {
      		$_SESSION["s_errors"]["generic"][] = "ERRO[15]: ".$e->getMessage();
      		header("Location: list.php"); //verificar ?????
      		die;
    	}
	}	

  function getLastInsertedId() {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT currval('$schema.cabimentacao_aid_seq') as id");
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

	  // get all tuples with the name of the activity
  function getAllBudgetsActivity($id) {
    global $dbh, $schema;
    try {
    		// using prepared statements will help protect you from SQL injection
    		$stmt = $dbh->prepare("SELECT n.* 
              							FROM $schema.cabimentacao n
            								WHERE n.envolve= :id 
            								ORDER BY data_pedido");
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

  	// get :limit tuples with the name of the activity starting in :offset
  function getAllBudgetsActivityLimit($id, $limit, $offset) {
    global $dbh, $schema;
    try {
      	// using prepared statements will help protect you from SQL injection
      	$stmt = $dbh->prepare("SELECT n.* 
                              FROM $schema.cabimentacao n
                              WHERE n.envolve= :id 
                              ORDER BY data_pedido
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