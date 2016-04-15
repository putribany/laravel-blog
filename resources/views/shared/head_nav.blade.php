<div class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"/>
            <span class="icon-bar"/>
            <span class="icon-bar"/>
          </button>
          {!! link_to('', 'Training Laravel', ['class' => 'navbar-brand']) !!}
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" id="article_link">Articles</a></li>
            @if(Auth::user()->role == 'admin')
            <li>{!! link_to('/users', 'Users') !!}</li>
            @endif
            <li>{!! link_to('users/create', 'Signup') !!}</li>
            <!-- Auth::user()->name -->
            @if (Auth::check())
              <li>{!! link_to('logout', 'Logout') !!}</li>
            @else
              <li>{!! link_to('sessions/create', 'Login') !!}</li>
            @endif
          </ul>
        </div>
      </div>
    </div>
