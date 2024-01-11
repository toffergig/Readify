<x-layout>

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 pb-10">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-amber-800 pb-4">About Us</h1>
                <p class="font-normal text-base leading-6 text-gray-600">At Readify, we believe that books hold a special place in our lives, 
                    carrying stories, knowledge, and inspiration that transcends time. Our mission is to create a thriving community where books 
                    find new homes and eager readers to continue their journey. We passionately advocate
                     against the disposal of books after reading, as we firmly believe that every book deserves to be cherished and shared with others.
                    <br>
                    <br>
                    In a world where technology rapidly transforms the way we consume information, we strive to uphold the 
                    timeless value of books. We envision a society where the love for reading is fostered, where books become cherished
                     companions that are passed from one reader to another. Our vision is to inspire a sustainable reading culture that celebrates
                     the power of storytelling, promotes intellectual growth, and nurtures empathy and understanding among individuals.
                </p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="{{URL('/images/peoplereading.jpg')}}" alt="People Reading" />
            </div>
        </div>

        <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-amber-800 pb-4">Our Story</h1>
                <p class="font-normal text-base leading-6 text-gray-600">At Readify, our mission is twofold: to create a
                     platform that facilitates the exchange of books and to encourage a mindset that values the importance of book reuse.
                      We firmly believe that books have life beyond a single reading and deserve 
                    to be enjoyed by multiple individuals, creating a beautiful cycle of discovery and enlightenment.</p>
            </div>
            <div class="w-full lg:w-8/12 lg:pt-8">
                <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-4 shadow-lg rounded-md">
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{URL('/images/toffer.jpg')}}"
                            alt="Jhury featured Image" />
                        <img class="md:hidden block" src="{{URL('/images/toffer.jpg')}}"
                            alt="Jhury featured Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800  mt-4">Kristoffer</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{URL('/images/odhrey.jpg')}}"
                            alt="PJ featured Image" />
                        <img class="md:hidden block" src="{{URL('/images/odhrey.jpg')}}"
                            alt="PJ featured Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800  mt-4">Odhrey</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{URL('/images/kayla.jpg')}}"
                            alt="Hannah featued Image" />
                        <img class="md:hidden block" src="{{URL('/images/kayla.jpg')}}"
                            alt="Hannah featued Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800  mt-4">Kayla</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{URL('/images/mateyoyo.jpg')}}"
                            alt="Krystelle featured image" />
                        <img class="md:hidden block" src="{{URL('/images/mateyoyo.jpg')}}"
                            alt="Krystelle featured image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 mt-4">Mateo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>
