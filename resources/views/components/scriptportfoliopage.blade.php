
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://rawgit.com/intoro/Lazy_Load_JQuery/master/js/1_9_7_jquery.lazyload.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.4/lottie.min.js"
integrity="sha512-m0RQU4SBx0p/bLwRiI4fJBGRafVLZ4s86wRe1+OAx5EXbcWiS/X1jvYdJQRD8jOoIVl+WTyVeMawUWVCh1O8+Q=="
crossorigin="anonymous"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
crossorigin="anonymous"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>



<script src="{{ asset('assets/js/header.min.js') }}"></script>

<script>
 $(document).ready(function() {

    $(".container").imagesLoaded(function() {
        var $container = $("#portfolio-grid").isotope({
            itemSelector: ".item",
            isFitWidth: true
        });

        $(window).resize(function() {
            $container.isotope({
                columnWidth: ".col-sm-3"
            });
        });

        $container.isotope({
            filter: "*"
        });

        $("#filters").on("click", "a", function(e) {
            e.preventDefault();
            var filterValue = $(this).attr("data-filter");
            $container.isotope({
                filter: filterValue
            });
            $("#filters a").removeClass("active");
            $(this).addClass("active");
        });

        var iso = $container.data("isotope");

        var elem = document.querySelector("#portfolio-grid");
        var infScroll = new InfiniteScroll(elem, {
            // options
            path: "?page=@{{#}}",
            append: ".item",
            outlayer: iso,

            history: false,
            status: ".page-load-status"
        });
 



    });
});

</script>
