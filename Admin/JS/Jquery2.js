$(document).ready(function(){ 

 

/* Creat user Form Error */
 $('#btnCreate').click(function(){
  var email=$('#email').val();
  var pass=$('#password').val();
  if((email == "") && (pass =="")){
    $('#emailError').fadeIn(3000).html("A valid email is required").delay(1000).fadeOut(3000);
    $('#passError').fadeIn(3000).html("A valid password is required").delay(1000).fadeOut(3000);
   
}

else if((email == "") && (pass !="")){
  $('#emailError').fadeIn(3000).html("A valid email is required").delay(1000).fadeOut(3000);
}
else if ((email != "") && (pass =="")){
  $('#passError').fadeIn(3000).html("A valid password is required").delay(1000).fadeOut(3000);
}
var confPass=$("#confirm").val();
if(pass != confPass){
  $('#pass_msg').fadeIn(3000).html("Password and Confirm Password doesn't match !").delay(1000).fadeOut(3000);
}

});
/* End of create user Error */

/* Search Dashboard  with ajax */
$('#find').keyup(function(){
  var key=$(this).val();
  if(key !=""){
    
    $.ajax({

      url:"search.php",
      type:'GET',
      data: 'k='+key,
      success:function(show){
        $('.result').show();
        $('.result').html(show);
      }
    });
  }
  else{
    $('.result').hide();
  }
  

});


$('#search-icon').click(function(){
  $('#find').animate({
    top:'35px'
    
  },1000,function(){
    $('#search-icon').click(function(){
      $('#find').slideUp();
    });
  });
});


/* End search dashboard  */


/* Notification of user created  */
$('#btnCreate').click(function(){
  var email=$('#email').val();
  var pass=$('#password').val();
  confPass=$("#confirm").val();
  if((email != "") && (pass !="")){
    if(pass == confPass){
      $('.notify').animate({
        right:'10px'
      },2000,function(){
        $(this).delay(2000).animate({right:'-100%'},2000);
      });
   
    }

  }
 
});
/* End of notification of user created */
$('#freeval').change(function(){
var id=$(this).val();
$.ajax({
   url:'show-freelancer.php',
   type:'GET',
   data:'Id='+id,
   success:function(s){
     $('.free-table').show();
     $('.free-table').html(s);
   }

});


});





});