@extends('layouts.client.master')
@section('title','user-dashboard')

@section('content')

<div class="relative">
    <video src="{{asset('videos/spa.mp4')}}" autoplay loop class=" inset-0 h-screen w-full h-full object-cover"></video>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-center">
       <h1 class="text-5xl font-bold p-2">Get All Service In One PlateForm</h1>
       <h2 class="text-3xl font-bold p-2">Endless service starts at just ₹149. Cancel anytime.</h2>
       <button class="bg-red-700 px-5 py-2 text-2xl fond-bold rounded-xl hover:bg-red-800 mt-5">Browse</button>
    </div>
</div>

@endsection
