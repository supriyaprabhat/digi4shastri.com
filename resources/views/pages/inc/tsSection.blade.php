<!-- section9 testimonials -->
@if (!empty($sections[6]))
    @php
        $tSection = $sections[6];
    @endphp
    <section>
        <div class="md:p-20 p-6">
            <h2 class="text-red-700 font-semibold text-4xl md:text-5xl ">{{ $tSection->heading }}</h2>
            <p class="text-lg sm:text-xl max-w-4xl">{{ $tSection->sub_heading1 }}</p>
        </div>

        <div class="flex flex-wrap gap-y-4 md:gap-y-8 justify-between md:p-20 p-6 py-9 bg-main2">
            <!-- cards -->
            @if (!empty($tSection->other1))
              @foreach ($tSection->other1 as $item)
              <div class="p-4 rounded-xl shadow-lg shadow-[#366a60] md:w-[31%] sm:w-[48%] w-full bg-white border border-[#1ABC9C]">
                <div class="flex items-center gap-3 mb-3">
                    <img class="w-12 h-12 rounded-full" src="images/testimonials/client1.png" alt="">
                    <h4 class="text-2xl font-semibold">{{ $item['text1'] }}</h4>
                </div>
                <p>{{ $item['text2'] }}</p>
                <div class="flex mt-2 justify-end">
                  <img class="w-5" src="images/icons/Star.png" alt="">
                  <img class="w-5" src="images/icons/Star.png" alt="">
                  <img class="w-5" src="images/icons/Star.png" alt="">
                  <img class="w-5" src="images/icons/Star.png" alt="">
                  <img class="w-5" src="images/icons/Star.png" alt="">
                </div>
              </div>
            @endforeach
            @endif
        </div>
    </section>
@endif
