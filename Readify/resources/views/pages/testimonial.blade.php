<x-layout>
    
    <div class="container mx-auto px-4 flex flex-col lg:items-center justify-between lg:flex-row pb-10">
        <div class="mb-14 xl:mb-0">
            <h1 class="text-2xl leading-tight md:text-4xl xl:text-5xl font-semibold leading-10   text-gray-800 xl:w-2/3 pr-16 lg:pr-0">Our fellow Advocates love what we do</h1>
            <p class="mt-4 text-base leading-normal text-gray-600  md:w-2/3 lg:w-3/4 pr-16 lg:pr-0">Over 10,000 pet advocates use our application to reach their message and help a book find a new reader.</p>
            <button class="hidden md:block w-full sm:w-auto mt-12 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-700 flex items-start justify-center sm:justify-start px-8 py-4 bg-amber-700 hover:bg-gray-600 rounded text-base font-medium leading-none text-center text-white">
                <a href="/books">Buy a Book</a>
            </button>
        </div> 

        <div role="list" aria-label="Testimonials" class="xl:w-1/2 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6 flex-wrap justify-center items-start">
            <div role="listitem" class="bg-white shadow rounded p-4 xl:p-8">
                <img src="/images/quote.png" aria-hidden="true" alt="quote" />
                <div class="pl-4 pt-4 flex items-start justify-between">
                    <div class="mr-6">
                        <p class="xl:text-xl xl:leading-loose text-gray-600">I highly recommend this site to anyone looking to buy a book. The selection of books is amazing and the staff is incredibly knowledgeable and friendly. As a bookworm, I couldn't be happier with my new book!</p>
                        <p class="mt-4 text-base font-semibold leading-none text-gray-800">Jhury Lastre</p>
                    </div>
                    <img src="{{URL('/images/jhury.jpg')}}" alt="Display Avatar of Anna Smith" role="img" class="rounded-full h-16 w-16"/>
                </div>
            </div>

            <div role="listitem" class="bg-white shadow rounded p-4 xl:p-8">
                <img src="/images/quote.png" aria-hidden="true" alt="quote"/>
                <div class="pl-4 pt-4 flex items-start justify-between">
                    <div class="mr-6">
                        <p class="xl:text-xl xl:leading-loose text-gray-600 ">Buying a book through this site was the best decision I ever made! The process was so easy and the staff was incredibly helpful. I couldn't imagine my life without buying new books!</p>
                        <p class="mt-4 text-base font-semibold leading-none text-gray-800 ">Paul Toral</p>
                    </div>
                    <img src="{{URL('/images/pol.jpg')}}" alt="Display avatar of Dany John" role="img" class="rounded-full h-16 w-16"/>
                </div>
            </div>
            <div role="listitem" class="bg-white  shadow rounded p-4 xl:p-8">
                <img src="/images/quote.png" aria-hidden="true" alt="quote"/>
                <div class="pl-4 pt-4 flex items-start justify-between">
                    <div class="mr-6">
                        <p class="xl:text-xl xl:leading-loose text-gray-600 ">I was hesitant about buying a book online, but this site made the process so simple and stress-free. I found books on this site that I would love to read but I could not find in a physical store!</p>
                        <p class="mt-4 text-base font-semibold leading-none text-gray-800 ">Krystelle Timtim</p>
                    </div>
                    <img src="{{URL('/images/telle.jpg')}}" alt="Display Avatar of Mike Blake" role="img" class="rounded-full h-16 w-16"/>
                </div>
            </div>
            <button class="md:hidden w-full sm:w-auto mt-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-700 flex items-start justify-center sm:justify-start px-8 py-4 bg-amber-700 hover:bg-gray-600 rounded text-base font-medium leading-none text-center text-white">Read success stories</button>
        </div>
    </div>
    <x-footer />
</x-layout>