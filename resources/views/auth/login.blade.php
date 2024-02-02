<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email
            <input id="email" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div >
            <label for="password" >Password

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

        <div c>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{'Forgot your password?'}}
                </a>
                @endif
                
                <x-primary-button class="ms-3">
                    {{'Log in'}}
                </x-primary-button>
                <br>
                <a href="{{ route('register') }}">
                    {{'Create account ?'}}
                </a>
        </div>
    </form>
</x-guest-layout>
