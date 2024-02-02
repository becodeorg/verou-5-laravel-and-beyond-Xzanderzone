<section class="w3-card w3-row-padding w3-center w3-margin-top">
        <h2 >{{'Delete Account'}}</h2>
        <p>
            {{ 'Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' }}
        </p>
    <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('deleteButton').style.display='block'" style="font-weight:900;">Delete Account</button>

    <div id='deleteButton'  class="w3-modal" name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="w3-card w3-row-padding w3-center w3-margin-top">
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')
            <h2>
                {{'Are you sure you want to delete your account?'}}
            </h2>
            <p>{{'Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.'}}</p>

                <label for="password" value="{{ 'Password' }}">
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{'Password'}}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" />

                <button click="dispatch('close')">
                    {{'Cancel'}}
                </button>
                <button>
                    {{'Delete Account'}}
                </button>
        </form>
    </div>
    </div>
</section>
