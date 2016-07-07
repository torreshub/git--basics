@extends('master.app')
@section('content')
    {!! Form::model($user, ['method' => 'PUT']) !!}

        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="form-group">
                    <label for="name">Name</label>
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <input type="submit" class="btn btn-success pull-right" value="Save">

            </div>
        </div>

´
    {!! Form::close() !!}
@stop