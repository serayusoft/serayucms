@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="x_panel">
    <div class="x_title">
      <h2>Settings</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form>
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
              <li role="presentation" class="active"><a href="#tab_content1" id="general-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="post-tab" data-toggle="tab" aria-expanded="false">Post</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="media-tab2" data-toggle="tab" aria-expanded="false">Media</a>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="general-tab">
                  
                  <div class="form-group">
                    <label for="site-title">Site Title</label>
                    <input type="text" name="site_title" class="form-control" value="{{ $model['site_title'] }}" id="site-title" placeholder="Site Title">
                  </div>
                  <div class="form-group">
                    <label for="site-tagline">Site Tagline</label>
                    <input type="text" name="site_tagline" class="form-control" value="{{ $model['site_tagline'] }}" id="site-tagline" placeholder="Site Tagline">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="post-tab">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                  booth letterpress, commodo enim craft beer mlkshk aliquip</p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="media-tab">
                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                  booth letterpress, commodo enim craft beer mlkshk </p>
              </div>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
@endsection