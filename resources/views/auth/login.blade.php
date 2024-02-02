<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status status="{{session('status')}}" />

    <form method="POST" action="{{ route('login') }}" >
        @csrf

        <!-- Email Address -->
        <div class="w3-padding" >
            <label for="email">E-mail
            <input id="email" type="email" value="{{old('email')}}" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="w3-padding">
            <label for="password">Password
            <input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Remember Me -->
        <div>
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span >{{'Remember me'}}</span>
            </label>
        </div>

        <div class="w3-padding">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{'Forgot your password?'}}
                </a>
                @endif
                
                <x-primary-button>
                    {{'Log in'}}
                </x-primary-button>
                <br>
                <a href="{{ route('register') }}">
                    {{'Create account ?'}}
                </a>
        </div>
    </form>
</x-guest-layout>
