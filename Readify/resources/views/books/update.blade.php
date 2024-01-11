<x-layout>
    <div class="mt-10 px-7 pb-10">
        <p class="text-xl font-semibold leading-tight text-gray-800">
            Book Details
        </p>
        <form action="/books/{{$book->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid w-full grid-cols-1 lg:grid-cols-2 md:grid-cols-1 gap-7 mt-7">
                <div>
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800">
                            Title
                        </p>
                        <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                            name="title" value="{{$book->title}}"/>
                        <p class="mt-3 text-xs leading-[15px] text-gray-600">
                            What's the title of your book?
                        </p>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800">
                            Genre
                        </p>
                        <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                            name="genre" value="{{$book->genre}}"/>
                        <p class="mt-3 text-xs leading-[15px] text-gray-600">
                            State the genre in a comma separated list e.g. Fiction, Adventure
                        </p>
                        @error('genre')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Author
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                        name="author" value="{{$book->author}}"/>
                    <p class="mt-3 text-xs leading-3 text-gray-600">
                        Who is the author of your book?
                    </p>
                    @error('author')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Condition
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                        name="condition" value="{{$book->condition}}"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        What is the quality of your book? e.g. Good as new, Good, Fair, Poor
                    </p>
                    @error('condition')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Volume
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                        name="volume" value="{{$book->volume}}"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        If it's a collection, specify what Volume do you have.
                    </p>
                    @error('volume')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Image
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                        type="file" name="bookImg" value="{{$book->bookImg}}"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Show us how cool your book is!
                    </p>

                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Email
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                        name="email" value="{{$book->email}}"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Contact Email
                    </p>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Website
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                        name="website" value="{{$book->website}}"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Link to shelter website, Facebook page or any relevant social network
                    </p>
                    @error('website')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Phone
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50"
                        name="phone" value="{{$book->phone}}"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Contact Phone Number
                    </p>
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-6 border-gray-300 mt-2 px-7">
                <p class="text-base font-semibold leading-4 text-gray-800">
                    Book Description
                </p>
                <div class="mt-10 border border-gray-300 rounded">
                    <textarea class="resize-none w-full h-[170px] px-4 py-4 text-base outline-none text-slate-600"
                        placeholder="Start typing here ..." name="description">{{$book->description}}</textarea>
                </div>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <p class="mt-3 text-xs leading-[15px] text-gray-600 px-7">
                Enter book description for better understanding
            </p>
            <hr class="h-[1px] bg-gray-100 my-14" />
            <div
                class="flex flex-col flex-wrap items-center justify-center w-full px-7 lg:flex-row lg:justify-end md:justify-end gap-x-4 gap-y-4">
                <button
                    class="bg-white border-amber-700 rounded hover:bg-gray-50 transform duration-300 ease-in-out text-sm font-medium px-6 py-4 text-amber-700 border lg:max-w-[95px] w-full">
                    <a href="/">Cancel</a>
                </button>
                <button
                    class="bg-amber-700 rounded hover:bg-amber-600 transform duration-300 ease-in-out text-sm font-medium px-6 py-4 text-white lg:max-w-[144px] w-full">
                    Update Book
                </button>
            </div>
        </form>
        <x-footer />
</x-layout>
