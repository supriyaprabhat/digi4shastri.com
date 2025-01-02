@if (!empty($sections[0]))
    @php
        $sec = $sections[0];
    @endphp

    @if ($sec->status == 1)
        <!-- section1 -->
        <section class="lg:p-28 md:p-20 p-7 pb-14 relative flex flex-wrap gap-y-5  justify-between items-center">
            <img src="images/center/bg.png" class="rotate-180 w-full h-full absolute top-0 left-0" alt="">
            <div class="sm:w-[48%] w-full">
                <h1 class="lg:text-6xl text-4xl text-red-600 font-medium mb-11">{{ $sec->heading }}</h1>
                <p class="text-lg md:text-xl font-medium mb-8">{{ $sec->sub_heading1 }}</p>
                <p class="text-xl md:text-2xl font-medium mb-11">{{ $sec->sub_heading2 }}</p>
                <a href="" class="btn-p !mx-auto !px-8 cursor-pointer shadow-lg  max-sm:mx-auto">Enquire Now</a>
            </div>
            <div class="relative sm:w-[48%] w-full">
                <img src="images/corporate/banner-bg.png" class="w-full h-full" alt="">

                @if (!empty($sec->other1[0]))
                    <div class="bg-rad-grey absolute p-2 top-24  right-5 text-center max-w-52 w-[38vw]">
                        <h4 class="text-xl text-red-600 font-medium md:text-2xl">{{ $sec->other1[0]['text1'] }}</h4>
                        <p class="max-sm:text-xs">{{ $sec->other1[0]['text2'] }}</p>
                    </div>
                @endif
                
                @if (!empty($sec->other1[1]))
                    <div class="bg-rad-grey absolute p-2 bottom-20 right-2 text-center max-w-60 w-[39vw]">
                        <h4 class="text-xl text-red-600 font-medium md:text-2xl">{{ $sec->other1[1]['text1'] }}</h4>
                        <p class="max-sm:text-xs">{{ $sec->other1[1]['text2'] }}</p>
                    </div>
                @endif

                @if (!empty($sec->other1[2]))
                    <div class="bg-rad-grey absolute p-2 bottom-28 left-0 text-center max-w-48 w-[38vw]">
                        <h4 class="text-xl text-red-600 font-medium md:text-2xl ">{{ $sec->other1[2]['text1'] }}</h4>
                        <p class="max-sm:text-xs">{{ $sec->other1[2]['text2'] }}</p>
                    </div>
                @endif

            </div>
        </section>
    @endif

@endif