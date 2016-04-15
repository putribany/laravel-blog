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
      @include('shared.head_nav')

      <!-- Bagian Content -->
      <div class="container clearfix">
        <div class="row row-offcanvas row-offcanvas-left ">

          <!--Bagian Kiri-->
          @include("shared.left_nav")

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
              <div class="row">
                <div class="col-md-6">
                <div class="form-group label-floating has-success">
              <div class="input-group">
                <label class="control-label" for="keywords">Search Article</label>
                <input type="text" id="keywords" class="form-control">
                <!--<p class="help-block">search your articles</p>-->
                  <span class="input-group-btn">
                    <button class="btn btn-success btn-raised" id="search" type="button">GO!</button>
                  </span>
              </div>
              </div>
              </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                <div class="form-group label-floating has-info">
              <div class="input-group">
                <label class="control-label" for="keyuser">Search User</label>
                <input type="text" id="keyuser" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-info btn-raised" id="searchuser" type="button">GO!</button>
                  </span>
              </div>
              </div>
              </div>
              </div>
            </div>
          </div>

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

      <script>
      $('#article_link').click(function(e){
        e.preventDefault();
        $.ajax({
          url:'/articles',
          type:"GET",
          dataType: "json",
          success: function (data)
          {
            $('#data-content').html(data['view']);
          },
          error: function (xhr, status)
          {
            console.log(xhr.error);
          }
        });
      });
    </script>

    <!-- This for handle ajax pagination -->
    <script>
    $(document).ready(function() {
      $(document).on('click', '.pagination a', function(e) {
        get_page($(this).attr('href').split('page=')[1]);
        e.preventDefault();
      });
    });

    function get_page(page) {
      $.ajax({
        url : '/users?page=' + page,
        type : 'GET',
        dataType : 'json',
        success : function(data) {
          $('#data-content').html(data['view']);
        },
        error : function(xhr, status, error) {
          console.log(xhr.error + "\n ERROR STATUS : " + status + "\n" + error);
        },
        complete : function() {
          alreadyloading = false;
        }
      });
    }
    </script>

    <!-- This for handle ajax search -->
    <script>
    $('#search').on('click', function(){
      $.ajax({
        url : '/articles',
        type : 'GET',
        dataType : 'json',
        data : {
          'keywords' : $('#keywords').val()
        },
        success : function(data) {
          $('#data-content').html(data['view']);
        },
        error : function(xhr, status) {
          console.log(xhr.error + " ERROR STATUS : " + status);
        },
        complete : function() {
          alreadyloading = false;
        }
      });
    });
    </script>

    <script>
      $(document).ready(function() {
        $(document).on('click', '#id', function(e) {
          sort_articles();
          e.preventDefault();
        });
      });
      function sort_articles() {
        $('#id').on('click', function() {
          $.ajax({
            url : '/articles',
            typs : 'GET',
            dataType : 'json',
            data : {
              "direction" : $('#direction').val()
            },
            success : function(data) {
              $('#articles-list').html(data['view']);
              $('#direction').val(data['direction']);
              if(data['direction'] == 'asc') {
                $('i#ic-direction').attr({class: "fa fa-arrow-up"});
              } else {
                $('i#ic-direction').attr({class: "fa fa-arrow-down"});
              }
            },
            error : function(xhr, status, error) {
              console.log(xhr.error + "\n ERROR STATUS : " + status + "\n" + error);
            },
            complete : function() {
              alreadyloading = false;
            }
          });
        });
      }
      </script>

      <script>
      $('#searchuser').on('click', function(){
        $.ajax({
          url : '/users',
          type : 'GET',
          dataType : 'json',
          data : {
            'keyuser' : $('#keyuser').val()
          },
          success : function(data) {
            $('#data-content').html(data['view']);
          },
          error : function(xhr, status) {
            console.log(xhr.error + " ERROR STATUS : " + status);
          },
          complete : function() {
            alreadyloading = false;
          }
        });
      });
      </script>

    </body>
  </html>
