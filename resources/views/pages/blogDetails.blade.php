@extends('layouts.base')

@section('title') 
    Blogs - Digi4shastri
@endsection


@section('contents')

<!-- section2 -->
<section class="md:p-20 p-7 lg:px-28 flex flex-wrap justify-between gap-y-7 items-stretch">
    <div class="sm:w-[68%] w-full">
        @if (!empty($blog))
            <div class="bg-[#fff4c7] p-6 rounded-xl">
                <img src="{{ asset('storage/' . $blog->primary_image) }}" class=" w-full h-auto max-h-[400px] object-cover rounded-lg mb-8"
                    alt="">
                <div class="text-red-600 bg-yellow-400 py-2 px-5  max-w-max shadow-lg shadow-zinc-500 font-bold mb-7"><p>{{ $blog->created_at->format('d M Y') }}</p>
                </div>

                <a href="" class="md:text-3xl text-2xl font-semibold ">{{ $blog->heading }}</a>
                <br>
                <br>
                <br>
                {!! $blog->contents !!}
            
                <h4 class="text-xl text-red-600 mt-6 font-bold">By Admin</h4>
            </div>
        @endif
    </div>

    <div class="sm:w-[29%] w-full">
            @foreach ($blogs as $item)
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