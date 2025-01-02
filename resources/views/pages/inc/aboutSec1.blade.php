@if (!empty($sections[0]))
    @php
        $sec1 = $sections[0];
    @endphp

    @if ($sec1->status == 1)
    <section class=" relative border-t border-[#fffffff3]  overflow-hidden">
        <img src="images/about/bg.png" class="absolute top-0 left-0 h-full w-full" alt="">
        <div class="z-20 relative">
            <div class="flex md:px-20 p-4  justify-between max-md:flex-wrap-reverse items-center  w-full bg-grid2">
                <div class="space-y-9 max-md:space-y-7 md:w-[54%] w-full">
                    <h1 class=" font-semibold lg:text-6xl md:text-5xl text-4xl">{{ $sec1->heading }}</h1>
                    <p class="text-white lg:text-2xl text-lg md:text-xl font-medium">{{ $sec1->sub_heading1 }}</p>


                    <p class="text-white lg:text-2xl text-lg md:text-xl font-medium">{{ $sec1->sub_heading2 }}</p>

                </div>
                <div class="lg:w-[38%] md:w-[43%] w-[80%] mx-auto">
                    <img src="images/about/man.png" class="h-fit w-full" alt="">
                </div>
            </div>
            <!-- company's slider -->
        </div>
        <div class="sm:h-40 h-20 w-full"></div>

        <!-- arrow -->
        <img src="images/banner/arrow.png" class="absolute top-0 -left-12 h-[87%]" alt="">
    </section>
@endif
@endif
