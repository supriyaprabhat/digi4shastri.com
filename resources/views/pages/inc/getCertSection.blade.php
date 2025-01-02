<!-- section3 -->
@if (!empty($sections[2]->other1))
    @php
        $getCertSection = $sections[2];
    @endphp

    @if ($getCertSection->status == 1)
      <section class="flex md:p-32 py-16 px-4 gap-y-5 justify-between relative flex-wrap bg-circular">

        @foreach ($sections[2]->other1 as $item)
        <div class="bg-white p-6 rounded-lg shadow-2xl transition-all hover:scale-105 space-y-4 md:w-[31%] sm:w-[48%] w-full">
          <img class="w-12" src="{{ asset('storage/' . $item['image']) }}" alt="">
          <h3 class="font-medium text-2xl">{{ $item['text1'] }}</h3>
          <p>{{ $item['text2'] }}</p>
        </div>
        @endforeach
          

      </section>
    @endif
@endif
  