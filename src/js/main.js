(function($){    
    /**
     * When DOM is ready
     */
    $(document).ready(function(){
        try {
            // Step 1: Create jQuery plugin
            // ============================

            $.fn.fancyMorph = function( opts ) {

                var Morphing = function( $btn, opts ) {
                var self = this;
            
                self.opts = $.extend({
                    animationEffect : false,
                    infobar    : false,
                    buttons    : ['close'],
                    smallBtn   : false,
                    touch      : false,
                    baseClass  : 'fancybox-morphing',
                    afterClose : function() {
                    self.close();
                    }
                }, opts);
            
                self.init( $btn );
                };
            
                Morphing.prototype.init = function( $btn ) {
                var self = this;
            
                self.$btn = $btn.addClass('morphing-btn');
            
                self.$clone = $('<div class="morphing-btn-clone" />')
                    .hide()
                    .insertAfter( $btn );
            
                // Add wrapping element and set initial width used for positioning
                $btn.wrap( '<span class="morphing-btn-wrap"></span>' ).on('click', function(e) {
                    e.preventDefault();
            
                    self.start();
                });
            
                };
            
                Morphing.prototype.start = function() {
                var self = this;
            
                if ( self.$btn.hasClass('morphing-btn_circle') ) {
                    return;
                }
            
                // Set initial width, because it is not possible to start CSS transition from "auto"
                self.$btn.width( self.$btn.width() ).parent().width( self.$btn.outerWidth() );
            
                self.$btn.off('.fm').on("transitionend.fm webkitTransitionEnd.fm oTransitionEnd.fm MSTransitionEnd.fm", function(e) {
            
                    if ( e.originalEvent.propertyName === 'width' ) {
                    self.$btn.off('.fm');
            
                    self.animateBg();
                    }
            
                }).addClass('morphing-btn_circle');
            
                };
            
                Morphing.prototype.animateBg = function() {
                var self = this;
            
                self.scaleBg();
            
                self.$clone.show();
            
                // Trigger repaint
                self.$clone[0].offsetHeight;
            
                self.$clone.off('.fm').on("transitionend.fm webkitTransitionEnd.fm oTransitionEnd.fm MSTransitionEnd.fm", function(e) {
                    self.$clone.off('.fm');
            
                    self.complete();
            
                }).addClass('morphing-btn-clone_visible');
                };
            
                Morphing.prototype.scaleBg = function() {
                var self = this;
            
                var $clone = self.$clone;
                var scale  = self.getScale();
                var $btn   = self.$btn;
                var pos    = $btn.offset();
            
                $clone.css({
                    top       : pos.top  + $btn.outerHeight() * 0.5 - ( $btn.outerHeight() * scale * 0.5 ) - $(window).scrollTop(),
                    left      : pos.left + $btn.outerWidth()  * 0.5 - ( $btn.outerWidth()  * scale * 0.5 ) - $(window).scrollLeft(),
                    width     : $btn.outerWidth()  * scale,
                    height    : $btn.outerHeight() * scale,
                    transform : 'scale(' + ( 1 / scale ) + ')'
                });
                };
            
                Morphing.prototype.getScale = function() {
                var $btn    = this.$btn,
                    radius  = $btn.outerWidth() * 0.5,
                    left    = $btn.offset().left + radius - $(window).scrollLeft(),
                    top     = $btn.offset().top  + radius - $(window).scrollTop(),
                    windowW = $(window).width(),
                    windowH = $(window).height();
            
                var maxDistHor  = ( left > windowW / 2 ) ? left : ( windowW - left ),
                    maxDistVert = ( top > windowH / 2 )  ? top  : ( windowH - top );
            
                return Math.ceil(Math.sqrt( Math.pow( maxDistHor, 2 ) + Math.pow( maxDistVert, 2 ) ) / radius );
                };
            
                Morphing.prototype.complete = function() {
                var self = this;
                var $btn = self.$btn;
            
                $.fancybox.open({ src : $btn.data('src') || $btn.attr('href') }, self.opts);
            
                $(window).on('resize.fm', function() {
                    //self.scaleBg();
                });
                };
            
                Morphing.prototype.close = function() {
                var self   = this;
                var $clone = self.$clone;
            
                self.scaleBg();
            
                $clone.one('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(e) {
                    $clone.hide();
            
                    self.$btn.removeClass('morphing-btn_circle');
                });
            
                $clone.removeClass('morphing-btn-clone_visible');
            
                $(window).off('resize.fm');
                };
            
                // Init
                this.each(function() {
                var $this = $(this);
            
                if ( !$this.data("morphing") ) {
                    $this.data( "morphing", new Morphing( $this, opts ) );
                }
            
                });
            
                return this;
            };
            
            
            // Step 2: Start using it!
            // =======================
            
            $("[data-morphing]").fancyMorph({
                hash : 'morphing'
            });
            
        } catch (error) {
            console.log(error);
        }

        SmoothScroll({ 
            animationTime: 900,
            stepSize: 85,
        });

        try {
            var scene1 = $('#scene').get(0);
            var parallaxInstance1 = new Parallax(scene1);

            var scene2 = $('.big-parallax').get(0);
            var parallaxInstance2 = new Parallax(scene2);

            var scene3 = $('.bull-parallax').get(0);
            var parallaxInstance3 = new Parallax(scene3);

            var scene4 = $('.camera-parallax').get(0);
            var parallaxInstance4 = new Parallax(scene4);

            var scene5 = $('.circle-parallax').get(0);
            var parallaxInstance4 = new Parallax(scene5);

        } catch (error) {
            console.log(error);
        }

        $('.accordion .head').click(function() {
            $('.accordion').removeClass('active');
            $(this).parent('.accordion').toggleClass('active');;
        });
        

        // Lazyloading
        $('.lazy').Lazy({
            effect: 'fadeIn',
            effectTime: 1000,
            // threshold: 0,
            onError: function(element) {
                console.log('error loading ' + element.data('src'));
            }
        });

        //AOS
        AOS.init({
            duration: 1000, 
        });

        
        var interval = 0;
        $(window).on('mousemove', function(event) {
            try {
                if(interval == 0) {
                    interval = 1;
                    var c = $("#compass");
                    /*  . Mouse
                    *  |\
                    *  | \
                    * y|  \
                    *  |   \
                    *  |____\. center of compass
                    *     x
                    */
                    var x = c.offset().left + c.innerWidth() / 2 - event.pageX;
                    var y = c.offset().top + c.innerHeight() / 2 - event.pageY;
                    
                    // Use the atan function to get the angle back 
                    var angle = Math.atan(y / x) * 180 / Math.PI;
                    
                    // Correct for radians by adding one radian when we are further to the right
                    // Also, correct for the angle's wrong quadrant
                    angle = event.pageX > c.offset().left + c.innerWidth() / 2 ? angle + 90 : angle - 90;   
                    var arrow = $('.niddle').css({transform: 'rotate(' + (angle) + 'deg)'});   
                    setTimeout(clearInterval, 100);
                }
            } catch (error) {
                console.log(error);
            }
        });
        function clearInterval() {
            interval = 0;
        }
       

        try {
            var images = document.querySelectorAll('.mountains-bg');
            new simpleParallax(images, {
                delay: 0,
                orientation: 'down',
                scale: 1.2,
                overflow: true,
                delay: .8,
                transition: 'cubic-bezier(0,0,0,1)',
            });
            var images = document.querySelectorAll('.mountains');
            new simpleParallax(images, {
                delay: 0,
                orientation: 'down',
                scale: 1.2,
                overflow: true,
                delay: .8,
                transition: 'cubic-bezier(0,0,0,1)',
            });
            var images = document.querySelectorAll('.mountains-mobile');
            new simpleParallax(images, {
                delay: 0,
                orientation: 'down',
                scale: 1.4,
                overflow: true,
                delay: .8,
                transition: 'cubic-bezier(0,0,0,1)',
            });
        } catch (error) {
            console.log(error);
        }

        try {
            $('.super-slider').on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                var i = (currentSlide ? currentSlide : 0) + 1;
                $('.slides-count .current').text(i);
                $('.slides-count .size').text(slick.slideCount);

                //Add preview of video for next slide
                var url =  'url('+$('.slick-current').next().find('.youtube img').prop('src')+')';
                $('.slick-current .next-video').css('background-image', url);
            });
            $('.super-slider').slick({
                fade: true,
                arrows: false,
                dots: true
            });
            $('.controls .left').click(function() {
                $('.super-slider').slick('slickPrev');
            });
            $('.controls .right').click(function() {
               $('.super-slider').slick('slickNext');
            });        
        } catch (error) {
            console.log(error);
        }


      
    });
})(jQuery); // <----- jQuery no conflict wrapper

// Youtube
(function() {
	var youtube = document.querySelectorAll( ".youtube" );	
	for (var i = 0; i < youtube.length; i++) {		
		var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";		
		var image = new Image();
        image.src = source;
        image.addEventListener( "load", function() {
            youtube[ i ].appendChild( image );
        }( i ) );		
        youtube[i].addEventListener( "click", function() {
            var iframe = document.createElement( "iframe" );
                    iframe.setAttribute( "frameborder", "0" );
                    iframe.setAttribute( "allowfullscreen", "" );
                    iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );
                    this.innerHTML = "";
                    this.appendChild( iframe );
        } );	
	};	
})();