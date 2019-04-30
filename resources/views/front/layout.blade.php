<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ config('app.locale') }}"> <!--<![endif]-->
<head>

	<!--- basic page needs
	================================================== -->
	<meta charset="utf-8">
	<title>{{ isset($post) && $post->seo_title ? $post->seo_title :  __(lcfirst('Title')) }}</title>
	<meta name="description" content="{{ isset($post) && $post->meta_description ? $post->meta_description : __('description') }}">
	<meta name="author" content="@lang(lcfirst ('Author'))">
	@if(isset($post) && $post->meta_keywords)
		<meta name="keywords" content="{{ $post->meta_keywords }}">
	@endif
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- mobile specific metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{ asset('css/base.css') }}">
	<link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	@yield('css')

	<style>
		.search-wrap .search-form::after {
			content: "@lang('Press Enter to begin your search.')";
		}
	</style>


	<!-- script
	================================================== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>

	<!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header
   ================================================== -->
   <header class="short-header">

   	<div class="gradient-block"></div>

   	<div class="row header-content">

   		<div class="logo">
	    	<a href="{{ url('') }}">Author</a>
	    </div>

	   	<nav id="main-nav-wrap">
			<ul class="main-navigation sf-menu">
				<li {{ currentRoute('home') }}>
					<a href="{{ route('home') }}">@lang('Home')</a>
				</li>
				
				@guest
					
					<li {{ currentRoute('register') }}>
						<a href="{{ route('register') }}">@lang('Sign up')</a>
					</li>
				@endguest
				@request('password/email')
					<li class="current">
						<a href="{{ request()->url() }}">@lang('Forgotten password')</a>
					</li>
				@else
					@guest
						<li {{ currentRoute('login') }}>
							<a href="{{ route('login') }}">@lang('Login')</a>
						</li>
						@request('password/reset')
							<li class="current">
								<a href="{{ request()->url() }}">@lang('Password')</a>
							</li>
						@endrequest
						@request('password/reset/*')
							<li class="current">
								<a href="{{ request()->url() }}">@lang('Password')</a>
							</li>
						@endrequest
					@else
						@admin
							<li>
								<a href="{{ url('admin') }}">@lang('Administration')</a>
							</li>
						@endadmin
						@redac
							<li>
								<a href="{{ url('admin/posts') }}">@lang('Administration')</a>
							</li>
						@endredac
						<li>
							<a id="logout" href="{{ route('logout') }}">@lang('Logout')</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
								{{ csrf_field() }}
							</form>
						</li>
					@endguest
				@endrequest
			</ul>
		</nav> <!-- end main-nav-wrap -->

		

		<div class="triggers">
			<a class="menu-toggle" href="#"><span>Menu</span></a>
		</div> <!-- end triggers -->

   	</div>

   </header> <!-- end header -->

   @yield('main')

   <!-- footer
   ================================================== -->
   
   <div id="preloader">
    	<div id="loader"></div>
   </div>

   <!-- Java Script
   ================================================== -->
   <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>
   <script>
	   $(function() {
		   $('#logout').click(function(e) {
			   e.preventDefault();
			   $('#logout-form').submit()
		   })
	   })
   </script>

   @yield('scripts')

</body>

</html>
