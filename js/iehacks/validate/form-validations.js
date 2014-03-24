$(document).ready(function(){
  $('#contactForm').validate({
    rules : {
      "fullname" : {
        required : true,
        lettersonly : true
      },
      "email" : {
        required : true,
        email : true
      },
      "message" : {
        required : true
      }
    },
    messages: {
       fullname: "Please enter your fullname.",
       email: "Please enter a valid email.",
       message: "Please enter a comment or question."
    }, 
    errorContainer: "#errorContainer",
    errorLabelContainer: "#errors",
    wrapper: "li"
  });

});