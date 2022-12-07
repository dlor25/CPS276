<?php

function init(){

  if(isset($_POST['sumbit'])){

    return login($_POST);
  }
  
  else {
    $msg = "";
    return getLoginForm($msg);
  }
}


  function getLoginForm($error){
  
   $output = <<<HTML
  
    <body class="container">
  
      <h1>Login</h1>
  
      <p>Email is "dlor@admin.com" password is "password"</p>

      <form action="index.php?page=login" method="post">

      <div class="form-group">
        <label>Email: <input type="text" name="email" class="form-control" value="dlor@admin.com"></label>
      </div>

      <div class="from-group">
        <label>Password: <input type="password" name="password" class="form-control" value="password"></label>
      </div>
      
      <div class="from-group">
        <input type="submit" name="sumbit" value="Login" class="btn btn-primary">
      </div>

      </form> 
    </body>
  HTML;

  return [$error, $output];

  }



  function login($post){
  
  require_once ('/home/d/l/dlor/public_html/CPS276/assignments/assignment10/classes/Pdo_methods.php');
  
  $pdo = new PdoMethods();
  $sql = "SELECT email, password FROM admins WHERE email = :email";
  $bindings = array(
  array(':email', $post['email'], 'str')
  );

  $records = $pdo->selectBinded($sql, $bindings);

  /** IF THERE WAS AN RETURN ERROR STRING */
  if($records == 'error'){
    $msg = "There was an error logging it";
    return getLoginForm($msg);
  }

  /** */
  else{
    if(count($records) != 0){
      /** IF THE PASSWORD IS NOT VERIFIED USING PASSWORD_VERIFY THEN RETURN FAILED, OTHERWISE RETURN SUCCESS, IF NO RECORDS ARE FOUND RETURN NO RECORDS FOUND. */
      if(password_verify($post['password'], $records[0]['password'])){

        session_start();

          $pdo = new PdoMethods();

          $sql = "SELECT status, name FROM admins WHERE $record[0]['password']";

          if($row['status'] === "admin"){
            
            $_SESSION['status'] = "admin";

            $msg = header('Location:https://russet-v8.wccnet.edu/~dlor/CPS276/assignments/assignment10/index.php?page=welcome');

            return $msg;
          }
          elseif($row['status'] === "staff"){

            $_SESSION['status'] = "staff";

            $msg = header('Location:https://russet-v8.wccnet.edu/~dlor/CPS276/assignments/assignment10/index.php?page=welcome');
          
            return $msg;
          }
          else{
            $msg = "error";
            return $msg;
          }
      }

      else {
              
        $msg = "There was a problem logging in with those credentials";

        return getLoginForm($msg);
      }
    }
    else {

      $msg = "There was a problem logging in with those credentials";

      return getLoginForm($msg);
    }
  }

  $msg = "Error";

  return getLoginForm($msg);
  }