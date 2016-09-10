	<footer>
		{!! Theme::option('general','copyright') !!}
        <hr/>
        This page took {{ (microtime(true) - LARAVEL_START) }} second to render
	</footer>
	<!-- JavaScripts -->
    <script src="{{URL::to('/')}}/assets/jquery/dist/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/bootstrap-submenu.min.js"></script>
    <script src="{{URL::to('/')}}/themes/smallpine/js/main.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @stack('scripts')
</body>
</html>