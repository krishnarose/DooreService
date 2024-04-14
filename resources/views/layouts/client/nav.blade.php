<nav class="bg-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="#">
            <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_category/w_144,dpr_1,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/home-screen/1687285683825-e6cf23.jpeg"
            alt=""

            class="ml-16 cursor-pointer">
        </a>

        {{-- <a href="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_category/w_144,dpr_1,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/home-screen/1687285683825-e6cf23.jpeg" class="text-white text-xl font-bold">Logo</a> --}}

        <!-- Mobile menu button -->
        <button id="mobile-menu-btn" class="text-black focus:outline-none md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Desktop menu -->
        <div class="hidden md:flex space-x-4">
            {{-- <a href="#" class="text-white">Home</a>
            <a href="#" class="text-white">Gallery</a>
            <a href="#" class="text-white">Login</a> --}}
            <a  href="#" class="text-black bg-white shadow-lg hover:bg-gray-100 px-7 py-2 mr-16 rounded-md font-semibold ">Loing</a>

            <!-- Dropdown menu -->
            {{-- <div class="relative" id="profileDropdown">
                <button id="profileBtn" class="text-white">Profile</button>
                <div id="profileDropdownContent" class="absolute right-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg py-1 hidden">
                    <a href="#" class="block px-4 py-2 text-white">Settings</a>
                    <a href="#" class="block px-4 py-2 text-white">Logout</a>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden">
        {{-- <a href="#" class="block px-4 py-2 text-white">Home</a>
        <a href="#" class="block px-4 py-2 text-white">Gallery</a>
        <a href="#" class="block px-4 py-2 text-white">Login</a> --}}
        <a  href="#" class="text-black bg-white shadow-lg hover:bg-gray-100 px-7 py-2 mr-16 rounded-md font-semibold ">Loing</a>

        {{-- <div class="relative" id="profileDropdownMobile">
            <button id="profileBtnMobile" class="block px-4 py-2 text-white">Profile</button>
            <div id="profileDropdownContentMobile" class="absolute right-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg py-1 hidden">
                <a href="#" class="block px-4 py-2 text-white">Settings</a>
                <a href="#" class="block px-4 py-2 text-white">Logout</a>
            </div>
        </div> --}}
    </div>
</nav>
