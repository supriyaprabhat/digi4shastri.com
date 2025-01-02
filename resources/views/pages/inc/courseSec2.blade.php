<!-- section2 -->
@if (!empty($course->cards))
    <section class="flex  mx-auto gap-y-5 md:p-20 p-7 lg:px-28 flex-wrap justify-between items-center">
        @foreach ($course->cards as $item)
            <div class="flex justify-around p-4 gap-2 sm:w-[47%] md:w-[31%] items-center w-full border border-[#138972] rounded-lg hover:shadow-xl transition-all duration-500">
                <div class="md:text-5xl text-4xl font-bold text-yellow-400"><i class="{{ $item['icon_code'] }}"></i></div>
                <div>
                    <h2 class="font-bold md:text-2xl  text-xl">{{ $item['heading'] }}</h2>
                    <p>{{ $item['texts'] }}</p>
                </div>
            </div>
        @endforeach
    </section>
@endif