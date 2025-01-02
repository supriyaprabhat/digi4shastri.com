@if (!empty($sections[5]))
    @php
        $sec7 = $sections[5];
    @endphp

    @if ($sec7->status == 1)
    <!-- section7 -->
    <section class="flex  mx-auto gap-y-5 md:p-20 p-7 lg:px-28 flex-wrap justify-between items-stretch">
        <h2 class="text-3xl md:text-4xl md:mb-14 mb-8 w-full text-red-600 font-semibold">{{ $sec7->heading }}</h2>

        @if (!empty($sec7->other1))
            @foreach ($sec7->other1 as $item)
                <div class="  md:w-[25%] w-[50%] border-x-2  border-[#1ABC9C] px-8 flex justify-around items-center flex-col">
                    <img src="{{ asset('storage/' . $item['image']) }}" class="w-full h-auto max-w-20" alt="">
                    <h4 class="w-full my-3 text-center font-bold text-xl">{{ $item['text1'] }}</h4>
        
                    <p class="text-center mt-2">{{ $item['text2'] }}</p>
                </div>
            @endforeach
        @endif
        
    </section>
@endif
@endif