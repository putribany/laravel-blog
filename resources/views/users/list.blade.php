@if(Auth::user()->role == 'admin')
<div>{!! link_to('users/create', 'Add User', array('class' => 'btn btn-raised btn-success')) !!}</div>
@endif
<div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">List of Users</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Role</td>
                  <td colspan="2">Acts</td>
                </tr>
              </thead>
              <tbody>
              @foreach ($users as $user)
                <tr class="warning">
                  <td>{!! $user->id !!}</td>
                  <td>{!! $user->name !!}</td>
                  <td>{!! $user->email !!}</td>
                  <td>{!! $user->role !!}</td>
                  @if(Auth::user()->role == 'reader')
                  <td>{!! link_to('users/'.$user->id, 'Show', array('class' => 'btn btn-info btn-xs btn-raised')) !!}</td>
                  @else
                  <td>
                    {!! link_to('users/'.$user->id, 'Show', array('class' => 'btn btn-info btn-xs btn-raised')) !!}
                    {!! link_to('users/'.$user->id.'/edit', 'Edit', array('class' => 'btn btn-warning btn-xs btn-raised')) !!}
                  </td>
                  <td>
                    {!! Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete')) !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-xs btn-raised', "onclick" => "return confirm('are you sure?')")) !!}
                    {!! Form::close() !!}
                  </td>
                  @endif
                </tr>
              @endforeach
              </tbody>
              </table>
            </div>

            <div class="panel-body">
              <div>{!! $users->render() !!}</div>
            </div>
          </div>
