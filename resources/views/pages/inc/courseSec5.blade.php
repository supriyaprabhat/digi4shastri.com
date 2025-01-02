 <!-- section5 -->
@if (!empty($course->heading2))
    <section class="md:p-20 p-7 lg:px-28 pb-11 sm:mb-24 relative border-y-2 border-blue-500 bg-slate-200 ">
        <div class="md:space-y-8 space-y-4 sm:w-[52%] w-full font-medium max-sm:text-center">
            <h4 class="md:text-4xl text-2xl text-red-600">{{ $course->heading2 }}</h4>
            <h2 class="text-4xl md:text-6xl">{{ $course->heading3 }}</h2>
            <p class="!mb-9 md:!mb-14 md:text-lg">{{ $course->p2 }}</p>
            <a href="{{ asset('storage/' . $course->brochure) }}" class="btn-p md:text-xl  !px-8 cursor-pointer ">Get Course Brochure</a>
        </div>
        <img src="{{ asset('images/course/attend.png') }}"
            class="absolute top-4 lg:right-20 max-sm:hidden right-2 sm:w-[49%] lg:w-[36%] h-auto max-w-[504px]"
            alt="">
    </section>
@endif