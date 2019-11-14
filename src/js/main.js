(function($){    
    /**
     * When DOM is ready
     */
    $(document).ready(function(){
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
                console.log(url);
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