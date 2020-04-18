/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';

var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');

Flickity.setJQuery( $ );
jQueryBridget( 'flickity', Flickity, $ );

$(document).ready(() => {
  // console.log('Hello world');

  $('input[type=checkbox]').addClass('form-checkbox');

  $(document).bind('gform_post_render', function() {
    $('input[type=checkbox]').addClass('form-checkbox');
  })

  $('.hero_carousel').flickity({
    // options
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
  });

  $('#gform_2 .gform_footer').appendTo('#gform_2 .gform_fields');

  $('#gform_3 .gform_footer').appendTo('#gform_3 .gform_fields');

  $('.flickity-page-dots').appendTo('.flickity-viewport');

  $(".ajax-load").click(function(e){
    e.preventDefault();
    var page =$(this).data("page");
    var count = $(this).data("posts");
 
    $.ajax({
        type:"POST",
        url: ajax_url.ajax_url,
        data: {
            action:'load_more', 
            page: page,
            count: count
        },
        beforeSend: function() {
          $('.loading-anim').show();
          $('.ajax-load').hide();
        },  
        success:function(data){
          var result = JSON.parse(data)
          //console.log(result.view)
          $('.rp-container').append(result.view);
          if(result.button) {
            // $('.ajax-load').show();
            $('.ajax-load').data('page', result.button);
          }
          else {
            $('.ajax-load').hide();
          }
        },
        complete:function() {
          $('.loading-anim').hide();
        },  
        error: function (req, e) {
          console.log(JSON.stringify(req));
        } 
    });
  });
});
