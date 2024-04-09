<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body>
   <header class="bg-white sticky top-0 z-10 shadow-md pb-8"> 
    @include('layouts.nav')
   </header>

   <div class="min-h-screen lg:w-full">
    <img src="{{ asset('pictures/ARCHI_DDS.png') }}" class="object-cover min-h-screen ">
   </div>

   <div class="mt-8 flex justify-center sm:mt-12 lg:mt-24 xl:mt-32">
    @include('layouts.schools')
   </div>

   <div class="py-5 flex justify-center">
    @include('layouts.chooseDSS')
   </div>

   <div class="flex justify-center mt-16">
      <div class="px-10">
         <img src="{{ asset('pictures/school_analytics.png') }}" class="object-cover 2xl:w-[100rem] ">
      </div>
   </div>

   <div>
    @include('layouts.admission_procedure')
   </div>

   <div class="mt-32" id="Management">
      @include('layouts.founder_messages')
   </div>

   <div>
    @include('layouts.courses')
   </div>

   <div>
    @include('layouts.units')
   </div>

   <div class=" md:mt-20 lg:mt-20 xl:mt-28 2xl:mt-36">
    <div class=" m-12 md:m-12 lg:m-12 xl:m-16 2xl:m-24">
       <a href="https://dlc.dwit.edu.np/"><img src="{{ asset('pictures/DLC banner.jpg') }}" class="rounded-3xl object-cover"></a> 
    </div>
   </div>

   <div class="flex justify-center w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1512244635464!2d85.3399280751816!3d27.712616776179456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1970d2e43e4b%3A0x946fac63019d2903!2sDeerwalk%20Institute%20of%20Technology!5e0!3m2!1sen!2snp!4v1712567217265!5m2!1sen!2snp" width="2720" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

   <footer class="bg-DDS-blue py-16">
    @include('layouts.footer')
   </footer>

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
   <script src="{{ mix('/resources/js/hamburger.js') }}"></script>
   <script src="{{ mix('/resources/js/about_us.js') }}"></script>
</body>
</html>