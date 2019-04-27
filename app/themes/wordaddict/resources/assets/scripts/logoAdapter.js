function logoAdapter() {
  var pos = $(window).scrollTop();
  var logo = $('.wa-logo-path');

  if (pos >= window.innerHeight) {
      logo.addClass('wa-logo-dark');
  }

  else {
      logo.removeClass('wa-logo-dark');
  }
}

export default logoAdapter;
