<!-- section 10 -->
@if (!empty($course->career_supports))
    <section class="flex  mx-auto gap-y-5 md:p-20 p-7 lg:px-28 flex-wrap justify-between items-stretch">
        <h2 class="text-3xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">Bonus Module</h2>

        @foreach ($course->career_supports as $item)
            <div class="  md:w-[22%] w-[47%] border-2 border-t-white border-[#1ABC9C] hover:shadow-md shadow-lg p-4 flex justify-around items-center flex-col">
                <img src="{{ asset('storage/' . $item['icon']) }}" class="w-full h-auto max-w-20" alt="">
                <h4 class="w-full mt-3 text-center font-bold text-xl">{{ $item['heading'] }}</h4>
            </div>
        @endforeach

    </section>
@endif
