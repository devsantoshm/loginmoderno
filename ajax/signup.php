<?php 

include '../connection/db.php';

function check_email(){
  //las variables globales deben ser declaradas globales dentro de la función si van a ser utilizadas dentro de dicha función
  GLOBAL $db;

  if(isset($_POST['check_email'])){
    $email = $_POST['check_email'];
    $Query = $db->prepare("SELECT email FROM users WHERE email = ?");
    $Query->execute(array($email));
    if($Query->rowCount() == 0){
      echo json_encode(array('error' => 'email_success'));
    }else{
      echo json_encode(array('error' => 'email_fail', 'message' => 'Sorry this email is already exist'));
    }
  }
}

check_email();

function singup_submit(){

  GLOBAL $db;

  if(isset($_GET['signup']) && $_GET['signup'] == 'true')
  {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $Query    = $db->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
    $Query->execute([$name, $email, $password]);

    if($Query){
      $_SESSION['user_name'] = $name;
      echo json_encode(['error' => 'success', 'msg' => 'success.php']);
    }
  }
}

singup_submit();