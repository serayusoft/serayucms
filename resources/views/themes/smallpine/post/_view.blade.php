<div class="row post-item">
	<div class="col-md-4 post-featured">
		<img src="{{ $data->getMetaValue('featured_img') }}" class="img-responsive" alt="{{ $data->post_title }}">
	</div>
	<div class="col-md-8 post-content">
		<a href="{{ $data->getUrl() }}"><h1>{{ $data->post_title }}</h1></a>
		<div class="well well-sm post-meta">
			<span><i class="fa fa-clock-o"></i> {{ $data->updated_at->format('M d, Y') }}</span> 
			<span><i class="fa fa-user"></i> {{ $data->user->name }}</span> 
			<span><i class="fa fa-comment"></i> {{ $data->comments->count() }} Comments</span> 
		</div>
		{!! $data->getExcerpt() !!}
	</div>
</div>

