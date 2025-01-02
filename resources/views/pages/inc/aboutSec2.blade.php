@if (!empty($sections[1]))
    @php
        $sec2 = $sections[1];
    @endphp

    @if ($sec2->status == 1)
      <!-- 2nd section -->
      <section class="md:p-20 p-7 lg:px-28">
        <div class="flex  py-11 flex-wrap justify-between items-center">
            <div class="sm:w-[48%] md:w-[39%] w-full">
                <img src="images/about/vision.png" alt="">
            </div>
            <div class="sm:w-[48%] w-full py-11 md:px-9">
                <h2 class="sm:text-4xl md:text-5xl font-bold text-red-600 mb-8 md:mb-11">{{ $sec2->heading }}</h2>
                <p class="text-lg md:text-xl">{{ $sec2->sub_heading1 }}<br> <br>{{ $sec2->sub_heading2 }}
                </p>

            </div>
        </div>
    </section>
@endif
@endif