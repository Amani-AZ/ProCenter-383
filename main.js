
// Toggle .header-scrolled class to #header when page is scrolled

//     $(document).ready(function(){
//       $(".bg").css("background" , "transparent");
//   $(window).scroll(function(){
//   	var scroll = $(window).scrollTop();
// 	  if (scroll > 100) {
//       $(".bg").css({"height": "77px", " background-color": "#FF3CAC","background-image":"linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #0278ff 100%)" }); 
// 	  } 

// 	  else{
//       $(".bg").css("background" , "transparent");
// 	  }
//   })
// })
    



function redirectCreateSch(){
    window.location  = "educator_schedule.php";
}

function redirectViewApp(){
  window.location  = "educator_appointment.php";
}
// find an educator
function redirectStuAppointment(){
  window.location  = "student_schedule.php";
  // header("location:student_schedule.php");
}


//index page
function redirectFindEdu(){
    window.location  = "find_an_educator.php";
}

 //function to redirect user to Be an Educator
function redirectBeEdu(){
    window.location ("be_educator.php");
}