@if (!empty($sections[2]))
    @php
        $sec = $sections[2];
    @endphp

    @if ($sec->status == 1)
        <!-- section3 -->
        <section class="flex  mx-auto gap-y-5 md:p-20 p-7 lg:px-28 flex-wrap justify-between items-stretch">
            <h2 class="text-3xl md:text-4xl md:mb-10 mb-5 w-full text-red-600 font-semibold">Client Stories</h2>
            <!-- slider -->
            <div class="swiper2 mx-auto w-full h-auto mt-7 pb-14 overflow-hidden relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    @foreach ($sec->other1 as $item)
                        <div class="swiper-slide text-center  card-bg">
                            <p class="bg-[#1ABC9C] text-center p-4 text-lg font-bold">{{ $item['text1'] }}</p>
                            <div class="p-6 pb-9">
                                <p class="text-center mb-11">{{ $item['text2'] }}</p>
                                <a href="{{ $item['button_link'] }}" class="btn-p px-8 cursor-pointer shadow-lg  mx-auto">{{ $item['btn_name'] }}</a>
                            </div>
                        </div>
                    @endforeach
                    
                </div>

                <div class="mt-8 text-center">
                    <div class="swiper-pagination2"></div>
                </div>

            </div>
        </section>
    @endif
@endif