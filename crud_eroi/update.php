<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `personaj` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nume=$row['nume'];
$arma_id=$row['arma_id'];
$atacator_id=$row['atacator_id'];




if(isset($_POST['submit'])){
    $nume=$_POST['nume'];
    $arma_id=$_POST['arma_id'];
    $atacator_id=$_POST['atacator_id'];
    
    
    $sql="update `personaj` set id=$id,nume='$nume',
    arma_id='$arma_id',atacator_id='$atacator_id' 
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:../crud/display.php');
        
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
            <form method="post" class="text-light"> 
                <div class="form-group" > 
                    <label>Nume erou</label> 
                    <input type="text" class="form-control" placeholder="nume" name="nume" autocomplete="off" value=<?php echo $nume;?> > 
                </div> 

                <div class="form-group">
                <label>Arma eroului</label>
                <select name="arma_id">
                <?php
                $res=mysqli_query($con,"select * from arma");
                while($row=mysqli_fetch_array($res))
                {
                    ?>
                    <option><?php echo $row["nume"]; ?> </option>
                    <?php
                }


                ?>
                </select>
            </div>  
            <div class="form-group">
                <label>Inamicul de moarte</label>
                <select name="atacator_id">
                <?php
                $res=mysqli_query($con,"select * from atacator");
                while($row=mysqli_fetch_array($res))
                {
                    ?>
                    <option><?php echo $row["nume"]; ?> </option>
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