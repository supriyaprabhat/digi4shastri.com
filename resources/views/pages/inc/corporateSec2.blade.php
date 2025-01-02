@if (!empty($sections[1]))
    @php
        $sec = $sections[1];
    @endphp

    @if ($sec->status == 1)
        <!-- section2 -->
        <section class="flex  mx-auto gap-y-5 md:p-20 p-7 lg:px-28 flex-wrap justify-between items-stretch">
            <h2 class="text-3xl md:text-4xl md:mb-14 mb-8 w-full text-red-600 font-semibold">Our Corporate Clients</h2>

            @foreach ($sec->other1 as $item)
                <div class="md:w-[24%] sm:w-[31%] w-[48%] border-2  border-[#1ABC9C] px-8 flex justify-around items-center flex-col">
                    <img src="{{ asset('storage/' . $item['image']) }}" class="w-full h-auto max-w-20" alt="">
                </div>
            @endforeach

        </section>
    @endif
@endif