@if (!empty($sections[3]))
    @php
        $scSection = $sections[3];
    @endphp

    @if ($scSection->status == 1)
         <!-- section5 -->
        <section class="md:p-20 py-16 px-4">
            <div
            class="flex rounded-2xl border-4 gap-3 border-white shadow-md items-center justify-between md:px-20 py-10 px-8 bg-main">
            <div>
                <h2 class="text-3xl font-semibold md:text-6xl mb-4">{{ $scSection->heading }}</h2> <a href="{{ $scSection->button_link }}"
                class="text-white hover:text-yellow-500 text-lg cursor-pointer md:text-xl">{{ $scSection->button_name }}
                &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <img src="{{ asset('storage/' . $scSection->image) }}" class="h-auto w-[25vw] max-w-64 max-md:hidden" alt="">
            </div>
        </section>
    @endif
@endif