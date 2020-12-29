
<!-- =========================css Import====================== -->
<link rel="stylesheet" href="{{asset('assets/diptnc_splash_screen_animation_assets/css/diptnc_splash_screen_animation.min.css')}}">
<!-- =========================css Import====================== -->
<div class="splash_screen_backgound">


<div id="bm">


</div>


</div>

<!-- =========================js Import====================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.4/lottie.min.js" integrity="sha512-m0RQU4SBx0p/bLwRiI4fJBGRafVLZ4s86wRe1+OAx5EXbcWiS/X1jvYdJQRD8jOoIVl+WTyVeMawUWVCh1O8+Q==" crossorigin="anonymous"></script>
<script >
var svgContainer = document.getElementById('bm');
var animItem = bodymovin.loadAnimation({
  wrapper: svgContainer,
  animType: 'svg',
  loop: true,
  path: "{{asset('assets/diptnc_splash_screen_animation_assets/data/data.json')}}"
});



window.onload = function(){
        //hide the preloader
        document.querySelector(".splash_screen_backgound").style.display = "none";
    }


</script>


<!-- =========================js Import====================== -->


