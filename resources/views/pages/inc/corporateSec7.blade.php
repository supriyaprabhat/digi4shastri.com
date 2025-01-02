@if (!empty($sections[6]))
    @php
        $sec = $sections[6];
    @endphp

    @if ($sec->status == 1)
        <!-- section7 -->
        <section class="lg:px-28 md:p-20 py-16 px-4">
            <div
                class="flex flex-wrap rounded-2xl border-4 gap-3 border-white shadow-md items-center justify-between md:px-20 py-10 px-8 bg-main relative">
                <div class="md:w-[60%] ">
                    <h2 class="text-3xl font-semibold md:text-4xl text-white">{{ $sec->heading }}</h2>
                </div>
                <div><a href="{{ asset('storage/' . $sec->image) }}" class="btn-p min-w-max cursor-pointer ">Get Broucher</a></div>

            </div>
        </section>
    @endif
@endif