<?php
  
  if(isset($_POST['login'])){

    require_once ('/home/d/l/dlor/public_html/CPS276/assignments/assignment10/classes/Pdo_methods.php');
         
      $pdo = new PdoMethods();
      $sql = "SELECT email, password FROM admins WHERE email = :email";
      $bindings = array(
      array(':email', $_POST['email'], 'str')
      );
    
      $records = $pdo->selectBinded($sql, $bindings);
    
      /** IF THERE WAS AN RETURN ERROR STRING */
      if($records == 'error'){
        echo "There was an error logging it";
      }
    
      /** */
      else{
        if(count($records) != 0){
          /** IF THE PASSWORD IS NOT VERIFIED USING PASSWORD_VERIFY THEN RETURN FAILED, OTHERWISE RETURN SUCCESS, IF NO RECORDS ARE FOUND RETURN NO RECORDS FOUND. */
          if(password_verify($_POST['password'], $records[0]['password'])){

            session_start();
            $_SESSION['access'] = "accessGranted";

            header('Location:https://russet-v8.wccnet.edu/~dlor/CPS276/assignments/assignment10/index.php?page=welcome');
          }

          else {
                  
            echo "There was a problem logging in with those credentials";
          }
        }
        else {

          echo "There was a problem logging in with those credentials";
        }
      }
  }

  // else{
  //   return;
  // }

  // function getLoginForm(){
  
?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>PHP Form Validation Example</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
    </head>
  
    <body class="container">
  
      <h1>Login</h1>
  
      <p>Email is "dlor@admin.com" password is "password"</p>

      <form action="test.php" method="post">

      <div class="form-group">
        <label>Email: <input type="text" name="email" class="form-control" value="dlor@admin.com"></label>
      </div>

      <div class="from-group">
        <label>Password: <input type="password" name="password" class="form-control" value="password"></label>
      </div>
      
      <div class="from-group">
        <input type="submit" name="login" value="Login" class="btn btn-primary">
      </div>

      </form> 
    </body>
  </html> 