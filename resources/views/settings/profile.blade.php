@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
    @endif

    <div class="container clearfix">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Profile Settings</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <form class="form-horizontal" role="form" method="POST" action="{{route('saveProfile')}}" novalidate>
                {{ method_field('POST') }}
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="col-md-4 control-label">Alarm-o-bot username</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="token" class="col-md-4 control-label">Alarm-o-bot token</label>

                    <div class="col-md-6">
                        <input id="token" type="text" class="form-control" name="token" value="{{ Auth::user()->token }}" required autofocus>

                        @if ($errors->has('token'))
                            <span class="help-block">
                                <strong>{{ $errors->first('token') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection