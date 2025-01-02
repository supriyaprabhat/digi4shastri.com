@extends('layouts.base')

@section('title') 
    Centers - Digi4shastri
@endsection


@section('contents')
  
 <!-- section1 -->
 <section
 class="bg-grid flex flex-wrap justify-between items-center md:p-20 p-7 lg:px-28 border-t border-[#fffffff3] gap-y-14">
 <div class="md:w-[48%] w-full max-md:text-center font-medium">
   <img class="max-sm:w-20  max-md:mx-auto" src="{{ asset('images/home/trusted.png') }}" alt="">
   <h2 class="md:text-4xl lg:text-5xl text-3xl font-medium my-5 md:my-10">{{ $center->name }}</h2>

   <h3 class="text-xl font-normal !mb-8 md:!mb-14"> <span class="text-[#19B999]"><i
         class="fa-solid fa-graduation-cap"></i></span>{{ $center->students_trained }} Students Trained &nbsp;| &nbsp;<span
       class="text-[#19B999]"><i class="fa-solid fa-user-graduate"></i></span> {{ $center->students_placed }}% Students Placed &nbsp;|
     &nbsp;<span class="text-[#19B999]"><i class="fa-solid fa-chalkboard-user"></i></span> {{ $center->expert_mentors }}+ Expert Mentors
     &nbsp;| &nbsp;<span class="text-[#19B999]"><i class="fa-solid fa-trophy"></i></span> {{ $center->years_in_industry }} Years in Industry &nbsp;

<br>
<br>
<br>
   <a href="{{ $center->cta_link_1 }}" class="btn-p mx-auto !px-8 cursor-pointer ">{{ $center->cta_name_1 }}</a>
 </div>
 <!-- form -->
 <div class="md:w-[43%] w-full max-md:pr-4 max-md:py-8 max-w-2xl md:mr-4">

   <div class="max-w-xl w-full relative ">
     <form class="p-7 bg-main3 w-full sticky z-20 " action="">

       <h3 class="text-xl sm:text-2xl font-bold mb-8">Get Course Brochure</h3>
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

<!-- section2 -->
<section class="md:p-24 p-9 lg:p-28 !pb-0  text-center">
 <h2 class=" md:text-4xl text-3xl font-medium my-5 md:my-10">{{ $center->heading }}
 </h2>

 <h4 class="text-2xl text-red-600 md:text-3xl">{{ $center->sub_heading1 }}</h4>

 <p class="my-5 md:my-10">{{ $center->paragraph1 }}</p>
 <div class="w-full flex flex-wrap items-end  justify-center gap-5 md:gap-20">
   <a href="{{ $center->cta_link_2 }}" class="tabs max-w-max gap-3">
     <div><i class="fa-solid fa-computer"></i></div>
     <p>{{ $center->cta_name_2 }}</p>
   </a>

   <div class="flex gap-2 items-center"><img src="{{ asset('images/home/phone-icon.png') }}" class="scale-[-1] h-7 " alt="">
     <h4 class="text-xl md:text-2xl">{{ $center->cta_name_3 }}</h4>
   </div>
 </div>
</section>
<img src="{{ asset('images/icons/Wave.png') }}" class="w-full" alt="">

<!-- section3 -->
<section class="flex flex-col items-center  md:p-20 p-9  overflow-x-hidden">

 <img src="{{ asset('images/center/logo.png') }}" class="w-20 md:w-28" alt="">
 <h4 class="text-xl font-bold my-4">{{ $center->sub_heading2 }}</h4>
 <h2 class="sm:text-4xl lg:text-5xl text-3xl text-red-600 text-center font-medium ">{{ $center->sub_heading3 }}
 </h2>
 <p class="my-6 md:my-9 text-center mx-auto max-w-6xl">{{ $center->paragraph2 }}</p>

 <div class="flex flex-col justify-center relative items-center md:h-[500px] h-80 w-full max-w-5xl bg-center-page rounded-2xl z-20 !mb-11" style="background-image: url({{ asset('storage/' . $center->image1) }})">
   <a href="" class="youtube"><img src="{{ asset('images/workshop/youtube.png') }}" class="w-12 md:w-16" alt=""></a>

   <img src="{{ asset('images/center/thumb1.png') }}" class="w-[30%]  right-0 -bottom-16 z-10 absolute" alt="">
 </div>
 <a href="{{ $center->cta_link_4 }}" class="btn-p mx-auto !px-8 cursor-pointer ">{{ $center->cta_name_4 }}</a>

