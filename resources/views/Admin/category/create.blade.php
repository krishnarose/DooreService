@extends('layouts.admin.master')
@section('title', 'create-category')
@section('content')

    <div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="mt-3 p-5">
        <span class="bg-blue-400 text-center px-3 py-2 font-extrabold text-2xl rounded-xl shadow-xl ml-[500px] p-3 hover:bg-blue-300 animate-pulse ">
            Add Category
        </span>


    </div>
    <div class=" flex justify-items-end p-2 ">
    <a href="{{route('admin.categories')}}"> <span class="bg-blue-500 text-white-500 font-semibold px-3 py-1 rounded-xl shadow-md hover:bg-blue-400 cursor-pointer animate-bounce " > view Categories</span> </a>
    </div>


    <div class="max-w-lg mx-auto ">
        <form class="space-y-6" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title" class="block text-xl font-medium text-gray-700 text-semibold">Title</label>
                <input type="text" name="title" id="title"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3">
            </div>
            <div>
                <label for="description" class="block text-xl font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="3"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3"></textarea>
            </div>
            <div>
                <label for="slug" class="block text-xl font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-xl sm:text-sm border-gray-300 rounded-md  p-3">
            </div>
            <div>
                <label for="image" class="block text-xl font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3">
            </div>
            <div>
                <label for="meta_title" class="block text-xl font-medium text-gray-700">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3">
            </div>
            <div>
                <label for="meta_description" class="block text-xl font-medium text-gray-700">Meta Description</label>
                <textarea id="meta_description" name="meta_description" rows="3"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3"></textarea>
            </div>
            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-xl font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create</button>
            </div>
        </form>
    </div>



@endsection
