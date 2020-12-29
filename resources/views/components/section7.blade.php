<section class="section2" id="contact">
    <div class="scroll-left">
        <p class="bg-text2">CONTACT US</p>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <h1 id="section-title" class="text-center">Get In Touch</h1>

            </div>
        </div>

        <div class="container">

            <!-- section title -->



            <div class="row">

                <div class="col-md-4">
                    <!-- contact info -->
                    <img class="lazy map" loading=lazy src="{{ asset('assets/svg/map.svg') }}"
                        alt="">
                    <div class="contact-info">
                        <h3 class="">Let's talk about everything!</h3>
                        <p class="">Don't like forms? Send me an <a href="mailto:chakrabortyd943@gmail.com">email</a>.
                            👋</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Contact Form -->

                    <form id="contactForm" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group    column col-md-6">

                                <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name"
                                    required="this is required">
                            </div>

                            <div class="form-group    column col-md-6">
                                <input type="text" name="email" class="form-control" placeholder="Enter Email"
                                    id="email" required="this is required">
                            </div>

                            <div class="form-group column col-md-6">
                                <input type="tel" name="mobile_number" class="form-control"
                                    placeholder="Enter Mobile Number" id="mobile_number" required="this is required">
                            </div>

                            <div class="form-group column col-md-6">
                                <input type="text" name="subject" class="form-control" placeholder="Enter subject"
                                    id="subject" required="this is required">
                            </div>

                            <div class="form-group column col-md-12">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message"
                                    id="message" required="this is required"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" id="submit">Submit</button>
                        </div>
                        <div id="ss" style="margin-top:10px; color: green;width: auto;" value="success"></div>
                    </form>
                    <!-- Contact Form end -->
        
                </div>

   
            </div>

        </div>




    </div>
  

    </div>

</section>
