$('#username').keyup(function(){
  var username=$(this).val();
$('#username_check').text('Searching......');
  if(username!=''){
   $.post('php/username_check.php',{username:username},function(data){
        $('#username_check').text(data);



     });

  }else
  {
   $('#username_check').text('');
  }

  });