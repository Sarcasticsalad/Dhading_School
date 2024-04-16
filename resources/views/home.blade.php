<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deerwalk Dhading School</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="/resources/css/fonts.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
   

</head>
<body class="overflow-x-hidden">
   <header class="bg-white sticky top-0 z-10 shadow-md "> 
    @include('layouts.nav')
   </header>

   <div>
    <img src="{{ asset('pictures/ARCHI_DDS.png') }}" class="object-cover h-screen w-screen">
   </div>

   <div class="mt-11 flex justify-center sm:mt-14 md:mt-16 lg:mt-20 xl:mt-24">
    @include('layouts.schools')
   </div>

   <div class="flex justify-center mt-11 sm:mt-14 md:mt-16 lg:mt-20 xl:mt-24">
    @include('layouts.chooseDSS')
   </div>

   <div class="flex justify-center mt-11 sm:mt-14 md:mt-16 lg:mt-20 xl:mt-24 ">
      {{-- <div class="hidden md:block">
         
      </div> --}}
      <img src="{{ asset('pictures/school_analytics.png') }}" class="object-cover w-[83rem] sm:[48rem] md:w-[54rem] lg:w-[64rem] xl:w-[77rem] 2xl:w-[78rem] h-full">
      {{-- <div class="md:hidden block">
         <img src="{{ asset('pictures/Analytics mobile.png') }}" class="w-full object-cover">
      </div> --}}

   </div>

   <div>
    @include('layouts.admission_procedure')
   </div>

   <div class="mt-11 sm:mt-14 md:mt-16 2xl:mt-32" id="Management">
      @include('layouts.founder_messages')
   </div>

   <div>
    @include('layouts.courses')
   </div>

   <div>
    @include('layouts.units')
   </div>

   <div class=" mt-11 md:mt-20 lg:mt-20 xl:mt-28 2xl:mt-36 2xl:mx-5">
       <a href="https://dlc.dwit.edu.np/"><img src="{{ asset('pictures/DLC banner.jpg') }}" class="2xl:object-scale-down lg:rounded-3xl"></a> 
   </div>

   <div class="mt-11 flex justify-center min-w-screen">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28255.09784256106!2d85.14281347910158!3d27.72076789999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb25dc8f452eaf%3A0xc5ff2d33084a4703!2sDeerwalk%20Dhading%20School!5e0!3m2!1sen!2snp!4v1713259209944!5m2!1sen!2snp" width="2720" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

   <footer class="bg-DDS-blue" id='Footer'>
    @include('layouts.footer')
   </footer>

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
   {{-- <script src={{ mix('/resources/js/hamburger.js') }}></script>
   <script src={{ mix('/resources/js/about_us.js') }}></script> --}}
   @vite('resources/js/app.js')
</body>
</html>
