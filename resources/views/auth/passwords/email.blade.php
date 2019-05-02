@extends('front.layout')

@section('main')
<div class="box2" style="width:100%;background-color:#f8f9f9;margin-top:50px;padding-top:80px;">
    <section id="email-request">
         <div class="row justify-content-center" style="width:100%">
                <div class="col-lg-12 col-md-8 col-12">
                        
                    <h1 style="text-align:center;color:#7f0964;font-weight:bold;font-size:35;letter-spacing:4px;padding-bottom:4px;">Reset password</h1>
                    <hr style="width:120px;border:1px solid black;">
                    <center>
                        <div class="col-lg-7 col-md-12 col-12">
                            <p style="font-size:16px;color:#505050">You have forgotten your password, don't mind ! You can create a new one. But for your own security we want to be sure of your identity. So send us your email by filling this form. You will get a message with instruction to create your new password.</p>
                            @if ($errors->has('email'))
                                @component('front.components.error')
                                    {{ $errors->first('email') }}
                                @endcomponent
                            @endif
                       </div>
                   </center>
                </div>
        </div>
        <div class="col-lg-6 col-md-8 col-10" id="gg">
                <div class="col-md-12">
               
                @if (session('status'))
                    @component('front.components.alert')
                        @slot('type')
                            success
                        @endslot
                        <p>{{ session('status') }}</p>
                    @endcomponent
                @endif                 
                </div>
                <div class="link-block">
                <form id="linkForm" role="form" method="POST" action="{{ route('password.email') }}">
                   
                        {{ csrf_field() }}
                        
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" placeholder="Your email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button text-center">
                                <button class="btn" aria-disabled=" " id="submit" type="submit" style="background-color:#7f0964;letter-spacing:1px;">Send Password Reset Link</button>
                                <div id="mailSubmit" class="h3 text-center hidden" style="color:#7f0964;text-align:center;letter-spacing:1px;font-size:25px;padding-top:20px"></div> 
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
