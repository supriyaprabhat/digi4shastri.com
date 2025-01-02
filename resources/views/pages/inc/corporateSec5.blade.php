@if (!empty($sections[4]))
    @php
        $sec = $sections[4];
    @endphp

    @if ($sec->status == 1)
        <!-- section5 -->
        <section class="lg:px-28 md:p-20 py-16 px-4 flex flex-wrap justify-between gap-y-14">
            <h2 class="text-3xl md:text-4xl w-full text-red-600 font-semibold">{{ $sec->heading }}
            </h2>
            @if (!empty($sec->other1))
                @foreach ($sec->other1 as $item)
                    <!-- card -->
                    <div class="bg-img h-[400px] relative group md:w-[31%] sm:w-[48%] w-full text-center flex flex-col justify-center"
                    style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.492), rgba(0, 0, 0, 0.442)), url(images/home/img3.png);">
                    <h5 class="text-white font-bold text-3xl">{{ $item['text1'] }}</h5>
                    <div  class="w-[80%]  absolute opacity-0 group-hover:opacity-100 duration-300 top-[10%] left-[10%] pt-11 bg-main2 p-5 text-left">
                        <a href="" class="btn-p !mx-auto !px-8 cursor-pointer ">Select</a>
                        <h3 class="text-2xl text-yellow-400 mt-6">{{ $item['text2'] }}</h3>
                        <ul class="space-y-1 mt-5 text-lg mb-8">
                            @php
                                $headings = explode('|', $item['text3']);
                            @endphp
                            @foreach ($headings as $h)
                                <h3>• {{ $h }}</h3>
                            @endforeach
                            
                        </ul>
                        <a href="{{ $item['button_link'] }}">
                            <div
                                class=" text-center cursor-pointer bg-[#0D5B4B] hover:bg-black text-white py-3 px-11 text-lg duration-300 ">
                                {{ $item['btn_name'] }}
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            @endif

        </section>

    @endif
@endif