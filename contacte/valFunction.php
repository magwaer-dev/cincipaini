<?php
$db = mysqli_connect('localhost','root','','laboratorul2_test');


function emailVal($email) {
    
    if (empty($email)) {
        $msg["mesage"] = "Trebuie sa introduceti emailul";
      } 
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg["mesage"] = "Format de email invalid";
        }
        else{
            return true;
        }
  }



//Functii Contact
function nameVal($fname){
    if(empty($fname)){
      $msg['mesage'] = "Lipseste numele!";
    }else{
      return true;
    }
  }
  
  
  function commentVal($comment){
    if(empty($comment)){
      $msg["mesage"] = "Campul este gol!";
    }
    elseif (strlen($_POST['comment']) < 20){
      $msg["mesage"] = "Sunt prea putine cuvinte";
  }else{
    return true;
  }
  }

?>