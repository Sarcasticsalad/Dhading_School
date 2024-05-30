{{-- For Smaller Screens --}}

<div class="lg:hidden py-10">

    <div class="flex flex-col gap-5 justify-start">

        <div class="pl-7">
            <p class="font-arial-rounded font-normal text-sm sm:text-base text-white">Contact Us</p>
        </div>

        <div class="flex flex-col gap-3">

            <div class="flex flex-row gap-2 pl-7">
                <img src="{{ asset('pictures/pin.png') }}" class="w-4">
                <p class="font-arial-rounded font-normal text-xs text-white">Dhunibesi-9, Dhading, Nepal</p>
            </div>

            <div class="flex flex-row gap-2 pl-7">
                <img src="{{ asset('pictures/telephone.png') }}" class="w-4">
                <p class="font-arial-rounded font-normal text-xs text-white">9767220526</p>
            </div>

            <div class="flex flex-row gap-2 pl-7">
                <img src="{{ asset('pictures/mail.png') }}" class="w-4">
                <p class="font-arial-rounded font-normal text-xs text-white">contact@deerwalk.edu.np</p>
            </div>

        </div>

    </div>

    <div class="flex flex-col gap-2">
        <p class="font-arial-rounded font-normal text-sm text-white pl-7 pt-9">Follow Us</p>

        <div class="flex flex-row pl-7 gap-3">
            <a target="_blank" href="https://www.instagram.com/deerwalk_dhading_school/"><img
                    src="{{ asset('pictures/instagram.png') }}" class="w-5 cursor-pointer"></a>
            <a target="_blank" href="https://www.facebook.com/profile.php?id=61557434263234"><img
                    src="{{ asset('pictures/facebook-app-symbol.png') }}" class="w-5 cursor-pointer"></a>
            <a target="_blank" href="https://twitter.com/DWDhadingSchool"><img src="{{ asset('pictures/X.png') }}"
                    class="w-5 cursor-pointer"></a>
            <a target="_blank" href="https://www.linkedin.com/company/deerwalk-dhading-school/"><img
                    src="{{ asset('pictures/linkedin.png') }}" class="w-5 cursor-pointer"></a>
        </div>
    </div>

    <div class="pt-9 pl-6">
        <img src="{{ asset('pictures/DDS white.png') }}" class="w-[8.6rem]">
    </div>

    <div class="flex flex-row gap-1 items-center pl-7 pt-6">

        <div class="flex flex-row items-start gap-1">
            <p class="text-white text-xs">©</p>
            <div class="flex flex-col">
                <p class="font-arialRegular text-xs/4 text-white md:text-xs/4 xl:text-base 2xl:text-xl text-center">
                    <span id="mobCurrentYear"></span> Deerwalk Dhading School.
                </p>
                <p class="font-arialRegular text-xs/4 text-white md:text-xs/4 xl:text-base 2xl:text-xl">All Rights
                    Reserved.</p>
            </div>
        </div>

    </div>

</div>



{{-- For Larger Screens --}}

<div class="hidden lg:block pt-10 pb-10">

    <div class="flex flex-col lg:gap-14 xl:gap-14 2xl:gap-14">

        <div class="flex flex-row justify-around">

            <div class="flex flex-col md:gap-3 lg:gap-4 xl:gap-6 2xl:gap-6">
                <a target="_blank" href="#whyDDS">
                    <p
                        class="font-arialRegular font-bold md:text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left hover:text-gray-900">
                        Why DDS</p>
                </a>
                <a target="_blank" href="#Units">
                    <p
                        class="font-arialRegular font-bold md:text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left hover:text-gray-900">
                        Our Units</p>
                </a>
                <a target="_blank" href="#Management">
                    <p
                        class="font-arialRegular font-bold md:text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left hover:text-gray-900">
                        Management</p>
                </a>
            </div>

            <div class="flex flex-col  ml-14 md:gap-3 lg:gap-4 xl:gap-6 2xl:gap-6">
                <a target="_blank" href="#Courses">
                    <p
                        class="font-arialRegular font-bold md:text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left hover:text-gray-900 ">
                        Courses</p>
                </a>
                <a target="_blank" href="#Academics">
                    <p
                        class="font-arialRegular font-bold md:text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left hover:text-gray-900">
                        Academics</p>
                </a>
                <a target="_blank" href="#Admission">
                    <p
                        class="font-arialRegular font-bold md:text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left hover:text-gray-900">
                        Admission</p>
                </a>
            </div>

            <div class="flex flex-col md:gap-3 lg:gap-4 xl:gap-6 2xl:gap-6">
                <p class="font-arialRegular font-normal md:text-sm xl:text-sm 2xl:text-lg text-white text-left">
                    Dhunibesi-9, Dhading, Nepal</p>
                <p class="font-arialRegular font-normal md:text-sm xl:text-sm 2xl:text-lg text-white text-left">
                    9767220526</p>
                <p class="font-arialRegular font-normal md:text-sm xl:text-sm 2xl:text-lg text-white text-left">
                    contact@deerwalk.edu.np</p>
            </div>

        </div>


        <div class="flex flex-col gap-4 md:flex-row md:justify-around">

            <div class=" flex items-center justify-center">
                <img src="{{ asset('pictures/DDS white.png') }}"
                    class="object-fit w-[10rem] md:w-[12rem] lg:w-[12rem] xl:w-[12rem] 2xl:w-52">
            </div>

            <div
                class="flex justify-center gap-2 lg:flex-row items-center md:gap-2 lg:gap-2 xl:pl-4 xl:gap-2 2xl:gap-4">

                <div class="flex flex-row items-center justify-center gap-2">
                    <p class="text-white text-lg">©</p>
                    <div class="flex flex-col">
                        <p class="font-arialRegular text-xs/4 text-white md:text-xs lg:text-xs xl:text-xs 2xl:text-xs">
                            <span id='currentYear'></span> Deerwalk Dhading School.
                        </p>
                        <p class="font-arialRegular text-xs/4 text-white md:text-xs lg:text-xs xl:text-xs 2xl:text-xs">
                            All Rights Reserved.</p>
                    </div>
                </div>



            </div>


            <div
                class="flex justify-center gap-3 lg:flex-row md:gap-4 lg:gap-6 xl:gap-6 2xl:gap-9 lg:justify-center items-center lg:mr-[2.8rem] xl:mr-12 2xl:mr-9 ">
                <a target="_blank" href="https://www.instagram.com/deerwalk_dhading_school/"><img
                        src="{{ asset('pictures/instagram.png') }}"
                        class="w-5 lg:w-7 xl:w-7 2xl:w-8 cursor-pointer"></a>
                <a target="_blank" href="https://www.facebook.com/profile.php?id=61557434263234"><img
                        src="{{ asset('pictures/facebook-app-symbol.png') }}"
                        class="w-5 lg:w-7 xl:w-7 2xl:w-8 cursor-pointer"></a>
                <a target="_blank" href="https://twitter.com/DWDhadingSchool"><img src="{{ asset('pictures/X.png') }}"
                        class="w-5 lg:w-7 xl:w-6 2xl:w-8 cursor-pointer"></a>
                <a target="_blank" href="https://www.linkedin.com/company/deerwalk-dhading-school/"><img
                        src="{{ asset('pictures/linkedin.png') }}"
                        class="w-5 lg:w-7 xl:w-7 2xl:w-8 cursor-pointer"></a>

            </div>


        </div>

    </div>
