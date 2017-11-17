@extends('frontend.master')

@section('content')


    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <form action="/login" method="post">
                            @if(Session::has('success-msg'))
                                <p class="alert alert-danger">{{ Session::get('success-msg') }}</p>
                            @endif
                            <input type="email" name="email"  placeholder="Email Address" />
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="password" name="password" placeholder="Enter Password" />
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
                            <button type="submit" >Login</button>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                    Forget Password
                                </button>
                        </form>

                    </div><!--/login form-->
                </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="/password/email" method="post">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Forget Password?</h4>
                                </div>
                                <div class="modal-body">


                                        @if(Session::has('success-msg'))
                                            <p class="alert alert-danger">{{ Session::get('success-msg') }}</p>
                                        @endif
                                            <div class="input-group input-group-md">
                                                <span class="input-group-addon" id="sizing-addon1">@</span>
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
                                            </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">



                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                                    </form>

                            </div>
                        </div>
                    </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <form action="/register" method="post">
                            @if(Session::has('success-msg-registered'))
                                <p class="alert alert-success">{{ Session::get('success-msg-registered') }}</p>
                            @endif
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Name"/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="email"name="email" value="{{old('email')}}" placeholder="Email Address"/>
                            <input type="password" name="password" placeholder="Password"/>
                            <input type="text" name="phone" value="{{old('phone')}}" placeholder="Phone"/>
                            <input type="text" name="address" value="{{old('address')}}" placeholder="Address"/>
                            <input type="text" name="zip" value="{{old('zip')}}" placeholder="Zip Code"/>
                            <input type="text" name="city" value="{{old('city')}}" placeholder="City"/>
                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->




@stop