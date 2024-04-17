<nav class="sticky top-0 z-30 bg-zinc-100 p-4 shadow-md flex items-center justify-between" style="height: 60px;">
    <div class="flex items-center gap-5">
        <div style="z-index: 1;"> <!-- Increase z-index to ensure logo is on top -->
            <img src="{{ asset('client/img/log.jpeg') }}" alt="" class="w-[70px]">
        </div>
        <div class="text-2xl font-bold  ">
            <a href="{{url('/')}}" class="text-3xl font-bold bg-gradient-to-r from-purple-500 to-pink-500 text-transparent bg-clip-text">Door Service</a>

        </div>
    </div>
   <div class="font-semibold text-2xl space-x-2 tracking-wide ">
    <a href="">Home</a>
    <a href="">Gallery</a>
    <a href="">Contact</a>
   </div>

    @if (Auth::user())

        <div class="relative mr-2" style="z-index: 2;"> <!-- Increase z-index to ensure dropdown is on top -->
            <img src="{{ asset('client/img/log.jpeg') }}" alt="" class="w-[70px] rounded-[50px]" id="home-link">
            <div id="dropdown" class="hidden absolute top-full left-0 bg-white border border-gray-200 max-w-xs rounded-xl">
                <ul>
                    <a href="" class="text-xl font-semibold ">Profile</a>
                    <li class="text-xl font-semibold ">Setting </li>
                    <a href="{{ route('logout') }} " onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="text-xl font-semibold ">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
                </ul>
            </div>
        </div>
    @else
        <div class="tracking-wide space-x-2 ">
            <a href="{{ route('login') }}" class="text-xl font-semibold bg-blue-500 text-white px-4 py-2 rounded-xl shadow-md hover:bg-blue-600 crsur-pointer "> Login</a>

        </div>
    @endif

</nav>

<script>
    // JavaScript code to handle dropdown visibility
    const dropdown = document.getElementById('dropdown');
    document.getElementById('home-link').addEventListener('mouseenter', function() {
        dropdown.classList.remove('hidden');
    });

    dropdown.addEventListener('mouseleave', function() {
        dropdown.classList.add('hidden');
    });
</script>
