<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta httpequiv="XUACompatible" content="IE=edge">
      <meta name="viewport" content="width=devicewidth, initialscale=1">
      <title>PUTRIBANY</title>
      <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />-->
      <link href="/css/bootstrap.css" rel="stylesheet" />
      <link href="/css/bootstrap-material-design.css" rel="stylesheet" />
      <link href="/css/ripples.css" rel="stylesheet" />
    </head>

    <body style="padding-top:60px;">
      <!--bagian navigation-->
    @include('shared.head_login')
          <!--Bagian Kanan-->
          <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">
            <div class="panel-body">
              @if (Session::has('error'))
              <div class="alert alert-dismissible alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{Session::get('error')}}
                </div>
              @endif

              @if (Session::has('notice'))
                <div class="alert alert-dismissible alert-success">
           <button type="button" class="close" data-dismiss="alert">&times;</button>
           {{Session::get('notice')}}
                </div>
              @endif

              <div class="row">
                <div class="col-lg-12">
  <div id="data-content">
    @yield("content")
  </div>
</div>
</div>
          </div>
        </div>
      </div>
</div>

      <script src="/js/jquery-1.12.3.js"></script>
      <script src="/js/bootstrap.js"></script>
      <script src="/js/material.js"></script>
      <script src="/js/ripples.js"></script>

      <script>
        $.material.init();
      </script>

    </body>
  </html>
