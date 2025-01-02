<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('src/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/4d509971f0.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('') }}output.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body x-data class="h-screen bg-white">
    <header class="flex flex-row max-md:hidden">
        <!-- top header -->
        <div class="w-full">
            <div class="flex justify-between bg-[#fedf57] w-full py-3 md:px-20 px-4 items-center">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-phone text-[#D81B26]"></i>
                    <p class="text-lg">{{ $general[0]->mobile_1 ?? '' }}</p><i
                        class="fa-solid fa-envelope text-[#D81B26]"></i>
                    <p class="text-lg">{{ $general[0]->email_1 ?? '' }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text"
                        class="text-lg border-none outline-none bg-transparent max-w-20 placeholder:text-black"
                        placeholder="Search"><i class="fa-solid fa-globe text-[#D81B26]"></i>
                    <select class="text-lg border-none outline-none bg-transparent">
                        <option value="English">English</option>
                        <option value="Hindi">Hindi</option>
                    </select>
                </div>

                <!-- main header -->
            </div>

            <!-- main header -->
            <nav class="nav-main  lg:px-20 px-4">
                <img src="{{ asset('images/logo.png') }}" style="max-width: 200px; width: 60vw;" alt="">
                <ul class="nav-list md:gap-2 lg:gap-3 xl:gap-5">
                    <li class="nav-item main">
                        <a href="{{ route('page.home') }}">Home</a>
                    </li>


                    <!-- 2nd -->
                    <li class="nav-item main">
                        <a href="{{ route('page.about') }}">About</a>
                    </li>

                    <!-- 3rd -->
                    <li class="nav-item main">
                        <a href="{{ route('page.corporate') }}">Carporate</a>
                    </li>

                    <!-- 4th -->
                    <li class="nav-item main">
                        <a href="{{ route('page.workshop') }}">Workshop</a>
                    </li>

                    @php
                        $centers = \App\Models\Center::getCenters();
                    @endphp
                    @if ($centers->count() > 0)
                        <li class="nav-item main" x-data="{ open: false }" @mouseenter="open = true"
                            @mouseleave="open = false">
                            <a href="" @click.prevent="open = !open">Our Center</a>
                            <ul x-show="open" x-transition:enter="submenu-enter" x-transition:leave="submenu-leave"
                                class="submenu">

                                @foreach ($centers as $center)
                                    <li><a href="{{ route('page.centre', $center->id) }}">{{ $center->name }}</a></li>
                                @endforeach

                            </ul>
                        </li>
                    @endif

                    @php
                        $courses = \App\Models\Course::getCourses();
                    @endphp
                    @if ($courses->count() > 0)
                        <li class="nav-item main" x-data="{ open: false }" @mouseenter="open = true"
                            @mouseleave="open = false">
                            <a href="" @click.prevent="open = !open">Courses </a>
                            <ul x-show="open" x-transition:enter="submenu-enter" x-transition:leave="submenu-leave"
                                class="submenu">

                                @foreach ($courses as $course)
                                    <li><a href="{{ route('page.course', $course->id) }}">{{ $course->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif



                    <!-- 7th -->
                    <li class="nav-item main">
                        <a href="{{ route('page.studentCorner') }}">Student Corner</a>
                    </li>

                    <!-- 8th -->
                    <li class="nav-item main">
                        <a href="{{ route('page.blogs') }}">Blogs</a>
                    </li>

                    <!-- 9th -->
                    <li class="nav-item main">
                        <a href="{{ route('page.contactUs') }}">Contact us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Mobile Header  -->




    <header class="w-full grid grid-cols-2 relative bg-[#1ABC9C] md:hidden">
        <div class="p-5 col-span-1">
            <a href="{{ route('page.home') }}"> <img src="{{ asset('images/logo.png') }}"
                    class="w-full max-w-44 object-contain" alt=""></a>
        </div>
        <div class="off-screen-menu p-5 " style="z-index:89">
            <img src="{{ asset('images/logo.png') }}" class="w-full max-w-44 object-contain mx-auto" alt="">
            <ul class="w-full mt-2 open-dropdown">
                <li class="hover:text-[#0C5647] py-2"><a href="{{ route('page.home') }}">Home</a></li>

                <li class="hover:text-[#0C5647] py-2"><a href="{{ route('page.about') }}">About</a></li>

                <li class="hover:text-[#0C5647] py-2"><a href="{{ route('page.corporate') }}">Corporate</a></li>

                <li class="hover:text-[#0C5647] py-2"><a href="{{ route('page.workshop') }}">Workshop</a></li>

                <li class="duration-700 transition-all">
                    <div class="flex justify-between">
                        <a class="hover:text-[#0C5647]">Our Center</a>
                        <p class="hamMenuDropdown p-0.5 px-1 rounded-md   duration-700 cursor-pointer">
                            <i class="fa-solid fa-circle-chevron-down"></i>
                        </p>
                    </div>
                    {{-- <ul class="hamDropdownContainer pl-5">
            <li><a href="{{ route('page.centre') }}" class="hover:text-[#0C5647]">center1</a></li>

          </ul> --}}
                </li>
                <li class="duration-700 transition-all">
                    <div class="flex justify-between">
                        <a class="hover:text-[#0C5647]">Courses</a>
                        <p class="hamMenuDropdown p-0.5 px-1 rounded-md   duration-700 cursor-pointer">
                            <i class="fa-solid fa-circle-chevron-down"></i>
                        </p>
                    </div>
                    <ul class="hamDropdownContainer pl-5">
                        <li><a href="" class="hover:text-[#0C5647]">course1</a></li>
                        <li><a href="" class="hover:text-[#0C5647]">course2</a></li>
                        <li><a href="" class="hover:text-[#0C5647]">Course1</a></li>
                    </ul>
                </li>
                <li class="hover:text-[#0C5647] py-2"><a href="{{ route('page.studentCorner') }}">Student Corner</a>
                </li>

                <li class="hover:text-[#0C5647] py-2"><a href="{{ route('page.blogs') }}">Blogs</a></li>

                <li class="hover:text-[#0C5647] py-2"><a href="{{ route('page.contactUs') }}">Contact Us</a></li>
            </ul>
        </div>
        <nav>
            <div class="ham-menu" style="z-index: 90;">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>


    @yield('contents')

    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ $error }}");
            </script>
        @endforeach
    @endif

    <!-- footer -->
    <footer>
        <!-- top footer -->
        <div class="flex gap-y-5 flex-wrap justify-between lg:p-20 md:p-14 p-8">
            <div class="lg:w-[19%] sm:w-[32%] w-[49%]">
                <h4 class="text-2xl font-bold mb-4">Company</h4>
                <ul class="space-y-2">
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href="{{ route('page.about') }}"><span class="text-green-600 text-xl">&#11166;
                            </span>About Us</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href="{{ route('page.corporate') }}"><span class="text-green-600 text-xl">&#11166;
                            </span>Corporate</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href=""><span class="text-green-600 text-xl">&#11166; </span>Training</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href="{{ route('page.contactUs') }}"><span class="text-green-600 text-xl">&#11166;
                            </span>Contact Us</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href=""><span class="text-green-600 text-xl">&#11166; </span>Refer & Earn</a></li>
                </ul>
            </div>

            <div class="lg:w-[19%] sm:w-[32%] w-[49%]">
                <h4 class="text-2xl font-bold mb-4">Career</h4>
                <ul class="space-y-2">
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href="{{ route('page.corporate') }}"><span class="text-green-600 text-xl">&#11166;
                            </span>Corporate</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href=""><span class="text-green-600 text-xl">&#11166; </span>Training</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href="{{ route('page.contactUs') }}"><span class="text-green-600 text-xl">&#11166;
                            </span>Contact Us</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href=""><span class="text-green-600 text-xl">&#11166; </span>Refer & Earn</a></li>
                </ul>
            </div>

            <div class="lg:w-[19%] sm:w-[32%] w-[49%]">
                <h4 class="text-2xl font-bold mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href="{{ route('page.corporate') }}"><span class="text-green-600 text-xl">&#11166;
                            </span>Corporate</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href=""><span class="text-green-600 text-xl">&#11166; </span>Training</a></li>
                    <li class="font-semibold hover:text-green-700 transition-all cursor-pointer"><a
                            href="{{ route('page.contactUs') }}"><span class="text-green-600 text-xl">&#11166;
                            </span>Contact Us</a></li>
                </ul>
            </div>
            <div class="lg:w-[19%]  w-[49%]">
                <h4 class="text-2xl font-bold mb-4">Approved by</h4>
                <img src="{{ asset('images/home/foot1.png') }}" alt="">

            </div>

            <div class="lg:w-[19%] w-[49%]">
                <h4 class="text-2xl font-bold mb-4">Google Partner</h4>
                <img src="{{ asset('images/home/foot2.png') }}" alt="">
            </div>

        </div>

        <div class="bg-grid md:p-20 p-7">
            <h4 class="text-2xl font-bold mb-5">{{ $general[0]->repeater_1[0]['field_1'] ?? '' }}</h4>
            <p class="text-md font-semibold mb-7">{{ $general[0]->repeater_1[0]['field_2'] ?? '' }}</p>
            <h4 class="text-2xl font-bold mb-5">{{ $general[0]->repeater_1[1]['field_1'] ?? '' }}</h4>
            <p class="text-md font-semibold mb-7">{{ $general[0]->repeater_1[1]['field_2'] ?? '' }}</p>

            <h4 class="text-center text-red-600 sm:text-3xl text-xl  md:mt-11">Copyright © 2024 Digishastri. All Rights
                Reserved</h4>
        </div>
    </footer>

    <!-- pop-up -->
    @if (empty(session('counsellingFormSent')))
        <div style="display: none" id="popup">
            <div id="pop"
                class="pop  px-3 py-11 fixed w-screen flex flex-wrap justify-center items-center h-screen top-0 left-0 z-[1123]  max-md:overflow-auto">
                <div class="max-w-5xl flex flex-wrap items-stretch justify-center">
                    <div
                        class="sm:w-[50%] bg-zinc-800  text-center flex flex-col items-center p-12 md:p-20  justify-center w-full h-auto relative">
                        <i class="fa-regular fa-circle-xmark absolute text-3xl cursor-pointer right-2 top-2 text-white"
                            onclick="hidpop();"></i>
                        <img src="{{ asset('images/center/logo.png') }}" class="md:w-56" alt="">
                        <h2 class="md:text-5xl text-3xl my-6 text-white font-medium">Know How Digi4shastri Can Help
                            you?</h2>
                        <p class="text-xl font-bold text-white">Lets Talk: 9898237836</p>
                    </div>
                    <div class=" bg-white sm:w-[50%] w-full ">
                        <form method="post" class="p-7 md:p-11 w-full flex flex-wrap justify-between"
                            action="{{ route('counseling.form.submit') }}">
                            <h3 class="text-2xl w-full text-red-600 sm:text-3xl font-bold mb-8">Book A free Counseling
                            </h3>
                            @csrf
                            <div class="mb-4  w-full space-y-2 flex flex-col">
                                <label for="name" class="text-lg font-medium">NAME</label>
                                <input type="text" name="name" id="name" class="p-3 border-2">
                            </div>

                            <div class="mb-4 space-y-2 flex flex-col w-full">
                                <label for="email" class="text-lg font-medium">EMAIL</label>
                                <input type="text" name="email" id="email" class="p-3 border-2">
                            </div>

                            <div class="mb-4 space-y-2 flex flex-col  w-full">
                                <label for="mobile" class="text-lg font-medium">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="p-3 border-2">
                            </div>

                            <div class="mb-4 space-y-2 flex flex-col  w-full">
                                <label for="choose_center" class="text-lg font-medium">Choose Center</label>
                                <input type="text" name="choose_center" id="choose_center" class="p-3 border-2">
                            </div>

                            <button class="btn-p w-full !border-2 !border-zinc-900" type="submit">OK, I am
                                Intrested.</button>
                            <p class="text-center mt-4">We respect your privacy.</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    @endif



    <a class="fixed w-24 h-24 hover:animate-bounce bottom-7 z-30 right-4" href=""><img
            class="w-full z-30 h-auto" src="{{ asset('images/home/call-btn.png') }}" alt=""></a>

    <script>
        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
            if (currentScroll < lastScrollTop) {
                // Show the popup
                showPopup();
            }
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Prevent negative scrolling
        });

        function showPopup() {
            const popup = document.getElementById('popup');
            popup.style.display = 'block';
        }

        function closePopup() {
            const popup = document.getElementById('popup');
            popup.style.display = 'none';
        }
    </script>

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('swiper.js') }}"></script>
    <script src="{{ asset('index.js') }}"></script>


</body>

</html>
