<link rel="icon" type="image" href="admin/assets/images/logo14.ico">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div style="font-size: 20px;" class="flex items-center justify-center mt-1">
                <a href="#" class="btn btn-primary">New City Family Care</a>
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Last Name') }}"  />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="E.G. DELA CRUZ" :value="old('name')" required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="fullname" value="{{ __('First Name') }}" />
                <x-jet-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" placeholder="E.G JOSE MARIO" :value="old('fullname')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="mname" value="{{ __('Middle Name') }}" />
                <x-jet-input id="mname" class="block mt-1 w-full" type="text" name="mname" placeholder="E.G DELOS SANTOS" :value="old('mname')" required  />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="email@gmail.com" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone" maxlength="11" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-jet-label for="birthdate" value="{{ __('Birth Date') }}" />
                <x-jet-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="birthdate" />
            </div>

            <div class="mt-4">
                <x-jet-label for="age" value="{{ __('Age') }}" />
                <x-jet-input id="age" class="block mt-1 w-full" type="number" name="age" maxlength="2" :value="old('age')" required autofocus autocomplete="age" />
            </div>

            <div class="mt-4">
                <x-jet-label for="sex" value="{{ __('Gender') }}" />
                <select name="sex" id="sex" class="block mt-1 w-full">
                <option selected disabled>--- Select your gender ---</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>



                
            </div>

            <div class="mt-4">
                <x-jet-label for="civil" value="{{ __('Civil Status') }}" />
                <select name="civil" id="civil" class="block mt-1 w-full">
                <option selected disabled>--- Select your civil status ---</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Separated">Separated</option>
                </select>

            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

<script>
	
	document.querySelectorAll('input[type="number"]').forEach(input =>{
		input.oninput = () =>{
			if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
		};
	});
</script>
