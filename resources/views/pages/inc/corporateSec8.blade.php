@if (!empty($sections[7]))
    @php
        $sec = $sections[7];
    @endphp

    @if ($sec->status == 1)
        <!-- section8 -->
        <section class="md:p-20 p-7 lg:px-28">
            <h2 class="text-3xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">{{ $sec->heading }}
            </h2>


            <!-- slider -->
            <div class="swiper2  mx-auto w-full h-auto mt-11 overflow-hidden relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper text-white">
                    @foreach ($sec->other1 as $item)
                        <div class="swiper-slide relative px-7 py-10 my-7 rounded-xl shadow-lg shadow-[#366a60]  w-full bg-main2">
                            <img src="images/course/quote.png" class="w-[20%]  absolute right-4 -top-7" alt="">

                            <div class="flex  mb-6"><img class="w-5" src="images/icons/Star.png" alt=""><img class="w-5"
                                    src="images/icons/Star.png" alt=""><img class="w-5" src="images/icons/Star.png" alt=""><img
                                    class="w-5" src="images/icons/Star.png" alt=""><img class="w-5" src="images/icons/Star.png"
                                    alt=""></div>

                            <p class="mb-6">{{ $item['text2'] }}</p>
                            <hr>
                            <div class="flex items-center gap-3 mt-3">
                                <img class="w-12 h-12 rounded-full" src="{{ asset('storage/' . $item['image']) }}" alt="">
                                <h4 class="text-2xl font-semibold">{{ $item['text1'] }}</h4>
                            </div>
                        </div>
                    @endforeach

                <div class="mt-14 text-center">
                    <div class="swiper-pagination2"></div>
                </div>
            </div>
        </section>
    @endif
@endif