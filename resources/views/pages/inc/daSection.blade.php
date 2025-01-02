@if (!empty($sections[4]))
    @php
        $daSection = $sections[4];
    @endphp

    @if ($daSection->status == 1)
        <!-- section6 -->
        <section class="flex  justify-between items-center">
          <div class="md:p-20 md:py-10 p-5  max-w-[49vw]">
            <h2 class="text-red-700 font-semibold md:text-3xl lg:text-6xl text-2xl">DIGI4SHASTRI <br> ADVANTAGE</h2>
          </div>
          <div class="w-[50vw] h-[25vw] lg:w-[500px] lg:h-[250px] relative  flex justify-center ">
            <div
              class="absolute top-0 left-0 w-0 h-0 lg:border-l-[250px] lg:border-r-[250px] lg:border-b-[250px] border-l-[25vw] border-r-[25vw] border-b-[25vw] z-10 border-transparent border-b-[#0C5647]">
            </div>
            <img class="relative z-20 w-[40%] h-[80%] mt-[10%]" src="images/home/upper-arrow.png" alt="">
          </div>
        </section>

        <!-- section7 -->
        <section class="bg-main2 md:p-24 py-8 px-6 -mt-1">
          <h2 class="text-3xl font-semibold md:text-5xl mb-4">{{ $daSection->heading }}</h2>
          <p class="text-white md:text-xl max-w-4xl text-lg leading-6">{{ $daSection->sub_heading1 }}</p>
          <!-- slider -->

          <div class="swiper2 max-w-5xl mx-auto w-full h-auto md:mt-32 mt-14 overflow-hidden relative">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
             
              @foreach ($daSection->other1 as $item)
              <div class="swiper-slide group hover:shadow-xl bg-[#159B80] h-auto w-full  border transition-all border-white relative">
                <div class="w-full h-52 overflow-hidden">
                  <img class="w-full h-full group-hover:scale-110 transition-all object-cover z-10" src="images/home/img1.png"
                    alt="">
                </div>
                <div class="w-[80%] mx-[10%] text-center sticky py-2 -mt-7 text-xl font-medium  bg-[#159B80] z-30">{{ $item['text1'] }}
                </div>
                <div class=" w-full px-5 ">
                  <h3 class="text-white my-2 text-2xl text-center md:text-3xl font-semibold ">{{ $item['text2'] }}</h3>
                  <p class="text-white text-center text-lg mb-4">{{ $item['text3'] }}</p>
                  <a href="{{ $item['button_link'] }}">
                    <div
                      class="rounded-full transition-all text-center w-16 h-16 bg-yellow-400 leading-5 text-sm font-semibold pt-2 mx-auto sticky -mb-8 group-hover:bg-black group-hover:text-white cursor-pointer">
                     {{ $item['btn_name'] }}</div>
                  </a>
                </div>
              </div>
              @endforeach
            </div>

            <div class="mt-24">
              <div class="swiper-pagination2"></div>
            </div>
            <!-- <div class="flex  mt-8 justify-between z-40 w-full absolute top-[49%]  left-0">
              <div id="slide-prev2"><i
                  class="fa-solid fa-circle-chevron-left text-5xl text-[#F20C1F] bg-white hover:text-black rounded-full opacity-55 "></i>
              </div>
              <div id="slide-next2"><i
                  class="fa-solid fa-circle-chevron-right text-5xl text-[#F20C1F] bg-white hover:text-black rounded-full opacity-55 "></i>
              </div>
            </div>
            </div> -->
          </div>
        </section>
    @endif
@endif