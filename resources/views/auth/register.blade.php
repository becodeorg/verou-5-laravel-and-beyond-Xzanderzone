<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <label for="name"> Name
            <input id="name"  type="text" name="name" value="{{old('name')}}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email">E-mail
            <input id="email"  type="email" name="email" value="{{old('email')}}" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password

            <input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="w3-padding">
            <label for="password_confirmation" >Confirm Password

            <input id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

                <div class="w3-padding">
            <a href="{{ route('login') }}">
                {{'Already registered?'}}
            </a>

            <x-primary-button>
                {{'Register'}}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
