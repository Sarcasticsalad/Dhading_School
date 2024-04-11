<nav class="flex justify-between ">
   
         <img src="{{ asset('pictures/DDS_logo.png') }}" class="h-[3rem] mt-6 ml-7 sm:h-[3.5rem] sm:ml-10 md:h-[4rem] md:ml-10 lg:h-[4.5rem] lg:ml-16 lg:mt-8 2xl:h-[4.5rem] 2xl:ml-20">
         <div class="nav-links absolute bg-white  mt-6 px-5 top-[60%] lg:top-[50%] pb-8 pt-4 hidden sm:mt-8 sm:px-8 md:mt-12 md:px-10 lg:mt-16 lg:px-16 xl:static xl:block xl:mt-7 2xl:static 2xl:block">
                <div class="flex flex-col mt-1 gap-8 lg:flex-col lg:gap-8 lg:mr-8 xl:flex-row xl:justify-end xl:mr-1">

                    <div class="relative group mt-2">
                        <a href="" id="aboutUsLink" class="font-arial-rounded font-bold text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-2xl">About Us</a>
                        <div class="absolute hidden bg-white w-full top-[95%] mt-14 rounded-lg" id="aboutUsDropdown">
                            <a href="#whyDDS" class="block font-arial-rounded font-bold text-gray-700 hover:text-DDS-blue px-4 py-2 lg:text-2xl text-left">Why DDS</a>
                            <a href="#Management" class="block font-arial-rounded font-bold text-gray-700 hover:text-DDS-blue px-4 py-2 lg:text-2xl text-left">Management</a>
                            <a href="#Units" class="block font-arial-rounded font-bold text-gray-700 hover:text-DDS-blue px-4 py-2 lg:text-2xl text-left">Our Units</a>
                        </div>
                    </div>
                    <a href="#Schools" class="font-arial-rounded font-bold text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-2xl">Academics</a>
                    <a href="#Admission" class="font-arial-rounded font-bold  text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-2xl">Admission</a>
                    <a href="#Courses" class="font-arial-rounded font-bold text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-2xl">Courses</a>
                    <a href="#Footer" class="font-arial-rounded font-bold text-gray-700 hover:text-DDS-blue px-3 py-2 lg:text-2xl">Contact</a>
                </div>
        </div>
        
        <ion-icon name="menu-outline" class="text-4xl mt-8 mr-7 cursor-pointer sm:text-5xl md:text-5xl md:mr-8 md:mt-10 lg:mt-12 lg:mr-16 xl:hidden" onclick="onToggleMenu(this)"></ion-icon>
          
</nav>