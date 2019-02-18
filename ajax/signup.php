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