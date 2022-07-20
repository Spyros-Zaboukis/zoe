
@extends('layouts.dashboardLayout')



@section('content')
<!--------------------------- Section title --------------------------------------------------------->

<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
      <p class="text-indigo-500 lg:text-lg font-semibold text-center mb-2 md:mb-3">Congradulation !</p>

      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Create your Profil here !</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
        Enter your information to create your profil. After, submit your data with the button and take fun. Your profil is public and
        much peaple can acces it. Please stay serious.</p>
    </div>
  </div>



<!------------------------------------ FORM ---------------------------------------------------------------->


      <!-- form - start -->

      <form method="POST" action="{{ route('myFormStore') }}" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">

        @csrf


<!---------- name and lastname ------------>


        <div>
          <label for="firstName" class="inline-block text-gray-800 text-sm sm:text-base mb-2">
            First name*</label>
          <input type="text" name="firstName" id="firstName" placeholder="Your first name"
          class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2 form-control @error('first-name')  is invalid @enderror”  value="{{ old('first-name') }}” />

        <!--- error event --->
            @error('firsName')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


<!---------->

        <div>
          <label for="lastName" class="inline-block text-gray-800 text-sm sm:text-base mb-2">
            Last name*</label>
          <input type="text" name="lastName" id="last-name" placeholder="Last name"
          class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2 form-control @error('last-name')  is invalid @enderror”  value="{{ old('last-name') }}” />

          <!--- error event --->
          @error('lastName')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


<!---------------- gender ------------------>


        <div>
            <label for="gender" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Gender*</label>
            <select name="gender" id="gender"
            class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required>
                <option value="">--Please choose your gender--</option>
                <option value="dog">Man</option>
                <option value="cat">Woman</option>
                <option value="hamster">X</option>
                <option value="parrot">Other</option>
            </select>

        </div>


<!---------------- birthday ------------------>

          <div>
            <label for="birthday" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Birthday*</label>
            <input type="date" name="first-name" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required />
          </div>


<!---------------- Email ------------------>
        <div class="sm:col-span-2">
          <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Email*</label>
          <input name="email" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2  form-control @error('email') is invalid @enderror”  value="{{ old('email') }}” placeholder="EnterYour@email.com" />

            @error('email')
		        <div class="invalid-feedback">{{ $message }}</div>
	        @enderror
        </div>

<!---------------- Profession ------------------>

        <div class="sm:col-span-2">
            <label for="company" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Company*</label>
            <input name="company" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2 form-control @error('company') is invalid @enderror”  value="{{ old('company') }}” placeholder="Company name" />

                @error('company')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

<!---------------- About me ------------------>


        <div class="sm:col-span-2">
          <label for="message" class="inline-block text-gray-800 text-sm sm:text-base mb-2 form-control @error('message') is invalid @enderror”  value="{{ old('message') }}”>Aboout me*</label>
            <textarea name="message" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2 form-control @error('message') is invalid @enderror”  value="{{ old('message') }}” required>
            </textarea>
                @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>


<!----------------  Submit ------------------>

        <div class="sm:col-span-2 flex justify-between items-center">
          <button class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Send</button>

        <!-- info -->
          <span class="text-gray-500 text-sm">*Required</span>
        </div>

        <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p>
      </form>
        <!-- form end -->

    </div>
  </div>
  @endsection
