@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body>
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
        <div class="form-structor">
          <form action="{{ url('/register') }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="signup">
              <h2 class="form-title" id="signup"><span>-></span>REGISTRAR</h2>
              <div class="form-holder">
                <input type="text" class="input" placeholder="Name" name="name"/>
                <input type="email" class="input" placeholder="Email" name="email"/>
                <input type="password" class="input" placeholder="Password"  name="password"/>
                <input type="password" class="input" placeholder="RepetPassword"  name="password_confirmation"/>
                <select class="input" name="tipo">
                  @foreach($tipos as $t)
                    <option value="{{$t->id}}">{{$t->descripcion}}</option>
                  @endforeach
                </select>
                <select class="input" name="idarea">
                  @foreach($departamentos as $depar)
                    <option value="{{$depar->iddatoarea}}">{{$depar->descripcion}}</option>
                  @endforeach
                </select>
                <input type="checkbox" name="terms" checked>
              </div>
              <button class="submit-btn">REGISTAR</button>
            </div>
          </form>
          <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="login slide-up">
              <div class="center">
                <h2 class="form-title" id="login"><span>ACCESAR</span>INICIAR</h2>
                <div class="form-holder">
                  <input type="email" class="input" placeholder="Email" name="email" />
                  <input type="password" class="input" placeholder="Password" name="password"/>
                </div>
                <button type="submit" class="submit-btn">INGRESAR</button>
              </div>
            </div>
          </form>
        </div>
        <!-- <div style="border-radius: 49px 50px 49px 47px;-moz-border-radius: 49px 50px 49px 47px;-webkit-border-radius: 49px 50px 49px 47px;border: 0px solid #000000;" class="login-box-body">
          <div style="background-color:rgb(6, 107, 226);border-radius: 42px 42px 10px 10px;-moz-border-radius: 42px 42px 10px 10px;-webkit-border-radius: 42px 42px 10px 10px;border: 0px solid #000000;">
            <p style="color:rgb(255, 255, 255);font-size:16pt;" class="login-box-msg"><b>LOGIN</b></p>
          </div>
        <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input style="margin-left: 20px;margin-top: 50px;width:90%;"  type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"/>
                <span style="margin-right: 20px;margin-top: 2px;" class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input style="margin-left: 20px;margin-top: 40px;width:90%;" type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                <span style="margin-right: 20px;margin-top: 2px;" class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-10">
                    <button style="background-color:rgb(6, 107, 226);margin-top: 30px;margin-bottom: 60px;margin-left: 50px;width:90%;" type="submit" class="btn btn-primary btn-block btn-flat">INGRESAR</button>
                </div>
                <div class="col-xs-10">
                    <a style="background-color:rgb(6, 107, 226);margin-top: 4px;margin-bottom: 60px;margin-left: 50px;width:90%;" class="btn btn-primary btn-block btn-flat" href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a>
                </div>
            </div>
        </form>
    </div> -->

    @include('adminlte::layouts.partials.scripts_auth')
    <script src="{{asset('js/sistemlogin.js')}}"></script>

    <script>
      document.oncontextmenu = function(){return false;}
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
