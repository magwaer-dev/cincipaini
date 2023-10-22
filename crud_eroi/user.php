<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $nume=$_POST['nume'];
    $arma_id=$_POST['arma_id'];
    $atacator_id=$_POST['atacator_id'];
    
    
    $sql="insert into `personaj` (nume,arma_id,atacator_id)
    values('$nume','$arma_id','$atacator_id')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Datele au fost inserate cu succes";
        header('location:../crud/display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>





<!doctype html> 
<html lang="en"> 
    <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
   
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="../login.css">
     <title>CRUD Operation</title> 
    </head> 
    <body> 
        <div class="containter"> 
            <form name="adaugaErou" method="post" class="text-light"> 
                <div class="form-group"> 
                    <label>Nume erou</label> 
                    <input type="text" class="form-control" placeholder="nume" name="nume" autocomplete="off"> 
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
            
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
            <button  class="btn btn-primary" ><a href="display.php">Inapoi</a></button>
        </form> 
    </div> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    
     <script>
    $(function () {
        $("form[name='adaugaErou']").validate({
            
            rules: {
                nume: "required"
            },
            
            messages: {
                nume: {
                    required: "Va rog introduceti un nume"
                      }
            },
            submitHandler: function (form) {

              form.submit();
              
            }
        });
    }); 
</script>

</body> 
</html>