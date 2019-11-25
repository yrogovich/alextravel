(function($){    
    /**
     * When DOM is ready
     */
    $(document).ready(function(){
        try {
            var flag = $('#flag-parallax').get(0);
            var parallaxflag = new Parallax(flag);
        } catch (error) {
            console.log(error);
        }
    });
})(jQuery); // <----- jQuery no conflict wrapper