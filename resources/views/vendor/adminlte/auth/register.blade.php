@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page">
    <div id="app">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div style="border-radius: 49px 50px 49px 47px;-moz-border-radius: 49px 50px 49px 47px;-webkit-border-radius: 49px 50px 49px 47px;border: 0px solid #000000;" class="register-box-body">
              <div style="background-color:rgb(6, 107, 226);border-radius: 42px 42px 10px 10px;-moz-border-radius: 42px 42px 10px 10px;-webkit-border-radius: 42px 42px 10px 10px;border: 0px solid #000000;">
                <p style="color:rgb(255, 255, 255);font-size:16pt;" class="login-box-msg">REGISTRO</p>
              </div>
                <form action="{{ url('/register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input style="margin-left: 20px;margin-top: 5px;width:90%;" type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/>
                        <span style="margin-right: 20px;margin-top: 2px;" class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input style="margin-left: 20px;margin-top: 5px;width:90%;" type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                        <span style="margin-right: 20px;margin-top: 2px;" class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input style="margin-left: 20px;margin-top: 5px;width:90%;" type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                        <span style="margin-right: 20px;margin-top: 2px;" class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input style="margin-left: 20px;margin-top: 5px;width:90%;" type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
                        <span style="margin-right: 20px;margin-top: 2px;" class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                      <select style="margin-left: 20px;margin-top: 5px;width:90%;" class="" name="tipo">
                        @foreach($tipos as $t)
                          <option value="{{$t->id}}">{{$t->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>


                    <div class="form-group has-feedback" name="idarea">
                      <select style="margin-left: 20px;margin-top: 5px;width:90%;" class="" name="idarea">
                        @foreach($departamentos as $depar)
                          <option value="{{$depar->iddatoarea}}">{{$depar->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>


                    <div style="margin-top: 5px;margin-bottom: 6px;margin-left: 90px;" class="row">
                        <div class="col-xs-1">
                            <label>
                                <div class="checkbox_register icheck">
                                    <label>
                                        <input type="checkbox" name="terms">
                                    </label>
                                </div>
                            </label>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">TERMINOS</button>
                            </div>
                        </div><!-- /.col -->
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-xs-push-1">
                            <button style="background-color:rgb(6, 107, 226);margin-top: 5px;margin-bottom: 6px;margin-left: 90px;width:90%;" type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                @include('adminlte::auth.partials.social_login')


            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

</body>

@endsection
