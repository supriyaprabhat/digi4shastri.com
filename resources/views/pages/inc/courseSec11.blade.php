<!-- section 11 -->
@if (!empty($course->success_stories))
<section class="md:p-20 p-7 lg:px-28">
    <h2 class="text-3xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">SUCCESS STORY</h2>


    <!-- slider -->
    <div class="swiper2  mx-auto w-full h-auto mt-11 overflow-hidden relative">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper text-white">
            @foreach ($course->success_stories as $item)
                <div class="swiper-slide relative px-7 py-10 my-7 rounded-xl shadow-lg shadow-[#366a60]  w-full bg-main2">
                    <img src="{{ asset('images/course/quote.png') }}" class="w-[20%]  absolute right-4 -top-7" alt="">

                    <div class="flex  mb-6"><img class="w-5" src="{{ asset('images/icons/Star.png') }}" alt=""><img
                            class="w-5" src="{{ asset('images/icons/Star.png') }}" alt=""><img class="w-5"
                            src="{{ asset('images/icons/Star.png') }}" alt=""><img class="w-5" src="{{ asset('images/icons/Star.png') }}"
                            alt=""><img class="w-5" src="{{ asset('images/icons/Star.png') }}" alt=""></div>

                    <p class="mb-6">{{ $item['texts'] }}</p>
                    <hr>
                    <div class="flex items-center gap-3 mt-3">
                        <img class="w-12 h-12 rounded-full" src="{{ asset('storage/' . $item['icon']) }}" alt="">
                        <h4 class="text-2xl font-semibold">{{ $item['name'] }}</h4>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-14 text-center">
            <div class="swiper-pagination2"></div>
        </div>
    </div>
</section>
@endif