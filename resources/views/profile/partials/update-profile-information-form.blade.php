<section class="w3-card w3-row-padding w3-center w3-margin-top">
    <header>
        <h2>
            {{ 'Profile Information'}}
        </h2>

        <p>
            {{ "Update your account's profile information and email address."}}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="w3-row-padding w3-center w3-margin-top">
            <x-input-label for="name" :value="'Name'" />
            <x-text-input id="name" name="name" type="text" value="{{old('name', $user->name)}}" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="w3-row-padding w3-center w3-margin-top">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" value="{{old('email', $user->email)}}" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p>
                        {{'Your email address is unverified.'}}

                        <button form="send-verification">
                            {{'Click here to re-send the verification email.'}}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p>
                            {{'A new verification link has been sent to your email address.'}}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="w3-row-padding w3-center w3-margin-top">
            <x-primary-button>{{'Save'}}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{'Saved.'}}</p>
            @endif
        </div>
    </form>
</section>
