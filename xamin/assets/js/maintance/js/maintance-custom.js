/*
Template: Xamin - Data science WordPress landing Page
Author: iqonicthemes.in
Version: 1.0
Design and Developed by: iqonicthemes.in
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

1.Coming soon

------------------------------------------------
Index Of Script
----------------------------------------------*/
(function(jQuery) {

    "use strict";
    jQuery(document).ready(function() {

        jQuery(window).on('load', function(e) {

            /*----------------
            Coming soon
            ---------------------*/
            var $i;
            var $date = jQuery('.expire_date').attr('id');
            var $expire_dates;

            jQuery('.example').countdown({ 
                date: $date,
                offset: -8,
                day: 'Day',
                days: 'Days'
                
            }, function () {

            });

        });

    });
})(jQuery);