@extends("layouts.application")
@section("content")
{!! Form::model($user, ['route' => array('users.update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form']) !!}
  <div class="form-group">
    {!! Form::label('name', 'Name', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-9">
      {!! Form::text('name', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}
      {!! $errors->first('name') !!}
    </div>
    <div class="clear"></div>
  </div>

  <div class="form-group">
    {!! Form::label('email', 'Content', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-9">
      {!! Form::text('email', null, array('class' => 'form-control', 'rows' => 10)) !!}
      {!! $errors->first('email') !!}
    </div>
    <div class="clear"></div>
  </div>

  <div class="form-group">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
      {!! Form::submit('Update', array('class' => 'btn btn-primary btn-raised')) !!}
    </div>
    <div class="clear"></div>
  </div>
{!! Form::close() !!}
@stop
