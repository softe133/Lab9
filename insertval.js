$(document).ready(function (e) {

    
$("#submit").click(function(e) {

e.preventDefault();


var name= $("#name").val();
var email = $("#email").val();
var phone= $("#phone").val();
var msg = $("#msg-box").val();

$.ajax({    

     url: "postform.php", 
     type: "POST",                    
     data: {name:name, email:email,phone:phone,msg:msg},                                 
     success: function(data)         
     {
        
        $('#name').val("");
        $('#email').val("");
        $('#phone').val("");
        $('#msg-box').val("");
     	alert("Inserted successfully");
        //location.reload();
      },  //end success

    error: function(error) {

     console.log(error);
     alert (error);
     alert( JSON.stringify(error) );
    
  }
    });
  }); 
});