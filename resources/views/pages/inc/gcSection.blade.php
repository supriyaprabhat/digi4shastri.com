<!-- section8 -->

@if (!empty($sections[5]))
    @php
        $gcSection = $sections[5];
    @endphp

    @if ($gcSection->status == 1)
    <section class="bg-grid w-full flex justify-center flex-wrap items-center pb-8 max-md:p-4">
        <div class="md:w-[49%] md:p-14 py-8 p-6 w-full max-w-2xl">
          <h3 class="text-xl sm:text-2xl font-bold">{{ $gcSection->sub_heading1 }}/h3>
          <h2 class="text-red-700 font-semibold md:text-4xl lg:text-6xl max-sm:text-3xl  my-7 md:my-16">{{ $gcSection->heading }}</h2>
          <div class="flex gap-4 md:gap-10 items-center my-4 md:my-10">
            <img class="w-16 h-16" src="images/home/call-i.png" alt="">
            <div>
              <p class="text-lg md:text-xl font-bold text-yellow-400 ">Call Us</p>
              <a class="text-lg md:text-xl font-bold" href="">{{ $gcSection->sub_heading1 }}</a>
            </div>
          </div>
    
          <div class="flex gap-4 md:gap-10 items-center my-4 md:my-10">
            <img class="w-16 h-16" src="images/home/msg-i.png" alt="">
            <div>
              <p class="text-lg md:text-xl font-bold text-yellow-400">Email Address</p>
              <a class="text-lg md:text-xl font-bold" href="">{{ $gcSection->sub_heading2 }}</a>
            </div>
          </div>
    
          <div class="flex gap-4 md:gap-10 items-center my-4 md:my-10">
            <img class="w-16 h-16" src="images/home/location-i.png" alt="">
            <div>
              <p class=" text-yellow-400 text-lg md:text-xl font-bold">Country</p>
              <a class="text-lg md:text-xl font-bold" href="">{{ $gcSection->sub_heading3 }}</a>
            </div>
          </div>
        </div>
        <!-- form section -->
        <div class="md:w-[49%] w-full max-md:p-7 max-w-2xl md:mr-4">
          <img src="images/home/phone-icon.png" class="mx-auto max-w-40 w-[26vw]" alt="">
          <div class="max-w-xl w-full relative ">
            <form method="post" class="p-7 bg-main2 w-full sticky z-20 " action="{{ route('consultation.form.submit') }}">
              @csrf
              <h3 class="text-xl sm:text-2xl font-bold mb-10">Get a Consultation</h3>
              <div class="mb-8 space-y-2 flex flex-col">
                <label for="name" class="text-lg font-bold">NAME</label>
                <input type="text" name="name" id="name" class="p-3 bg-[#8dc2b7]">
              </div>
    
              <div class="mb-8 space-y-2 flex flex-col">
                <label for="email" class="text-lg font-bold">EMAIL</label>
                <input type="text" name="email" id="email" class="p-3 bg-[#8dc2b7]">
              </div>
    
              <div class="mb-8 space-y-2 flex flex-col">
                <label for="message" class="text-lg font-bold">MESSAGE</label>
                <textarea name="message" id="message" class="p-3 bg-[#8dc2b7]"></textarea>
              </div>
    
              <button class="btn-p w-full !border-2 !border-zinc-900" type="submit">Get a Consultation</button>
            </form>
    
            <div class="w-full h-full absolute top-5 -right-5 z-10 bg-oran"></div>
          </div>
          <img src="images/home/phone-icon.png" class="rotate-180 max-w-44 w-[26vw] stickey -ml-24 -mt-20" alt="">
        </div>
      </section>
    @endif
@endif

  