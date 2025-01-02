@extends('layouts.base')

@section('title') 
    Blogs - Digi4shastri
@endsection


@section('contents')

<!-- section2 -->
<section class="md:p-20 p-7 lg:px-28 flex flex-wrap justify-between gap-y-7 items-stretch">
    <div class="sm:w-[68%] w-full">
        <h2 class="text-red-600 md:text-6xl text-3xl font-bold mb-10">Blogs</h2>
        @if (!empty($mainBlog))
            <div class="bg-[#fff4c7] p-6 rounded-xl">
                <img src="{{ asset('storage/'. $mainBlog->primary_image) }}" class=" w-full h-auto max-h-[400px] object-cover rounded-lg mb-8"
                    alt="">
                <div class="text-red-600 bg-yellow-400 py-2 px-5  max-w-max shadow-lg shadow-zinc-500 font-bold mb-7"><p>{{ $mainBlog->created_at->format('d M Y') }}</p>
                </div>

                <a href="{{ route('page.blog', $mainBlog->slug) }}" class="md:text-3xl text-2xl font-semibold ">{{ $mainBlog->heading }}</a>
                <h4 class="text-xl text-red-600 mt-6 font-bold">By Admin</h4>
            </div>
        @endif
    </div>

    <div class="sm:w-[29%] w-full">
        <h3 class="text-red-600 font-medium text-2xl max-sm:text-xl mb-9">Free Registration for Digi4Shastri Digital
            Marketing 101 Masterclass ends in soon</h3>

            @foreach ($otherBlogs as $item)
                <div class="bg-[#fff4c7] p-3 flex gap-3 mb-8">
                    <img src="{{ asset('storage/' . $item->primary_image) }}" class="w-24 h-28" alt="">
                    <div class="pt-3 w-full">
                        <a href="{{ route('page.blog', $item->slug) }}" class="btn-p rounded-lg cursor-pointer">View</a>
                        <h3 class="text-red-600 text-2xl font-bold mt-4 mb-1 truncate overflow-hidden whitespace-nowrap" 
                            style="max-width: calc(100% - 7rem);" 
                            title="{{ $item->heading }}">
                            {{ $item->heading }}
                        </h3>
                        <p>{{ $item->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            @endforeach

          
        
    </div>



</section>

@include('pages.inc.ourProgramsSection')
<!-- section4 -->
<section class="lg:px-28 md:p-20 py-16 px-4">
    <div
        class="flex flex-wrap rounded-2xl border-4 gap-3 border-white shadow-md items-center justify-between md:px-20 py-10 px-8 bg-main relative">
        <div>
            <h2 class="text-3xl font-semibold md:text-6xl mb-4">Still Confused?</h2> <a href="{{ route('page.contactUs') }}"
                class="text-white hover:text-yellow-500 text-lg cursor-pointer md:text-xl">Take the Next Step With
                Free Demo
                &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="md:mr-36"><a href="{{ route('page.contactUs') }}" class="btn-p min-w-max cursor-pointer ">Get Free Access</a></div>
        <img src="images/home/blog-thumb.png"
            class="h-auto w-[25vw] absolute right-0 bottom-0 max-w-56 max-md:hidden" alt="">
    </div>
</section>

<!-- section5 -->
<section class="max-w-7xl lg:px-28 md:p-20 p-7 mx-auto flex flex-wrap items-stretch">
    <div class="md:w-[35%] bg-[#19B697] sm:w-[25%] w-full flex flex-col justify-center items-center py-20 px-6">
        <img src="images/home/form.png" class="w-full h-auto  max-w-80 mb-7" alt="">
        <p class="text-xl font-bold text-center">You are just a click away from shaping your future</p>
    </div>
    <div class="md:w-[65%] border-2 border-[#19B697] sm:w-[75%] w-full">
        @include('pages.inc.careerCounsellingForm')
    </div>
</section>

@endsection