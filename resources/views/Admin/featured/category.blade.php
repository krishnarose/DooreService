@extends('layouts.admin.master')
@section('title', 'featured-categories')
@section('content')

    <div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative animate-pulse"
                role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative animate-pulse" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <div class="p-5  ">
        <form action="{{ route('featured.store') }}" method="post" class="flex justify-evenly md:flex-row md:items-center">
            @csrf
            <select name="category_id" class="rounded-xl text-xl font-semibold shadow-xl mb-2 md:mr-2 md:mb-0 w-[600px] p-2">
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
                {{-- <option value="1">krishna</option> --}}
            </select>
            <button type="submit"
                class="bg-blue-400 px-5 py-3 md:ml-2 font-bold shadow-xl rounded-xl hover:bg-blue-300 curser-pointer animate-bounce  ">Add</button>
        </form>
    </div>

    <div class="overflow-x-auto p-2 mt-6">
        <table class="table-auto min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-2xl font-semibold text-gray-500 uppercase tracking-wider">Category
                        Title</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-2xl font-semibold text-gray-500 uppercase tracking-wider">Action
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($featured_categories as $fcat)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-semibold">{{ $fcat->category->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{route('featured.removed',$fcat->id)}}"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 animate-bounce"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#e50b0b"
                                    d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                            </svg></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




@endsection
