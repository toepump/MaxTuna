$(document).ready(function(){
  $.ajax({
    url: 'connected.php',
    method: 'GET',
    // data: data,
    // dataType: dataType
    success: function(data, text, xhr){
      console.log(text);
      debugger;
    },
    error: function(xhr, text, error){
      console.log(text);
    }
  });
});
