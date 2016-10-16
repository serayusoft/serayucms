@extends(Theme::active().'.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>{{ $model->post_title }}</h1>
        
    {!!html_entity_decode($model->post_content)!!}
    </div>
</div>
@endsection

