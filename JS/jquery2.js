$(document).ready(function(){
  /** The header Name of the freelancer */
    $('.info').slideDown(3000);
 
   
  /** Search Freelancers code */
$('.find').keyup(function(){
    var searchFreelance=$(this).val();
    if(searchFreelance !=""){
        $.ajax({
            url:'search-freelancer.php',
            type:'GET',
            data:'f='+searchFreelance,
            success:function(show){
                $('.freelancer-card').show();
                $('.freelancer-card').html(show);
            }
        });
    }
    else{
        $('.freelancer-card').hide();
    }
  
});    


});