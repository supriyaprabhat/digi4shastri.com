 <!-- section4 -->
 @if (!empty($course->tools_learn))
    <section class="flex  mx-auto gap-y-5 md:p-20 p-7 lg:px-28 flex-wrap justify-between items-stretch">
        <h2 class="text-3xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">Tools you will learn</h2>

        @foreach ($course->tools_learn as $tools)
            <!-- cards -->
            <div class="  lg:w-[31%] sm:w-[47%] w-full ">
                <div
                    class="border border-[#1ABC9C] hover:shadow-md bg-blue-100 p-4 flex justify-center items-center h-[179px]">
                    <img src="{{ asset('storage/' . $tools['image']) }}" class="w-full h-auto max-w-36" alt="">
                </div>
                <h4 class="w-full mt-4 text-center font-bold text-2xl">{{ $tools['heading'] }}</h4>
            </div>
        @endforeach

        </div>
    </section>
@endif
