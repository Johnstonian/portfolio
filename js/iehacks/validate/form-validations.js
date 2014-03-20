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
       fullname: "(Fullname name is required.)",
       email: "(Please enter a valid email.)",
       message: "(Please enter a comment or question.)"
    }
  });

});