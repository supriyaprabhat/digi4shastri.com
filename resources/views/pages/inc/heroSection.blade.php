@if (!empty($sections[0]))
    @php
        $heroSection = $sections[0];
    @endphp

    @if ($heroSection->status == 1)
        <section class=" relative border-t border-[#fffffff3] bg-main overflow-hidden">
            <div class="z-20 relative">
                <div class="flex md:px-20 p-4  justify-between max-md:flex-wrap-reverse items-center  w-full ">
                    <div class="space-y-9 max-md:space-y-7 md:w-[54%] w-full">
                        <h4 class="font-bold text-2xl md:text-3xl">{{ $heroSection->sub_heading1 }}</h4>
                        <h1 class="text-white font-semibold lg:text-6xl md:text-5xl text-4xl">{{ $heroSection->heading }}</h1>
                        <p class="text-white lg:text-2xl md:text-lg text-xl font-medium">{{ $heroSection->sub_heading2 }}</p>
                        <div class="flex items-center gap-5">
                            <a href="{{ $heroSection->button_link }}" class="btn-p cursor-pointer">{{ $heroSection->button_name }}</a>
                            <a href="{{ $heroSection->button_link1 }}">
                                <p
                                    class="text-lg text-yellow-500 flex hover:text-white transition-all cursor-pointer items-center">
                                    <i class="fa-regular fa-circle-play text-3xl"></i> &nbsp; {{ $heroSection->button_name1 }}</p>
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-[38%] md:w-[43%] w-[80%] mx-auto">
                        <img src="images/banner/boy.png" class="h-fit w-full" alt="">
                    </div>
                </div>

                <!-- company's slider -->
                <h4 class="font-bold text-2xl text-center md:text-3xl my-14 max-md:my-5">{{ $heroSection->sub_heading3 }}</h4>

                <div class=" marqueeContainer w-full py-2 sm:py-3 text-white overflow-hidden relative">

                    <div id="" class="marqueeContent whitespace-nowrap  flex md:gap-8 justify-between z-20">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl1.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl2.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl3.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl4.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl3.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl1.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl2.png" alt="">
                    </div>
                </div>

                <div class=" w-full marqueeContainer py-2 mt-8 mb-20  sm:py-3 text-white overflow-hidden relative">

                    <div id="" class="whitespace-nowrap marqueeContent flex md:gap-8 justify-between z-20">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl1.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl2.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl3.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl4.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl3.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl1.png" alt="">
                        <img class="w-auto h-10 mx-6" src="images/clients/cl2.png" alt="">
                    </div>
                </div>
            </div>
            <!-- arrow -->
            <img src="images/banner/arrow.png" class="absolute top-0 -left-12" alt="">
        </section>
    @endif
@endif


