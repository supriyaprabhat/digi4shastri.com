@if (!empty($sections[6]))
    @php
        $sec = $sections[6];
    @endphp

    @if ($sec->status == 1)
    <!-- section9 -->
    <h2 class="text-3xl md:p-20 p-7 lg:px-28 md:text-5xl  w-full text-red-600 font-semibold">Media Spotlight</h2>
    <section class="flex md:p-32 py-16 px-4 gap-y-5 justify-between relative flex-wrap bg-circular">

        @foreach ($sec->other1 as $item)
            <div
                class="bg-white p-6 rounded-lg shadow-2xl transition-all hover:scale-105 space-y-4 md:w-[31%] sm:w-[48%] w-full">
                <img class="w-12" src="{{ asset('storage/' . $item['image']) }}" alt="">
                <p>{{ $item['text1'] }}</p>
                <h3 class="text-lg text-right">{{ $item['text2'] }}</h3>
            </div>
        @endforeach

    </section>
@endif
@endif