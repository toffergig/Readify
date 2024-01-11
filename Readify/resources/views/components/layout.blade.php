<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Readify</title>
</head>

<body>

    <section>
        <div class="w-full relative  px-6 xl:px-0">
            <img class="absolute w-full inset-0 dark:hidden h-full object-cover object-center"
                src="https://cdn.tuk.dev/assets/templates/weCare/hero2-bg.png" alt="we care family" />
            <nav class="lg:hidden relative z-40">
                <div class="flex py-6 justify-between items-center px-4">
                    <div>
                        <a tabindex="0" aria-label="we care company logo" href="/" class="flex">
                            <i class="fa-solid fa-paw text-2xl text-amber-900"></i>
                            <h1 class="ml-2 text-lg font-bold text-amber-900">Readify</h1>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <ul id="list"
                            class="hidden p-2 border-r bg-white absolute rounded top-0 left-0 right-0 shadow mt-16 md:mt-16">
                            <li
                                class="flex cursor-pointer text-gray-600  text-sm leading-3 tracking-normal mt-2 py-2 hover:text-amber-700 focus:text-amber-900 focus:outline-none">
                                <a href="/books">
                                    <span class="ml-2 font-bold">Community Books</span>
                                </a>
                            </li>
                            <li class="flex flex-col cursor-pointer text-gray-600  text-sm leading-3 tracking-normal py-2 hover:text-amber-700 focus:text-amber-700 focus:outline-none flex justify-center"
                                onclick="dropdownHandler(this)">
                                <a href="/about">
                                    <span class="ml-2 font-bold">Our Advocacy</span>
                                </a>
                            </li>
                            <li
                                class="flex cursor-pointer text-gray-600  text-sm leading-3 tracking-normal py-2 hover:text-amber-700 flex items-center focus:text-amber-700 focus:outline-none">
                                <a href="/testimonies">
                                    <span class="ml-2 font-bold">Fellow Advocates</span>
                                </a>
                            </li>
                            <li class="flex flex-col cursor-pointer text-gray-600  text-sm leading-3 tracking-normal py-2 hover:text-amber-700 focus:text-amber-700 focus:outline-none flex justify-center"
                                onclick="dropdownHandler(this)">
                                <a href="/faq">
                                    <span class="ml-2 font-bold">FAQs</span>
                                </a>
                            </li>
                            @auth
                                <li class="flex flex-col cursor-pointer text-gray-600 dark:text-gray-200 text-sm leading-3 tracking-normal py-2 hover:text-amber-700 focus:text-amber-700 focus:outline-none flex justify-center"
                                    onclick="dropdownHandler(this)">
                                    <a href="/books/manage">
                                        <span class="ml-2 font-bold">My Books</span>
                                    </a>
                                </li>
                            @endauth
                        </ul>
                        <div class="xl:hidden dark:bg-white">
                            <img id="open" onclick="MenuHandler(true)"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/right_aligned_with_searchbar_Svg1.svg"
                                alt="menu" />
                            <div id="close" class="hidden close-m-menu" onclick="MenuHandler(false)">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/right_aligned_with_searchbar_Svg2.svg"
                                    alt="cross" />
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <nav role="navigation" aria-label="Main" tabindex="0"
                class="hidden relative z-10 w-full lg:flex justify-between items-center p-20">
                <div class="w-1/6">
                    <a tabindex="0" aria-label="we care company logo" href="/" class="flex">
                        <i class="fa-solid fa-book text-2xl text-amber-900"></i>
                        <h1 class="ml-2 text-lg font-bold text-amber-900">Readify</h1>
                    </a>
                </div>
                <div class="w-5/6">
                    <div class="flex items-center justify-end">
                        <ul class="text-gray-800 dark:text-white lg:space-x-8 flex items-center leading-none">
                            <li>
                                <a class="hover:text-amber-700 text-lg focus:text-amber-900 text-gray-500"
                                    href="/books">Community Books</a>
                            </li>
                            <li class="ml-4 hover:text-amber-900 ">
                                <a class="focus:text-amber-900 text-lg text-gray-500 hover:text-amber-700"
                                    href="/about">Our
                                    Advocacy</a>
                            </li>
                            <li class="ml-4 hover:text-amber-900 focus:text-amber-900">
                                <a class="focus:text-amber-900 text-lg text-gray-500 hover:text-amber-700"
                                    href="/testimonies">Fellow Advocates</a>
                            </li>
                            <li class="ml-4 hover:text-amber-900 focus:text-amber-900">
                                <a class="focus:text-amber-900 text-lg text-gray-500 hover:text-amber-700"
                                    href="/faq">FAQ</a>
                            </li>
                            @auth
                                <li class="ml-4 hover:text-amber-900 focus:text-amber-900">
                                    <a class="focus:text-amber-900 text-lg text-gray-500 hover:text-amber-700"
                                        href="/books/manage">My Books</a>
                                </li>
                            @endauth
                        </ul>
                        @auth
                            <div class="pl-40">
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button role="button" aria-label="live chat" type="submit"
                                        class="focus:bg-amber-600 focus:ring-2 focus:ring-offset-2 focus:ring-amber-700 bg-amber-700 hover:bg-amber-600 text-white px-6 py-2 font-semibold rounded focus:outline-none">
                                        Logout
                                    </button>
                                </form>
                            </div>
                            <div class="pl-2">

                                <button class="border-2 border-amber-500 text-amber-900 bg-transparent py-2 px-4 rounded">
                                    <a href="/books/add"><i class="fa-solid fa-plus"></i>&nbsp;Add New</a>
                                </button>

                            </div>
                        @else
                            <div class="pl-40">
                                <button role="button" aria-label="live chat" type="submit"
                                    class="focus:bg-amber-600 focus:ring-2 focus:ring-offset-2 focus:ring-amber-700 bg-amber-700 hover:bg-amber-600 text-white px-6 py-2 font-semibold rounded focus:outline-none">
                                    <a href="/login">Sign In</a>
                                </button>
                            </div>
                        @endauth
                    </div>
                </div>
            </nav>
            <main>
                {{ $slot }}
            </main>

        </div>
    </section>
    <style>
        /* Top menu */
        .top-100 {
            animation: slideDown 0.5s ease-in-out;
        }

        @keyframes slideDown {
            0% {
                top: -50%;
            }

            100% {
                top: 0;
            }
        }

        * {
            outline: none !important;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-tap-highlight-color: transparent;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>

    <script>
        // Top menu
        const MenuHandler = (flag) => {
            if (flag) {
                document.getElementById("list").classList.add("top-100");
                document.getElementById("list").classList.remove("hidden");
                document.getElementById("close").classList.remove("hidden");
                document.getElementById("open").classList.add("hidden");
            } else {
                document.getElementById("list").classList.remove("top-100");
                document.getElementById("list").classList.add("hidden");
                document.getElementById("close").classList.add("hidden");
                document.getElementById("open").classList.remove("hidden");
            }
        };
    </script>
</body>

</html>
