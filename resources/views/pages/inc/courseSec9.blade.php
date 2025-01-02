 <!-- section9 -->
@if (!empty($course->career_supports))
    <h2 class="text-3xl md:p-20 p-7 lg:px-28 md:text-5xl  w-full text-red-600 font-semibold">Career Support</h2>
    <section class="flex md:p-32 py-16 px-4 gap-y-5 justify-between relative flex-wrap bg-circular">
        @foreach ($course->career_supports as $item)
            <div class="bg-white p-6 rounded-lg shadow-2xl transition-all hover:scale-105 space-y-4 md:w-[31%] sm:w-[48%] w-full">
                <img class="w-12" src="{{ asset('storage/' . $item['icon']) }}" alt="">
                <h3 class="font-medium text-2xl">{{  $item['heading'] }}</h3>
                <p>{{ $item['texts'] }}</p>
            </div>
        @endforeach
    </section>
@endif