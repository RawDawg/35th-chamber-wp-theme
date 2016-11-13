(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });
})(jQuery);

$('#user_login').attr( 'placeholder', 'Username' );
$('#user_pass').attr( 'placeholder', 'Password' );
