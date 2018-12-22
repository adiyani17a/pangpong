<!DOCTYPE html>
<html>
@include('partials._admin_head')

@yield('extra_style')
<body style="min-height: 1000px">
	@include('partials._admin_setting')
	<div class="container-scroller">
		@include('partials._admin_sidebar')
   		@include('partials._navbar')

		@yield('content')

		@include('partials._admin_footer')
	</div>
@include('partials._admin_script')

@yield('extra_script')
</body>
</html>