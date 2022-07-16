<x-guest-layout>
    <x-auth-card>

<!-------------------------------- spy ajout de texte ---------------------------------->
<section class="flex flex-col items-center">
    <div class="max-w-xl flex flex-col items-center text-center pt-3 lg:pt-8 pb-4 lg:pb-6">
      <p class="text-indigo-500 md:text-lg xl:text-xl font-semibold mb-4 md:mb-4">Confirm your email & password </p>

      <h1 class="text-black-800 text-4xl sm:text-5xl md:text-6xl font-bold mb-4 md:mb-4">Confirm Your Email</h1>
    </div>
  </section>






<!-------------------------------------------------------------------------------------->






        <x-slot name="logo">
            <a href="/">
               <!---   <x-application-logo class="w-20 h-20 fill-current text-gray-500" />  --->
               <img src=" {{ URL::asset('images/profilOf.png')}} " class="ml-10"/>

            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
