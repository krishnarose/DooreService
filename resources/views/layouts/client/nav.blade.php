<nav class="bg-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="#">
            <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_category/w_144,dpr_1,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/home-screen/1687285683825-e6cf23.jpeg"
                alt="" class="ml-16 cursor-pointer">
        </a>

        <!-- Mobile menu button -->
        <button id="mobile-menu-btn" class="text-black focus:outline-none md:hidden">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg> --}}
        </button>

        <!-- Desktop menu -->
        @if (Auth::user())

            <div class="relative inline-block">
                <button id="profileBtn" class="focus:outline-none">
                    <div class="h-10 w-10 rounded-full bg-gray-500 flex items-center justify-center"><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-lunvQ7aMq702rq3jKpVbPfRN-Srb52eiow&s"
                            alt="" class="rounded-full">

                    </div>
                </button>
                <div id="profileDropdownContent"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        @else


        <div class=" md:flex space-x-4 items-center">
            <a href="#"
                class="text-black bg-white shadow-lg hover:bg-gray-100 px-7 py-2 rounded-md font-semibold">Login</a>

           

        </div>

        @endif
    </div>


</nav>
