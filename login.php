<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="login.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
                            <a href="contacts.html">Contacte</a>
                            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a href="feedback.html">Feedback</a>
                
                
            </div>
            </div>
    
            
            


        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button> 
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div> 
                <form name="loginForm" id="login" class="input-group">
                    <input type="text" name="username" id="form_username" class="input-field form-control" placeholder="Utilizator">
                    <!-- <p id="username-error">*Trebuie de completat</p> -->
                    <input type="password" id="form_password" class="input-field form-control" placeholder="Introdu Parola" name="password">
                 <!--    <p id="password-error">*Trebuie de completat</p> -->
                    
                    <button id="send" type="submit" class="submit-btn">Intră în cont!</button>
                    
                </form>

                <form name="registerForm" id="register" class="input-group">
                    <input type="text" name="userReg" class="input-field form-control" placeholder="Utilizator">
                    <input type="email" name="emailReg" class="input-field form-control" placeholder="Email">
                    <input type="password" name="passReg" class="input-field form-control" placeholder="Introdu Parola">
                    
                    <button id="send2" type="submit" class="submit-btn">Register</button>
                </form>  

            </div>
    
           <div id="pop_up2" class="pop_up2" style="opacity: 0">
                     <h2>Logare cu suuces</h2>
            </div>

            <div id="pop_up3" class="pop_up3" style="opacity: 0">
                     <h2>Înregistrare cu succes</h2>
            </div>

        </div>





        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="login.js"> </script>
        <script src="validation.js"> </script>

        <!-- 
        <script>
            $("#username-error").hide();
            $("#password-error").hide();

            let error_username = false;
            let error_password = false;

            $("#form_username").focusout(function(){
                check_username();
            });
            $("#form_password").focusout(function(){
                check_password();
            });

            function check_username() {
                var pattern =/^[a-zA-Z]*$/;
                var fname = $("#form_username").val();
                if (pattern.test(username) && username !=='') {
                    $("#username-error").hide();
                    $("#form_username").css("border-bottom","2px solid #34F458");
                } else {
                    $("#username-error").html("Ar trebui sa contina doar caractere");
                    $("#username-error").show();
                    $("#username-error").css("border-bottom","2px solid #F90A0A")
                    error_username = true;
                }
            }

            function check_password() {
                var password_lenght = $("form_password").val().lenght;
                if (password_lenght < 8) {
                    $("#password-error").html("Introduceti cel putin 8 caractere");
                    $("#password-error").show();
                    $("#form_password").css("border-bottom","2px solid #f90A0A");
                    error_password = true;
                } else {
                    $("#password-error").hide();
                    $("#form_password").css("border-bottom","2px solid #34F458");
                }
            }
                


           

        </script> -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>


        <script>
    $(function () {
        $("form[name='loginForm']").validate({
            
            rules: {
                username: "required",
                password: "required",
                username: {
                    required: true,
                    number: false
                },
                password: {
                    required: true,
                    minlength: 8
                }
            },
            
            messages: {
                username: {
                    required: "Va rog introduceti username-ul dvs."
            },
                password: {
                    required: "Va rog introduceti parola",
                    minlength: "Introduceti cel putin 8 caractere"
                }
            },
            submitHandler: function (form) {

              setTimeout(function() {form.submit()}, 2000);
              
            }
        });
    }); 
</script>

<script>
    $(function () {
        $("form[name='registerForm']").validate({
            
            rules: {
                userReg: "required",
                emailReg: "required",
                passReg: "required",
                userReg: {
                    required: true,
                    number: false
                },
                emailReg: {
                    required: true,
                    email: true
                },
                passReg: {
                    required: true,
                    minlength: 8
                }
            },
            
            messages: {
                userReg: {
                    required: "Va rog introduceti un username"
            },
                emailReg: {
                    required: "Va rog introduceti emailul",
                    email: "Va rog introduceti o adresa de email valida"
                },
                passReg: {
                    required: "Va rog introduceti o parola",
                    minlength: "Introduceti cel putin 8 caractere"
                }
            },
            submitHandler: function (form) {

              setTimeout(function() {form.submit()}, 2000);
              
            }
        });
    }); 
</script>


<script>



</script>


       <script>

            $("#send").click(function() {
     if ($("form[name='loginForm']").valid() == true) {
     $("#pop_up2").css("opacity", "1");
    }
});


       </script>

       <script>

            $("#send2").click(function() {
     if ($("form[name='registerForm']").valid() == true) {
     $("#pop_up3").css("opacity", "1");
    }
});


       </script>

    </body>
</html>