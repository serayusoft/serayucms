<div class="container">
	<div class="row">
		<div class="col-md-3">
			{{ Widget::group('sidebar') }}
		</div>
		<div class="col-md-9">@yield('content')</div>
	</div>
</div>