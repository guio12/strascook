
$(document).ready(function() {
      $('#filters').on('click', '.tous', function() {
    $('.menus').show('slow')
  });
    
  $('#filters').on('click', '.classiques', function() {
    $('.menus').filter('.vegetariens, .vegans', 'h1', 'p').hide(1000)
       $('.menus').filter('.classiques').show(1000)
  });

  $('#filters').on('click', '.vegetariens', function() {
    $('.menus').filter('.classiques, .vegans').hide(1000)
      $('.menus').filter('.vegetariens').show(1000)
  });
    $('#filters').on('click', '.vegans', function() {
    $('.menus').filter('.vegetariens, .classiques').hide(1000)
        $('.menus').filter('.vegans').show(1000)
  });
});
