@extends('main')

@section('root')
    @include('navbar', ['hideCart' => TRUE, 'hideAccount' => TRUE])

    <div class="login-container">
        <div class="page-container">
            <div class="page-content">
                <div class="content-wrapper">
                    <div class="content">
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="panel panel-body login-form">
                                <div class="text-center">
                                    <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                    <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i>{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="Your email" name="email" value="{{ old('email') }}" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-mention text-muted"></i>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i>{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i>{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                </div>

                                <button type="submit" class="btn bg-pink-400 btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection