@if (!empty($sections[5]))
    @php
        $sec = $sections[5];
    @endphp

    @if ($sec->status == 1)
        <!-- section6 -->
        <section class="lg:px-28 md:p-20 gap-y-6 py-16 px-4 flex flex-wrap justify-between ">
            <h2 class="text-3xl md:text-4xl  w-full text-red-600 font-semibold">{{ $sec->heading }}
            </h2>
            <p class=" md:text-xl  mb-5 w-full font-semibold">{{ $sec->sub_heading1 }}
            </p>
            <!-- card -->
            @foreach ($sec->other1 as $item)
                <div class=" relative group md:w-[31%] sm:w-[48%] w-full text-center flex flex-col items-center">
                    <img src="{{ asset('storage/' . $item['image']) }}" class="w-28 h-28 rounded-full object-cover" alt="">
                    <div class="pt-20 -mt-16 text-center p-5 rounded-lg -z-10 border-2 w-full border-[#0C5748]">
                        <h3 class="text-red-600 text-xl font-bold mb-1">{{ $item['text1'] }}</h3>
                        <h4 class="text-lg mb-2">{{ $item['text2'] }}</h4>
                        <p class="text-sm">{{ $item['text3'] }}</p>
                    </div>
                </div>
            @endforeach
        </section>
    @endif
@endif