$('#doctorname').keyup(function(){
  var doctorname=$(this).val();
  if(doctorname!='')
  {
      if(doctorname.search(/[^A-Za-z\s]/) != -1){
     $('#doctor_check').text('Please Enter a valid name.');
     $('#claimsubmit').attr("disabled",true);
      }
      else
      {
         $('#doctor_check').text('');
         $('#claimsubmit').attr("disabled",false);
      }


  }
  else
  {
    $('#doctor_check').text('');
    $('#claimsubmit').attr("disabled",false);

  }
});


$('#claimamount').keyup(function(){
  var claimamount=$(this).val();
  if(claimamount!='')
  {
      if(!isFinite(claimamount)){
     $('#amount_check').text('Please Enter a valid Amount.');
     $('#claimsubmit').attr("disabled",true);
      }
      else
      {
         $('#amount_check').text('');
            $('#claimsubmit').attr("disabled",false);
      }


  }
  else
  {
    $('#amount_check').text('');
       $('#claimsubmit').attr("disabled",false);

  }
});
