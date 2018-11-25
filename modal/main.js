$(document).ready(function(){

  var modalviev = setTimeout(function(){
    $('.modal').show();
  }, 10000);

  $('#form').on('submit', function(){
    $.ajax({
      url:'handler.php',
      type: 'POST',
      date:$(this).serialize()
    }).done();
    clearTimeout(modalviev);
    $('.modal').hide();
    return false;
  });

});
