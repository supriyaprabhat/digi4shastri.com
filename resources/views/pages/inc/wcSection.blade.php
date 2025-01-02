@if (!empty($sections[1]))
    @php
        $wcSection = $sections[1];
    @endphp

    @if ($wcSection->status == 1)
        <!-- why choose section2-->
        <section class="flex flex-col items-center text-center gap-y-5 sm:p-20 px-6 py-11 bg-grid">
            <img src="{{ asset('storage/' . $wcSection->image) }}" alt="">
            <h3 class="text-2xl font-bold ">{{ $wcSection->sub_heading1 }}</h3>
            <h2 class="text-red-700 font-semibold text-4xl">{{ $wcSection->heading }}</h2>
            <p class="text-xl max-w-2xl">{{ $wcSection->sub_heading2 }}</p>
        </section>
    @endif
@endif