@extends('master.app')
@section('content')

    <div class="col-md-6 col-md-offset-3">
        <h1>Users</h1>
        <table class="table table-striped">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class="btn btn-primary btn-block" href="{{ url('users/' . $user->id) }}">
                            Open
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop