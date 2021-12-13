<?php
include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav_div">
		<div class="nav">
      <a href="../index.html">Poveste</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="../biografie.html">Biografie</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="../rezumat.html">Rezumat</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="../video.html">Video</a>
      &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="../contact.php">Contacte</a>
      &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="../feedback.html">Feedback</a>
      &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="display.php">Lupta personajelor</a>
      
            
			
		</div>
		</div>   

<div class="container"></div>
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Adauga un erou!</a>
</button>

<div style="border-top: 30px solid black"  > 
        
        <div class="poveste">	
            <div class="text">

<table class="table">
  <thead>
    <tr class="text-light">
      <th scope="col">Nume erou</th>
      <th scope="col">Arma eroului</th>
      <th scope="col">Inamicul de moarte</th>
      
    </tr>
  </thead>
  <tbody>


    <?php

$sql="Select * from `personaj`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){ 
      $id=$row['id'];
      $nume=$row['nume'];
      $arma_id=$row['arma_id'];
      $atacator_id=$row['atacator_id'];
      echo '<tr class="text-light">
      <th scope="row">'.$nume.'</th>
      <td>'.$arma_id.'</td>
      <td>'.$atacator_id.'</td>
      
      <td>
       <button class="btn btn-primary"><a href="update.php?updateid='.$id.' " class="text-light">Actualizare</a></button>
       <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light">Sterge</a></button>
      </td>
    </tr>';
    }
}

    


?>
   
   

  </tbody>
</table>

</div>
  </div>
    </div>

    
</body>
</html>