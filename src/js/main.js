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
            var scene = $('#scene').get(0);
            var parallaxInstance = new Parallax(scene);
            
        } catch (error) {
            console.log(error);
        }

        $('.accordion .head').click(function() {
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
    });
})(jQuery); // <----- jQuery no conflict wrapper