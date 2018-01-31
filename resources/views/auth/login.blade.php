@extends('main')

@section('root')
    @include('navbar', ['hideCart' => TRUE, 'hideAccount' => TRUE])

    <div class="login-container">
        <div class="page-container ">
            <div class="page-content">
                <div class="content-wrapper">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="panel panel-body login-form">
                                <div class="text-center">
                                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                    <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
                                </div>
                                @if ($errors->has('email') || $errors->has('password'))
                                    <div class="alert alert-danger alert-bordered">
										<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
										<span class="text-semibold">Credenciales invalidas!</span>
								    </div>
                                @endif
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted pl-10"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted pl-10"></i>
                                    </div>
                                </div>
                                <div class="form-group login-options mt-30 mb-20">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="remember" class="styled" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn bg-pink-400 btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
                                </div>
                                <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
                                <a href="{{ route('register') }}" class="btn btn-default btn-block content-group">Sign up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection