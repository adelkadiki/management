


  $(document).ready(function(){

   

      $(window).scroll(function(){

          if($(this).scrollTop()> 200 && $(this).width() > 1100){
          // $('.col-md').fadeIn(3000);

          $('#left').animate({
            right:"100px"
          }, 3000);

          $('#right').animate({
            left:"100px"
          }, 3000);

         

        }

        if($(this).scrollTop()> 1000 && $(this).width() > 1100){

          $('.img-fluid').fadeIn(3000);
          $('#img-text').fadeIn(3000);
        }
      });


      $('#name').on("focus", function(){
        
       
        $('#name-label').fadeIn(100);
      
      });

      $('#name').on("blur", function(){

        var text = $("#name").val();
        if(text==""){
            $('#name-label').hide();
        
        }
               
      });
        
      $('#email').on("focus", function(){

           
            $('#email-label').fadeIn(100);
      });

      $('#email').on("blur", function(){

        var text = $("#email").val();
        if(text==""){
            $('#email-label').hide();
        
        }
               
      });

// submit function

$('#frm').submit(function(e){
  e.preventDefault();

       
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if($('#name').val()==""){

      $('#email-feild').text('');
      $('#valid-feild').text('');
      $('#message-feild').text(''); 
      $('#name-feild').text('Please enter your name is the Name feild');
       
  }else if($('#email').val()==""){
    $('#name-feild').text('');
    $('#valid-feild').text('');
    $('#message-feild').text(''); 
    $('#email-feild').text('Please enter your email is the email feild');

  } else if(!regex.test($('#email').val())){
    $('#name-feild').text('');
    $('#email-feild').text('');
    $('#message-feild').text(''); 
    $('#valid-feild').text('Please enter valid email address in the Email feild');
  }
  
  
  else if($('#txtarea').val()==""){
    $('#name-feild').text('');
    $('#valid-feild').text('');
    $('#email-feild').text(''); 
    $('#message-feild').text('Please type your message in the Message field');
  }
  
  
 else {

  $.ajax({   
type: "POST",
data : $(this).serialize(),
cache: false,  
url: "contact.php",   
success: function(data){
 
  $('#name-feild').text('');
  $('#valid-feild').text('');
  $('#email-feild').text(''); 
  $('#message-feild').text('');
  $('#name').val("");
  $('#email').val("");
  $('#txtarea').val("");
  $('#sub-line').text("Thank you for contacting us, we will get back to you soon");
}   
});   
  }
return false;  
});



// submit function



$('#dom-sub').click(function(){

  var domain = $('#domain-inp').val();
  var len = domain.length;
  
  if(domain.indexOf(".") == -1){
     
    $('#res').text("Please add extention to your domain like .com, .tech");
      return;

  }else if(domain.indexOf(".")+1 == len){
    $('#res').text("Please add extention next to the dot");
    return;
  }

    var status="";

  fetch('https://domain-availability.whoisxmlapi.com/api/v1?apiKey=at_IqWbElTvfoWrsOSuUjr3TmA2uGAGR&domainName='+domain)
  .then(response => response.json())
  .then(
      
        function(json){
          
          //console.log(json.DomainInfo.domainAvailability);
          var  stat = json.DomainInfo.domainAvailability;
          
            status +=stat;
            console.log(status);

          if(json.DomainInfo.domainAvailability=="UNAVAILABLE"){
            $('#found').text('');
            $('#res').text("Unavailable domain, please try another domain with different spelling");
            $('#sub-dom-btn').prop('disabled', true);
          
          }else{
                $('#res').text('');
                var getDomain = $('#domain-inp').val();
                $('#found').text("Congratulation "+getDomain+" is available");
                 
                $('#sub-dom-btn').prop('disabled', false);
          }

        }
      );
   

});


$("#domain-inp").on("keyup paste", function() {
  $("#domain-sub").val($(this).val());
});

    $('#sub-dom-btn').click(function(){

      $('#domainForm').submit();

    });

    
    $('.navbar-nav>li>a').on('click', function(){
      $('.navbar-collapse').collapse('hide');
  });

// client form

$('#client-form').submit(function(e){
  e.preventDefault();

        

      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if($('#clientname').val()==""){
       
    $('#client-email').text('');
    $('#valid-email').text('');
    $('#client-name').text('Please enter your name in Name field');
       
       
  }else if($('#clientemail').val()==""){
    $('#client-name').text('');
    $('#valid-email').text('');
    $('#client-email').text('Please enter your email in Email field');

  } else if(!regex.test($('#clientemail').val())){
    $('#client-name').text('');
    $('#client-email').text('');
    $('#valid-email').text('Please enter a valid email address');
  }
  
  
 else {

  $.ajax({   
type: "POST",
data : $(this).serialize(),
cache: false,  
url: "submit.php",   
success: function(data){
 
  $('#client-domain').hide();
  $('#client-name').hide();
  $('#client-email').hide();
  $('#valid-email').hide();
  $('#client-form').hide();
  $('#submit-line').addClass('submit-line-style');
  
  $('#submit-line').text("Thank you for submitting your requiest, we will contact you soon");
  
},
error: function(data){
  console.log("erororoorro");
  console.log(data);
}   
});   



}
//return false;  
});

// client form



    });

   

//     function validate() {
      
      
//       var name = $('#name').val();
//       var email = $('#email').val();
//       var textarea = $('#txtarea').val();
//       var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 
      
//       if(name == ""){
        
//         // $('<h5>Name whwere</h5>').appendTo('#warn');
//         $('#warn').append('<li>Please type your name in Name field</li>');
//        return false;
      
//       }else if(email==""){
//         $('#warn').append('<li>Please type your email in Email field</li>');
//         return false;
      
//       }else if(!regex.test(email)){
//         $('#warn').append('<li>Please enter valid email in Email field</li>');
//         return false;

//       }else if(textarea==""){
//         $('#warn').append('<li>Please type your message </li>');
//         return false;
//     }else {

//       $.ajax({
//         url : this.action,
//         type : this.method,
//         data : $(this).serialize(),
//         success : function(response) {
//            alert("line");
//         }
//       });

//     }   
// }
 





          