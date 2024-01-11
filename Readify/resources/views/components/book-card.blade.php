@props(['book'])
<div class="flex items-center justify-center py-8 px-4">
    <div class="md:w-96 rounded shadow-lg py-4 px-5 bg-white">
        <div class="flex items-start justify-between">
            <div class="flex items-center mb-4 lg:mb-0 mr-10">
                <div class="w-14 h-14 bg-cover rounded-md mr-3">
                    <img tabindex="0" src="{{$book->bookImg ? asset('storage/' . $book->bookImg) : 'https://images.unsplash.com/photo-1554196511-667424461ade?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NTQ3Njh8MHwxfHNlYXJjaHw2fHxub3ZlbHxlbnwwfHx8fDE2ODUzODE2MjJ8MA&ixlib=rb-4.0.3&q=80&w=1080'}}"
                        alt="person" class="focus:outline-none rounded-full h-full w-full overflow-hidden shadow" />
                </div>
                <div>
                    <a tabindex="0"
                        class="focus:outline-none  text-sm font-bold leading-4 text-gray-800 ">{{$book->title}}</a>
                    <p tabindex="0"
                        class="focus:outline-none text-xs leading-3 text-gray-500 pt-2">{{$book->author}}</p>
                </div>
            </div>
            {{-- <button aria-label="dropdown"
                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 rounded-md cursor-pointer relative"
                onclick="dropdownHandler(this)">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/card11-svg1.svg" alt="menuhandler" />

                <ul
                    class="bg-white shadow rounded z-40 py-1 w-32  -ml-24 left-0 mt-8 absolute hidden top-0">
                    <li tabindex="0"
                        class="focus:outline-none  cursor-pointer text-gray-600  text-sm leading-3 tracking-normal py-3 hover:bg-amber-700 hover:text-white focus:bg-amber-700 focus:text-white px-3 font-normal">
                        Landing Pages</li>
                    <li tabindex="0"
                        class="focus:outline-none cursor-pointer text-gray-600  text-sm leading-3 tracking-normal py-3 hover:bg-amber-700 hover:text-white focus:bg-amber-700 focus:text-white px-3 font-normal">
                        Templates</li>
                    <li tabindex="0"
                        class="focus:outline-none cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-amber-700 hover:text-white focus:bg-amber-700 focus:text-white px-3 font-normal">
                        Components</li>
                </ul>
            </button> --}}
        </div>
        <p tabindex="0" class="focus:outline-none pt-4 text-xs leading-4 text-gray-600 ">{{substr($book->description, 0, 100) . "..."}}</p>
        <p tabindex="0" class="focus:outline-none text-xs font-medium leading-3 pt-5 text-amber-700">GENRE</p>
        <div class="items-center pt-2 pb-2.5">
            <x-book-genre :breedsCsv="$book->genre" />
        </div>
        <div class="flex items-end justify-end">
            <button
                class="focus:opacity-90 focus:ring-offset-2 focus:ring-2 focus:ring-amber-700 text-xs font-medium leading-3 text-white py-3 px-4 rounded bg-amber-700 focus:outline-none hover:opacity-90">
             <a href="/books/{{$book->id}}">Show Details</a>
            </button>
        </div>
    </div>
</div>
