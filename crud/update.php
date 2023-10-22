<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `atacator` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nume=$row['nume'];
$caracter=$row['caracter'];
$viata=$row['viata'];
$produs=$row['produs'];


if(isset($_POST['submit'])){
    $nume=$_POST['nume'];
    $caracter=$_POST['caracter'];
    $viata=$_POST['viata'];
    $produs=$_POST['produs'];
    
    
    $sql="update `atacator` set id=$id,nume='$nume',
    caracter='$caracter',viata='$viata',produs='$produs' 
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
        
    }else{
        die(mysqli_error($con));
    }
}
?>





<!doctype html> 
<html lang="en"> 
    <head> <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="../login.css">
     <title>CRUD Operation</title> 
    </head> 
    <body> 
        <div class="containter" class="hero" class="intro" > 
            <form name="updateForm" method="post" class="text-light"> 
                <div class="form-group" > 
                    <label>Nume antagonist</label> 
                    <input type="text" class="form-control" placeholder="nume" name="nume" autocomplete="off" value=<?php echo $nume;?> > 
                </div> 
                <div class="form-group"> 
                    <label>Caracterul antagonistului</label> 
                    <input type="text" class="form-control" placeholder="caracter" name="caracter" autocomplete="off" value=<?php echo $caracter;?>> 
            </div> 
            <div class="form-group"> 
                <label>Viata antagonistului</label> 
                <input type="text" class="form-control" placeholder="viata" name="viata" autocomplete="off" value=<?php echo $viata;?>> 
            </div> 
            <div class="form-group">
                <label>Produs</label>
                <select name="produs">
                <?php
                $res=mysqli_query($con,"select * from produs");
                while($row=mysqli_fetch_array($res))
                {
                    ?>
                    <option><?php echo $row["nume_produs"]; ?> </option>
                    <?php
                }


                ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Actualizare</button> 
            <button  class="btn btn-primary" ><a href="display.php">Inapoi</a></button>
        </form> 
    </div> 

</body> 
</html>