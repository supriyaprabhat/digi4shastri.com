<section
    class="bg-grid flex flex-wrap justify-between items-center md:p-20 p-7 lg:px-28 border-t border-[#fffffff3] gap-y-14">
    <div class="md:w-[48%] w-full max-md:text-center font-medium">
      <img class="max-sm:w-20  max-md:mx-auto" src="images/home/trusted.png" alt="">
      <h2 class="md:text-3xl text-2xl font-medium my-5">({{ $course->code }})<br>{{ $course->name }}</h2>


      @if (!empty($course->faqs))
          @foreach ($course->faqs as $i => $faq)
            <h3 class="text-xl font-semibold {{ $i != 0 ? 'mt-4 md:mt-7' : '' }}">{{ $faq['question'] }}</h3>
            <p>{{ $faq['answer'] }}</p>
          @endforeach
      @endif

      <h4 class="md:text-3xl text-2xl font-medium mt-7 md:mt-12 text-red-600">{{ $course->heading1 }}</h4>
      <p class="mt-6 mb-9 text-sm">{{ $course->p1 }}</p>

      <a href="#" class="btn-p mx-auto !px-8 cursor-pointer ">Courses duration: {{ $course->duration }}</a>
    </div>
    <!-- form -->
    <div class="md:w-[43%] w-full max-md:pr-4 max-md:py-8 max-w-2xl md:mr-4">

      <div class="max-w-xl w-full relative ">
        <form class="p-7 bg-main3 w-full sticky z-20 " action="">

          <h3 class="text-xl sm:text-2xl font-bold mb-8">Get Course Brochure</h3>
          <div class="mb-4 space-y-2 flex flex-col">
            <label for="name" class="text-lg font-medium">NAME</label>
            <input type="text" name="name" id="name" class="p-3 bg-[#8dc2b7]">
          </div>

          <div class="mb-4 space-y-2 flex flex-col">
            <label for="email" class="text-lg font-medium">EMAIL</label>
            <input type="text" name="email" id="email" class="p-3 bg-[#8dc2b7]">
          </div>
          <div class="mb-4 space-y-2 flex flex-col">
            <label for="email" class="text-lg font-medium">City</label>
            <input type="text" name="city" id="city" class="p-3 bg-[#8dc2b7]">
          </div>

          <div class="mb-8 space-y-2 flex flex-col">
            <label for="name" class="text-lg font-medium">MESSAGE</label>
            <textarea name="message" id="message" class="p-3 bg-[#8dc2b7]"></textarea>
          </div>

          <button class="btn-p w-full !border-2 !border-zinc-900" type="submit">Send Now</button>
        </form>

        <div class="w-full h-full rotate-180 absolute bottom-5 -right-5 z-10 bg-oran"></div>
      </div>

    </div>
  </section>
  <img src="images/icons/Wave.png" class="w-full" alt="">