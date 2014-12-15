<?php

class Financia {
	
	// list all pendent request of employees
	function getAllEmprestimos ($id) {
	 	global $dbh, $schema;
		try {


	      // using prepared statements will help protect you from SQL injection	     		
  			$stmt = $dbh->prepare("SELECT * 
  								FROM $schema.financia E JOIN $schema.centrocustos C ON E.financiador=C.centrocustos_id 
  								WHERE C.responsavel = :id");
  		  $stmt->bindParam(':id', $id);
	      $stmt->execute();
	   
	      // get array containing all of the result set rows 
	      $result = $stmt->fetchall(PDO::FETCH_ASSOC);

	      return $result;
	    }
	    catch(PDOException $e) {
	      $_SESSION["s_errors"]["generic"][] = "ERRO[28]: ".$e->getMessage();
	      header("Location: ../principal/index.php");
	      die;
	    }
	}

	// list all pendent request of employees
	function getAllAskedEmprestimos ($id) {
	 	global $dbh, $schema;
		try {

  			$stmt = $dbh->prepare("SELECT * 
  								FROM $schema.financia E JOIN $schema.centrocustos C ON E.financiado=C.centrocustos_id 
  								WHERE C.responsavel = :id"
  				);
  		  $stmt->bindParam(':id', $id);
	      $stmt->execute();
	   
	      // get array containing all of the result set rows 
	      $result = $stmt->fetchall(PDO::FETCH_ASSOC);

	      return $result;
	    }
	    catch(PDOException $e) {
	      $_SESSION["s_errors"]["generic"][] = "ERRO[28]: ".$e->getMessage();
	      header("Location: ../principal/index.php");
	      die;
	    }
	}



	  // get loan tupples
  	function getById($id) {
    	global $dbh, $schema;
	    try {
	      $stmt = $dbh->prepare("SELECT * FROM $schema.financia WHERE emprestimo_id = :id");
	      $stmt->bindParam(':id', $id);
	      $stmt->execute();
	      // get next row as an array indexed by column name
	      $result = $stmt->fetch(PDO::FETCH_ASSOC);
	      return ($result);
	    }
	    catch(PDOException $e) {
	      $_SESSION["s_errors"]["generic"][] = "ERRO[22]: ".$e->getMessage();
	      header("Location: list_emprestimos.php");
	      die;
	    }
  	}

	// make a new loan request
	function insertEmprestimo($origem, $destino, $descricao, $valor, $date) {
		global $dbh, $schema;
	    try {
	      $sql = "INSERT INTO $schema.financia (emprestimo_id, financiador, financiado, descritivo, montante, data, resposta) 
	      		  VALUES (DEFAULT, ?, ?, ?, ?, ?, ?)";
	      $stmt = $dbh->prepare($sql);

	      $stmt->execute(array( $destino,$origem, $descricao, $valor, $date,"Pendente"));
	      //$count = $stmt->rowCount();
	    }
	    catch(PDOException $e) {
	      $errmsg = $e->getMessage();
	      // parse errmsg
 		  $errors["generic"] = "ERRO[24]: ".$errmsg;
	      return $errors;
    	}
	}

	// make a new loan request
	function testeEmprestimo($financiador, $id) {
		global $dbh, $schema;
	    try {
	    
	      $sql = "SELECT * FROM $schema.centrocustos WHERE responsavel = :id";
	      $stmt = $dbh->prepare($sql);
	 	  $stmt->bindParam(':id', $id);
	      $stmt->execute();
	      //$count = $stmt->rowCount();
	      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
	 
	    
	      foreach($result as $value){
	      	if(($value["centrocustos_id"])==$financiador){
	      		return "FALSE";
	      	}
	      } 
	      return "TRUE";
	    }
	    catch(PDOException $e) {
	      $errmsg = $e->getMessage();
	      // parse errmsg
		  $errors["generic"] = "ERRO[24]: ".$errmsg;
	      return $errors;
    	}
	}
	
	// answer a request of loan
	function close ($id, $result) {
		global $dbh, $schema;
	    try {
	      $sql = "UPDATE $schema.financia SET resposta=? WHERE emprestimo_id=?";
	      $stmt = $dbh->prepare($sql);
	      $stmt->execute(array($result, $id));
	      //$count = $stmt->rowCount();
	      return 0;
	    }
	    catch(PDOException $e) {
	      $errmsg = $e->getMessage();
	      // parse errmsg
		$errors["generic"] = "ERRO[23]: ".$errmsg;
	      return $errors;
    	}
	}

}

