<div class="post-slider">
@foreach ($model as $value)
    <div class="slider-cont">
    	<div class="slider-img">
    		<img src="{{ $value->getMetaValue('featured_img') }}" class="img-responsive" />	
    	</div>
    	<a href="{{ $value->getUrl() }}">
    	<div class="slider-content">
    		<h2>{{ $value->post_title }}</h2>
    		<div class="slider-meta">
    			<span><i class="fa fa-clock-o"></i> {{ $value->updated_at->format('M d, Y') }}</span> 
				<span><i class="fa fa-user"></i> {{ $value->user->name }}</span> 
				<span><i class="fa fa-comment"></i> {{ $value->comments->count() }} Comments</span> 
    		</div>
    	</div>
    	</a>
    </div>
@endforeach
</div>