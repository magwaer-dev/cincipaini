

jQuery(document).ready(function ($) {
    "use strict";

    // REGISTER 
    $('#register-form').submit(function () {
        var f = $(this).find('.form-group'),
            ferror = false,
            emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        f.children('input').each(function () { // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if (rule !== undefined) {
                var ierror = false; // error flag for current input
                var pos = rule.indexOf(':', 0);
                if (pos >= 0) {
                    var exp = rule.substr(pos + 1, rule.length);
                    rule = rule.substr(0, pos);
                } else {
                    rule = rule.substr(pos + 1, rule.length);
                }

                switch (rule) {
                    case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;

                    case 'email':
                        if (!emailExp.test(i.val())) {
                            ferror = ierror = true;
                        }
                        break;
                }
                i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        });

        if (ferror) return false;
        else var str = $(this).serialize();
        var action = $(this).attr('action');
        if (!action) {
            action = 'inc/handler.inc.php';
        }

        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var re_pass = $('#re_pass').val();
        $.ajax({
            type: "POST",
            url: action,
            data: {
                username: username,
                email: email,
                password: password,
                re_pass: re_pass,
                status: 'register'
            },
            success: function (data) {
                if (data == 'pwdMissMatch') {
                    $(".pwd-retype").text("Introduceti parola");
                    $('#re_pass').val('')
                } else if (data == 'sqlError') {
                    $(".errorLogs").addClass("error");
                    $(".errorLogs").text("Eroare SQL");
                    $('#register-form').find("input").val('')
                } else if (data == 'usernameTaken') {
                    $(".uName").text("Username-ul deja exista, incercati altul");
                    $('#username').val('')
                } else if (data == 'Error') {
                    $(".errorLogs").addClass("error");
                    $(".errorLogs").text("S-a intamplat o eroare in timpul inregistrarii");
                } else if (data == 'OK') {
                    $(".errorLogs").removeClass("error");
                    $(".errorLogs").addClass("success");
                    $('#register-form').find("input").val('')
                    $(".errorLogs").text("Inregistrat cu succes");
                    $('#register').text("Inregistrare ...")
                    setTimeout(function () {
                        $(location).attr('href', 'welcome.php')
                    }, 2500);
                }

            }
        });
        return false;
    });


    // LOGIN  
    $('#login-form').submit(function () {
        var f = $(this).find('.form-group'),
            ferror = false;

        f.children('input').each(function () { // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if (rule !== undefined) {
                var ierror = false; // error flag for current input
                var pos = rule.indexOf(':', 0);
                if (pos >= 0) {
                    var exp = rule.substr(pos + 1, rule.length);
                    rule = rule.substr(0, pos);
                } else {
                    rule = rule.substr(pos + 1, rule.length);
                }

                switch (rule) {
                    case 'required':
                        if (i.val() === '') {
                            ferror = ierror = true;
                        }
                        break;

                    case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;
                }
                i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        });

        if (ferror) return false;
        else var str = $(this).serialize();
        var action = $(this).attr('action');
        if (!action) {
            action = 'inc/handler.inc.php';
        }
        var username = $('#uName').val();
        var password = $('#uPassword').val();
        var remember = $('#remember').val();
        // console.log(username, password, remember);
        $.ajax({
            type: "POST",
            url: action,
            data: {
                username: username,
                password: password,
                remember: remember,
                status: 'login'
            },
            success: function (data) {
                if (data == 'wrongPwd') {
                    $(".loginErrorLogs").addClass("error");
                    $(".pwd").text("Parola gresita");
                    $('#password').val('')
                } else if (data == 'noUser') {
                    $(".loginErrorLogs").addClass("error");
                    $(".loginErrorLogs").text("Nici un utilizator gasit. Va rugam sa va inregistrati mai intai!");
                    $('#login-form').find("input").val('')
                } else if (data == 'OK') {
                    $(".loginErrorLogs").removeClass("error");
                    $(".loginErrorLogs").addClass("success");
                    $('#login-form').find("input").val('')
                    $(".loginErrorLogs").text("Logat cu succes!");
                    $('#login').text("Logare...")
                    setTimeout(function () {
                        $(location).attr('href', 'welcome.php')
                    }, 2500);
                }

            }
        });
        return false;
    });
});