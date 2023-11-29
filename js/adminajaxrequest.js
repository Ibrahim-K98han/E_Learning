$(document).ready(function() {
    // Add a scroll event listener
    $(window).scroll(function() {
      // Check if the scroll position is greater than or equal to 200 pixels
      if ($(this).scrollTop() >= 200) {
        // If true, add the class to the element you want
        $('.scrollHeaderAdd').addClass('scrollingClass');
      } else {
        // If false, remove the class
        $('.scrollHeaderAdd').removeClass('scrollingClass');
      }
    });
  });


//Ajax call for Admin login verification
function checkAdminLogin(){
  console.log("Button Click");
  var adminLogEmail = $("#adminLogemail").val();
  var adminLogPass = $("#adminLogpass").val();
  $.ajax({
   url:"Admin/admin.php",
   method:"POST",
   data:{
       checkLogemail:"checklogmail",
       adminLogEmail:adminLogEmail,
       adminLogPass:adminLogPass,
   },
   success:function(data){
       if(data == 0){
           $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password !</small>')
       }else if(data == 1){
           $("#statusAdminLogMsg").html(
              '<small class="alert alert-success">Success Loading...</small>'
           );
           setTimeout(()=>{
               window.location.href = "Admin/adminDashboard.php";
           },1000);
       }
   }
  });
}