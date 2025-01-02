@if (!empty($sections[4]))
    @php
        $sec5 = $sections[4];
    @endphp

    @if ($sec5->status == 1)
    <!-- section5 -->
    <section class="md:p-20 p-7 lg:px-28">
        <h2 class="md:text-4xl text-3xl text-red-600">{{ $sec5->heading }}
        </h2>

        <!-- slider -->
        <div class="swiper  mx-auto w-full h-auto mt-11 overflow-hidden relative">
            <!-- Additional required wrapper -->
            
            <div class="swiper-wrapper ">
                
                @if (!empty($sec5->other1))
                    @foreach ($sec5->other1 as $i => $item)
                        <div class="team swiper-slide">
                            <h4 class="text-3xl sm:text-5xl text-[#1ABB9B] ">0{{ $i+1 }}</h4>
                            <img src="{{ asset('storage/' . $item['image']) }}" class="w-28 sm:w-40 h-full my-6" alt="">
                            <div class="text-center">
                                <h3 class="text-2xl mb-4 font-semibold">{{ $item['text1'] }}</h3>
                                <p>{{ $item['text2'] }}</p>
                                <p><i class="fa-solid fa-briefcase text-[#1ABB9B]"></i>&nbsp;{{ $item['text3'] }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

            <div class="flex  mt-8 justify-end z-40 w-full  gap-4  left-0">
                <div id="slide-prev2"><i
                        class="fa-solid fa-circle-chevron-left text-5xl text-zinc-200 bg-red-600 border border-red-600 hover:text-black rounded-full"></i>
                </div>
                <div id="slide-next2"><i
                        class="fa-solid fa-circle-chevron-right text-5xl text-zinc-200 bg-red-600 border border-red-600 hover:text-black rounded-full"></i>
                </div>
            </div>
        </div>
    </section>
@endif
@endif