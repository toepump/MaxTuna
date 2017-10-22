$(document).ready(function(){
  $.ajax({
    url: 'connected.php',
    method: 'GET',
    // data: data,
    // dataType: dataType
    success: function(data, text, xhr){
      $($('.connected').get(0)).html('<span class="text-success">Connected!</span>');
    },
    error: function(xhr, text, error){
      console.log(text);
      $($('.connected').get(0)).html('<span class="text-error">Not Connected</span>');
    }
  });
});