</section>

<!-- section4 -->
<section class="benifit md:p-20 p-7 lg:px-28 flex flex-wrap justify-between">
 <div class="sm:w-[39%] w-full lg:-mt-24">
   <img class="-ml-7 md:-ml-20 lg:-ml-28" src="{{ asset('images/center/thumb2.png') }}" alt="">

   <div class="border-2 rounded-lg border-[#1ABC9C] p-9 sm:mt-24 mt-11">
     <h3 class="text-2xl md:text-3xl text-[#1ABC9C]">{{ $center->sub_heading5 }}</h3>
   </div>
 </div>

 <div class="sm:w-[57%] md:w-[45%] sm:pt-20 pt-11 w-full space-y-9">
   <h2 class="text-red-600 md:text-4xl text-3xl font-bold">{{ $center->sub_heading4 }}</h2>
   <p>{{ $center->paragraph3 }}</p>

   <div class="p-7 border-2 border-[#1ABC9C]">
     <p>{{ $center->paragraph4 }}</p>
   </div>
 </div>
</section>

<!-- section5 -->
<section class="md:p-20 flex flex-col items-center p-7 lg:px-28 bg-grid">
 <img src="{{ asset('images/center/logo.png') }}" class=" w-20 md:w-28 mb-5" alt="">
  @if (!empty($center->repeater1))
      @foreach ($center->repeater1 as $item)
      <p class="sm:text-xl lg:text-2xl text-lg text-center max-w-2xl mb-8 md:mb-12 font-medium">{{ $item['text'] }}</p>
      @endforeach
  @endif
  
</section>

<!-- slider -->
<section class="md:p-20 p-7 lg:px-28">
 <div class="swiper3  w-full h-auto  overflow-hidden relative">
   <!-- Additional required wrapper -->
   <div class="swiper-wrapper ">

    @if (!empty($center->repeater2))
      @foreach ($center->repeater2 as $item)
        <div class="swiper-slide w-full flex flex-wrap justify-around items-center gap-y-3 border-y-2 border-[#1d826e] py-12">
        <h3 class="md:w-[31%] w-full sm:text-2xl text-xl font-bold">{{ $item['heading'] }}</h3>
        <p class="md:w-[31%] w-[48%] sm:text-xl text-lg ">{{ $item['text1'] }}</p>

        <p class="md:w-[31%] w-[48%] sm:text-xl text-lg ">{{ $item['text2'] }}</p>
      </div>
      @endforeach
    @endif
     
   </div>

   <div class="mt-11 text-center">
     <div class="swiper-pagination3"></div>
   </div>
   <!-- <div class="flex  mt-8 justify-between z-40 w-full absolute top-[49%]  left-0">
     <div id="slide-prev2"><i
         class="fa-solid fa-circle-chevron-left text-5xl text-[#1ABC9C] bg-white hover:text-black rounded-full opacity-55 "></i>
     </div>
     <div id="slide-next2"><i
         class="fa-solid fa-circle-chevron-right text-5xl text-[#1ABC9C] bg-white hover:text-black rounded-full opacity-55 "></i>
     </div>
   </div> -->
 </div>
 <div class="w-full flex flex-wrap items-end mt-8 justify-center gap-5 sm:gap-20">
   <a href="{{ $center->cta_link_5 }}" class="tabs max-w-max gap-3">
     <p>{{ $center->cta_name_5 }}</p>
   </a>

   <a href="{{ $center->cta_link_6 }}" class="tabs max-w-max gap-3">
     <p>{{ $center->cta_name_6 }}</p>
   </a>
 </div>
</section>

<!-- section7 faqs -->
<section class="md:p-20 p-7 lg:px-28">
 <!-- FAQ  -->
 <div class="mb-11">
   <h4 class="text-3xl sm:text-5xl text-red-600 font-bold">Frequently Asked Questions</h4>
 </div>
 <div class="faq ">
  @if (!empty($center->faq))
    @foreach ($center->faq as $i => $item)
    <div class="{{ $i == 0 ? 'active' : '' }} faq-item p-4 mb-3 shadow-xl">
      <div class="question">
        <h3 class="text-xl font-bold">
          {{ $item['question'] }}
        </h3>
        <i class="fa-solid fa-circle-chevron-down"></i>
      </div>
      <div class="answer">
        <hr class="my-3" />{{ $item['answer'] }}
        <br />
      </div>
    </div>
  @endforeach
  @endif

 </div>
</section>


@endsection