@if (!empty($sections[0]))
    @php
        $sec = $sections[0];
    @endphp

    @if ($sec->status == 1)

    @endif
@endif


<!-- section10 -->
<section class="max-w-7xl lg:px-28 md:p-20 p-7 mx-auto flex flex-wrap items-stretch">
    <div class="md:w-[35%] bg-[#19B697] sm:w-[25%] w-full flex flex-col justify-center items-center py-20 px-6">
        <h2 class="md:text-9xl text-8xl mb-4 text-yellow-400 font-medium">45%</h2>
        <p class="text-xl font-bold text-center">of organisations don't have a defined digital strategy. We are here
            to help.</p>
    </div>
    <div class="md:w-[65%] border-2 border-[#19B697] sm:w-[75%] w-full">
        @include('pages.inc.careerCounsellingForm')
    </div>
</section>