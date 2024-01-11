<x-layout>
    <div class="pb-10">
        <img src="/images/brown-bg.jpg" alt="blue pattern background"
            class="absolute w-full h-64 md:h-96 object-center object-fit z-0" />
        <div class="relative flex flex-col items-center justify-center sm:px-0 px-6 z-20 pb-32">
            <div class="md:py-36 py-20">
                <h1 role="heading" class="xl:text-6xl md:text-5xl text-xl font-bold leading-10 text-white">Frequently
                    asked
                    questions</h1>
            </div>
            <div class="lg:w-1/2 md:w-8/12 sm:w-9/12 w-full">
                <div class="bg-white shadow rounded p-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-semibold leading-none text-gray-800">How do I create an account on
                                the web app?</h2>
                        </div>
                        <button data-menu
                            class="px-1 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2 ring-offset-white cursor-pointer">
                            <img class="hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg"
                                alt="dropdown">
                            <img class="transform rotate-180"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg" alt="dropdown">
                        </button>
                    </div>
                    <ul class="hidden">
                        <li>
                            <p class="text-base leading-normal text-gray-600 mt-4 lg:w-96">
                                To create an account, click on the "Sign Up" button on the homepage and fill in the
                                required information, such as your name, email address, and password. Once you've
                                submitted the form, you'll receive a confirmation email to verify your account.

                            </p>
                        </li>
                    </ul>
                </div>
                <div class="bg-white shadow rounded p-8 mt-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-semibold leading-none text-gray-800">Can I use the web app for
                                free?</h2>
                        </div>
                        <button data-menu
                            class="px-1 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2 ring-offset-white cursor-pointer">
                            <img class="hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg"
                                alt="dropdown">
                            <img class="transform rotate-180"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg" alt="dropdown">
                        </button>
                    </div>
                    <ul class="hidden">
                        <li>
                            <p class="text-base leading-normal text-gray-600 mt-4 lg:w-96">
                                Yes, the web app is completely free to use. There are no subscription fees or hidden
                                costs.</p>
                        </li>
                    </ul>
                </div>
                <div class="bg-white shadow rounded p-8 mt-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-semibold leading-none text-gray-800">How do I contact customer
                                support if I have a problem with the web app?</h2>
                        </div>
                        <button data-menu
                            class="px-1 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2 ring-offset-white cursor-pointer">
                            <img class="hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg"
                                alt="dropdown">
                            <img class="transform rotate-180"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg" alt="dropdown">
                        </button>
                    </div>
                    <ul class="hidden">
                        <li>
                            <p class="text-base leading-normal text-gray-600 mt-4 lg:w-96">
                                You can contact our customer support team by sending an email to readify@gmail.com. Our team will respond to your
                                inquiry as soon as possible.</p>
                        </li>
                    </ul>
                </div>
                <div class="bg-white shadow rounded p-8 mt-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-semibold leading-none text-gray-800">Is my data secure on the web
                                app?</h2>
                        </div>
                        <button data-menu
                            class="px-1 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2 ring-offset-white cursor-pointer">
                            <img class="hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg"
                                alt="dropdown">
                            <img class="transform rotate-180"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg" alt="dropdown">
                        </button>
                    </div>
                    <ul class="hidden">
                        <li>
                            <p class="text-base leading-normal text-gray-600 mt-4 lg:w-96">
                                Yes, we take data security very seriously and use the latest encryption and security
                                measures to protect your data. Your personal information will never be shared with third
                                parties without your consent.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
    <script>
        let elements = document.querySelectorAll("[data-menu]");

        for (let i = 0; i < elements.length; i++) {
            let main = elements[i];
            main.addEventListener("click", function() {
                let element = main.parentElement.parentElement;
                let andicators = main.querySelectorAll("img");
                let child = element.querySelector("ul");
                let fontColor = element.querySelector("h2");
                child.classList.toggle("hidden");
                if (child.classList[0] !== "hidden") {
                    andicators[0].style.display = "block";
                    andicators[1].style.display = "none";
                    fontColor.style.color = "#78350F";
                } else {
                    andicators[0].style.display = "none";
                    andicators[1].style.display = "block";
                    fontColor.style.color = "#1F2937";
                }
            });
        }
    </script>
</x-layout>
