@extends("layouts.application")
  @section("content")
  <div>
    <h1>{!! $article->title !!}</h1>
    <p>{!! $article->content !!}</p>
    <i>By {!! $article->author !!}</i>
  </div>

  <div>
    <h3><i><u>Give Comments</u></i></h3>
    {!! Form::open(array('url' => 'comments', 'class' => 'form-horizontal', 'role' => 'form')) !!}

    <div class="form-group">
      {!! Form::label('article_id', 'Title', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
          {!! Form::text('article_id', $value = $article->id, array('class' => 'form-control', 'readonly')) !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      {!! Form::label('content', 'Content', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
          {!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10, 'autofocus' => 'true')) !!}
          {!! $errors->first('content') !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      {!! Form::label('user', 'User', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
        {!! Form::text('user', null, array('class' => 'form-control')) !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      <div class="col-lg-3"></div>
      <div class="col-lg-9">
        {!! Form::submit('Save', array('class' => 'btn btn-primary btn-raised')) !!}
      </div>
      <div class="clear"></div>
    </div>
  {!! Form::close() !!}
  </div>

  <div class="row">
        <div class="col-md-12">
          <h2 id="type-blockquotes">Comments</h2>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
  @foreach($comments as $comment)
    <div class="bs-component">
      <blockquote>
            <p>{!! $comment->content !!}</p>
            <small>{!! $comment->user !!}</small>
          </blockquote>
    </div>
  @endforeach
</div>
</div>
  @stop
