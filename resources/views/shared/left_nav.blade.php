<div class="col-xs-12 col-sm-3 side pull-left sidebar-offcanvas" id="sidebar" role="navigation">
  <div class="list-group">
    @if(Auth::check())
    <div class="input-group custom-search-form">
      <img src="{{URL::asset('/img/logo-g.png')}}" alt="profile Pic" height="100" width="100">
			<div class="media-body">
					<h4>{!! ucfirst(Auth::user()->name) !!}</h4>
					<p class="text-success"> &nbsp;&nbsp;<i class="fa fa-fw fa-circle"></i> Online</p>
			</div>
    </div>
    @else
    <h1> Putri Bany </h1>
    @endif
  </div>
</div>
