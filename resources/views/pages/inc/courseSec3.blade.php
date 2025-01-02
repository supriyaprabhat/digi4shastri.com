 <!-- section3 -->
 <section class="md:p-20 p-7 lg:px-28">


    <div class="flex flex-wrap  justify-between items-center gap-y-7">
        <div class="md:w-[52%] w-full py-11">
            <h2 class="text-3xl md:text-5xl mb-7 md:mb-14 text-red-600 font-semibold">Course Curriculum</h2>
            <!-- tabs -->
            <div class="flex flex-wrap mb-9  gap-5">
                <div class="tabs max-w-max gap-3" id="tab1" onclick="toggleTab(0)">
                    <div><i class="fa-solid fa-computer"></i></div>
                    <p>Digital Marketing Section</p>
                </div>
                <div class="tabs max-w-max gap-3 active" id="tab2" onclick="toggleTab(1)">
                    <div><i class="fa-solid fa-computer"></i></div>
                    <p>Digital Marketing Section</p>
                </div>
            </div>
            <!-- Modules -->
            <div class="space-y-4 hid sm:h-[470px] sm:overflow-auto " id="opentab1">
                @if (!empty($course->curriculum_tab_1))
                    @foreach ($course->curriculum_tab_1 as $item)
                        <div class="module">
                            <div class="flex items-center gap-2 cursor-pointer" onclick="toggleModule(this)">
                                <div class="font-bold text-4xl text-green-700 -mt-2">+</div>
                                <h2 class="sm:text-2xl text-xl font-medium">{{ $item['module'] }}</h2>
                            </div>
                            <ul class="list-disc list-inside ml-9 ">
                                @foreach ($item['activities'] as $activity)
                                    <li>{{ $activity['activity'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="space-y-4 sm:h-[470px] sm:overflow-auto " id="opentab2">
                @if (!empty($course->curriculum_tab_2))
                    @foreach ($course->curriculum_tab_2 as $item1)
                        <div class="module">
                            <div class="flex items-center gap-2 cursor-pointer" onclick="toggleModule(this)">
                                <div class="font-bold text-4xl text-green-700 -mt-2">+</div>
                                <h2 class="sm:text-2xl text-xl font-medium">{{ $item1['module'] }}</h2>
                            </div>
                            <ul class="list-disc list-inside ml-9 ">
                                @foreach ($item1['activities'] as $activity1)
                                    <li>{{ $activity1['activity'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="md:w-[32%] w-full">
            <img src="{{ asset('images/course/girl.png') }}" alt="">
        </div>

    </div>
</section>