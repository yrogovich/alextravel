(function($){    
    /**
     * When DOM is ready
     */
    $(document).ready(function(){
        // Tabs script
        if($(location).attr('hash')) {
            var activeTab = $(location).attr('hash');
        }
        else {
            var activeTab = $('#us-way .navigation li:first-child a').attr("href");
        }   
        activateTab();       
        $("#us-way .navigation li").click(function(e) {
            deactivateTabs();
            activeTab = $(this).children().attr("href");
            activateTab();
            return false;
        }); 
        $("#us-way .navigation .left").click(function(e) {         
            activeTab = $('.navigation li.active').prev().children().attr("href");
            deactivateAll();
            activateTab();          
        }); 
        $("#us-way .navigation .right").click(function(e) {         
            activeTab = $('.navigation li.active').next().children().attr("href");
            deactivateAll();
            activateTab();
        }); 
        function deactivateAll() {
            if(activeTab) {
                $('#us-way .navigation li.active').removeClass('active');
                $('#us-way .card.active').removeClass('active');
            }   
        }
        function activateTab() {
            $(activeTab).addClass('active');
            $('#us-way .navigation li a[href="'+activeTab+'"]').parent().addClass('active');
        }
        function deactivateTabs() {
            $(activeTab).removeClass('active');
            $('#us-way .navigation li a[href="'+activeTab+'"]').parent().removeClass('active');
        }

        // Get ticket tour
        $('.get-ticket-tour .btn-select').click(function() {
            if($(this).hasClass('select-1')) {
                $('.get-ticket-tour .btn-select').removeClass('active');
                $('.get-ticket-tour .select-1').addClass('active');
                $('.get-ticket-tour .price').text('790 €');
            }
            else {
                $('.get-ticket-tour .btn-select').removeClass('active');
                $('.get-ticket-tour .select-2').addClass('active');
                $('.get-ticket-tour .price').text('890 €');
            }
        });

        try {
            var flag = $('#flag-parallax').get(0);
            var parallaxflag = new Parallax(flag);
            var passport = $('.passport-parralax').get(0);
            var parallaxPassport = new Parallax(passport);
            var puffin = $('.puffin-wrapper').get(0);
            var parallaxPuffin = new Parallax(puffin);
            var valley = $('.valley').get(0);
            var parallaxValley = new Parallax(valley);
        } catch (error) {
            console.log(error);
        }
        try {
            var images = document.querySelectorAll('.mountain');
            new simpleParallax(images, {
                delay: 0,
                orientation: 'down',
                scale: 1.2,
                overflow: true,
                delay: .8,
                transition: 'cubic-bezier(0,0,0,1)',
            });

            var images2 = document.querySelectorAll('.main-image img');
            new simpleParallax(images2, {
                delay: 0,
                orientation: 'up',
                scale: 1.2,
                overflow: true,
                delay: .8,
                transition: 'cubic-bezier(0.22, 0.61, 0.36, 1)',
            });

            var images3 = document.querySelectorAll('.reason .icon');
            new simpleParallax(images3, {
                delay: 0,
                orientation: 'up',
                scale: 1.8,
                overflow: true,
                delay: 1,
                transition: 'cubic-bezier(0.22, 0.61, 0.36, 1)',
            });
        } catch (error) {
            console.log(error);
        }
        try {
            $('#slider').slick({
                centerMode: true,
                infinite: true,
                centerPadding: '20px',
                slidesToShow:3,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 4000,
                lazyLoad: 'ondemand',
                speed: 1000,
                responsive: [{
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '20px',
                        slidesToShow: 1
                    }
                }]
              });
        } catch (error) {
            console.log(error);
        }
    });
})(jQuery); // <----- jQuery no conflict wrapper