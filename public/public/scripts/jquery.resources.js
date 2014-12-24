$(document).ready(function() {

  $navbuttons = $('#ResourceNav a');

  $navbuttons.click(function(){
    // Make me active
    if ($(this).hasClass('is-active')) {
      // Don't do anything
    } else {
      // Make the new button active
      $('#ResourceNav .is-active').removeClass('is-active');
      $(this).addClass('is-active').parent('li').addClass('is-active');
      // Get the type
      var $mytype = $(this).attr('data-resource-type');
      // Fire the function to display the resources with the type
      displayResources($mytype);
    }
    return false;
  });

  function displayResources(whichtype) {
    // Loop through the resources and if they match the type or if "all" is the type,
    // show them. If not, hide them
    $('.resource').each(function(){
      var $mytype = $(this).attr('data-resource-type');
      if ($mytype == whichtype || whichtype == 'all') {
        $(this).fadeIn(250); // $(this).removeClass('is-hidden');
      } else {
        $(this).fadeOut(250); // $(this).addClass('is-hidden');
      }
    });
  }

}); // End document ready