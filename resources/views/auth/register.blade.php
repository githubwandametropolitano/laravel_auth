@extends('front.layout')

@section('main')
<div class="box2" style="height:auto;width:100%;background-color:#f8f9f9;margin-top:30px;padding-top:40px;">
    <section id="signup" class="padd-section wow fadeInUp">
                           
        <div class="row justify-content-center" style="width:100%">
                <div class="col-lg-12 col-md-8 col-12">
                        
                    <h1 style="text-align:center;color:#7f0964;font-weight:bold;font-size:35;letter-spacing:4px;padding-bottom:4px;">SIGN UP</h1>
                    <hr style="width:120px;border:1px solid black;">
                    
                </div>

        </div>
        <div class="col-lg-6 col-md-8 col-10" id="gg">
            <div class="col-md-12">
               
                    @if (session('confirmation-success'))
                        @component('front.components.alert')
                            @slot('type')
                                success
                            @endslot
                            <p style="color: rgb(127, 9, 100);">{!! session('confirmation-success') !!}</p>
                        @endcomponent
                    @endif
               
            </div>
            <div class="signup-block">
                <form id="signupForm" role="form" method="POST" action="{{route('register')}}">
                    {{ csrf_field() }}
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Your Company" id="company" class="form-control" name="company_name" required data-error="Please enter your company">
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Head Person Name" id="name" class="form-control" name="name" required data-error="Please enter your head person name">
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group" style="text-align: center;">
                                @if ($errors->has('email'))
                                    @component('front.components.error')
                                        {{ $errors->first('email') }}
                                    @endcomponent
                                @endif
                                <input type="Email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                <div class="help-block with-errors" style="text-align: left;"></div>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Phone Number" id="phone" class="form-control" name="phone" required data-error="Please enter your phone number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required data-error="Please enter your password">
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group" style="text-align: center;">
                                @if ($errors->has('password'))
                                    @component('front.components.error')
                                        {{ $errors->first('password') }}
                                    @endcomponent
                                @endif
                                <input type="password" placeholder="Re-type Password" id="confirm_password" class="form-control" name="password_confirmation" required data-error="Please enter your confirm password">
                                <div class="help-block with-errors" style="text-align: left;"></div>
                            </div> 
                        </div>

                        <div class="col-md-12">                           
                            <div class="submit-button text-center">
                                <button class="btn" aria-disabled=" " id="submit" type="submit" style="background-color:#7f0964;letter-spacing:1px;">Sign up</button>
                                
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
