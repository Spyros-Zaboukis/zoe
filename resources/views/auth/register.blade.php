<x-guest-layout>
    <x-auth-card>

<!-------------------------------- spy ajout de texte ---------------------------------->
<section class="flex flex-col items-center">
    <div class="max-w-xl flex flex-col items-center text-center pt-3 lg:pt-8 pb-4 lg:pb-6">
      <p class="text-indigo-500 md:text-lg xl:text-xl font-semibold mb-4 md:mb-4">Enter your email & password </p>

      <h1 class="text-black-800 text-4xl sm:text-5xl md:text-6xl font-bold mb-4 md:mb-4">Register In ProfilOf</h1>
    </div>
  </section>






<!-------------------------------------------------------------------------------------->



        <x-slot name="logo">
            <a href="/">


                <!--------- Spyros logo profilOf  --------------------------------------------------------------------->
                <!--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />----------------------------->

                <img src=" {{ URL::asset('images/profilOf.png')}} " class="ml-10"/>

            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-sky-600 hover:text-sky-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
