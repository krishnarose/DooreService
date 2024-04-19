@extends('layouts.client.master')
@section('title', 'Door Service Page')

@section('content')
    {{-- video sections --}}
    <div class="relative">
        <video src="{{ asset('videos/spa.mp4') }}" autoplay loop class=" inset-0 h-screen w-full h-full object-cover"></video>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-center">
            <h1 class="text-5xl font-bold p-2">Get All Service In One PlateForm</h1>
            <h2 class="text-3xl font-bold p-2">Endless service starts at just ₹149. Cancel anytime.</h2>
            <button class="bg-red-700 px-5 py-2 text-2xl fond-bold rounded-xl hover:bg-red-800 mt-5">Browse</button>
        </div>
    </div>
    {{-- video sections ends --}}
    <div class="justify-center mt-[60px] ">
        <h1 class="font-semibold text-center text-4xl text-red-700 p-4">Our Services</h1>
    </div>

    {{-- services sections strats --}}

    <div class="mt-[40px] relative">
        <div
            class="overflow-hidden flex justify-between items-center gap-3 p-2  grid grid-cols-3 ml-10 space-y-3  cursor-pointer  ">
            <div class="w-[400px]  bg-zinc-300 rounded-xl hover:scale-110 transition-all ">
                <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_template/w_278,dpr_2,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/luminosity/1709283864816-fbe707.jpeg"
                    alt="">
            </div>
            <div class="w-[400px] shadow-xl bg-zinc-300 rounded-xl  hover:scale-105 transition-all">
                <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_template/w_278,dpr_2,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/home-screen/1678454437383-aa4984.jpeg"
                    alt="">
            </div>
            <div class="w-[400px] shadow-xl bg-zinc-300 rounded-xl hover:scale-105 transition-all">
                <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_template/w_278,dpr_2,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/home-screen/1711428209166-2d42c0.jpeg"
                    alt="">
            </div>
            <div class="w-[400px] shadow-xl bg-zinc-300 rounded-xl hover:scale-105 transition-all">
                <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_template/w_278,dpr_2,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/supply/customer-app-supply/1701759875987-8b654d.jpeg"
                    alt="">
            </div>
            <div class="w-[400px] shadow-xl bg-zinc-300 rounded-xl hover:scale-105 transition-all">
                <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_template/w_278,dpr_2,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/luminosity/1708087047512-f7035f.jpeg"
                    alt="">
            </div>
            <div class="w-[400px] shadow-xl bg-zinc-300 rounded-xl hover:scale-105 transition-all">
                <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_template/w_278,dpr_2,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/home-screen/1678463309015-2b92d2.jpeg"
                    alt="">
            </div>
        </div>
    </div>

    {{-- services section endss --}}

    {{-- NATIVE image section  --}}
    <div class=" overflow-hidden mt-[70px] mb-6 rounded-xl ">
        <div class=" ml-[180px] overflow-hidden  ">
            <img src="https://res.cloudinary.com/urbanclap/image/upload/t_high_res_template/w_1232,dpr_1,fl_progressive:steep,q_auto:low,f_auto,c_limit/images/growth/luminosity/1705694675551-f56016.jpeg"
                class="hover:scale-105 rounded-xl text-center  cursor-pointer transition-all  " alt="">
        </div>
    </div>

    {{-- NATIVE image section ends --}}
    <h1 class="pt-5 ml-[70px] text-4xl font-semibold ">
        Salon for kids & men
    </h1>

    <div class="relative flex items-center gap-5 p-4 mt-[70px] select-none ml-[70px]">
        @php
            $featuredcategories = App\Models\featuredCategory::all();
        @endphp
        @foreach ($featuredcategories as $fcat)
        <div class=" w-[200px] h-[220px] rounded-xl shadow-xl raounded-xl hover:border border-black ">
            <div class=" w-[197px] h-[217px] pt-[70px] overflow-hidden ">
                <a href=""><img
                        src="{{ asset('uploads/category/' . $fcat->category->image) }}"
                        alt="" class="hover:scale-105 rounded-xl"></a>
                <div class="absolute top-0 mt-[20px] pl-2">
                    <h1 class="font-semibold text-xl ">{{ $fcat->category->title }}</h1>
                    {{-- <h2 class="font-semibold text-xl "> grooming shaving</h2> --}}
                </div>

            </div>

        </div>
        @endforeach



    </div>


@endsection
