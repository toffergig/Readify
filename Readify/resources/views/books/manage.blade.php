<x-layout>

    <div class="w-full sm:px-6 pb-10">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-amber-100 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 ">
                    My Books</p>
                <div>
                    <button
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-amber-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-amber-700 hover:bg-amber-600 focus:outline-none rounded">
                        <a href="/books/add">
                            <p class="text-sm font-medium leading-none text-white">Add New Book</p>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-white  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr tabindex="0"
                        class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 text-gray-500 ">
                        <th class="font-normal text-left pl-4">Title</th>
                        <th class="font-normal text-left pl-12">Author</th>
                        <th class="font-normal text-left pl-12">Genre</th>
                        <th class="font-normal text-left pl-20">Actions</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    @foreach ($books as $book)
                        <tr tabindex="0"
                            class="focus:outline-none h-20 text-sm leading-none text-gray-800 bg-white  hover:bg-gray-100  border-b border-t border-gray-100  ">
                            <td class="pl-4 cursor-pointer">
                                <div class="flex items-center">
                                    <div class="w-10 h-10">
                                        <img class="w-full h-full"
                                            src="{{ $book->bookImg ? asset('storage/' . $book->bookImg) : 'https://images.unsplash.com/photo-1554196511-667424461ade?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NTQ3Njh8MHwxfHNlYXJjaHw2fHxub3ZlbHxlbnwwfHx8fDE2ODUzODE2MjJ8MA&ixlib=rb-4.0.3&q=80&w=1080' }}"
                                            alt="UX Design and Visual Strategy" />
                                    </div>
                                    <div class="pl-4">
                                        <p class="font-medium">{{ $book->title }}</p>
                                        <p class="text-xs leading-3 text-gray-600 pt-2">Condition: {{ $book->condition }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="pl-12">
                                <p class="text-sm font-medium leading-none text-gray-800">{{ $book->author }}</p>

                            </td>
                            <td class="pl-12">
                                <x-book-genre :breedsCsv="$book->genre" />
                            </td>
                            <td class="pl-20 flex mt-8">
                                <div class="text-amber-500">
                                    <a href="/books/{{$book->id}}/edit" class="hover:cursor-pointer"><i class="fa-solid fa-pencil"></i>
                                        Edit</a>
                                </div>
                                <div class="pl-4 text-red-400">
                                    <form action="/books/{{$book->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button>
                                            <a class="hover:cursor-pointer"><i class="fa-solid fa-trash"></i> Delete</a>
                                        </button>
                                    </form>
                                    
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <x-footer />

</x-layout>
