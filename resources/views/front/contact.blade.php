@extends('front.layout')

@section('main')
<div class="box2" style="height:auto;width:100%;background-color:#f8f9f9;margin-top:50px;padding-top:80px;">
   <!-- content
   ================================================== -->
    <section id="contact" class="padd-section wow fadeInUp">
                           
        <div class="row justify-content-center" style="width:100%">
                <div class="col-lg-12 col-md-8 col-12">
                        
                    <h1 style="text-align:center;color:#7f0964;font-weight:bold;font-size:35;letter-spacing:4px;padding-bottom:4px;">CONTACT</h1>
                    <hr style="width:120px;border:1px solid black;">
                    <center>
                        <div class="col-lg-7 col-md-12 col-12">
                            <p style="font-size:16px;">We'd love to hear from you! Please contact us at anytime by emailing us at<Span style="color:#7f0964;font-weight:bold"> hello@sirivisa.com</Span> or fill out our contact form below and we'll respond really soon, promise.</p>
                       </div>
                   </center>
                </div>
        </div>
        <div class="col-lg-6 col-md-8 col-10" id="gg">
                <div class="contact-block">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="conname" name="conname" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>                                 
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="conemail" class="form-control" name="conemail" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"> 
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn" aria-disabled=" " id="submit" type="submit" style="background-color:#7f0964;letter-spacing:1px;">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden" style="color:#7f0964;letter-spacing:1px;font-size:25px;padding-top:5px"></div>
                                    <div class="clearfix"></div> 
                                </div>
                            </div>
                        </div>           
                    </form>
                </div>
        </div>
                                                 
    </section>
</div>
      
@endsection