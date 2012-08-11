$('#getregister').click(function(){
 var username=$('#username').val();
  var empno=$('#empno').val();
  var mobile=$('#mobile').val();
   
   if(username==''||empno==''||mobile=='')
   {
     alert('please fill in all fields');
   }

     $.post('page_logic/forgot_file.php',{username:username,empno:empno,mobile:mobile},function(data){

     $('#feedback').text(data);
     
     });



  });