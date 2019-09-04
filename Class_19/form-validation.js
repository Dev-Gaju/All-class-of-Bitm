
$('#first_name').blur(function(){
       var firstNameValue=$('#first_name').val();
       if(firstNameValue.length<=10 || firstNameValue.length >20){

       	$('#first_name_error').html('First Name must be between 10 to 20 words');

       }else{
       		$('#first_name_error').html('');
       }

})


$('#last_name').blur(function(){
       var lastNameValue=$('#last_name').val();
       if(lastNameValue.length<=10 || lastNameValue.length >20){

       	$('#last_name_error').html('Last Name must be between 10 to 20 words');

       }else{
       		$('#last_name_error').html('');
       }

})
















// $('#form').submit(function(){
// 	return true;
// })