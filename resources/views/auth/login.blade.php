<link rel="icon" type="image" href="admin/assets/images/logo14.ico">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif



        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div style="font-size: 20px;" class="flex items-center justify-center mt-4">
                <a href="#" class="btn btn-primary">New City Family Care</a>
            </div>


            

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>


            

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="myInput" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-jet-checkbox type="checkbox" onclick="myFunction()" /><span class="ml-2 text-sm text-gray-600">{{ __('Show Password') }}</span>

            </div>


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

            

            <div style="font-size: 12px; color: blue" class="flex items-left justify-left mt-4">
                <a href="{{url('register')}}" class="btn btn-primary">Don't Have an Account ? <br><span>Click to register</span></a>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
