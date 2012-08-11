$('#modify').click(function(){
  var mobile=$('#mobile').val();
         var email=$('#email').val();
          var address=$('#address').val();
          
            if(mobile==''||email==''||address=='')
          {
           alert('please fill in all fields');
          } 
          



        $.post('../page_logic/newdetails.php',{mobile:mobile,email:email,address:address},function(data){

     $('#feedback').text(data);
     });


  });
