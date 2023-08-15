@extends('layouts.apps')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-4 offset-md-4">
            <div class="card form-holder">
                <div class="card-body">
                    <h1>Register</h1>
                    @if (Session::has('error'))
                    <p class="text-denger">{{Session::get('error')}}</p>
                    @endif
                    @if(Session::has('success'))
                    <p class="text-success">{{Session::get('success')}}</p>
                    @endif
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="name" name="name" class="form-control" placeholder="Name" />
                            @if($errors->has('Name'))
                            <p class="text-danger">{{ $errors->first( 'Name') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" />
                            @if($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email' ) }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                            @if($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password ') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="text" name="password_confirmation" class="form-control" placeholder="password_confirmation" />
                        </div>

                        <div class="row">
                            <div class="col-8 text-left">
                                <a href="#" class="btn btn-link">Forgot Password</a>
                            </div>
                            <div class="col-4 text-right">
                                <input type="submit" class="btn btn-primary" value="signup" />
                                <!--<input type="submit" class="btn btn-primary" value="register" />-->

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection