<section class="section2" id="about">
    <div class="scroll-left">
        <p class="bg-text1">ABOUT</p>
     </div>
    <div class="container">

        <div class="row">
         
            <div class="col animate__animated animate__fadeInUp">
                <h1 id="section-title" class="text-center  "  data-josh-anim-name="fadeInUp" >ABOUT</h1>

            </div>
        </div>




<style style="text/css">

</style>





        <div class="row">

            <div class="col-md-3 section2-bg "   >
                <div class="section2-bg-sm ">


                    <div class="text-center text-md-center "  data-josh-anim-name="fadeInLeft" data-josh-anim-delay="0.3s">
                        <!-- avatar image -->
                        <picture>

                            <img id="Diptanu-image-about"
                                src="{{ asset('assets/svg/logosmall-white.svg') }}"
                                alt="Diptanu chakraborty initails image" />
                        </picture>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>
            </div>

            <div class="col-md-9 triangle-left-md triangle-top-sm  " >
                <div class="rounded bg-white shadow-dark padding-30 about-box-shadow">
                    <div class="row">
                        <div class="col-md-12" id="about-text-bg">
                            <!-- about text -->
                            <p id="about-text" class=""  data-josh-anim-name="fadeInUp" data-josh-anim-delay="0.3s">

                                {!!$about_raw[0]->description !!}

                            </p>
                            <div class="mt-3 " id="about-button" >
                                {{-- <button type="button" data-toggle="tooltip" title="File format .pdf"  data-toggle="modal" data-target="#exampleModalCenter" class=" button-style1 effect01  " href="{{ $about_raw[0]->link }} " data-josh-anim-name="fadeInUp" data-josh-anim-delay="1s">Download CV</button> --}}
                                <button  type="button" class=" button-style1 effect01 " data-toggle="modal" data-target="#exampleModalCenter"   title="File format .pdf"  data-josh-anim-name="fadeInUp" data-josh-anim-delay="1s">
                                    Download CV
                                  </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- row end -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Download Access</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
          <p style="text-align:justify; font-size:12px;">By Clicking Download Button you are Agreeing the <a href="/termsandconditions">terms and condition </a>and accepting to not use this data for any commercial use or monetisation or for public use.</p> 

        </div>
        <div class="modal-footer">
          <button type="button" class="btn" style="background:#FC7079;color:white;" data-dismiss="modal">Close</button>
          <button onclick="downloadcv()" type="button" class="btn" style="background:#1561F3;color:white;" >Verify & Download</button>
        </div>
      </div>
    </div>
  </div>

<script>
function downloadcv(){
    
    window.open('https://cv.diptanuchakraborty.in/myfiles/CVdiptnc.pdf');
}
</script>


    </div>
</section>


<script>


</script>
