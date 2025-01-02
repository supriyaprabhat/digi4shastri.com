@if (!empty($about[9]))
@php
        $heroSection = $sections[0];
    @endphp

    @if ($heroSection->status == 1)
<section class="md:p-20 p-7 lg:px-28 gap-y-6 flex justify-between flex-wrap">
    <div class="bg-main3 p-6 sm:w-[48%] w-full relative overflow-hidden">
        <div class="bg-oran w-32 h-32 absolute -right-16 -bottom-16 rotate-45"></div>
        <h4 class="text-2xl font-medium text-white mb-8 sm:text-3xl">Have Any Queries?
            Get in Touch.</h4>
        <a href="" class="btn-p !mx-auto !px-8 cursor-pointer ">Contact Us</a>

    </div>

    <div class="bg-main3 p-6 sm:w-[48%] w-full relative overflow-hidden">
        <div class="bg-oran w-32 h-32 absolute -right-16 -bottom-16 rotate-45"></div>
        <h4 class="text-2xl font-medium text-white mb-8 sm:text-3xl">Wish to work with us?
            You are in luck.</h4>
        <a href="" class="btn-p !mx-auto !px-8 cursor-pointer ">Check Open Positions</a>

    </div>
</section>
@endif
@endif