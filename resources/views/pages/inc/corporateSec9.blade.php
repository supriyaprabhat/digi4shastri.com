@if (!empty($sections[8]))
    @php
        $sec = $sections[8];
    @endphp

    @if ($sec->status == 1)
        <!-- section9 -->
        <section class="md:p-20 p-7 lg:px-28">
            <h2 class="text-3xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">{{ $sec->heading }}
            </h2>
            <!-- slider -->
            <div class="swiper  mx-auto w-full h-auto mt-11 overflow-hidden relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper text-white">

                    @foreach ($sec->other1 as $item)
                        <div class="swiper-slide yt">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="">
                        </div>
                    @endforeach

                </div>

                <div class="mt-14 text-center">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    @endif
@endif