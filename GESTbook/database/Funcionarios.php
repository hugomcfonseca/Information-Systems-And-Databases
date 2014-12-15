<?php

class Funcionarios {

  // list all Employees
  function listEmployees () {
    global $dbh, $schema;

      try {
          // using prepared statements will help protect you from SQL injection
          $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios
                                 ORDER BY user_id");
          $stmt->execute();
          // get array containing all of the result set rows 
          $result = $stmt->fetchall(PDO::FETCH_ASSOC);
          return $result;
      }
      catch(PDOException $e) {
          $_SESSION["s_errors"]["generic"][] = "ERRO[31]: ".$e->getMessage();
          header("Location: ../principal/index.php");
          die;
      }
  }

  //get employees' data
  function getEmployeesData ($uid) {
    global $dbh, $schema;
    try {
        $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios WHERE user_id = :uid");
        $stmt->bindParam(':uid', $uid);
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

  function getEmployeesbyMail ($mail) {
    global $dbh, $schema;
    try {
        $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios WHERE email = :mail");
        $stmt->bindParam(':mail', $mail);
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

    // update employee
    function editEmployee($id,$pass, $name, $type, $class, $telephone,$nif, $address) {
      global $dbh, $schema;
      try {
          $sql = "UPDATE $schema.funcionarios SET nome = ?, tipo = ?, categoria = ?, telefone = ?, nif = ?, morada = ?, pass = ? WHERE user_id = ?";
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($name, $type, $class, $telephone, $nif, $address,md5($pass),$id));
          //$count = $stmt->rowCount();
      }
      catch(PDOException $e) {
          $errmsg = $e->getMessage();
          // parse errmsg
          $errors['generic'] = "ERRO[33]: ".$errmsg;
          return $errors;
      }
    }

        // update employee
    function editEmployeeByADMIN($id, $name, $type, $class, $telephone,$nif, $address) {
      global $dbh, $schema;
      try {
          $sql = "UPDATE $schema.funcionarios SET nome = ?, tipo = ?, categoria = ?, telefone = ?, nif = ?, morada = ? WHERE user_id = ?";
          $stmt = $dbh->prepare($sql);
          $stmt->execute(array($name, $type, $class, $telephone, $nif, $address,$id));
          //$count = $stmt->rowCount();
      }
      catch(PDOException $e) {
          $errmsg = $e->getMessage();
          // parse errmsg
          $errors['generic'] = "ERRO[33]: ".$errmsg;
          return $errors;
      }
    }

  //get employees' data
  function getById ($id) {
    global $dbh, $schema;
    try {
        $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios WHERE user_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        // get next row as an array indexed by column name
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[32]: ".$e->getMessage();
        header("Location: list.php");
        die;
    }
  }  

  // insert user
  function insertEmployee($pass, $name, $type, $class, $telephone,$nif, $address, $mail) {
    global $dbh, $schema;
    try {
        $sql = "INSERT INTO $schema.funcionarios (user_id, nome, categoria, tipo, telefone, nif, morada, email, pass) 
                VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array($name, $class, $type, $telephone, $nif, $address, $mail,md5($pass)));
        //$count = $stmt->rowCount();
        }
    catch(PDOException $e) {
        $errmsg = $e->getMessage();
        // parse errmsg
        if (strpos($errmsg, 'users_pkey')) 
            $errors["user_id"] = "Login Repetido!";
        else
            $errors["generic"] = "ERRO[34]: ".$errmsg;
        return $errors;
    }
  }      

  // delete employee
  function deleteEmployee($uid) {
    global $dbh, $schema;
    try {
        $sql = "DELETE FROM $schema.funcionarios WHERE user_id = :uid";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':uid', $uid);
        $stmt->execute();
        //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[35]: ".$e->getMessage();
        header("Location: list.php");
        die;
    }
  }

    // authenticate employee
  function existsUsernamePassword($mail, $password) {
    global $dbh, $schema;
    try {
        $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios WHERE email = :mail");
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
        // get next row as an array indexed by column name
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result["pass"] == md5($password)) 
            return true;
        else 
            return false;
    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
        header("Location: list.php");
        die;
    }
  }

  // get employee name by email
  function getUsername($mail) {
      global $dbh, $schema;
      try {
          $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios WHERE email = :mail");
          $stmt->bindParam(':mail', $mail);
          $stmt->execute();
          // get next row as an array indexed by column name
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          return $result["nome"];
      }
      catch(PDOException $e) {
          $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
          header("Location: list.php");
          die;
        }
  }

  function getUserID($mail) {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios WHERE email = :mail");
      $stmt->bindParam(':mail', $mail);
      $stmt->execute();
            // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      $use= $result["user_id"];
           //   $_SESSION["s_messages"][] = 'O funcionario '.$use.' existe!';
      return $use;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // decide user groups (aka user types)
  function isAdmin($mail) {
      switch ($mail) {
          case "admin":
              return true;
          default:
              return false;
        }
  }

  // get last used id from sequence
  function getLoginType ($mail){
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios 
                            WHERE email = :mail AND (tipo = 'Administrativo' OR tipo = 'administrativo')");
      $stmt->bindParam(':mail', $mail);
      $stmt->execute();
            // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($result["tipo"] == 'Administrativo' || $result["tipo"] == 'administrativo')
          return true;
      else 
          return false;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }    
  }


function getLoginTipo ($mail){
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.funcionarios 
                            WHERE email = :mail");
      $stmt->bindParam(':mail', $mail);
      $stmt->execute();
            // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result["tipo"];
     }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }    
  }

}

?>
