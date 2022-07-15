@extends('layouts.templateHtml')

@section('headTitle')
Welcome
@endsection



@section('content')


<div class="bg-hero bg-cover">
    <img src = "{{ URL::asset('images/profilOf.png') }} " class="ml-80">


    <h1 class="font-serif text-4xl ml-40 mt-5">The truth is what Google says about you!</h1>
    <button class="bg-sky-700 hover:bg-sky-600 text-white font-bold py-2 px-4 border border-blue-700 rounded ml-80 mb-20 mt-10 mr-10 w-40">
        Enter</button>
    <button class="bg-sky-700 hover:bg-sky-600 text-white font-bold py-2 px-4 border border-blue-700 rounded w-40">
        Register</button>


</div>

<div class="ml-40 text-center w-9/12">
    <h2 class="font-serif text-4xl mt-20">Welcome to your Website</h2>
        <p class="text-gray-500 sm:text-lg mb-10">
            This space is your space, a space that looks like you and that really reflects what you want to highlight about your personality.
            It complements your CV and cover letter.
            This is your reference!
        </p>
</div>



<!----------------------- Bloc introduction -------------------------------------->

<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
      <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
        <div>
          <div class="h-64 md:h-auto bg-gray-100 overflow-hidden rounded-lg shadow-lg">
            <img src=" {{  URL::asset('images/createProfil.jpeg') }} " loading="lazy" alt="Photo by Martin Sanchez" class="w-full h-full object-cover object-center" />
          </div>
        </div>

        <div class="md:pt-8">
          <p class="text-indigo-500 font-bold text-center md:text-left">Let's go to the Fun</p>

          <h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center md:text-left mb-4 md:mb-6">Create your profile and share it!</h1>

          <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
            You can create your profile by specifying your professional expectations, your soft skills and your personal objectives.
            It's a showcase that reflects your personality contrary to what social networks say about you.
            It complements your CV and cover letter when applying for a job.
          </p>

          <h2 class="text-gray-800 text-xl sm:text-2xl font-semibold text-center md:text-left mb-2 md:mb-4">About us</h2>

          <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
            We are students of Becode which organizes preparatory work for our internships. We are motivated and professional.
            We learned the basics of web development and deepened our knowledge.
            Today, ProfilOf is a preview of what the finished product could be.
            I wish you a good discovery.<br/>
            <button class="bg-sky-700 hover:bg-sky-600 text-white font-bold py-2 px-4 border border-blue-700 rounded ml-60 mt-10 w-40">
                Register</button>
          </p>
        </div>
      </div>
    </div>
  </div>


<!---------------------------Texte de fin ---------------------------------->

<div class="bg-banner2 bg-no-repeat bg-cover">
<div class="ml-40 text-center w-9/12 py-20">
    <h2 class="font-serif text-4xl mt-10 text-slate-200">Learn more</h2>
        <p class=" sm:text-lg mt-5 text-slate-200	">
            Be among the first to create your profile and share it each time you are asked for your site.
            Do not hesitate to promote yourself to your future boss,
            a business or human resources department.
            This is where you can express yourself.
        </p>
            <button class="bg-white hover:bg-sky-600 text-sky-700 font-bold py-2 px-4 border border-blue-700 rounded mt-10 w-40">
                Register</button>
</div>
</div>


<!--------------------------- Temoiniages ---------------------------------->


<div class="bg-white py-6 sm:py-8 lg:py-20">
    <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-8 md:mb-12">What others say about us</h2>

      <div class="grid md:grid-cols-2 gap-4 md:gap-8">
        <!-- quote - start -->
        <div class="flex flex-col items-center bg-sky-700 rounded-lg gap-4 md:gap-6 px-8 py-6">
          <div class="max-w-md text-white lg:text-lg text-center">“This little text to tell you that this site is super fun. Continue like that !.”</div>

          <div class="flex flex-col sm:flex-row items-center gap-2 md:gap-3">
            <div class="w-12 md:w-14 h-12 md:h-14 bg-gray-100 border-2 border-indigo-100 rounded-full overflow-hidden">
              <img src="https://images.unsplash.com/photo-1567515004624-219c11d31f2e??auto=format&q=75&fit=crop&w=112" loading="lazy" alt="Photo by Radu Florin" class="w-full h-full object-cover object-center" />
            </div>

            <div>
              <div class="text-indigo-50 text-sm md:text-base font-bold text-center sm:text-left">John McCulling</div>
              <p class="text-indigo-200 text-sm md:text-sm text-center sm:text-left">CEO / Datadrift</p>
            </div>
          </div>
        </div>
        <!-- quote - end -->

        <!-- quote - start -->
        <div class="flex flex-col items-center bg-sky-700 rounded-lg gap-4 md:gap-6 px-8 py-6">
          <div class="max-w-md text-white lg:text-lg text-center">“I don't often write reviews, but I outdid myself for this one. Thank you !”</div>

          <div class="flex flex-col sm:flex-row items-center gap-2 md:gap-3">
            <div class="w-12 md:w-14 h-12 md:h-14 bg-gray-100 border-2 border-indigo-100 rounded-full overflow-hidden">
              <img src="https://images.unsplash.com/photo-1532073150508-0c1df022bdd1?auto=format&q=75&fit=crop&w=112" loading="lazy" alt="Photo by christian ferrer" class="w-full h-full object-cover object-center" />
            </div>

            <div>
              <div class="text-indigo-50 text-sm md:text-base font-bold text-center sm:text-left">Kate Berg</div>
              <p class="text-indigo-200 text-sm md:text-sm text-center sm:text-left">CFO / Dashdash</p>
            </div>
          </div>
        </div>
        <!-- quote - end -->
      </div>
    </div>
  </div>

@endsection


