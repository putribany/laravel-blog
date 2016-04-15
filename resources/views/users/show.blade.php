@extends("layouts.application")
  @section("content")
  <div>
    <h1>{!! $user->name !!}</h1>
    <p>email: {!! $user->email !!}</p>
    <i>role: {!! $user->role !!}</i>
  </div>
  @stop
