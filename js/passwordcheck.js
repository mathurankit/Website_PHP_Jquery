$('#password').keyup(function(){
  var password=$(this).val();

   if(password!=''&&password.length<8){
$('#password_check').text('Password Should be minimum 8 Characters..');
$('#getregister').attr("disabled",true);
  }else{
      $('#password_check').text('');
      $('#getregister').attr("disabled",false);
       }

  });
  
  $('#password_again').keyup(function(){
     var p1=$('#password').val();
     var p2=$(this).val();
     
     if(p1!=p2){
      $('#passwordagain_check').text('Password do not match..Please reenter.');
      $('#getregister').attr("disabled",true);
     }else{
          $('#passwordagain_check').text('');
              $('#getregister').attr("disabled",false);
     }


    });
