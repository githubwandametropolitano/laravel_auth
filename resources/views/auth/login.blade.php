@extends('front.layout')

@section('main')
<div class="box2" style="height:auto;width:100%;background-color:#f8f9f9;margin-top:30px;padding-top:40px;">
  
    <section id="login" class="padd-section wow fadeInUp">
                           
        <div class="row justify-content-center" style="width:100%">
                <div class="col-lg-12 col-md-8 col-12">
                        
                    <h1 style="text-align:center;color:#7f0964;font-weight:bold;font-size:35;letter-spacing:4px;padding-bottom:4px;">LOG IN</h1>
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
                    {!! session('confirmation-success') !!}
                @endcomponent
            @endif
            </div>
            <div class="login-block">
                <form id="loginForm" role="form" method="POST" action="{{route('login')}}">
                    {{ csrf_field() }}
                    
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <div style="text-align: center;">
                                @if ($errors->has('log'))
                                    @component('front.components.error')
                                        {{ $errors->first('log') }}
                                    @endcomponent
                                @endif
                                </div>
                                <input type="Email" placeholder="Your Email" id="email" class="form-control" name="log" value="{{ old('log') }}" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" placeholder="Your password" id="password" class="form-control" name="password" required data-error="Please enter your password">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button text-center">
                                <button class="btn" aria-disabled=" " id="submit" type="submit" style="background-color:#7f0964;letter-spacing:1px;">Log in</button><br><br>
                                 
                                <div class="clearfix"></div> 
                                                                    
                                        <a href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a><br><br>
                                        <a href="{{ route('register') }}">
                                            Not Signed Up?
                                        </a>
                                   
                            </div>
                                
                        </div>
                       
                        
                    </div>          
                </form>
            </div>
        </div>
                                                 
    </section>
</div>

@endsection
