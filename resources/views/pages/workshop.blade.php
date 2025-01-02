@extends('layouts.base')

@section('title')
    Workshop - Digi4shastri
@endsection


@section('contents')

@if (!empty($sections['0']))
  @php
      $sec = $sections['0'];
  @endphp
  @if (!empty($sec->status) == 1)
    <!-- section1 -->
    <section
        class="flex flex-col items-center bg-main border-t border-[#fffffff3] md:pb-20 pb-14 relative overflow-x-hidden">
        <img src="images/workshop/1.png" class="absolute top-[250vh] left-24 max-sm:hidden" alt="">
        <img src="images/workshop/2.png" class="absolute top-[160vh] -left-28 max-sm:hidden" alt="">
        <img src="images/workshop/3.png" class="absolute bottom-[90vh] -right-10 max-sm:hidden w-44" alt="">
        <img src="images/workshop/4.png" class="absolute bottom-20 right-14 max-sm:hidden w-40" alt="">


        <div class="md:p-20 p-7 flex flex-col items-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl text-center font-semibold">{{ $sec->heading }}</h2>
        <p class="md:!my-9 my-7 text-center md:text-xl text-lg max-w-3xl">{{ $sec->sub_heading1 }}</p>
              

            <a href="#" class="btn-p mx-auto !px-8 cursor-pointer">Enroll Now</a>
        </div>
        <div class="flex gap-y-4 flex-wrap justify-center py-6 md:px-20 px-7">
            <!-- card -->
            @foreach ($courses as $course)
              <div class="md:w-[29%] bg-white m-[2%] border border-white sm:w-[44%] w-[96%] shadow-xl rounded-xl overflow-hidden">
                <img src="{{ asset('storage/' . $course->thumbnail_image) }}" class="w-full h-auto" alt="">
                <div class="py-2 px-4 flex justify-between items-center">
                    <p class="text-sm">{{ $course->rating }}/5 Rating</p>
                    <p class="text-sm">{{ $course->total_enrolled }}+ Enrolled</p>
                </div>
                <div class="py-9 px-5">
                    <h3 class="text-2xl mb-8 font-bold">{{ $course->name }}</h3>
                    <a href="{{ route('page.course', $course->id) }}"> <button class="btn-p !w-full">Learn more</button>
                    </a>
                </div>
            </div>
            @endforeach
            
        </div>

        <h2 class="my-7 md:my-16 text-white text-3xl md:text-4xl">SUGGESTION FORM</h2>
        <div class=" max-w-lg w-full px-6">
            <div class="border-2 border-black p-6 text-center space-y-3 bg-yellow-500">
                <h3 class="text-2xl font-bold">Express Your Thought</h3>
                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elitsed do eiusmod tempororem ipsum
                    dolor
                    sit am econsect ametconsectetetur adipiscing.</p>
            </div>
            <div class="p-7 bg-white flex flex-col items-center space-y-6">
                <h4 class="text-xl font-bold">How was your experiance?</h4>
                <img src="images/workshop/suggestion.png" class="max-w-36" alt="">
                <form class="w-full" method="post" action="{{ route('suggestions.form.submit') }}">
                    <div class="bg-yellow-200 p-6 w-full">
                      @csrf
                        <p class="text-sm text-center border-b-2 border-black leading-8">Describe your experience here..</p>
                        <input name="experience" type="text" class="border-b-2 border-black w-full bg-transparent mt-4 focus:outline-none">
                        <div class="mt-5 text-center space-x-4"><label>
                                <input type="radio" name="page" value="Blog"> Blog
                            </label>

                            <label>
                                <input type="radio" name="page" value="Suggestion"> Suggestion
                            </label>

                            <label>
                                <input type="radio" name="page" value="Other"> Other
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn-p w-full !border-2 !border-black">Send Feedback</button>
                </form>
            </div>
        </div>
    </section>

 @endif
@endif
@endsection
