@extends('front.layout')

@section('main')
<div class="box2" style="height:auto;width:100%;background-color:#f8f9f9;margin-top:30px;padding-top:60px;">
   <!-- content
   ================================================== -->
    <section id="reset" class="padd-section wow fadeInUp">
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
                           
        <div class="row justify-content-center" style="width:100%">
                <div class="col-lg-12 col-md-8 col-12">
                        
                    <h1 style="text-align:center;color:#7f0964;font-weight:bold;font-size:35;letter-spacing:4px;padding-bottom:4px;">Reset password</h1>
                    <hr style="width:120px;border:1px solid black;">
                    
                </div>
        </div>
        <div class="col-lg-6 col-md-8 col-10" id="gg">
            
            <div class="login-block">
                <form id="resetForm" role="form" method="POST" action="{{ Route('password.request') }}" >
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                @if ($errors->has('email'))
                                    @component('front.components.error')
                                        {{ $errors->first('email') }}
                                    @endcomponent
                                @endif
                                <input type="email" placeholder="Your email" class="form-control" name="email" value="{{ old('email') }}" required>
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                @if ($errors->has('password'))
                                    @component('front.components.error')
                                        {{ $errors->first('password') }}
                                    @endcomponent
                                @endif 
                                <input type="password" placeholder="New Password" id="newpassword" class="form-control" name="password" required data-error="Please enter your password">
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" placeholder="Password confirmation" id="password-confirm" class="form-control" name="password_confirmation" required data-error="Please confirm your password">
                                <div class="help-block with-errors"></div>
                            </div> 
                        
                            <div class="submit-button text-center">
                                <button class="btn" aria-disabled=" " id="submit" type="submit" style="background-color:#7f0964;letter-spacing:1px;">Reset password</button>
                                <div id="resetSubmit" class="h3 text-center hidden" style="color:#7f0964;text-align:center;letter-spacing:1px;font-size:25px;padding-top:5px"></div> 
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
