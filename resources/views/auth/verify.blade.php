@extends('front.layout')

@section('main')
<div class="box2" style="height:auto;width:100%;background-color:#f8f9f9;margin-top:30px;padding-top:40px;">
   <!-- content
   ================================================== -->
    <section id="verify" class="padd-section wow fadeInUp">
                           
        <div class="row justify-content-center" style="width:100%">
                <div class="col-lg-12 col-md-8 col-12">
                        
                    <h1 style="text-align:center;color:#7f0964;font-weight:bold;font-size:35;letter-spacing:4px;padding-bottom:4px;">Verify Your Email</h1>
                    <hr style="width:120px;border:1px solid black;">
                    <center>
                        <div class="col-lg-7 col-md-12 col-12">
                            @if (session('confirmation-success'))
                                @component('front.components.alert')
                                    @slot('type')
                                        success
                                    @endslot
                                    <p style="color: rgb(127, 9, 100);">{!! session('confirmation-success') !!}</p>
                                @endcomponent
                            @endif
                       </div>
                   </center>
                </div>
        </div>
        <div class="col-lg-6 col-md-8 col-10" id="gg">
                <div class="verify-block">
                    <form id="verifyForm">
                        <div class="row justify-content-center" style="width:100%" >
                            
                                    
                                            <p>We've sent a verify mail to your email address. Please check it.</p>
                                        
                              
                        </div>           
                    </form>
                </div>
        </div>
                                                 
    </section>
</div>
      
@endsection