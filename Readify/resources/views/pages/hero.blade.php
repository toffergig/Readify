<x-layout>
    <div class="pt-32 lg:flex items-center relative z-10 container mx-auto pb-10">
        <div class="w-full lg:w-1/2 h-full lg:pr-10 xl:pr-0">
            <img tabindex="0" role="img" aria-label="dogoo" class="mx-auto" alt="book"
                src="{{ URL('/images/buybooks.jpg') }}" />
        </div>
        <div role="contentinfo" class="w-full lg:w-2/5 h-full lg:ml-4">
            <p tabindex="0" class="text-amber-700 uppercase text-2xl mb-4">Buy a book!</p>
            <h1 tabindex="0" class="text-amber-700 text-xl lg:text-6xl font-black mb-8">Books are a uniquely portable magic.</h1>
            <p tabindex="0" class="text-gray-800 font-regular mb-8 ">Welcome to Readify! We
                believe that every used book deserves another loving reader, and our mission is to make the buy and sell
                process as easy and enjoyable as possible. On our platform, you can browse through different genre and listings
                of affordable books in your area. </p>
            <div class="">
                <button role="button" aria-label="live chat"
                    class="focus:bg-amber-600 focus:ring-2 focus:ring-offset-2 focus:ring-amber-700 bg-amber-700 hover:bg-amber-600 text-white px-6 py-2 font-semibold rounded focus:outline-none">
                    <a href="/books">Buy a Book</a>
                </button>
            </div>
        </div>

    </div>
    <x-footer />
</x-layout>
