
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://rawgit.com/intoro/Lazy_Load_JQuery/master/js/1_9_7_jquery.lazyload.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.4/lottie.min.js"
integrity="sha512-m0RQU4SBx0p/bLwRiI4fJBGRafVLZ4s86wRe1+OAx5EXbcWiS/X1jvYdJQRD8jOoIVl+WTyVeMawUWVCh1O8+Q=="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
crossorigin="anonymous"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/header.min.js') }}"></script>
<script src="{{ asset('assets/js/home.min.js') }}"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelector(".blurr-bg"), {
		max: 5,
        speed: 400,
        glare:true,
        "max-glare":0.5
	});
	


//ajax mailer


$('#contactForm').on('submit',function(event){
   
   event.preventDefault();
$.ajaxSetup({
headers:{
 'X-CSRF_TOKEN': $("input[type='hidden']").attr('value')
}
});
document.getElementById("submit").disabled=true;

$.ajax({
url: "{{url('/ajax')}}",
method:'post',
data:{ 
 name: $("#name").val(),
 email:$("#email").val(),
 phone:$("#mobile_number").val(),
 subject:$("#subject").val(),
 message:$("#message").val()
},
success: function(result){

 if (result=='done')
 {
     console.log(result);
                   var mc='Message Sent !!';
                   document.getElementById("ss").innerHTML=mc;  
                   setTimeout(function(){
                       $('#ss').fadeOut('fast');
                       document.getElementById("submit").disabled=false;
                   },5000);
                   
                   $('#contactForm')[0].reset();
 }  

}
});   

});
</script>
