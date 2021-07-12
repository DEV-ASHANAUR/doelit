(function ($) {
    "use strict";


    $(document).ready(function () {

        // function iSpassed() {
        //     $('.passed').on('click', function() {
        //         if ($("#up-result-point1 ~ checked")) {
        //             $(".if-passed").removeClass('d-none');
        //         }
        //     });
        //     $('.not-passed').on('click', function() {
        //         if ($("#up-result-point2 ~ checked")) {
        //             $(".if-passed").addClass('d-none');
        //         }
        //     });
        // };
        // iSpassed();

        function alertMessage() {
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(100, function(){
                    $(this).remove(); 
                });
            }, 1500);
        };
        alertMessage();

    });


})(jQuery);