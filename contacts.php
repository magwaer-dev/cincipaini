<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Contacts</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="contacts.css">
  <link rel="stylesheet" href="style.css">
  <!-- <form method="post" action="connect.php"></form> -->
  
</head>

<body>
    <div class="nav_div">
		<div class="nav">
                        <a href="index.html">Poveste</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="biografie.html">Biografie</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="rezumat.html">Rezumat</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="video.html">Video</a>
      &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="contacts.php">Contacte</a>
      &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="feedback.html">Feedback</a>
      &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="crud/display.php">Lupta personajelor</a> 
      
            
			
		</div>
		</div>

  <div class="container mt-5" class="background">
    <!-- Contact form -->
    <form name="contactForm" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label id="demo">Nume</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="form-group">
        <label>Telefon</label>
        <input type="text" class="form-control" name="phone" id="phone">
      </div>

      <div class="form-group">
        <label>Subiect</label>
        <input type="text" class="form-control" name="subject" id="subject">
      </div>

      <div class="form-group">
        <label>Mesaj</label>
        <textarea class="form-control" name="message" id="message" rows="4"></textarea>
      </div>

      <input id="send" type="submit" name="send" value="Send" class="btn btn-dark btn-block">

    </form>
    
  </div>


    <div id="pop_up" class="pop_up" style="opacity: 0">
      <h2>Form completed succesfully</h2>
    </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>


<script>
    $(function () {
        $("form[name='contactForm']").validate({
            
            rules: {
                name: "required",
                email: "required",
                phone: "required",
                subject: "required",
                message: "required",
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 8,
                    maxlength: 9,
                    number: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                }
            },
            
            messages: {
                name: "Va rog introduceti numele dvs.",
                email: {
                    required: "Va rog introduceti emailul",
                    minlength: "Va rog introduceti o adresa de email valida"
                },
                phone: {
                    required: "Va rog introduceti un numar de telefon",
                    minlength: "Numarul de telefon trebuie sa fie de cel putin 8 cifre",
                    maxlength: "Numarul de telefon nu trebuie sa fie mai mult de 9 cifre"
                },
                subject: "Va rog introduceti subiectul",
                message: "Va rog introduceti mesajul dvs."
            },
            submitHandler: function (form) {
              setTimeout(function() {form.submit()}, 2000);
            }
        });
    }); 
</script>

<script type="text/javascript">
   $("#send").click(function() {
     if ($("form[name='contactForm']").valid() == true) {
     $("#pop_up").css("opacity", "1");
    //    $.ajax({url: "ajax_info.txt", success: function(result){
    //   $("#demo").html(result);
    // }});
    }

});
</script>

<script>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','cinci_paini');

// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtSubject = $_POST['subject'];
$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `contacte` (`id`, `nume`, `email`, `telefon`, `subiect`, `mesaj`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtSubject', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);



?>

</script>



</body>

</html>

