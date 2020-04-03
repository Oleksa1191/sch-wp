(function ($) {
    "use strict";

    $(document).ready(function () {
        /*$('#responsive-menu-button').sidr({
           name: 'sidr-main',
           source: '#navigation'
         });*/

        $('.housetype-wrap-inner .nav .nav-link:nth-child(1)').addClass('active');
        $('.housetype-wrap-inner .tab-content .tab-pane:nth-child(1)').addClass('active');

        $('#model-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
            onSelected: function (data) {
                //callback function: do something with selectedData;
                $('.modelselected').attr('src', data.selectedData.description);
                $('.modeltext').html(data.selectedData.text);
                $('.modelprice').html(data.selectedData.value);
                //console.log(data);
                var val = data.selectedData.value;
                if (val == "46750") {
                    $("#counter option").attr('value', '10');
                } else if (val == "48900") {
                    $("#counter option").attr('value', '30');
                }
            }
        });



        /*$("#model-htmlselect").change(function () {
            var val = $(this).text();
            if (val == "Glenwood") {
                $("#counter-htmlselect option.varvl").attr('value', '1400');
            } else if (val == "Echoe") {
                $("#counter-htmlselect option.varvl").attr('value', '3150');
            } else if (val == "Caney Creek") {
                $("#counter-htmlselect option.varvl").attr('value', '1960');
            } else if (val == "Grande II") {
                $("#counter-htmlselect option.varvl").attr('value', '2260');
            } else if (val == "Horseshoe") {
                $("#counter-htmlselect option.varvl").attr('value', '1695');
            } else if (val == "Zion") {
                $("#counter-htmlselect option.varvl").attr('value', '2730');
            } else if (val == "Jackson") {
                $("#counter-htmlselect option.varvl").attr('value', '2240');
            }
        });*/

        $("#model-htmlselect").change(function () {
            var val = $(this).val();
            if (val == "46750") {
                $("#counter option").addClass('activ');
            } else if (val == "48900") {
                $("#counter option").addClass('activ');
            }
        });

        /*var term = $('.a').data('price');
        alert(term);*/

        $('#windows-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#porch-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#trim-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#siding-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#roof-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#flooring-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#counter-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#loft-steps-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#appliances-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });


        $('#interior-trim-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#interior-cabinet-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#walls-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });


        $('#appliances-htmlselect').ddslick({
            width: '100%',
            imagePosition: 'left',
        });

        $('#optForm').on('submit', function (e) {
            $('#optModal').modal('show');
            e.preventDefault();
        });

        $('#countdown-3').timeTo({
            timeTo: new Date(new Date('Sun Apr 05 2020 19:00:00 GMT+0600 (Bangladesh Standard Time)')),
            displayDays: 2,
            theme: "black",
            displayCaptions: true,
            fontSize: 48,
            captionSize: 14,
            lang: 'en'
        });



        var carousel = $(".testimonials-box .owl-carousel");
        carousel.owlCarousel({
            autoplay: true,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            stagePadding: 40,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
        checkClasses();
        carousel.on('translated.owl.carousel', function (event) {
            checkClasses();
        });

        function checkClasses() {
            var total = $('.testimonials-box .owl-stage .owl-item.active').length;
            $('.testimonials-box .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');
            $('.testimonials-box .owl-stage .owl-item.active').each(function (index) {
                if (index === 0) {
                    // this is the first one
                    $(this).addClass('firstActiveItem');
                }
                if (index === total - 1 && total > 1) {
                    // this is the last one
                    $(this).addClass('lastActiveItem');
                }
            });
        }

    });



})(jQuery);
