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
    @include('layouts.popup')
    <div>
        <img src="{{ asset('pictures/bg.jpg') }}" class="object-cover h-screen w-screen">
    </div>

    <div class="pt-11 flex justify-center sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24" id="Academics">
        @include('layouts.schools')
    </div>

    <div class="flex justify-center pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24" id="whyDDS">
        @include('layouts.chooseDSS')
    </div>

    <div class="flex justify-center pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24">

        <div class="md:hidden w-full">
            <img src="{{ asset('pictures/Analytics_mobile.png') }}" class="object-cover w-full px-6">
        </div>

        <div class="hidden md:block">
            <img src="{{ asset('pictures/Analytics.png') }}" class="object-cover w-full px-16">
        </div>

    </div>

    <div id="Admission">
        @include('layouts.admission_procedure')
    </div>

    <div class="pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24 2xl:pt-28" id="Management">
        @include('layouts.founder_messages')
    </div>

    <div id="Courses">
        @include('layouts.courses')
    </div>

    <div id="Units">
        @include('layouts.units')
    </div>

    <div class=" pt-11 md:pt-20 lg:pt-20 xl:pt-24 2xl:pt-28 flex justify-center items-center w-full md:px-16">
        <a target="_blank" href="https://dlc.dwit.edu.np/"><img src="{{ asset('pictures/Updated_DLC_Banner.png') }}"
                class="object-cover w-full md:rounded-3xl"></a>
    </div>

    <div class="pt-11 2xl:pt-14 flex justify-center min-w-screen">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28255.09784256106!2d85.14281347910158!3d27.72076789999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb25dc8f452eaf%3A0xc5ff2d33084a4703!2sDeerwalk%20Dhading%20School!5e0!3m2!1sen!2snp!4v1713259209944!5m2!1sen!2snp"
            width="2720" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <footer class="bg-DDS-blue" id='Footer'>
        @include('layouts.footer')
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- <script src={{ mix('/resources/js/hamburger.js') }}></script>
   <script src={{ mix('/resources/js/about_us.js') }}></script> --}}
    <script>
        const aboutUsLink = document.getElementById('aboutUsLink');
        const aboutUsDropdown = document.getElementById('aboutUsDropdown');
        const aboutUsDropdownLinks = aboutUsDropdown.querySelectorAll('a');



        aboutUsLink.addEventListener('click', function(event) {
            event.preventDefault();
            aboutUsDropdown.classList.toggle('hidden');

        });

        document.addEventListener('click', function(event) {
            if (event.target !== aboutUsLink && !aboutUsDropdown.contains(event.target)) {
                aboutUsDropdown.classList.add('hidden');
            }
        });

        for (const link of aboutUsDropdownLinks) {
            link.addEventListener('click', function(event) {
                aboutUsDropdown.classList.add('hidden');
            });
        }


        const today = new Date();
        const year = today.getFullYear();
        document.getElementById('currentYear').innerText = year;
        document.getElementById('mobCurrentYear').innerText = year;

        const navLinks = document.querySelector('.nav-links');
        // const menuIcon = document.querySelector('.ion-icon')

        let isMenuOpen = false;

        function toggleMenu(e) {
            isMenuOpen = !isMenuOpen;
            e.name = e.name === 'close' ? 'menu' : 'close'

            navLinks.classList.toggle('hidden');

        }





        // function onToggleMenu(e){
        //     e.name = e.name === 'close' ? 'menu' : 'close'

        //     navLinks.classList.toggle('hidden');        
        // }
    </script>

</body>

</html>
