<nav class="flex justify-between h-16 md:h-20 ">

    <a target="_blank" href="/" class="w-96 h-0">
    <img src="{{ asset('pictures/DDS.png') }}"
         class="h-[2.3rem] mt-4 pl-7 sm:h-[2.3rem] sm:ml-10 md:h-[3rem] md:ml-10 lg:h-[3rem] lg:pl-16 lg:mt-4 2xl:h-[2.7rem] 2xl:ml-20 2xl:mt-[1.2rem]">
</a>
    {{-- <img src="{{ asset('pictures/DDS_logo.png') }}" class="h-[2.3rem] mt-4 pl-7 sm:h-[2.3rem] sm:ml-10 md:h-[3rem] md:ml-10 lg:h-[3rem] lg:pl-16 lg:mt-4 2xl:h-[2.7rem] 2xl:ml-20 2xl:mt-5">    --}}
    <div
        class="nav-links flex items-center absolute hidden bg-white w-screen px-5 top-[100%] lg:top-[90%] pb-8 pt-4 sm:px-8  md:px-10 lg:px-16 lg:static lg:block  xl:block  2xl:block ">
        <div
            class="flex flex-col items-center lg:justify-end mt-1 gap-8 lg:flex-row lg:gap-4 lg:mr-8 xl:flex-row xl:justify-end xl:gap-8 w-full">
            <div class=" flex items-center">
                <a target="_blank" href="" id="aboutUsLink"
                    class="font-arialBold font-bold text-gray-700 hover:text-DDS-blue px-4 py-2 lg:text-sm xl:text-base">About
                    Us</a>
                <div class="absolute hidden flex flex-col shadow-md shadow-black xl:border-2 border-DDS-blue bg-white w-40 h-[6.5rem] lg:mt-20 xl:mt-6  top-[69%] lg:top-[2%] xl:top-[69%] 2xl:top-[69%] rounded-md"
                    id="aboutUsDropdown">
                    <a target="_blank" href="#whyDDS"
                        class="block font-arialBold font-bold text-gray-700 hover:text-DDS-blue  lg:text-sm xl:text-base text-justify pl-6 py-1 border">Why
                        DDS</a>
                    <a target="_blank" href="#Management"
                        class="block font-arialBold font-bold text-gray-700 hover:text-DDS-blue  lg:text-sm xl:text-base text-justify pl-6 py-1 border">Management</a>
                    <a target="_blank" href="#Units"
                        class="block font-arialBold font-bold text-gray-700 hover:text-DDS-blue  lg:text-sm xl:text-base text-justify pl-6 py-1 border">Our
                        Units</a>
                </div>
            </div>
            <a target="_blank" href="#Academics"
                class="font-arialBold font-bold text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-sm xl:text-base">Academics</a>
            <a target="_blank" href="#Admission"
                class="font-arialBold font-bold  text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-sm xl:text-base">Admission</a>
            <a target="_blank" href="#Courses"
                class="font-arialBold font-bold text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-sm xl:text-base">Courses</a>
            <a target="_blank" href="#Footer"
                class="font-arialBold font-bold text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-sm xl:text-base">Contact</a>
        </div>
    </div>

    {{-- <ion-icon name="menu-outline" class="text-4xl mt-4 mr-7 w-6 sm:mt-3 md:mt-5 cursor-pointer sm:text-5xl md:text-5xl md:mr-8 lg:mr-16 xl:hidden" onclick="toggleMenu(this)"></ion-icon> --}}

</nav>
