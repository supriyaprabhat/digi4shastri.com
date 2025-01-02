<!-- section6 -->
@if (!empty($course->key_skills))
    <section class="flex  mx-auto gap-y-5 md:p-20 p-7 lg:px-28 flex-wrap justify-between items-stretch">
        <h2 class="text-3xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">Key Skills You Will Learn</h2>
            @foreach ($course->key_skills as $item)
                <!-- cards -->
                <div class="  md:w-[22%] w-[47%] rounded-lg  border border-[#1ABC9C] hover:shadow-md shadow-lg p-4 flex justify-around items-center flex-col">
                    <img src="{{ asset('storage/' . $item['image']) }}" class="w-full h-auto max-w-20" alt="">
                    <h4 class="w-full mt-3 text-center font-bold text-xl">{{ $item['heading'] }}</h4>
                </div>
            @endforeach
        </div>
    </section>
@endif