@if (!empty($sections[2]))
    @php
        $sec3 = $sections[2];
    @endphp

    @if ($sec3->status == 1)
    <!-- section3 -->
    <section class="flex bg-grid mx-auto gap-y-5 md:p-20 p-7 lg:px-28 flex-wrap justify-between items-stretch">
        <h2 class="text-4xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">{{ $sec3->heading }}
        </h2>

        <!-- cards -->
        @if (!empty($sec3->other1))
            @foreach ($sec3->other1 as $item)
                <div class="  md:w-[22%] w-[47%] hover:shadow-md shadow-lg p-4 flex justify-around items-center flex-col bg-white">
                    <div class="w-16 h-16 p-1 text-center rounded-full border-4 border-red-600"><i
                            class="fa-solid fa-globe text-5xl text-[#014235]"></i></div>
                    <h4 class="w-full mt-3 text-center sm:text-4xl text-3xl">{{ $item['text1'] }}</h4>
                    <p class="text-xl mt-1 text-center">{{ $item['text2'] }}</p>
                </div>
            @endforeach
        @endif
        
        </div>
    </section>
@endif
@endif