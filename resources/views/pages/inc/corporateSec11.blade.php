@if (!empty($sections[9]))
    @php
        $sec = $sections[9];
    @endphp

    @if ($sec->status == 1)
    <!-- section11 faqs -->
        <section class="md:p-20 p-7 lg:px-28">
            <!-- FAQ  -->
            <div class="mb-11">
                <h4 class="text-3xl sm:text-5xl text-red-600 font-bold">{{ $sec->heading }}</h4>
            </div>
            <div class="faq ">
                @foreach ($sec->other1 as $i => $item)
                    <div class="{{ $i == 0 ? 'active' : '' }} faq-item p-4 mb-3 shadow-xl">
                        <div class="question">
                            <h3 class="text-xl font-bold">
                                {{ $item['text1'] }}
                            </h3>
                            <i class="fa-solid fa-circle-chevron-down"></i>
                        </div>
                        <div class="answer">
                            <hr class="my-3" />
                            {{ $item['text2'] }}
                            <br />
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
@endif