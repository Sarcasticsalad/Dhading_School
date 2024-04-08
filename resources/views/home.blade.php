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
   <header> 
    @include('layouts.nav')
   </header>

   <div class="mt-6 w-full sm:mt-7 md:mt-8 lg:mt-10 xl:mt-6 2xl:mt-6 bg-cover">
    <img src="{{ asset('pictures/HS.jpg') }}">
   </div>

   <div class="mt-5 py-14 flex justify-center sm:py-20 lg:py-24 xl:py-28">
    @include('layouts.schools')
   </div>

   <div class="py-5 flex justify-center">
    @include('layouts.chooseDSS')
   </div>

   <div>
    @include('layouts.admission_procedure')
   </div>

   <div>
    @include('layouts.courses')
   </div>

   <div>
    @include('layouts.units')
   </div>

   <div class="mt-36">
    <div class="m-24">
        <img src="{{ asset('pictures/DLC banner.jpg') }}" class="rounded-3xl">
    </div>
   </div>

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
   <script src="{{ mix('/resources/js/hamburger.js') }}"></script>
</body>
</html>