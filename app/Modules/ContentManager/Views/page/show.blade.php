@extends(Theme::active().'.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>{{ $model->post_title }}</h1>
        <div class="well well-sm">
			<span><i class="fa fa-clock-o"></i> {{ $model->updated_at->format('M d, Y') }}</span> | 
			<span><i class="fa fa-user"></i> {{ $model->user->name }}</span> |
			<span><i class="fa fa-comment"></i> {{ $model->comments->count() }} Comments</span> 
		</div>
    {!!html_entity_decode($model->post_content)!!}
    </div>
</div>
@endsection

