<?php

    $elementsArr = [
      "masterStatus"=>[
        "status"=>"noerrors",
        "type"=>"masterStatus"
      ],
      "email"=>[
        "errorMessage"=>"<span style='color: red; margin-left: 15px;'>Email cannot be blank and must be written as a proper email</span>",
        "errorOutput"=>"",
        "type"=>"text",
        "value"=>"dlor@admin.com",
        "regex"=>"email"
      ],
      "password"=>[
        "errorMessage"=>"<span style='color: red; margin-left: 15px;'>Password cannot be blank</span>",
        "errorOutput"=>"",
        "type"=>"text",
        "value"=>"password",
        "regex"=>"name"
      ],
    ];



function init(){

global $elementsArr, $stickForm;

  if(isset($_POST['login'])){
    require_once('/home/d/l/dlor/public_html/CPS276/assignments/assignment10/classes/StickyForm.php');
    $stickyForm = new StickyForm();

      //global $elementsArr, $stickyForm;

        /*THIS METHODS TAKE THE POST ARRAY AND THE ELEMENTS ARRAY (SEE BELOW) AND PASSES THEM TO THE VALIDATION FORM METHOD OF THE STICKY FORM CLASS.  IT UPDATES THE ELEMENTS ARRAY AND RETURNS IT, THIS IS STORED IN THE $postArr VARIABLE */
        $postArr = $stickyForm->validateForm($_POST, $elementsArr);

        /* THE ELEMENTS ARRAY HAS A MASTER STATUS AREA. IF THERE ARE ANY ERRORS FOUND THE STATUS IS CHANGED TO "ERRORS" FROM THE DEFAULT OF "NOERRORS".  DEPENDING ON WHAT IS RETURNED DEPENDS ON WHAT HAPPENS NEXT.  IN THIS CASE THE RETURN MESSAGE HAS "NO ERRORS" SO WE HAVE NO PROBLEMS WITH OUR VALIDATION AND WE CAN SUBMIT THE FORM */
        if($postArr['masterStatus']['status'] == "noerrors"){

          return login($_POST);

        }
        else{
          return getLoginForm("",$postArr);
        }
  }

      else {
          return getLoginForm("", $elementsArr);
        }

    return login($_POST);
}


  function getLoginForm($acknowledgement, $elementsArr){

//global $elementsArr;

   $output = <<<HTML

      <!-- <p>Email is "dlor@admin.com" password is "password"</p> -->
      <!-- Staff email is "dlor@staff.com" password is "password"
           Test email is "test@test.com password is "test"
      -->

      <form action="index.php?page=login" method="post">

      <div class="form-group">
        <label for="email">Email {$elementsArr['email']['errorOutput']}</label>
        <input type="text" class="form-control" id="email" name="email" value="{$elementsArr['email']['value']}">
      </div>

      <div class="form-group">
        <label for="password">Password {$elementsArr['password']['errorOutput']}</label>
        <input type="password" class="form-control" id="password" name="password" value="{$elementsArr['password']['value']}">
      </div>

      <div class="from-group">
        <input type="submit" name="login" value="Login" class="btn btn-primary">
      </div>

      </form>
  HTML;

  return [$acknowledgement, $output];

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

      //email cannot be blank
      $msg = "Login credentials incorrect";

      return getLoginForm($msg);
    }
  }

  $msg = "Login credentials incorrect";

  return getLoginForm($msg);
  }