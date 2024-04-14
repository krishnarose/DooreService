@extends('layouts.admin.master')
@section('title', 'view categories')
@section('content')
    <div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative animate-pulse" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>
<div class="mt-3 p-5">
    <span class="bg-blue-400 text-center px-3 py-2 font-extrabold text-2xl rounded-xl shadow-xl ml-[500px] p-3 hover:bg-blue-300 animate-pulse ">
        view all categories
    </span>


</div>
<div class=" flex justify-items-end p-2 ">
<a href="{{route('category.create')}}"> <span class="bg-blue-500 text-white-500 font-semibold px-3 py-1 rounded-xl shadow-md hover:bg-blue-400 cursor-pointer animate-bounce " > Add Categories</span> </a>
</div>
    <div class="container mx-auto">
        <div class="p-2"><input type="text" id="searchInput" class="border border-gray-300 p-2 mb-4 rounded-xl w-[200px] "
                placeholder="Search..."></div>
        <div class="-mt-[50px] pl-[170px]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5  "
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
        </div>
        <div class="mt-[25px]">
            <table id="categori" class="table-auto w-full">
                <thead class="bg-gray-400 shadow-xl rounded-xl">
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Thumbnail</th>
                        <th class="px-4 py-2">Created At</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($categories as $index => $category)
                        <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="p-3">{{ $category->title }}</td>
                            <td class="p-3"> <img src="{{ asset('uploads/category/' . $category->image) }}" alt=""
                                    class="w-20 h-20">
                            </td>
                            <td class="p-3">{{ $category->created_at->format('d/m/Y') }}</td>
                            <td class="p-3">
                                <div class="flex justify-center items-center gap-8">
                                    <a onclick="return confirm('Are you sure want to delete this category?')"
                                        href="{{ route('category.destroy', $category->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 animate-bounce"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#ef0606"
                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="w-5 animate-bounce" height="20" width="10"
                                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#23c74c"
                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                        </svg></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById('searchInput');
            const rows = document.querySelectorAll('#categori tbody tr');

            searchInput.addEventListener('input', function() {
                const searchText = this.value.toLowerCase();

                rows.forEach(row => {
                    const title = row.cells[0].textContent.toLowerCase();
                    const thumbnail = row.cells[1].textContent.toLowerCase();
                    const createdAt = row.cells[2].textContent.toLowerCase();

                    if (title.includes(searchText) || thumbnail.includes(searchText) || createdAt
                        .includes(searchText)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    </script>

@endsection
