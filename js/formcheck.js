$('#mobile').keyup(function(){
  var mobile=$(this).val();
  if(mobile!='')
  { 
      if(isNaN(mobile)){
     $('#mobile_check').text('Invalid Mobile Number.');
     $('#getregister').attr("disabled",true);
      }
      else if(mobile.length<10)
      {
       $('#mobile_check').text('Mobile Number must be 10 digit long.');
       $('#getregister').attr("disabled",true);
      }
      else
      {
          $('#mobile_check').text('');
          $('#getregister').attr("disabled",false);

      }
  }
  else
  {
    $('#mobile_check').text('');
    $('#getregister').attr("disabled",false);

  }
});


$('#empno').keyup(function(){
  var empno=$(this).val();
  if(empno!='')
  {
      if(!isFinite(empno)){
     $('#empno_check').text('Invalid Employee Number.');
     $('#getregister').attr("disabled",true);
      }else if(empno.length<5)
      {
          $('#empno_check').text('Employee Number must be 5 digits in length.');
          $('#getregister').attr("disabled",true);
      }else
      {
         $('#empno_check').text('');
         $('#getregister').attr("disabled",false);
      }


  }
  else
  {
    $('#empno_check').text('');
    $('#getregister').attr("disabled",false);

  }
});



