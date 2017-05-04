@extends('layouts.app-auth')

@section('title', 'Recuperar Senha')

@section('content')

 <div class="mt-login">
        @if (session('status'))
            <div class="has-error">{{ session('status') }}</div>
        @endif

        <div class="mt-logo">
            <div class="mentoring-icon logoicon logoicon--mentoring"></div>
            <h2 class="mt-heading">Mentoring</h2>
        </div>

        <div class="mt-login-content">

            <form method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}
                <div class="form-email{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" name="email" type="text" class="email" placeholder="E-mail" value="{{ old('email') }}" />
                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>          

                <div class="mt-login-btn">
                    <div class="submit">
                        <input type="submit" value="RECUPERAR"/>
                    </div>
                            
                    <div class="clear"></div>
                </div>
            </form>
        </div>
    </div>

    <div class="clear"></div>

    <div class="mt-registro">
        <ul>
            <li><p>Faça <a href="{{ url('/login') }}">login.</a></p></li>
            <span>|</span>
            <li><p>Não possui <a href="{{ url('/register') }}">conta?</a></p></li>
            <div class="clear"></div>
        </ul>
    </div>

@endsection
