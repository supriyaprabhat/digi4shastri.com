@if (!empty($sections[3]))
    @php
        $sec4 = $sections[3];
    @endphp

    @if ($sec4->status == 1)
    <!-- section4 -->
    <section class="md:p-20 p-7 lg:px-28">
        <h2 class="text-4xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">Our Story
        </h2>
        <div class="flex overflow-auto gap-6 justify-between py-4 items-center relative">
            <div class="absolute top-1/2 left-0 h-0 w-full border-dashed border-2 border-red-600 -z-10"></div>
            @if (!empty($sec4->other1))
                @foreach ($sec4->other1 as $i => $item)
                <div class="w-20 h-20 min-w-20 rounded-full border-4 border-[#1ABC9C] bg-oran py-5 text-center text-xl font-medium hover:text-white cursor-pointer  transition-all duration-300"
                    onclick="togglestory({{ $i }})">
                    <h4 class="text-2xl">{{ $item['text1'] }}</h4>
                </div>
                @endforeach
            @endif
        </div>

        @if (!empty($sec4->other1))
            @foreach ($sec4->other1 as $i => $item)
                <div class="my-7 space-y-3 {{ $i == 0 ? '' : 'hid' }}" id="story{{ $i+1 }}">
                    <h3 class="text-xl md:text-3xl text-red-600 font-semibold">{{ $item['text2'] }}</h3>
                    <p>{{ $item['text3'] }}
                    </p>
                </div>
            @endforeach
        @endif
    </section>
@endif
@endif