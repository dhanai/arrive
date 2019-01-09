// external js: isotope.pkgd.js

// init Isotope
var $grid = jQuery('.grid').isotope({
  itemSelector: '.element-item',
  transitionDuration: '0.8s',
  // only opacity for reveal/hide transition
  
});

// store filter for each group
var filters = {};

jQuery('#filters').on( 'click', '.flt-button', function( event ) {
  var $button = jQuery( event.currentTarget );
  // get group key
  var $buttonGroup = $button.parents('.button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  // set filter for group
  filters[ filterGroup ] = $button.attr('data-filter');
  // combine filters
  var filterValue = concatValues( filters );
  // set filter for Isotope
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
jQuery('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = jQuery( buttonGroup );
  $buttonGroup.on( 'click', 'a', function( event ) {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    var $button = jQuery( event.currentTarget );
    $button.addClass('is-checked');
  });
});
  
// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}