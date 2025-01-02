@extends('layouts.base')

@section('title') 
    Contact Us - Digi4shastri
@endsection


@section('contents')
    
    @if (!empty($sections[0]))
        @php
            $section = $sections[0];
        @endphp

        @if ($section->status == 1)
            <img src="images/contact/bg.png" class="w-full h-auto min-h-64 max-h-[500px] object-cover" alt="">


            <!-- section2 -->
            <section class="md:p-20 p-7 lg:px-28">
                <h2 class="text-3xl text-center md:text-5xl  w-full text-red-600 font-semibold mb-11">{{ $section->heading }}
                </h2>
                <p class="md:text-lg text-center">{{ $section->sub_heading1 }}</p>
            </section>

            <section class="md:p-20 p-7 lg:px-28 max-w-6xl mx-auto">
        
                <h4 class="text-3xl  md:text-5xl  w-full text-red-600 font-semibold relative mb-11"><img
                        src="images/contact/thumb.png" class="absolute -z-10 h-36 -top-2 -left-5 md:h-72" alt="">Contact Us</h4>
                <div class="max-w-xl w-full  mx-auto">
                    <form method="post" class="p-7 md:p-11 bg-main3 w-full md:shadow-2xl shadow-lg rounded-2xl shadow-black" action="{{ route('contact.form.submit') }}">
                    @csrf
                        <h3 class="text-2xl sm:text-3xl font-bold mb-8">Drop Us A Message For Any Query</h3>
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
                </div>

                @if (!empty($section->other1))
                    <div class="mt-11 flex flex-wrap gap-y-6 justify-between items-stretch">
                        @foreach ($section->other1 as $i => $item)
                            <div class="md:w-[31%] text-center bg-[#FFE582] py-7 px-3  sm:w-[48%] w-full group shadow-xl shadow-gray-400">
                                <i class="fa-solid text-4xl group-hover:rotate-180 mb-8 transition-all duration-300 {{ $item['text3'] }} text-[#088b71]"></i><br>
                                <a href="{{ $i == 0 ? 'tel:' : '#' }}{{ $item['text1'] }}" class="text-lg font-medium hover:text-[#088b71] cursor-pointer">{{ $item['text1'] }}</a>
                                @if (!empty($item['text2']))
                                    <br>
                                    <a href="{{ $i == 0 ? 'tel:' : '#' }}{{ $item['text2'] }}" class="text-lg font-medium hover:text-[#088b71] cursor-pointer">{{ $item['text2'] }}</a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
                
            </section>
        
            <!-- section4 -->
            <section class="md:p-20 p-7 lg:px-28">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30773484.55170563!2d61.0245165611659!3d19.69009515037612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1730885022224!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        @endif
        
    @endif
     

@endsection