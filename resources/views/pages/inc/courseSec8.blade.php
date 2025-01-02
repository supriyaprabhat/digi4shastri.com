<!-- section8 -->
<section class=" md:p-20 p-7 lg:px-28 mt-11">
    <h2 class="text-3xl md:text-5xl md:mb-14 mb-8 w-full text-red-600 font-semibold">
        Projects, Case-Studies & Assignments</h2>
    <div class="flex overflow-auto mb-9 max-w-lg justify-between  gap-5">
        <div class="tabs min-w-max gap-3" id="tab3" onclick="toggleTab2(0)">
            <div><i class="fa-solid fa-computer"></i></div>
            <p>Assignments</p>
        </div>
        <div class="tabs min-w-max gap-3 " id="tab4" onclick="toggleTab2(1)">
            <div><i class="fa-solid fa-computer"></i></div>
            <p>Projects</p>
        </div>
        <div class="tabs min-w-max gap-3 active" id="tab5" onclick="toggleTab2(2)">
            <div><i class="fa-solid fa-computer"></i></div>
            <p>Case- Studies</p>
        </div>
    </div>
    <div class="space-y-4 hid" id="opentab3">
        @foreach ($course->assignments as $item)
            <p class="md:text-lg font-medium"><strong class="text-red-600 font-bold">{{ $item['heading'] }}</strong> {{ $item['texts'] }}</p>
        @endforeach
    </div>

    <div class="space-y-4 hid" id="opentab4">
        @foreach ($course->projects as $item)
            <p class="md:text-lg font-medium"><strong class="text-red-600 font-bold">{{ $item['heading'] }}</strong> {{ $item['texts'] }}</p>
        @endforeach
    </div>

    <div class="space-y-4" id="opentab5">
        @foreach ($course->case_studies as $item)
            <p class="md:text-lg font-medium"><strong class="text-red-600 font-bold">{{ $item['heading'] }}</strong> {{ $item['texts'] }}</p>
        @endforeach
    </div>
</section>