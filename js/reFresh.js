$(document).ready(function(){
$(document).on('submit', 'form', function(){
  if(!$("#get_img").val()) {
      var images = $("get_img").val();
      var getData = 'images'+images;
          $.ajax({
              url : "functions.php",
              type : "POST",
              data : getData,
              success: function(data, status, xhr)
              {
                  $('.test').html(data);
                  $('form')[0].reset();
              },
              error: function(jqXHR, status, errorThrown){
                  $('.test').html("There was an error" + errorThrown + " with status " + textStatus);
              }
          });
    } else {
        die();
    }


});

});
