<?php
include 'valFunction.php';
include 'config.php';

$msg = array(
    "status" => 0,
    "mesage" => ""
);

if(isset($_POST['fname']) and isset($_POST['email']) and isset($_POST['comment'])){
    $fname = mysqli_real_escape_string($db, trim($_POST['fname']));
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $comment = mysqli_real_escape_string($db, trim($_POST['comment']));

    if(nameVal($fname) and emailVal($email) and commentVal($comment)){
    $sql = "INSERT INTO contact (nume,email, prenume) VALUES('$fname','$email','$comment')";
    mysqli_query($db, $sql);
    $msg["mesage"] = "Datele au fost salvate, va vom contacta curand.";
    $msg["status"] = 1;
  }else{
    $msg["mesage"] = "The fields are wrong!";
  }
}else{
  $msg["mesage"] = "The fields are empty!";
}
echo json_encode($msg);
?>