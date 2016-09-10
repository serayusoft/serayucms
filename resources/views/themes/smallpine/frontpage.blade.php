@extends(Theme::active().'.mainfront')

@section('content')
<div class="row">
    <div class="col-md-12">
    	{{ Widget::group('post_slider') }}
    </div>
    <div class="col-md-8">
    	<div class="panel panel-default">
            <div class="panel-heading">This Is Default Theme</div>

            <div class="panel-body">
                Your Application's Landing Page. 
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
@endsection

@push('style-top')
<link rel="stylesheet" href="{{URL::to('/assets/owl.carousel.2/assets/owl.carousel.css')}}">
@endpush
@push('scripts')
<script src="{{URL::to('/assets/owl.carousel.2/owl.carousel.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.post-slider').owlCarousel({
		    center: true,
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    items:5,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1000:{
		            items:2
		        }
		    },	   
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true
		});
	});	
</script>
@endpush
