// utility
if(typeof Object.create !== 'function'){
  Object.create = function( obj ){
    function F(){};
    F.prototype = obj;
    return new F();
  };
}
(function($, window, document, undefined){
 var Slide = {
        init: function(options , elem){
          var self = Slide;
          self.elem = elem ;
          self.$elem = $( elem );
          self.options = $.extend({}, $.fn.sidebarSlider.options, options);
          self.event.click.call(self);

          },
        event: {
              click: function(){
                this.$elem.on('click', this.engine);
              }
        } , 

        engine: function(){
          var self = Slide;
          var options = self.options;
                if($(options.name).is(':hidden')){

                  if($(window).width() < options.mobileView)
                      {

                        $(options.name).slideDown() ;
                        $(options.sidebar).slideUp(300) ;


                      }else{
                          self.showing.call(self);
                      }

              }else{

                  if($(window).width() < options.mobileView) {

                      if($(options.sidebar).is(':hidden')){
                      $(options.name)
                        .slideUp(); 
                        $(options.sidebar)
                          .slideDown(300); 
                      }else{
                  $(options.name)
                        .slideDown(); 
                        $(options.sidebar)
                        .slideUp(300); 
                      }

                  }else{

                    self.hidding.call(self);
                  }
                    
              }

        },       

        hidding: function(){
          var self = this;
          var options = self.options;
              $(options.name).hide();

              $(options['sidebar'])
                .animate({
                  'left': '-=319'
                }, {
                  duration: 400,
                  complete: function(){
                  $(this).hide();
                   $(options['content'])
                      .addClass(options.className);

                  }

                });
        },


        showing: function(){
          var self = this;
          var options = self.options;
              
            $(options.name).show(); 
            $(options.sidebar).show();
              $(options['sidebar'])
                .animate({
                  'left': '0'
                }, {
                  duration: 400,
                  complete: function(){  
                   $(options['content'])
                      .removeClass(options.className);
                  }
                });
        }
 }
  $.fn.sidebarSlider = function( options ){ 
    return this.each(function(){
        var slide = Object.create ( Slide );
        slide.init( options, this );
    });
  };
$.fn.sidebarSlider.options = { // these are the default options 
        name : $('a#company_logo'),
        content : $('.main_content'),
        sidebar : $('div.sidebar'),
        className: 'expand',
        mobileView: 768
};
})(jQuery, window, document);
// improves to be made
// make the body slide with the slide bar
// fix the bug with the name
// expand the while the sidebar on transition