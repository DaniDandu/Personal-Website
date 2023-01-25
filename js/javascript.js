$(document).ready(function(){
  $('.lightbox-gallery').magnificPopup({
    type: 'image',
    delegate: 'a',
    gallery: {
      enabled: true
    },

    zoom: {
      enabled: true, 

      duration: 200, // duration of the effect, in milliseconds
      easing: 'ease-in-out', // CSS transition easing function

      opener: function(openerElement) {

        return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}
  })
})
