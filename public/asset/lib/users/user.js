$(document).ready(function() {
    $('#form').on('submit', function(e) {
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirm = $('#password_confirm').val();

        // Verification Firstname
        if(firstname === "" || !/^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(firstname)){
            $('#firstname').addClass('is-invalid');
            $('#error_firstname').text("Veuillez entrer un prénom valide");
            e.preventDefault();
        } else {
            $('#firstname').removeClass('is-invalid');
            $('#firstname').addClass('is-valid');
            $('#error_firstname').text("");
        }

        // Verification Lastname
        if(lastname === "" || !/^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lastname)){
            $('#lastname').addClass('is-invalid');
            $('#error_lastname').text("Veuillez entrer un nom valide");
            e.preventDefault();
        } else {
            $('#lastname').removeClass('is-invalid');
            $('#lastname').addClass('is-valid');
            $('#error_lastname').text("");
        }

        // Verification Email
        if(email === "" || !validateEmail(email)){
            $('#email').addClass('is-invalid');
            $('#error_email').text("Veuillez entrer un email valide");
            e.preventDefault();
        } else {
            $('#email').removeClass('is-invalid');
            $('#email').addClass('is-valid');
            $('#error_email').text("");
        }

        // Verification Password
        if(password === ""){
            $('#password').addClass('is-invalid');
            $('#error_password').text("Veuillez entrer un mot de passe");
            e.preventDefault();
        } else {
            $('#password').removeClass('is-invalid');
            $('#password').addClass('is-valid');
            $('#error_password').text("");
        }

        // Verification Password Confirm
        if(password_confirm === "" || password !== password_confirm){
            $('#password_confirm').addClass('is-invalid');
            $('#error_password_confirm').text("Les mots de passe ne correspondent pas");
            e.preventDefault();
        } else {
            $('#password_confirm').removeClass('is-invalid');
            $('#password_confirm').addClass('is-valid');
            $('#error_password_confirm').text("");
        }

        if(password === "" || password.length < 8 || !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password)){
            $('#password').addClass('is-invalid');
            $('#error_password').text("Le mot de passe doit contenir au moins 8 caractères, dont une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial");
            e.preventDefault();
        } else {
            $('#password').removeClass('is-invalid');
            $('#password').addClass('is-valid');
            $('#error_password').text("");
        }

    });

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});

function exist_email(email){
    var url= $('#email').attr('url-existemail');
    var token = $('#email').attr('token');
    var res ="";

    $.ajax({
        type : 'POST',
        url : url,
        data: {
            'token':token,
            email : email
        },
        success:function(result){
            res = result.response;
        },
        async:false
    });
    return res;

}


