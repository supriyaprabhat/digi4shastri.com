@if (!empty($courses))
    <section class="md:p-20 py-16 px-4 gap-y-5 relative ">
        <div class="bg-circular2 absolute -bottom-36 -left-36 h-[500px] w-[500px]"></div>
        <h2 class="text-red-700 font-semibold text-5xl max-sm:text-4xl text-center my-3">Our Programs</h2>

        <!-- slider -->
        <div class="swiper2 max-w-5xl mx-auto w-full h-auto mt-11 overflow-hidden relative">
            <!-- Additional required wrapper -->
            @foreach ($courses as $i => $course)
                <div class="swiper-wrapper text-white">
                    <div
                        class="swiper-slide bg-main2 h-auto p-6 w-full rounded-2xl shadow-lg border-4 border-white overflow-hidden">
                        <div class="flex ">
                            <div class="border-t border-l w-full border-white p-3">
                                <img src="images/icons/setting.png" alt="">
                            </div>
                            <h3 class="text-2xl ml-3 font-bold text-white">0{{ $i + 1 }}</h3>
                        </div>
                        <div class="w-32 my-5 border-t-4 border-yellow-500"></div>
                        <h2 class="text-3xl font-bold text-black">{{ $course->name }}</h2>
                        <p class="text-lg font-medium my-5 text-white">{{ $course->heading2 }}</p>
                        <a href="{{ route('page.course', $course->id) }}" class="text-yellow-300 text-lg font-extrabold hover:text-white transition-all cursor-pointer">See
                            Programs &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
            <div class="mt-14 text-center">
                <div class="swiper-pagination2"></div>
            </div>
        </div>
    </section>
@endif
