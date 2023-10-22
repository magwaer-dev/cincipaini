$(function(){
    var $registerForm = $("#formValidation")
    $.validator.addMethod("noSpace", function(value, element){
        return value == '' || value.trim().length != 0
    }, "Spaces are not allowed!")

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Letters only please"); 

    if($registerForm.length){
        $registerForm.validate({
            rules:{
                fname:{
                    required: true,
                    noSpace: true,
                    lettersonly: true
                },
                email: {
                    required: true,
                    email: true,
                },

                comment: {
                    required: true,
                    noSpace: true,
                    minlength: 20
                }

            },
            messages:{
                email: {
                    required: "Introduceti emailul!",
                    email: "Emailul este greșit!"
                },

                comment: {
                    required: "Nu este nici un mesaj!",
                    noSpace: "Trebuie să scriți ceva!",
                    minlength: "Mesajul trebuie să conțină minimum 20 de caractere!"
                },

                fname:{
                    required: "Introduceti numele!",
                    noSpace: "Trebuie să scriți ceva!",
                    lettersonly: "Introduceți doar litere!"
                   
                }

            },

            submitHandler: function(form, event) {
                event.preventDefault();
                var fname =$("#fname").val();
                var email =$("#email").val();
                var comment =$("#comment").val();
                var response = document.getElementById("msg");    

                
                $.ajax({
                    url:'http://localhost/cinci_paini/contacte/submit_con.php',
                    type: 'POST',
                    cache: false,
                    data: { 'fname':fname, 'email':email, 'comment': comment},
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        if(!data){
                            response.style.color = "red";
                            response.innerHTML = "Error!";
                        }
                        else{
                            if(data.status == 1) {
                            response.style.color = "green";
                            response.innerHTML = data.mesage;
                            $("#formValidation").trigger("reset");
                        }else{
                            response.style.color = "red";
                            response.innerHTML = data.mesage;
                        }
                        }
                    }
         
                })
              }
            
        })
    }
})
