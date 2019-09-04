function CheckFirstName() {
    var FirsNameError=$('#firstname').val();
    if (FirsNameError.length <= 10 ||FirsNameError.length > 20 ){
        $('#firstNameErr').html('Please insert word in 10 to 20');
        return false;
    }else {
        $('#firstNameErr').html('');
    }
    
}



$('#firstname').keyup(function () {

    CheckFirstName();
});

function checkLastname() {
    var lastNameErr=$('#lastName').val();
    if (lastNameErr.length <= 10 ||lastNameErr.length > 20 ){
        $('#LaststNameErr').html('Please insert word in 10 to 20');
        return false;
    }else {
        $('#LaststNameErr').html('');
    }
}

$('#lastName').blur(function () {
    checkLastname();

});

function checkEmail() {
    var emailErr=$('#email').val();
    if (emailErr.length <=0){
        $('#emailErr').html('Email Should not be Empty');
        return false;
    }else {
        $('#emailErr').html('');
    }

}

$('#email').blur(function () {
    checkEmail();

});

         function checkGenderStatus() {
             var genderRadio=$('input[type="radio"]:checked');
             if (genderRadio.val()){
                 $('#geErr').html('');
             }else {

                 $('#geErr').html(' You Must Should Select your Gender');
                 return false;
             }
         }




function checkSkillsStatus() {
    var skilssChecked=$('input[type="checkbox"]:checked');
    if (skilssChecked.val()){
        $('#skErr').html('');
    }else {

        $('#skErr').html(' You Must Should Select your Skills');
        return false;
    }
}

function checkPassword() {
    var passwordErr=$('#password').val();
    if (passwordErr.length <= 6 ||passwordErr.length > 15 ){
        $('#passwordErr').html('Password should be 10 to 15 ');
        return false;
    }else {
        $('#passwordErr').html('');
    }
}

$('#password').keyup(function () {
   checkPassword();
});
function checkConfirmPassword() {
    var confirmPasswor=$('#confirm_password').val();
    var passWord=$('#password').val();
    if (confirmPasswor==passWord){
        $('#cPasswordErr').text('');
    }else{
        $('#cPasswordErr').html('Password and confirm password are not same');
        return false;
    }

}


    $('#confirm_password').keyup(function (){

        checkConfirmPassword();

    });

$('#ValidationForm').submit(function () {
    if (CheckFirstName()==false && checkLastname()==false&&checkEmail()==false&&checkGenderStatus()==false&&checkSkillsStatus()==false&&checkPassword()==false ||checkConfirmPassword()==false){
        return false
    }else {
        return true;
    }

})



