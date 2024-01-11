<x-layout>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($books) == 0)
            @foreach ($books as $book)
                <x-book-card :book="$book" />
            @endforeach
        @else
            <p>No Listings Found.</p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{$books->links()}}
    </div>
    <x-footer />
</x-layout>
