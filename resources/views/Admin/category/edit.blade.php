@extends('layouts.admin.master')
@section('title', 'Edit-category')
@section('content')

    <div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="max-w-lg mx-auto ">
        <form class="space-y-6" action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title" class="block text-xl font-medium text-gray-700 text-semibold">Title</label>
                <input type="text" name="title" id="title" value="{{ $category->title }}"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3">
            </div>
            <div>
                <label for="description" class="block text-xl font-medium text-gray-700">Description</label>
                <input type="text" name="description" id="description" value="{{ $category->description }}"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-xl sm:text-sm border-gray-300 rounded-md  p-3">
            </div>
            <div>
                <label for="slug" class="block text-xl font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ $category->slug }}"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-xl sm:text-sm border-gray-300 rounded-md  p-3">
            </div>
            <div class="flex items-center justify-between">
                <label for="image" class="block text-xl font-medium text-gray-700">Thumbnail</label>
                <input type="file" name="image" id="image"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3">
                    <img src="{{ asset('uploads/category/' . $category->image) }}" alt="thumbnailimg" class="w-20 h-20">
            </div>
            <div>
                <label for="meta_title" class="block text-xl font-medium text-gray-700">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" value="{{ $category->meta_title }}"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3">
            </div>
            <div>
                <label for="meta_description" class="block text-xl font-medium text-gray-700">Meta Description</label>
                <input type="textarea" name="meta_description" id="meta_description" value="{{ $category->meta_description }}"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3">
            </div>
            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-xl font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
            </div>
        </form>
    </div>



@endsection
