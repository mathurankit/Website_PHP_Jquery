$('#getregister').click(function()
{

  var username=$('#username').val();
    var password=$('#password').val();
     var password_again=$('#password_again').val();
     var firstname=$('#firstname').val();
      var lastname=$('#lastname').val();
       var empno=$('#empno').val();
        var mobile=$('#mobile').val();
         var email=$('#email').val();
          var address=$('#address').val();
          var secure=$('#secure').val();
    
    
   
      if(username==''||password==''||password_again==''||firstname==''||lastname==''||empno==''||mobile==''||email==''||address==''||secure=='')
          {
           alert('please fill in all fields');
          } 
          



        $.post('page_logic/register_file.php',{username:username,password:password,password_again:password_again,firstname:firstname,lastname:lastname,empno:empno,mobile:mobile,email:email,address:address,secure:secure},function(data){

     $('#feedback').text(data);
     });



  });