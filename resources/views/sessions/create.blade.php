@extends("layouts.login")
@section("content")
  {!! Form::open(['url' => 'sessions', 'class' => 'form-horizontal bs-component', 'role' => 'form']) !!}
    <div class="form-group has-success">
      {!! Form::label('name', 'Username', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-4">
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
        {!! $errors->first('name') !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group has-error">
      {!! Form::label('password', 'Password', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-4">
        {!! Form::password('password', array('class' => 'form-control')) !!}
        {!! $errors->first('password') !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group has-error">
      {!! Form::label('remember', 'Remember Me', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-4">
        {!! Form::checkbox('remember', null, array('class' => 'form-control')) !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      <div class="col-lg-3"></div>
      <div class="col-lg-2">
        {!! Form::submit('Login', array('class' => 'btn btn-primary btn-raised')) !!}
      </div>
      <div class="col-lg-3">
        {!! link_to('reset-password/', 'Forgot Password?') !!}
      </div>
      <div class="clear"></div>
    </div>
  {!! Form::close() !!}

@stop
