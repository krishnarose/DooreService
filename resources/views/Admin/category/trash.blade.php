@extends('layouts.admin.master')
@section('title', 'transh categories')
@section('content')
    <div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative animate-ping" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="mt-3 p-5">
        <span class="bg-blue-400 text-center px-3 py-2 font-extrabold text-2xl rounded-xl shadow-xl ml-[500px] p-3 hover:bg-blue-300 animate-pulse ">
           Trash view
        </span>


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
            <table id="categori" class="table-auto w-full ">
                <thead class="bg-gray-400 shadow-xl rounded-xl">
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Thumbnail</th>
                        <th class="px-4 py-2">deleted At</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($trashed_categories as $category)
                        <tr class="">
                            <td class="p-3">{{ $category->title }}</td>
                            <td> <img src="{{ asset('uploads/category/' . $category->image) }}" alt=""
                                    class="w-20 h-20">
                            </td>
                            <td>{{ $category->deleted_at->format('d/m/Y') }}</td>
                            <td>
                                <div class="flex justify-center items-center gap-8">
                                    <a onclick="return confirm('Are you sure want to delete this category permanently?')"
                                        href="{{ route('trash.delete', $category->id) }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 animate-bounce font-semibold"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#fb0909"
                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg>

                                    </a>
                                    <a onclick="return confirm('Are you sure want to restore this category?')"
                                        href="{{ route('trash.restore', $category->id) }}" class="btn btn-success"><svg
                                            class="w-5 animate-bounce" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#09f185"
                                                d="M163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3C140.6 6.8 151.7 0 163.8 0zM32 128H416L394.8 467c-1.6 25.3-22.6 45-47.9 45H101.1c-25.3 0-46.3-19.7-47.9-45L32 128zm192 64c-6.4 0-12.5 2.5-17 7l-80 80c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V408c0 13.3 10.7 24 24 24s24-10.7 24-24V273.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-4.5-4.5-10.6-7-17-7z" />
                                        </svg>
                                    </a>

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
