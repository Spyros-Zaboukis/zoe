<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

<!--------------------------- Section title --------------------------------------------------------->

<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
      <p class="text-indigo-500 lg:text-lg font-semibold text-center mb-2 md:mb-3">Introducing</p>

      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Welcome to your personal space.</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
        This area is where you can create and manage your profile. Feel free to read the documentation or watch Youtube tutorials.
        The picture is very important today and we advise you to choose good ones. I wish you good luck for the future.</p>
    </div>
  </div>

  <!--------------------------------------- create profil -------------------------------------------->


  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
      <div class="flex flex-col sm:flex-row justify-between items-center bg-gray-100 rounded-lg gap-4 p-4 md:p-8">
        <div>
          <h2 class="text-indigo-500 text-xl md:text-2xl font-bold">Create your profil</h2>
          <p class="text-gray-600">Simple and Easy</p>
        </div>

        <a href=" {{ route('myForm')}} " class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Start now</a>
      </div>
    </div>
  </div>
  <!------------------------------------------------------------------------------------------------->

  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-md px-4 md:px-8 mx-auto">
      <h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center mb-4 md:mb-6">Your profiles</h1>
    </div>
  </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
