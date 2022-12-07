<?php

function init(){

  if(isset($_POST['login'])){

    return login($_POST);
  }
  
  else {
    $msg = "";
    return getLoginForm($msg);
  }
}


  function getLoginForm($error){
  
   $output = <<<HTML
  
      <h1>Login</h1>
  
      <!-- <p>Email is "dlor@admin.com" password is "password"</p> -->
      <!-- Staff email is "dlor@staff.com" password is "password"
           Test email is "test@test.com password is "test"     
      -->

      <form action="index.php?page=login" method="post">

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="dlor@admin.com">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" value="password">
      </div>  
      
      <div class="from-group">
        <input type="submit" name="login" value="Login" class="btn btn-primary">
      </div>

      </form> 
  HTML;

  return [$error, $output];

  }



  function login($post){
  
  require_once ('/home/d/l/dlor/public_html/CPS276/assignments/assignment10/classes/Pdo_methods.php');
  
  $pdo = new PdoMethods();
  $sql = "SELECT email, password, name, status FROM admins WHERE email = :email";
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
        $_SESSION['access'] = "accessGranted";
        $_SESSION['status'] = $records[0]['status'];
        $_SESSION['name'] = $records[0]['name'];

        $msg = header('Location:https://russet-v8.wccnet.edu/~dlor/CPS276/assignments/assignment10/index.php?page=welcome');

        return $msg;
      }

      else {
              
        $msg = "Login credentials incorrect";

        return getLoginForm($msg);
      }
    }
    else {

      $msg = "Login credentials incorrect";

      return getLoginForm($msg);
    }
  }

  $msg = "Login credentials incorrect";

  return getLoginForm($msg);
  }