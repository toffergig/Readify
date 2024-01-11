<x-layout>
    <!-- Container for demo purpose -->
    <div class="container my-24 px-6 mx-auto pb-10">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800">
            <!-- Jumbotron -->
            <div class="container mx-auto xl:px-32 text-center lg:text-left">
                <div class="grid lg:grid-cols-2 flex items-center">
                    <div class="mb-12 lg:mb-0">
                        <div class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
                            style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
                            <h2 class="text-3xl font-bold mb-6">{{ $book->title }}</h2>
                            <p class="text-gray-500 mb-6 pb-2 lg:pb-0">
                                Condition: {{ $book->condition }}
                            </p>

                            <div class="flex flex-col md:flex-row md:justify-around lg:justify-between mb-6 mx-auto">
                                <x-book-genre :breedsCsv="$book->genre" />
                            </div>

                            <p class="text-gray-500 mb-0">
                                {{ $book->description }}
                            </p>
                            <p class="font-bold text-gray-600 mt-4">
                                Contact Details for Transaction
                            </p>
                            <ul class="list-disc ml-4">
                                <li>Email: {{ $book->email }}</li>
                                <li>Website: {{ $book->website }}</li>
                                <li>Phone: {{ $book->phone }}</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <img src="{{ $book->bookImg ? asset('storage/' . $book->bookImg) : 'https://images.unsplash.com/photo-1554196511-667424461ade?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NTQ3Njh8MHwxfHNlYXJjaHw2fHxub3ZlbHxlbnwwfHx8fDE2ODUzODE2MjJ8MA&ixlib=rb-4.0.3&q=80&w=1080' }}"
                            class="w-full rounded-lg shadow-lg" alt="img" />
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->
    <x-footer />
</x-layout>
